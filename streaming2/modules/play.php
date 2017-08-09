<!--<script src="js/videosub.js"></script>-->
<div class="row" style="padding-top: 20px;">
      <div class="col-12 col-md-3 push-md-9 bd-sidebar">
      	
        <div class="card">
        <div class="card-block">
          <form class="form-inline my-2 my-lg-0">
            <input type="text" class="form-control" style="border-radius: 0px;width: 74%;" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-secondary" style="cursor:pointer" type="button">Go</button>
            </span>
          </form>
        </div>
        </div>

        <br />
        <div class="card">
        <div class="card-header">
          Video lainnya
        </div>


  			<div class="card-block">
    			
          <?php
          $dir = "videos/";
          if (is_dir($dir)){
            if ($dh = opendir($dir)){
              while (($file = readdir($dh)) !== false){
                if($file != '.' && $file != '..'){
                  if($file !=$_GET['video']){
                  ?>
    			          <a href="play-<?php echo $file; ?>">
                      <div class="d-flex w-100 justify-content-between">
            	          <?php echo $file; ?>
                      </div>
                    </a>
                    <hr />
                  <?php
                  }
                }
              }
              closedir($dh);
            }
          }
          ?>

  			</div>
		</div>
		<br />
		<div class="card card-outline-secondary mb-3 text-center">
  			<div class="card-block">
    			<blockquote class="card-blockquote">
      				<p>Aku memang pejalan kaki yang lambat tetapi aku tidak pernah melangkah mundur.</p>
    			</blockquote>
  			</div>
		</div>

      </div>
      
      <div class="col-12 col-md-9 pull-md-3 bd-content">
      	<ol class="breadcrumb">
  			 <li class="breadcrumb-item active text-primary">Sementar diputar: <b><?php echo $_GET['video']; ?></b></li>
	   	  </ol>

        <!--
        <div style="text-align:center"> 
        <button onclick="playPause()">Play/Pause</button> 
        <button onclick="makeBig()">Big</button>
        <button onclick="makeSmall()">Small</button>
        <button onclick="makeNormal()">Normal</button>
        <br><br>
        -->
        <?php
        //potong karakter
        $sub = substr($_GET['video'], 0, -4);
        ?>
        <video oncanplay="$('.video').click(function(){this.paused?this.play():this.pause();});" class="video" style="width: 100%;height: 500px;background-color: #000000;" autoplay controls controlsList="nodownload">
          <source src="videos/<?php echo $_GET['video']; ?>" type="video/mp4">
          <source src="videos/<?php echo $_GET['video']; ?>" type="video/ogg">
          <source src="videos/<?php echo $_GET['video']; ?>" type="video/mkv">
          <source src="videos/<?php echo $_GET['video']; ?>" type="video/mov">
          <source src="videos/<?php echo $_GET['video']; ?>" type="video/avi">
	  <source src="videos/<?php echo $_GET['video']; ?>" type="video/3gpp">
          <track label="Indonesia" kind="subtitles" srclang="id" src="subtitle/<?php echo $sub; ?>.vtt" default>
          <!--
          <track src="subtitle/<?php //echo $sub; ?>.srt" kind="subtitles" srclang="en" label="Indonesia" default>
          -->

          Your browser does not support HTML5 video.
        </video>
      </div> 

      <!--
      <script> 
      var myVideo = document.getElementById("video1"); 

      function playPause() { 
          if (myVideo.paused) 
              myVideo.play(); 
          else 
              myVideo.pause(); 
      } 

      function makeBig() { 
          myVideo.width = 560; 
      } 

      function makeSmall() { 
          myVideo.width = 320; 
      } 

      function makeNormal() { 
          myVideo.width = 420; 
      } 
      </script>
      -->
      </div>
</div>
