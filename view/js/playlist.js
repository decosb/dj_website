	// Playlist
	$playlist_fechada = "mostrar playlist"; 
	$playlist_aberta = "ocultar playlist";
		$(".toggle-playlist").text($playlist_fechada);
		$(".toggle-playlist").click(function(){
			$(".music-list").toggleClass("ml0");
			if($(".music-list").hasClass("ml0")){
				$(this).text($playlist_aberta);
			}
			else {
				$(this).text($playlist_fechada);
			}
		})



