<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Auth extends Controller
{
    //
    public function signin(){
        return view('admin.signin');
    }

    public function signin_now(Request $request){
        $email = $request->email;
        $password = ($request->password);
        $res_data = [];
        // $res_data = DB::select('SELECT * from admin_info where a_username = ? AND a_password = ?', [$email, $password]);
        if($email == 'testadmin@gmail.com' && $password == 'Password123'){
            $res_data[0] = (object)[
                'a_status' => 1,
                'a_id' => 1,
            ];
        }else{

        }

        if( count($res_data)  != 0 ){
            if(intval($res_data[0]->a_status) == 0){
                return view('admin.signin')->with('error', 'Account Disabled');
            }
            setcookie(sha1('is_admin_signed_in_kef_investment'),sha1('admin_signed_in'), (time() + (86400 * 365) ),"/");
            setcookie(sha1('kef_admin_id'),base64_encode($res_data[0]->a_id), (time() + (86400 * 365) ),"/");

            return redirect('/admin');
        }else{
            return view('admin.signin')->with('error', 'Account not Found');
        }

    }
}
