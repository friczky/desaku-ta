<?php include 'komponen/header.php'; ?>

<?php include 'komponen/navbar.php'; ?>

<?php include 'komponen/sidebar.php'; ?>
<?php

$id_a = $_GET['id_a'] ;

$query = "DELETE FROM admin where id_a=('$id_a')" ;

$sql = $koneksi->query($query) ;
if($sql){
echo "
<script> alert('Data Berhasil Di Hapus'); window.location.href='user.php';</script>";
}
?>
<?php include 'komponen/footer.php'; ?>
<?php

