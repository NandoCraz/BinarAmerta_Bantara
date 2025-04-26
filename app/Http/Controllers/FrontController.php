<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index() {
        return view('front.components.index');
    }
    public function wisata() {
        return view('front.components.wisata');
    }
    public function umkm() {
        return view('front.components.umkm');
    }
    public function komunitas() {
        return view('front.components.komunitas');
    }
}
