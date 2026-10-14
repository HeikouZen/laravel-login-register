<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login(Request $request){
        $incomingFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'max:200'],
        ]);

        if (auth()->attempt(['email' => $incomingFields['email'], 'password' => $incomingFields['password']])) {
            $request->session()->regenerate();

            return redirect('/home');
        }

        return redirect('/login');
    }

    public function logout() {
        auth()->logout();
        return redirect('/login');
    }

    public function registerAcc(Request $request) {
        $incomingFields = $request->validate([
            'name' => ['required', 'min:2', 'max:100', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:200'],
        ]);
        
        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);

        return redirect('/login');
    }
}
