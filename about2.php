<?php 
  error_reporting(0);
  session_start();
  include 'code crud/logo.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <script src="js/sweetalert2.min.js"></script>
    <title>Profil</title>
    <link rel="shortcut icon" href="logo/<?php echo $logo_sekolah; ?>" type="image/x-icon">
  </head>
  <body>
  <div id="none">
    <?php include 'navbar.php';?>
      <div class="container">
        <?php include 'code crud/profil-code.php';?>
      <div class="card mt-3" style="border-radius: 20px; border-color : white;">
        <div class="card-body">
          <div class="row img-login">
            <div class="col">
            <img src="images/1.png" alt="" class="float-center">
            <img src="images/2.png" alt="" class="float-center">
            </div>
              
             </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <script src="js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script defer src="fontawesome/js/all.js"></script>
  </body>
</html>