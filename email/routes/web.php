<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\EmailController;
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
})->name('home');

Route::get('/email', function () {
     $email = "fredaston49@gmail.com";
      Mail::send('welcome', ['data' => route('home', ['token' => 'abc'])], function ($messages) use ($email) {
                $messages->to($email);
                $messages->subject('shukar hai Allah ka');
            });
    return 'abcs';
});

Route::get('emailtest', [EmailController::class, 'email'])->name('emailtest');