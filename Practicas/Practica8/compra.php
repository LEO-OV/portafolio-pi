<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Práctica 8</title>
</head>
<body>
    <header>
        <h1>Práctica 8</h1>
        <h7>Leonardo Velasco Ojeda</h7>
    </header>
    <section>
        <article>
            <p>
                Utilizar la base de datos que realizamos en clase para mostrar una tabla en HTML que muestre a 
                su vez la tabla compra. En esta tabla se deben sustituir los valores numéricos de las llaves 
                foráneas por el valor String que corresponda (recuerde que los id en todas las tablas de la BD 
                son valores Int). <br><br>Por ejemplo:<br><br>
            </p>
            <center><table  class="example">
                <tr>
                    <th>id</th>
                    <th>Modelo</th>
                    <th>Usuario</th>
                    <th>Folio</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Tsuru</td>
                    <td>Jose Perez</td>
                    <td>1234</th>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Chevy</td>
                    <td>Maria Gonzalez</td>
                    <td>3214</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Prius</td>
                    <td>Monica Sanchez</td>
                    <td>7894</td>
                </tr>
            </table></center>
        </article>
        <article  class = "resultado">
            <h2>COMPRAS</h2><br>
            <?php  
                include 'conn.php';

                $consulta = "SELECT * FROM compra;";
                $resultado = mysqli_query($con, $consulta);

                echo "<table class='compras'><tr> <th>ID</th> <th>Modelo</th> <th>Usuarios</th> <th>Folios</th> </tr>";

                while ($row = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td>" .$row['id'] . "</td>";

                    $con_modelo = mysqli_query($con, "SELECT nombre FROM modelo WHERE id=" .$row['idModelo']);
                    $modelo = mysqli_fetch_assoc($con_modelo);

                    echo "<td>" . $modelo['nombre']. "</td>";

                    $con_usuario = mysqli_query($con, "SELECT nombre FROM usuarios WHERE id=" .$row['idUsuario']);
                    $usuario = mysqli_fetch_assoc($con_usuario);

                    echo "<td>" .$usuario['nombre']. "</td>";

                    echo "<td>" .$row['folio'] . "</td>";
                }

                mysqli_close($con);

                echo "</table>"
            ?>
        </article>
    </section>
</body>
</html>