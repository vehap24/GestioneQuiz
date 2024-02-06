<?php
session_start();
$risposte_corrette = 0;
var_dump($_SESSION["risposta"]);
echo "<br>";
//var_dump($_SESSION["ArrayDomande"]);
echo "<br>";
$numero_domanda = $_SESSION["ArrayDomande"];
$domanda = file('Domande.csv');
for($i = 0; $i < 20; $i++){
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
echo "/20 risposte corrette";

switch($risposte_corrette){
case 0:
    echo "immagine_1";
    break;
case 1:
    echo "immagine_2";
    break;
case 2:
    echo "immagine_3";
    break;
case 3:
    echo "immagine_4";
    break;
case 4:
    echo "immagine_5";
    break;
case 5:
    echo "immagine_6";
    break;
case 6:
    echo "immagine_7";
    break;
case 7:
    echo "immagine_8";
    break;
case 8:
    echo "immagine_9";
    break;
case 9:
    echo "immagine_10";
    break;
case 10:
    echo "immagine_11";
    break;
case 11:
    echo "immagine_12";
    break;
case 12:
    echo "immagine_13";
    break;
case 13:
    echo "immagine_14";
    break;
case 14:
    echo "immagine_15";
    break;
case 15:
    echo "immagine_16";
    break;
case 16:
    echo "immagine_17";
    break;
case 17:
    echo "immagine_18";
    break;
case 18:
    echo "immagine_19";
    break;
case 19:
    echo "immagine_20";
    break;
case 20:
    echo "immagine_21";
    break;

}
?>