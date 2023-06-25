@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('salida.store') }}">
            @csrf

            <div class="col s12 m10 offset-m1 l6 offset-l3 xl8 offset-xl2">
                <div id="panel-left" class="card">

                    <div class="card-content">
                        <span class="card-title primary-text-color primary-text-style">
                            Formulario de Registro de las Salidas
                            </span>
                        <div class="row">
                            <div class="col s12 divider"></div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="hora" type="time" class="validate" name="hora" value="{{old('hora')}}">
                                <label for="hora">HORA:</label>
                                @error('horas')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="fecha_salida" type="date" class="validate" name="fecha_salida" value="{{old('fecha_salida')}}">
                                <label for="fecha_salida">Fecha de venta:</label>
                                @error('fecha_salida')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <select name="id_conductor">
                                    <option selected disabled>Seleccione una opción:</option>
                                    @foreach($conductores as $conductor)
                                    <option value="{{ $conductor->id }}">{{ $conductor->nombre.' '.$conductor->apellido}}</option>
                                    @endforeach
                                </select>
                                <label for="id_conductor">Conductor:</label>
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="destinos" type="text" class="validate" name="destinos" value="{{old('destinos')}}">
                                <label for="destinos">DESTINOS:</label>
                                @error('destinos')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

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
