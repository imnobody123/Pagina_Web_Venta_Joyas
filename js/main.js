$(document).ready(function(){

	/*Esta parte de código sirve para detectar a que distancia se encuentra
	  la barra de cataegorias y posteriormente hacerla quedar estática en
	  la parte de arriba 
	*/
	var altura = 624.7000122070312;

	$(window).scroll('scroll', function(){
		if ($(window).scrollTop() > altura) 
		{
		 	$('.navegacionBarra').addClass('menuFijo');
		 	$('.navegacionBarra').css({'height':'50px'});
		}
		else
		{
			$('.navegacionBarra').removeClass('menuFijo');
		}
	});

	$('#buttonMenu').click(function(){
		if($('#buttonMenu').attr('class') == 'fa fa-bars')
		{
			//Cambia el icono del menu de navegación por una X
			$('#buttonMenu').removeClass('fa fa-bars').addClass('fa fa-close');

			//Le da efecto de transparencia al fondo de la página
			$('.navegacionMenu').css({'width':'100%', 'background':'rgba(0,0,0,.3)'});
			$('.navegacionMenu .menu').css({'left':'0px'});

			//Crea la animación de que se recorre a la derecha la foto principal
			$('.contenedorPortada').css({'width':'77%','height':'578px','top':'65px','transition':'0.2s'});

			//Crea la animación de que se recorre a la derecha la barra de categorias
			$('.navegacionBarra').css({'width':'77%','float':'right'});

			//Desactiva el scroll
			$('html, body').css({'overflow-y':'hidden', 'height':'100%'});
		}
		else if($('#buttonMenu').attr('class') == 'fa fa-arrow-left')
		{
			window.history.back();
		}
		else if($('#buttonMenu').attr('class') == 'fa fa-close')
		{
			//Regresa a la normalidad del icono cambiando de la X a las tres barras
			$('#buttonMenu').removeClass('fa fa-close').addClass('fa fa-bars');

			//Regresa a la normalidad el tono de transparencia
			$('.navegacionMenu .menu').css({'left':'-320px'});
			$('.navegacionMenu').css({'width':'0%', 'background':'rgba(0,0,0,0)'});

			//Regresa a la normalidad la fotografia principal
			$('.contenedorPortada').css({'width':'100%','height':'560px','top':'46px','transition':'0.2s'});

			//Regresa a la normalidad la barra de categorias
			$('.navegacionBarra').css({'width':'100%','float':'left'});

			//Activa el scroll
			$('html, body').css({'overflow-y':'visible','height':'auto'});
		}
	});

	$('#buttonDetalles').click(function(){
		window.location.href = 'menuPáginas/Acerca de.html';
	});
});

//Esta función activa el slider dentro de las fotos
function activarSlider() {
    $('.flexslider').flexslider({
    	touch: true,
    	pauseOnAction: false,
    	pauseOnHover: false,
    });
}