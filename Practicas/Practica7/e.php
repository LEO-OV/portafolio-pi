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
            <h1>Aproximación de e</h1><br>
            <p> Una función en PHP que aproxime el valor del número e. Solicite al usuario un valor para el límite superior n 
                de la suma a través de un formulario, mientras más grande sea mejor será la aproximación. En este caso será 
                necesario que desarrolle una función adicional para la operación factorial. Verifique que el valor de n sea mayor que cero.
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
                            $x  += 1/factorial($i);
                        }

                        echo "<tr><td>" . $j . "</td><td>" . $x . "</td></tr>";

                    }

                    function factorial($i){

                        $res_fac = 1; 

                        if ($i != 0){
                            for ($a = $i; $a >= 1; $a--){
                                $res_fac *= $a;
                            }
                        }

                        return $res_fac;
                    }

                ?>
            </table>
        </div>

    </div>

</body>
</html>