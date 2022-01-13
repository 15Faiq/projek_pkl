<?php
include 'code crud/logo.php';
?>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #fff;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="logo/<?php echo $logo_sekolah; ?>" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy"> <?php echo $nama_sekolah; ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="dashboard">Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="input-siswa">Input Datel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="data-siswa" tabindex="-1" aria-disabled="true">Data Datel</a>
                </li>
                <a class="nav-link" href="input-siswa2">Input Hero</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="data-siswa2" tabindex="-1" aria-disabled="true">Data Hero</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary btn-sm rounded-pill mt-1" href="logout" tabindex="-1" aria-disabled="true"> Logout </a>
                </li>
            </ul>
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
        </div>
    </div>
</nav>
<br><br>