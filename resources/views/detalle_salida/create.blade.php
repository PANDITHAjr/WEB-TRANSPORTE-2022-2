@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('detalle_salida.store') }}">
            @csrf

            <div class="col s12 m10 offset-m1 l6 offset-l3 xl8 offset-xl2">
                <div id="panel-left" class="card">

                    <div class="card-content">
                        <span class="card-title primary-text-color primary-text-style">
                            Formulario de Formulario de registro de salidas 
                            </span>
                        <div class="row">
                            <div class="col s12 divider"></div>
                        </div>

                        <div class="row">

                            

                            <div class="input-field col s12 m6">
                                <select name="id_salida">
                                    <option selected disabled>Seleccione una opción:</option>
                                    @foreach($salidas as $salida)
                                    <option value="{{ $salida->id }}">{{ $salida->id}}</option>
                                    @endforeach
                                </select>
                                <label for="id_salida">NUMERO DE SALIDA:</label>
                            </div>

                            <div class="input-field col s12 m6">
                                <select name="id_venta_boleto">
                                    <option selected disabled>Seleccione una opción:</option>
                                    @foreach($boletos as $boleto)
                                    <option value="{{ $boleto->id }}">{{ $boleto->id}}</option>
                                    @endforeach
                                </select>
                                <label for="id_venta_boleto">ID BOLETO VENDIDO:</label>
                            </div>
                            {{-- 
                            <div class="input-field col s12 m6">
                                <input id="id_venta_boleto" type="number" class="validate" name="id_venta_boleto" value="{{old('id_venta_boleto')}}">
                                <label for="id_venta_boleto">ID venta Boleto:</label>
                                @error('id_venta_boleto')
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
