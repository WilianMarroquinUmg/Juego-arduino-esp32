<?php

namespace App\Http\Controllers;

use App\Models\JugadorActual;
use App\Models\Partida;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NivelController extends Controller
{

    public function iniciarJuego()
    {

        $jugador = JugadorActual::query()
            ->limit(1)
            ->orderBy('id', 'desc')
            ->get()
            ->first();

        Partida::create([
            'fecha_inicio' => now(),
            'user_id' => $jugador->user_id,
            'puntos' => 0,
            'ganador' => false,
        ]);
        return response()->json([
            'message' => 'Juego iniciado',
        ]);
    }

    public function NivelUno()
    {
        $jugador = JugadorActual::query()
            ->limit(1)
            ->orderBy('id', 'desc')
            ->get()
            ->first();

        $partida = User::whereId($jugador->user_id)
            ->first()
            ->partidas()
            ->latest()
            ->first();

        $partida->update([
            'puntos' => $partida->puntos + 30,
        ]);

        return response()->json([
            'message' => 'Nivel Uno superado',
        ]);
    }

    public function NivelDos()
    {

        $jugador = JugadorActual::query()
            ->limit(1)
            ->orderBy('id', 'desc')
            ->get()
            ->first();

        $partida = User::whereId($jugador->user_id)
            ->first()
            ->partidas()
            ->latest()
            ->first();

        $partida->update([
            'puntos' => $partida->puntos + 30,
        ]);

        return response()->json([
            'message' => 'Nivel Dos superado',
        ]);
    }

    public function NivelTres()
    {

        $jugador = JugadorActual::query()
            ->limit(1)
            ->orderBy('id', 'desc')
            ->get()
            ->first();

        $partida = User::whereId($jugador->user_id)
            ->first()
            ->partidas()
            ->latest()
            ->first();

        $partida->update([
            'puntos' => $partida->puntos + 40,
            'ganador' => true,
        ]);

        return response()->json([
            'message' => 'Partida finalizada',
        ]);
    }
}
