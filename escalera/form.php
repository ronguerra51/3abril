<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Dibujar Escalera</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
            background-image: url(./fond.jpg);
            background-size: cover;
            
        }

        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 20px;
        }

        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <form action="escalera.php" method="post">
        <label for="pisos">Número de pisos (5-8):</label>
        <input type="number" id="pisos" name="pisos" min="5" max="8" required>
        <input type="submit" value="Dibujar Escalera">
    </form>
</body>

</html>