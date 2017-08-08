<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Ate streaming</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <!--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    -->
    <script src="js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    
    <style type="text/css">
      .borderbottom{
        border-width: 1px;
        border-bottom-width:1px;
        border-bottom-color:#d2d2d2;
        border-bottom-style: solid;
      }
    </style>
    <style type="text/css">
                        .video {
    width: 100%;
    border: 1px solid black;
}
.wrapper{
    display:table;
    width:auto;
    position:relative;
    width:100%;
}
.playpause {
    background-image:url(img/play.png);
    background-repeat:no-repeat;
    width:20%;
    position:absolute;
    left:0%;
    right:0%;
    top:0%;
    bottom:0%;
    margin:auto;
    background-size:contain;
    background-position: center;
}
</style>

  </head>
  <body>

    <!-- Navigation -->

<!--
<nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top">
<nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top <?php if($_GET['p']!=='home'){ echo 'borderbottom'; } ?>" style="background-color:#ffffff;">
-->
<nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top" style="background-color:#ffffff;">
  <div class="container">
      
            <div class="navbar-header">
                <a class="navbar-brand" href=".">
                  <span class="glyphicon glyphicon-fire btn btn-primary">
                  ATE STREAMING
                  </span> 
                </a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#collapsingNavbar" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            

        <div class="collapse navbar-collapse" id="collapsingNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link page-scroll pr-3" href=".">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll pr-3" href=".">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll pr-3" href=".">All movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link page-scroll pr-3" href=".">Contact</a>
                </li>
            </ul>
            
            
            <ul class="navbar-nav ml-auto">
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#login" style="cursor: pointer;">Masuk</button>
            </ul>

            
        </div>
    </div>
</nav>


  <div class="jumbotron feature" style="background-color: #ffffff;">
  <!--
  <div class="jumbotron feature" style="background-image: url('http://fiori.li/wp-content/uploads/2016/06/green-background-images-8.jpg');">
  -->

    <!-- Content -->
    <!--<div class="container-fluid" padding-top="100%;">-->
    <div class="container">

      <?php
      /* ================= content tes 1 ======================= */
      /* 
      $mods_dir = 'modules';
      if(!empty($_GET['p'])){
        $pages = scandir($mods_dir, 0);
        unset($pages[0], $pages[1]);
 
        $p = $_GET['p'];
        if(in_array($p.'.php', $pages)){
          include($mods_dir.'/'.$p.'.php');
        } else {
          echo '<center>Halaman tidak ditemukan! :(</center>';
        }
      } else {
        include($mods_dir.'/home.php');
      }
      */
      $mods_dir = 'modules';
      if(!empty($_GET['p'])){
        $pages = scandir($mods_dir, 0);
        unset($pages[0], $pages[1]);
 
        $p = $_GET['p'];
        if(in_array($p.'.php', $pages)){
          include($mods_dir.'/'.$p.'.php');
        } else {
          echo '<center>Halaman tidak ditemukan! :(</center>';
        }
      } else {
        include($mods_dir.'/home.php');
      }
      ?>

    </div>
    <!-- /.content -->
  
  <footer style="background-color: #eee; margin-top: 100px;padding-top: 20px;">

    <div class="footer-blurb">      
        <div class="small-print" style="background-color: #2d2d2d;color: #ffffff;">
          <div class="container">
            <p><a href="syarat">Syarat &amp; ketentuan</a> | <a href="privasi">Kebijakan privasi</a> | <a href="hubungi">Hubungi kami</a> | <a href="team">Team kami</a></p>
            <p>Copyright &copy; course.ategano.com <?php echo date('Y'); ?> </p>
          </div>
        </div>
  </footer>


  <!-- modal login -->
  <div id="login" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalPopoversLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalPopoversLabel">Login</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          
        <form> 
        <div class="modal-body">
        
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" required aria-describedby="emailHelp" placeholder="Enter username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" required placeholder="Enter password">
          </div>
        
        </div>
  
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal" style="cursor: pointer;">Batal</button>
          <button type="submit" class="btn btn-primary" style="cursor: pointer;">Log In</button>
        </div>
        </form>

      </div>
    </div>
  </div>

    <!-- autofocuss di form modal -->
    <script>
      $('#login').on('shown.bs.modal', function () {
        $('#username').focus();
      })
    </script>
    <!-- end autofocuss di form modal -->

    <script src="js/jquery-1.10.2.min.js"></script>
    <!--<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>-->
    <script src="../assets/js/bootswatch.js"></script>
  </body>
</html>









