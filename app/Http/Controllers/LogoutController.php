<?php

namespace App\Http\Controllers;

class LogoutController extends Controller
{
    public function logout()
    {
        session()->invalidate();
        auth()->logout();
        return redirect()->route('page.login');
    }
}
