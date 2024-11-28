<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserName
{
   /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah session 'user_name' tersedia
        if (!session()->has('user_name')) {
            return redirect()->route('home.index')->with('error', 'Silakan masukkan nama terlebih dahulu.');
        }

        // Jika session ada, teruskan request
        return $next($request);
    }
}