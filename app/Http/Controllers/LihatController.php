<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LihatController extends Controller
{
    public function index()
    {
        return view('lihat');
    }
    
}
