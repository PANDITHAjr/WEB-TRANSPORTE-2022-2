<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // @if (auth()->user->personal->tipo_personal->descripcion == 'Administrador') {
    //       protected $redirectTo = RouteServiceProvider::HOME2;
    //   } else {
    //       protected $redirectTo = RouteServiceProvider::HOME;
    //   }
    //protected $redirectTo = RouteServiceProvider::HOME;
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }


    protected function redirectTo()
    {
        if (auth()->check()) {
            $user = auth()->user();

            if ($user->personal && $user->personal->tipo_personal->descripcion == 'Cliente') {
                return RouteServiceProvider::HOME2;
            }
        }

        return RouteServiceProvider::HOME;
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
