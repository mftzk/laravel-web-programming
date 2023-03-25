<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class LokasiKontakController extends Controller
{
    public function index()
    {
        return view('lokasikontak', ['title' => 'Lokasi dan kontak']);
    }
}
    