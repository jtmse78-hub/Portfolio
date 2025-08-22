<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TemplateController;

Route::get('/', function () {
    return view('welcome');
});

route::get('/',[TemplateController::class,'index']);