// Gallery

$(document).ready(function() {

	// slider
	var slider = $(".image-slider")
	var thumb = $(".thumb-image")
	
	// buttons
	var btnPrev = $(".box-controls .left-control");
	var btnNext = $(".box-controls .right-control");

	$(this).click(function(event){
		if(event.target.className == "show-image"){
			$(".modal-image-slider").fadeOut(200);
		}
	})

	// to left
	$(btnPrev).on("click", function(event){

			
	})

	// to right
	$(btnNext).on("click", function(){

			
	})

	// open modal and get attr image
	$(".thumb-image > img").click(function(event){
		$(".modal-image-slider").fadeIn(200);
		var srcImgGallery = event.target.getAttribute("src");
		var altImgGallery = event.target.getAttribute("alt");
		var titleImgGallery = event.target.getAttribute("alt");
		$(".show-image .current-img").
			attr(
				{src: srcImgGallery,
				 alt: altImgGallery,
				 title: titleImgGallery
				}
			);

			$("figcaption.subtitle_image").text(altImgGallery)
	})

	// close modal
	$(".modal-image-slider .close-btn").click(function(){
		$(".modal-image-slider").fadeOut("slow");
	})

})




