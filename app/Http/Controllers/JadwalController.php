<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class JadwalController extends Controller
{
    public function index()
    {
        return view('jadwal', ['title' => 'jadwal Page']);
    }
}
    