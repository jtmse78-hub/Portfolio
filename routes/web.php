<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

Route::get('/', [TemplateController::class, 'welcome']);
Route::get('/portfolio', [TemplateController::class, 'portfolio']);
