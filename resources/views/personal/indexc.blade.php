@extends('layouts.app2')
@section('content')

    <div class="row" style="margin-top: 5%">

        <div class="col s8">
            <h5>LISTA DE PERSONAL</h5>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>Telefono</th>
                        <th>CI</th>
                        <th>Tipo de Personal</th>
                        <th>C. Licencia</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($personales as $persona)
                            <tr>
                                <td>{{ $persona->id }}</td>
                                <td>{{ $persona->nombre }}</td>
                                <td>{{ $persona->apellido }}</td>
                                <td>{{ $persona->edad }}</td>
                                <td>{{ $persona->telefono }}</td>
                                <td>{{ $persona->ci }}</td>
                                <td>{{ $persona->cat_lic }}</td>
                                <td>{{ $persona->tipo_personal->descripcion }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection


