 <?php include 'code crud/logo.php';?>
 <?php
  error_reporting(0);
  session_start();

    include 'code crud/config.php';
	if (mysqli_connect_errno()) 
	{ 
		echo "Database connection failed."; 
	} 
    $Total_karyawan = "SELECT * FROM data_siswa WHERE no_id " ; 
    $Total_Datel = "SELECT * FROM data_siswa WHERE kelas = 'datel' ";
    $Total_Poomsae = "SELECT * FROM data_siswa2 WHERE kelas = 'hero' ";
    // Sum Siswa
	$result1 = mysqli_query($connect, $Total_karyawan); 
	if ($result1) 
	{ 
		$row1 = mysqli_num_rows($result1); 
		if ($row1) 
			{ 
			} 
		mysqli_free_result($result1); 
    } 
    // Jumlah Laki Laki
	$result2 = mysqli_query($connect, $Total_Datel); 
	if ($result2) 
	{ 
		$row2 = mysqli_num_rows($result2); 
		if ($row2) 
			{ 
			} 
		mysqli_free_result($result2); 
    } 
    $result3 = mysqli_query($connect, $Total_Poomsae); 
	if ($result3) 
	{ 
		$row3 = mysqli_num_rows($result3); 
		if ($row3) 
			{ 	 
			} 
		mysqli_free_result($result3); 
    } 
	// Connection close 
    mysqli_close($connect); 

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <title>Dashboard</title>
    <link rel="shortcut icon" href="logo/<?php echo $logo_sekolah; ?>" type="image/x-icon">
  </head>
  <body>
    <div id="none">
    <?php include 'navbar.php';?>
    <br><br>
        <div class="container">
            <div class="row mt-5">
               
                <div class="col">
                    <div class="card total-laki">
                        <div class="card-body">
                        <center> <h5>Datel</h5> </center>
                        <center>  <h1><?php echo $row2; ?></h1></center>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card total-perempuan">
                        <div class="card-body">
                        <center> <h5>Hero</h5> </center>
                        <center>  <h1><?php echo $row3; ?></h1></center>
                        </div>
                    </div>
                </div>
            </div>
            <div id="carouselExampleSlidesOnly" class="carousel slide mt-2" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <center><img src="foto-sekolah/tt.jpg" class="d-block w-100" alt="..."></center>
                </div>
            </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/sweetalert2.min.js"></script>
    <?php if($_SESSION['stat_login'] != true){
    $pesan = "Maaf Anda Belom Login";
    $status = "error";
    $link_back = "index";
    ?>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5f7ec3124704467e89f5a670/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    <script>
    /* Sweet Alert Belom Login */
    var x = document.getElementById("none");
    if (x.style.display === "none") {
    x.style.display = "block";
    } else {
    x.style.display = "none";
    }
    swal({ title: "Maaf anda belom login !",
        text: "Silahkan login terlebih dahulu !",
    type: "warning"}).then(okay => {
   if (okay) {
    window.location.href = "index";
    }
    });
    </script>
    <?php  unset($_SESSION['stat_login']); } ?>
  </body>
</html>
