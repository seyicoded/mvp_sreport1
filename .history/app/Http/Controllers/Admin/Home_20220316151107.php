<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    //
    public function home(){
        $dt = DB::select('SELECT * from sample_doc as a INNER JOIN sample_users as b ON b.sa_user=a.user_id ORDER BY a.sd_id DESC', []);
        $user = DB::select('SELECT * from sample_users', []);
        return view('admin.home')->with('data', $dt)->with('users', $user);
    }

    public function create_customer(Request $request){
        $email = strtolower($request->email);
        $password = strtolower($request->password);

        DB::insert('INSERT INTO sample_users(email, password) VALUES(?, ?)', [$email, $password]);
        return redirect('/admin/list-customer');
    }

    public function create_new_entry(Request $request){
        $customer_id = $request->customer_id;
        $file = $request->file;


    }


}
