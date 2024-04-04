<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function scents()
    {
        return view('frontend.scents');
    }

    public function cosmetics()
    {
        return view('frontend.cosmetics');
    }

    public function essential_oil()
    {
        return view('frontend.essential_oil');
    }
}
