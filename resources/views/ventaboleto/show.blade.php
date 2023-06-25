@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
            <div id="panel-left"  class="card">
                <div class="card-content">
                    <span class="card-title primary-text-color primary-text-style">
                        Datos de la venta de boletos
                    </span>

                    <div class="row">
                        <div class="col s12 divider"></div>
                    </div>

                    <div class="row">
                        <div class="col s4 offset-s4">
                            <div class="row valign-wrapper">
                                <div class="col s12">
                                    <img src="https://mstq.io/wp-content/uploads/2019/12/Upgrading-Design-Strategy-with-Psychographic-Personas.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="row">
                            
                            <div class="col s12 m5">
                                <p class="primary-text-color secondary-text-style">Numero de asiento:</p>
                            </div>
                            <div class="col s8 offset-s2 m7">
                                <p class="secondary-text-color">{{$venta->numero_asiento}}</p>
                            </div>
                            <div class="col s12 m5">
                                <p class="primary-text-color secondary-text-style">Precio:</p>
                            </div>
                            <div class="col s8 offset-s2 m7">
                                <p class="secondary-text-color">{{$venta->precio}}</p>
                            </div>
                            <div class="col s12 m5">
                                <p class="primary-text-color secondary-text-style"> Fecha:</p>
                            </div>
                            <div class="col s8 offset-s2 m7">
                                <p class="secondary-text-color">{{$venta->fecha}}</p>
                            </div>
                            <div class="col s12 m5">
                                <p class="primary-text-color secondary-text-style"> Vehiculo:</p>
                            </div>
                            <div class="col s8 offset-s2 m7">
                                <p class="secondary-text-color">{{$venta->vehiculo->modelo}}</p>
                            </div>
                            <div class="col s12 m5">
                                <p class="primary-text-color secondary-text-style"> Cliente:</p>
                            </div>
                            <div class="col s8 offset-s2 m7">
                                <p class="secondary-text-color">{{$venta->cliente->nombre.' '.$venta->cliente->apellido}}</p>
                            </div>
                            <div class="col s12 m5">
                                <p class="primary-text-color secondary-text-style"> Personal:</p>
                            </div>
                            <div class="col s8 offset-s2 m7">
                                <p class="secondary-text-color">{{$venta->personal->nombre.' '.$venta->personal->apellido}}</p>
                            </div>

                            {{--  
                                
                            <div class="col s12 m5">
                                <p class="primary-text-color secondary-text-style">Precio:</p>
                            </div>
                            <div class="col s8 offset-s2 m7">
                                <p class="secondary-text-color">{{$venta_boleto->precio}}</p>
                            </div>

                            <div class="col s12 m5">
                                <p class="primary-text-color secondary-text-style">ID vehiculo:</p>
                            </div>
                            <div class="col s8 offset-s2 m7">
                                <p class="secondary-text-color">{{$venta_boleto->id_vehiculo}}</p>
                            </div>


                        
                            <div class="col s12 m5">
                                <p class="primary-text-color secondary-text-style">ID cliente:</p>
                            </div>
                            <div class="col s8 offset-s2 m7">
                                <p class="secondary-text-color">{{$venta_boleto->id_cliente}}</p>
                            </div> 
                        --}}
                            {{--

                            <div class="col s12 m5">
                                <p class="primary-text-color secondary-text-style">Celular:</p>
                            </div>
                            <div class="col s8 offset-s2 m7">
                                <p class="secondary-text-color">{{$personal->telefono}}</p>
                            </div>

                            <div class="col s12 m5">
                                <p class="primary-text-color secondary-text-style">Id tipo personal:</p>
                            </div>
                            <div class="col s8 offset-s2 m7">
                                <p class="secondary-text-color">{{$personal->id_tipo_personal}}</p>
                            </div>
                            --}}
                        </div>
                    </div>
                    <div class="card-action right-align">
                        <a href="{{ route('ventaboleto.index') }}" class="waves-effect waves-brown btn-flat red-text bold">Atras</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
