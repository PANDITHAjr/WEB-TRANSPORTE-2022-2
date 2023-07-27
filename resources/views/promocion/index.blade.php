@extends('layouts.app')
@section('content')
    <div class="row" style="margin-top: 5%">
        @can('admin')
            <div class="col s4">
                <a href="{{ route('promocion.create') }}" class="waves-effect light-blue accent-4 btn"><i
                        class="material-icons left">add</i>REGISTRAR</a>
            </div>
        @endcan
        @can('secre')
            <div class="col s4">
                <a href="{{ route('promocion.create') }}" class="waves-effect light-blue accent-4 btn"><i
                        class="material-icons left">add</i>REGISTRAR</a>
            </div>
        @endcan
        {{-- <div class="col s4">
            <a href="{{ route('promocion.create') }}"  class="waves-effect light-blue accent-4 btn"><i class="material-icons left">add</i>REGISTRAR</a>
        </div> --}}
        <div class="col s8">
            <h5>LISTA DE PROMOCIONES</h5>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            
                            @can('admin')
                                <th>Acciones</th>
                            @endcan
                            @can('secre')
                                <th>Acciones</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($promociones as $promocion)
                            <tr>
                                <td>{{ $promocion->id }}</td>
                                <td>{{ $promocion->nombre }}</td>
                                <td>{{ $promocion->descripcion }}</td>
                              
                                <td>
                                    {{-- <a href="{{ route('promocion.show', [$promocion->id]) }}"><span class="new badge teal" data-badge-caption="ver"></span></a>  --}}
                                    {{-- <a href="{{ route('promocion.edit', [$promocion->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a> --}}
                                    {{-- <a href="{{ route('promocion.destroy', [$promocion->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>   --}}
                                    @can('admin')
                                        <a href="{{ route('promocion.show', [$promocion->id]) }}"><span
                                                class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                        <a href="{{ route('promocion.edit', [$promocion->id]) }}"><span
                                                class="btn-floating amber accent-4 pulse"><i
                                                    class="material-icons">create</i></a>
                                        <a href="{{ route('promocion.destroy', [$promocion->id]) }}"><span
                                                class="btn-floating red accent-4 pulse"><i
                                                    class="material-icons">delete_forever</i></a>
                                    @endcan
                                    @can('secre')
                                        <a href="{{ route('promocion.show', [$promocion->id]) }}"><span
                                                class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                        <a href="{{ route('promocion.edit', [$promocion->id]) }}"><span
                                                class="btn-floating amber accent-4 pulse"><i
                                                    class="material-icons">create</i></a>
                                    @endcan
                                    {{-- <a href="{{ route('promocion.show', [$promocion->id]) }}"><span class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                    <a href="{{ route('promocion.edit', [$promocion->id]) }}"><span class="btn-floating amber accent-4 pulse"><i class="material-icons">create</i></a>
                                    <a href="{{ route('promocion.destroy', [$promocion->id]) }}"><span class="btn-floating red accent-4 pulse"><i class="material-icons">delete_forever</i></a>
                                </td> --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
