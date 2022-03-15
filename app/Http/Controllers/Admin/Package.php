<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Package extends Controller
{
    //
    public function create(){
        return view('admin.screen.package.create');
    }

    public function create_now(Request $request){
        $name = $request->name;
        $description = $request->description;
        $currency = $request->currency;
        $currency = ($currency == '') ? 'USD':$currency;
        $amount = $request->amount;
        $max_amount = $request->max_amount;
        $rate = $request->rate;
        $duration = $request->duration;

        DB::insert('INSERT into packages (p_name, p_desc, p_currency, minimum_amount, interest_rate, status, duration, maximum_amount, p_amount) values (?, ?, ?, ?, ?, ?, ?, ?, ?)',
        [$name, $description, $currency, $amount, $rate, 1, $duration, $max_amount, $amount]);

        return redirect('/admin/package/view');
    }

    public function view(){
        $db = DB::select('SELECT * from packages ORDER BY p_id DESC', []);
        return view('admin.screen.package.view')->with('data', $db);
    }

    public function edit($p_id){
        $db = DB::select('SELECT * from packages WHERE p_id = ?', [$p_id])[0];
        return view('admin.screen.package.edit')->with('data', $db);
    }

    public function edit_now($p_id, Request $request){
        $name = $request->name;
        $description = $request->description;
        $currency = $request->currency;
        $currency = ($currency == '') ? 'USD':$currency;
        $amount = $request->amount;
        $max_amount = $request->max_amount;
        $rate = $request->rate;
        $duration = $request->duration;

        DB::insert('UPDATE packages SET p_name = ?, p_desc = ?, p_currency = ?, minimum_amount = ?, interest_rate = ?, status = ?, duration = ?, maximum_amount = ?, p_amount = ? WHERE p_id = ?',
        [$name, $description, $currency, $amount, $rate, 1, $duration, $max_amount, $amount, $p_id]);

        return redirect('/admin/package/view');
    }
}
