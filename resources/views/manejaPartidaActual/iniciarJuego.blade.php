@extends('layouts.app')

@section('wrapper')

    <div class="page-wrapper">
        <div style="width: 90%; margin: auto;">

        <div class="col-sm-3">
            <div class="card border-primary border-bottom border-3 border-0">
                <img src="{{asset('img/iniciarJuego.jpg')}}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title text-primary">¡Iniciar Juego!</h5>
                    <p class="card-text">
                        ¡Listos para la aventura! 🌟 ¿Preparados para desafiar lo desconocido? 💪⚔️ ¡Es hora de demostrar tu valentía y habilidad! 🎮🌌 ¡Adelante hacia la gloria! 🚀🔥</p>
                    <hr>
                    <div class="d-flex align-items-center gap-2">
                        <a href="javascript:;" class="btn btn-inverse-primary"><i class="lni lni-ban"></i>Cancelar</a>
                        <a href="javascript:;" class="btn btn-primary"><i class="lni lni-star-filled"></i>Iniciar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

@endsection
