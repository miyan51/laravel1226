<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;


Route::get('/', [InquiryController::class, 'index']);
Route::post('/', [InquiryController::class, 'thanks']);
