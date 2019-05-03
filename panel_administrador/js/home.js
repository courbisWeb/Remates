$(document).ready(function(){
	console.log("Jquery charged!!")

var url;	

$(".contieneRemate").hover(function(){
	$(this).css("cursor","pointer");
	$(".eliminar").toggle("clip",50000);
});	

$("#contieneRemate1").click(function(){
	url = "creaRemate.html?idRemate=1"; 
	$(location).attr('href',url);
});

$("#contieneRemate2").click(function(){
	url = "creaRemate.html?idRemate=2"; 
	$(location).attr('href',url);
});

$("#contieneRemate3").click(function(){
	url = "creaRemate.html?idRemate=3"; 
	$(location).attr('href',url);
});

$("#contieneRemate4").click(function(){
	url = "creaRemate.html?idRemate=4"; 
	$(location).attr('href',url);
});

$("#contieneRemate5").click(function(){
	url = "creaRemate.html?idRemate=5"; 
	$(location).attr('href',url);
});

});