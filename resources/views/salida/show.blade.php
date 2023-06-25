@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col s12 m12 offset-m1 l6 offset-l3 xl6 offset-xl3">
            <div id="panel-left"  class="card">
                <div class="card-content">
                    <span class="card-title primary-text-color primary-text-style">
                        Lista de pasajeros por salida
                    </span>

                    <div class="row">
                        <div class="col s12 divider"></div>
                    </div>

                    <div class="row">
                        <div class="col s4 offset-s4">
                            <div class="row valign-wrapper">
                                <div class="col s12">
                                    <img src="https://px.cdn.reduno.com.bo/reduno/022022/1645070132212.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                                </div>
                            </div>
                        </div>
                    </div>
                        <thead>

                            <div class="col s8 offset-s2 m7">

                                @foreach ($salida->detalle_salida as $detalle )
                                <p class="secondary-text-color">{{$detalle->venta_boleto->cliente->ci_cliente.' . '.$detalle->venta_boleto->cliente->nombre.' '.$detalle->venta_boleto->cliente->apellido}}</p>
                                @endforeach
                            </div>

                        </thead>

                    <div class="card-action right-align">
                        <a href="{{ route('salida.index') }}" class="waves-effect waves-brown btn-flat red-text bold">Atras</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
