@extends('layouts.app')

@section('content')

<div class="container">
    <h1 class="mt-5">Registro de Usuario</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('libros.registrar') }}" method="POST" class="mt-4">
        @csrf
        <div class="form-group">
            <label for="user_name">Nombre de Usuario:</label>
            <input type="text" id="user_name" name="user_name" class="form-control" value="{{ old('user_name') }}" required>
        </div>
        <div class="form-group">
            <label for="user_pass">Contraseña:</label>
            <input type="password" id="user_pass" name="user_pass" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="user_pass_confirmation">Confirmar Contraseña:</label>
            <input type="password" id="user_pass_confirmation" name="user_pass_confirmation" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="user_tipo">Tipo de Usuario:</label>
            <select id="user_tipo" name="user_tipo" class="form-control" required>
                <option value="0" {{ old('user_tipo') == '0' ? 'selected' : '' }}>Admin</option>
                <option value="1" {{ old('user_tipo') == '1' ? 'selected' : '' }}>Invitado</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Registrar</button>
    </form>
</div>

@endsection
