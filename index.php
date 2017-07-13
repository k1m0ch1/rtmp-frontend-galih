<html>
<head>
<title> Frontend Aplikasi Livestreaming </title>
  <link href="video-js.css" rel="stylesheet" type="text/css">
  <script src="video.js"></script>
  <script>
    videojs.options.flash.swf = "video-js.swf";
  </script>
</head>
<body>
 <center>
   <video id="livestream" class="video-js vjs-default-skin vjs-big-play-
centered"
     controls autoplay preload="auto" width="600" height="300"
     data-setup='{"techorder" : ["flash"] }'>
      <source src="rtmp://localhost/live/stream" type="rtmp/flv">
   </video>
 </center>

 <center>Tekan tombol play di kiri atas untuk memutar video</center>

<script> var elem = document.getElementById("livestream");
if (elem.requestFullscreen) {
  elem.requestFullscreen();
} else if (elem.mozRequestFullScreen) {
  elem.mozRequestFullScreen();
} else if (elem.webkitRequestFullscreen) {
  elem.webkitRequestFullscreen();
}

</script>

</body>
</html>