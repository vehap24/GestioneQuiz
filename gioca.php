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
session_start();
$domanda = file('Domande.csv');
$numero_domanda = $_SESSION["ArrayDomande"];
$indice = $_SESSION["indice"];
$temp_array = explode('|',$domanda[$numero_domanda[$indice]-1]); //Non so perchè funziona... Ma funziona... NON TOCCARLO!!!
if($indice == 20)
header("Location:Risultati.php");
//var_dump($_SESSION["ArrayDomande"]);  //DEBUG!!!
//var_dump($indice);    //DEBUG!!!
?>
<body>
    <div class="text-center container">
        <img style="height: 7%; width: 7%" src="logo.jpg"  onclick="window.location.href ='1home.php'"> 
        <form id="FORM" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="text-center text-light fs-2">
                <?php
                    echo $temp_array[0];
                ?>
            </div>
            <div class="row">
                <div class="col p-0 m-3">
                    <input type="radio" id="1" name="risposta_data" value="1" required>
                    <label for="1" class="radio"><?php echo $temp_array[1];?></label>
                </div>
                <div class="col p-0 m-3">
                    <input type="radio" id="2" name="risposta_data" value="2" required> 
                    <label for="2" class="radio"><?php echo $temp_array[2];?></label>
                </div>
            </div>
            <div class="row">
                <div class="col p-0 m-3">
                    <input type="radio" id="3" name="risposta_data" value="3" required>
                    <label for="3" class="radio"><?php echo $temp_array[3];?></label>
                </div>
                <div class="col p-0 m-3">
                    <input type="radio" id="4" name="risposta_data" value="4" required>
                    <label for="4" class="radio"><?php echo $temp_array[4];?></label>
                </div>
                <div class="my-5">
                    <input type="submit" id="invio" value="Rispondi">
                </div>
            </div>
        </form>
    </div>
    
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["risposta_data"])){
    $_SESSION["risposte"] = $_POST["risposta_data"];
    $_SESSION["risposta"][$_SESSION["indice"]-1] = $_SESSION["risposte"];
    }
    $_SESSION["indice"] += 1;
    //var_dump($_SESSION["risposta"]);    //DEBUG!!!
}
?>