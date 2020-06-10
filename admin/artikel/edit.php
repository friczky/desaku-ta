<?php include ('../../koneksi.php') ; ?>
<?php include '../komponen/header.php'; ?>

<?php include '../komponen/navbar.php'; ?>

<?php include '../komponen/sidebar.php'; ?>


 <?php

        if($_POST){

          $id = $_GET['id'] ;
          
          $judul = $_POST['judul'];
          $kategori = $_POST['kategori'];
          $foto = $_FILES['foto']['name'];
          $isi = $_POST['isi'];
          $sql ="UPDATE berita SET judul='$judul',kategori='$kategori',foto='$foto',isi='$isi' where id='$id'";

           move_uploaded_file($_FILES['foto']['tmp_name'],'foto/'. $foto);
          if ($koneksi->query($sql) === TRUE){
            echo "<script> alert('Data Berhasil Di UPDATE'); window.location.href='../artikel'</script>";
          } else {
            echo "Gagal :" .$koneksi->error;
          }
          $koneksi->close();
        } else {
          $query = $koneksi->query ("SELECT * FROM berita WHERE id=".$_GET['id']);
          if ($query->num_rows > 0){
            $data = mysqli_fetch_object($query) ;
          }else{
            echo "Data tidak terdaftar" ;
            die();
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
            <li class="breadcrumb-item active">Artikel</li>
          </ul>
          <h1>Sunting Artikel</h1>
          <br>
            <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $data->id?>">
            <p>
              Judul Artikel :
            </p>
            <input type="text" name="judul" value="<?= $data->judul?>">
            <p>
              Kategori :
            </p>
            <input type="text" name="kategori" value="<?= $data->kategori?>">
            <p>
              Foto Thumbnail :
            </p>
             <input type="file" name="foto" value="<?= $data->foto ?>">
            <p><br>
              Isi Artikel :
            </p>
            <textarea id="summernote" name="isi" value=""><?= $data->isi?></textarea><br>

            <center><button class="btn-success" name="submit" type="submit">UPDATE</button>        <button class="btn-primary" name="reset" type="reset">Reset</>primarry<br></center> 
            </form>
        </div><br>
         <?php
   }
      mysqli_close($koneksi);
      ?>
      
    
    

<?php include '../komponen/footer.php'; ?>