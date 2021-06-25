<?php 

$paragrafo = "Qualsiasi pastasciuttaro che consulti la propria coscienza onestamente al momento di ingurgitare la sua biquotidiana piramide di pastasciutta, vi troverà dentro la triste soddisfazione di tappare con essa un buco nero. Questo buco avido è una sua incurabile tristezza. S'illude, ma non lo tappa. Soltanto un pranzo futurista può rallegrarlo.";

$lunghezza_paragrafo = strlen($paragrafo);

$censura = $_GET["censura"];

$parola_censurata = str_replace($censura, "***", $paragrafo);

$lunghezza_paragrafo_censurato = strlen($parola_censurata); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h2>Paragrafo senza censura</h2>
        <p><?php echo $paragrafo ?></p>
        <p>La lunghezza senza censura è di <strong><?php echo $lunghezza_paragrafo ?></strong> caratteri</p>
    </div>

    <div>
        <h2>Paragrafo con censura</h2>
        <p><?php echo $parola_censurata ?></p>
        <p>La lunghezza con censura è di <strong><?php echo $lunghezza_paragrafo_censurato ?></strong> caratteri</p>
    </div>
</body>
</html>

<style>
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}
body {
    height: 100vh;
}
div {
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    height: 50%;
}
div:nth-child(1) {
    color: #fff;
    background-color: coral;
}
h2,
div p {
    text-align: center;
}

div p {
    line-height: 50px;
}

div p:nth-child(2) {
    font-size: 1.2rem;
}

</style>
<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
