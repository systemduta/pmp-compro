<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function index(){
        return view ('produk_balok');
    }

    public function index1(){
        return view ('produk_kristal');
    }
}
