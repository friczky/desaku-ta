<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
$koneksi = new mysqli ('localhost','root','','blog_pw');
 
// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$password =md5($_POST['password']);
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from admin where nama='$nama' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

 setcookie("nama","$nama", time() + 10);

if($cek > 0){
	$_SESSION['nama'] = $nama;
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>