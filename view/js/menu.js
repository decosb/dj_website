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

// scroll page
$("header a").click(function(event){
		if(this.hash !== "") {
			event.preventDefault();
			var hash = this.hash;

			$("html, body").animate({
				scrollTop: $(hash).offset().top
			}, 1000, function(){
				window.location.hash;
			});
			$(".box-menu-mobile").addClass("hide");
			$(".menu-mobile").removeClass("showMenu");
		}
	})

// mobile
$(".menu-hamburguer").click(function(){
	//$(this).toggleClass("animate_mobile_btn");
	$(".box-menu-mobile").toggleClass("hide");
	$(".menu-mobile").toggleClass("showMenu");

})

$(".box-menu-mobile").click(function(event){
	if(event.target.className == "box-menu-mobile") {
		$(".box-menu-mobile").addClass("hide");
		$(".menu-mobile").removeClass("showMenu");
	}
})


})








