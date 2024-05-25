<?php

use App\Http\Controllers\Controller;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [Controller::class, 'home'])->name('home');
Route::get('/blog', [Controller::class, 'blog'])->name('blog');
Route::get('/services', [Controller::class, 'services'])->name('services');
Route::get('/photos', [Controller::class, 'photos'])->name('photos');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/login', [Controller::class, 'login'])->name('login');
Route::get('/signup', [Controller::class, 'signup'])->name('signup');
Route::get('/forgotpassword', [Controller::class, 'forgotpassword'])->name('forgotpassword');
Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');
Route::get('/blogs', [Controller::class, 'blogs'])->name('blogs');
Route::get('/createblogs', [Controller::class, 'createblogs'])->name('createblogs');
Route::get('/editblogs', [Controller::class, 'editblogs'])->name('editblogs');
Route::get('/deleteblogs', [Controller::class, 'deleteblogs'])->name('deleteblogs');
