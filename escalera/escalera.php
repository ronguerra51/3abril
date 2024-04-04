<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Escalera</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
            background-image: url(./ktm.jpg);
            background-size: cover;
            background-position: center;

        }

        .escalera {
            margin-top: 20px;
            margin-left: 35%;
        }

        .bloque {
            display: inline-block;
            width: 80px;
            height: 70px;
            background-color: #eb6117;
            margin-right: 5px;
            border: 2px solid #d35400;
            text-align: center;
            line-height: 70px;
            color: #000000;
            font-size: 24px;
        }
        .bloque:hover {
            transform: scale(1.1);
        }

        h2 {
            font-family: cursive;
            font-size: 36px;
            color: #fdd07a;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-left: 36%;
        }
    </style>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $pisos = $_POST['pisos'];
        if ($pisos == 5) {
            echo "<h2>ESCALERA DE $pisos PISOS:</h2>";
            echo "<div class='escalera'>";
            // Oración formada por letras piso 5.
            $letras = ["E", "L", "A", "G", "U", "A", "E", "S", "T", "A", "F", "R", "I", "A", "!"];
            $total_bloques = 0; // Contador para el total de bloques
            for ($i = 0; $i < $pisos; $i++) {
                for ($j = 0; $j <= $i; $j++) {
                    echo "<div class='bloque'>" . $letras[$total_bloques % count($letras)] . "</div>";
                    $total_bloques++;
                }
                echo "<br>";
            }
            echo "</div>";
        } else if ($pisos == 6) {
            echo "<h2>ESCALERA DE $pisos PISOS:</h2>";
            echo "<div class='escalera'>";
            // Oración formada por letras piso 6.
            $letras = ["L", "A", "L", "U", "N", "A", "I", "L", "U", "M", "I", "N", "A", "E", "L", "C", "I", "E", "L", "O", "*"];
            $total_bloques = 0; // Contador para el total de bloques
            for ($i = 0; $i < $pisos; $i++) {
                for ($j = 0; $j <= $i; $j++) {
                    echo "<div class='bloque'>" . $letras[$total_bloques % count($letras)] . "</div>";
                    $total_bloques++;
                }
                echo "<br>";
            }
            echo "</div>";
        } else if ($pisos == 7) {
            echo "<h2>ESCALERA DE $pisos PISOS:</h2>";
            echo "<div class='escalera'>";
            // Oración formada por letras piso 7.
            $letras = ["*", "L", "A", "N", "A", "T", "U", "R", "A", "L", "E", "Z", "A", "E", "S", "M", "A", "R", "A", "V", "I", "L", "L", "O", "S", "A", "!"];
            $total_bloques = 0; // Contador para el total de bloques
            for ($i = 0; $i < $pisos; $i++) {
                for ($j = 0; $j <= $i; $j++) {
                    echo "<div class='bloque'>" . $letras[$total_bloques % count($letras)] . "</div>";
                    $total_bloques++;
                }
                echo "<br>";
            }
            echo "</div>";
        } else if ($pisos == 8) {
            echo "<h2>ESCALERA DE $pisos PISOS:</h2>";
            echo "<div class='escalera'>";
            // Oración formada por letras piso 8.
            $letras = ["A", "T", "I", "D", "I", "O", "S", "T", "E", "A", "M", "A", "D", "E", "M", "A", "S", "I", "A", "D", "O", "E", "L", "E", "S", "E", "L", "R", "E", "Y", "D", "E", "T", "O", "D", "O"];
            $total_bloques = 0; // Contador para el total de bloques
            for ($i = 0; $i < $pisos; $i++) {
                for ($j = 0; $j <= $i; $j++) {
                    echo "<div class='bloque'>" . $letras[$total_bloques % count($letras)] . "</div>";
                    $total_bloques++;
                }
                echo "<br>";
            }
            echo "</div>";
        } else {
            echo "<h2>Por favor, ingresa un número de pisos válido (entre 5 y 8).</h2>";
        }
    }
    ?>
</body>

</html>