<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class FrontController extends Controller
{
    public function index()
    {
        return view('home1');
    }
}
