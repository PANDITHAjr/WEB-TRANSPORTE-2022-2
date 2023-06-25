@extends('layouts.app')
@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('conductor.create') }}"  class="waves-effect light-blue accent-4 btn"><i class="material-icons left">add</i>REGISTRAR</a>
        </div>
        <div class="col s8">
            <h5>LISTA DE CONDUCTORES</h5>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>CI</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($conductores as $conductor)
                            <tr>
                                <td>{{ $conductor->id }}</td>
                                <td>{{ $conductor->ci }}</td>
                                <td>{{ $conductor->nombre }}</td>
                                <td>{{ $conductor->apellido }}</td>
                                <td>{{ $conductor->edad }}</td>
                                <td>{{ $conductor->direccion }}</td>
                                <td>{{ $conductor->telefono }}</td>
                                <td>
                                    <a href="{{ route('conductor.show', [$conductor->id]) }}"><span class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                    <a href="{{ route('conductor.edit', [$conductor->id]) }}"><span class="btn-floating amber accent-4 pulse"><i class="material-icons">create</i></a>
                                    <a href="{{ route('conductor.destroy', [$conductor->id]) }}"><span class="btn-floating red accent-4 pulse"><i class="material-icons">delete_forever</i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
