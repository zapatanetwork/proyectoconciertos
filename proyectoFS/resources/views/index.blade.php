<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./responsive/responsiveprincipal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('../img/icono.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('../img/icono.png') }}">
    <title>EveryDayImSufflin - Principal</title>
</head>

<body>
    <header>
        <div id="logo"><a href="/"><img src="./img/fest.jpg" alt="logo"></a></div>

        <div id="eslogan"><strong>EVERYDAY I'M SHUFFLIN'</strong></div>

        <div id="menu">
            <ul>
                <li><a href="#"><strong>PRINCIPAL</strong></a></li>
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

        <!-- secciones de nuestra web con festivales -->

        <div id="uno">
            <div>
                <a href="seleccion/{{ $festival->id_festival = 1 }}">
                    <div>
                        <div id="imagen">
                            <img src="img/primaveratrompetera.jpg" alt="">
                        </div>
                    </div>
                    <div id="texto">
                        <p>Primavera Trompetera Fest</p>
                        <p>Jeréz</p>
                    </div>
                </a>
            </div>
            <div>
                <a href="seleccion/{{ $festival->id_festival = 4 }}">
                    <div>
                        <div id="imagen">
                            <img src="img/sansan.jpg" alt="">
                        </div>
                    </div>
                    <div id="texto">
                        <p>SanSan Festival</p>
                        <p>Castellón</p>
                    </div>
                </a>

            </div>
            <div>
            <a href="seleccion/{{ $festival->id_festival = 5 }}">
                    <div>
                        <div id="imagen">
                            <img src="img/vinha.jpg" alt="">
                        </div>
                    </div>
                    <div id="texto">
                        <p>Viña Rock</p>
                        <p>Albacete</p>
                    </div>
                </a>

            </div>
            <div>
                <a href="seleccion/{{ $festival->id_festival = 8 }}">
                    <div>
                        <div id="imagen">
                            <img src="img/warmup.jpg" alt="">
                        </div>
                    </div>
                    <div id="texto">
                        <p>WARM UP Festival</p>
                        <p>Murcia</p>
                    </div>
                </a>

            </div>
        </div>

        <div id="dos">
            <div>
                <a href="seleccion/{{ $festival->id_festival = 10 }}">
                    <div>
                        <div id="imagen">
                            <img src="img/tomavistas.jpg" alt="">
                        </div>
                    </div>
                    <div id="texto">
                        <p>Tomavistas</p>
                        <p>Madrid</p>
                    </div>
                </a>

            </div>
            <div>
                <a href="seleccion/{{ $festival->id_festival = 13 }}">
                    <div>
                        <div id="imagen">
                            <img src="img/spring.jpg" alt="">
                        </div>
                    </div>
                    <div id="texto">
                        <p>Spring Festival</p>
                        <p>Alicante</p>
                    </div>
                </a>

            </div>
            <div>
                <a href="seleccion/{{ $festival->id_festival = 15 }}">
                    <div>
                        <div id="imagen">
                            <img src="img/love90.jpg" alt="">
                        </div>
                    </div>
                    <div id="texto">
                        <p>Love The 90s Valencia</p>
                        <p>Valencia</p>
                    </div>
                </a>

            </div>
            <div>
                <a href="seleccion/{{ $festival->id_festival = 16 }}">
                    <div>
                        <div id="imagen">
                            <img src="img/primaverasound.jpg" alt="">
                        </div>
                    </div>
                    <div id="texto">
                        <p>Primavera Sound</p>
                        <p>Barcelona</p>
                    </div>
                </a>

            </div>
        </div>

        <div id="tres">
            <div>
                <a href="seleccion/{{ $festival->id_festival = 18 }}">
                    <div>
                        <div id="imagen">
                            <img src="img/sonar.jpg" alt="">
                        </div>
                    </div>
                    <div id="texto">
                        <p>Sónar Festival</p>
                        <p>Barcelona</p>
                    </div>
                </a>

            </div>
            <div>
                <a href="seleccion/{{ $festival->id_festival = 21 }}">
                    <div>
                        <div id="imagen">
                            <img src="img/azkena.jpg" alt="">
                        </div>
                    </div>
                    <div id="texto">
                        <p>Azkena Rock Festival</p>
                        <p>Vitoria</p>
                    </div>
                </a>

            </div>
            <div>
                <a href="seleccion/{{ $festival->id_festival = 24 }}">
                    <div>
                        <div id="imagen">
                            <img src="img/mallorcalive.jpg" alt="">
                        </div>
                    </div>
                    <div id="texto">
                        <p>Mallorca Live Festival</p>
                        <p>Mallorca</p>
                    </div>
                </a>

            </div>
            <div>
                <a href="seleccion/{{ $festival->id_festival = 27 }}">
                    <div>
                        <div id="imagen">
                            <img src="img/starlite.jpg" alt="">
                        </div>
                    </div>
                    <div id="texto">
                        <p>Starlite Festival</p>
                        <p>Marbella</p>
                    </div>
                </a>
            </div>
        </div>

        <div id="cuatro">
            <div>
                <a href="seleccion/{{ $festival->id_festival = 30 }}">
                    <div>
                        <div id="imagen">
                            <img src="img/cabodeplata.jpg" alt="">
                        </div>
                    </div>
                    <div id="texto">
                        <p>Cabo de Plata</p>
                        <p>Barbate</p>
                    </div>
                </a>
            </div>
            <div>
                <a href="seleccion/{{ $festival->id_festival = 33 }}">
                    <div>
                        <div id="imagen">
                            <img src="img/universal.jpg" alt="">
                        </div>
                    </div>
                    <div id="texto">
                        <p>Universal Music Festival</p>
                        <p>Madrid</p>
                    </div>
                </a>
            </div>
            <div>
                <a href="seleccion/{{ $festival->id_festival = 35 }}">
                    <div>
                        <div id="imagen">
                            <img src="img/arenal.jpg" alt="">
                        </div>
                    </div>
                    <div id="texto">
                        <p>Arenal Sound</p>
                        <p>Valencia</p>
                    </div>
                </a>
            </div>
        </div>
        </div>

        <!-- icono para subir al pulsar -->

        <div id="flecha"><i id="flecha2" class="fa-solid fa-eject"></i></div>
        

    </main>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  
    <script src="script.js"></script>
</body>

</html>