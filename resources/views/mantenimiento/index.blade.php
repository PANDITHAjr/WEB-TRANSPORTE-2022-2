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
                <a href="{{ route('mantenimiento.create') }}" class="waves-effect light-blue accent-4 btn"><i
                        class="material-icons left">add</i>REGISTRAR</a>
            </div>
        @endcan
        <div class="col s8">
            <h5>LISTA DE RUTAS</h5>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>PLACA</th>
                            <th>MODELO</th>
                            <th>DESCRIPCION</th>
                            <th>FECHA</th>
                            <th>MONTO (Bs.)</th>
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
                        @foreach ($mantenimientos as $mantenimiento)
                            <tr>
                                <td>{{ $mantenimiento->id }}</td>
                                <td>{{ $mantenimiento->vehiculo->placa }}</td>
                                <td>{{ $mantenimiento->vehiculo->modelo }}</td>
                                <td>{{ $mantenimiento->descripcion }}</td>
                                <td>{{ $mantenimiento->fecha }}</td>
                                <td>{{ $mantenimiento->monto }}</td>
                                <td>

                                    @can('admin')
                                        <a href="{{ route('mantenimiento.show', [$mantenimiento->id]) }}"><span
                                                class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                        <a href="{{ route('mantenimiento.edit', [$mantenimiento->id]) }}"><span
                                                class="btn-floating amber accent-4 pulse"><i
                                                    class="material-icons">create</i></a>
                                        <a href="{{ route('mantenimiento.destroy', [$mantenimiento->id]) }}"><span
                                                class="btn-floating red accent-4 pulse"><i
                                                    class="material-icons">delete_forever</i></a>
                                    @endcan
                                    @can('secre')
                                        <a href="{{ route('mantenimiento.show', [$mantenimiento->id]) }}"><span
                                                class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                        <a href="{{ route('mantenimiento.edit', [$mantenimiento->id]) }}"><span
                                                class="btn-floating amber accent-4 pulse"><i
                                                    class="material-icons">create</i></a>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
