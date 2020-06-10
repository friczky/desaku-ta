<?php include ('../../../koneksi.php') ; ?>
<?php include '../../komponen/header.php'; ?>

<?php include '../../komponen/navbar.php'; ?>

<?php include '../../komponen/sidebar.php'; ?>

<?php include '../../komponen/user.php'; ?>

<?php

$id = $_GET['id'] ;

$query = "DELETE FROM user and masyarakat WHERE id=('$id')" ;


$sql = $koneksi->query($query) ;

if($sql){
echo "
<script> alert('Data Berhasil Di Hapus'); window.location.href='index.php';</script>";
}else{
echo "
<script> alert('Data Gagal DI hapus'); window.location.href='index.php';</script>";
}

?>
<?php include 'komponen/footer.php'; ?>
<?php

