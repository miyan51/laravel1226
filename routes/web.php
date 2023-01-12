<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;


Route::get('/', [InquiryController::class, 'index']);
Route::post('/', [InquiryController::class, 'add']);
Route::get('/search', [InquiryController::class, 'search']);
Route::post('/search', [InquiryController::class, 'search']);
