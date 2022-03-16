<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'User'],function () {
    Route::post('/sign-up', 'Auth@signup');
    Route::post('/sign-in', 'Auth@signin');

    // subscribe_newsletter
    Route::get('/subscribe_newsletter', 'Auth@subscribe_newsletter');
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function(){
    Route::get('/sign-in', 'Auth@signin');
    Route::post('/sign-in', 'Auth@signin_now');
    Route::get('/logout', function(){
        setcookie(sha1('is_admin_signed_in_kef_investment'),sha1('admin_signed_in'), (time() - (86400 * 3665) ),"/");
        setcookie(sha1('kef_admin_id'),'', (time() - (86400 * 3665) ),"/");
        return redirect('/admin');
    });

    Route::middleware(['admin_auth'])->group(function () {
        Route::get('/', 'Home@home');

        // packages
        // create-package
        // cloudinary://529515866477775:H5ZspLw-d4NbS6CCXDvaeo_CWck@hemscbc7y
        Route::group([ 'prefix' => 'package'], function(){
            Route::get('/create', 'Package@create');
            Route::post('/create', 'Package@create_now');
            Route::get('/view', 'Package@view');
            Route::get('/edit/{p_id}', 'Package@edit');
            Route::post('/edit/{p_id}', 'Package@edit_now');
        });

        // others
        // view-investors
        // newsletter
        Route::get('/newsletter', 'Others@newsletter');
        Route::get('/view-investors', 'Others@view_investors');
        Route::get('/view-investments/{i_id?}', 'Others@view_investments_new');
        Route::get('/update-investment/{sl_id}/{status}', 'Others@update_');
        Route::get('/view-kyc/{i_id}', 'Others@view_kyc');
        Route::get('/update-kyc/{status}/{i_id}', 'Others@update_kyc');
        Route::get('/update-n-investment/{ih_id}', 'Others@update_investment_holder');
        Route::post('/update-n-investment/{ih_id}', 'Others@update_investment_holder_now');

        Route::get('/view-overview/{i_id}', 'Others@view_overflow');
        Route::post('/view-overview/{i_id}', 'Others@update_overflow');

        Route::get('/view-notification-pref/{i_id}', 'Others@view_noti_pref');
        // view-notification-pref
        // view-overview
        // update-n-investment

        // setting
        Route::get('/settings', function(){
            return view('admin.screen.settings.view');
        });
        Route::post('/settings', 'Others@settings');
    });
});