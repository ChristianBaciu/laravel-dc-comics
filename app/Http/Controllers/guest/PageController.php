<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        // return view('pages.comics.index');
        // recuparare i records del DB
        $comics = Comic::All(); //SELECT * FROM COMICS

        // passare i records alla view
        return view( 'pages.comics.index', compact( 'comics' ) );

    }
}
