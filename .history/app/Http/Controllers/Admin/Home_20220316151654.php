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
        $front_image = $request->upload_file;

        $image_fileName = '';

        if($front_image != ''){
            // check if image is uploaded
            // move logic
            $image_fileName = time().rand(0,99).".".$front_image->extension();

            if( !($front_image->move(public_path('files'),$image_fileName)) ){
                $front_image_url = $image_fileName;
            }else{
                $front_image_url = $image_fileName;
            }

            DB::insert("INSERT INTO sample_doc(user_id, doc_link) VALUES(?, ?)", [$customer_id, $image_fileName]);

            return redirect('/admin');
        }
    }


}
