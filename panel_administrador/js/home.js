$(document).ready(function(){
	console.log("Jquery charged!!")

var url;	

$(".contieneRemate").hover(function(){
	$(this).css("cursor","pointer");
});	

$(".eliminar").hover(function(){
	$(this).css("cursor","pointer");
});	

$("#contieneRemate1").click(function(){
	url = "creaRemate.php?Remate=1"; 
	$(location).attr('href',url);
});

$("#contieneRemate2").click(function(){
	url = "creaRemate.php?Remate=2"; 
	$(location).attr('href',url);
});

$("#contieneRemate3").click(function(){
	url = "creaRemate.php?Remate=3"; 
	$(location).attr('href',url);
});

$("#contieneRemate4").click(function(){
	url = "creaRemate.php?Remate=4"; 
	$(location).attr('href',url);
});

$("#contieneRemate5").click(function(){
	url = "creaRemate.php?Remate=5"; 
	$(location).attr('href',url);
});

$("#eliminarRemate1").click(function(){
	url = "http://localhost/Remates/BD/EliminaRemate.php?idRemate=1"; 
	$(location).attr('href',url);
});

$("#eliminarRemate2").click(function(){
	url = "http://localhost/Remates/BD/EliminaRemate.php?idRemate=2"; 
	$(location).attr('href',url);
});

$("#eliminarRemate3").click(function(){
	url = "http://localhost/Remates/BD/EliminaRemate.php?idRemate=3"; 
	$(location).attr('href',url);
});

$("#eliminarRemate4").click(function(){
	url = "http://localhost/Remates/BD/EliminaRemate.php?idRemate=4"; 
	$(location).attr('href',url);
});

$("#eliminarRemate5").click(function(){
	url = "http://localhost/Remates/BD/EliminaRemate.php?idRemate=5"; 
	$(location).attr('href',url);
});

});