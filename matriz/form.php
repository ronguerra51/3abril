<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar Dimensiones de la Matriz</title>
    <style>
        body {
            background-image: url(./form\ .jpg);
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            background-color: #e6e6e6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #74acdf;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #fff;
            text-align: center;
        }

        form {
            text-align: center;
            margin-top: 20px;
        }

        input[type="number"] {
            padding: 5px;
            margin-right: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            padding: 8px 15px;
            border-radius: 5px;
            border: none;
            background-color: #128a1e;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0c6d14; 
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>DIMENSIONES DE LA MATRIZ</h1>
        <form action="matriz.php" method="post">
            <label for="filas">Filas:</label>
            <input type="number" id="filas" name="filas" min="1" max="10" value="" required>
            <label for="columnas">Columnas:</label>
            <input type="number" id="columnas" name="columnas" min="1" max="10" value="" required>
            <input type="submit" value="Crear Matriz">
        </form>
    </div>
</body>

</html>
