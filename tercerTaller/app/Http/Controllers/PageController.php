<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function inicio()
    {
    return view('pages.inicio');
    }
}
