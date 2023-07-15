@extends('layouts.app')
@section('content')
    <div class="row" style="margin-top: 5%">
        @can('admin')
            <div class="col s4">
                <a href="{{ route('personal.create') }}" class="waves-effect light-blue accent-4 btn"><i
                        class="material-icons left">add</i>REGISTRAR</a>
            </div>
        @endcan
        @can('secre')
            <div class="col s4">
                <a href="{{ route('personal.create') }}" class="waves-effect light-blue accent-4 btn"><i
                        class="material-icons left">add</i>REGISTRAR</a>
            </div>
        @endcan
        {{-- <div class="col s4">
            <a href="{{ route('personal.create') }}"  class="waves-effect light-blue accent-4 btn"><i class="material-icons left">add</i>REGISTRAR</a>
        </div> --}}
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
                            @can('admin')
                                <th>Acciones</th>
                            @endcan
                            @can('secre')
                                <th>Acciones</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personales as $persona)
                            <tr>
                                <td>{{ $persona->id }}</td>
                                <td>{{ $persona->nombre }}</td>
                                <td>{{ $persona->apellido }}</td>
                                <td>{{ $persona->edad }}</td>
                                <td>{{ $persona->telefono }}</td>
                                <td>{{ $persona->ci }}</td>
                                <td>{{ $persona->tipo_personal->descripcion }}</td>
                                <td>{{ $persona->cat_lic }}</td>
                                <td>
                                    {{-- <a href="{{ route('personal.show', [$persona->id]) }}"><span class="new badge teal" data-badge-caption="ver"></span></a>  --}}
                                    {{-- <a href="{{ route('personal.edit', [$persona->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a> --}}
                                    {{-- <a href="{{ route('personal.destroy', [$persona->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>   --}}
                                    @can('admin')
                                        <a href="{{ route('personal.show', [$persona->id]) }}"><span
                                                class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                        <a href="{{ route('personal.edit', [$persona->id]) }}"><span
                                                class="btn-floating amber accent-4 pulse"><i
                                                    class="material-icons">create</i></a>
                                        <a href="{{ route('personal.destroy', [$persona->id]) }}"><span
                                                class="btn-floating red accent-4 pulse"><i
                                                    class="material-icons">delete_forever</i></a>
                                    @endcan
                                    @can('secre')
                                        <a href="{{ route('personal.show', [$persona->id]) }}"><span
                                                class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                        <a href="{{ route('personal.edit', [$persona->id]) }}"><span
                                                class="btn-floating amber accent-4 pulse"><i
                                                    class="material-icons">create</i></a>
                                    @endcan
                                    {{-- <a href="{{ route('personal.show', [$persona->id]) }}"><span class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                    <a href="{{ route('personal.edit', [$persona->id]) }}"><span class="btn-floating amber accent-4 pulse"><i class="material-icons">create</i></a>
                                    <a href="{{ route('personal.destroy', [$persona->id]) }}"><span class="btn-floating red accent-4 pulse"><i class="material-icons">delete_forever</i></a>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
