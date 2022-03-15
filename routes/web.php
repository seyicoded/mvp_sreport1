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

Route::get('/about', function () {
    return view('about');
});

Route::get('/asset-classes', function () {
    return view('asset_classes');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/user-logout', function () {
    setcookie(sha1('is_user_signed_in_kef_investment'),'', (time() + (86400 * 365) ),"/");
    setcookie(sha1('kef_user_id'),'', (time() - (86400 * 365) ),"/");
    setcookie(sha1('kef_user_name'),'', (time() - (86400 * 365) ),"/");
    return redirect('/');
});
// user-logout

// support-security
Route::get('/support-security', function () {
    return view('security');
});

Route::group(['namespace' => 'User'],function () {
    Route::post('/sign-up', 'Auth@signup');
    Route::post('/sign-in', 'Auth@signin');

    // reset-password
    Route::get('/reset-password', 'Auth@reset_password');
    Route::get('/reset-p_n', 'Auth@reset_page');
    Route::post('/reset-p_n', 'Auth@reset_page_now');
    // reset-p_n

    // subscribe_newsletter
    Route::get('/subscribe_newsletter', 'Auth@subscribe_newsletter');

    Route::middleware(['user_auth'])->group(function () {
        Route::get('/dashboard', 'Home@dashboard');
        Route::get('/investment', 'Home@investment');
        Route::get('/checkouts:{p_id}', 'Home@checkout');
        Route::post('/checkouts:{p_id}', 'Home@checkout_now');
        Route::get('/confirm-payment-{method}', 'Home@confirm_payment');
        Route::get('/crypto-wallet:{tnx_ref}', 'Home@crypto_viewer');
        Route::post('/crypto-wallet:{tnx_ref}', 'Home@crypto_viewer_now');

        Route::get('/request-withdrawal/{sl_id}', 'Home@request_withdrawal');
        // request-withdrawal/{sl_id}
        // investment

        // new route for new design
        Route::get('/profile', 'Home@profile_screen');
        Route::post('/profile', 'Home@update_profile_password');
        // profile-kyc
        Route::get('/profile-kyc', 'Home@profile_kyc_screen');
        Route::post('/profile-kyc', 'Home@profile_kyc_post');
        Route::get('/pending-kyc-approval', 'Home@pending_kyc_approval');
        Route::post('/pending-kyc-approval', 'Home@pending_kyc_approval');
        Route::get('/invest-plan', 'Home@invest_plan');
        Route::get('/invest-form/{p_id?}', 'Home@invest_form');
        Route::get('/post-invest_form/{p_id?}', 'Home@post_invest_form');
        Route::get('/investment-successfully-request', 'Home@investment_successfully_request');
        Route::get('/myi-plan', 'Home@myi_plan');
        Route::get('/profile-notify', 'Home@profile_notify');
        Route::get('/change_noti_pref', 'Home@change_noti_pref');
        
        
        
        // investment-successfully-request
        // post-invest_form
        
        
        // pending-kyc-approval
    });
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

Route::get('/testmail', function () {
            $email = 'mistapsalm90@gmail.com';

            $message = "Test Mail from code";
            $data = ['name'=>"Test", 'email_title'=>'Test Mail', 'message_s'=> $message, 'email'=> $email];
            Mail::send('email_template.general', $data, function($message) use($data) {
                $message->to($data['email'], 'Doctor')->subject
                    ('Test Mail.');
                $message->from(env('MAIL_FROM_ADDRESS'),'Pro-Returns');
            });
    return '';
});
