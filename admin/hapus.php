<?php include 'komponen/header.php'; ?>

<?php include 'komponen/navbar.php'; ?>

<?php include 'komponen/sidebar.php'; ?>
<?php

$id = $_GET['id'] ;


$query = "DELETE FROM artikel where id=('$id')" ;
$query .= "DELETE FROM artikel user id=('$id')" ;


$sql = $koneksi->query($query) ;

if($sql){
echo "
<script> alert('Data Berhasil Di Hapus'); window.location.href='artikel.php';</script>";
}else{
$query1 = "DELETE FROM admin where id_a=('$id_a')" ;
	$sql1 = $koneksi->query($query1) ;
echo "
<script> alert('Data Berhasil Di Hapus'); window.location.href='user.php';</script>";
}

?>
<?php include 'komponen/footer.php'; ?>
<?php

