@extends('layouts.app')

@section('wrapper')

    <div class="page-wrapper">
        <div style="width: 90%; margin: auto;">


            @if($jugadorActual->isNotEmpty())
                @if($jugadorActual->user_id == Auth::user()->id)
                    <div class="col-sm-3">
                        <div class="card border-danger border-bottom border-3 border-0">
                            <img src="{{asset('img/iniciarJuego.jpg')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title text-danger">¡Terminar Juego!</h5>
                                <p class="card-text">
                                    ¡No te rindas, valiente guerrero! 🛡️ La batalla aún no ha llegado a su fin. 💥 Confía
                                    en tu valentía y persistencia. ¡Sigue luchando hasta alcanzar la victoria! 🌟👊
                                <hr>
                                <div class="d-flex align-items-center gap-2">
                                    <a href="javascript:;" class="btn btn-inverse-danger"><i class="lni lni-ban"></i>Cancelar</a>
                                    <a href="{{route('terminar.juego.aplicacion')}}" class="btn btn-danger"><i
                                            class="lni lni-star-filled"></i>Terminar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @else

                <div class="alert alert-warning border-0 bg-warning alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                        <div class="font-35 text-dark"><i class="bx bx-info-circle"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0 text-dark">No has iniciado la partida! </h6>
                            <div class="text-dark">Debes de iniciar un juego para poder finalizarlo!</div>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endif


        </div>
    </div>

@endsection
