<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Others;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use SebastianBergmann\Environment\Console;

class Home extends Controller
{
    //

    public function dashboard(){
        $id = base64_decode($_COOKIE[sha1('kef_user_id')]);
        // get packages info
        $dt = DB::select('SELECT * from subscription_linker where i_id = ? ORDER BY sl_id DESC', [$id]);

        // get user data list or create if none
        $investor = Others::get_user_data($id);

        // return view('user.dashboard')->with('data', $dt);
        return view('new-user.dashboard')->with('data', $dt)->with('investor', $investor);
    }

    public function investment(){
        $db_ = DB::select('SELECT * from packages WHERE status = ?', [1]);
        $db = [];
        for ($i=0; $i < count($db_); $i++) {
            $new_cur_am = Others::to_user_currency($db_[$i]->p_currency, $db_[$i]->p_amount);
            $db[$i] = [
                'p_id' =>$db_[$i]->p_id,
                'p_name' =>$db_[$i]->p_name,
                'p_desc' =>$db_[$i]->p_desc,
                'p_currency' =>$db_[$i]->p_currency,
                'p_amount' =>$db_[$i]->p_amount,
                'interest_rate' =>$db_[$i]->interest_rate,
                'duration' =>$db_[$i]->duration,
            ];
        }
        return view('user.investment')->with('data', $db);
    }

    public function checkout($p_id){
        $db_ = DB::select('SELECT * from packages WHERE status = ? AND p_id = ?', [1, $p_id]);
        $db = [];
        for ($i=0; $i < count($db_); $i++) {
            $new_cur_am = Others::to_user_currency($db_[$i]->p_currency, $db_[$i]->p_amount);
            $db[$i] = [
                'p_id' =>$db_[$i]->p_id,
                'p_name' =>$db_[$i]->p_name,
                'p_desc' =>$db_[$i]->p_desc,
                'p_currency' =>$new_cur_am['currency'],
                'p_amount' =>$new_cur_am['amount'],
                'interest_rate' =>$db_[$i]->interest_rate,
                'duration' =>$db_[$i]->duration,
            ];
        }
        return view('user.checkout')->with('data', $db[0]);
    }

    public function checkout_now($p_id, Request $request){
        $payment_method = $request->payment_method;
        $db_ = DB::select('SELECT * from packages WHERE status = ? AND p_id = ?', [1, $p_id]);
        $db = [];
        for ($i=0; $i < count($db_); $i++) {
            $new_cur_am = Others::to_user_currency($db_[$i]->p_currency, $db_[$i]->p_amount);
            $db = [
                'p_id' =>$db_[$i]->p_id,
                'p_name' =>$db_[$i]->p_name,
                'p_desc' =>$db_[$i]->p_desc,
                'p_currency' =>$new_cur_am['currency'],
                'p_amount' =>$new_cur_am['amount'],
                'interest_rate' =>$db_[$i]->interest_rate,
                'duration' =>$db_[$i]->duration,
            ];
        }

        $id = base64_decode($_COOKIE[sha1('kef_user_id')]);
        $iv_dt = DB::select('SELECT * from investors where i_id = ?', [$id])[0];

        $tnx_ref = strtotime('now').rand(0,100).rand(0,100);
        $redirect_url = url('confirm-payment-'.$payment_method);
        $callback_url = url('confirm-payment-'.$payment_method);
        if( $payment_method == 'flutterwave'){
            $url = "https://api.flutterwave.com/v3/payments";
            // $url = "https://ravesandboxapi.flutterwave.com/v3/payments";
            $fields = [
                'tx_ref' => $tnx_ref,
                'amount' => $db['p_amount'],
                'currency' => $db['p_currency'],
                'payment_options' => 'card',
                'redirect_url' => $callback_url,
                'customer' => [
                        'email' => $iv_dt->email,
                        'phonenumber' => '08134749451',
                        'name' => $iv_dt->name
                    ],
                'customizations' => [
                        'title' => 'Payment For Plan: '.$db['p_name'],
                        'description' => $db['p_name'],
                        'logo' => 'https://miro.medium.com/max/3150/1*Z1GByNW4KCR8HNCUjbgzdA.png',
                    ]
            ];
            // $fields_string = http_build_query($fields);
            $fields_string = json_encode($fields);

            // die($fields_string);

            //open connection
            $ch = curl_init();

            //set the url, number of POST vars, POST data
            curl_setopt($ch,CURLOPT_URL, $url);
            curl_setopt($ch,CURLOPT_POST, true);
            curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                "Authorization: Bearer ".env('FW_SECRET'),
                "Cache-Control: no-cache",
                "Content-Type: application/json"
            ));

            //So that curl_exec returns the contents of the cURL; rather than echoing it
            curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

            //execute post
            $result = curl_exec($ch);
            $result = json_decode($result);

            if($result->status == 'success'){
                $redirect_url = $result->data->link;
            }else{
                die($result->message);
            }

        }else if( $payment_method == 'paypal'){
            // pay using paypal
            $paypalConfig = [
                'email' => env('PAYPAL_EMAIL'),
                'return_url' => $callback_url,
                'cancel_url' => url(''),
                'notify_url' => url('')
            ];
            $enableSandbox = env('PAYPAL_SANDBOX');

            $paypalUrl = $enableSandbox ? 'https://www.sandbox.paypal.com/cgi-bin/webscr' : 'https://www.paypal.com/cgi-bin/webscr';

            $data = [];
            $data['business']  = $paypalConfig['email'];
            $data['return'] = stripslashes($paypalConfig['return_url']);
            $data['cancel_return'] = stripslashes($paypalConfig['cancel_url']);
            $data['notify_url'] = stripslashes($paypalConfig['notify_url']);
            $data['item_name'] = $db['p_name'];
            $data['amount'] = $db['p_amount'];
            $data['currency_code'] = $db['p_currency'];
            $data['tnx_ref'] = $tnx_ref;

            $queryString = http_build_query($data);

            $redirect_url = $paypalUrl . '?' . $queryString;
        }else if( $payment_method == 'crypto'){
            $redirect_url = url('/crypto-wallet:'.$tnx_ref);
        }

        DB::insert('INSERT into subscription_linker (i_id, p_id, payment_method, i_currency, i_duration, i_amount, i_rate, g_amount, day_count, last_date_gain, status, tnx_ref) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
        [$id, $p_id, $payment_method, $db['p_currency'], $db['duration'], $db['p_amount'], $db['interest_rate'], '0', '0', date('d-m-Y'), 0, $tnx_ref]);

        return redirect($redirect_url);
    }

    public function confirm_payment($method, Request $request){
        if($method == 'flutterwave'){
            $status = $request->status;
            if($status == "successful"){
                $tx_ref = $request->tx_ref;
                DB::update('UPDATE subscription_linker set status = 1 where tnx_ref = ?', [$tx_ref]);
                return redirect('/dashboard');
                // update record of transaction
            }else{
                die('an error occurred');
            }
        }else if($method == 'paypal'){
            $tnx_ref = $request->tnx_ref;

            if (Home::verifyTransaction($_POST)) {
                $payment_status = $request->payment_status;

                if( strtolower($payment_status) == 'completed'){
                    DB::update('UPDATE subscription_linker set status = 2 where tnx_ref = ?', [$tnx_ref]);
                    return redirect('/dashboard');
                }
            }
        }
    }


    // verify
    public static function verifyTransaction($data) {
        global $paypalUrl;

        $req = 'cmd=_notify-validate';
        foreach ($data as $key => $value) {
            $value = urlencode(stripslashes($value));
            $value = preg_replace('/(.*[^%^0^D])(%0A)(.*)/i', '${1}%0D%0A${3}', $value); // IPN fix
            $req .= "&$key=$value";
        }

        $ch = curl_init($paypalUrl);
        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $req);
        curl_setopt($ch, CURLOPT_SSLVERSION, 6);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_FORBID_REUSE, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Connection: Close'));
        $res = curl_exec($ch);

        if (!$res) {
            $errno = curl_errno($ch);
            $errstr = curl_error($ch);
            curl_close($ch);
            die("cURL error: [$errno] $errstr");
        }

        $info = curl_getinfo($ch);

        // Check the http response
        $httpCode = $info['http_code'];
        if ($httpCode != 200) {
            die("PayPal responded with http code $httpCode");
        }
        curl_close($ch);

        return $res === 'VERIFIED';
    }

    public function crypto_viewer($tnx_ref){
        $type = env('BC_WALLET_NAME');
        $wallet = env('BC_WALLET');

        $data = (DB::select('SELECT * from subscription_linker where tnx_ref = ?', [$tnx_ref]))[0];

        return view('user.cypto')->with('type', $type)->with('wallet', $wallet)->with('data', $data);
    }

    public function crypto_viewer_now($tnx_ref, Request $request){
        DB::update('UPDATE subscription_linker set status = 1 where tnx_ref = ?', [$tnx_ref]);
        return redirect('/dashboard');
    }

    public function request_withdrawal($sl_id){
        DB::update('UPDATE subscription_linker set status = ? where sl_id = ?', [4, $sl_id]);
        try {
            // send mail to user
        } catch (\Throwable $th) {
            //throw $th;
        }
        return back();
    }

    // new functino for profile
    public function profile_screen(){
        $id = base64_decode($_COOKIE[sha1('kef_user_id')]);

        // get user data list or create if none
        $investor = Others::get_user_data($id);

        return view('new-user.profile')->with('investor', $investor);
    }

    public function profile_kyc_screen(){
        $id = base64_decode($_COOKIE[sha1('kef_user_id')]);

        // get user data list or create if none
        $investor = Others::get_user_data($id);

        return view('new-user.profile-kyc')->with('investor', $investor);
    }

    public function profile_notify(){
        $id = base64_decode($_COOKIE[sha1('kef_user_id')]);

        // get user data list or create if none
        $investor = Others::get_user_data($id);

        return view('new-user.profile-notify')->with('investor', $investor);
    }

    public function change_noti_pref(Request $request){
        $id = base64_decode($_COOKIE[sha1('kef_user_id')]);
        $noti_type = intval($request->id);
        // $noti_type = ($noti_type == '') ? ;
        $investor = Others::get_user_data($id)['investor'];

        switch ($noti_type) {
            case 1:
                $new_noti = (intval($investor->noti1) == 1) ? 0 : 1;
                DB::update('UPDATE investors set noti1 = ? where i_id = ?', [$new_noti, $id]);
                break;

            case 2:
                $new_noti = (intval($investor->noti2) == 1) ? 0 : 1;
                DB::update('UPDATE investors set noti2 = ? where i_id = ?', [$new_noti, $id]);
                break;

            case 3:
                $new_noti = (intval($investor->noti3) == 1) ? 0 : 1;
                DB::update('UPDATE investors set noti3 = ? where i_id = ?', [$new_noti, $id]);
                break;

            case 4:
                $new_noti = (intval($investor->noti4) == 1) ? 0 : 1;
                DB::update('UPDATE investors set noti4 = ? where i_id = ?', [$new_noti, $id]);
                break;

            case 5:
                $new_noti = (intval($investor->noti5) == 1) ? 0 : 1;
                DB::update('UPDATE investors set noti5 = ? where i_id = ?', [$new_noti, $id]);
                break;
            
            default:
                # code...
                break;
        }

        return true;
    }

    public function profile_kyc_post(Request $request){
        $id = base64_decode($_COOKIE[sha1('kef_user_id')]);
        // get user data list or create if none
        $investor = Others::get_user_data($id);

        $front_image = $request->front_image;
        $front_image_url = '';
        $back_image = $request->back_image;
        $back_image_url = '';

        // print_r($request->all());
        // die('');
        try {
            //code...
            if($front_image != ''){
                // check if image is uploaded
                // move logic
                $image_fileName = time().rand(0,99).".".$front_image->extension();
    
                if( !($front_image->move(public_path('images/kyc'),$image_fileName)) ){
                    $front_image_url = $image_fileName;
                }else{
                    $front_image_url = $image_fileName;
                }
            }else{
    
            }

            if($back_image != ''){
                // check if image is uploaded
                // move logic
                $image_fileName = time().".".$back_image->extension();
    
                if( !($back_image->move(public_path('images/kyc'),$image_fileName)) ){
                    $back_image_url = $image_fileName;
                }else{
                    $back_image_url = $image_fileName;
                }
            }else{
    
            }

            
        } catch (\Throwable $th) {
            //throw $th;
            die($th->getMessage());
        }
        

        if(intval($investor['data']->status) == 0){
            // initial verification
            DB::update('UPDATE user_details SET doc1 = ?, doc2 = ?, first_name = ?, last_name = ?, phone = ?, dob = ?, telegram_un = ?, address1 = ?, address2 = ?, city = ?, state = ?, nationality = ?, zipcode = ?, status = 1 WHERE u_id = ?',
            [$front_image_url, $back_image_url, $request->fname, $request->lname, $request->phone, $request->dob, $request->telegram_username, $request->address1, $request->address2, $request->city, $request->state, $request->nationality, $request->zipcode, $id]);
        }else{
            // just updating
            DB::update('UPDATE user_details SET doc1 = ?, doc2 = ?, first_name = ?, last_name = ?, phone = ?, dob = ?, telegram_un = ?, address1 = ?, address2 = ?, city = ?, state = ?, nationality = ?, zipcode = ? WHERE u_id = ?',
            [$front_image_url, $back_image_url, $request->fname, $request->lname, $request->phone, $request->dob, $request->telegram_username, $request->address1, $request->address2, $request->city, $request->state, $request->nationality, $request->zipcode, $id]);
        }

        return redirect('pending-kyc-approval');
    }

    public function pending_kyc_approval(){
        return view('new-user.pending_kyc_approval');
    }

    public function invest_plan(){
        $dt = DB::select('SELECT * from packages where status = ?', [1]);
        return view('new-user.invest_plan')->with('data', $dt);
    }

    public function invest_form($p_id = 0){
        // return $p_id;
        $dt = DB::select('SELECT * from packages where status = ?', [1]);
        $selected_dt = DB::select('SELECT * from packages where status = ? AND p_id = ?', [1, $p_id])[0];
        return view('new-user.invest_form')->with('data', $dt)->with('p_id', $p_id)->with('selected_dt', $selected_dt);
    }

    public function post_invest_form($p_id, Request $request){
        $id = base64_decode($_COOKIE[sha1('kef_user_id')]);
        $amount = intval($request->amount);
        $selected_dt = DB::select('SELECT * from packages where status = ? AND p_id = ?', [1, $p_id])[0];

        $i_id = $selected_dt->p_id;
        $i_name = $selected_dt->p_name;
        $i_duration = $selected_dt->duration;
        $i_daily = (floatval($selected_dt->interest_rate) / (floatval($selected_dt->duration) * 30));
        $start = date('d-M-Y');
        $end = date('d-M-Y', strtotime('+ 3 month'));
        $interest_total_return = (floatval($selected_dt->interest_rate) / $amount) * 100;
        $net_profit = $interest_total_return + $amount;

        DB::insert('INSERT INTO investment_holder (user_id, i_id, investment_name, investment_duration, investment_daily, investment_amount, start_date, end_date, total_return, net_profit, status) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
        [$id, $i_id, $i_name, $i_duration, $i_daily, $amount, $start, $end, $interest_total_return, $net_profit, '0']);

        try {
            $email = 'mistapsalm90@gmail.com';

            $customer_dt = DB::select('SELECT * from investors where i_id = ?', [$id])[0];
            $customer_email = $customer_dt->email;

            $message = "New Investment waiting validation for $customer_email";
            $data = ['name'=> $customer_dt->name, 'email_title'=>'new Investment pending approval', 'message_s'=> $message, 'email'=> $email];
            Mail::send('email_template.general', $data, function($message) use($data) {
                $message->to($data['email'], 'Doctor')->subject
                    ('New Investment waiting validation.');
                $message->from(env('MAIL_FROM_ADDRESS'),'Do not Reply');
            });

        } catch (\Throwable $th) {
            //throw $th;
        }

        return redirect('/investment-successfully-request');
    }

    public function investment_successfully_request(){
        return view('new-user.investment_successfully_request');
    }

    public function myi_plan(){
        $id = base64_decode($_COOKIE[sha1('kef_user_id')]);
        $plans = DB::select('SELECT * from investment_holder where user_id = ? AND status = 1', [$id]);
        $ended = DB::select('SELECT * from investment_holder where user_id = ? AND status = 2', [$id]);
        $pending_plans = count(DB::select('SELECT * from investment_holder where user_id = ? AND status = 0', [$id]));

        return view('new-user.myi-plan')->with('plans', $plans)->with('pending', $pending_plans)->with('ended', $ended);
    }

    public function update_profile_password(Request $request){
        $id = base64_decode($_COOKIE[sha1('kef_user_id')]);
        $old_password = sha1(strtolower($request->old_password));
        $new_password = sha1(strtolower($request->new_password));

        // check if password matches
        $db = DB::select('SELECT * from investors where i_id = ? AND password = ?', [$id, $old_password]);

        if( count($db) == 0 ){
            return "
                <script>
                    alert('password doesnt match');
                    window.location.href='".url('/profile')."';
                </script>
            ";
        }else{
            DB::update('UPDATE investors set password = ? where i_id = ?', [$new_password, $id]);
            return "
                <script>
                    alert('password changed');
                    window.location.href='".url('/profile')."';
                </script>
            ";
        }
    }
}
