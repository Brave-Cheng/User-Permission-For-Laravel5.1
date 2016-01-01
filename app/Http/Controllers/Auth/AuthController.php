<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use Debugbar;
/**
 * Debugbar::info(11111);
 * Debugbar::error('Error!');
 * Debugbar::warning('Watch out…');
 * Debugbar::addMessage('Another message', 'mylabel');
 */

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    // protected $redirectPath = '/home';
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    /**
     * Rewrite post login
     * @param Request $request Request
     * @return void
     */
    public function postLogin(Request $request)
    {
        //认证凭证
        $credentials = [
            'name' => $request->input('name'),
            'password' => $request->input('password'),
        ];
        if (Auth::attempt($credentials, $request->has('remember'))) {
            return redirect()->intended(route('dashborad.index'));
        } else {
            // 登录失败，跳回
            return redirect()->back()
                             ->withInput()
                             ->withErrors(array('attempt' => '“用户名”或“密码”错误，请重新登录！'));  //回传错误信息
        }
    }

    /**
     * Get logout
     * @return void
     */
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
