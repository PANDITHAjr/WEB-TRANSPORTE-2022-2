@extends('layouts.app2')

@section('content')

    <div class="row" style="margin-top: 5%">
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
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($sindicatos as $sindicato)
                            <tr>
                                <td>{{ $sindicato->id }}</td>
                                <td>{{ $sindicato->nombre }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
