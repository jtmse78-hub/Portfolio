<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TemplateController;

class TemplateController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
}
