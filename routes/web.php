<?php

use App\Jobs\SendEmailsJob;
use App\Models\Email;
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

Route::get('/send/emails', function () {
    Email::chunk(5, function ($emails) {
        dispatch(new SendEmailsJob($emails));
    });
    return "Will Send in Background";
});