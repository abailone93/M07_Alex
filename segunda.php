<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <p>
            <?php
                echo $_SESSION['nombre'];
                if (isset($_COOKIE['telefono'])){
                    echo $_COOKIE['telefono'];
                }
            ?>
        </p>
        <form action="controladorSesiones.php" method="POST">
            <button type="submit" name="destruir">Destruir sesion</button>
        </form>
    </body>
</html>
