<?php
session_start();
$risposte_corrette = 0;
var_dump($_SESSION["risposta"]);
echo "<br>";
//var_dump($_SESSION["ArrayDomande"]);
echo "<br>";
$numero_domanda = $_SESSION["ArrayDomande"];
$domanda = file('Domande.csv');
for($i = 0; $i < 10; $i++){
    $temp_array = explode('|',$domanda[$numero_domanda[$i]-1]);
    echo $temp_array[0];
    echo "<br>";
    if($_SESSION["risposta"][$i] == $temp_array[5]){
        echo "Risposta data e corretta: ";
        echo $temp_array[intval($temp_array[5])];
        echo "<br><br>";
        $risposte_corrette++;
        //echo "Bravo!!!<br>";
    } else {
        echo "Risposta data: ";
        echo $temp_array[intval($_SESSION["risposta"][$i])];
        echo "<br>";
        echo "Risposta corretta: ";
        echo $temp_array[intval($temp_array[5])];
        echo "<br><br>";
        //echo "NOOOOOOO!!!<br>";
    }
}
echo $risposte_corrette;
echo "/10 risposte corrette";
?>