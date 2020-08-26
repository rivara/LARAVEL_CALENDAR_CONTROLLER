<!doctype html>
<html>
<head>
    <title>Los guías de Tsushima</title>
    <meta name="viewport" content="width=480px, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/funcional.js" type="text/javascript"></script>
    <script src="js/TweenMax.min.js" type="text/javascript"></script>
    <script src="js/pajaros.js"></script>
    <script src="https://code.createjs.com/createjs-2015.11.26.min.js"></script>
</head>


<body onLoad="precargaweb(); init();" style="margin:0px;">
<div id="precarga">
    <div id="cargando"><img src="images/estrella.png" id="estrella"><img id="loading" src="images/cargando.png"></div>
</div>
<div id="textopre" style="display: none">
    <span id="intro1" >Si eres miembro de PSPLUS</span><span class="quitar"><br>&nbsp; </span>
    <span id="intro2" style="display: none">y has adquirido Ghost of Tsushima,</span><span class="quitar"><br>&nbsp; </span>
    <span id="intro3" style="display: none">podrás reservar gratis durante 45 minutos</span><span class="quitar"><br>&nbsp; </span>
    <span id="intro4"  style="display: none">a un guía que te acompañará</span><span class="quitar"><br>&nbsp; </span>
    <span id="intro5" style="display: none">en una partida inolvidable.</span> </div>
<div id="saltarintro" class="botoncillo" style="display: none" onClick="SaltarIntro();">Saltar intro</div>
<header id="miheader">
    <div class="menu_nav" id="abrircerrar" onClick="verMenu();"><span class="linea1"></span><span class="linea2"></span><span class="linea3"></span></div>
    <img src="images/logo_ps4.png" class="logoweb">
    <img src="images/logo_ps4_mobo.png" class="logowebmobo">
    <nav id="menunavegacion">
        <a href="{{ url('/') }}" target="_self" class="destacado">Los guías de Tsushima</a>
        <a href="{{ url('comoFunciona') }}" target="_self">¿Cómo funciona?</a>
    </nav>
</header>
<img src="images/logo_web_mobile.png" class="logocentral_mobo">
<img src="images/logo_web_desktop.png" class="logocentral">


<section id="guias">
    <div id="selector">
        <img src="images/flecha_izq.png" class="flecha_izq flecha" onClick="moverGuia('izq');">
        <img src="images/flecha_dch.png" class="flecha_dch flecha" onClick="moverGuia('dch');">
    </div>
    <span id="reservar" onClick="mostrarFormulario('guia1');">Reservar guía</span>
    <div id="bullets">
        <span id="bullet1" class="activo"></span>
        <span id="bullet2"></span>
        <span id="bullet3"></span>
        <span id="bullet4"></span>
        <span id="bullet5"></span>
        <span id="bullet6"></span>
        <span id="bullet7"></span>
        <span id="bullet8"></span>
    </div>


    <div class="titulo_mobile">
        <img src="images/name_josemanuel_mob.png" id="nombre1">
        <img src="images/name_ignacio_mob.png" id="nombre2" style="display: none;">
        <img src="images/name_roberto_mob.png" id="nombre3" style="display: none;">
        <img src="images/name_asier_mob.png" id="nombre8" style="display: none;">
        <img src="images/name_eduardo_mob.png" id="nombre5" style="display: none;">
        <img src="images/name_emilio_mob.png" id="nombre6" style="display: none;">
        <img src="images/name_ricardo_mob.png" id="nombre7" style="display: none;">
        <img src="images/name_angela_mob.png" id="nombre4" style="display: none;">
    </div>
    <img src="images/cajaespecialista_mobo.png" class="cajamobile">


    <article id="guia1" class="ficha">
        <div class="bloque_izq">
            <img src="images/name_josemanuel.png" class="titulo_nombre">
            <p>Madrileño de nacimiento y de corazón, por su historia y por cada rinconcito del Viejo Madrid. Amante de la literatura y de la historia decidí hacer de mi pasión mi trabajo y por ello llevo más de 5 años enseñando el Madrid de los Austrias y el Barrio de las Letras a todos los visitantes a la Capital. Un bohemio enamorado de la vida y de las calles de su ciudad que tiene el privilegio de enseñarlas con alegría y pasión.</p>
        </div>
        <img src="images/flecha_abajo.png" class="flecha_abajo" onClick="masinfo('1');">
        <div class="bloque_dch">
            <img src="images/texto_josemanuel.png" class="imagen_texto">
            <p class="cita">“He pasado del Madrid de los Austrias al Tsushima de los Mongoles”</p>
        </div>
    </article>
    <article id="guia2" class="ficha" style="display: none;">
        <div class="bloque_izq">
            <img src="images/name_ignacio.png" class="titulo_nombre">
            <p>Me defino como un lector empedernido y amante de la Historia. Tras varios años dando vueltas por Francia, Bélgica e Inglaterra este riojano de nacimiento se convirtió en guía turístico. Soy un apasionado de la historia de España y un gran contador de historias. Mi energía y sentido del humor te guiarán por cualquier lugar.</p>
        </div>
        <img src="images/flecha_abajo.png" class="flecha_abajo" onClick="masinfo('2');">
        <div class="bloque_dch">
            <img src="images/texto_ignacio.png" class="imagen_texto">
            <p class="cita">“Soy del barrio de Chamberí pero tengo espíritu samurái”</p>
        </div>
    </article>
    <article id="guia3" class="ficha" style="display: none;">
        <div class="bloque_izq">
            <img src="images/name_roberto.png" class="titulo_nombre">
            <p>Soy un madrileño apasionado de la historia y la cultura. Cuento con el certificado de Grado Superior de Guía, Información y Asistencias Turísticas y llevo más de tres años ejerciendo mi profesión. Enseñando Madrid a sus visitantes; la historia, anécdotas, y dicen que soy un verdadero experto en las curiosidades y secretos de la capital.</p>
        </div>
        <img src="images/flecha_abajo.png" class="flecha_abajo" onClick="masinfo('3');">
        <div class="bloque_dch">
            <img src="images/texto_roberto.png" class="imagen_texto">
            <p class="cita">“Madrid es mi hogar pero Tsushima es mi isla”</p>
        </div>
    </article>
    <article id="guia4" class="ficha" style="display: none;">
        <div class="bloque_izq">
            <img src="images/name_angela.png" class="titulo_nombre">
            <p> Madrileña de nacimiento e irlandesa de adopción al haber pasado viviendo 4 años en la frenética ciudad de Dublín. Historiadora y guía como profesión y pasión desde hace 3 años tanto en la Isla Esmeralda como en Madrid.  Con Amigos, viajes, festivales y museos podría pasar alegremente mis días.  Si me quieres encontrar... ¡Búscame por algún museo, festival o con un mapa en la mano!  ¿Te vienes a conocer Tsushima conmigo?</p>
        </div>
        <img src="images/flecha_abajo.png" class="flecha_abajo" onClick="masinfo('8');">
        <div class="bloque_dch">
            <img src="images/texto_angela.png" class="imagen_texto">
            <p class="cita">“Yo que conozco Isla Esmeralda, te aseguro que Tsushima es una joya”</p>
        </div>
    </article>
    <article id="guia5" class="ficha" style="display: none;">
        <div class="bloque_izq">
            <img src="images/name_eduardo.png" class="titulo_nombre">
            <p>¡Saludos! Soy Edu, historiador y paisajista en mis ratos libres. Un granadino con la suerte de haber encontrado en la Alhambra el lugar de trabajo perfecto: donde la historia y el jardín, el paisaje y el arte fueron modelados hace más de setecientos años. Me apasiona ayudar a los visitantes a entender las claves de cualquier monumento y me genera la necesidad de seguir descubriendo e investigando más allá.</p>
        </div>
        <img src="images/flecha_abajo.png" class="flecha_abajo" onClick="masinfo('5');">
        <div class="bloque_dch">
            <img src="images/texto_eduardo.png" class="imagen_texto">
            <p class="cita">“Ganar la batalla depende mucho de conocer el entorno”</p>
        </div>
    </article>
    <article id="guia6" class="ficha" style="display: none;">
        <div class="bloque_izq">
            <img src="images/name_emilio.png" class="titulo_nombre">
            <p>¡Hola!, soy Emilio. Granadino apasionado desde pequeño por la paleontología y la historia. Esta segunda, me llevó a tener la oportunidad de poder enseñar mi ciudad, una magnífica urbe multicultural que encierra una profunda riqueza artística y cultural. Mi afición por el mundo prehistórico y medieval me motivan para seguir aprendiendo y descubriendo los misterios que encierra la historia.</p>
        </div>
        <img src="images/flecha_abajo.png" class="flecha_abajo" onClick="masinfo('6');">
        <div class="bloque_dch">
            <img src="images/texto_emilio.png" class="imagen_texto">
            <p class="cita">“En la guerra hay que honrar a los caídos y aún más si son enemigos”</p>
        </div>
    </article>
    <article id="guia7" class="ficha" style="display: none;">
        <div class="bloque_izq">
            <img src="images/name_ricardo.png" class="titulo_nombre">
            <p>Kon'nichiwa, soy un licenciado en Historia y un amante de Sevilla. Estoy enamorado de Andalucia e inicié mi carrera de guía turístico para mostrar el patrimonio histórico de las diferentes civilizaciones que dejaron huella en mi tierra. Disfruto enseñando todo lo que sé a las personas que comparten mi mismo interés por el arte, la historia y la cultura.
            </p>
        </div>
        <img src="images/flecha_abajo.png" class="flecha_abajo" onClick="masinfo('7');">
        <div class="bloque_dch">
            <img src="images/texto_ricardo.png" class="imagen_texto">
            <p class="cita">“Mi afición por Japón empezó por un bonsái”</p>
        </div>
    </article>
    <article id="guia8" class="ficha" style="display: none;">
        <div class="bloque_izq">
            <img src="images/name_asier.png" class="titulo_nombre">
            <p>Soy Asier. Y mi nombre significa “principio” en Euskera, pero he nacido y crecido en Granada . Soy  la mezcla entre el Norte y el Sur. Eso hizo que desde el pequeño me interesara el cruce de culturas y me llevó a estudiar Historia del Arte, especializándome en la Alhambra. Es un enclave mágico que funde Occidente con Oriente y desde hace cinco años recorro sus pasillos dándole vida al lugar culmen del crisol cultural que fue la Granada musulmana en el Siglo XIV.</p>
        </div>
        <img src="images/flecha_abajo.png" class="flecha_abajo" onClick="masinfo('4');">
        <div class="bloque_dch">
            <img src="images/texto_asier.png" class="imagen_texto">
            <p class="cita">“Enseñando la fortaleza de la Alhambra aprendí a sobrevivir en Tsushima”</p>
        </div>
    </article>



    <img src="images/josemanuel.png" id="fotoguia1" class="fotoguia mostrar">
    <img src="images/ignacio.png" id="fotoguia2" class="fotoguia">
    <img src="images/roberto.png" id="fotoguia3" class="fotoguia">
    <img src="images/angela.png" id="fotoguia4" class="fotoguia">
    <img src="images/eduardo.png" id="fotoguia5" class="fotoguia">
    <img src="images/emilio.png" id="fotoguia6" class="fotoguia">
    <img src="images/ricardo.png" id="fotoguia7" class="fotoguia">
    <img src="images/asier.png" id="fotoguia8" class="fotoguia">
</section>








<section id="miformulario" style="display: none;">
    <a class="cerrar"  onClick="cerrarForm();">Cerrar </a>

    <!-- Formulario de registro -->
    <article id="campos">
        <p>Completa el siguiente formulario para reservar a tu guía. Te recordamos que es necesaria la conexión a
            internet, ser mayor de 18 años y miembro de PSPLUS para poder disfrutar de la experiencia.</p>

        <form action="{{ route('registro') }}" method="post">
            @csrf
            <input type="text" style="display: none" name="nombreguia" id="nombreguia">
            <!-- este campo lo he puesto en oculto y cambio el valor por JS -->
            <select name="fecha" id="fecha"  onClick="reseteo();">

            </select>
            <select id="hora" name="hora"  onClick="comprobacion();" required>

            </select>
            <input type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido" required>
            <input type="text" id="usuario" name="usuario" placeholder="ID online PlayStation" required>
            <input type="submit" value="Reservar guia" class="botoncillo" onClick="registro();">
        </form>

    </article>






    <!-- Mensaje de confirmacion de reserva -->
    <article id="gracias" style="display: none;">
        <p class="titulogracias">¡RESERVA CONFIRMADA!</p>
        <p>En breve recibirás una solicitud de amistad del guía en tu PS4, donde te recordaremos el día y la hora de la
            experiencia. Esperamos que la disfrutes.</p>
        <p><strong>Te recordamos los datos de la reserva:</strong></p>
        @isset($diaHora)
            <p>{{$diaHora}}</p>
        @endisset
        <p><a href="{{ url('comoFunciona') }}"target="_self" class="botoncillo2">¿Cómo funciona?</a></p>
    </article>

    <!-- Mensaje de confirmacion de reserva -->
    <article id="error" style="display: none;">
        <p class="tituloerror">ERROR</p>
        <p>Este usuario ya se ha resitrado</p>
    </article>
</section>

<img src="images/logo_sp.png" class="logo_sp">
<img src="images/logo_sp2.png" class="logo_sp_mobile">
<footer>
    <div class="rrss">
        <p>Compartir :</p>
        <a href="#" target="_blank"><img src="images/twitter.png"></a>
        <a href="#" target="_blank" class="whatsapp"><img src="images/whastapp.png"></a>
    </div>
</footer>



<img src="images/logo_sp.png" class="logo_sp">
<img src="images/logo_sp2.png" class="logo_sp_mobile">
<footer>
    <div class="rrss" style="display: none">
        <p>Compartir :</p>
        <a href="#" target="_blank"><img src="images/twitter.svg"></a>
        <a href="#" target="_blank" class="whatsapp"><img src="images/whastapp.svg"></a>
    </div>
</footer>
<img src="images/bruma.png" id="bruma">
<img src="images/bruma.png" id="bruma_fondo1">
<img src="images/bruma2.png" id="bruma_fondo2">
<img src="images/bruma2.png" id="bruma2">
<img src="images/bg_trans.png" id="bg_transparente">
<div id="animation_container" style="background-color:rgba(255, 255, 255, 0.00); width:100vw; height:1080px" class="tamano">
    <canvas id="canvas" width="1920" height="1080" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 0.00);"  class="tamano"></canvas>
    <div id="dom_overlay_container"  class="tamano" style="pointer-events:none; overflow:hidden; width:1920px; height:1080px; position: absolute; left: 0px; top: 0px; display: block;">
    </div>
</div>
<img src="images/bg_desktop.jpg" id="bg_fijo">
<img src="images/bg_mobile.jpg" id="bg_mobo">
<div class="oscuro" ></div>
</body>
</html>
@isset($rep)
    @if($rep)
        <script>
            $("#gracias").css("display", "block");
            $("#campos").css("display", "none");
            $("#guias").fadeOut(100);
            $("#precarga").remove();
            setTimeout(function () {
                $("#miformulario").fadeIn(100);
            }, 100);
        </script>
    @else
        <script>
            $("#error").css("display", "block");
            $("#campos").css("display", "none");
            $("#guias").fadeOut(100);
            $("#precarga").remove();
            setTimeout(function () {
                $("#miformulario").fadeIn(100);
            }, 100);
        </script>
    @endif
@endisset
