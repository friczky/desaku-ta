
<?php
	include '../../../koneksi.php';

$id = $_GET['id'] ;


$query = "DELETE FROM p_surat where id=('$id')" ;



$sql = $koneksi->query($query) ;

if($sql){
echo "
<script> alert('Data Berhasil Di Hapus'); window.location.href='../';</script>";
}else{
echo "
<script> alert('Data Berhasil Di Hapus'); window.location.href='user.php';</script>";
}

?>



