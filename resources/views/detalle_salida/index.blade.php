@extends('layouts.app')
@section('content')

    <div class="row" style="margin-top: 5%">
        <div class="col s4">
            <a href="{{ route('detalle_salida.create') }}"  class="waves-effect light-blue accent-4 btn"><i class="material-icons left">add</i>REGISTRAR</a>
        </div>
        <div class="col s8">
            <h5>LISTA DE DETALLES DE SALIDA</h5>
        </div>
        <div class="col s12 m12 l12 xl12">
            <div class="card">
                <table class="striped" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>ID salida</th>
                        <th>Fecha salida</th>
                        <th>Chofer</th>
                        <th>Cliente</th>
                        <th>Vehiculo</th>
                        <th>Vendido Por:</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($detalles as $detalle_salida)
                            <tr>
                                <td>{{ $detalle_salida->salida->id }}</td>
                                <td>{{ $detalle_salida->salida->fecha_salida }}</td>
                                <td>{{ $detalle_salida->salida->conductor->nombre.' '.$detalle_salida->Salida->conductor->apellido}}</td>
                                <td>{{ $detalle_salida->venta_boleto->cliente->nombre.' '.$detalle_salida->venta_boleto->cliente->apellido}}</td>
                                <td>{{ $detalle_salida->venta_boleto->vehiculo->modelo.' '.$detalle_salida->venta_boleto->vehiculo->descripcion}}</td>                                        
                                <td>{{ $detalle_salida->venta_boleto->personal->nombre.' '.$detalle_salida->venta_boleto->personal->apellido}}</td>
                                <td>
                                 {{-- <a href="{{ route('detalle_salida.show', [$detalle_salida->id]) }}"><span class="new badge teal" data-badge-caption="ver"></span></a> --}}
                                  {{-- <a href="{{ route('detalle_salida.edit', [$detalle_salida->id]) }}"><span class="new badge amber accent-4" data-badge-caption="editar"></span></a> --}}
                                  <a href="{{ route('detalle_salida.destroy', [$detalle_salida->id]) }}"><span class="new badge red" data-badge-caption="eliminar"></span></a>
                                </td>
                            </tr>    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
