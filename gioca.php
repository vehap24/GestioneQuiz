<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quizzzz</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<?php
include('funzioni.php');
$domanda = file('Domande.csv');
$numero_domanda = $_SESSION["ArrayDomande"];
$indice = $_SESSION["indice"];
$temp_array = explode('|',$domanda[$numero_domanda[$indice]-1]); //Non so perchè funziona... Ma funziona... NON TOCCARLO!!!
var_dump($_SESSION["ArrayDomande"]);//DEBUG!!!
?>
<body>
    <div class="text-center container">
        <img style="height: 7%; width: 7%" src="logo.jpg"> 
        <form id="FORM" action="GET">
            <div class="row">
                <div class="col">
                    <?php
                        echo $temp_array[1];
                    ?>
                    <input class="btn-check" type="radio" id="1" name="risposta_data" value="1">
                    <label class="btn btn-outline-secondary" for="1">HTML</label>
                </div>
                <div class="col">
                    <?php
                        echo $temp_array[2];
                    ?>
                    <input class="btn-check" type="radio" id="2" name="risposta_data" value="2"> 
                    <label class="btn btn-outline-secondary" for="2">HTML</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <?php
                        echo $temp_array[3];
                    ?>
                    <input class="btn-check" type="radio" id="3" name="risposta_data" value="3">
                    <label class="btn btn-outline-secondary" for="3">HTML</label>
                </div>
                <div class="col">
                    <?php
                        echo $temp_array[4];
                    ?>
                    <input class="btn-check" type="radio" id="4" name="risposta_data" value="4">
                    <label class="btn btn-outline-secondary" for="4">HTML</label>
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>