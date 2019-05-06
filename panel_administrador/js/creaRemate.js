$(document).ready(function(){
	console.log("Jquery charged!!");



var url;
var glsRemate;
var direccionRemate;
var fecRemate;
var descRemate;	
var getRemate;
var idRemate;

(function($) {  
    $.get = function(key)   {  
        key = key.replace(/[\[]/, '\\[');  
        key = key.replace(/[\]]/, '\\]');  
        var pattern = "[\\?&]" + key + "=([^&#]*)";  
        var regex = new RegExp(pattern);  
        var url = unescape(window.location.href);  
        var results = regex.exec(url);  
        if (results === null) {  
            return null;  
        } else {  
            return results[1];  
        }  
    }  
})(jQuery); 

	var a = $.get("Remate");

	$("#idRemate").val(a)

$("#btnPrueba").click(function(){

	var a = $.get("Remate");
	var b = $.get("other");

	glsRemate 		=	$("#txtGlosaRemate").val();	
	direccionRemate	=	$("#txtDireccionRemate").val();
	fecRemate		=	$("#txtFechaRemate").val();
	descRemate		=	$("#idTextoDescripcion").val();

	alert("glsRemate = "+glsRemate
		+"\n direccionRemate = "+direccionRemate
		+"\n fecRemate = "+fecRemate
		+"\n descRemate = "+descRemate
		+"\n idRemate = "+a);
});

$("#btnCancelar").click(function(){
	url = "home.php"; 
	$(location).attr('href',url);
});

$("#btnMas").click(function(){
	window.location.reload(true);
});

$("#btnVerArchivos").click(function(){
	url = "archivoRemate.php"; 
	$(location).attr('href',url);
});


});