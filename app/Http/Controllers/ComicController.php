<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    public function index(){
        $comics=Comic::all();
        dd($comics);
        return view('main.Comics', compact('comics'));
    }
}
