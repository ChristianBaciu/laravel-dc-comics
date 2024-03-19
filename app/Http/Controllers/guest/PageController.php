<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        // recupera i record dal DB
        $comics = Comic::All();

        return view('welcome', compact('comics') );
    }
}
