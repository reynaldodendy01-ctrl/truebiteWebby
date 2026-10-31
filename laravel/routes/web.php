<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestimonialController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/menu', [ProductController::class, 'index']);
Route::get('/menu/{slug}', [ProductController::class, 'show']);

Route::get('/faqs', [FAQController::class, 'index']);
Route::get('/location', [LocationController::class, 'index']);
Route::get('/testimonials', [TestimonialController::class, 'index']);
Route::get('/footer', [ function () {
    return view('template/footer');
}]);

