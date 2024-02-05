<?php
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

    //var_dump($array);
}
?>