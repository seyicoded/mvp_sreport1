<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Auth extends Controller
{
    //
    public function signup(Request $request){
        $name = $request->name;
        $email = strtolower($request->email);
        $password = strtolower($request->password);
        $re_password = strtolower($request->re_password);
        $currency = $request->currency;

        if($password != $re_password){
            die("<script>alert('password doesn\'t match'); window.history.go(-1);</script>");
            return '';
        }

        DB::insert('INSERT into investors (name, email, password, currency, status) values (?, ?, ?, ?, ?)',
        [$name, $email, sha1($password), $currency, 1]);

        $db = DB::select('SELECT * from investors where email = ? AND password = ?', [$email, sha1($password)])[0];

        setcookie(sha1('is_user_signed_in_kef_investment'),sha1('user_signed_in'), (time() + (86400 * 365) ),"/");
        setcookie(sha1('kef_user_id'),base64_encode($db->i_id), (time() + (86400 * 365) ),"/");
        setcookie(sha1('kef_user_name'),base64_encode($name), (time() + (86400 * 365) ),"/");

        return redirect('/dashboard');
    }

    public function signin(Request $request){
        $email = strtolower($request->email);
        $password = strtolower($request->password);

        $db = DB::select('SELECT * from investors where email = ? AND password = ?', [$email, sha1($password)]);

        if(count($db) == 0){
            die("<script>alert('user account not found on server'); window.history.go(-1);</script>");
            return '';
        }

        $db = $db[0];

        setcookie(sha1('is_user_signed_in_kef_investment'),sha1('user_signed_in'), (time() + (86400 * 365) ),"/");
        setcookie(sha1('kef_user_id'),base64_encode($db->i_id), (time() + (86400 * 365) ),"/");
        setcookie(sha1('kef_user_name'),base64_encode($db->name), (time() + (86400 * 365) ),"/");

        return redirect('/dashboard');
    }

    public function reset_password(Request $request){
        $email = $request->email;

        // check if email exist
        $db = DB::select('SELECT * from investors where email = ?', [$email]);
        if(count($db) != 0){
            $db = $db[0];
            $encoded_email = base64_encode($email);
            $url = url('reset-p_n').'?i='.$encoded_email;
            // send mail to server

            $message = "Please click on the link to contact your password: <a style='color: blue' href='$url'>$url</a>";
            $data = ['name'=>$db->name, 'email_title'=>'Reset Password', 'message_s'=> $message, 'email'=> $email];
            Mail::send('email_template.general', $data, function($message) use($data) {
                $message->to($data['email'], 'Doctor')->subject
                    ('Password Reset Required.');
                $message->from(env('MAIL_FROM_ADDRESS'),'Pro-Returns');
            });
        
            return 'true';
        }else{
            return 'false';
        }
        
    }

    public function reset_page(Request $request){
        $email = base64_decode($request->i);
        $db = DB::select('SELECT * from investors where email = ?', [$email]);
        if(count($db) != 0){
            return view('admin.user_forget_password')->with('email', $email);
        }else{
            return 'false';
        }
    }

    public function reset_page_now(Request $request){
        // $email = $request->email;
        $email = base64_decode($request->i);
        $password = sha1(strtolower(base64_encode($request->password)));

        // check if email exist
        $db = DB::select('SELECT * from investors where email = ?', [$email]);
        if(count($db) != 0){
            $db = $db[0];
            // change password
            DB::update('UPDATE investors set password = ? where email = ?', [$password, $email]);

            setcookie(sha1('is_user_signed_in_kef_investment'),sha1('user_signed_in'), (time() + (86400 * 365) ),"/");
            setcookie(sha1('kef_user_id'),base64_encode($db->i_id), (time() + (86400 * 365) ),"/");
            setcookie(sha1('kef_user_name'),base64_encode($db->name), (time() + (86400 * 365) ),"/");

            return redirect('/dashboard');
        }else{
            return $email.$password;
        }
    }

    public function subscribe_newsletter(Request $request){
        $email = $request->subs_name;
        $dt = DB::select('SELECT * from newsletter_list where email = ?', [$email]);
        if(count($dt) == 0){
            DB::insert('INSERT into newsletter_list (email) values (?)', [$email]);
            return "
                <script>
                    alert('subscription successfully');
                    window.location.href='".url('')."'
                </script>
            ";
        }else{
            return "
                <script>
                    alert('already subscribed');
                    window.location.href='".url('')."'
                </script>
            ";
        }
        
    }


    public function get_file($file_name){
        $file_name = base64_decode($file_name);
        echo $file_name;

        if(!(isset($_COOKIE[sha1('is_user_signed_in_kef_investment')]))){
            //echo 'a';
            return view('signin')->with('redirect_url', url('').'/storage_cc/'.base64_encode($file_name));
            // echo '1';
            // return $next($request);
        }

        // 

        return redirect("files".'/'.$file_name);


    }
}
