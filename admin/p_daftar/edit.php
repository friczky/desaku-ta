<?php include ('../../koneksi.php') ; ?>
<?php include '../komponen/header.php'; ?>

<?php include '../komponen/navbar.php'; ?>

<?php include '../komponen/sidebar.php'; ?>


 <?php

        if($_GET){

          $id = $_GET['id'] ;
          
          $status = $_POST['status'];
  
            $sql ="UPDATE user SET status='$statu' where id='$id'";

           move_uploaded_file($_FILES['foto']['tmp_name'],'foto/'. $foto);
          if ($koneksi->query($sql) === TRUE){
            echo "<script> alert('Data Berhasil Di UPDATE'); window.location.href='artikel.php'</script>";
          } else {
            echo "Gagal :" .$koneksi->error;
          }
          $koneksi->close();
        } else {
          $query = $koneksi->query ("SELECT * FROM user WHERE id=".$_GET['id']);
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
            <h2 class="h5 no-margin-bottom">User</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Artikel</li>
          </ul><center>
          <h1>EDIT USER</h1>
          <br>
            <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $data->id?>">
              <input type="hidden" name="status" value="0">
            <p>
              Nama :
            </p>
            <input type="text" name="judul" value="<?= $data->nama?>">
            <p>
              Username :
            </p>
            <input type="text" name="kategori" value="<?= $data->username?>">

            <p>
              Password :
            </p>
            <input type="text" name="kategori" value="<?= $data->password?>">
            
            <br><br>
            <center>
              <button class="btn-success" name="submit" type="submit">APPROV</button>       
               <button class="btn-primary" name="reset" type="reset">HAPUS<br></center> 
            </form></center>
        </div><br>
         <?php
   }
      mysqli_close($koneksi);
      ?>
      
    
    

<?php include '../komponen/footer.php'; ?>