<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    function index()
    {
        return view('bladeEdu');
    }
}
