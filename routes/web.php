<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/register', function () {
    return view('register'); 
})->name('register.show');

Route::post('/register', function (Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6|confirmed',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);
    return redirect()->route('login.show')->with('success', 'Register berhasil, silakan login!');
})->name('register.post');
Route::get('/login', function () {
    return view('login');
})->name('login.show');

Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');
    $user = User::where('email', $credentials['email'])->first();

    if ($user && Hash::check($credentials['password'], $user->password)) {
        return redirect()->route('home');
    }
    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ]);
})->name('login.post');
