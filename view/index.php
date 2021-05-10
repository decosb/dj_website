<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>DJ - Your Name</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Google Fonts Roboto -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

</head>
<body>

<main id="main">
	
	<header id="header">

		<!-- header -->
		<nav id="menu">
			<div class="brand">
				<a href="">
				<img src="images/brand-logo.png">
				<h1 class="title-site">Your Name</h1>
				</a>
			</div>
			<div class="menu-desktop">
				<ul class="list">
					<li><a class="link-menu desktop-about">about</a></li>
					<li><a href="#events" class="link-menu desktop-events">events</a></li>
					<li><a href="#gallery" class="link-menu desktop-gallery">gallery</a></li>
					<li><a href="#playlist" class="link-menu desktop-playlist">playlist</a></li>
					<li><a href="#contact" class="link-menu desktop-contact">contact</a></li>
				</ul>
			</div>
			<button class="menu-hamburguer" title="Mobile Menu">
				<span class="fill fill1">&nbsp;</span>
				<span class="fill fill2">&nbsp;</span>
				<span class="fill fill3">&nbsp;</span>
			</button>

		</nav>

		<!-- about -->
		<section id="about">
			<div class="preview">
				<h2 class="tt40px"><span class="green-color">Feel</span> the songs.</h2>
				<h2 class="tt40px">Travel in your <span class="green-color">emotions</span>.</h2>

				<!-- Video Header -->
				<div class="player-preview">

					<!-- 1. Tag Video do Youtube -->
					<div id="player"></div>

				</div>				
			</div>
		</section>

		<div class="box-shadow-section hide">
			<!-- about text -->
			<div class="about-text">
				<div class="textbox">
					<div class="top-about-text">
						<img width="100" height="100" src="images/my-photo-200x200.jpg" alt="My Photo" title="My Photo" class="rounded-img my-photo">
					</div>
					<div class="inside-about-text">
					<h2>hi,</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
					</p>
					<p>
						Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. Para dar um exemplo trivial, qual de nós se submete a laborioso exercício físico, exceto para obter alguma vantagem com isso. Desmoralizado pelos encantos do prazer, percebe que a dor não resulta em prazer algum. Está tão cego pelo desejo que não pode prever quem não cumprirá seu dever por fraqueza de vontade.
					</p>
					</div>
					<div class="box-social-media">
					<ul>
						<li><a title="Facebook" href="">
							<img src="images/icon-facebook.svg" alt="Facebook">
						</a></li>
						<li><a title="Twitter" href="">
							<img src="images/icon-twitter.svg" alt="Twitter">
						</a></li>
						<!--<li><a title="Google Plus" href=""><img src="images/footer/icon-google-plus.png" alt="Google Plus"></a></li>-->
						<li><a title="Youtube" href="">
							<img src="images/icon-youtube.svg" alt="YouTube">
						</a></li>
						<li><a title="Instagram" href="">
							<img src="images/icon-instagram.svg" alt="Instagram">
						</a></li>
					</ul>
				</div>
				<p align="center"><button class="close-btn" title="Close">close</button></p>
				</div>
			</div>

		</div>

		<!-- menu mobile -->
			<div class="box-menu-mobile hide">
				<div class="menu-mobile">
					<a href="#about-mobile"class="link-menu-mobile link-section-about">about</a>
					<a href="#events" class="link-menu-mobile link-section-events">events</a>
					<a href="#gallery" class="link-menu-mobile link-section-gallery">gallery</a>
					<a href="#playlist" class="link-menu-mobile link-section-playlist">playlist</a>
					<a href="#contact" class="link-menu-mobile link-section-contact">contact</a>
				</div>
				<div class="about-mobile-version">
					About no mobile
				</div>
			</div>
	</header>

	<!-- about text -->
			<section id="about-mobile" class="about-text">
				<div class="box-title bg-orange"><h2 class="title dark-title">About</h2></div>
				<div class="textbox">
					<div class="top-about-text">
						<h2>hi,</h2>
						<img width="100" height="100" src="images/my-photo-200x200.jpg" alt="My Photo" title="My Photo" class="rounded-img my-photo">
					</div>
					<div class="inside-about-text">
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
					</p>
					<p>
						Aquele que ama ou exerce ou deseja a dor, pode ocasionalmente adquirir algum prazer na labuta. Para dar um exemplo trivial, qual de nós se submete a laborioso exercício físico, exceto para obter alguma vantagem com isso. Desmoralizado pelos encantos do prazer, percebe que a dor não resulta em prazer algum. Está tão cego pelo desejo que não pode prever quem não cumprirá seu dever por fraqueza de vontade.
					</p>
					</div>
					<div class="box-social-media">
					<ul>
						<li><a title="Facebook" href="">
							<img src="images/icon-facebook.svg" alt="Facebook">
						</a></li>
						<li><a title="Twitter" href="">
							<img src="images/icon-twitter.svg" alt="Twitter">
						</a></li>
						<!--<li><a title="Google Plus" href=""><img src="images/footer/icon-google-plus.png" alt="Google Plus"></a></li>-->
						<li><a title="Youtube" href="">
							<img src="images/icon-youtube.svg" alt="YouTube">
						</a></li>
						<li><a title="Instagram" href="">
							<img src="images/icon-instagram.svg" alt="Instagram">
						</a></li>
					</ul>
				</div>
				</div>
			</section>

	<!-- events -->
	<section id="events">

		<div class="box-title"><h2 class="title light-title">Events</h2></div>
		
		<!-- event 1 -->
		<div class="box-event-details">
			<div class="event-details">
					<div class="date-event">
						<p class="text-date">15</p>
						<p class="text-month-year">out '20</p>
					</div>
					<div class="local-event">
						<img src="images/events/allianz-parque.jpg" alt="Allianz Parque" title="Allianz Parque" width="100%" height="100%">
						<div class="text-local-event">
							<p class="local">Allianz Parque</p>
							<p class="city">São Paulo</p>
						</div>
					</div>
					<div class="ticket-event">
						<p class="ticket">ticket</p>
						<p class="price">$115</p>
					</div>
					<div class="btn-buy-ticket-event">
						<button class="buy-now-event" title="Buy Now">buy now</button>
					</div>
			</div>

		<!-- event 2 -->
		<div class="event-details">
				<div class="date-event">
					<p class="text-date">24</p>
					<p class="text-month-year">jul '20</p>
				</div>
				<div class="local-event">
					<img src="images/events/mineirao-show.jpg" alt="Mineirão" title="Mineirão" width="100%" height="100%">
					<div class="text-local-event">
						<p class="local">Mineirão</p>
						<p class="city">Minas Gerais</p>
					</div>
				</div>
				<div class="ticket-event">
					<p class="ticket">ticket</p>
					<p class="price">$100</p>
				</div>
				<div class="btn-buy-ticket-event">
					<button class="buy-now-event" title="Buy Now">buy now</button>
				</div>
		</div>

		<!-- event 3 -->
		<div class="event-details">
				<div class="date-event">
					<p class="text-date">07</p>
					<p class="text-month-year">mar '20</p>
				</div>
				<div class="local-event">
					<img src="images/events/maracanazinho-show.jpg" alt="Maracanâzinho" title="Maracanâzinho" width="100%" height="100%">
					<div class="text-local-event">
						<p class="local">Maracanâzinho</p>
						<p class="city">Rio de Janeiro</p>
					</div>
				</div>
				<div class="ticket-event">
					<p class="ticket">ticket</p>
					<p class="price">$110</p>
				</div>
				<div class="btn-buy-ticket-event">
					<button class="buy-now-event" title="Buy Now">buy now</button>
				</div>
		</div>

		<div class="see-more">
			<button class="btn-see-more" title="See all tour">see all tour</button>
		</div>
	</div>

	</section>

	<!-- gallery -->
	<section id="gallery">

		<div class="modal-image-slider">
			<button class="close-btn" title="Close">close</button>
			<div class="show-image">
				<figure>
					<img class="current-img" width="500" height="500" src="" alt="Image01">
					<figcaption class="subtitle_image">Legenda de imagem</figcaption>

					<!-- slide controls -->
					<div class="image-slider-controls">
						<button class="left-control fleft"> 
							<img src="images/left-arrow.png" alt="Left control">
						</button>
						<button class="right-control fright"> 
							<img src="images/right-arrow.png" alt="Right control">
						</button>
					</div>

				</figure>
			</div>
		</div>

		<div class="box-title"><h2 class="title light-title">Gallery</h2></div>
		<p class="info-section">Select a photo for more details.</p>

		<div class="select-option-gallery">
			<button class="all-gallery">All</button>
			<button class="album-gallery">Album</button>
			<button class="solo-gallery">Solo</button>
		</div>

	<div class="box-image-slider">
		<div class="image-slider">

			<!-- thumbnail image -->
			<div class="thumb-image">
				<img src="images/gallery/image01.jpg" alt="Image 1" title="Image 1">
				
				<div class="info-image">
					<p class="info subtitle_thumb">info image here</p>
				</div>
			</div>

			<!-- thumbnail image -->
			<div class="thumb-image">
				<img src="images/gallery/image02.jpg" alt="Image 2" title="Image 2">
				
				<div class="info-image">					
					<p class="info subtitle_thumb">info image here</p>
				</div>
			</div>

			<!-- thumbnail image -->
			<div class="thumb-image">
				<img src="images/gallery/image03.jpg" alt="Image 3" title="Image 3">
				
				<div class="info-image">
					<p class="info subtitle_thumb">info image here</p>
				</div>
			</div>

			<!-- thumbnail image -->
			<div class="thumb-image">
				<img src="images/gallery/image04.jpg" alt="Image 4" title="Image 4">
				
				<div class="info-image">
					<p class="info subtitle_thumb">info image here</p>
				</div>
			</div>

			<!-- thumbnail image -->
			<div class="thumb-image">
				<img src="images/gallery/image05.jpg" alt="Image 5" title="Image 5">
				
				<div class="info-image">
					<p class="info subtitle_thumb">info image here</p>
				</div>
			</div>

			<!-- thumbnail image -->
			<div class="thumb-image">
				<img src="images/gallery/image06.jpg" alt="Image 6" title="Image 6">
				
				<div class="info-image">					
					<p class="info subtitle_thumb">info image here</p>
				</div>
			</div>

			<!-- thumbnail image -->
			<div class="thumb-image">
				<img src="images/gallery/image07.jpg" alt="Image 7" title="Image 7">
				
				<div class="info-image">					
					<p class="info subtitle_thumb">info image here</p>
				</div>
			</div>

			<!-- thumbnail image -->
			<div class="thumb-image">
				<img src="images/gallery/image08.jpg" alt="Image 8" title="Image 8">
				
				<div class="info-image">					
					<p class="info subtitle_thumb">info image here</p>
				</div>
			</div>

			<!-- thumbnail image -->
			<div class="thumb-image">
				<img src="images/gallery/image09.jpg" alt="Image 9" title="Image 9">
				
				<div class="info-image">					
					<p class="info subtitle_thumb">info image here</p>
				</div>
			</div>

			<!-- thumbnail image -->
			<div class="thumb-image">
				<img src="images/gallery/image10.jpg" alt="Image 10" title="Image 10">
				
				<div class="info-image">					
					<p class="info subtitle_thumb">info image here</p>
				</div>
			</div>

			<!-- <div class="see-more">
				<button class="btn-see-more" title="See all tour album">see all tour album</button>
			</div> -->
			</div>
		</div>

		<div class="controls-image-slider">
			<div class="box-controls">
				<button class="left-control">
					<img src="images/left-arrow.png" alt="Left">
				</button>
				<button class="right-control">
					<img src="images/right-arrow.png" alt="Right">
				</button>
			</div>
		</div>
	</section>

	<!-- playlist -->
	<section id="playlist">
		<div class="box-title"><h2 class="title light-title">Playlist</h2></div>
		<p class="info-section">Enjoys some of my work.</p>
		<div class="playlist-player">
			<div class="music-list">
				<h4 class="title-music-list">select music</h4>

				<!-- box every music -->
				<button class="select-music">
					<div class="label-select-music">
						<img src="images/playlist/cover-bruno-mars-uptown.jpg" alt="Bruno Mars" title="Bruno Mars" width="100%" height="100%">
					</div>
					<div class="author-music-duration">
						<ul>
							<li class="author">nujabes</li>
							<li class="music-name">sky is falling</li>
							<li class="duration-music"><strong>Duration</strong> - 5:25</li>
						</ul>
					</div>
				</button>

				<!-- box every music -->
				<button class="select-music">
					<div class="label-select-music">
						<img src="images/playlist/cover-bruno-mars-uptown.jpg" alt="Bruno Mars" title="Bruno Mars" width="100%" height="100%">
					</div>
					<div class="author-music-duration">
						<ul>
							<li class="author">nujabes</li>
							<li class="music-name">sky is falling</li>
							<li class="duration-music"><strong>Duration</strong> - 5:25</li>
						</ul>
					</div>
				</button>

				<!-- box every music -->
				<button class="select-music">
					<div class="label-select-music">
						<img src="images/playlist/cover-bruno-mars-uptown.jpg" alt="Bruno Mars" title="Bruno Mars" width="100%" height="100%">
					</div>
					<div class="author-music-duration">
						<ul>
							<li class="author">nujabes</li>
							<li class="music-name">sky is falling</li>
							<li class="duration-music"><strong>Duration</strong> - 5:25</li>
						</ul>
					</div>
				</button>

				<!-- box every music -->
				<button class="select-music">
					<div class="label-select-music">
						<img src="images/playlist/cover-bruno-mars-uptown.jpg" alt="Bruno Mars" title="Bruno Mars" width="100%" height="100%">
					</div>
					<div class="author-music-duration">
						<ul>
							<li class="author">nujabes</li>
							<li class="music-name">sky is falling</li>
							<li class="duration-music"><strong>Duration</strong> - 5:25</li>
						</ul>
					</div>
				</button>

				<!-- box every music -->
				<button class="select-music">
					<div class="label-select-music">
						<img src="images/playlist/cover-bruno-mars-uptown.jpg" alt="Bruno Mars" title="Bruno Mars" width="100%" height="100%">
					</div>
					<div class="author-music-duration">
						<ul>
							<li class="author">nujabes</li>
							<li class="music-name">sky is falling</li>
							<li class="duration-music"><strong>Duration</strong> - 5:25</li>
						</ul>
					</div>
				</button>

			</div>
			<div class="current-play">
				<button class="toggle-playlist"></button>
				<div class="artist-info">
					<div class="label">
						<img src="images/playlist/cover-bruno-mars-uptown.jpg" alt="Bruno Mars" title="Bruno Mars" width="100%" height="100%">
					</div>
					<div class="info-current-music">
						<div class="author-music-duration">
							<ul>
								<li class="author">nujabes</li>
								<li class="music-name">modaul soul</li>
								<li class="duration-music"><strong>Duration</strong> - 4:13</li>
							</ul>
						</div>

						<hr class="dark-horizontal-divisor"></hr>

						<div class="share-like-music">
							<ul class="option-current-music">
								<li class="share-current">
									<span class="icon-share">
										<img src="images/playlist/icon-share.png" width="20" height="20"><br>
										<span>share</span>
									</span>
								</li>
								<li class="like-current">
									<span class="icon-like">
										<img src="images/playlist/icon-like.png" width="20" height="20"><br>
										<span>like</span>
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="dj-player">
					<audio controls>
						<source src="" type="audio/ogg">
						<source src="" type="audio/mpeg">
							<span class="audio-support">
								Please, update your browser to play music's. 
							</span>
					</audio>
				</div>
			</div>
			
		</div>
	</section>

	<!-- contact -->
	<section id="contact">
		<div class="box-title"><h2 class="title light-title">Contact</h2></div>
		<div class="form-contact">
			<form id="send-data" method="post">
				<p class="info-section">Send us an email about anything you want to kow and we will contact you soon.</p>
				<!-- <button class="btn-select-option">select option</button> -->
					<select class="list-options">
						<option value="" selected>select option</option>
						<option value="">option1</option>
						<option value="">option2</option>
						<option value="">option3</option>
						<option value="">option4</option>
					</select>

						<label for="name">name</label>	
						<input type="text" name="name" id="name" required>

						<label for="email">email</label>	
						<input type="text" name="email" id="email" required>

						<label for="textarea">description</label>
						<textarea cols="" rows="10" name="textarea" id="textarea">type yout text here</textarea>

						<p align="right"><button id="btn-send-data">send</button></p>
			</form>
		</div>
	</section>

	<!-- footer -->
	<footer id="footer">
		<div class="footer-brand">dj Your Name - &copy;2020</div>
		<div class="developer">by <span><a title="DecoDesign" class="name-dev" href="mailto:decodesign85@yahoo.com.br">DecoDesign</span></a></div>
		<div class="box-social-media">
			<ul>
				<li><a title="Facebook" href="">
					<img src="images/icon-facebook.svg" alt="Facebook">
				</a></li>
				<li><a title="Twitter" href="">
					<img src="images/icon-twitter.svg" alt="Twitter">
				</a></li>
				<!--<li><a title="Google Plus" href=""><img src="images/footer/icon-google-plus.png" alt="Google Plus"></a></li>-->
				<li><a title="Youtube" href="">
					<img src="images/icon-youtube.svg" alt="YouTube">
				</a></li>
				<li><a title="Instagram" href="">
					<img src="images/icon-instagram.svg" alt="Instagram">
				</a></li>
			</ul>
		</div>

	</footer>

	<button class="toTop">
		<img src="images/up_arrow_btn.png" alt="Top Site">
	</button>

</main>

<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>
<script src="js/media.js"></script>
<script src="js/gallery.js"></script>
<script src="js/playlist.js"></script>
<script src="js/scroll.js"></script>

</body>
</html>