@extends('layouts.app')
@section('content')

<div class="card-body ">
    <h5 class="card-title mb-3">Añadir un libro</h5>
        <form method="POST" action="{{ route('libros.store')}}">
            @csrf <!-- Metodo para crear tokens para evitar atques de solicitudes-->
            <div class="form-group mb-3">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="descripcion">Descripción:</label>
                <input type="text" id="descripcion" name="descripcion" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="autor">Autor:</label>
                <input type="text" id="autor" name="autor" class="form-control" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar</button>

        </form>

         <!-- Alerta de éxito si se creó correctamente -->
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

    @if ($errors->has('descripcion'))
        <script>
            Swal.fire({
                title: "¡Error!",
                text: "{{ $errors->first('descripcion') }}",
                icon: "error",
                confirmButtonText: "Aceptar"
            });
        </script>
    @endif

    @if ($errors->any())
        <script>
            let errorMessage = "";
            @foreach ($errors->all() as $error)
                errorMessage += "{{ $error }}\n";
            @endforeach

            Swal.fire({
                title: "¡Error!",
                text: errorMessage,
                icon: "error",
                confirmButtonText: "Aceptar"
            });
        </script>
    @endif
        

  </div>

@endsection