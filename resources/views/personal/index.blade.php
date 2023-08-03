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

        <div class="right-align">
            <a href="{{ route('personal.index') }}" class="waves-effect light-blue accent-4 btn"><i
                    class="material-icons left">add</i>Refrescar</a>
        </div>
        <br>

        <form action="{{ route('personal.index') }}" method="GET">
            <div style="text-align: center;" class="relative">
                <input type="search" name="buscar" id="default-search"
                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-2xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Buscar C.I. o nombre del personal" required>
                <button style="margin: 0 auto;" type="submit" class="waves-effect light-blue accent-4 btn">Buscar</button>
            </div>


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
                            @foreach ($personales as $personal)
                                <tr>
                                    <td>{{ $personal->id }}</td>
                                    <td>{{ $personal->nombre }}</td>
                                    <td>{{ $personal->apellido }}</td>
                                    <td>{{ $personal->edad }}</td>
                                    <td>{{ $personal->telefono }}</td>
                                    <td>{{ $personal->ci }}</td>
                                    <td>{{ $personal->tipo_personal->descripcion }}</td>
                                    <td>{{ $personal->cat_lic }}</td>
                                    <td>
                                        {{-- <a href="{{ route('personal.show', [$persona->id]) }}"><span class="new badge teal" data-badge-caption="ver"></span></a>  --}}
                                        {{-- <a href="{{ route('personal.edit', [$persona->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a> --}}
                                        {{-- <a href="{{ route('personal.destroy', [$persona->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>   --}}
                                        @can('admin')
                                            <a href="{{ route('personal.show', [$personal->id]) }}"><span
                                                    class="btn-floating black pulse"><i
                                                        class="material-icons">visibility</i></a>
                                            <a href="{{ route('personal.edit', [$personal->id]) }}"><span
                                                    class="btn-floating amber accent-4 pulse"><i
                                                        class="material-icons">create</i></a>
                                            <a href="{{ route('personal.destroy', [$personal->id]) }}"><span
                                                    class="btn-floating red accent-4 pulse"><i
                                                        class="material-icons">delete_forever</i></a>
                                        @endcan
                                        @can('secre')
                                            <a href="{{ route('personal.show', [$personal->id]) }}"><span
                                                    class="btn-floating black pulse"><i
                                                        class="material-icons">visibility</i></a>
                                            <a href="{{ route('personal.edit', [$personal->id]) }}"><span
                                                    class="btn-floating amber accent-4 pulse"><i
                                                        class="material-icons">create</i></a>
                                        @endcan
                                        @can('chofer')
                                        <a href="{{ route('personal.show', [$personal->id]) }}"><span
                                                class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                    @endcan
                                    @can('cliente')
                                        <a href="{{ route('personal.show', [$personal->id]) }}"><span
                                                class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                    @endcan
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
    <!-- Add customized pagination links -->
    <!-- Add customized pagination links within a colored box -->
    <div class="row center-align">
        <div class="col s12">
            <div style="background-color: black; padding: 10px; border-radius: 5px;">
                <ul class="pagination" style="margin: 0;">
                    {{-- Previous Page Link --}}
                    @if ($personales->onFirstPage())
                        <li style="color: red; font-weight: bold;" class="disabled"><span>ANTERIOR</span></li>
                    @else
                        <li class="waves-effect"><a style="color: blue; font-weight: bold;"
                                href="{{ $personales->previousPageUrl() }}">ANTERIOR</a></li>
                    @endif

                    {{-- Next Page Link --}}
                    @if ($personales->hasMorePages())
                        <li class="waves-effect"><a style="color: blue; font-weight: bold;"
                                href="{{ $personales->nextPageUrl() }}">SIGUIENTE</a></li>
                    @else
                        <li style="color: red; font-weight: bold;" class="disabled"><span>SIGUIENTE</span></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection
