<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz Numerada</title>
    <style>
        body {
            background-image: url(./matriz.jpg);
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            color: #74acdf; 
            text-align: center;
        }

        table {
            border-collapse: collapse;
            margin: 20px auto;
        }

        td {
            border: 2px solid #74acdf;
            width: 50px;
            height: 50px;
            text-align: center;
            vertical-align: middle;
        }

        .resultado {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Matriz Numerada</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $filas = $_POST['filas'];
            $columnas = $_POST['columnas'];

            echo "<table>";
            for ($i = 1; $i <= $filas; $i++) {
                echo "<tr>";
                for ($j = 1; $j <= $columnas; $j++) {
                    $numero_casilla = ($i - 1) * $columnas + $j;
                    echo "<td>$numero_casilla</td>";
                }
                echo "</tr>";
            }
            echo "</table>";

            echo "<div class='resultado'>";
            echo "<h3>Suma de una Columna</h3>";
            echo "<form method='post'>";
            echo "<label for='columna'>Elija una columna:</label>";
            echo "<input type='number' id='columna' name='columna' min='1' max='$columnas' required>";
            echo "<input type='hidden' name='filas' value='$filas'>";
            echo "<input type='hidden' name='columnas' value='$columnas'>";
            echo "<input type='submit' value='Sumar'>";
            echo "</form>";

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['columna'])) {
                $columna_elegida = $_POST['columna'];
                $suma = 0;

                if ($columna_elegida >= 1 && $columna_elegida <= $columnas) {
                    for ($i = 1; $i <= $filas; $i++) {
                        $numero_casilla = ($i - 1) * $columnas + $columna_elegida;
                        $suma += $numero_casilla;
                    }
                    echo "<p>La suma de la columna $columna_elegida es: $suma</p>";
                } else {
                    echo "<p style='color: red;'>La columna elegida es inválida.</p>";
                }
            }
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>
