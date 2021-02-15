<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\ImagePage;
use App\Http\Livewire\LoginPage;
use App\Http\Livewire\UploadFile;
use App\Http\Livewire\RegisterPage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', UploadFile::class)->name('home')->middleware('auth');
Route::get('/dashboard', Dashboard::class)->name('dashboard')->middleware('auth');
Route::get('/login', LoginPage::class)->name('login')->middleware('guest');
Route::get('/register', RegisterPage::class)->name('register')->middleware('guest');

Route::get('/image/{hash}', ImagePage::class)->name('image');

Route::get('/logout', function(){
    Auth::logout();
    return redirect('login');
})->name('logout')->middleware('auth');

