@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('ventaboleto.store') }}">
            @csrf

            <div class="col s12 m10 offset-m1 l6 offset-l3 xl8 offset-xl2">
                <div id="panel-left" class="card">

                    <div class="card-content">
                        <span class="card-title primary-text-color primary-text-style">
                            Formulario de Registro de Venta de boletos
                            </span>
                        <div class="row">
                            <div class="col s12 divider"></div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="numero_asiento" type="text" class="validate" name="numero_asiento" value="{{old('numero_asiento')}}">
                                <label for="numero_asiento">Numero de Asiento:</label>
                                @error('numero_asiento')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="precio" type="text" class="validate" name="precio" value="{{old('precio')}}">
                                <label for="precio">Precio:</label>
                                @error('precio')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="fecha" type="date" class="validate" name="fecha" value="{{old('fecha')}}">
                                <label for="fecha">Fecha de venta:</label>
                                @error('fecha')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <select name="id_vehiculo">
                                    <option selected disabled>Seleccione una opción:</option>
                                    @foreach($vehiculos as $vehiculo)
                                    <option value="{{ $vehiculo->id }}">{{ $vehiculo->placa }}</option>
                                    @endforeach
                                </select>
                                <label for="id_vehiculo">PLACA:</label>
                            </div>

                            <div class="input-field col s12 m6">
                                <select name="id_conductor">
                                    <option selected disabled>Seleccione una opción:</option>
                                    @foreach($conductores as $conductor)
                                    <option value="{{ $conductor->id }}">{{ $conductor->nombre.' '.$conductor->apellido }}</option>
                                    @endforeach
                                </select>
                                <label for="id_conductor">CONDUCTORES:</label>
                            </div>
                            
                            <div class="input-field col s12 m6">
                                <select name="id_cliente">
                                    <option selected disabled>Seleccione una opción:</option>
                                    @foreach($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->nombre.' '.$cliente->apellido }}</option>
                                    @endforeach
                                </select>
                                <label for="id_cliente">CLIENTES:</label>
                            </div>

                            <div class="input-field col s12 m6">
                                <select name="id_personal">
                                    <option selected disabled>Seleccione una opción:</option>
                                    @foreach($personales as $personal)
                                    <option value="{{ $personal->id }}">{{ $personal->nombre.' '.$personal->apellido }}</option>
                                    @endforeach
                                </select>
                                <label for="id_personal">PERSONAL:</label>
                            </div>

                            {{--  
                            <div class="input-field col s12 m6">
                                <input id="id_personal" type="text" class="validate" name="id_personal" value="{{old('id_personal')}}">
                                <label for="id_personal">Personal:</label>
                                @error('id_personal')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                             --}}
                            
                        </div>

                        <div class="card-action right-align">
                            <button type="submit" class="btn-floating btn-large blue pulse"><i class="material-icons">save</i></a>
                        </div>


                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
