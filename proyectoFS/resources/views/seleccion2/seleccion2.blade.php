<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./responsive/responsiveseleccion2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('../img/icono.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('../img/icono.png') }}">
    <style>

    /* Introducimos estilo interno para los datos que nos trae de la vista anterior, los cuales no cogen el estilo que tenemos en nuestra hoja de estilo */
        
        h1 {
            padding: 15px 0 35px 15px;
            margin-bottom: -10px;
            font-family: 'Kaushan Script', cursive;
            color: black;
            text-align: center;
            font-size: 2.5em;
        }

        p {
            padding: 0 30px 15px 30px;
            font-size: 21px;
            color: var(--grisclarito);
            text-align: center;
            font-family: 'Barlow Condensed', sans-serif;
        }

        p:nth-last-of-type(1) {
            padding-bottom: 40px;
        }

        @media (max-width:658px) {
            h1 {
            padding: 15px 0 35px 15px;
            margin-bottom: -10px;
            font-size: 2em;
        }

        p {
            padding: 0 30px 15px 30px;
            font-size: 15px;
        }

        p:nth-last-of-type(1) {
            padding-bottom: 40px;
        }
        }

        @media (max-width:502px) {

        h1 {
            padding: 15px 0 20px 15px;
            font-size: 1em;
        }

        p {
            padding: 0 30px 15px 30px;
            font-size: 9px;
        }

        p:nth-last-of-type(1) {
            padding-bottom: 40px;
        }
        }

    </style>
    <title>EveryDayImSufflin - Datos Festival</title>
</head>

<body>
    <header>
        <div id="logo"><a href="/"><img src="../img/fest.jpg" alt="logo"></a></div>

        <div id="eslogan"><strong>EVERYDAY I'M SHUFFLIN'</strong></div>

        <div id="menu">
            <ul>
                <li><a href="/"><strong>PRINCIPAL</strong></a></li>
                <li><a href="/info"><strong>INFO</strong></a></li>
                <li><a href="/contacto"><strong>CONTACTO</strong></a></li>
            </ul>
        </div>

        <div id="redes">
            <ul>
                <li><a href="https://www.instagram.com/eissflin/" target="blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://twitter.com/EImsuffling" target="blank"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
    </header>

    <main>
        
    <?php

        /* Datos que nos traemos de la vista anterior */

        echo '<h1> Datos seleccionados</h1>';  

        echo '<p> <strong>Festival:</strong> ' . $_POST["festival"] . '</p>';
        echo '<p> <strong>Ciudad:</strong> ' . $_POST["ciudad"] . '</p>';
        echo '<p> <strong>Fecha del festival:</strong> ' . $_POST["fecha"] . '</p>';
        echo '<p> <strong>Hotel elegido:</strong> ' . $_POST["hotel"] . ' - <a href="https://www.trivago.es/">Pulsa aquí para consultar tu hotel</a></p>';
        if ($_POST["transporte"] == "Taxi") {
            echo '<p> <strong>Transporte solicitado:</strong> ' . $_POST["transporte"] . ' - <a href="https://www.uber.com/es/es-es/">Pulsa aquí para solicitar tu taxi</a></p>';
        } else if ($_POST["transporte"] == "Bus"){
            echo '<p> <strong>Transporte solicitado:</strong> ' . $_POST["transporte"] . ' - <a href="https://www.alsa.es/">Pulsa aquí para conseguir tu bus</a></p>';
        } else {
            echo '<p> <strong>Transporte solicitado:</strong> ' . $_POST["transporte"] . ' - <a href="https://www.renfe.com/es/es/cercanias">Pulsa aquí para conseguir tu billete de cercanías</a></p>';
        }

    ?>
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>