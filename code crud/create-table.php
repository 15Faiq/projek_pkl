<?php
include 'config-database.php';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/* =============== Buat Table Data Siswa ================== */
$sql = "CREATE TABLE data_siswa (
  `no_id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `nama_atlet` varchar(150) NOT NULL,
  `tgl_reg` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `bb` varchar(50) NOT NULL,
  `tb` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `tingkat` varchar(100) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL,
  )";
  $sql = "CREATE TABLE data_siswa2 (
    `no_id` int(11) AUTO_INCREMENT PRIMARY KEY,
    `nama_atlet` varchar(150) NOT NULL,
    `tgl_reg` varchar(100) NOT NULL,
    `ttl` varchar(100) NOT NULL,
    `jenis_kelamin` varchar(20) NOT NULL,
    `bb` varchar(50) NOT NULL,
    `tb` varchar(50) NOT NULL,
    `no_hp` varchar(50) NOT NULL,
    `tingkat` varchar(100) NOT NULL,
    `kelas` varchar(50) NOT NULL,
    `ket` varchar(50) NOT NULL,
    )";

if ($conn->query($sql) === TRUE) {
  // Jika Berhasil Lanjut
} else {
  // Table data siswa sudah ada ..
}
/* ================= Akhir Table Data Sisiwa ==================== */


/*============ Buat Table Profil Sekolah ======================== */
$sql1 = "CREATE TABLE profil_sekolah (
  `no_id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `nama_sekolah` varchar(100) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `no_tlp` varchar(50) NOT NULL,
  `kepsek` varchar(100) NOT NULL,
  `nis_kepsek` varchar(100) NOT NULL,
  `wakil_kepsek` varchar(100) NOT NULL,
  `nis_wakil` varchar(100) NOT NULL,
  `logo_sekolah` varchar(100) NOT NULL
  )";

if ($conn->query($sql1) === TRUE) {
  // Buat profil berhasil lanjut ..
  
} else {
  // table profil sudah ada ..
}

/* Isi table profil sekolah agar tidak terjadi error pas pertama instal di pc baru */
$sql1 = "INSERT INTO `profil_sekolah` (`no_id`, `nama_sekolah`, `alamat_sekolah`, `no_tlp`, `kepsek`, `nis_kepsek`, `wakil_kepsek`, `nis_wakil`, `logo_sekolah`) VALUES
('', 'SMK Pasundan 1', 'Jl. Arief Rahman Hakim Cianjur RT/RW. 02/04 Desa/Kel. Sabandar Kec. Karang Tengah Kab. Cianjur Kode Pos. 43281', '0263-264340 / 0263-271787', 'Dadang Handaru', '20203729', 'Zenal Jaelani', '20203729', 'adi.png')";

if ($conn->query($sql1) === TRUE) {
	// Insert username berhasil
} else {
  // Jangan lakukan insert kembali karna sudah ada
}
/*============ Akhir Table Profil Sekolah ======================== */

/* =============== Buat table user login ========================== */
$sql2 = "CREATE TABLE user_login (
  `no_id` int(11) AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
  )";

if ($conn->query($sql2) === TRUE) {
  // Table user berhasil di buat
  
} else {
  // Table user sudah ada ..
}

$pss = "admin"; // password default
$pss2 = md5($pss); // buat pasword jadi karakter sembunyi

$sql2 = "INSERT INTO user_login (no_id, username, password)
VALUES ('', 'admin', '$pss2')";
if ($conn->query($sql2) === TRUE) {
  // Insert username berhasil
  echo '<script>window.location="../index"</script>'; /* Jika Semua Berhasil Maka Arahkan Ke halaman Index */
} else {
  // Jangan lakukan insert kembali karna sudah ada
}
/* =============== Akhir table user login ========================== */

$conn->close(); /* Tutup query koneksi */
?>