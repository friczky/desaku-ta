<?php include ('../../koneksi.php') ; ?>
<?php

        if($_GET){

          $id = $_GET['id'] ;
          
          $status = 1 ;
  
            $sql ="UPDATE user SET status='$status' where id='$id'";

          if ($koneksi->query($sql) === TRUE){
            echo "<script> alert('Akun berhasil di tolak'); window.location.href='index.php'</script>";
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
        }

        ?>