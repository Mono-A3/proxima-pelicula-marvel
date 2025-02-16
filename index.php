<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

# Inicializar una nueva sesión de cURL; $ch = cURL handle
$ch = curl_init(API_URL);

// Indicar que queremos recibir el resultado de la petición y no mostrarla en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //importante para desarrollo desabilitar la verificacion del certificado
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);


/* Ejecutar la petición
    y guardamos el resultado

*/
$result = curl_exec($ch);
// Una alternativa sería utilizar file_get_contents
// $result = file_get_contents(API_URL); //si solo quieres hacer un GET de una API


$data = json_decode($result, true);

curl_close($ch);



?>

<head>
    <title>La próxima película de Marvel</title>
    <meta name="description" content="La próxima película de Marvel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Centered viewport -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
</head>


<main>

    <section>
        <img src="<?= $data["poster_url"]; ?>" width="200" alt="Poster de <?= $data["title"] ?>" style="border-radius: 16px;">

    </section>

    <hgroup>
        <h3><?= $data["title"]; ?> se estrena en <?= $data["days_until"] ?> días</h3>
        <p>Fecha de estreno: <?= $data["release_date"]; ?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>

</main>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img {
        margin: 0 auto;
    }
</style>
