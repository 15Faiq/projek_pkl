<?php
include 'code crud/config.php';

$cekfoto = $_FILES["foto_siswa"]["name"];

if ($cekfoto != "") {
    $nama_file = $_FILES['foto_siswa']['name'];
    $tmp_file = $_FILES['foto_siswa']['tmp_name'];
    $path = "foto-siswa1/" . $nama_file; // Alamat Penyimapan foto siswa
    move_uploaded_file($tmp_file, $path);
    $upedit = mysqli_query($connect, "UPDATE data_siswa2 SET 
            nama_atlet = '$_POST[nama_atlet]',
            tgl_reg = '$_POST[tgl_reg]',
            ttl = '$_POST[ttl]',
            bb = '$_POST[bb]',
            tb = '$_POST[tb]',
            no_hp = '$_POST[no_hp]',
            tingkat = '$_POST[tingkat]',
            kelas = '$_POST[kelas]',
            nama_wali = '$_POST[nama_wali]',
            no_hpwali = '$_POST[no_hpwali]',
            alamat_wali = '$_POST[alamat_wali]',
            ket = '$_POST[ket]',
            ketw = '$_POST[ketw]'
            foto_siswa = '$nama_file'
            WHERE no_id = '$_POST[id]' ");
    echo "<script>alert('Data Berhasil Di Rubah');document.location='data-siswa2.php?id=$_POST[id]';</script>";
?>
    <script>
        swal({
            title: "Edit Berhasil",
            text: "",
            type: "success"
        }).then(okay => {
            if (okay) {
                window.location.href = "data-siswa2";
            }
        });
    </script>
<?php
} else {
    $upedit = mysqli_query($connect, "UPDATE data_siswa2 SET 
            nama_atlet = '$_POST[nama_atlet]',
            tgl_reg = '$_POST[tgl_reg]',
            ttl = '$_POST[ttl]',
            bb = '$_POST[bb]',
            tb = '$_POST[tb]',
            no_hp = '$_POST[no_hp]',
            tingkat = '$_POST[tingkat]',
            kelas = '$_POST[kelas]',
            nama_wali = '$_POST[nama_wali]',
            no_hpwali = '$_POST[no_hpwali]',
            alamat_wali = '$_POST[alamat_wali]',
            ket = '$_POST[ket]'
            ketw = '$_POST[ketw]'
            WHERE no_id = '$_POST[id]' ");
    echo "<script>alert('Data Berhasil Di Rubah');document.location='data-siswa2.php?id=$_POST[id]';</script>";
}
