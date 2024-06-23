<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RuangTanyaController extends Controller
{
    public function index (){
        return view('ruangbertanya.index');
    }
}
