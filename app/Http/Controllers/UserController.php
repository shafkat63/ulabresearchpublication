<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{

    public function login()
    {
        return view('users.login');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');
    }
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }


    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);
        if ($request->hasFile('photo')) {


          
            $formFields['photo'] = $request->file('photo')->store('documents', 'public');
        }
        // Create User
        $user = User::create($formFields);

        // Login
        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }


    public function create()
    {
        return view('users.register');
    }

    // public function register(Request $request)
    // {

    //     $incomingFields = $request->validate([
    //         'firstName' => ['required'],
    //         'lastName' => ['required'],
    //         'email' => ['required', 'email', Rule::unique('users', 'email')],
    //         'password' => ['required', 'min:8', 'max:200']
    //     ]);
    //     $incomingFields['password'] = bcrypt($incomingFields['password']);
    //     // dd($incomingFields);
    //     $user = User::create($incomingFields);
    //     auth()->login($user);
    //     return redirect('/');
    // }
}
