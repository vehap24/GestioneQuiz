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
        <img style="height: 7%; width: 7%" src="logo.jpg" onclick="window.location.href ='1home.php'"> 
        <h1 class="text-center text-light">RIEPILOGO DOMANDE E RISPOSTE</h1>
        <?php
            session_start();
            $risposte_corrette = 0;
            $numero_domanda = $_SESSION["ArrayDomande"];
            $domanda = file('Domande.csv');
            for($i = 0; $i < 20; $i++){
                $temp_array = explode('|',$domanda[$numero_domanda[$i]-1]);
                if($_SESSION["risposta"][$i] == $temp_array[5]){
                    printf("<div class='card text-bg-success mb-3'> <div class='card-header'>" . $temp_array[0] . "</div>");
                    echo "<div class='card-body>' <p class='card-text'> <b>Risposta data e corretta:</b> ";
                    printf($temp_array[intval($temp_array[5])] . "</p></div></div>");
                    $risposte_corrette++;
                } else {
                    printf("<div class='card text-bg-danger mb-3'> <div class='card-header'>" . $temp_array[0] . "</div>");
                    echo "<div class='card-body'><p class='card-text'><b>Risposta data:</b> ";
                    echo $temp_array[intval($_SESSION["risposta"][$i])] . "<br>";
                    echo "<b>Risposta corretta:</b> ";
                    echo $temp_array[intval($temp_array[5])];
                    echo "</p></div></div>";
                }
            }
            printf("<p class='fs-1'><b><span style='color:#ff66cc'>" . $risposte_corrette . "</span></b>/20 risposte corrette</p>");
            switch($risposte_corrette){
            case 0:
                echo "<br>COME DIAVOLO HAI FATTO?!?!?!<br>";
                echo "<img src='immagine_1.jpg'>";
                break;
            case 1:
                echo "<br>Solo 1???<br>";
                echo "<img src='immagine_2.jpg'>";
                break;
            case 2:
                echo "<br>Forse sei un po' confuso<br>";
                echo "<img src='immagine_3.jpg'>";
                break;
            case 3:
                echo "<br>BRUH<br>";
                echo "<img src='immagine_4.jpg'>";
                break;
            case 4:
                echo "<br>Questo quiz non fa per te...<br>";
                echo "<img src='immagine_5.jpg'>";
                break;
            case 5:
                echo "<br>Frase 6<br>";
                echo "<img src='immagine_6.jpg'>";
                break;
            case 6:
                echo "<br>Questo punteggio...<br>";
                echo "<img src='immagine_7.jpg'>";
                break;
            case 7:
                echo "<br>Frase 8<br>";
                echo "<img src='immagine_8.jpg'>";
                break;
            case 8:
                echo "<br>NO<br>";
                echo "<img src='immagine_9.jpg'>";
                break;
            case 9:
                echo "<br>E che diamine, nemmeno metà?!?!?!<br>";
                echo "<img src='immagine_10.jpg'>";
                break;
            case 10:
                echo "<br>Assurdo, metà sono risposte esatte<br>";
                echo "<img src='immagine_11.jpg'>";
                break;
            case 11:
                echo "<br>Ti sei impegnato un minimo, ma forse è ancora troppo<br>";
                echo "<img src='immagine_12.jpg'>";
                break;
            case 12:
                echo "<br>Chiaramente puoi fare di meglio!<br>";
                echo "<img src='immagine_13.jpg'>";
                break;
            case 13:
                echo "<br>OSSERVO I TUOI PROGRESSI<br>";
                echo "<img src='immagine_14.jpg'>";
                break;
            case 14:
                echo "<br>> Wireless Router<br>> Looks inside<br>> Wires<br>";
                echo "<img src='immagine_15.jpg'>";
                break;
            case 15:
                echo "<br>Bleeeh!<br>";
                echo "<img src='immagine_16.jpg'>";
                break;
            case 16:
                echo "<br>Bleeeh!<br>";
                echo "<img src='immagine_17.jpg'>";
                break;
            case 17:
                echo "<br>Complimenti!<br>";
                echo "<img src='immagine_18.jpg'>";
                break;
            case 18:
                echo "<br>Continua così!<br>";
                echo "<img src='immagine_19.jpg'>";
                break;
            case 19:
                echo "<br>BRAVO!!! Ce la stavi per fare!<br>";
                echo "<img src='immagine_20.jpg'>";
                break;
            case 20:
                echo "<br>NERD!!!!!!!!<br>";
                echo "<img src='immagine_21.jpg'>";
                break;
            }
        ?>
    </div>
        
</body>
</html>
