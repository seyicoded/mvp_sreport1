<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Others extends Controller
{
    //
    public static function to_user_currency($currency, $amount){
        $user_id = base64_decode($_COOKIE[sha1('kef_user_id')]);
        $user_currency = DB::select('SELECT * from investors where i_id = ?', [$user_id])[0]->currency;

        $recieved_equ_to_one_usd = DB::select('SELECT * from app_currency where currency = ?', [$currency])[0]->one_usd_equal;
        $new_amount_usd = floatval($amount) / floatval($recieved_equ_to_one_usd);

        // convert new amount in usd to user currency
        $new_equ_to_ = DB::select('SELECT * from app_currency where currency = ?', [$user_currency])[0]->one_usd_equal;
        $new_amount = floatval($new_amount_usd) * floatval($new_equ_to_);

        return ['currency'=>$user_currency, 'amount' => $new_amount];
    }

    public static function get_user_data($id){
        if($id == 0){
            return [
                'investor'=> json_decode('{}', false),
                'data'=> json_decode('{}', false)
            ];
        }

        try {
            // get investor
            $user = DB::select('SELECT * from investors where i_id = ?', [$id])[0];
            // get investor's data
            $dt = DB::select('SELECT * from user_details where u_id = ?', [$id]);
            $data = null;
            if(count($dt) < 1){
                // details not created
                DB::insert('INSERT INTO user_details(u_id) VALUE(?)', [$id]);
                $dt = DB::select('SELECT * from user_details where u_id = ?', [$id]);
            }

            $data = $dt[0];

            return [
                'investor'=> $user,
                'data'=> $data
            ];

        } catch (\Throwable $th) {
            return [
                'investor'=> json_decode('{}', false),
                'data'=> json_decode('{}', false),
                'error'=> ['message' => $th->getMessage(), 'line' => $th->getLine(), 'user' => $dt]
            ];
        }
    }

}
