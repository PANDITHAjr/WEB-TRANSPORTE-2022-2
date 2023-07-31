@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                {{-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSp8Jxw998h79i4ujAGtowKQrfnDXv0YdetT4k2YI0Tv42UUPmOczJJWVuikNma6Jzu65I&usqp=CAU"> --}}
                                {{-- <span style="color:blue" class="card-title">FICH</span> --}}
                                <img class="card-img" src="{{ asset('images/baner.png') }}"
                                    style="width: 815px; height: 115px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img class="card-img" src="{{ asset('images/logoizquierdo.png') }}">
                                {{-- <span class="card-title">CARLOS</span> --}}
                            </div>
                            <div class="card-action">
                                <a href="{{ route('sindicato.index') }}", class="btn btn-floating red pulse"><i
                                        class="material-icons">group</i></a>
                                <a style="color:brown; font-size: 14px; font-family: Georgia;">SINDICATOS</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img class="card-img" src="{{ asset('images/logomedio.png') }}">
                                {{-- <span class="card-title">CARLOS</span> --}}
                            </div>
                            <div class="card-action">
                                <a href="{{ route('personal.index') }}", class="btn btn-floating yellow pulse"><i
                                        class="material-icons">contact_mail</i></a>
                                <a style="color:brown; font-size: 14px; font-family: Georgia;">PERSONAL</a>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                                <img class="card-img" src="{{ asset('images/logoderecho.png') }}">
                                {{-- <span class="card-title">CARLOS</span> --}}
                            </div>
                            <div class="card-action">
                                <a href="{{ route('sindicato.index') }}", class="btn btn-floating green pulse"><i
                                        class="material-icons">airport_shuttle</i></a>
                                <a style="color:brown; font-size: 14px; font-family: Georgia;">VEHICULOS</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
