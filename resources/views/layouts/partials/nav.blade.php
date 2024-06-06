<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Rocker</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class='bx bx-home-circle'></i>
                        </div>
                        <div class="menu-title">Jugar</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('iniciar.juego') }}"><i class="bx bx-right-arrow-alt"></i>Iniciar Partida</a>
                        </li>
                        <li> <a href="{{route('terminar.juego')}}"><i class="bx bx-right-arrow-alt"></i>Terminar Partida</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-category"></i>
                        </div>
                        <div class="menu-title">Clasificaciones</div>
                    </a>
                    <ul>
                        <li> <a href="{{ route('mejorPuntuacion') }}"><i class="bx bx-right-arrow-alt"></i>Mejor Puntuacion</a>
                        </li>
                        <li> <a href="{{ url('app-chat-box') }}"><i class="bx bx-right-arrow-alt"></i>Mas Partidas</a>
                        </li>
                    </ul>
                </li>

            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
