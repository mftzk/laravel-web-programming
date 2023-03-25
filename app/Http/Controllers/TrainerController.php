<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TrainerController extends Controller
{
    public function index()
    {
        return view('trainer', ['title' => 'Trainers Page']);
    }
}
    