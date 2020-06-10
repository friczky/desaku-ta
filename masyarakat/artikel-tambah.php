<?php include 'komponen/header.php'; ?>

<?php include 'komponen/navbar.php'; ?>

<?php include 'komponen/sidebar.php'; ?>


       <?php

      
if($_POST){
  try{
    $penulis = $_SESSION['username'];
    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $foto = $_FILES['foto']['name'];
    $isi = $_POST['isi'];

        $sql ="INSERT INTO berita (penulis,judul,kategori,foto,isi) VALUES('$penulis','$judul','$kategori','$foto','$isi')" ;

   move_uploaded_file($_FILES["foto"]["tmp_name"], "$base_foto" . $_FILES["foto"]["name"]);
    if(!$koneksi->query($sql)) {
      echo $koneksi->error; 
      die();
    } 
  } catch (Exception $e) {
    echo $e;
    die();
  }
  echo" <script> alert('Data Berhasil DiTambah'); window.location.href='artikel.php'; </script> ";
}
?>
      <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Artikellll</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active">Artikel       </li>
          </ul>
          <h1>Tambah Artikel</h1>
          <br>
            <form action="" method="post" enctype="multipart/form-data">
            <p>
              Judul Artikel :
            </p>
            <input type="text" name="judul">
            <p>
              Kategori :
            </p>
            <input type="text" name="kategori">
            <p>
              Foto Thumbnail :
            </p>
             <input type="file" name="foto">
            <p><br>
              Isi Artikel :
            </p>
            <textarea id="summernote" name="isi"></textarea><br>

            <center><button class="btn-success" name="submit" type="submit">Tambah</button>        <button class="btn-primary" name="reset" type="reset">Reset<br></center>
            </form>
        </div><br>
      
    

<?php include 'komponen/footer.php'; ?>