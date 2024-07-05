<?php

use App\Livewire\Page\LandPage;
use App\Livewire\Page\LoginPage;
use App\Livewire\Page\SignUpPage;
use Illuminate\Support\Facades\Route;

Route::get('', LandPage::class)->name('page.land');
Route::get('login', LoginPage::class)->name('page.login');
Route::get('sign-up', SignUpPage::class)->name('page.signup');
