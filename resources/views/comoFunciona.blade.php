<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Los guías de Tsushima</title>
    <meta name="viewport" content="width=1080px, user-scalable=no">
    <link href="css/estilos.css" rel="stylesheet" type="text/css">

    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/TweenMax.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/pajaros.js"></script>

</head>

<body onLoad="precargaweb2(); init();" style="margin:0px;">


<div id="precarga">
    <div id="cargando"><img src="images/estrella.png" id="estrella"><img id="loading" src="images/cargando.png"></div>
</div>
<header id="miheader">
    <div class="menu_nav" id="abrircerrar" onClick="verMenu();"><span class="linea1"></span><span class="linea2"></span><span class="linea3"></span></div>
    <img src="images/logo_ps4.png" class="logoweb">
    <img src="images/logo_ps4_mobo.png" class="logowebmobo">
    <nav id="menunavegacion">
        <a href="{{ url('/') }}" target="_self">Los guías de Tsushima</a>
        <a href="{{ url('comoFunciona') }}" target="_self"  class="destacado">¿Cómo funciona?</a>
    </nav>
</header>



<a href="{{ url('/') }}" target="_self"><img src="images/logo_web_mobile.png" class="logocentral_mobo">
<img src="images/logo_web_desktop.png" class="logocentral"></a>

<section id="comofunciona" >
    <article id="info" >
        <p>Si eres miembro de PSPLUS y has adquirido Ghost of Tsushima, podrás reservar gratis durante 45 minutos a un guía que te acompañará en una partida inolvidable. Esta experiencia aumenta la inmersión en la isla Tsushima aportando datos reales sobre el Japón de la época. Para jugar sigue estos sencillos pasos:</p>
        <span class="pasos">
			<img src="images/paso1.png"><img src="images/paso2.png"><img src="images/paso3.png">
			</span>
        <span class="pasosmobile">
			<img src="images/paso1_mob.png"><img src="images/paso2_mob.png"><img src="images/paso3_mob.png">
			</span>
        <p class="sep"><span onClick="mostrarVideo();" class="botoncillo2">Ver el vídeo</span></p>
    </article>
</section>
<div id="contenedorVideo" style="display: none;">
    <span class="cerrar" onClick="cerrarVideo();" >Cerrar</span>
    <iframe width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="miiframe"></iframe>
</div>
<img src="images/logo_sp.png" class="logo_sp">
<img src="images/logo_sp2.png" class="logo_sp_mobile">
<footer>
    <div class="rrss">
        <p>Compartir :</p>
        <a href="#" target="_blank"><img src="images/twitter.png"></a>
        <a href="#" target="_blank"  class="whatsapp"><img src="images/whastapp.png"></a>
    </div>
</footer>
<img src="images/bruma.png" id="bruma">
<img src="images/bruma.png" id="bruma_fondo1">
<img src="images/bruma2.png" id="bruma_fondo2">
<img src="images/bruma2.png" id="bruma2">
<img src="images/bg_trans.png" id="bg_transparente">
<img src="images/bg_desktop.jpg" id="bg_fijo">
<img src="images/bg_mobile.jpg" id="bg_mobo">
<div id="animation_container" style="background-color:rgba(255, 255, 255, 0.00); width:100vw; height:1080px" class="tamano">
    <canvas id="canvas" width="1920" height="1080" style="position: absolute; display: block; background-color:rgba(255, 255, 255, 0.00);"  class="tamano"></canvas>
    <div id="dom_overlay_container"  class="tamano" style="pointer-events:none; overflow:hidden; width:1920px; height:1080px; position: absolute; left: 0px; top: 0px; display: block;">
    </div>
</div>
<div class="oscuro"></div>
</body>
</html>
