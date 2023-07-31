@auth
    <header>
        @include('layouts.menu-sidenav')
    </header>
@endauth

<nav class="navbar nav-extended no-padding teal grey darken-4">
    <div class="nav-wrapper">

            @auth

            @if (auth()->user()->personal->tipo_personal->descripcion == 'Cliente')
                <a style="color: white; font-weight: bold;" href="{{ route('home2') }}"
                    class="brand-logo center hide-on-small-only">SINDICATO 27 DE DICIEMBRE</a>
            @else
                <a style="color: white; font-weight: bold;" href="{{ route('home') }}"
                    class="brand-logo center hide-on-small-only">SINDICATO 27 DE DICIEMBRE</a>
            @endif
            {{-- <a href="{{ route('home') }}" class="brand-logo center hide-on-small-only">SINDICATO DE TRANSPORTE 27 DE DICIEMBRE</a> --}}
            <ul id="nav-mobile" class="right">
                @if (auth()->user()->personal->tipo_personal->descripcion == 'Cliente')
                    <li><a href="{{ route('home2') }}" class="waves-effect dark-primary-color-text"
                            type="submit"><i class="material-icons">home</i></a></li>
                @else
                    <li><a href="{{ route('home') }}" class="waves-effect dark-primary-color-text"
                            type="submit"><i class="material-icons">home</i></a></li>
                @endif
                {{-- <li><a href="{{ route('home') }}" class="waves-effect dark-primary-color-text" type="submit"><i class="material-icons">home</i></a></li> --}}
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                            class="material-icons left">exit_to_app</i>Salir</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" hidden>
                        @csrf
                    </form>
                </li>

                <li>
                    <a href="{{ route('personal.show', [auth()->user()->id]) }}" role="button">
                        {{ Auth::user()->name }}
                    </a>
                </li>
            </ul>

            <a href="#!" data-target="sidenav-left"
                class="sidenav-trigger left show-on-medium-and-up"><i
                    class="material-icons dark-primary-color-icon">menu</i></a>

                    <ul id="nav-mobile" class="left">
                        <a class="waves-effect waves-light">Claro/Oscuro</a>
                        <li>
                            <div class="toggle-switch">
                                <input type="checkbox" id="mode-toggle">
                                <label for="mode-toggle"></label>
                            </div>
                        </li>
                    </ul>

        @endauth

        @yield('breadcrumb')
    </div>
</nav>
