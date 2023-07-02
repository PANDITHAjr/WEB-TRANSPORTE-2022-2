@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
            <div id="panel-left"  class="card">
                <div class="card-content">
                    <span class="card-title primary-text-color primary-text-style">
                        Datos Personales
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
                                <p class="primary-text-color secondary-text-style">Nombres:</p>
                            </div>
                            <div class="col s8 offset-s2 m7">
                                <p class="secondary-text-color">{{$personal->nombre}}</p>
                            </div>



                            <div class="col s12 m5">
                                <p class="primary-text-color secondary-text-style">Apellidos:</p>
                            </div>
                            <div class="col s8 offset-s2 m7">
                                <p class="secondary-text-color">{{$personal->apellido}}</p>
                            </div>

                            <div class="col s12 m5">
                                <p class="primary-text-color secondary-text-style">Direccion:</p>
                            </div>
                            <div class="col s8 offset-s2 m7">
                                <p class="secondary-text-color">{{$personal->direccion}}</p>
                            </div>



                            <div class="col s12 m5">
                                <p class="primary-text-color secondary-text-style">Edad:</p>
                            </div>
                            <div class="col s8 offset-s2 m7">
                                <p class="secondary-text-color">{{$personal->edad}}</p>
                            </div>


                            <div class="col s12 m5">
                                <p class="primary-text-color secondary-text-style">C. Licencia:</p>
                            </div>
                            <div class="col s8 offset-s2 m7">
                                <p class="secondary-text-color">{{$personal->cat_lic}}</p>
                            </div>

                            <div class="col s12 m5">
                                <p class="primary-text-color secondary-text-style">CI:</p>
                            </div>
                            <div class="col s8 offset-s2 m7">
                                <p class="secondary-text-color">{{$personal->ci}}</p>
                            </div>

                            <div class="col s12 m5">
                                <p class="primary-text-color secondary-text-style">Tipo Personal:</p>
                            </div>
                            <div class="col s8 offset-s2 m7">
                                <p class="secondary-text-color">{{$personal->tipo_personal->descripcion}}</p>
                            </div>
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
                    <div class="card-action right-align">
                        <a href="{{ route('personal.index') }}" class="waves-effect waves-brown btn-flat red-text bold">Atras</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
