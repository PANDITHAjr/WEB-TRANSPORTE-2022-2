@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="row">

                    <br>
                    <br>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://image-cdn.beforward.jp/backoffice/uploads/stock/BF14307_1.jpg">
                                <span class="card-title">POR UN</span>
                            </div>
                            <div class="card-action">
                                <a href="{{ route('ventaboleto.index') }}", class="btn btn-floating red pulse"><i class="material-icons">confirmation_number</i></a>
                                <a style="color:brown; font-size: 14px; font-family: Georgia;">VENDER BOLETO</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">

                                <img src="https://www.dealerlogin.co/py/Central-Automotores/image_188_8577992_6.jpeg">
                                <span class="card-title">VIAJE</span>
                            </div>
                            <div class="card-action">
                                <a href="{{ route('salida.index') }}", class="btn btn-floating yellow pulse"><i class="material-icons">airport_shuttle</i></a>
                                <a style="color:brown; font-size: 14px; font-family: Georgia;">RESG. DE SALIDAS</a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img src="https://image-cdn.beforward.jp/large/201607/652657/BF538507_e08458.jpg">
                                <span class="card-title">SEGURO</span>
                            </div>
                            <div class="card-action">
                                <a href="{{ route('conductor.index') }}", class="btn btn-floating green pulse"><i class="material-icons">airline_seat_recline_normal</i></a>
                                <a style="color:brown; font-size: 14px; font-family: Georgia;"> CHOFERES</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
