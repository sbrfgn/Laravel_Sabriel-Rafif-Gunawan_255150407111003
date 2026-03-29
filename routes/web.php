<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;

Route::get('/', [RecordController::class, 'index']);
Route::post('/store', [RecordController::class, 'store']);