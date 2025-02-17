@extends('layouts.app')
@section('content')
<!-- Reutiliza toda la estructura-->
 

  <div class="card-body">
    <h5 class="card-title mb-3">Eliminar un libro</h5>
        <form method="POST" action="{{ route('libros.destroy') }}">
            @csrf <!-- Metodo para crear tokens para evitar atques de solicitudes-->
            <div class="form-group mb-3">
                <label for="IdLibro">Id del Libro:</label>
                <input type="text" id="IdLibro" name="IdLibro" class="form-control" required>
            </div>
            
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Button</button>
            </div>
        </form>
        @if (session('success'))
        <script>
            Swal.fire({
                title: "¡Éxito!",
                text: "{{ session('success') }}",
                icon: "success",
                confirmButtonText: "Aceptar"
            });
        </script>
        @endif
        @if (session('error'))
        <script>
            Swal.fire({
                title: "Oops...",
                text: "{{ session('error') }}",
                icon: "error",
                confirmButtonText: "Aceptar"
            });
        </script>
        @endif

  </div>

@endsection


