<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KTM Inspired Chess Board</title>
    <style>
        body {
            background-image: url(./fondo.jpg);
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            font-family: cursive;
        }

        .container {
            text-align: center;
        }

        h1 {
            font-style: italic;
            color: #ff6600;
            font-size: 36px;
        }

        .tablero {
            border-collapse: collapse;
            margin-top: 20px;
            width: 400px;
            height: 400px;
        }

        .tablero td {
            width: 50px;
            height: 50px;
            background-color: #ff6600;
            position: relative;
            border: 1px solid #000; 
        }

        .tablero .blanco {
            background-color: #ffc26a;
        }

        .tablero .negro {
            background-color: #8b0000;
        }

        .tablero .fila-4 td {
            background-color: #4caf50;
        }

        .tablero .ficha {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            position: absolute;
            top: 5px;
            left: 5px;
            background-size: cover;
            background-position: center;
            transition: transform 0.3s ease;
        }

        .tablero .ficha:hover {
            transform: scale(1.2);
        }

        .tablero .ficha-tu {
            background-image: url(./roger.jpg);
        }

        .tablero .ficha-rival {
            background-image: url(./icognito.jpg);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>TABLERO DE DAMAS</h1>
        <table class="tablero">
            <?php
            for ($fila = 0; $fila < 8; $fila++) {
                $clase_fila = ($fila == 3) ? 'fila-4' : '';
                echo "<tr class='$clase_fila'>";
                for ($columna = 0; $columna < 8; $columna++) {
                    // color de las casillas
                    $color = ($fila + $columna) % 2 == 0 ? 'blanco' : 'negro';
                    echo "<td class='$color'>";
                    // Agregar fichas en las posiciones iniciales
                    if (($fila % 2 == 0 && $columna % 2 != 0) || ($fila % 2 != 0 && $columna % 2 == 0)) {
                        if ($fila < 3) {
                            echo "<div class='ficha ficha-tu'></div>";
                        } elseif ($fila > 4) {
                            echo "<div class='ficha ficha-rival'></div>";
                        }
                    }
                    echo '</td>';
                }
                echo '</tr>';
            }
            ?>
        </table>
    </div>
</body>

</html>
