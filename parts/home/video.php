<?php
$data = @$args['video'];
if(@$data):
  preg_match("/(?:youtu\.be\/|youtube.com\/(?:watch\?.*\bv=|embed\/|v\/)|ytimg\.com\/vi\/)(.+?)(?:[^-a-zA-Z0-9]|$)/", @$data, $linkData);
?>
<section class="video">
  <h2 class="video__titulo">CONHEÇA NOSSA MISSÃO</h2>
  <p class="video__desc">Você ama seu pet, nós amamos cuidar dele. A missão do DOK é transformar amor em cuidado.</p>
  <div class="video__container">
  <div class="youtube-video-player" data-video-id="<?php echo(@$linkData[1]); ?>" data-video-thumbnail="hq">
  <div class="youtube-video-play">
    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 71.412 50" height="60px" xml:space="preserve"><style id="style3" type="text/css"></style><g id="g5" transform="scale(.58824)"><path id="path7" fill="rgba(0,0,0,0.8)" d="M118.9 13.3c-1.4-5.2-5.5-9.3-10.7-10.7C98.7 0 60.7 0 60.7 0s-38 0-47.5 2.5C8.1 3.9 3.9 8.1 2.5 13.3 0 22.8 0 42.5 0 42.5s0 19.8 2.5 29.2C3.9 76.9 8 81 13.2 82.4 22.8 85 60.7 85 60.7 85s38 0 47.5-2.5c5.2-1.4 9.3-5.5 10.7-10.7 2.5-9.5 2.5-29.2 2.5-29.2s.1-19.8-2.5-29.3z"/><path id="polygon9" fill="#fff" d="M80.2 42.5L48.6 24.3v36.4z"/></g></svg>
  </div>
</div>
  </div>
</section>
<script>( function(){
    let youtubePlayer = document.querySelectorAll(".youtube-video-player");

    for (let i = 0; i < youtubePlayer.length; i++) {
        let container = youtubePlayer[i];
        let thumbnailSource = "https://img.youtube.com/vi/"+ container.dataset.videoId +"/" + container.dataset.videoThumbnail + "default.jpg"; 

        let thumbnail = new Image();
        thumbnail.src = thumbnailSource;
        thumbnail.addEventListener("load", function() {
            container.appendChild(thumbnail);
        });

        container.addEventListener("click", function() {
            let iframe = document.createElement( "iframe" );

            iframe.setAttribute("frameborder", "0");
            iframe.setAttribute("allowfullscreen", "");
            iframe.setAttribute("allow", "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture");
            iframe.setAttribute("src", "https://www.youtube.com/embed/"+ this.dataset.videoId +"?rel=0&showinfo=0&autoplay=1");


            this.innerHTML = "";
            this.appendChild( iframe );
        });
    }
})();</script>
<?php endif; ?>