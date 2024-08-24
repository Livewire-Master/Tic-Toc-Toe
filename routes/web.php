<?php

use App\Http\Controllers\LogoutController;
use App\Livewire\Page\Dashboard\Game\BoardPage;
use App\Livewire\Page\Dashboard\Game\CreatePage as CreateNewGamePage;
use App\Livewire\Page\Dashboard\GamesPage;
use App\Livewire\Page\Dashboard\ProfilePage;
use App\Livewire\Page\Dashboard\TransactionPage;
use App\Livewire\Page\LandPage;
use App\Livewire\Page\LoginPage;
use App\Livewire\Page\SignUpPage;
use Illuminate\Support\Facades\Route;

Route::get('', LandPage::class)->middleware('guest')->name('page.land');
Route::get('login', LoginPage::class)->middleware('guest')->name('page.login');
Route::get('sign-up', SignUpPage::class)->middleware('guest')->name('page.signup');
Route::post('logout', [LogoutController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('dashboard/games', GamesPage::class)->middleware('auth')->name('page.dashboard.games');
Route::get('dashboard/transactions', TransactionPage::class)->middleware('auth')->name('page.dashboard.transactions');
Route::get('dashboard/profile', ProfilePage::class)->middleware('auth')->name('page.dashboard.profile');
Route::get('dashboard/games/create', CreateNewGamePage::class)->middleware('auth')->name('page.dashboard.games.create');
Route::get('dashboard/games/board/{board}', BoardPage::class)->middleware('auth')->name('page.dashboard.games.board');
