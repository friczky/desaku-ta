 <?php

        if($_POST){

          $id = $_GET['id'] ;
          
          $judul = $_POST['judul'];
          $foto = $_FILES['foto']['name'];
          $isi = $_POST['isi'];
          $sql ="UPDATE elapor_info SET judul='$judul',foto='$foto',isi='$isi' where id='$id'";
          move_uploaded_file($_FILES["foto"]["tmp_name"], "$base_foto" . $_FILES["foto"]["name"]);
           // move_uploaded_file($_FILES['foto']['tmp_name'],'../foto/'. $foto);
          if ($koneksi->query($sql) === TRUE){
            echo "<script> alert('Elapor telah di ubah'); window.location.href='index.php?id=1'</script>";
          } else {
            echo "Gagal :" .$koneksi->error;
          }
          $koneksi->close();
        } else {
          $query = $koneksi->query ("SELECT * FROM elapor_info WHERE id=".$_GET['id']);
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
            <h2 class="h5 no-margin-bottom">Elapor</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Elapor</li>
          </ul>
          <h1>Sunting Elapor</h1>
          <br>
            <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $data->id?>">
            <p>
              Judul :
            </p>
            <input type="text" name="judul" value="<?= $data->judul?>">
            <p>
              Foto Thumbnail :
            </p>
             <input type="file" name="foto" value="<?= $data->foto?>">
            <p><br>
              Isi :
            </p>
            <textarea id="summernote" name="isi"><?= $data->isi?> </textarea><br>

            <center><button class="btn-success" name="submit" type="submit">UPDATE</button>        <button class="btn-primary" name="reset" type="reset">Reset</primarry<br></center> 
            </form>
        </div><br>
         <?php
   }

      mysqli_close($koneksi);
      ?>
      
    