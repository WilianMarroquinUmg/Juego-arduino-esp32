<?php

namespace App\Http\Controllers;

use App\Models\Partida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NivelController extends Controller
{

    public function iniciarJuego()
    {
        Partida::create([
            'fecha_inicio' => now(),
            'user_id' => auth()->user()->id,
            'puntos' => 0,
            'ganador' => false,
        ]);
        return response()->json([
            'message' => 'Juego iniciado',
        ]);
    }

    public function NivelUno()
    {

        $partida = auth()->user()->partidas()->latest()->first();

        $partida->update([
            'puntos' => $partida->puntos + 30,
        ]);

        return response()->json([
            'message' => 'Nivel Uno superado',
        ]);
    }

    public function NivelDos()
    {

        $partida = auth()->user()->partidas()->latest()->first();

        $partida->update([
            'puntos' => $partida->puntos + 30,
        ]);

        return response()->json([
            'message' => 'Nivel Dos superado',
        ]);
    }

    public function NivelTres()
    {

        $partida = auth()->user()->partidas()->latest()->first();

        $partida->update([
            'puntos' => $partida->puntos + 40,
        ]);

        return response()->json([
            'message' => 'Partida finalizada',
        ]);
    }
}
