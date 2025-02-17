@extends('layouts.app2')

@section('content')

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body text-center">
                <h4 class="mb-4">Iniciar Sesión</h4>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" id="user_name" name="user_name" class="form-control text-center" placeholder="Username" required>
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" id="user_pass" name="user_pass" class="form-control text-center" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Continue</button>
                </form>

                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
