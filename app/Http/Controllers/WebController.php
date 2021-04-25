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

    /**
     * The site's work page.
     *
     * @return \Illuminate\Http\Response
     */
    public function work()
    {
        $viewShareVars = [];
        return view('work', compact($viewShareVars));
    }

    /**
     * The site's spare time page.
     *
     * @return \Illuminate\Http\Response
     */
    public function spareTime()
    {
        $viewShareVars = [];
        return view('spare-time', compact($viewShareVars));
    }
}
