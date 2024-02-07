<?php
session_start();
$risposte_corrette = 0;
//var_dump($_SESSION["risposta"]);  //DEBUG!!!
echo "<br>";
//var_dump($_SESSION["ArrayDomande"]);  //DEBUG!!!
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
echo "<br>";
switch($risposte_corrette){
case 0:
    echo "<img src='immagine_1.jpg'>";
    break;
case 1:
    echo "<img src='immagine_2.jpg'>";
    break;
case 2:
    echo "<img src='immagine_3.jpg'>";
    break;
case 3:
    echo "<img src='immagine_4.jpg'>";
    break;
case 4:
    echo "<img src='immagine_5.jpg'>";
    break;
case 5:
    echo "<img src='immagine_6.jpg'>";
    break;
case 6:
    echo "<img src='immagine_7.jpg'>";
    break;
case 7:
    echo "<img src='immagine_8.jpg'>";
    break;
case 8:
    echo "<img src='immagine_9.jpg'>";
    break;
case 9:
    echo "<img src='immagine_10.jpg'>";
    break;
case 10:
    echo "<img src='immagine_11.jpg'>";
    break;
case 11:
    echo "<img src='immagine_12.jpg'>";
    break;
case 12:
    echo "<img src='immagine_13.jpg'>";
    break;
case 13:
    echo "<img src='immagine_14.jpg'>";
    break;
case 14:
    echo "<img src='immagine_15.jpg'>";
    break;
case 15:
    echo "<img src='immagine_16.jpg'>";
    break;
case 16:
    echo "<img src='immagine_17.jpg'>";
    break;
case 17:
    echo "<img src='immagine_18.jpg'>";
    break;
case 18:
    echo "<img src='immagine_19.jpg'>";
    break;
case 19:
    echo "<img src='immagine_20.jpg'>";
    break;
case 20:
    echo "<img src='immagine_21.jpg'>";
    break;
}
?>