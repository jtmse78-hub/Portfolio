<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function welcome()
    {
        return view('welcome'); // shows the video
    }

    public function portfolio()
{
    return view('portfolio');
}


}
