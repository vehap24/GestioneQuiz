<?php
session_start();
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
    $_SESSION['indice']=0;
    $_SESSION["risposta"] = null;
    //var_dump($array);
}
random();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Inizio..</title>
</head>
<body>
    <div class="text-center">
       <img style="height: 7%; width: 7%" src="logo.jpg"> 
    </div>
    <form action="gioca.php" class="text-center" style="margin-top:100px" method="POST">
        <p class="text-light" style="font-size:100px">SEI PRONTO AD AVVIARE LA PARTITA???</p>
        <input type="submit" class="bottoneHome" value="YEAHHHH LET'S GOOOO!!!!!">
    </form>
</body>
</html>