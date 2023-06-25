@extends('layouts.app')
@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('cliente.create') }}"  class="waves-effect light-blue accent-4 btn"><i class="material-icons left">add</i>REGISTRAR CLIENTE</a>
            <a href="{{ route('ventaboleto.create') }}"  class="waves-effect light-blue accent-4 btn"><i class="material-icons left">add</i>VENDER</a>
        </div>
        <div class="col s8">
            <h5>BOLETO</h5>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        
                        <th>ID BOLETO</th>
                        <th>Nº DE ASIENTO</th>
                        <th>PRECIO (Bs)</th>
                        <th>FECHA</th>
                        <th>PLACA</th>
                        <th>PERSONAL</th>
                        <th>CLIENTE</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($ventas as $venta_boleto)
                            <tr>
                                <td>{{ $venta_boleto->id }}</td>
                                <td>{{ $venta_boleto->numero_asiento }}</td>
                                <td>{{ $venta_boleto->precio }}</td>
                                <td>{{ $venta_boleto->fecha }}</td>
                                <td>{{ $venta_boleto->vehiculo->placa }}</td>
                                <td>{{ $venta_boleto->personal->nombre}}</td>
                                <td>{{ $venta_boleto->cliente->nombre.' '.$venta_boleto->cliente->apellido }}</td>
                                <td>
                                    <a href="{{ route('ventaboleto.show', [$venta_boleto->id]) }}"><span class="btn-floating black pulse"><i class="material-icons">visibility</i></a>
                                    <a href="{{ route('ventaboleto.edit', [$venta_boleto->id]) }}"><span class="btn-floating amber accent-4 pulse"><i class="material-icons">create</i></a>
                                    <a href="{{ route('ventaboleto.destroy', [$venta_boleto->id]) }}"><span class="btn-floating red accent-4 pulse"><i class="material-icons">delete_forever</i></a>

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

@endsection

