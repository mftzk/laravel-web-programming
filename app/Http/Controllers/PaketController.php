<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class PaketController extends Controller
{
    public function index()
    {
        return view('paket', ['title' => 'Paket Page']);
    }
}
    