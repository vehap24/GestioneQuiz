<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="font-family: Helvetica, Sans-Serif;">
        <form method="POST" action="pagina2.php">
        Domanda: <input type="text" name="domanda" style="width:600px";><br>
        Risposta A: <input type=text name=risposta_a><br>
        Risposta B: <input type=text name=risposta_b><br>
        Risposta C: <input type=text name=risposta_c><br>
        Risposta D: <input type=text name=risposta_d><br>
        Valore Risposta Esatta
        <select name="lista_valore_esatto">
        <?php
        $valore_esatto = [1,2,3,4];
        foreach($valore_esatto as $chiave_valore_esatto)
        echo"<option>$chiave_valore_esatto</option>";
        ?>
        <input type=submit value=Scrivi>
    </div>
    <img width=400px src=https://upload.wikimedia.org/wikipedia/commons/thumb/d/de/Logo-gruppo-maggioli.svg/1200px-Logo-gruppo-maggioli.svg.png><br>
</body>
</html>