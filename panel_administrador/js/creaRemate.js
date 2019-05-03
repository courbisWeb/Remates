$(document).ready(function(){
	console.log("Jquery charged!!")

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

$("#btnPrueba").click(function(){

	var a = $.get("idRemate");
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
	url = "home.html"; 
	$(location).attr('href',url);
});

$("#btnGuardar").click(function(){
	getRemate = $.get("idRemate");
	url 		= 	"home.html"; 
	if(getRemate==1){
		idRemate="#contieneRemate1"
	}
	else
	if(getRemate==2){
		idRemate="#contieneRemate2"
	}
	else
	if(getRemate==3){
		idRemate="#contieneRemate3"
	}
	else
	if(getRemate==4){
		idRemate="#contieneRemate4"
	}
	else
	if(getRemate==5){
		idRemate="#contieneRemate5"
	}		

	$(idRemate).append("<strong>Hello</strong>");	

	$(location).attr('href',url);
});



});