<?php
	$CategoriasProductosRecibido = ($_GET['CategoriasProductos']);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title> Pagina sin titulo </title>
	<link href="../css/font-awesome.css" rel="stylesheet" type="text/css" />
	<link href="../css/estiloMenuDesplegable.css" rel="stylesheet" type="text/css" />
	<link href="../css/EstiloMenuSuperior.css" rel="stylesheet" type="text/css" />
	<link href="../css/estiloListaProductos.css" rel="stylesheet" type="text/css" />
	<link href="../css/estiloBarrainferior.css" rel="stylesheet" type="text/css" />
	<link href="../css/estiloVentanaProductos.css" rel="stylesheet" type="text/css">

	<script src="../js/jquery-3.3.1.min.js"></script>
	<script src="../js/ajax-jquery-1.6.2.js"></script>
	<script src="../js/main.js"></script>
	<script src="../js/mostrarVentanaProductos.js"></script>

	<script type="text/javascript">
		function filtrarContenidoProductos()
		{
			$('.DP').css({'display':'none'});
			var varCategoria = '<?php echo $CategoriasProductosRecibido ?>';

			switch(varCategoria)
			{
				case "AnillosCompromiso":
					$('#AnillosCompromiso').css({'display':'inline-block'});
				break;
				case "AnillosBodas":
					$('#AnillosBodas').css({'display':'inline-block'});
				break;
				case "AnillosEternidad":
					$('#AnillosEternidad').css({'display':'inline-block'});
				break;
				case "Gargantillas":
					$('#Gargantillas').css({'display':'inline-block'});
				break;
				case "Collares":
					$('#Collares').css({'display':'inline-block'});
				break;
				case "Cadenas":
					$('#Cadenas').css({'display':'inline-block'});
				break;
				case "xvanos":
					$('#XVanos').css({'display':'inline-block'});
				break;
				case "Primeracomunion":
					$('#PrimeraComunion').css({'display':'inline-block'});
				break;
				case "Bautizo":
					$('#Bautizo').css({'display':'inline-block'});
				break;
				case "aretes":
					$('#Aretes').css({'display':'inline-block'});
				break;
				case "RelojesMujer":
					$('#RelojesMujer').css({'display':'inline-block'});
				break;
				case "RelojesHombre":
					$('#RelojesHombre').css({'display':'inline-block'});
				break;
				case "RelojesUnisex":
					$('#RelojesUnisex').css({'display':'inline-block'});
				break;
			}
		}
	</script>
</head>
<body onload="filtrarContenidoProductos()" style="overflow-x:hidden">
	<header class="menuDesplegable">
		<span id="buttonMenu" class="fa fa-arrow-left"></span>
        <img src="../Imágenes/LogoBJTrans.png" id="imgLogoPri" />
        <form>
            <fieldset>
                <input type="search" placeholder="Búsqueda">
                <button type="submit"> <i class="fa fa-search"></i> </button>
            </fieldset>
        </form>

        <a href="../Login.html" id="labelIniSe"> Iniciar Sesi&oacuten </a>
        <a href="../Register.html" id="labelRegis"> Registrarse </a>                                                                 
    </header>

	<h2> Lista de Productos </h2>

	<header class="contenedorPrincipal" id="AnillosCompromiso">
		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo1">
			<img src="../Imágenes/fotosProductos/anilloCompromiso/anilloSolitariof1.jpg">
			<p id="lblTitulo"> Anillo solitario oro blanco con 62pts de diamante </p>
			<strong> <p id="lblPrecio"> $28,170 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Blanco-14-Diamante-62-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo2">
			<img src="../Imágenes/fotosProductos/anilloCompromiso/anilloTasif1.jpg">
			<p id="lblTitulo"> Anillo Tasi oro blanco 14K con 10 puntos de diamante </p>
			<strong> <p id="lblPrecio"> $9,445 MXN </p> </strong>
			<p class="DP">
				Primavera Verano-Oro Blanco-14-Diamante-10-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo3">
			<img src="../Imágenes/fotosProductos/anilloCompromiso/anilloDiamantef1.png">
			<p id="lblTitulo"> Anillo de compromiso con 16 puntos de diamante </p>
			<strong> <p id="lblPrecio"> $12,350 MXN </p> </strong>
			<p class="DP">
				Joyas Con Gema-N/D-16-Diamante-16-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo4">
			<img src="../Imágenes/fotosProductos/anilloCompromiso/anniloOroBlanco.jpg">
			<p id="lblTitulo"> Anillo oro blanco con 40pts de diamante delgado </p>
			<strong> <p id="lblPrecio"> $16,374 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Blanco-16-Diamante-40-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo5">
			<img src="../Imágenes/fotosProductos/anilloCompromiso/anilloFianzof1.jpg">
			<p id="lblTitulo"> Anillo fiorenza en oro blanco 14K con 20 puntos de diamante </p>
			<strong> <p id="lblPrecio"> $11,905 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Blanco-16-Diamante-20-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo6">
			<img src="../Imágenes/fotosProductos/anilloCompromiso/anilloFranyf1.jpg">
			<p id="lblTitulo"> Anillo Frany oro blanco 14K con 20 puntos de diamante </p>
			<strong> <p id="lblPrecio"> $13,850 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Blanco-14-Diamante-20-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo7">
			<img src="../Imágenes/fotosProductos/anilloCompromiso/anilloAriadnaf1.jpg">
			<p id="lblTitulo"> Anillo Ariadna en oro amarillo 14K con 16 puntos de diamante </p>
			<strong> <p id="lblPrecio"> $8,395 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Amarillo-14-Diamante-16-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo8">
			<img src="../Imágenes/fotosProductos/anilloCompromiso/anilloTitalf1.jpg">
			<p id="lblTitulo"> Anillo Tital oro 14K con 8 puntos de diamante terminado platinado </p>
			<strong> <p id="lblPrecio"> $7,880 MXN </p> </strong>
			<p class="DP">
				N/D-Oro-14-Diamante-8-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo9">
			<img src="../Imágenes/fotosProductos/anilloCompromiso/anilloAnaliaf1.jpg">
			<p id="lblTitulo"> Anillo Analia oro blanco 14K con 5 puntos de diamante </p>
			<strong> <p id="lblPrecio"> $5,245 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Blanco-14-Diamante-5-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo10">
			<img src="../Imágenes/fotosProductos/anilloCompromiso/anilloOrof1.jpg">
			<p id="lblTitulo"> Anillo de Compromiso oro 14K con 15 puntos de diamante </p>
			<strong> <p id="lblPrecio"> $12,645 MXN </p> </strong>
			<p class="DP">
				N/D-Oro-14-Diamante-15-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo11">
			<img src="../Imágenes/fotosProductos/anilloCompromiso/anillo20pdf1.jpg">
			<p id="lblTitulo"> Anillo oro 14K con 20 puntos de diamante </p>
			<strong> <p id="lblPrecio"> $14,665 MXN </p> </strong>
			<p class="DP">
				N/D-Oro-14-Diamante-20-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo12">
			<img src="../Imágenes/fotosProductos/anilloCompromiso/anillomqdf1.jpg">
			<p id="lblTitulo"> Anillo oro blanco 14K con medio quilate de diamante </p>
			<strong> <p id="lblPrecio"> $59,940 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Blanco-14-Diamante-1/2-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)"class="contenedorProductos" id="anillo13">
			<img src="../Imágenes/fotosProductos/anilloCompromiso/anilloPromesaf1.jpg">
			<p id="lblTitulo"> Anillo de promesa oro blanco 14K diamante 4 puntos </p>
			<strong> <p id="lblPrecio"> $5,757 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Blanco-14-Diamante-4-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo14">
			<img src="../Imágenes/fotosProductos/anilloCompromiso/anilloOroRosaf1.jpg">
			<p id="lblTitulo"> Anillo de Compromiso oro rosa 14K diamante 9 puntos </p>
			<strong> <p id="lblPrecio"> $7,084 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Blanco-14-Diamante-9-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo15">
			<img src="../Imágenes/fotosProductos/anilloCompromiso/anilloOroAmarillo.jpg">
			<p id="lblTitulo"> Anillo oro amarillo 14K diamante central 11 puntos y lateral 1 punto </p>
			<strong> <p id="lblPrecio"> $7,700 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Amarillo-14-Diamante-11-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo16">
			<img src="../Imágenes/fotosProductos/anilloCompromiso/anilloah2f1.jpg">
			<p id="lblTitulo"> Anillo compromiso oro blanco 14K diamante 9 puntos </p>
			<strong> <p id="lblPrecio"> $8,166 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Blanco-14-Diamante-9-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>
	</header>


	<header class="contenedorPrincipal" id="AnillosBodas">
		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo17">
			<img src="../Imágenes/fotosProductos/anilloBodas/anilloBodasOrof1.png">
			<p id="lblTitulo"> Anillo de bodas cl&aacutesico oro amarillo 10K 4MM </p>
			<strong> <p id="lblPrecio"> $1,625 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Amarillo-10-Diamante-N/D-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo18">
			<img src="../Imágenes/fotosProductos/anilloBodas/anilloOroBlancof1.jpg">
			<p id="lblTitulo"> Argolla en oro blanco con 20 brillantes de 0.50 </p>
			<strong> <p id="lblPrecio"> $8,088 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Blanco-N/D-Diamante-20-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo19">
			<img src="../Imágenes/fotosProductos/anilloBodas/anilloOroBlancoBrillantef1.jpg">
			<p id="lblTitulo"> Argolla en oro blanco com 12 brillantes de 0.50 </p>
			<strong> <p id="lblPrecio"> $8,305 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Blanco-N/D-Diamante-12-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo20">
			<img src="../Imágenes/fotosProductos/anilloBodas/anilloOroAmarilloyBlancof1.jpg">
			<p id="lblTitulo"> Argolla en oro amarillo y blanco con 7 pts de diamante </p>
			<strong> <p id="lblPrecio"> $12,642 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Amarilla-N/D-Diamante-7-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo21">
			<img src="../Imágenes/fotosProductos/anilloBodas/anilloOroAmarillo6Brillantesf1.jpg">
			<p id="lblTitulo"> Anillo en oro amarillo con 6 brillantes de 1.25 </p>
			<strong> <p id="lblPrecio"> $8,459 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Amarillo-N/D-Diamante-6-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo22">
			<img src="../Imágenes/fotosProductos/anilloBodas/anilloOroAmarillo3Brillantesf1.jpg">
			<p id="lblTitulo"> Anillo en oro amarillo con un brillante de 3 puntos </p>
			<strong> <p id="lblPrecio"> $7,465 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Amarillo-N/D-Diamante-3-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo23">
			<img src="../Imágenes/fotosProductos/anilloBodas/anilloOroBlanco7Brillantesf1.jpg">
			<p id="lblTitulo"> Anillo en oro blanco con 7 brillantes de 0.50 </p>
			<strong> <p id="lblPrecio"> $7,672 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Blanco-14-Diamante-7-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo24">
			<img src="../Imágenes/fotosProductos/anilloBodas/anilloOroAmarilloyBlanco14Kf1.jpg">
			<p id="lblTitulo"> Anillo oro amarillo y blanco 14K 6MM (CONFORT) </p>
			<strong> <p id="lblPrecio"> $5,516 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Amarillo-14-N/D-N/D-N/D-N/D-N/D-SI-Certificado de Autenticidad del Metal-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo25">
			<img src="../Imágenes/fotosProductos/anilloBodas/anilloOroFlorentinof1.jpg">
			<p id="lblTitulo"> Aanillo de oro florentino 14K 6MM (CONFORT) </p>
			<strong> <p id="lblPrecio"> $5,386 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Blanco-14-Diamante-9-N/D-N/D-N/D-SI-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo26">
			<img src="../Imágenes/fotosProductos/anilloBodas/anilloLisoOrof1.jpg">
			<p id="lblTitulo"> Anillo de oro amarillo y blanco 14K 6MM (CONFORT) </p>
			<strong> <p id="lblPrecio"> $5,127 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Amarillo-14-N/D-N/D-N/D-N/D-N/D-SI-Certificado de Autenticidad del Metal-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo27">
			<img src="../Imágenes/fotosProductos/anilloBodas/anilloOroGiratorio.jpg">
			<p id="lblTitulo"> Anillo oro amarillo y blanco 14K giratoria (CONFORT) </p>
			<strong> <p id="lblPrecio"> $4,088 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Amarillo-14-N/D-N/D-N/D-N/D-N/D-SI-Certificado de Autenticidad del Metal-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo28">
			<img src="../Imágenes/fotosProductos/anilloBodas/AnilloOro6mmf1.jpg">
			<p id="lblTitulo"> Anillo oro amarillo y blanco 14K 6MM (SI ACEPTO) </p>
			<strong> <p id="lblPrecio"> $5,190 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Amarillo-14-N/D-N/D-N/D-N/D-N/D-SI-Certificado de Autenticidad del Metal-M&eacutexico
			</p>
		</form>
	</header>


	<header class="contenedorPrincipal" id="AnillosEternidad">
		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo29">
			<img src="../Imágenes/fotosProductos/anilloEternidad/anilloZirconias.jpg">
			<p id="lblTitulo"> Anillo de oro amarillo 14K con zirconias (RAZ980) </p>
			<strong> <p id="lblPrecio"> $3,371 MXN </p> </strong>
			<p class="DP">
				Joyas con Gema-Oro Amarillo-14-Zirconias-N/D-N/D-Amarillo-N/D-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo30">
			<img src="../Imágenes/fotosProductos/anilloEternidad/anilloInfinito.jpg">
			<p id="lblTitulo"> Anillo de infinito en oro blanco con 7 pts de diamante </p>
			<strong> <p id="lblPrecio"> $4,641 MXN </p> </strong>
			<p class="DP">
				Anillos con Gemas-Oro Blanco-N/D-Diamante-7-N/D-Blanco-N/D-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo31">
			<img src="../Imágenes/fotosProductos/anilloEternidad/anilloInfinito48pts.jpg">
			<p id="lblTitulo"> Anillo de infinito de oro blanco 14K con 48 pts de diamante </p>
			<strong> <p id="lblPrecio"> $25,168 MXN </p> </strong>
			<p class="DP">
				Joyas con Gema-Oro Blanco-14-Diamante-48-N/D-Blanco-N/D-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo32">
			<img src="../Imágenes/fotosProductos/anilloEternidad/anilloOroBlanco14k.jpg">
			<p id="lblTitulo"> Anillo de oro blanco 14K con 20 pts de diamante </p>
			<strong> <p id="lblPrecio"> $13,296 MXN </p> </strong>
			<p class="DP">
				Joyas con Gema-Oro Blanco-14-Diamante-20-N/D-Blanco-N/D-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo33">
			<img src="../Imágenes/fotosProductos/anilloEternidad/anilloOroBlanco.jpg">
			<p id="lblTitulo"> Anillo de oro blanco 14K con 8 pts de diamante </p>
			<strong> <p id="lblPrecio"> $7,601 MXN </p> </strong>
			<p class="DP">
				Joyas con Gema-Oro Blanco-14-Diamante-8-N/D-Blanco-N/D-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo34">
			<img src="../Imágenes/fotosProductos/anilloEternidad/anilloOroAmarilloRosa.jpg">
			<p id="lblTitulo"> Anillo de oro amarillo y rosa 14K con zirconias </p>
			<strong> <p id="lblPrecio"> $5,066 MXN </p> </strong>
			<p class="DP">
				Joyas con Gema-Oro Amarillo-14-Zirconias-14-N/D-Amarillo-N/D-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo35">
			<img src="../Imágenes/fotosProductos/anilloEternidad/anilloBTE.jpg">
			<p id="lblTitulo"> Anillo de compromiso de oro blanco BTE 15 pts </p>
			<strong> <p id="lblPrecio"> $4,088 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Blanco-N/D-BTE-15-N/D-Blanco-N/D-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="anillo36">
			<img src="../Imágenes/fotosProductos/anilloEternidad/anilloBTE18pts.jpg">
			<p id="lblTitulo"> Anillo oro blanco con 1 BTE de 18 pts y 8 BTES de .25 </p>
			<strong> <p id="lblPrecio"> $11,889 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Blanco-14-BTE-10-N/D-Blanco-N/D-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>
	</header>


	<header class="contenedorPrincipal" id="Gargantillas">
		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="gargantilla1">
			<img src="../Imágenes/fotosProductos/gargantillas/gargantillaPerlas.jpg">
			<p id="lblTitulo"> GARGANTILLA CON PERLAS PARA DAMA (MUY BONITO) </p>
			<strong> <p id="lblPrecio"> $9,177 MXN </p> </strong>
			<p class="DP">
				N/D-N/D-N/D-Perlas-N/D-Redondo-Blanco-Si-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="gargantilla2">
			<img src="../Imágenes/fotosProductos/gargantillas/gargantillaOroAmarillo.jpg">
			<p id="lblTitulo"> GARGANTILLA ORO AMARILLO 14K CON PERLAS genuinas </p>
			<strong> <p id="lblPrecio"> $5,025 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Amarillo-14-Perlas-N/D-Redondo-Blanco-Si-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="gargantilla3">
			<img src="../Imágenes/fotosProductos/gargantillas/gargantillaOroAmarillo14k.jpg">
			<p id="lblTitulo"> GARGANTILLA DE ORO AMARILLO DE 14K CON PERLA MULTICOLOR </p>
			<strong> <p id="lblPrecio"> $6,652 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Amarillo-14-Perlas-N/D-Redondo-Multicolor-Si-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="gargantilla4">
			<img src="../Imágenes/fotosProductos/gargantillas/GARGANTILLAOROAMARILLO 14KCONPERLAS.jpg">
			<p id="lblTitulo"> GARGANTILLA ORO AMARILLO 14K CON PERLAS GENUINAS </p>
			<strong> <p id="lblPrecio"> $9,225 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Amarillo-14-Perlas-N/D-Redondo-Blanco-Si-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="gargantilla5">
			<img src="../Imágenes/fotosProductos/gargantillas/GARGANTILLAOROAMARILLO14KCONPERLASv2.jpg">
			<p id="lblTitulo"> GARGANTILLA ORO AMARILLO 14K CON PERLAS (MODELO 2) </p>
			<strong> <p id="lblPrecio"> $7,046 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Amarillo-14-Perlas-N/D-Redondo-Blanco-Si-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="gargantilla6">
			<img src="../Imágenes/fotosProductos/gargantillas/GARGANTILLAOROAMARILLO 14KCONPERLASv3.jpg">
			<p id="lblTitulo"> GARGANTILLA ORO AMARILLO 14K CON PERLAS (MODELO 3) </p>
			<strong> <p id="lblPrecio"> $4,823 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Amarillo-14-Perlas-N/D-Redondo-Blanco-Si-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="gargantilla7">
			<img src="../Imágenes/fotosProductos/gargantillas/GARGANTILLAOROAMARILLO14KCONPERLAS.jpg">
			<p id="lblTitulo"> GARGANTILLA ORO AMARILLO 14K CON PERLAS GENUINAS </p>
			<strong> <p id="lblPrecio"> $6,202 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Amarillo-14-Perlas-N/D-Redondo-Blanco-Si-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="gargantilla8">
			<img src="../Imágenes/fotosProductos/gargantillas/GARGANTILLADEOROAMARILLOYBLANCO14K.jpg">
			<p id="lblTitulo"> GARGANTILLA DE ORO AMARILLO Y BLANCO 14K (43 + 2 CM) </p>
			<strong> <p id="lblPrecio"> $4,061 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Amarillo y Blanco-14-N/D-N/D-Redondo-Blanco y Amarillo-Si-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>
	</header>


	<header class="contenedorPrincipal" id="Collares">
		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="collares1">
			<img src="../Imágenes/fotosProductos/collares/COLLAR ORO AMARILLO14KCONPERLAS.jpg">
			<p id="lblTitulo"> COLLAR ORO AMARILLO 14K CON PERLAS (MUY BONITO) </p>
			<strong> <p id="lblPrecio"> $5,261 MXN </p> </strong>
			<p class="DP">
				N/D-Oro Amarillo-14-Perlas-N/D-Redondo-Amarillo-Si-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="collares2">
			<img src="../Imágenes/fotosProductos/collares/COLLARAMA.14KCPERLAS.jpg">
			<p id="lblTitulo"> COLLAR AMA. 14K CON PERLAS PARA DAMA (IDEAL PARA ANIVERSARIO) </p>
			<strong> <p id="lblPrecio"> $4,068 MXN </p> </strong>
			<p class="DP">
				Collares con Gema-N/D-14-Perlas-N/D-Redondo-N/D-Si-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="collares3">
			<img src="../Imágenes/fotosProductos/collares/COLLARDEOROAMARILLODE14KCONPERLAMULTICOLOR.jpg">
			<p id="lblTitulo"> COLLAR DE ORO AMARILLO DE 14K CON PERLA MULTICOLOR </p>
			<strong> <p id="lblPrecio"> $10,207 MXN </p> </strong>
			<p class="DP">
				Collares con Gema-Oro Amarillo-14-Perlas-N/D-Redondo-Amarillo-Si-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="collares4">
			<img src="../Imágenes/fotosProductos/collares/COLLARDEPERLASCONOROAMARILLO14K.jpg">
			<p id="lblTitulo"> COLLAR DE PERLAS CON ORO AMARILLO 14K PARA DAMA </p>
			<strong> <p id="lblPrecio"> $13,241 MXN </p> </strong>
			<p class="DP">
				Collares con Gema-N/D-14-Perlas-N/D-Redondo-Amarillo-Si-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="collares5">
			<img src="../Imágenes/fotosProductos/collares/COLLAROROAMARILLO14KCONPERLASDELGADO.jpg">
			<p id="lblTitulo"> COLLAR ORO AMARILLO 14K CON PERLAS DELGADO </p>
			<strong> <p id="lblPrecio"> $3,806 MXN </p> </strong>
			<p class="DP">
				Collares-Oro Amarillo-14-Perlas-N/D-Redondo-Amarillo-Si-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="collares6">
			<img src="../Imágenes/fotosProductos/collares/COLLARCPERLASMULTICOLOR.jpg">
			<p id="lblTitulo"> COLLAR CON PERLAS MULTICOLOR DE LA MEJOR CALIDAD </p>
			<strong> <p id="lblPrecio"> $7,428 MXN </p> </strong>
			<p class="DP">
				Collares con Gema-N/D-14-Perlas-N/D-Redondo-Amarillo-Si-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="collares7">
			<img src="../Imágenes/fotosProductos/collares/COLLAROROAMARILLO14KCONPERLAS.jpg">
			<p id="lblTitulo"> COLLAR ORO AMARILLO 14K CON PERLAS BLANCAS</p>
			<strong> <p id="lblPrecio"> $4,551 MXN </p> </strong>
			<p class="DP">
				Collares-N/D-14-Perlas-N/D-Redondo-Amarillo-Si-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="collares8">
			<img src="../Imágenes/fotosProductos/collares/COLLAROROAMARILLO14KCON36PERLAS.jpg">
			<p id="lblTitulo"> COLLAR ORO AMARILLO 14K CON 36 PERLAS </p>
			<strong> <p id="lblPrecio"> $5,468 MXN </p> </strong>
			<p class="DP">
				Collares-Oro Amarillo-14-Perlas-36-Redondo-Amarillo-Si-SI-Certificado de Autenticidad de la gema-M&eacutexico
			</p>
		</form>
	</header>


	<header class="contenedorPrincipal" id="Cadenas">
		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cadenas1">
			<img src="../Imágenes/fotosProductos/cadenas/CADENADEOROAMARILLOPARACABALLERO55CM.jpg">
			<p id="lblTitulo"> CADENA DE ORO AMARILLO PARA CABALLERO 55CM </p>
			<strong> <p id="lblPrecio"> $6,135 MXN </p> </strong>
			<p class="DP">
				Cadenas-Oro Amarillo-N/D-N/D-N/D-Redondo-Amarillo-Si-SI-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cadenas2">
			<img src="../Imágenes/fotosProductos/cadenas/CADENADEOROAMARILLO45CMCAL20.jpg">
			<p id="lblTitulo"> CADENA DE ORO AMARILLO 45 CM CAL 20 (PARA HOMBRE O MUJER) </p>
			<strong> <p id="lblPrecio"> $1,863 MXN </p> </strong>
			<p class="DP">
				Cadenas-Oro Amarillo-N/D-N/D-N/D-Redondo-Amarillo-Si-SI-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cadenas3">
			<img src="../Imágenes/fotosProductos/cadenas/CADENADEOROFLORENTINO42CMCAL25.jpg">
			<p id="lblTitulo"> CADENA DE ORO FLORENTINO GENUINO 42 CM CAL 25 </p>
			<strong> <p id="lblPrecio"> $5,741 MXN </p> </strong>
			<p class="DP">
				Cadenas-Oro Amarillo-N/D-N/D-N/D-Redondo-Amarillo-Si-SI-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cadenas4">
			<img src="../Imágenes/fotosProductos/cadenas/CADENADEOROAMARILLO35CMCAL40.jpg">
			<p id="lblTitulo"> CADENA DE ORO AMARILLO BRILLANTE 35 CM CAL 40 </p>
			<strong> <p id="lblPrecio"> $1,972 MXN </p> </strong>
			<p class="DP">
				Cadenas-Oro Amarillo-N/D-N/D-N/D-Redondo-Amarillo-Si-SI-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cadenas5">
			<img src="../Imágenes/fotosProductos/cadenas/CADENADEOROAMARILLOPLATINADODE60CM1X3.jpg">
			<p id="lblTitulo"> CADENA DE ORO AMARILLO PLATINADO DE 60CM 1X3 </p>
			<strong> <p id="lblPrecio"> $28,963 MXN </p> </strong>
			<p class="DP">
				Cadenas-Oro Amarillo-N/D-N/D-N/D-Redondo-Amarillo-Si-SI-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cadenas6">
			<img src="../Imágenes/fotosProductos/cadenas/CADENADEOROAMARILLO14K35CMCAL17.jpg">
			<p id="lblTitulo"> CADENA DE ORO AMARILLO GENUINO 14K 35CM CAL 17 </p>
			<strong> <p id="lblPrecio"> $1,207 MXN </p> </strong>
			<p class="DP">
				Cadenas-Oro Amarillo-N/D-N/D-N/D-Redondo-Amarillo-Si-SI-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cadenas7">
			<img src="../Imágenes/fotosProductos/cadenas/CADENADEOROAMARILLO14K50CMCAL17.jpeg">
			<p id="lblTitulo"> CADENA DE ORO AMARILLO GENUINO 14K 50CM CAL 17 </p>
			<strong> <p id="lblPrecio"> $1,608 MXN </p> </strong>
			<p class="DP">
				Cadenas-Oro Amarillo-N/D-N/D-N/D-Redondo-Amarillo-Si-SI-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cadenas8">
			<img src="../Imágenes/fotosProductos/cadenas/CADENADEOROFLORENTINO14K47CMCAL22.jpg">
			<p id="lblTitulo"> CADENA DE ORO FLORENTINO 14K 47CM CAL 22 </p>
			<strong> <p id="lblPrecio"> $4,691 MXN </p> </strong>
			<p class="DP">
				Cadenas-Oro Amarillo-N/D-N/D-N/D-Redondo-Amarillo-Si-SI-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>
	</header>


	<header class="contenedorPrincipal" id="XVanos">
		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel1">
			<img src="../Imágenes/fotosProductos/xvanos/ARETESLARGOSINFINITOAMORORO14K.jpg">
			<p id="lblTitulo"> ARETES LARGOS INFINITO AMOR ORO 14K </p>
			<strong> <p id="lblPrecio"> $2,117 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel2">
			<img src="../Imágenes/fotosProductos/xvanos/NOMBRECONCADENAALPHAORO14K.jpg">
			<p id="lblTitulo"> NOMBRE CON CADENA ALPHA ORO 14K </p>
			<strong> <p id="lblPrecio"> $3,189 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel3">
			<img src="../Imágenes/fotosProductos/xvanos/NOMBRECONCADENALEROYENORO14K.jpg">
			<p id="lblTitulo"> NOMBRE CON CADENA LEROYEN ORO 14K </p>
			<strong> <p id="lblPrecio"> $4,290 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel4">
			<img src="../Imágenes/fotosProductos/xvanos/DIJEXVAÑOSCORAZONORO14K.jpg">
			<p id="lblTitulo"> DIJE XV AÑOS CORAZON ORO 14K </p>
			<strong> <p id="lblPrecio"> $2,074 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel5">
			<img src="../Imágenes/fotosProductos/xvanos/ARRACADASXVAÑOSOFLARRAC-558.jpg">
			<p id="lblTitulo"> ARRACADAS XV AÑOS OFLARRAC-558  </p>
			<strong> <p id="lblPrecio"> $2,113 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel6">
			<img src="../Imágenes/fotosProductos/xvanos/ANILLODAMAJDOR-7031.jpg">
			<p id="lblTitulo"> ANILLO DAMA JDOR-7031 </p>
			<strong> <p id="lblPrecio"> $2,109 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-N/D-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel7">
			<img src="../Imágenes/fotosProductos/xvanos/ARETESLARGOSCORAZONYCARITAORO14K.jpg">
			<p id="lblTitulo"> ARETES LARGOS CORAZON Y CARITA ORO 14K </p>
			<strong> <p id="lblPrecio"> $1,602 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel8">
			<img src="../Imágenes/fotosProductos/xvanos/ANILLODAMACHN74A582-6YW.jpg">
			<p id="lblTitulo"> ANILLO DAMA CHN74A582-6YW </p>
			<strong> <p id="lblPrecio"> $1,560 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>
	</header>


	<header class="contenedorPrincipal" id="PrimeraComunion">
		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel9">
			<img src="../Imágenes/fotosProductos/primeracomunion/BROQUELESREDONDOSESTRELLARH7115-OB-MP.jpg">
			<p id="lblTitulo"> BROQUELES REDONDOS ESTRELLA RH7115-OB-MP </p>
			<strong> <p id="lblPrecio"> $1,275 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel10">
			<img src="../Imágenes/fotosProductos/primeracomunion/BROQUELESREDONDOSESTRELLARH7115-MP.jpg">
			<p id="lblTitulo"> BROQUELES REDONDOS ESTRELLA RH7115-MP </p>
			<strong> <p id="lblPrecio"> $1,275 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel11">
			<img src="../Imágenes/fotosProductos/primeracomunion/MEDALLAMADONAORO 14KCONMADREPERLA.jpg">
			<p id="lblTitulo"> MEDALLA MADONA ORO 14K CON MADRE PERLA </p>
			<strong> <p id="lblPrecio"> $1,677 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel12">
			<img src="../Imágenes/fotosProductos/primeracomunion/CRUZ ORO14KCON5PUNTOSDEDIAMANTE.jpg">
			<p id="lblTitulo"> CRUZ ORO 14K CON 5 PUNTOS DE DIAMANTE </p>
			<strong> <p id="lblPrecio"> $1,833 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-Diamante-5-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel13">
			<img src="../Imágenes/fotosProductos/primeracomunion/ESCLAVANIÑAORO14KVIS112CBL132Y.jpg">
			<p id="lblTitulo"> ESCLAVA NIÑA ORO 14K VIS112CBL132Y </p>
			<strong> <p id="lblPrecio"> $1,571 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel14">
			<img src="../Imágenes/fotosProductos/primeracomunion/MEDALLAVIRGENORO18KCONDIAMANTE.jpg">
			<p id="lblTitulo"> MEDALLA VIRGEN ORO 18K CON DIAMANTE</p>
			<strong> <p id="lblPrecio"> $2,487 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel15">
			<img src="../Imágenes/fotosProductos/primeracomunion/ARETESORO14KVIS192VM013Y.jpg">
			<p id="lblTitulo"> ARETES ORO 14K VIS192VM013Y </p>
			<strong> <p id="lblPrecio"> $1,035 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel16">
			<img src="../Imágenes/fotosProductos/primeracomunion/BROQUELESSCHNAUZER.jpg">
			<p id="lblTitulo"> BROQUELES SCHNAUZER </p>
			<strong> <p id="lblPrecio"> $1,638 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>
	</header>


	<header class="contenedorPrincipal" id="Bautizo">
		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel17">
			<img src="../Imágenes/fotosProductos/bautizo/DIJECONCADENABUNNYORO.jpg">
			<p id="lblTitulo"> DIJE CON CADENA BUNNY ORO </p>
			<strong> <p id="lblPrecio"> $2,487 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel18">
			<img src="../Imágenes/fotosProductos/bautizo/SEGUROPORTADIJEOROAMARILLO14K.jpg">
			<p id="lblTitulo"> SEGURO PORTA DIJE ORO AMARILLO 14K </p>
			<strong> <p id="lblPrecio"> $934 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel19">
			<img src="../Imágenes/fotosProductos/bautizo/PLACALISAPORTADIJEORO.jpg">
			<p id="lblTitulo"> PLACA LISA PORTA DIJE ORO </p>
			<strong> <p id="lblPrecio"> $1,895 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel20">
			<img src="../Imágenes/fotosProductos/bautizo/MEDALLAOVALADABAUTIZO.jpg">
			<p id="lblTitulo"> MEDALLA OVALADA BAUTIZO </p>
			<strong> <p id="lblPrecio"> $918 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel21">
			<img src="../Imágenes/fotosProductos/primeracomunion/ESCLAVANIÑAORO14KVIS112CBL132Y.jpg">
			<p id="lblTitulo"> ESCLAVA NIÑA ORO 14K VIS112CBL132Y </p>
			<strong> <p id="lblPrecio"> $1,571 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel22">
			<img src="../Imágenes/fotosProductos/bautizo/CRUZMODERNAORO.jpg">
			<p id="lblTitulo"> CRUZ MODERNA ORO </p>
			<strong> <p id="lblPrecio"> $1,123 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel23">
			<img src="../Imágenes/fotosProductos/primeracomunion/ARETESORO14KVIS192VM013Y.jpg">
			<p id="lblTitulo"> ARETES ORO 14K VIS192VM013Y </p>
			<strong> <p id="lblPrecio"> $1,035 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="cel24">
			<img src="../Imágenes/fotosProductos/bautizo/CRUZESPÍRITUSANTO.jpg">
			<p id="lblTitulo"> CRUZ ESPÍRITU SANTO </p>
			<strong> <p id="lblPrecio"> $1,170 MXN </p> </strong>
			<p class="DP">
				Celebraciones-Oro Amarillo-14-N/D-N/D-N/D-Amarillo-Si-N/D-3 Meses por Defecto de Fabricaci&oacuten-M&eacutexico
			</p>
		</form>
	</header>


	<header class="contenedorPrincipal" id="Aretes">
		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="aretes1">
			<img src="../Imágenes/fotosProductos/aretes/ARETESOROAMARILLOCON15PTSDEDIAMANTEYESMERALDA.jpg">
			<p id="lblTitulo"> ARETES ORO AMARILLO CON 15PTS DE DIAMANTE Y ESMERALDA </p>
			<strong> <p id="lblPrecio"> $12,589 MXN </p> </strong>
			<p class="DP">
				Aretes-Oro Amarillo-N/D-Esmeralda/Diamante-15-N/D-Amarillo-Si-Si-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="aretes2">
			<img src="../Imágenes/fotosProductos/aretes/ARETESDEOROBLANCOCON9PTS.DEDIAMANTEY273PTS.DEONIX.jpg">
			<p id="lblTitulo"> ARETES DE ORO BLANCO CON 9 PTS. DE DIAMANTE Y 273 PTS. DE ONIX </p>
			<strong> <p id="lblPrecio"> $12,901 MXN </p> </strong>
			<p class="DP">
				Aretes-Oro Blanco-N/D-Onix/Diamante-9-N/D-Plateado-Si-Si-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="aretes3">
			<img src="../Imágenes/fotosProductos/aretes/ARETESDEOROBLANCOCON 5PTSDEDIAMANTES.jpg">
			<p id="lblTitulo"> ARETES DE ORO BLANCO CON 5 PTS DE DIAMANTES </p>
			<strong> <p id="lblPrecio"> $4,774 MXN </p> </strong>
			<p class="DP">
				Aretes-Oro Blanco-N/D-Diamante-5-N/D-Amarillo-Si-Si-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="aretes4">
			<img src="../Imágenes/fotosProductos/aretes/ARETESOROAMARILLO14KCON2PTSDEDIAMANTE,ESMERALDAYZAFIRO.jpg">
			<p id="lblTitulo"> ARETES ORO AMARILLO 14K CON 2 PTS DE DIAMANTE, ESMERALDA Y ZAFIRO </p>
			<strong> <p id="lblPrecio"> $13,685 MXN </p> </strong>
			<p class="DP">
				Aretes-Oro Amarillo-14-Diamante/Esmeralda/Zafiro-2-N/D-Amarillo-Si-Si-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="aretes5">
			<img src="../Imágenes/fotosProductos/aretes/ARETES DE ORO BLANCO CON 25 PTS. DE DIAMANTE Y PERLA.jpg">
			<p id="lblTitulo"> ARETES DE ORO BLANCO CON 25 PTS. DE DIAMANTE Y PERLA </p>
			<strong> <p id="lblPrecio"> $13,926 MXN </p> </strong>
			<p class="DP">
				Aretes-Oro Blanco-N/D-Diamante/Perla-25-N/D-Blanco-Si-Si-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="aretes6">
			<img src="../Imágenes/fotosProductos/aretes/ARETES DE ORO BLANCO CON 23PTS DE DIAMANTE.jpg">
			<p id="lblTitulo"> ARETES DE ORO BLANCO CON 23PTS DE DIAMANTE  </p>
			<strong> <p id="lblPrecio"> $26,768 MXN </p> </strong>
			<p class="DP">
				Aretes-Oro Blanco-N/D-Diamante-23-N/D-Blanco-Si-Si-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="aretes7">
			<img src="../Imágenes/fotosProductos/aretes/ARETES DE ORO BLANCO CON 10 PTS DE DIAMANTE Y 51 PTS DE DIAMANTE NEGRO.jpg">
			<p id="lblTitulo"> ARETES DE ORO BLANCO CON 10 PTS DE DIAMANTE Y 51 PTS DE DIAMANTE NEGRO </p>
			<strong> <p id="lblPrecio"> $9,705 MXN </p> </strong>
			<p class="DP">
				Aretes-Oro Blanco-N/D-Diamante/Diamante Negro-10/51-N/D-Blanco-Si-Si-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="aretes8">
			<img src="../Imágenes/fotosProductos/aretes/ARETES DE ORO ROSA 14K CON 8PTS DE DIAMANTE Y RUBI.jpg">
			<p id="lblTitulo"> ARETES DE ORO ROSA 14K CON 8PTS DE DIAMANTE Y RUBI </p>
			<strong> <p id="lblPrecio"> $14,049 MXN </p> </strong>
			<p class="DP">
				Aretes-Oro Rosa-14-Diamante/Rubi-8-N/D-Rosa-Si-Si-Certificado de Autenticidad del Diamante-M&eacutexico
			</p>
		</form>
	</header>


	<header class="contenedorPrincipal" id="RelojesHombre">
		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj1">
			<img src="../Imágenes/fotosProductos/relojhombre/RELOJ RADO HYPERCHROME R32502153.jpg">
			<p id="lblTitulo"> RELOJ RADO HYPERCHROME R32502153 </p>
			<strong> <p id="lblPrecio"> $23,960 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj2">
			<img src="../Imágenes/fotosProductos/relojhombre/RELOJ RADO HYPERCHROME R32502203.jpg">
			<p id="lblTitulo"> RELOJ RADO HYPERCHROME R32502203 </p>
			<strong> <p id="lblPrecio"> $23,960 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj3">
			<img src="../Imágenes/fotosProductos/relojhombre/RELOJ RADO HYPERCHROME R32502313.jpg">
			<p id="lblTitulo"> RELOJ RADO HYPERCHROME R32502313 </p>
			<strong> <p id="lblPrecio"> $23,960 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj4">
			<img src="../Imágenes/fotosProductos/relojhombre/RELOJ RADO HYPERCHROME R32091163.jpg">
			<p id="lblTitulo"> RELOJ RADO HYPERCHROME R32091163 </p>
			<strong> <p id="lblPrecio"> $38,700 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj5">
			<img src="../Imágenes/fotosProductos/relojhombre/RELOJ RADO TRUE R27741152.jpg">
			<p id="lblTitulo"> RELOJ RADO TRUE R27741152 </p>
			<strong> <p id="lblPrecio"> $41,560 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj6">
			<img src="../Imágenes/fotosProductos/relojhombre/RELOJ RADO TRUE R27071152.jpg">
			<p id="lblTitulo"> RELOJ RADO TRUE R27071152 </p>
			<strong> <p id="lblPrecio"> $37,480 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj7">
			<img src="../Imágenes/fotosProductos/relojhombre/RELOJ RADO TRUE R27057112.jpg">
			<p id="lblTitulo"> RELOJ RADO TRUE R27057112 </p>
			<strong> <p id="lblPrecio"> $37,480 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj8">
			<img src="../Imágenes/fotosProductos/relojhombre/RELOJ RADO DIAMASTER R14135206.jpg">
			<p id="lblTitulo"> RELOJ RADO DIAMASTER R14135206 </p>
			<strong> <p id="lblPrecio"> $29,000 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>
	</header>


	<header class="contenedorPrincipal" id="RelojesMujer">
		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj9">
			<img src="../Imágenes/fotosProductos/relojmujer/RELOJ RADO FLORENCE R48873173.jpg">
			<p id="lblTitulo"> RELOJ RADO FLORENCE R48873173  </p>
			<strong> <p id="lblPrecio"> $19,700 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos " id="reloj10">
			<img src="../Imágenes/fotosProductos/relojmujer/RELOJ RADO CENTRIX R22862154.jpg">
			<p id="lblTitulo"> RELOJ RADO CENTRIX R22862154  </p>
			<strong> <p id="lblPrecio"> $26,040 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj11">
			<img src="../Imágenes/fotosProductos/relojmujer/RELOJ RADO COUPOLE R22862024.jpg">
			<p id="lblTitulo"> RELOJ RADO COUPOLE R22862024 </p>
			<strong> <p id="lblPrecio"> $26,040 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj12">
			<img src="../Imágenes/fotosProductos/relojmujer/RELOJ RADO DIAMASTER R14064915.jpg">
			<p id="lblTitulo"> RELOJ RADO DIAMASTER R14064915 </p>
			<strong> <p id="lblPrecio"> $29,000 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj13">
			<img src="../Imágenes/fotosProductos/relojmujer/RELOJ RADO COUPOLE R22862023.jpg">
			<p id="lblTitulo"> RELOJ RADO COUPOLE R22862023 </p>
			<strong> <p id="lblPrecio"> $26,040 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj14">
			<img src="../Imágenes/fotosProductos/relojmujer/RELOJ RADO COUPOLE R22862022.jpg">
			<p id="lblTitulo"> RELOJ RADO COUPOLE R22862022 </p>
			<strong> <p id="lblPrecio"> $31,760 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj15">
			<img src="../Imágenes/fotosProductos/relojmujer/RELOJ RADO COUPOLE R22855923.jpg">
			<p id="lblTitulo"> RELOJ RADO COUPOLE R22855923 </p>
			<strong> <p id="lblPrecio"> $34,080 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj16">
			<img src="../Imágenes/fotosProductos/relojmujer/RELOJ RADO HYPERCHROME R32091113.jpg">
			<p id="lblTitulo"> RELOJ RADO HYPERCHROME R32091113 </p>
			<strong> <p id="lblPrecio"> $38,700 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>
	</header>


	<header class="contenedorPrincipal" id="RelojesUnisex">
		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj17">
			<img src="../Imágenes/fotosProductos/relojunisex/RELOJ RADO TRUE R27057122.jpg">
			<p id="lblTitulo"> RELOJ RADO TRUE R27057122 </p>
			<strong> <p id="lblPrecio"> $37,500 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj18">
			<img src="../Imágenes/fotosProductos/relojunisex/RELOJ MIDO SHADE EDICIÓN ESPECIAL.jpg">
			<p id="lblTitulo"> RELOJ MIDO SHADE EDICIÓN ESPECIAL </p>
			<strong> <p id="lblPrecio"> $17,500 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj19">
			<img src="../Imágenes/fotosProductos/relojunisex/RELOJ RADO CENTRIX R30179113.jpg">
			<p id="lblTitulo"> RELOJ RADO CENTRIX R30179113 </p>
			<strong> <p id="lblPrecio"> $37,490 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj20">
			<img src="../Imágenes/fotosProductos/relojunisex/RELOJ RADO TRUE THINLINE R27269302.jpg">
			<p id="lblTitulo"> RELOJ RADO TRUE THINLINE R27269302 </p>
			<strong> <p id="lblPrecio"> $41,570 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj21">
			<img src="../Imágenes/fotosProductos/relojunisex/RELOJ RADO CENTRIX R30179105.jpg">
			<p id="lblTitulo"> RELOJ RADO CENTRIX R30179105 </p>
			<strong> <p id="lblPrecio"> $41,560 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj22">
			<img src="../Imágenes/fotosProductos/relojunisex/RELOJ RADO COUPOLE R22862783.jpg">
			<p id="lblTitulo"> RELOJ RADO COUPOLE R22862783 </p>
			<strong> <p id="lblPrecio"> $38,700 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj23">
			<img src="../Imágenes/fotosProductos/relojunisex/RELOJ RADO TRUE THINLINE R27957012.jpg">
			<p id="lblTitulo"> RELOJ RADO TRUE THINLINE R27957012 </p>
			<strong> <p id="lblPrecio"> $41,900 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
		</form>

		<form onclick="rellenarContenedor(this)" class="contenedorProductos" id="reloj24">
			<img src="../Imágenes/fotosProductos/relojunisex/RELOJ RADO COUPOLE R22850163.jpg">
			<p id="lblTitulo"> RELOJ RADO COUPOLE R22850163 </p>
			<strong> <p id="lblPrecio"> $26,250 MXN </p> </strong>
			<p class="DP">
				Relojes-N/D-N/D-N/D-N/D-N/D-N/D-N/D-N/D-3 Meses de Garant&iacutea Por defecto de fabricaci&oacuten-M&eacutexico
			</p>
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