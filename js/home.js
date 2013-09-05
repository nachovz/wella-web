// JavaScript Document

var userAgent = navigator.userAgent.toLowerCase();
jQuery.browser = {
    version: (userAgent.match( /.+(?:rv|it|ra|ie|me)[\/: ]([\d.]+)/ ) || [])[1],
    chrome: /chrome/.test( userAgent ),
    safari: /webkit/.test( userAgent ) && !/chrome/.test( userAgent ),
    opera: /opera/.test( userAgent ),
    msie: /msie/.test( userAgent ) && !/opera/.test( userAgent ),
    mozilla: /mozilla/.test( userAgent ) && !/(compatible|webkit)/.test( userAgent )
};

/***********************mundo ¨*********************/
var altura = screen.height;
var ancho = screen.width;
var positionWrapper = $("#wrapper-bottom").position();

$('#button-bd').css({
		top: (altura/2 + $('#world').outerHeight() - 80)
	});
$('#button-soporte').css({
		top: (altura/2 + $('#world').outerHeight() - 80)
	});
$('#button-seo').css({
		top: (altura/2 + $('#world').outerHeight() + 100)
	});
$('#button-testing').css({
		top: (altura/2 + $('#world').outerHeight() + 100)
	});
$('#button-software').css({
		top: (altura/2 + $('#world').outerHeight() + 160)
	});
	
$('.over-buttons').css({
		left: 70,
		top: (altura/2 + $('#world').outerHeight() + positionWrapper.top + 330)
	});
$('#clientes').css({
		top: (altura/2 + $('#world').outerHeight() + positionWrapper.top + 410)
	});
$('.comentarios').css("margin-top", altura/2 - $('#world').outerHeight() + 330);

$('#littleMan').css("top", $('#world').outerHeight()/30);


function animateIt() {
	animarBat();
	animarValla();
	//animarMan();	
}

/************************* ANIMACIONES **********************************/
var positionMan= $('#littleMan').position();

function animarBote(){
	if ($.browser.chrome) {
		$("#bote").animate({left:"770px",marginLeft:"0px"}, 2000).animate({left:"785px",marginLeft:"0px"}, 2000, "swing", animarBote);
	}else{
		$("#bote").animate({left:"760px",marginLeft:"0px"}, 2000).animate({left:"775px",marginLeft:"0px"}, 2000, "swing", animarBote);
	}
}


function animarBat(){
	$("#bat").animate({left:"800px",top:"450px", marginLeft:"0px"}, 2000).animate({left:"215px",top:"500px",marginLeft:"0px"}, 2000, "swing", animarBat);	

}

function animarValla(){
	$("#valla").animate({opacity:0.4}, 2000).animate({opacity:1}, 2000, "linear", animarValla);	
}

function animarMan(){
	if ($.browser.chrome) {
      $("#littleMan").animate({top:positionMan.top},50).animate({top:positionMan.top-20}, 600, "linear", animarMan);	
	}else{
		$("#littleMan").animate({top:positionMan.top},50).animate({top:positionMan.top-20}, 500, "linear", animarMan);	
		
	}
}

animateIt();

$("#bote").hover(function(){
			$("#bote").stop(true,true); $("#nube-bote").fadeIn();}, function(){ $("#nube-bote").fadeOut(); animarBote();});

$("#bat").hover(function(){
			$("#bat").stop(true,true); $("#nube-bat").fadeIn();}, function(){ $("#nube-bat").fadeOut(); animarBat();});

$("#valla").hover(function(){
			$("#valla").stop(true,true);$("#nube-valla").fadeIn();}, function(){ $("#nube-valla").fadeOut(); animarValla();});

/*$("#littleMan").hover(function(){
			$("#littleMan").stop(true,true);$("#nube-little").fadeIn();}, function(){ $("#nube-little").fadeOut(); animarMan();});
*/

/********************* mostrar/ocultar testimoniales ***********************/
hovertest('futuros');

function ocultarAll(){
	$('.test').css("display", "none");
	$('#cl_poclu').css("background", "url(images/4geeks/home/pocluNO.png) no-repeat");
	$('#cl_qd').css("background", "url(images/4geeks/home/quintodiaNO.png) no-repeat");
	$('#cl_futuros').css("background", "url(images/4geeks/home/construyendofuturosNO.png) no-repeat");
	$('#cl_ivoted').css("background", "url(images/4geeks/home/ivotedNO.png) no-repeat");
	$('#cl_summ').css("background", "url(images/4geeks/home/summumnetNO.png) no-repeat");
}

function hovertest(objeto){
	ocultarAll();
	if (objeto == "poclu"){
		$('#test_poclu').css("display", "block");
		$('#cl_poclu').css("background", "url(images/4geeks/home/pocluSI.png) no-repeat");
	}
	if (objeto == "qd"){
		$('#test_qd').css("display", "block");
		$('#cl_qd').css("background", "url(images/4geeks/home/quintodiaSI.png) no-repeat");
	}
	if (objeto == "ivoted"){
		$('#test_ivoted').css("display", "block");
		$('#cl_ivoted').css("background", "url(images/4geeks/home/ivotedSI.png) no-repeat");
	}
	if (objeto == "summ"){
		$('#test_summ').css("display", "block");
		$('#cl_summ').css("background", "url(images/4geeks/home/summumnetSI.png) no-repeat");
	}
	if (objeto == "futuros"){
		$('#test_futuros').css("display", "block");
		$('#cl_futuros').css("background", "url(images/4geeks/home/construyendofuturosSI.png) no-repeat");
	}
}
 
//ocultar todos los comentarios
function ocultarall(objeto){
	$("#comment-1").removeClass();
	$("#comment-1").addClass("comment-hidden");
	$("#cliente1").removeClass("hover-cliente");
	$("#comment-2").removeClass();
	$("#comment-2").addClass("comment-hidden");
	$("#cliente2").removeClass("hover-cliente");
	$("#comment-3").removeClass();
	$("#comment-3").addClass("comment-hidden");
	$("#cliente3").removeClass("hover-cliente");
	$("#comment-4").removeClass();
	$("#comment-4").addClass("comment-hidden");
	$("#cliente4").removeClass("hover-cliente");
	
	$(".pointer").css("display" ,"none");
	$(".pointer").removeClass("cliente1");
	$(".pointer").removeClass("cliente2");
	$(".pointer").removeClass("cliente3");
	$(".pointer").removeClass("cliente4");
  }
  
function mostrar(objeto, actual){
	ocultarTodos();
	if (objeto == "img_diseño"){
		$("#op1 a span").css("color","white");
		$("#img_diseño").css("background","url(images/4geeks/home/disenoSI.png) no-repeat");
		$("ul#opciones ul#ul_op1").css("display","block");
		$(actual).css("background","url(images/4geeks/home/caja-azul.png) no-repeat");
		return true;
	}
	if (objeto == "img_appmovil"){
		$("#op2 a span").css("color","white");
		$("#img_appmovil").css("background","url(images/4geeks/home/movilesSI.png) no-repeat");
		$("ul#opciones ul#ul_op2").css("display","block");
		$(actual).css("background","url(images/4geeks/home/caja-azul.png) no-repeat");
		return true;
	}
	if (objeto == "img_seo"){
		$("#op3 a span").css("color","white");
		$("#img_seo").css("background","url(images/4geeks/home/seoSI.png) no-repeat");
		$("ul#opciones ul#ul_op3").css("display","block");
		$(actual).css("background","url(images/4geeks/home/caja-azul.png) no-repeat");
		return true;
	}
	if (objeto == "img_juegos"){
		$("#op4 a span").css("color","white");
		$("#img_juegos").css("background","url(images/4geeks/home/juegosSI.png) no-repeat");
		$("ul#opciones ul#ul_op4").css("display","block");
		$(actual).css("background","url(images/4geeks/home/caja-azul.png) no-repeat");
		return true;
	}
	
}

function ocultarTodos(){
	$("ul#opciones ul").css("display","none");
	$("#opciones li.nivel1").css("background","url(images/4geeks/home/cajagris.png) no-repeat");
	$("#op1 a span").css("color","#666666");
	$("#img_diseño").css("background","url(images/4geeks/home/disenoNO.png) no-repeat");
	$("#op2 a span").css("color","#666666");
	$("#img_appmovil").css("background","url(images/4geeks/home/movilesNO.png) no-repeat");
	$("#op3 a span").css("color","#666666");
	$("#img_seo").css("background","url(images/4geeks/home/seoNO.png) no-repeat");
	$("#op4 a span").css("color","#666666");
	$("#img_juegos").css("background","url(images/4geeks/home/juegosNO.png) no-repeat");
}



						 