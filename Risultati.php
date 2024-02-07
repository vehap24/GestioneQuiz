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
            printf("<p class='fs-1'><b><span style='color:#ff66cc'>" . $risposte_corrette . "</span></b>/20 risposte corrette</p><div class='container'><div class='row m-4'>");
            switch($risposte_corrette){
            case 0:
                echo "<div class='col'><br>COME DIAVOLO HAI FATTO?!?!?!<br></div>";
                echo "<div class='col'> <img src='immagine_1.jpg' style='height: 400px'></div>";
                break;
            case 1:
                echo "<div class='col'><br>Solo 1???<br></div>";
                echo "<div class='col'><img src='immagine_2.jpg' style='height: 400px'>";
                break;
            case 2:
                echo "<div class='col'><br>Forse sei un po' confuso<br></div>";
                echo "<div class='col'><img src='immagine_3.jpg' style='height: 400px'>";
                break;
            case 3:
                echo "<div class='col'><br>BRUH<br></div>";
                echo "<div class='col'><img src='immagine_4.jpg' style='height: 400px'>";
                break;
            case 4:
                echo "<div class='col align-middle'><br>Questo quiz non fa per te...<br></div>";
                echo "<div class='col'><img src='immagine_5.jpg' style='height: 400px'>";
                break;
            case 5:
                echo "<div class='col'><br>[INSERIRE TESTO QUI]]<br></div>";
                echo "<div class='col'><img src='immagine_6.jpg' style='height: 400px'>";
                break;
            case 6:
                echo "<div class='col'><br>Questo punteggio...<br></div>";
                echo "<div class='col'><img src='immagine_7.jpg' style='height: 400px'>";
                break;
            case 7:
                echo "<div class='col'><br>Continua con la tua vita...<br></div>";
                echo "<div class='col'><img src='immagine_8.jpg' style='height: 400px'>";
                break;
            case 8:
                echo "<div class='col'><br>NO<br></div>";
                echo "<div class='col'><img src='immagine_9.jpg' style='height: 400px'>";
                break;
            case 9:
                echo "<div class='col'><br>E che diamine, nemmeno metà?!?!?!<br></div>";
                echo "<div class='col'><img src='immagine_10.jpg' style='height: 400px'>";
                break;
            case 10:
                echo "<div class='col'><br>Assurdo, metà sono risposte esatte<br></div>";
                echo "<div class='col'><img src='immagine_11.jpg' style='height: 400px'>";
                break;
            case 11:
                echo "<div class='col'><br>Ti sei impegnato un minimo, ma forse è ancora troppo<br></div>";
                echo "<div class='col'><img src='immagine_12.jpg' style='height: 400px'>";
                break;
            case 12:
                echo "<div class='col'><br>Chiaramente puoi fare di meglio!<br></div>";
                echo "<div class='col'><img src='immagine_13.jpg' style='height: 400px'>";
                break;
            case 13:
                echo "<div class='col'><br>OSSERVO I TUOI PROGRESSI<br></div>";
                echo "<div class='col'><img src='immagine_14.jpg' style='height: 400px'>";
                break;
            case 14:
                echo "<div class='col'><br>> Wireless Router<br>> Looks inside<br>> Wires<br></div>";
                echo "<div class='col'><img src='immagine_15.jpg' style='height: 400px'>";
                break;
            case 15:
                echo "<div class='col'><br>Bleeeh!<br></div>";
                echo "<div class='col'><img src='immagine_16.jpg' style='height: 400px'>";
                break;
            case 16:
                echo "<div class='col'><br>Bleeeh!<br></div>";
                echo "<div class='col'><img src='immagine_17.jpg' style='height: 400px'>";
                break;
            case 17:
                echo "<div class='col'><br>Complimenti!<br></div>";
                echo "<div class='col'><img src='immagine_18.jpg' style='height: 400px'>";
                break;
            case 18:
                echo "<div class='col'><br>Continua così!<br></div>";
                echo "<div class='col'><img src='immagine_19.jpg' style='height: 400px'>";
                break;
            case 19:
                echo "<div class='col'><br>BRAVO!!! Ce la stavi per fare!<br></div>";
                echo "<div class='col'><img src='immagine_20.jpg' style='height: 400px'>";
                break;
            case 20:
                echo "<div class='col'><br>NERD!!!!!!!!<br></div>";
                echo "<div class='col'><img src='immagine_21.jpg' style='height: 400px'>";
                break;
            }
            printf("</div><div class='row'><div class='fs-1 m-3'>Vuoi rigiocare?</div><button type='button' class='btn btn-primary btn-lg fs-2 m-2' onclick='window.location.href =\"1home.php\"'>Rigioca</button></div></div>");
        ?>
        
    </div>
    
        
</body>
</html>
