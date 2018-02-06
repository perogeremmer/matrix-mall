<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class checkLoginSupplier
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
        if(Session::get('supplier_isLogin')){
            return $next($request);
        }
        else{
            return redirect()->to('supplier/login')->with('response-error','You should login before enter!');
        }
    }
}
