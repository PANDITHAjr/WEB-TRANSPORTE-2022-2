@extends('layouts.app')

@section('content')

    <div class="row" style="margin-top: 5%">
        @can('admin')
            <div class="col s4">
                <a href="{{ route('sindicato.create') }}" class="waves-effect light-blue accent-4 btn"><i class="material-icons left">add</i>REGISTRAR</a>
            </div>

        @endcan
        @can('secre')
            <div class="col s4">
                <a href="{{ route('sindicato.create') }}" class="waves-effect light-blue accent-4 btn"><i class="material-icons left">add</i>REGISTRAR</a>
            </div>

        @endcan
        {{-- <div class="col s4">
            <a href="{{ route('sindicato.create') }}"  class="waves-effect light-blue accent-4 btn"><i class="material-icons left">add</i>REGISTRAR</a>
        </div> --}}
        <div class="col s8">
            <h5>LISTA DE SINDICATOS</h5>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Descripcion</th>
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
                        @foreach($sindicatos as $sindicato)
                            <tr>
                                <td>{{ $sindicato->id }}</td>
                                <td>{{ $sindicato->nombre }}</td>
                                <td>
                                    @can('admin')
                                        <a href="{{ route('sindicato.show', [$sindicato->id]) }}"><span class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                        <a href="{{ route('sindicato.edit', [$sindicato->id]) }}"><span class="btn-floating amber accent-4 pulse"><i class="material-icons">create</i></a>
                                        <a href="{{ route('sindicato.destroy', [$sindicato->id]) }}"><span class="btn-floating red accent-4 pulse"><i class="material-icons">delete_forever</i></a>
                                    @endcan
                                    @can('secre')
                                        <a href="{{ route('sindicato.show', [$sindicato->id]) }}"><span class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                        <a href="{{ route('sindicato.edit', [$sindicato->id]) }}"><span class="btn-floating amber accent-4 pulse"><i class="material-icons">create</i></a>
                                    @endcan
                                    {{-- <a href="{{ route('sindicato.show', [$sindicato->id]) }}"><span class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                    <a href="{{ route('sindicato.edit', [$sindicato->id]) }}"><span class="btn-floating amber accent-4 pulse"><i class="material-icons">create</i></a>
                                    <a href="{{ route('sindicato.destroy', [$sindicato->id]) }}"><span class="btn-floating red accent-4 pulse"><i class="material-icons">delete_forever</i></a> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
