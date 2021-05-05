<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\UrlGenerator;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public static function index()
    {
        return view('home',
            [
                'css' => (new UrlGenerator(app()))->asset("css/style.css", true)
            ]
        );
    }
}
