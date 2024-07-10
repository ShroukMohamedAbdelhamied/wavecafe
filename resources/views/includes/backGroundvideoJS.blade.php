  <!-- Background video -->
  <div class="tm-video-wrapper">
      <i id="tm-video-control-button" class="fas fa-pause"></i>
      <video autoplay muted loop id="tm-video">
          <source src="{{ asset ('assets/video/wave-cafe-video-bg.mp4') }}" type="video/mp4">
      </video>
  </div>

<script src="{{ asset ('assets/js/jquery-3.4.1.min.js') }}"></script>
<script>
    $(document).ready(function(){
        // Function to handle video size adjustment
        function setVideoSize() {
            const vidWidth = 1920;
            const vidHeight = 1080;
            const windowWidth = window.innerWidth;
            const windowHeight = window.innerHeight;
            const tempVidWidth = windowHeight * vidWidth / vidHeight;
            const tempVidHeight = windowWidth * vidHeight / vidWidth;
            const newVidWidth = tempVidWidth > windowWidth ? tempVidWidth : windowWidth;
            const newVidHeight = tempVidHeight > windowHeight ? tempVidHeight : windowHeight;
            const tmVideo = $('#tm-video');
            tmVideo.css('width', newVidWidth);
            tmVideo.css('height', newVidHeight);
        }

        // Function to toggle play/pause for video
        $('#tm-video-control-button').on('click', function(e) {
            const video = document.getElementById('tm-video');
            if (video.paused) {
                video.play();
                $(this).removeClass().addClass('fas fa-pause');
            } else {
                video.pause();
                $(this).removeClass().addClass('fas fa-play');
            }
        });

        // Initialization functions
        setVideoSize(); // Set initial video size
        let timeout;
        window.onresize = function(){
            clearTimeout(timeout);
            timeout = setTimeout(setVideoSize, 100);
        };
    });
</script>