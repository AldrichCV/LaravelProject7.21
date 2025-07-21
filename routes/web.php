<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use Illuminate\Http\Request;
use App\Http\Middleware\SimpleAuth;

// Public login routes
Route::get('/', [User::class, 'index']);
Route::post('/login', function (Request $request) {
    $validUser = 'admin';
    $validPass = '123';

    if (
        $request->input('username') === $validUser &&
        $request->input('password') === $validPass
    ) {
        session(['logged_in' => true]);
        return redirect()->route('next');
    }

    return back()->with('error', 'Invalid credentials.');
});

// Protected route with middleware
Route::middleware([SimpleAuth::class])->group(function () {
    Route::get('/next', [User::class, 'nextRoute'])->name('next');
});