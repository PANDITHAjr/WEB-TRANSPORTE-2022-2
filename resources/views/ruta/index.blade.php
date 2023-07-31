@extends('layouts.app')

@section('content')
    <div class="row" style="margin-top: 5%">
        @can('admin')
            <div class="col s4">
                <a href="{{ route('ruta.create') }}" class="waves-effect light-blue accent-4 btn"><i
                        class="material-icons left">add</i>REGISTRAR</a>
            </div>
        @endcan
        @can('secre')
            <div class="col s4">
                <a href="{{ route('ruta.create') }}" class="waves-effect light-blue accent-4 btn"><i
                        class="material-icons left">add</i>REGISTRAR</a>
            </div>
        @endcan

        <div class="right-align">
            <a href="{{ route('ruta.index') }}" class="waves-effect light-blue accent-4 btn"><i
                    class="material-icons left">add</i>Refrescar</a>
        </div>
        <br>

        <form action="{{ route('ruta.index') }}" method="GET">
            <div style="text-align: center;" class="relative">
                <input type="search" name="buscar" id="default-search"
                    class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-2xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Buscar origen o destino del ruta" required>
                <button style="margin: 0 auto;" type="submit" class="waves-effect light-blue accent-4 btn">Buscar</button>
            </div>

        <div class="col s8">
            <h5>LISTA DE RUTAS</h5>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>ORIGEN</th>
                            <th>DESTINO</th>
                            <th>TARIFA (Bs.)</th>
                            @can('admin')
                                <th>Acciones</th>
                            @endcan
                            @can('secre')
                                <th>Acciones</th>
                            @endcan
                            {{-- <th>Acciones</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rutas as $ruta)
                            <tr>
                                <td>{{ $ruta->id }}</td>
                                <td>{{ $ruta->origen }}</td>
                                <td>{{ $ruta->destino }}</td>
                                <td>{{ $ruta->tarifa }}</td>
                                <td>

                                    @can('admin')
                                        <a href="{{ route('ruta.show', [$ruta->id]) }}"><span
                                                class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                        <a href="{{ route('ruta.edit', [$ruta->id]) }}"><span
                                                class="btn-floating amber accent-4 pulse"><i
                                                    class="material-icons">create</i></a>
                                        <a href="{{ route('ruta.destroy', [$ruta->id]) }}"><span
                                                class="btn-floating red accent-4 pulse"><i
                                                    class="material-icons">delete_forever</i></a>
                                    @endcan
                                    @can('secre')
                                        <a href="{{ route('ruta.show', [$ruta->id]) }}"><span
                                                class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                        <a href="{{ route('ruta.edit', [$ruta->id]) }}"><span
                                                class="btn-floating amber accent-4 pulse"><i
                                                    class="material-icons">create</i></a>
                                    @endcan
                                    @can('chofer')
                                        <a href="{{ route('ruta.show', [$ruta->id]) }}"><span
                                                class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                    @endcan
                                    @can('cliente')
                                        <a href="{{ route('ruta.show', [$ruta->id]) }}"><span
                                                class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
         <!-- Add customized pagination links -->
       <!-- Add customized pagination links within a colored box -->
       <div class="row center-align">
        <div class="col s12">
            <div style="background-color: black; padding: 10px; border-radius: 5px;">
                <ul class="pagination" style="margin: 0;">
                    {{-- Previous Page Link --}}
                    @if ($rutas->onFirstPage())
                        <li style="color: red; font-weight: bold;" class="disabled"><span>ANTERIOR</span></li>
                    @else
                        <li class="waves-effect"><a style="color: blue; font-weight: bold;" href="{{ $rutas->previousPageUrl() }}">ANTERIOR</a></li>
                    @endif

                    {{-- Next Page Link --}}
                    @if ($rutas->hasMorePages())
                        <li class="waves-effect"><a style="color: blue; font-weight: bold;" href="{{ $rutas->nextPageUrl() }}">SIGUIENTE</a></li>
                    @else
                        <li style="color: red; font-weight: bold;" class="disabled"><span>SIGUIENTE</span></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection
