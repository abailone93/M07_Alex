<?php
    if(isset($_SESSION)){
        session_start();
    }
    //elimina todas las variables session
    session_unset();
    //destruye la session
    session_destroy();


    //60 segundos
?>