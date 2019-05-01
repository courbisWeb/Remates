$(document).ready(function(){
	console.log("Jquery charged!!")

$(".contieneRemate").hover(function(){
	$(this).css("cursor","pointer");
});	

$("#contieneRemate1").click(function(){
	$("#contieneRemate2").toggle("clip",50000);
	$("#contieneRemate3").toggle("clip",50000);
	$("#contieneRemate4").toggle("clip",50000);
	$(".divSeparador").toggle("clip",50000);
	$("#contenidoRemate1").toggle("slide",5000);
});	

$("#contieneRemate2").click(function(){
	$("#contieneRemate1").toggle("clip",50000);
	$("#contieneRemate3").toggle("clip",50000);
	$("#contieneRemate4").toggle("slide",5000);
	$(".divSeparador").toggle("clip",50000);
	$("#contenidoRemate2").toggle("slide",5000);
});	

$("#contieneRemate3").click(function(){
	$("#contieneRemate1").toggle("clip",50000);
	$("#contieneRemate2").toggle("clip",50000);
	$("#contieneRemate4").toggle("clip",50000);
	$(".divSeparador").toggle("clip",50000);
	$("#contenidoRemate3").toggle("slide",5000);
});	

$("#contieneRemate4").click(function(){
	$("#contieneRemate1").toggle("clip",50000);
	$("#contieneRemate2").toggle("clip",50000);
	$("#contieneRemate3").toggle("clip",50000);
	$(".divSeparador").toggle("clip",50000);
	$("#contenidoRemate4").toggle("slide",5000);
});	

});