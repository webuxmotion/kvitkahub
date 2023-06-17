<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login() {
        return view('users.login');
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        auth()->login($user);

        return redirect('/profile')->with('message', 'Користувача створено та автентифіковано!');
    }

    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/profile')->with('message', 'Вітаємо на сайті!');
        }

        return back()
            ->withErrors(['email' => 'Помилкова комбінація Email/Пароль'])
            ->onlyInput('email');
    }
}
