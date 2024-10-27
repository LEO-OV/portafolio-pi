<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aproximación de Pi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $n = 0;
        $numErr = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $n = $_POST["n"];
            if ($n < 0 ){
                $numErr = "El número debe ser mayor a cero.";
            }
        } 
    ?>

    <div class="contenedor">

        <div class="ejercicio">
            <h1>Aproximación de π</h1>
            <br>
            <p> Una función en PHP que aproxime el valor del número pi. Solicite al usuario un valor para 
                el límite superior n de la suma a través de un formulario, mientras más grande sea n mejor
                será la aproximación. Verifique que el valor de n sea mayor que cero.
            </p>
            <br>
            <form method="POST" action="<?php ($_SERVER["PHP_SELF"]) ?>">
                <label for="n">Ingrese el límite de la aproximación: </label>
                <input type="number" id="n" name="n"><br>
                <span class="error"> <?php echo $numErr ?> </span>
                <input type="submit">
            </form>
        </div>

        <div class="resultado">
            <table class="res">
                <?php
                    echo "<tr> <th>n</th> <th>x</th> </tr>";
                    for ($j = 0; $j <= $n; $j++){
                        $x = 0;
                        for($i = 0; $i <= $j; $i++){
                            $x  += pow(-1,$i)/(2*$i+1);
                        }
                        $x *= 4;

                        echo "<tr><td>" . $j . "</td><td>" . $x . "</td></tr>";
                    }

                ?>
            </table>
        </div>

    </div>
        
</body>
</html>