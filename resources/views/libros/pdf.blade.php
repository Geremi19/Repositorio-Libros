@extends('layouts.app')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

    body {
        font-family: 'Poppins', Arial, sans-serif;
        background-color: #f4f4f4;
        padding: 40px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    h2 {
        text-align: center;
        color: #222;
        font-weight: 600;
        margin-bottom: 20px;
    }

    table {
        width: 90%;
        max-width: 900px;
        border-collapse: collapse;
        background-color: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        color: #444;
    }

    th {
        background-color: #333;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 600;
    }

    tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tr:hover {
        background-color: #f1f1f1;
        box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.05);
        transition: 0.3s ease-in-out;
    }

    td:first-child {
        font-weight: bold;
        color: #222;
    }

    @media (max-width: 768px) {
        table {
            width: 100%;
        }
        th, td {
            padding: 12px;
            font-size: 14px;
        }
    }
</style>

<h2>Listado de Libros</h2>

<table class="table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Autor</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($libros as $libro)
        <tr>
            <td>{{ $libro->nombre }}</td>
            <td>{{ $libro->descripcion }}</td>
            <td>{{ $libro->autor }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
