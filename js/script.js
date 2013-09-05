// JavaScript Document
$(function(){
/******Home******/
$('#buildForm input[type="text"]').focus(function(){if($(this).val() == $(this).attr('title')) $(this).val('');})
.blur(function(){if($(this).val() == '') $(this).val($(this).attr('title'));});

$('#buildForm textarea').focus(function(){if($(this).html() == $(this).attr('title')) $(this).html('');})
.blur(function(){if($(this).html() == '') $(this).html($(this).attr('title'));});

});

function desp(objeto){
	$("#"+objeto).css("display", "block");
	
}

function reco(objeto){
	$("#"+objeto).css("display", "none");
	
}