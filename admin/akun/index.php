<?php include ('../../koneksi.php') ; ?>
<?php include '../komponen/header.php'; ?>

<?php include '../komponen/navbar.php'; ?>

<?php include '../komponen/sidebar.php'; ?>


 <?php

        if($_POST){

          $id = $_GET['key'];
          $username1 = $_SESSION['username'];
          $nama = $_POST['nama'];
          $foto = $_FILES['foto']['name'];
          $username = $_POST['username'];
          $password = $_POST['password'];
          $sql ="UPDATE user SET nama='$nama',foto='$foto',username='$username',password='$password'  where id='$id'";
          move_uploaded_file($_FILES["foto"]["tmp_name"], "$base_foto" . $_FILES["foto"]["name"]);
           // move_uploaded_file($_FILES['foto']['tmp_name'],'../foto/'. $foto);
          if ($koneksi->query($sql) === TRUE){
            echo "<script> alert('Akun telah di ubah'); window.location.href='index.php?key=$id'</script>";
          } else {
            echo "Gagal :" .$koneksi->error;
          }
          $koneksi->close();
        } else {

          $id = $_GET['key'];
          $query = $koneksi->query ("SELECT * FROM user WHERE id='$id' ");
          if ($query){
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
            <h2 class="h5 no-margin-bottom">Akun</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Akun</li>
          </ul>
          <h1>Akun</h1>
          <br>
            <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $data->id?>">
            <p>
              Nama:
            </p>
            <input type="text" name="nama" value="<?= $data->nama?>">
            <p><br>
              Foto Thumbnail :
            </p>
             <input type="file" name="foto" value="<?= $data->foto?>">
              <p><br>
              Username:
            </p>
            <input type="text" name="username" value="<?= $data->username?>">
            <p><br>
              Password:
            </p>
            <p>
            <input type="text" name="password" value="<?= $data->password?>">
          </p>
            <center><button class="btn-success" name="submit" type="submit">UPDATE</button>        <button class="btn-primary" name="reset" type="reset">Reset<br></center> 
            </form>
        </div><br>
         <?php
   }

      mysqli_close($koneksi);
      ?>
      
    

<?php include '../komponen/footer.php'; ?>