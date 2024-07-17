<?php

use App\Http\Controllers\BeverageController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function(){
    $arrayString = ['PHP', 'PHPUnit'];
    return $arrayString;

    // $string = 'About';
    // return $string;
});


Route::resource('beverage', BeverageController::class);
