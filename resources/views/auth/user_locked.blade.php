@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: black; color: white; font-weight: bold; text-align: center;">Cuenta Bloqueada</div>

                <div class="card-body">
                    <div style="text-align: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-shield-lock" viewBox="0 0 16 16">
                            <path d="M2.5 1a.5.5 0 0 0-.5.5V3h1V1.5a.5.5 0 0 0-.5-.5zM1.207 7.137a.5.5 0 0 1 .237-.628l7-4a.5.5 0 0 1 .527 0l7 4a.5.5 0 0 1 .237.628L15.5 8a.5.5 0 0 1-.5.5h-14a.5.5 0 0 1-.5-.5v-.5zm.293 1.137a.5.5 0 0 0-.237.628l7 4a.5.5 0 0 0 .527 0l7-4a.5.5 0 0 0-.237-.628L8 9.5a.5.5 0 0 0-.5.5v2a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 .5-.5V9.5a.5.5 0 0 0-.293-.463l-7-4z"/>
                            <path d="M3 9.5V8h1v1.5a.5.5 0 0 0 1 0V8h1v1.5a1.5 1.5 0 0 1-3 0z"/>
                        </svg>
                    </div>
                    <div class="card-body" style="text-align: center; padding: 40px;">
                        <div style="font-size: 48px; margin-bottom: 20px;">
                            <i class="fas fa-lock" style="color: #d9534f;"></i>
                        </div>
                        <h2 style="font-size: 24px; margin-bottom: 10px; color: red;">Cuenta Bloqueada</h2>
                        <p style="font-size: 16px; color: #777;">Tu cuenta ha sido bloqueada.</p>
                        <p style="font-size: 16px; color: #777;">Por favor, contacta al administrador para obtener ayuda.</p>
                        <button style="background-color: red; color: #fff; border: none; padding: 10px 20px; font-size: 16px; cursor: pointer;">
                            <a href="https://api.whatsapp.com/send/?phone=59167671718&text=Hola+PANDITHAjr+mi+cuenta+se+encuentra+BLOQUEADA%21&type=phone_number&app_absent=0" style="color: #fff;"> Contactar al Administrado
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
