<?php
    //siempre iniciar sesion lo primero
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
        <?php
            $_SESSION['nombre'] = "Alex Bailón";
            $cookie_nombre = "usuario";
            $cookie_valor = "Alex Bailon";
            setcookie($cookie_nombre, $cookie_valor); 
            setcookie("telefono", "622276168");
            //sintaxsis
            //setcookie(name, value, expire, path, domain, secure, httponly);
            setcookie($cookie_nombre, $cookie_valor, time() + (86400 * 7), "/"); // 86400 = 1 dia * 7 para semana
        ?>
        <a href="segunda.php">Segunda pagina php</a>
    </body>
</html>