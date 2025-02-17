@extends('layouts.app')
@section('content')
<h2>Listado de Libros</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Autor</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    @foreach ($libros as $libro)
      <td>{{ $libro->nombre }}</td><!-- Accede a los datos-->
      <td>{{ $libro->descripcion }}</td>
      <td>{{ $libro->autor }}</td>
      <td>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal{{ $libro->id }}">
            Actualizar
        </button>
        @include('libros.actualizar')
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
<!-- target manda a otra pag-->
<a href="{{ URL('libros/pdf') }}" target="_blank" class="btn btn-success">Generar reporte</a>
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
@endsection