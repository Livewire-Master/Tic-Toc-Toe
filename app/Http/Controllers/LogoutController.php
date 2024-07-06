<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;

class LogoutController extends Controller
{
    public function logout(): RedirectResponse
    {
        auth()->logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect()->route('page.login');
    }
}
