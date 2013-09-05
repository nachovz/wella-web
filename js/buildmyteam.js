$(function(){
/******Home******/
$('#buildForm input[type="text"]').addClass("sombra");
$('#buildForm input[type="text"]').focus(function(){if($(this).val() == $(this).attr('title')){ $(this).val(''); $(this).removeClass("sombra");}})
.blur(function(){if($(this).val() == ''){ $(this).val($(this).attr('title')); $(this).addClass("sombra");}});

});


function reset(nombre_link, nombre_div, obj){
	$('#'+nombre_link).removeClass("contenedor_clear");
	$('#'+nombre_link).addClass("contenedor_icon");
	
	$("#"+nombre_div).removeClass("checkBoxClear");
	$("#"+nombre_div).addClass("checkBox");
}


$(".icons a").click(function(event) {  
    //event.preventDefault(); 
	//$(".separador").slideToggle("slow");
    //$(".down").slideDown(1000, 'easeInOutBack');
	//$(".down").slideToggle("slow");

	var name = $(this).attr("id");
	chk = "chk_" + name;
	
	//alert($('#'+chk).is(':checked')); 
	$(".icons a").removeClass("contenedor_clear");
	$(".icons a").addClass("contenedor_icon");	
	
	
	if ($('#'+chk).is(':checked') == true){
		
		$(".chk").attr('checked', false);
		$("#"+name).removeClass("contenedor_clear");
		$("#"+name).addClass("contenedor_icon");		
		$('#'+chk).attr('checked', false);
		
		$(".separador").slideUp(1000, 'easeInOutBack');
		$(".down").slideUp(1000, 'easeInOutBack');
		
	}else{
		reset();
		$('.icons a').each(function() {
			//alert('probando');
			reset($(this).attr("id"),$(this).attr("id").split("_")[0],$(this))
			
			//out($(this).attr("id").split("_")[0],$(this));
			
		});
		
		over($(this).attr("id").split("_")[0],$(this));
		$("#"+name).removeClass("contenedor_icon");
		$("#"+name).addClass("contenedor_clear");	
		$(".chk").attr('checked', false);
		$('#'+chk).attr('checked', true);
		
		$(".separador").slideDown(1000, 'easeInOutBack');
		$(".down").slideDown(1000, 'easeInOutBack');
		
	}
	
	/*if ($(this).attr("class") == "contenedor_icon"){
		$("#"+name).removeClass("contenedor_clear");
		$("#"+name).addClass("contenedor_icon");
		$('#'+chk).attr('checked', false);
		
	
	}else{*/
		
		
		
		
	//}
	
	
	
	

});  