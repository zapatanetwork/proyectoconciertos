<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsiveseleccion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" type="image/png" href="{{ asset('../img/icono.png') }}">
    <link rel="shortcut icon" sizes="192x192" href="{{ asset('../img/icono.png') }}">
    <title>EveryDayImSufflin - Festival</title>
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
        
    <h1><?php echo $festival[0]->nombreFestival ?> - <?php echo $festival[0]->ciudad ?></h1>

    {{csrf_field()}}

    <form method="post" action="/seleccion2">

        {{csrf_field()}}
    
        <div id="container">
            <div>
                <p id="arriba">Fechas</p>
                <select name="fecha" id="primerSelect" required>
                    <option value="" selected disabled>Fechas disponibles</option>
                    <option value="<?php echo $festival[0]->fecha ?>"><?php echo $festival[0]->fecha ?></option>
                </select>
            </div>

            <div>
                <p id="arriba">Hoteles</p>
                <select name="hotel" id="segundoSelect" required>
                    <option value="" selected disabled>Hoteles libres</option>
                </select>
            </div>

            <div>
                <p id="arriba">Transportes</p>
                <select name="transporte" id="tercerSelect" required>
                    <option value="" selected disabled>Transportes posibles</option>
                </select>

                <!-- Datos que le pasamos de forma oculta para la siguiente vista: -->

                <input type="hidden" name="festival" value="<?php echo $festival[0]->nombreFestival ?>">
                <input type="hidden" name="ciudad" value="<?php echo $festival[0]->ciudad ?>">
            </div>
        </div>

        <div id="boton">
            <div id="boton1">
            <button class="button-75" type="submit"><span class="text">Seleccionar</span></button>
            </div>
        </div>

    </form>
    
    </main>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>

        /* Funcion del primer select para que rellene el segundo al hacer una elección */

        $(document).on('change','#primerSelect', function(){
                $.ajax({
                    method: 'GET',
                    dataType: 'json',
                    url: '<?php echo route('mostrarHoteles')?>',
                    data: {
                        '_token': "<?php echo csrf_token() ?>",
                        'id': "<?php echo $festival[0]->id_festival ?>"
                    },
                    success: function(data) {
                         $('#segundoSelect').html('<option value="" selected disabled>Hoteles libres</option>')
                        data.forEach(element => {
                            $('#segundoSelect').append(
                                '<option value="' + element.nombreHotel + '">' + element.nombreHotel + '</option>' 
                            )
                        });
                    }
                })
        })

        /* Funcion del segundo select para que rellene el tercero al hacer una elección  */

        $(document).on('change','#segundoSelect', function(){
            $.ajax({
                    method: 'GET',
                    dataType: 'json',
                    url: '<?php echo route('mostrarTransportes')?>',
                    data: {
                        '_token': "<?php echo csrf_token() ?>",
                        'id': $('#segundoSelect').val()
                    },
                    success: function(data) {
                        $('#tercerSelect').html('<option value="" selected disabled>Transportes posibles</option>')
                        data.forEach(element => {
                            $('#tercerSelect').append(
                                '<option value="' + element.transporte + '">' + element.transporte + '</option>' 
                            )
                        }); 
                    }
                })
        })

    </script>
</body>
</html>