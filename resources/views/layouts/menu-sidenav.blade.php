<ul id="sidenav-left" class="sidenav teal">
    <li>
        <div class="user-view center">
            <div class="background">
                <img src="https://images.unsplash.com/photo-1554050857-c84a8abdb5e2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bmVncm98ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60"
                alt=""
                class="responsive-img">
            </div>

            <div class="row">

                <div class="col s9 push-s3 center-align">
                    <a href="#user" class="centrado"><img class="circle responsive-img" src="https://linea4angol.cl/wp-content/uploads/2018/09/hombre.jpg"></a>
                </div>
            </div>
            <a href="#name"><span class="black-text name">{{ auth()->user()->personal->nombres.' '.auth()->user()->personal->apellidos }}</span></a>
            <a href="#email"><span class="black-text email">{{ auth()->user()->email }}</span></a>
        </div>
    </li>
    <li><a class="subheader yellow-text">Administración</a></li>

    <li><a class="waves-effect white-text" href="{{ route('ventaboleto.index') }}">Ventas de Boletos<i class="material-icons">add_shopping_cart</i></a></li>
    <li><a class="waves-effect white-text" href="{{ route('cliente.index') }}">Gestionar Cliente<i class="material-icons">people_outline</i></a></li>
    <li><a class="waves-effect white-text" href="{{ route('salida.index') }}">Ver salidas<i class="material-icons">person</i></a></li>
    <li><a class="waves-effect white-text" href="{{ route('detalle_salida.index') }}">Detalles de Salida<i class="material-icons">class</i></a></li>
    <li><a class="waves-effect white-text" href="{{ route('conductor.index') }}">Gestionar conductores<i class="material-icons">group</i></a></li>
    <li><a class="waves-effect white-text" href="{{ route('usuario.index') }}">Gestionar Usuario<i class="material-icons">class</i></a></li>
    <li><a class="waves-effect white-text" href="{{ route('personal.index') }}">Gestionar Personal<i class="material-icons">assignment_ind</i></a></li>
    <li><a class="waves-effect white-text" href="{{ route('vehiculo.index') }}">Gestionar vehiculos<i class="material-icons">class</i></a></li>
    <li><a class="waves-effect white-text" href="{{ route('tipo_personal.index') }}">Gestionar Tipo Personal<i class="material-icons">group</i></a></li>



</ul>
