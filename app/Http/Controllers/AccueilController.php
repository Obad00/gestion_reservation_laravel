<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    //
    public function index()
    {
        $evenement = session('evenement');
    
        return view('home', compact('evenement'));
    }
    
    
}
