<?php

use App\Http\Controllers\XmlToXlsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [XmlToXlsController::class, 'index']);
Route::post('/convert', [XmlToXlsController::class, 'convert'])->name('convert');
