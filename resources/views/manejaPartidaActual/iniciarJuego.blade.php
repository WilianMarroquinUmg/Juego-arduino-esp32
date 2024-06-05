@extends('layouts.app')

@section('wrapper')

    <div class="page-wrapper">


        <div style="width: 90%; margin: auto;">



            @if($hayJugadorActual->isNotEmpty())
                <div class="alert alert-danger border-0 bg-danger alert-dismissible fade show py-2">
                    <div class="d-flex align-items-center">
                        <div class="font-35 text-white"><i class="bx bxs-message-square-x"></i>
                        </div>
                        <div class="ms-3">
                            <h6 class="mb-0 text-white">Alerta</h6>
                            <div class="text-white">¡Prepárate para la acción! En este momento, otro valiente guerrero está conquistando el juego. 🎮💥 ¡Mantén viva la emoción mientras esperas tu turno para sumergirte en la batalla! 🌟🕒</div>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>


            @else
                <div class="col-sm-3">
                    <div class="card border-primary border-bottom border-3 border-0">
                        <img src="{{asset('img/iniciarJuego.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title text-primary">¡Iniciar Juego!</h5>
                            <p class="card-text">
                                ¡Listos para la aventura! 🌟 ¿Preparados para desafiar lo desconocido? 💪⚔️ ¡Es hora de
                                demostrar tu valentía y habilidad! 🎮🌌 ¡Adelante hacia la gloria! 🚀🔥</p>
                            <hr>
                            <div class="d-flex align-items-center gap-2">
                                <a href="javascript:;" class="btn btn-inverse-primary"><i
                                        class="lni lni-ban"></i>Cancelar</a>
                                <a href="{{route('iniciar.juego.aplicacion')}}" class="btn btn-primary"><i
                                        class="lni lni-star-filled"></i>Iniciar</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>

@endsection
