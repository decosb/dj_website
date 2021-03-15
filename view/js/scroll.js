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



