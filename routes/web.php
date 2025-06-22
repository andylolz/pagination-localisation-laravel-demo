<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginationDemoController;

Route::get('/', [PaginationDemoController::class, 'index'])->name('pagination.demo');
