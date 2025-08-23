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
$domanda = file('Domande.csv');     //Caricare file in variabile
$numero_domanda = $_SESSION["ArrayDomande"];        //Le variabili contenute nella sessioni vengono caricate in una variabile locale
$indice = $_SESSION['indice'];                      //La variabile contatore viene caricata in una variabile locale
$temp_array = explode('|',$domanda[$numero_domanda[$indice]-1]);        //Dividiamo la riga con explode, $domanda è il file, dentro $numero_domanda ci sono 20 numeri che rappresentano il numero della domanda che vanno da 1 a MAX_RIGHE_FILE, per accedere al numero di domanda che si vuole far visualizzare, usiamo la variabile $indice, che incrementa ogni volta che si fa il submit della risposta. Ovviamente bisogna fare -1 perchè stiamo lavorando con un array
//if($indice == 20)                                                       //Per concludere il quiz
//var_dump($_SESSION["ArrayDomande"]);  //DEBUG!!!

?>
<body>
    <div class="text-center container">
        <img style="height: 7%; width: 7%" src="logo.jfif"  onclick="window.location.href ='home.php'"> 
        <form id = "FORM" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="text-center text-light fs-2">
                <?php
                    echo $temp_array[0];
                ?>
            </div>
            <div class="row">
                <div class="col p-0 m-3">
                    <input type="radio" id="1" name="risposta_data" value="1">
                    <label for="1" class="radio"><?php echo $temp_array[1];?></label>
                </div>
                <div class="col p-0 m-3">
                    <input type="radio" id="2" name="risposta_data" value="2"> 
                    <label for="2" class="radio"><?php echo $temp_array[2];?></label>
                </div>
            </div>
            <div class="row">
                <div class="col p-0 m-3">
                    <input type="radio" id="3" name="risposta_data" value="3">
                    <label for="3" class="radio"><?php echo $temp_array[3];?></label>
                </div>
                <div class="col p-0 m-3">
                    <input type="radio" id="4" name="risposta_data" value="4">
                    <label for="4" class="radio"><?php echo $temp_array[4];?></label>
                </div>
            </div>
            <input type="submit" class="btn btn-primary" name="freccia" value="<<" <?php if($indice < 1) echo "disabled";?>>
            <input type="submit" class="btn btn-primary" name="freccia" value=">>" <?php if($indice == 19) echo "disabled";?>>
            <div class="my-5">
                <input type="submit" id="invio" name="termina" value="Termina">
            </div>
                <input type="submit" name="riavvia" value="Riavvia sta merda" class="btn btn-warning">
        </form>
            <img class="img img-fluid" src="img/068.gif" style="height: 35%; width: 35%">
    </div>
    <div class="d-flex justify-content-around align-middle">
        <div>
            <p class="text-white text-center align-middle"> <?php echo $indice + 1; ?> di 20</p>
        </div>
        <div class="d-inline-block" style="width: 200px; height: 100px; background-color: yellow;">
            <p><b>DEBUG</b></p>
            <?php
                if(isset($_POST['freccia']))
                var_dump($_POST['freccia']);
                /*
                echo "ciao ".$indice."<br>";    //DEBUG!!!
                echo "_SESSION[indice] ".($_SESSION['indice'])."\n";
                */
            ?>
        </div>
    </div>
</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(isset($_POST['riavvia']))
        header("Location:start.php");

    if(isset($_POST['termina']))
        header("Location:Risultati.php");

    if(isset($_POST['risposta_data']))
        $_SESSION["risposta"][$_SESSION["indice"]-1] = $_POST["risposta_data"];

    if(isset($_POST['freccia'])){
        if($_POST['freccia'] == ">>")
        {
            $indice = $_SESSION['indice'] += 1;
            $_POST['freccia'] = NULL;
        }
        else if(isset($_POST['freccia']) == "<<")
        {
            $indice = $_SESSION['indice'] -= 1;
            $_POST['freccia'] = NULL;
        }
    }

}

?>

<!-- if ($_SERVER["REQUEST_METHOD"] == "POST"){      //Appena si preme il submit, il server si richiama da solo, richiamando la funzione
    if (isset($_POST["risposta_data"])){        //Se la variabile $risposta_data è settata, allora vero. Evitiamo il warning della variabile non inizializzata
    $_SESSION["risposta"][$_SESSION["indice"]-1] = $_POST["risposta_data"]; //Dal post salviamo la risposta nell'array della sessione
    }
    $_SESSION["indice"] += 1;       //Incremento indice
    //var_dump($_SESSION["risposta"]);    //DEBUG!!!
} -->
    