      <p>
        <center>
          <form name="search" method="post" action="?">
            <div class="col-lg-7" style="padding-top: 50px;padding-bottom: 50px;">
              <div class="input-group">
                <input type="text" style="height: 50px;" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                  <button class="btn btn-secondary" style="cursor:pointer" type="button">Go</button>
                </span>
              </div>
            </div>
          </form>
        </center>       
      </p>

        <!-- Heading -->
        <div class="row" style="padding-bottom: 30px;">
            <div class="col-lg-12">
                <center>
                <h3 class="page-header">
                VIDEOS
                </h3>
                </center>
            </div>
        </div>


    <div class="row">

      <?php
      $dir = "videos/";
      if (is_dir($dir)){
        if ($dh = opendir($dir)){
          while (($file = readdir($dh)) !== false){
            if($file != '.' && $file != '..'){
            ?>

            <div class="col-sm-4" style="padding-bottom: 20px;">
              <div class="card">
                <div class="card-block">        
                  <div class="wrapper">
                    <video class="video" style="width: 100%" height="200px;">
                      <?php
                      echo "
                      <source src=\"". $dir . $file ."\" type=\"video/mp4\">
                      <source src=\"". $dir . $file ."\" type=\"video/ogg\">
                      <source src=\"". $dir . $file ."\" type=\"video/mkv\">
                      <source src=\"". $dir . $file ."\" type=\"video/3gpp\">
                      ";
                      ?>
                    </video>
                    <a href="play-<?php echo $file; ?>"><div class="playpause"></div></a>
                  </div>
                </div>
                <div class="card-footer">
                  <small class="text-muted"><?php echo $file; ?></small>
                </div>
              </div>
            </div>
            <?php
            }
          }
          closedir($dh);
        }
      }
      ?>
    </div>
  
