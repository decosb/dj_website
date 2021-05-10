// menu

// desktop
$(document).ready(function() {
	$(".desktop-about").click(function(){
		$(".box-shadow-section").removeClass("hide");
		});

// close-btn
$(".close-btn").click(function(){
	$(".box-shadow-section").addClass("hide");
})

$(".textbox").parents("about-text").click(function(){
	$(".box-shadow-section").addClass("hide");
})

// mobile
$(".menu-hamburguer").click(function(){
	$(".box-menu-mobile").toggleClass("hide");
	$(".menu-mobile").toggleClass("showMenu");
	$("#header").toggleClass("posFixed");

})

$(".box-menu-mobile").click(function(event){
	if(event.target.className == "box-menu-mobile") {
		$(".box-menu-mobile").addClass("hide");
		$(".menu-mobile").removeClass("showMenu");
	}
})

})








