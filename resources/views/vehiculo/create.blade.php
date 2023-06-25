@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('vehiculo.store') }}">
            @csrf

            <div class="col s12 m10 offset-m1 l6 offset-l3 xl8 offset-xl2">
                <div id="panel-left" class="card">

                    <div class="card-content">
                        <span class="card-title primary-text-color primary-text-style">
                            Formulario de Registro de Vehiculo
                            </span>
                        <div class="row">
                            <div class="col s12 divider"></div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12 m6">
                                <input id="modelo" type="text" class="validate" name="modelo" value="{{old('modelo')}}">
                                <label for="modelo">Modelo:</label>
                                @error('modelos')
                                    <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="descripcion" type="text" class="validate" name="descripcion" value="{{old('descripcion')}}">
                                <label for="descripcion">descripcion:</label>
                                @error('descripcion')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                            <div class="input-field col s12 m6">
                                <input id="placa" type="text" class="validate" name="placa" value="{{old('placa')}}">
                                <label for="placa">Placa:</label>
                                @error('placa')
                                <span class="help-block red-text"> {{ $message }} </span>
                                @enderror
                            </div>

                        </div>
                        <div class="card-action right-align">
                            <button type="submit" class="btn-floating btn-large blue pulse"><i class="material-icons">save</i></a>
                        </div>
                        <div class="text right-align ">

                        </div>

                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
