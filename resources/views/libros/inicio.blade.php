@extends('layouts.app')

@section('content')

<div class="container d-flex flex-column align-items-center justify-content-center vh-100">
    @if ($user)
        <h1 class="fw-light text-center">Hola, <span class="fw-bold">{{ $user->user_name }}</span> 👋</h1>
        <p class="text-muted">Bienvenido de nuevo</p>

        <div class="mt-3 text-center">
            <p class="fw-bold mb-1">Tipo de Usuario: <span class="text-primary">{{ $user->user_tipo == '0' ? 'Administrador' : 'Invitado' }}</span></p>
            <p class="text-muted">{{ now()->format('l, d F Y - h:i A') }}</p> 
        </div>

    @else
        <a href="{{ route('login') }}" class="btn btn-primary mt-3">Iniciar sesión</a>
    @endif
</div>

@endsection
