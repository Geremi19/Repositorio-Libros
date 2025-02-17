<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Libro</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 500px;
            text-align: center;
        }

        h1 {
            color: #222;
            font-weight: 600;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #444;
            margin: 10px 0;
        }

        strong {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detalles del Libro</h1>
        <p><strong>ID:</strong> {{ $libro->id }}</p>
        <p><strong>Nombre:</strong> {{ $libro->nombre }}</p>
        <p><strong>Descripción:</strong> {{ $libro->descripcion }}</p>
        <p><strong>Autor:</strong> {{ $libro->autor }}</p>
    </div>
</body>
</html>
