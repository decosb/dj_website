// API Youtube Player

// 2. cria a tag de script que carregara o javascript do player
tag = document.createElement("script")
tag.src = "https://www.youtube.com/iframe_api"

var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. função que cria o iframe do Youtube
var player
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
      height: '100%',
      width: '100%',
      videoId: 'XTB7wNQgoh4',
      events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
      }
    });
  }

 // 4. chama a API enquanto carrega o vídeo
 function onPlayerReady(event) {
	event.target.playVideo();
}

 // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
          setTimeout(stopVideo, 6000);
          done = true;
        }
      }
      function stopVideo() {
        player.stopVideo();
      }
