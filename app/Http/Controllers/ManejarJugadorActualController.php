<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManejarJugadorActualController extends Controller
{
    public function index()
    {
        return view('manejaPartidaActual.iniciarJuego');
    }

    public function terminarJuego()
    {
        return view('manejaPartidaActual.terminarPartida');

    }

}
