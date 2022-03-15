<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Others extends Controller
{
    //
    public function view_investors(){
        $dt = DB::select('SELECT * from investors ORDER BY i_id DESC', []);
        return view('admin.screen.investor.view')->with('data', $dt);
    }

    public function view_kyc($i_id){
        $u_dt = DB::select('SELECT * from investors where i_id = ?', [$i_id])[0];
        $kyc_dt = DB::select('SELECT * from user_details where u_id = ?', [$i_id]);
        return view('admin.screen.kyc.view')->with('data', [
            'u_dt' => $u_dt,
            'kyc_dt' => $kyc_dt,
        ]);
    }

    public function view_noti_pref($i_id){
        $user = DB::select('SELECT * from investors where i_id = ?', [$i_id])[0];
        return view('admin.screen.investor.noti_view')->with('data', $user);
    }

    public function update_kyc($status, $i_id){
        DB::update('UPDATE user_details set status = ? where u_id = ?', [$status, $i_id]);
        try {
            $u_dt = DB::select('SELECT * from investors where i_id = ?', [$i_id])[0];
            $email = $u_dt->email;

            $message = "KYC verification successful";
            $data = ['name'=>"KYC", 'email_title'=>'KYC APPROVAL', 'message_s'=> $message, 'email'=> $email];
            Mail::send('email_template.general', $data, function($message) use($data) {
                $message->to($data['email'], 'Doctor')->subject
                    ('KYC verification successful.');
                $message->from(env('MAIL_FROM_ADDRESS'),'Do not Reply');
            });
        } catch (\Throwable $th) {
            //throw $th;
        }
        return back();
    }

    public function view_overflow($i_id){
        $user = DB::select('SELECT * from investors where i_id = ?', [$i_id])[0];

        return view('admin.screen.view_overview')->with('data', $user);
    }

    public function update_overflow($i_id, Request $request){
        $deposit_balance = $request->deposit_balance;
        $return_investment = $request->return_investment;
        $rerturn_pect = $request->rerturn_pect;
        $i_duration = $request->i_duration;
        $i_start = $request->i_start;
        $i_end = $request->i_end;
        $status = $request->status;

        // i_id, name, email, password, currency, status, date, deposit_balance, return_investment, investment_duration, available_balance, toal_invested, total_profits, return_on_i_pect
        DB::update('UPDATE investors set deposit_balance = ?, return_investment = ?, investment_duration = ?, available_balance = ?, toal_invested = ?, total_profits = ?, return_on_i_pect = ? where i_id = ?',
        [$deposit_balance, $return_investment, $i_duration, $i_start, $i_end, $status, $rerturn_pect, $i_id]);
        return back();
    }

    // new
    public function view_investments_new($i_id){
        $db = null;
        if(intval($i_id) == 0){
            $db = DB::select('SELECT * from investment_holder ORDER BY status DESC', []);
        }else{
            $db = DB::select('SELECT * from investment_holder WHERE user_id = ? ORDER BY status DESC', [$i_id]);
        }

        $dt = [];
        for ($i=0; $i < count($db); $i++) {
            $dt[$i] = [
                'name' => DB::select('SELECT * from investors where i_id = ?', [$db[$i]->user_id])[0]->name,
                'data' => $db[$i]
            ];
        }

        // print_r($dt);
        return view('admin.screen.new-investment.view')->with('data', $dt);
    }

    public function update_investment_holder($ih_id){
        $db = null;
        if(intval($ih_id) == 0){
            $db = DB::select('SELECT * from investment_holder ORDER BY status DESC', []);
        }else{
            $db = DB::select('SELECT * from investment_holder WHERE ih_id = ? ORDER BY status DESC', [$ih_id]);
        }

        $dt = [];
        for ($i=0; $i < count($db); $i++) {
            $dt[$i] = [
                'name' => DB::select('SELECT * from investors where i_id = ?', [$db[$i]->user_id])[0]->name,
                'data' => $db[$i]
            ];
        }

        // print_r($dt);
        return view('admin.screen.new-investment.update')->with('data', $dt[0]);
    }

    public function update_investment_holder_now($ih_id, Request $request){
        // extra data
        $name = $request->name;
        $duration = $request->duration;
        $daily = $request->daily;
        $amount = $request->amount;
        $start = $request->start;
        $end = $request->end;
        $returns = $request->returns;
        $profits = $request->profits;
        $status = $request->status;

        // code to update
        DB::update('UPDATE investment_holder SET investment_name = ?, investment_duration = ?, investment_daily = ?, investment_amount = ?, start_date = ?, end_date = ?, total_return = ?, net_profit = ?, status = ? WHERE ih_id = ?',
        [$name, $duration, $daily, $amount, $start, $end, $returns, $profits, $status, $ih_id]);

        try {
            $db = DB::select('SELECT * from investment_holder where ih_id = ?', [$ih_id])[0];
            $customer_dt = DB::select('SELECT * from investors where i_id = ?', [$db->user_id])[0];
            $customer_email = $customer_dt->email;

            switch (intval($status) ) {
                case 0:
                    $status = 'Pending Approval';
                    break;

                case 1:
                    $status = 'Active';
                    break;

                case 2:
                    $status = 'Finished';
                    break;

                case 2:
                    $status = 'Declined';
                    break;
                
                default:
                    # code...
                    break;
            }

            $message = "Investment Success updated to $status";
            $data = ['name'=> $customer_dt->name, 'email_title'=>'Investment Status Updated', 'message_s'=> $message, 'email'=> $customer_email];

            Mail::send('email_template.general', $data, function($message) use($data) {
                $message->to($data['email'], 'Doctor')->subject
                    ('Investment Status Updated.');
                $message->from(env('MAIL_FROM_ADDRESS'),'Do not Reply');
            });
        } catch (\Throwable $th) {
            //throw $th;
        }

        return back();

    }

    public function view_investments($i_id){
        $db = null;
        if(intval($i_id) == 0){
            $db = DB::select('SELECT * from subscription_linker ORDER BY status DESC', []);
        }else{
            $db = DB::select('SELECT * from subscription_linker WHERE i_id = ? ORDER BY status DESC', [$i_id]);
        }

        $dt = [];
        for ($i=0; $i < count($db); $i++) {
            $dt[$i] = [
                'p_name' => DB::select('SELECT * from packages where p_id = ?', [$db[$i]->p_id])[0]->p_name,
                'name' => DB::select('SELECT * from investors where i_id = ?', [$db[$i]->i_id])[0]->name,
                'data' => $db[$i]
            ];
        }

        // print_r($dt);
        return view('admin.screen.investment.view')->with('data', $dt);
    }

    public function update_($sl_id, $status){
        DB::update('UPDATE subscription_linker set status = ? where sl_id = ?', [$status, $sl_id]);
        $status = '';
        switch (intval($status)) {
            case 0:
                $status = "Pending Payment";
                break;

            case 1:
                $status = "(Paid) Pending Admin Approval";
                break;

            case 2:
                $status = "Active";
                break;

            case 3:
                $status = "Finished";
                break;

            case 4:
                $status = "Pending Withdrawal";
                break;

            case 5:
                $status = "Withdrew";
                break;

            case 6:
                $status = "Cancelled";
                break;

            default:
                # code...
                break;
        }
        try {
            // send mail to user
            // get $email
            $email = (DB::select('SELECT * from subscription_linker as a INNER JOIN investors as b ON a.i_id=b.i_id where a.sl_id = ?', [$sl_id]))[0]->email;

            $message = "Present Status of your investment has been moved to: $status";
            $data = ['name'=>"Status Update", 'email_title'=>'Investment Status Update', 'message_s'=> $message, 'email'=> $email];
            Mail::send('email_template.general', $data, function($message) use($data) {
                $message->to($data['email'], 'Doctor')->subject
                    ('Urgent: A Patient requires your attention for an appointment, Treat Please.');
                $message->from(env('MAIL_FROM_ADDRESS'),'Do no Reply');
            });

        } catch (\Throwable $th) {
            //throw $th;
        }
        return back();
    }

    public function settings(Request $request){
        try {
            Others::setEnvironmentValue('BC_WALLET_NAME', $request->crypto_name);
            Others::setEnvironmentValue('BC_WALLET', $request->crypto_address);
            Others::setEnvironmentValue('MAIL_HOST', $request->mh);
            Others::setEnvironmentValue('MAIL_PORT', $request->mp);
            Others::setEnvironmentValue('MAIL_USERNAME', $request->mu);
            Others::setEnvironmentValue('MAIL_PASSWORD', $request->mpass);
            Others::setEnvironmentValue('MAIL_ENCRYPTION', $request->me);
            Others::setEnvironmentValue('MAIL_FROM_ADDRESS', $request->mfa);
        } catch (\Throwable $th) {
            //throw $th;
        }
        return back();
    }

    public static function setEnvironmentValue($key, $value) {
        // $path = $_SERVER['DOCUMENT_ROOT'] . '/.env';
        $path = base_path('.env');

        if(is_bool(env($key)))
        {
            $old = env($key)? 'true' : 'false';
        }
        elseif(env($key)===null){
            $old = 'null';
        }
        else{
            $old = env($key);
        }

        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                "$key=".$old, "$key=".$value, file_get_contents($path)
            ));
        }
    }

    public function newsletter(){
        $news = DB::select('SELECT * from newsletter_list where status = ?', [1]);
        // Error Code: 1142. CREATE command denied to user 'be791e7a01382c'@'ip-10-0-113-69.ec2.internal' for table 'newsletter_list'

        return view('admin.screen.newsletter')->with('news', $news);
    }
}
