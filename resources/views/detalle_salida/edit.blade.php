@extends('layouts.app')
@section('content')

    <div class="row">
        <form method="POST" action="{{ route('salida.update', [$salida->id]) }}">
            @csrf
            @method('PUT')

            <div class="col s12 m10 offset-m1 l6 offset-l3 xl6 offset-xl3">
                <div id="panel-left" class="card">

                    <div class="card-content">
                        <span class="card-title primary-text-color primary-text-style">
                            Formulario de Edición
                            </span>
                        <div class="row">
                            <div class="col s12 divider"></div>
                        </div>

                        <div class="row">

                            <div class="input-field col s12 m6">
                                <select name="id_venta_boleto">
                                    <option selected disabled>Seleccione una opción:</option>
                                    @foreach($boletos as $boleto)
                                    <option value="{{ $boleto->id }}">{{ $boleto->id}}</option>
                                    @endforeach
                                </select>
                                <label for="id_venta_boleto">ID BOLETO VENDIDO:</label>
                            </div>
                            
                            <div class="input-field col s12 m6">
                                <select name="id_salida">
                                    <option selected disabled>Seleccione una opción:</option>
                                    @foreach($salidas as $salida)
                                    <option value="{{ $salida->id }}">{{ $salida->id}}</option>
                                    @endforeach
                                </select>
                                <label for="id_salida">NUMERO DE SALIDA:</label>
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
