<?php

namespace App\Http\Controllers;

use App\Models\JugadorActual;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class ManejarJugadorActualController extends Controller
{
    public function index()
    {
        /**
         * @collection $hayJugadorActual
         */

        $hayJugadorActual = JugadorActual::query()
            ->orderBy('id', 'desc')
            ->limit(1)
            ->get()
            ->where('esta_jugando', true)
        ;

        return view('manejaPartidaActual.iniciarJuego', compact('hayJugadorActual'));

    }

    public function terminarJuego()
    {
        return view('manejaPartidaActual.terminarPartida');

    }

    public function IniciarJuegoAplicacion()
    {
        $jugadorActual = JugadorActual::create([
            'user_id' => Auth::user()->id,
            'esta_jugando' => true
        ]);

        return redirect()->route('dashboard');

    }


    public function terminarJuegoAplicacion()
    {
        $jugadorActual = JugadorActual::query()
            ->orderBy('id', 'desc')
            ->first();

        if($jugadorActual->user_id != Auth::user()->id) {

            return redirect()->route('dashboard');

        }

        $jugadorActual->update([
            'esta_jugando' => false
        ]);

        return redirect()->route('dashboard');

    }


}
