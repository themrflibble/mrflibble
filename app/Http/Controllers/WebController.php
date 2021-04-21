<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * The site's main index page.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $viewShareVars = [];
        return view('home', compact($viewShareVars));
    }

}
