<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FAQController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', [ProductController::class, 'index']);
Route::get('/menu/{slug}', [ProductController::class, 'show']);

Route::get('/faqs', [FAQController::class, 'index']);

Route::get('/footer', [ function () {
    return view('template/footer');
}]);

