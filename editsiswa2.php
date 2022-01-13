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
    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/bootstrap-datepicker.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <title>Edit Hero</title>
    <link rel="shortcut icon" href="logo/<?php echo $logo_sekolah; ?>" type="image/x-icon">
</head>

<body>
    <div id="none">
        <?php include 'navbar.php'; ?>
        <div class="container mt-5">
            <div class="card mt-5">
                <div class="card-body">
                    <?php
                    if (isset($_GET['id'])) {
                        $sqlSiswa = mysqli_query($connect, "SELECT * FROM data_siswa2 WHERE no_id='$_GET[id]'");
                        $ds = mysqli_fetch_array($sqlSiswa);
                    ?>
                        <form action="updatesiswa2.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col">
                                    <h5><span></span> Data Karyawan</h5>
                                    <center><img align="center" width="250px" src="foto-siswa1/<?= $ds['foto_siswa'] ?>" ?></center>
                                    <div class="form-group">
                                        <input type="hidden" name="id" class="form-control" placeholder="NPP" value="<?php echo $ds['no_id'] ?>" readonly>
                                        <div class="col">
                                    <h5><span></span> Tingkat</h5>
                                    <div class="form-group">
                                        <select type="text" name="kelas" class="form-control rounded-lg" required>
                                            
                                            <option value="Datel">Datel</option>
                                            <option value="Hero">Hero</option>
                                        </select>
                                    </div>

                                    
                                </div>
                                <div class="col">
                                    <h5><span></span> Lokasi</h5>  
                                    <div class="form-group">
                                        <select type="text" name="tingkat" class="form-control rounded-lg" required>

                                            <option value="Batu">Batu</option>
                                    <option value="Malang Metro">Malang Metro</option>
                                    <option value="Kepanjen">Kepanjen</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <h5><span></span> Nama</h5>
                                    <div class="form-group">
                                        <input type="text" name="alamat_wali" value="<?= $ds['alamat_wali'] ?>" class="form-control rounded-lg" placeholder="Alamat Lengkap Wali" required>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <h5><span></span>Cabang </h5>
                                    <div class="form-group">
                                        <input type="text" name="tgl_reg" value="<?= $ds['tgl_reg'] ?>" class="form-control rounded-lg" placeholder="No. Regristrasi" required>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <h5><span></span>Provisioning </h5>
                                    <div class="form-group">
                                        <input type="text" name="bb" value="<?= $ds['bb'] ?>" class="form-control rounded-lg" placeholder="Berat Badan" required>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <h5><span></span> Assurance</h5>
                                    <div class="form-group">
                                        <input type="text" name="tb" value="<?= $ds['tb'] ?>" class="form-control rounded-lg" placeholder="Tinggi Badan" required>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <h5><span></span> SF</h5>
                                    <div class="form-group">
                                        <input type="text" name="no_hp" value="<?= $ds['no_hp'] ?>" class="form-control rounded-lg" placeholder="No. HP Atlet" required>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <h5><span></span> Rata-rata sales/bulan</h5>
                                    <div class="form-group">
                                        <input type="text" name="ttl" value="<?= $ds['ttl'] ?>" class="form-control rounded-lg" placeholder="Tempat / Tanggal Lahir" required>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <h5><span></span>Rata-rata revenue/bulan </h5>
                                    <div class="form-group">
                                        <input type="text" name="no_hpwali" value="<?= $ds['no_hpwali'] ?>" class="form-control rounded-lg" placeholder="No. HP Wali" required>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <h5><span></span>LIS </h5>
                                    <div class="form-group">
                                        <input type="text" name="nama_wali" value="<?= $ds['nama_wali'] ?>" class="form-control rounded-lg" placeholder="Nama Wali" required>
                                        </div>
                                        </div>
                                        <div class="col">
                                    <h5><span></span> Pelanggan 2P</h5>
                                        <div class="form-group">
                                        <input type="text" name="nama_atlet" value="<?= $ds['nama_atlet'] ?>" class="form-control rounded-lg" placeholder="Nama Atlet" required>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <h5><span></span> Pelanggan 3P</h5>
                                        <div class="form-group">
                                        <input type="text" name="jenis_kelamin" value="<?= $ds['jenis_kelamin'] ?>" class="form-control rounded-lg" placeholder="jenis kelamin" required>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <h5><span></span> Alpro</h5>
                                        <div class="form-group">
                                        <input type="text" name="ket" value="<?= $ds['ket'] ?>" class="form-control rounded-lg" placeholder="ket" required>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <h5><span></span> Kompetitor</h5>
                                        <div class="form-group">
                                        <input type="text" name="ketw" value="<?= $ds['ketw'] ?>" class="form-control rounded-lg" placeholder="ketw" required>
                                    </div>
                                    </div>
                                    <div class="col">
                                    <h5><span></span> Foto </h5>
                                    <div class="form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="foto_siswa" id="foto_siswa" required>
                                            <label class="custom-file-label" for="foto_siswa"><input type="text" class="form-control rounded-lg" id="foto_siswa" style="color: black; position: absolute; margin-left : -12px ;margin-top : -7px;" for="foto_siswa" placeholder="Upload Foto Atlet"></label>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary" name="perbarui"><i class="fa fa-edit" aria-hidden="true"></i>&nbsp;Perbaruhi</button>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <br><br>
        </div>
    </div>
    <script src="js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script defer src="fontawesome/js/all.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <?php include 'code crud/add-siswa2.php'; ?>
    <?php if ($_SESSION['stat_login'] != true) {
        $pesan = "Maaf Anda Belom Login";
        $status = "error";
        $link_back = "index";
    ?>
        <script>
            /* Sweet Alert Belom Login */
            var x = document.getElementById("none");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
            swal({
                title: "Maaf anda belom login !",
                text: "Silahkan login terlebih dahulu !",
                type: "warning"
            }).then(okay => {
                if (okay) {
                    window.location.href = "index";
                }
            });
        </script>
    <?php unset($_SESSION['stat_login']);
    } ?>
</body>

</html>
<script type="text/javascript" language="javascript">
    $(document).ready(function() {
        $('#foto_siswa').change(function(e) {
            var foto_siswa = e.target.files[0].name;
            $('#foto_siswa').val(foto_siswa);

        });
    });
    $(function() {
        $("#tgl_lahir").datepicker({
            format: 'dd/m/yyyy',
            autoclose: true,
            todayHighlight: true,
        });
    });
</script>