<?php
    if(isset($_SESSION)){
        session_start();
    }
    //elimina todas las variables session
    session_unset();
    //destruye la session
    session_destroy();
    $cookie_nombre = "usuario";
    $cookie_valor = "Alex Bailon";
    setcookie($cookie_nombre, $cookie_valor, time() + (30 + 30), "/); //60 segundos
    
?>