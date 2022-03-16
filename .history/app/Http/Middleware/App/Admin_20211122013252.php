<?php

namespace App\Http\Middleware\App;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!(isset($_COOKIE[sha1('is_admin_signed_in_kef_investment')]))){
            //echo 'a';
            return redirect(url('admin/sign-in'));
            // echo '1';
            // return $next($request);
        }
        try {
            $path = base_path();
            exec($path." php artisan schedule:run > /dev/null 2>&1");
        } catch (\Throwable $th) {
            //throw $th;
        }

        return $next($request);
    }
}
