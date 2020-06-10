<?php include 'komponen/header.php'; ?>

<?php include 'komponen/navbar.php'; ?>

<?php include 'komponen/sidebar.php'; ?>

      <?php

      

if($_POST){
  try{
  	$pelapor = $_POST['pelapor'];
    $judul = $_POST['judul'];
    $foto = $_FILES['foto']['name'];
    $isi = $_POST['isi'];
        $sql ="INSERT INTO elapor (pelapor,judul,foto,isi) VALUES('$pelapor','$judul','$foto','$isi')" ;
      move_uploaded_file($_FILES['foto']['tmp_name'],'foto/'. $foto);
    if(!$koneksi->query($sql)) {
      echo $koneksi->error; 
      die();
    } 
  } catch (Exception $e) {
    echo $e;
    die();
  }
  echo"
  <script> alert('Data Berhasil DiTambah'); window.location.href='laporan.php';</script>";
}
?>
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Artikel</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Artikel       </li>
          </ul>
          <h1>Tambah Laporan</h1>
          <br>
            <form action="" method="post" enctype="multipart/form-data">
            <p>
              Judul Laporan :
            </p>
            <input type="hidden" name="pelapor"  value="<?php echo $_SESSION['username']; ?>">
            <input type="text" name="judul">
      
         
            <p>
              Foto Thumbnail :
            </p>
             <input type="file" name="foto">
            <p><br>
              Isi Laporan :
            </p>
            <textarea id="summernote" name="isi"></textarea><br>

            <center><button class="btn-success" name="submit" type="submit">Tambah</button>        <button class="btn-primary" name="reset" type="reset">Reset</primarry<br></center>
            </form>
        </div><br>
      
    

<?php include 'komponen/footer.php'; ?>