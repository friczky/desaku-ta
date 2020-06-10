<?php 
$koneksi = mysqli_connect("localhost","root","dinaislamia","pbd");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
$base_url='http://localhost/htdocs/KULIAH/PBD/TUGAS_AKHIR/'; // lokasi web

$base_foto='/opt/lampp/htdocs/KULIAH/PBD/TUGAS_AKHIR/admin/foto/'; // lokasi web

$base_foto='/opt/lampp/htdocs/KULIAH/PBD/TUGAS_AKHIR/asset/file/'; // lokasi file
?>