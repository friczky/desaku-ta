<?php include ('../../../koneksi.php') ; ?>
<?php include '../../komponen/header.php'; ?>

<?php include '../../komponen/navbar.php'; ?>

<?php include '../../komponen/sidebar.php'; ?>


 <?php

      

if($_POST){
  try{

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tgl = $_POST['tgl'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $rtrw = $_POST['rtrw'];
    $kel = $_POST['kel'];
    $kec = $_POST['kec'];
    $kota = $_POST['kota'];
    $prov = $_POST['prof'];
    $izin = $_POST['izin'];
    $jenis = $_POST['jenis'];
    $foto = $_FILES['foto']['name'];
    $username = $_SESSION['username'];
    $link = $_POST['link'];
  
        $sql ="INSERT INTO p_surat (nik,nama,tgl,jk,alamat,rtrw,kel,kec,kota,prov,izin,jenis,foto,username,link) VALUES('$nik','$nama','$tgl','$jk','$alamat','$rtrw','$kel','$kec','$kota','$prov','$izin','$jenis','$foto','$username','$link')" ;
      move_uploaded_file($_FILES["foto"]["tmp_name"], "$base_foto" . $_FILES["foto"]["name"]);
    if(!$koneksi->query($sql)) {
      echo $koneksi->error; 
      die();
    } 
  } catch (Exception $e) {
    echo $e;
    die();
  }
  echo"
  <script> alert('Data Berhasil DiTambah'); window.location.href='permohonan_surat.php';</script>";
}
?>
 <?php

        if($_POST){

          $id = $_GET['id'] ;
          
          $judul = $_POST['judul'];
          $kategori = $_POST['kategori'];
          $foto = $_FILES['foto']['name'];
          $isi = $_POST['isi'];
          $sql ="UPDATE artikel SET judul='$judul',kategori='$kategori',foto='$foto',isi='$isi' where id='$id'";
           move_uploaded_file($_FILES['foto']['tmp_name'],'foto/'. $foto);
          if ($koneksi->query($sql) === TRUE){
            echo "<script> alert('Data Berhasil Di UPDATE'); window.location.href='artikel.php'</script>";
          } else {
            echo "Gagal :" .$koneksi->error;
          }
          $koneksi->close();
        } else {
          $query = $koneksi->query ("SELECT * FROM jenis_surat WHERE id=".$_GET['id']);
          if ($query->num_rows > 0){
            $obj = mysqli_fetch_object($query) ;
          }else{
            echo "Data tidak terdaftar" ;
            die();
          }
        ?>

<div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom"><?= $obj->jenis?></h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Tambah Surat       </li>
          </ul>
          <h1>FORM PEMBUATAN SURAT <?= $obj->jenis?></h1>

<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputtext1">NIK</label>
    <input type="text" class="form-control" id="exampleInputtext1" aria-describedby="textHelp" placeholder="" name="nik">
    <input type="hidden" name="jenis" value="<?= $obj->jenis?>">
    <input type="hidden" name="link" value="<?= $obj->link?>">
    <input type="hidden" name="izin" value="1">

    
  </div>
  <div class="form-group">
    <label for="exampleInputtext1">NAMA LENGKAP</label>
    <input type="text" class="form-control" required="" id="exampleInputtext1" aria-describedby="textHelp" placeholder="" name="nama">
   
  </div>
<div class="form-group">
    <label for="exampleInputtext1">TEMPAT /TGL LAHIR</label>
    <input type="text" class="form-control" required="" id="exampleInputtext1" aria-describedby="textHelp" placeholder="" name="tgl">
    
  </div>
  <div class="form-group">
    <label for="exampleInputtext1">JENIS KELAMIN</label>
    <input type="text" class="form-control" required="" id="exampleInputtext1" aria-describedby="textHelp" placeholder="" name="jk">
   
  </div>
<div class="form-group">
    <label for="exampleInputtext1">ALAMAT</label>
    <textarea type="text" class="form-control" required="" id="exampleInputtext1" aria-describedby="textHelp" placeholder="" name="alamat"></textarea>
   
  </div>
  <div class="form-group">
    <label for="exampleInputtext1">RT/RW</label>
    <input type="text" class="form-control" required="" id="exampleInputtext1" aria-describedby="textHelp" placeholder="" name="rtrw">
   
  </div>
  <div class="form-group">
    <label for="exampleInputtext1">KELURAHAN</label>
    <input type="text" class="form-control" required="" id="exampleInputtext1" aria-describedby="textHelp" placeholder="" name="kel"> 
   
  </div>
  <div class="form-group">
    <label for="exampleInputtext1">KECAMATAN</label>
    <input type="text" class="form-control" required="" id="exampleInputtext1" aria-describedby="textHelp" placeholder="" name="kec">
   
  </div>
  <div class="form-group">
    <label for="exampleInputtext1">KOTA</label>
    <input type="text" class="form-control" required="" id="exampleInputtext1" aria-describedby="textHelp" placeholder="" name="kota">
   
  </div>
  <div class="form-group">
    <label for="exampleInputtext1">PROFINSI</label>
    <input type="text" class="form-control" required="" id="exampleInputtext1" aria-describedby="textHelp" placeholder="" name="prof">
   
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">PAS FOTO</label>
    <input type="file" class="form-control-file" required="" id="exampleFormControlFile1" name="foto">
  </div>
  


  <div class="form-check">
  
  </div>
  <button type="submit" class="btn btn-primary">Kirim Data</button>
</form>
<?php
}?>

</div>


<?php include '../../komponen/footer.php'; ?>