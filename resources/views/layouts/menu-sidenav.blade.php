<ul id="sidenav-left" class="sidenav teal">
    <li>
        <div class="user-view center">
            <div class="background">
                <img src="https://images.unsplash.com/photo-1588345921523-c2dcdb7f1dcd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Zm9uZG9zJTIwYmxhbmNvfGVufDB8fDB8fHww&auto=format&fit=crop&w=500&q=60"
                    alt="" class="responsive-img">
            </div>

            <div class="row">

                <div class="col s9 push-s3 center-align">
                    <a href="#user" class="centrado"><img class="circle responsive-img"
                        <img class="card-img" src="{{ asset('images/perfil.png') }}">
                </div>
            </div>
            <a href="#name"><span
                    class="black-text name">{{ auth()->user()->personal->nombre . ' ' . auth()->user()->personal->apellido }}</span></a>
            <a href="#email"><span
                    class="black-text email">{{ auth()->user()->personal->tipo_personal->descripcion }}</span></a>
        </div>
    </li>
    <li><a class="subheader yellow-text">MENU 🚗</a></li>
    @can('admin')
        <li><a class="waves-effect white-text" href="{{ route('usuario.index') }}"> Usuario<i
                    class="material-icons">class</i></a></li>
        <li><a class="waves-effect white-text" href="{{ route('tipopersonal.index') }}"> Tipo Personal<i
                    class="material-icons">group</i></a></li>
        <li><a class="waves-effect white-text" href="{{ route('personal.index') }}"> Personal<i
                    class="material-icons">assignment_ind</i></a></li>
        <li><a class="waves-effect white-text" href="{{ route('sindicato.index') }}"> Sindicato<i
                    class="material-icons">class</i></a></li>
        <li><a class="waves-effect white-text" href="{{ route('vehiculo.index') }}"> Vehiculo<i
                    class="material-icons">class</i></a></li>
    @endcan

    @can('secre')
        <li><a class="waves-effect white-text" href="{{ route('personal.index') }}"> Personal<i
                    class="material-icons">assignment_ind</i></a></li>
        <li><a class="waves-effect white-text" href="{{ route('sindicato.index') }}"> Sindicato<i
                    class="material-icons">class</i></a></li>
        <li><a class="waves-effect white-text" href="{{ route('vehiculo.index') }}"> Vehiculo<i
                    class="material-icons">class</i></a></li>
    @endcan

    @can('chofer')
        <li><a class="waves-effect white-text" href="{{ route('personal.index') }}"> Personal<i
                    class="material-icons">assignment_ind</i></a></li>
        <li><a class="waves-effect white-text" href="{{ route('sindicato.index') }}"> Sindicato<i
                    class="material-icons">class</i></a></li>
        <li><a class="waves-effect white-text" href="{{ route('vehiculo.index') }}"> Vehiculo<i
                    class="material-icons">class</i></a></li>
    @endcan

    @can('cliente')
        <li><a class="waves-effect white-text" href="{{ route('sindicato.index') }}"> Sindicato<i
                    class="material-icons">class</i></a></li>
        <li><a class="waves-effect white-text" href="{{ route('vehiculo.index') }}"> Vehiculo<i
                    class="material-icons">class</i></a></li>
    @endcan

</ul>
