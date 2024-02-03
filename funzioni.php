<?php
function random(){
    srand();
    $array[];
    dowhile(sizeof($array)==10){
        $filePath = "Domande.csv"; 
        $numero_casuale = rand(1, count(file($filePath)));
        for($i = 0; $i<sizeof($array); $i++){
            if($array[$i] != $numero_casuale)
            $array[] = $numero_casuale;
        }
    }
}
?>