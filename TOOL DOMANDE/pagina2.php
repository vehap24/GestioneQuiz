<?php
session_start();
$myFile = "Domande.csv";
$fh = fopen($myFile, 'a');
$domanda = $_POST["domanda"];
$risposta_a = $_POST["risposta_a"];
$risposta_b = $_POST["risposta_b"];
$risposta_c = $_POST["risposta_c"];
$risposta_d = $_POST["risposta_d"];
$valore_esatto = $_POST["lista_valore_esatto"];
fwrite($fh, $domanda."|".$risposta_a."|".$risposta_b."|".$risposta_c."|".$risposta_d."|".$valore_esatto."\n");
fclose($fh);
header('Location: pagina1.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    "Inserimento avvenuto???"
</body>
</html>