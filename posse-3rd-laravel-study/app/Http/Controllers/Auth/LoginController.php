<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\ThrottlesLogins;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // ミドルウェアを呼び出す
        $this->middleware('auth');
        // $this->middleware('guest')->except('logout');
    }

    public function index(){
        return view('auth.login');
    }

    public function login(){
    // 現在認証されているユーザーの取得
    $user = Auth::user();
    // 現在認証されているユーザーのID取得
    $id = Auth::id();
    
    $param = ['user' => $user, 'id' => $id];

        return view('users.quizy', $param);
    }
}
