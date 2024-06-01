<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Servicios2Controller;



Route::view('/','home')->name('home');
Route::view('nosotros','nosotros')->name('nosotros');

Route::view('contacto','contacto')->name('contacto');

Route::resource('servicios',Servicios2Controller::class)->only('index','show');