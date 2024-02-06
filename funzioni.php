<?php
session_start();
if($_SESSION["risposta"] == null)
    $_SESSION["risposta"] = $risposte = [];
if($_SESSION["indice"] == null){
    $x = 0;
    $_SESSION["indice"] = $x;
}




?>