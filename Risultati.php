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
    echo "<br>COME DIAVOLO HAI FATTO?!?!?!<br>";
    echo "<img src='immagine_1.jpg'>";
    break;
case 1:
    "<br>Frase 2<br>";
    echo "<img src='immagine_2.jpg'>";
    break;
case 2:
    "<br>Frase 3<br>";
    echo "<img src='immagine_3.jpg'>";
    break;
case 3:
    "<br>Frase 4<br>";
    echo "<img src='immagine_4.jpg'>";
    break;
case 4:
    "<br>Frase 5<br>";
    echo "<img src='immagine_5.jpg'>";
    break;
case 5:
    "<br>Frase 6<br>";
    echo "<img src='immagine_6.jpg'>";
    break;
case 6:
    "<br>Frase 7<br>";
    echo "<img src='immagine_7.jpg'>";
    break;
case 7:
    "<br>Frase 8<br>";
    echo "<img src='immagine_8.jpg'>";
    break;
case 8:
    "<br>Frase 9<br>";
    echo "<img src='immagine_9.jpg'>";
    break;
case 9:
    "<br>Frase 10<br>";
    echo "<img src='immagine_10.jpg'>";
    break;
case 10:
    "<br>Frase 11<br>";
    echo "<img src='immagine_11.jpg'>";
    break;
case 11:
    "<br>Frase 12<br>";
    echo "<img src='immagine_12.jpg'>";
    break;
case 12:
    "<br>Frase 13<br>";
    echo "<img src='immagine_13.jpg'>";
    break;
case 13:
    "<br>Frase 14<br>";
    echo "<img src='immagine_14.jpg'>";
    break;
case 14:
    "<br>Frase 15<br>";
    echo "<img src='immagine_15.jpg'>";
    break;
case 15:
    "<br>Frase 16<br>";
    echo "<img src='immagine_16.jpg'>";
    break;
case 16:
    "<br>Frase 17<br>";
    echo "<img src='immagine_17.jpg'>";
    break;
case 17:
    "<br>Frase 18<br>";
    echo "<img src='immagine_18.jpg'>";
    break;
case 18:
    "<br>Frase 19<br>";
    echo "<img src='immagine_19.jpg'>";
    break;
case 19:
    "<br>Frase 20<br>";
    echo "<img src='immagine_20.jpg'>";
    break;
case 20:
    "<br>Frase 21<br>";
    echo "<img src='immagine_21.jpg'>";
    break;
}
?>