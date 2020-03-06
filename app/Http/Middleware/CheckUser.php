<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckUser
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
      $user = $request->user();
        if(Auth::check() && $user && $user->status == 'chief'){
                  return redirect('chief');
              }elseif (Auth::check() && $user && $user->status == '3') {
                //dd($all);
              return redirect('personnel');
              }else {
                  return redirect('index');
              }
            }
          }
