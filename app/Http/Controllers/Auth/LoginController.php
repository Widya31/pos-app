<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirect = RouteServiceProvider::HOME;

    //auth acces restrictions
    public function __construct()
        {
            $this->middleware('guest')->except('logout');
        }

    public function logout()
        {
            auth()->logout();
            return redirect('/login');
        }
}
