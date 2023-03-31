<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Music;

class PageController extends Controller
{
    public function music(){
        $music = Music::all();

        return view('music', compact('music'));
    }
}
