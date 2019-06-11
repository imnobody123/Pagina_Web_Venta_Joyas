$(document).ready(function(){
	
	document.getElementById("campoCantidad").value = "1";
	var valorCantidad = document.getElementById("campoCantidad").value;
	$('.botonMenos').click(function(){
		var CantidadConvertida = parseInt(valorCantidad);
		if (CantidadConvertida > 1)
		{
			CantidadConvertida--;
			valorCantidad = CantidadConvertida.toString();
			document.getElementById("campoCantidad").value = valorCantidad;
		}
	});

	$('.botonMas').click(function(){
		var CantidadConvertida = parseInt(valorCantidad);
		if (CantidadConvertida < 999)
		{
			CantidadConvertida++;
			valorCantidad = CantidadConvertida.toString();
			document.getElementById("campoCantidad").value = valorCantidad;
		}
	});

	$('#cerrarVentana').click(function(){
		//Activa el scroll y regresa el cuerpo principal a la normalidad
		$('html, body').css({'overflow-y': 'visible','height': 'auto','background': 'rgb(0,0,0,0)'});
		$('.contenedorProductos').css({'opacity':'1','pointer-events':'auto'});
		//Cierra la ventana del producto
		$('.VentanadeProductos').css({'display':'none'});
	});
});

function rellenarContenedor(idProducto){
	var tagNameId = 0;
	//Desactiva el scroll y vuelve el fondo transparente
	$('html, body').css({'overflow-y': 'hidden','height': 'auto',
		'background':'rgb(0,0,0,0.2)'});
	$('.contenedorProductos').css({'opacity':'0.4', 'pointer-events':'none'});
	//Muestra la ventana del producto
	$('.VentanadeProductos').css({'display':'block','background':'white','pointer-events':'auto'});

	switch(idProducto.id){
		case 'anillo1':
			tagNameId = 0;
		break;
		case 'anillo2':
			tagNameId = 1;
		break;
		case 'anillo3':
			tagNameId = 2;
		break;
		case 'anillo4':
			tagNameId = 3;
		break;
		case 'anillo5':
			tagNameId = 4;
		break;
		case 'anillo6':
			tagNameId = 5;
		break;
		case 'anillo7':
			tagNameId = 6;
		break;
		case 'anillo8':
			tagNameId = 7;
		break;
		case 'anillo9':
			tagNameId = 8;
		break;
		case 'anillo10':
			tagNameId = 9;
		break;
		case 'anillo11':
			tagNameId = 10;
		break;
		case 'anillo12':
			tagNameId = 11;
		break;
		case 'anillo13':
			tagNameId = 12;
		break;
		case 'anillo14':
			tagNameId = 13;
		break;
		case 'anillo15':
			tagNameId = 14;
		break;
		case 'anillo16':
			tagNameId = 15;
		break;
		case 'anillo17':
			tagNameId = 16;
		break;
		case 'anillo18':
			tagNameId = 17;
		break;
		case 'anillo19':
			tagNameId = 18;
		break;
		case 'anillo20':
			tagNameId = 19;
		break;
		case 'anillo21':
			tagNameId = 20;
		break;
		case 'anillo22':
			tagNameId = 21;
		break;
		case 'anillo23':
			tagNameId = 22;
		break;
		case 'anillo24':
			tagNameId = 23;
		break;
		case 'anillo25':
			tagNameId = 24;
		break;
		case 'anillo26':
			tagNameId = 25;
		break;
		case 'anillo27':
			tagNameId = 26;
		break;
		case 'anillo28':
			tagNameId = 27;
		break;
		case 'anillo29':
			tagNameId = 28;
		break;
		case 'anillo30':
			tagNameId = 29;
		break;
		case 'anillo31':
			tagNameId = 30;
		break;
		case 'anillo32':
			tagNameId = 31;
		break;
		case 'anillo33':
			tagNameId = 32;
		break;
		case 'anillo34':
			tagNameId = 33;
		break;
		case 'anillo35':
			tagNameId = 34;
		break;
		case 'anillo36':
			tagNameId = 35;
		break;
		case 'gargantilla1':
			tagNameId = 36;
		break;
		case 'gargantilla2':
			tagNameId = 37;
		break;
		case 'gargantilla3':
			tagNameId = 38;
		break;
		case 'gargantilla4':
			tagNameId = 39;
		break;
		case 'gargantilla5':
			tagNameId = 40;
		break;
		case 'gargantilla6':
			tagNameId = 41;
		break;
		case 'gargantilla7':
			tagNameId = 42;
		break;
		case 'gargantilla8':
			tagNameId = 43;
		break;
		case 'collares1':
			tagNameId = 44;
		break;
		case 'collares2':
			tagNameId = 45;
		break;
		case 'collares3':
			tagNameId = 46;
		break;
		case 'collares4':
			tagNameId = 47;
		break;
		case 'collares5':
			tagNameId = 48;
		break;
		case 'collares6':
			tagNameId = 49;
		break;
		case 'collares7':
			tagNameId = 50;
		break;
		case 'collares8':
			tagNameId = 51;
		break;
		case 'cadenas1':
			tagNameId = 52;
		break;
		case 'cadenas2':
			tagNameId = 53;
		break;
		case 'cadenas3':
			tagNameId = 54;
		break;
		case 'cadenas4':
			tagNameId = 55;
		break;
		case 'cadenas5':
			tagNameId = 56;
		break;
		case 'cadenas6':
			tagNameId = 57;
		break;
		case 'cadenas7':
			tagNameId = 58;
		break;
		case 'cadenas8':
			tagNameId = 59;
		break;
		case 'cel1':
			tagNameId = 60;
		break;
		case 'cel2':
			tagNameId = 61;
		break;
		case 'cel3':
			tagNameId = 62;
		break;
		case 'cel4':
			tagNameId = 63;
		break;
		case 'cel5':
			tagNameId = 64;
		break;
		case 'cel6':
			tagNameId = 65;
		break;
		case 'cel7':
			tagNameId = 66;
		break;
		case 'cel8':
			tagNameId = 67;
		break;
		case 'cel9':
			tagNameId = 68;
		break;
		case 'cel10':
			tagNameId = 69;
		break;
		case 'cel11':
			tagNameId = 70;
		break;
		case 'cel12':
			tagNameId = 71;
		break;
		case 'cel13':
			tagNameId = 72;
		break;
		case 'cel14':
			tagNameId = 73;
		break;
		case 'cel15':
			tagNameId = 74;
		break;
		case 'cel16':
			tagNameId = 75;
		break;
		case 'cel17':
			tagNameId = 76;
		break;
		case 'cel18':
			tagNameId = 77;
		break;
		case 'cel19':
			tagNameId = 78;
		break;
		case 'cel20':
			tagNameId = 79;
		break;
		case 'cel21':
			tagNameId = 80;
		break;
		case 'cel22':
			tagNameId = 81;
		break;
		case 'cel23':
			tagNameId = 82;
		break;
		case 'cel24':
			tagNameId = 83;
		break;
		case 'aretes1':
			tagNameId = 84;
		break;
		case 'aretes2':
			tagNameId = 85;
		break;
		case 'aretes3':
			tagNameId = 86;
		break;
		case 'aretes4':
			tagNameId = 87;
		break;
		case 'aretes5':
			tagNameId = 88;
		break;
		case 'aretes6':
			tagNameId = 89;
		break;
		case 'aretes7':
			tagNameId = 90;
		break;
		case 'aretes8':
			tagNameId = 91;
		break;
		case 'reloj1':
			tagNameId = 92;
		break;
		case 'reloj2':
			tagNameId = 93;
		break;
		case 'reloj3':
			tagNameId = 94;
		break;
		case 'reloj4':
			tagNameId = 95;
		break;
		case 'reloj5':
			tagNameId = 96;
		break;
		case 'reloj6':
			tagNameId = 97;
		break;
		case 'reloj7':
			tagNameId = 98;
		break;
		case 'reloj8':
			tagNameId = 99;
		break;
		case 'reloj9':
			tagNameId = 100;
		break;
		case 'reloj10':
			tagNameId = 101;
		break;
		case 'reloj11':
			tagNameId = 102;
		break;
		case 'reloj12':
			tagNameId = 103;
		break;
		case 'reloj13':
			tagNameId = 104;
		break;
		case 'reloj14':
			tagNameId = 105;
		break;
		case 'reloj15':
			tagNameId = 106;
		break;
		case 'reloj16':
			tagNameId = 107;
		break;
		case 'reloj17':
			tagNameId = 108;
		break;
		case 'reloj18':
			tagNameId = 109;
		break;
		case 'reloj19':
			tagNameId = 110;
		break;
		case 'reloj20':
			tagNameId = 111;
		break;
		case 'reloj21':
			tagNameId = 112;
		break;
		case 'reloj22':
			tagNameId = 113;
		break;
		case 'reloj23':
			tagNameId = 114;
		break;
		case 'reloj24':
			tagNameId = 116;
		break;
		case 'AnilloZafiro':
			tagNameId = 0;
		break;
		case 'AretesPeridoto':
			tagNameId = 1;
		break;
		case 'DijeGramate':
			tagNameId = 2;
		break;
		case 'AnilloAmatista':
			tagNameId = 3;
		break;
	}
	extraer_e_insertar_Datos(tagNameId);
}

function extraer_e_insertar_Datos(a){
	var texto = document.getElementsByClassName("contenedorProductos")[a].innerText;
	var DetalllesP = document.getElementsByClassName('DP')[a].innerText;
	var labelProductos = texto.split("$");
	if (labelProductos[0] == 'anillo de oro rosa 14k con 34pts de diamante y zafiros\n\n' || labelProductos[0] == 'aretes de oro blanco con 12 pts. de diamante y 145pts de peridoto\n\n'|| labelProductos[0] == 'dije de oro blanco con 3pts diamante y 58pts granate\n\n' || labelProductos[0] == 'anillo de corazon oro blanco con 6 pts de diamante y amatista\n\n'){
		var URLImagen = document.getElementsByTagName("img")[a+5].src;
	}else{
		var URLImagen = document.getElementsByTagName("img")[a+1].src;
	}
	var labelDetalles = DetalllesP.split("-");
	document.getElementsByTagName("label")[0].innerHTML = labelProductos[0];
	document.getElementsByTagName("label")[1].innerHTML = "$" + labelProductos[1];
	document.getElementsByTagName("td")[1].innerHTML = labelDetalles[0];
	document.getElementsByTagName("td")[3].innerHTML = labelDetalles[1];
	document.getElementsByTagName("td")[5].innerHTML = labelDetalles[2];
	document.getElementsByTagName("td")[7].innerHTML = labelDetalles[3];
	document.getElementsByTagName("td")[9].innerHTML = labelDetalles[4];
	document.getElementsByTagName("td")[11].innerHTML = labelDetalles[5];
	document.getElementsByTagName("td")[13].innerHTML = labelDetalles[6];
	document.getElementsByTagName("td")[15].innerHTML = labelDetalles[7];
	document.getElementsByTagName("td")[17].innerHTML = labelDetalles[8];
	document.getElementsByTagName("td")[19].innerHTML = labelDetalles[9];
	document.getElementsByTagName("td")[21].innerHTML = labelDetalles[10];
	document.getElementById("imgJoya").src = URLImagen;
}