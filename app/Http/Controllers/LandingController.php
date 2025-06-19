<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Muestra la página principal de la landing page
     */
    public function index()
    {
        return view('landing.home');
    }

    /**
     * Muestra la página de características
     */
    public function features()
    {
        return view('landing.features');
    }

    /**
     * Muestra la página de precios
     */
    public function pricing()
    {
        return view('landing.pricing');
    }

    /**
     * Muestra la página de contacto
     */
    public function contact()
    {
        return view('landing.contact');
    }
}
