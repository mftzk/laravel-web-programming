<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ListKendaraanController extends Controller
{
    public function index()
    {
        return view('listkendaraan', ['title' => 'List Kendaraan']);
    }
}
    