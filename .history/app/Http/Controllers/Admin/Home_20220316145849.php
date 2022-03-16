<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    //
    public function home(){
        $dt = DB::select('SELECT * from sample_doc as a INNER JOIN sample_users as b ON b.sa_user=a.user_id', []);
        return view('admin.home')->with('data', $dt);
    }

    public function create_customer(Request $request){
        $email = strtolower($request->email);
        $password = strtolower($request->password);

        DB::insert('INSERT INTO sample_users(email, password) VALUES(?, ?)', [$email, $password]);
        return redirect('/admin/list-customer');
    }


}
