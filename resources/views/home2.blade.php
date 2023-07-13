@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="row">
                <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                    <img src="https://images3.alphacoders.com/131/1316225.jpg">
                    <span class="card-title"></span>
                    </div>
                    <div class="card-content">
                    <p></p>
                    </div>
                    <div class="card-action">
                    <a href="{{ route('cliente.index') }}">PERSONAL</a>
                    </div>
                </div>
                </div>

                <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                    <img src="https://images3.alphacoders.com/131/1316225.jpg">
                    <span class="card-title"></span>
                    </div>
                    <div class="card-content">
                    <p></p>
                    </div>
                    <div class="card-action">
                    {{-- <a href="{{ route('personal.indexc') }}">CHOFERES</a> --}}
                    </div>
                </div>
                </div>

                <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                    <img src="https://images3.alphacoders.com/131/1316225.jpg">
                    <span class="card-title"></span>
                    </div>
                    <div class="card-content">
                    <p></p>
                    </div>
                    <div class="card-action">
                    {{-- <a href="{{ route('personal.indexc') }}">RUTAS</a> --}}
                    </div>
                </div>
                </div>
            </div>





            <div class="row">
                <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                    <img src="https://images3.alphacoders.com/131/1316225.jpg">
                    <span class="card-title"></span>
                    </div>
                    <div class="card-content">
                    <p></p>
                    </div>
                    <div class="card-action">
                    {{-- <a href="{{ route('personal.indexc') }}">SINDICATOS</a> --}}
                    </div>
                </div>
                </div>

                <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                    <img src="https://images3.alphacoders.com/131/1316225.jpg">
                    <span class="card-title"></span>
                    </div>
                    <div class="card-content">
                    <p></p>
                    </div>
                    <div class="card-action">
                    {{-- <a href="{{ route('personal.indexc') }}">VEHICULO</a> --}}
                    </div>
                </div>
                </div>

                <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                    <img src="https://images3.alphacoders.com/131/1316225.jpg">
                    <span class="card-title"></span>
                    </div>
                    <div class="card-content">
                    <p></p>
                    </div>
                    <div class="card-action">
                    {{-- <a href="{{ route('personal.indexc') }}">PROMOCIONES</a> --}}
                    </div>
                </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
