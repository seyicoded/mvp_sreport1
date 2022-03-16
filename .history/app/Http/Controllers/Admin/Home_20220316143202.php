<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Home extends Controller
{
    //
    public function home(){
        return view('admin.home');
    }

    public function create_customer(Request $request){
        $email = $request->email;
        $password = $request->password;
    }


}
