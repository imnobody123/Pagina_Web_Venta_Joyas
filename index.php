<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<title>Documento sin título</title>
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/estiloMenuDesplegable.css" rel="stylesheet" type="text/css" />
<link href="css/EstiloMenuSuperior.css" rel="stylesheet" type="text/css" />
<link href="css/estiloPortada.css" rel="stylesheet" type="text/css" />
<link href="css/estiloBarraCategorias.css" rel="stylesheet" type="text/css">
<link href="css/estiloBarraInferior.css" rel="stylesheet" type="text/css">
<link href="css/estiloCuerpoPrincipal.css" rel="stylesheet" type="text/css">
<link href="css/estiloTarjeta3D.css" rel="stylesheet" type="text/css">
<link href="css/estiloVentanaProductos.css" rel="stylesheet" type="text/css">
<link href="css/flexslider.css" rel="stylesheet" type="text/css">

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/ajax-jquery-1.6.2.js"type="text/javascript"></script>
<script src="js/jquery-flexslider.js"></script>
<script src="js/main.js"type="text/javascript"></script>
<script src="js/mostrarVentanaProductos.js"></script>
</head>
<body onload="activarSlider()" class="fa-angle-double-left" style="overflow-x:hidden">

    <?php
        $CategoriasProductos;
    ?>

    <header class="menuDesplegable">
        <span id="buttonMenu" class="fa fa-bars"></span>
        <nav class="navegacionMenu">
            <ul class="menu">
                <li><a href="menuPáginas/buzonSugerencias.html"><span class="fa fa-paper-plane icon-menu"></span> Buz&oacuten de Sugerencias </a></li>
                <li><a href="menuPáginas/Politicas de compra.html"><span class="fa fa-file-text icon-menu"></span> Pol&iacuteticas de Compra </a></li>
                <li><a href="menuPáginas/Politicas de devolucion.html"><span class="fa fa-file-text icon-menu"></span> Pol&iacuteticas de Devoluci&oacuten </a></li>
                <li><a href="menuPáginas/Acerca de.html"><span class="fa fa-envelope icon-menu"></span> Acerca de </a></li>
            </ul>
        </nav>

        <img src="Imágenes/LogoBJTrans.png" id="imgLogoPri" />

        <form>
            <fieldset>
                <input type="search" placeholder="Búsqueda">
                <button type="submit"> <i class="fa fa-search"></i> </button>
            </fieldset>
        </form>

        <a href="Login.html" id="labelIniSe"> Iniciar Sesi&oacuten </a>
        <a href="Register.html" id="labelRegis"> Registrarse </a>                                                                 
    </header>

    <div class="contenedorPortada">
        <div class="capaDegradado"></div>
        <div class="contenedorDetalles">
            <div class="detalles">
                <h1> ¿Qui&eacutenes Somos? </h1>
                <p>
                Somos una empresa dedicada a ofrecerle joyer&iacutea
                de la mejor calidad as&iacute como productos exclusivos
                que no encontrar&aacute tan facilmente. Somos confiables
                y contamos con nuestra propia empresa de paqueteria 
                para garantizar seguridad a sus productos.
                </p>
                <button id="buttonDetalles"> Ver Detalles </button>
            </div>
        </div>
    </div>

    <center>
        <nav class="navegacionBarra">
            <ul class="menu">
                <li class="l1"><a href="#" class="anillos"> Anillos </a>
                    <ul class="subMenuAnillos">
                        <li><a href="menuPáginas/Lista de Productos.php?CategoriasProductos=AnillosCompromiso"> Anillos de Compromiso </a></li>
                        <li><a href="menuPáginas/Lista de Productos.php?CategoriasProductos=AnillosBodas"> Anillos de Bodas </a></li>
                        <li><a href="menuPáginas/Lista de Productos.php?CategoriasProductos=AnillosEternidad"> Anillos de Eternidad </a></li>
                    </ul>
                </li>
                <li class="l1"><a href="#"> Colgantes </a>
                    <ul class="subMenuColgantes">
                        <li><a href="menuPáginas/Lista de Productos.php?CategoriasProductos=Gargantillas"> Gargantillas </a></li>
                        <li><a href="menuPáginas/Lista de Productos.php?CategoriasProductos=Cadenas"> Cadenas </a></li>
                        <li><a href="menuPáginas/Lista de Productos.php?CategoriasProductos=Collares"> Collares </a></li>
                    </ul>
                </li class="l1">
                <li class="l1"><a href="#"> Celebraciones </a>
                    <ul class="subMenuCelebraciones">
                        <li><a href="menuPáginas/Lista de Productos.php?CategoriasProductos=xvanos"> XV Años </a></li>
                        <li><a href="menuPáginas/Lista de Productos.php?CategoriasProductos=Primeracomunion"> Primera Comunión </a></li>
                        <li><a href="menuPáginas/Lista de Productos.php?CategoriasProductos=Bautizo"> Bautizo </a></li>
                    </ul>
                </li>
                <li class="l1"><a href="menuPáginas/Lista de Productos.php?CategoriasProductos=aretes"> Aretes </a></li>
                <li class="l1"><a href="#"> Relojes </a>
                    <ul class="subMenuReloj">
                        <li><a href="menuPáginas/Lista de Productos.php?CategoriasProductos=RelojesHombre"> Para Hombre </a></li>
                        <li><a href="menuPáginas/Lista de Productos.php?CategoriasProductos=RelojesMujer"> Para Mujer </a></li>
                        <li><a href="menuPáginas/Lista de Productos.php?CategoriasProductos=RelojesUnisex"> Unisex </a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </center>

    <img src="Imágenes/LogoCompletoEslogan.png" id="imgLogoCompleto" />

    <div class="contenedorParrafo">
    	<h2> ¿Sab&iacuteas qu&eacute...? </h2>
    	<p>
    		Actualmente hay una gran variedad de joyas: modelos, colores, tamaños… y no todas nos sientan igual de bien. Depende del tipo de nuestra piel, nuestra estatura, color del pelo, busto…
    	</p>
    	<br>
    	<p>
			El subtono de nuestra piel indicará el color que nos sienta mejor a nuestro tipo de color de piel. Elegir el tono correcto ayuda a no resaltar visualmente nuestras imperfecciones: manchas, rojeces…
    	</p>
    	<br>
    	<p>
    		El subtono de nuestra piel puede ser frío o cálido, para saberlo solo tenemos que mirar el dorso de nuestras muñecas. Sí las venas tienen un color azulado o violeta quiere decir que nuestro tono de piel es fría, en cambio, sí nuestras venas tienen un tono verdoso indicará que nuestra piel es de tono cálido.
    	</p><br><br>
    	<h3> ¡As&iacute que elige lo mejor para ti! </h3>
    </div>

    <div class="flexslider">
		<ul class="slides">
			<li>
				<img src="Imágenes/ModaVerano.jpg" alt="">
				<section class="flex-caption">
					<p class="txt1"> MODA PRIMAVERA VERANO </p>
				</section>
			</li>
			<li>
				<img src="Imágenes/JoyasGemas.jpg" alt="">
				<section class="flex-caption">
					<p class="txt2"> JOYAS CON GEMAS </p>
				</section>
			</li>
			<li>
				<img src="Imágenes/DPerlas.jpg" alt="">
				<section class="flex-caption">
					<p class="txt3"> GARGANTILLAS CON PERLAS </p>
				</section>
			</li>
		</ul>
	</div>
	<br>
	<h2> Conoce algunos de nuestros productos </h2>
	<!-- Créditos a CodyTron por aportar el source code del proyecto-->
	<div class="wrap">
		<div class="tarjeta-wrap">
			<div class="tarjeta">
				<div class="adelante card1">
					<p class="idtxt1"> Collares </p>
					<a href=""> VER M&AacuteS DETALLES </a>
				</div>
				<div class="atras">
					<p>
						Nuestros collares son los mejores del mercado de joyas
						adem&aacutes cuentan con garabtia de mantenimiento de
						por vida.
					</p>
				</div>
			</div>
		</div>
		<div class="tarjeta-wrap">
			<div class="tarjeta">
				<div class="adelante card2">
					<p class="idtxt1"> Aretes </p>
					<a href=""> VER M&AacuteS DETALLES </a>
				</div>
				<div class="atras">
					<p>
						Tenemos un extenso surtido en aretes, los hay de tipos
						como aro, topacio, con gemas, arracadas y de materiales
						como oro y plata 100& genuinos.
					</p>
				</div>
			</div>
		</div>
		<div class="tarjeta-wrap">
			<div class="tarjeta">
				<div class="adelante card3">
					<p class="idtxt1"> Relojes </p>
					<a href=""> VER M&AacuteS DETALLES </a>
				</div>
				<div class="atras">
					<p>
						En nuestro listado de relojes venimos manejando de hombre,
						mujer y unisex, de diferentes marcas e incluso con alg&uacuten
						sello personal de su preferencia.
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Créditos a CodyTron por aportar el source code del proyecto-->

	<header class="contenedorPrincipal">
		<form class="contenedorProductos">
			<img src="Imágenes/fotosProductos/AnilloZafiro.jpg">
			<p id="lblTitulo"> ANILLO DE ORO ROSA 14K CON 34PTS DE DIAMANTE Y ZAFIROS </p>
			<strong> <p id="lblPrecio"> $29,302 MXN </p> </strong>
			<p class="DP">
				Anillos-Oro Rosa-14-Diamante/Zafiros-34-N/D-Rosa-N/D-SI-Certificado de Autenticidad del Diamante y Zafiro-M&eacutexico
			</p>
			<button onclick="rellenarContenedor(this)" id="AnilloZafiro" class="btnCompra"> Comprar </button>
		</form>

		<form class="contenedorProductos" id="AretesPeridoto">
			<img src="Imágenes/fotosProductos/AretesPeridoto.jpg">
			<p id="lblTitulo"> ARETES DE ORO BLANCO CON 12 PTS. DE DIAMANTE Y 145PTS DE PERIDOTO </p>
			<strong> <p id="lblPrecio"> $8,921 MXN </p> </strong>
			<p class="DP">
				Aretes-Oro Blanco-N/D-Diamante/Peridoto-12-N/D-Blanco-N/D-SI-Certificado de Autenticidad del Diamante y Peridoto-M&eacutexico
			</p>
			<button onclick="rellenarContenedor(this)" id="AretesPeridoto" class="btnCompra"> Comprar </button>
		</form>

		<form class="contenedorProductos">
			<img src="Imágenes/fotosProductos/DijeGramate.jpg">
			<p id="lblTitulo"> DIJE DE ORO BLANCO CON 3PTS DIAMANTE Y 58PTS GRANATE </p>
			<strong> <p id="lblPrecio"> $5,722 MXN </p> </strong>
			<p class="DP">
				Colgantes-Oro Blanco-N/D-Diamante/Gramate-3/58-N/D-Blanco-N/D-SI-Certificado de Autenticidad del Diamante y Gramate-M&eacutexico
			</p>
			<button onclick="rellenarContenedor(this)" id="DijeGramate" class="btnCompra"> Comprar </button>
		</form>

		<form class="contenedorProductos">
			<img src="Imágenes/fotosProductos/AnilloAmatista.jpg">
			<p id="lblTitulo"> ANILLO DE CORAZON ORO BLANCO CON 6 PTS DE DIAMANTE Y AMATISTA </p>
			<strong> <p id="lblPrecio"> $11,245 MXN </p> </strong>
			<p class="DP">
				Anillos-Oro Blanco-N/D-Diamante/Amatista-6-N/D-Blanco-N/D-SI-Certificado de Autenticidad del Diamante y Amatista-M&eacutexico
			</p>
			<button onclick="rellenarContenedor(this)" id="AnilloAmatista" class="btnCompra"> Comprar </button>
		</form>
	</header>

	<div class="VentanadeProductos">
		<img id="imgJoya" src="">
		<span id="cerrarVentana" class="fa fa-times fa-2x" aria-hidden="true"></span>
		<span id="favoritos" class="fa fa-heart-o fa-2x"></span>
		<button id="carritoCompras" class="fa fa-shopping-cart fa-2x" aria-hidden="true">
			A&ntilde;adir al Carrito
		</button>
		<label class="TituloProducto"> RELOJ BIEN CHINGÓN PARA MI </label>
		<label class="Precio"> $10,000 </label>
		<label class="Medidas"> Medidas: </label>
		<select class="comboMedidas" NAME="selMedidas" placeholder="Por Favor Elija" SIZE=1>
			<option> 5 </option>
			<option> 5.5 </option>
			<option> 6 </option>
			<option> 6.5 </option>
			<option> 7 </option>
			<option> 7.5 </option>
			<option> 8 </option>
			<option> 8.5 </option>
			<option> 9 </option>
			<option> 9.5 </option>
			<option> 10 </option>
		</select>
		<label class="cantidad"> Cantidad: </label>
		<button class="botonMenos"><i class="fa fa-minus" aria-hidden="true"></i></button>
		<input id="campoCantidad" type="text" maxlenght="1" placeholder="1" value="1">
		<button class="botonMas"><i class="fa fa-plus" aria-hidden="true"></i></button>
		<button class="BotonCompra"> Comprar </button>
		 <table class="tablaDetalles">
  			<tr>
    			<td class="caracteristicas"> Colleci&oacuten </td>
    			<td> N/D </td>
  			</tr>
  			<tr>
    			<td class="caracteristicas"> Metal </td>
    			<td> Oro Blanco </td>
  			</tr>
  			<tr>
    			<td class="caracteristicas"> Kilates </td>
    			<td> 14 </td>
  			</tr>
  			<tr>
    			<td class="caracteristicas"> Gema </td>
    			<td> ninguno </td>
  			</tr>
  			<tr>
    			<td class="caracteristicas"> Puntos </td>
    			<td> 10 </td>
  			</tr>
  			<tr>
    			<td class="caracteristicas"> Corte </td>
    			<td> N/D </td>
  			</tr>
  			<tr>
    			<td class="caracteristicas"> Color </td>
    			<td> N/D </td>
  			</tr>
  			<tr>
    			<td class="caracteristicas"> Claridad </td>
    			<td> N/D </td>
  			</tr>
  			<tr>
    			<td class="caracteristicas"> Certificado de la gema </td>
    			<td> Si </td>
  			</tr>
  			<tr>
    			<td class="caracteristicas"> Garant&iacytea </td>
    			<td> AJUSTE PULIDO Y PLATINADO SIN COSTO DE POR VIDA </td>
  			</tr>
  			<tr>
    			<td class="caracteristicas"> Pa&iacutes de Origen </td>
    			<td> M&eacutexico </td>
  			</tr>
		</table> 
	</div>

	<p class="parrafoInfo">
		<br>
		Bijoux joshua © 2019.
		<br><br>
		Todos los derechos reservados.
	</p>
</body>
</html>