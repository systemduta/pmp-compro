<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KarirController extends Controller
{
    public function index(){
        return view('karir');
    }
    public function internship(){
        return view('internship');
    }
    public function position_a(){
        return view('position_a');
    }
    public function position_b(){
        return view('position_b');
    }
}
