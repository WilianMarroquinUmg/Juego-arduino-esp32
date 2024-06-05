@extends('layouts.app')

@section('wrapper')

    <div class="page-wrapper">
        <div style="width: 90%; margin: auto;">

            <div class="col-sm-3">
                <div class="card border-danger border-bottom border-3 border-0">
                    <img src="{{asset('img/iniciarJuego.jpg')}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title text-danger">¡Terminar Juego!</h5>
                        <p class="card-text">
                            ¡No te rindas, valiente guerrero! 🛡️ La batalla aún no ha llegado a su fin. 💥 Confía en tu valentía y persistencia. ¡Sigue luchando hasta alcanzar la victoria! 🌟👊
                        <hr>
                        <div class="d-flex align-items-center gap-2">
                            <a href="javascript:;" class="btn btn-inverse-danger"><i class="lni lni-ban"></i>Cancelar</a>
                            <a href="{{route('terminar.juego.aplicacion')}}" class="btn btn-danger"><i class="lni lni-star-filled"></i>Terminar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
