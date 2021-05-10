// Scroll
	$(document).scroll(function(){
		if($(this).scrollTop() >= $("header").outerHeight()){
			$(".toTop").fadeIn("slow");
		}
		else
		{
			$(".toTop").fadeOut("slow");
		};
	})

	$(".toTop").click(function(){
		$("html, body").animate({
			scrollTop: $(this).scrollTop()
		})
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



