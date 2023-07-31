@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('ruta.store') }}">
            @csrf

            <div class="col s12 m10 offset-m1 l6 offset-l3 xl8 offset-xl2">
                <div id="panel-left" class="card">

                    <div class="card-content">
                        <span class="card-title primary-text-color primary-text-style">
                            Formulario de Registro
                            </span>
                        <div class="row">
                            <div class="col s12 divider"></div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="origen" type="text" class="validate" name="origen" value="{{old('origen')}}">
                                <label for="origen">Origen:</label>
                                @error('origen')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="destino" type="text" class="validate" name="destino" value="{{old('destino')}}">
                                <label for="destino">Destino:</label>
                                @error('destino')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="input-field col s12 m6">
                                <input id="tarifa" type="number" class="validate" name="tarifa" value="{{old('tarifa')}}">
                                <label for="tarifa">Tarifa:</label>
                                @error('tarifa')
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
