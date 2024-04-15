<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function actionLoginPage()
    {
        return view('login');
    }

    public function actionSignupPage()
    {
        return view('register');
    }

    /**
     * Handle an authentication attempt.
     */
    public function actionLogin(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $credentials = $request->only(['email', 'password']);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('chat');
        }

        return redirect(route('login'))->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Handle an signup attempt.
     */
    public function actionSignup(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required'],
        ]);
        $data = $request->post();
        $user = $this->userService->createUser($data);
        if (!$user) {
            return back()->withErrors([
                'error' => 'Registration failed.',
            ])->onlyInput('email');
        }
        return redirect(route('login'))->with('Please check your email and confirm the registration');

    }


    public function actionLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
