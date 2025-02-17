@extends('layouts.app')
@section('content') 

  <div class="card-body ">
    <h5 class="card-title mb-3">Buscar Libro por ID</h5>
    <form method="POST" action="{{ route('libros.pdfID') }}" target="_blank"> <!-- Añadir target="_blank" -->
        @csrf <!-- Metodo para crear tokens para evitar ataques de solicitudes-->
        <div class="form-group mb-3">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" class="form-control" required>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">Consultar</button>
        </div>
    </form>

    @if (session('error'))
    <script>
        Swal.fire({
            title: "Oops...",
            text: "{{ session('error') }}",
            icon: "error",
            confirmButtonText: "error"
        });
    </script>
    @endif

  </div>

@endsection
