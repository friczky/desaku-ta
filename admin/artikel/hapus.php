<?php include ('../../koneksi.php') ; ?>
<?php include '../komponen/header.php'; ?>

<?php include '../komponen/navbar.php'; ?>

<?php include '../komponen/sidebar.php'; ?>
<?php

$id = $_GET['id'] ;


$query = "DELETE FROM berita where id=('$id')" ;



$sql = $koneksi->query($query) ;

if($sql){
echo "
<script> alert('Data Berhasil Di Hapus'); window.location.href='../artikel';</script>";
}


?>
<?php include '../komponen/footer.php'; ?>
<?php

