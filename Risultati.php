<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riepilogo</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container text-center text-light fs-3">
        <img style="height: 7%; width: 7%" src="logo.jpg"> 
        <h1 class="text-center text-light">RIEPILOGO DOMANDE E RISPOSTE</h1>
        <?php
        //INSERIRE CARDS BOOTSTRAP RICORDATI VEHAP
            session_start();
            $risposte_corrette = 0;
            //var_dump($_SESSION["ArrayDomande"]);
            $numero_domanda = $_SESSION["ArrayDomande"];
            $domanda = file('Domande.csv');
            for($i = 0; $i < 20; $i++){
                $temp_array = explode('|',$domanda[$numero_domanda[$i]-1]);
                echo $temp_array[0];
                echo "<br>";
                if($_SESSION["risposta"][$i] == $temp_array[5]){
                    echo "<div class='card border-success mb-3'>Risposta data e corretta: ";
                    echo $temp_array[intval($temp_array[5])];
                    echo "</p>";
                    $risposte_corrette++;
                    //echo "Bravo!!!<br>";
                } else {
                    echo "Risposta data: <p style='color: rgb(255, 51, 0)'>";
                    echo $temp_array[intval($_SESSION["risposta"][$i])];
                    echo "</p>";
                    echo "Risposta corretta: <p style='color: rgb(102, 255, 102)'>";
                    echo $temp_array[intval($temp_array[5])];
                    echo "</p>";
                    //echo "NOOOOOOO!!!<br>";
                }
            }
            echo $risposte_corrette;
            echo "/20 risposte corrette";
            echo "<br>";
            switch($risposte_corrette){
            case 0:
                echo "<br>COME DIAVOLO HAI FATTO ANGELINI"
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
    </div>
        
</body>
</html>
