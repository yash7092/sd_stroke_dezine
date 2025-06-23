<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', function () {
    return view('index');
});

Route::post('/sendmail', [MailController::class, 'send']);
