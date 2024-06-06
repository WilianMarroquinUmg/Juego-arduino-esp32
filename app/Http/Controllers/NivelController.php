<?php

namespace App\Http\Controllers;

use App\Mail\enviarEmail;
use App\Mail\nivelFinal;
use App\Mail\primerNivel;
use App\Mail\segundoNivel;
use App\Models\JugadorActual;
use App\Models\Partida;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class NivelController extends Controller
{
    public function iniciarJuego()
    {

        $jugador = JugadorActual::query()
            ->limit(1)
            ->orderBy('id', 'desc')
            ->get()
            ->first();

        $correo = new enviarEmail();
        Mail::to($jugador->user->email)->send($correo);

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

        $correo = new primerNivel();
        Mail::to($jugador->user->email)->send($correo);

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

        $correo = new segundoNivel();
        Mail::to($jugador->user->email)->send($correo);

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

        $correo = new nivelFinal();
        Mail::to($jugador->user->email)->send($correo);

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






