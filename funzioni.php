<?php
session_start();
if($_SESSION["risposta"] == null)
$_SESSION["risposta"] = $risposte = [];
if($_SESSION["indice"] == null)
$_SESSION["indice"] = 0;

function random(){
    srand();
    $filePath = "Domande.csv";
    $array = [];
    do {
        $numero_casuale = rand(1, count(file($filePath)));
        if (!in_array($numero_casuale, $array)) {
            $array[] = $numero_casuale;
        }
    } while (sizeof($array) < 10);
    $_SESSION['ArrayDomande'] = $array;
    //var_dump($array);
}

function tieni_traccia($risposta_data){
    $risposte[] = $risposta_data;
    $_SESSION["risposta"] = $risposte; 
    $_SESSION["indice"] += 1;
    return $_SESSION["risposta"];
    return $_SESSION["indice"];
}
?>