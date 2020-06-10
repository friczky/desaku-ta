<?php include 'komponen/header.php'; ?>

<?php include 'komponen/navbar.php'; ?>

<?php include 'komponen/sidebar.php'; ?>

    <?php

      

if($_POST){
  try{
    $pemilik = $_POST['pemilik'];
    $namafile = $_POST['namafile'];
      $tgl = date("d-m-Y H:i:s");
    $file = $_FILES['file']['name'];

        $sql ="INSERT INTO drivecloud (pemilik,namafile,tgl,file) VALUES('$pemilik','$namafile','$tgl','$file')" ;
     move_uploaded_file($_FILES["file"]["tmp_name"], "$base_file" . $_FILES["file"]["name"]);
    if(!$koneksi->query($sql)) {
      echo $koneksi->error; 
      die(); 
    } 
  } catch (Exception $e) {
    echo $e;
    die();
  }
  echo"
  <script> alert('Data Berhasil DiTambah'); window.location.href='cloud.php';</script>";
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
          </ul><center>
          <h1>Upload File</h1>
          <br>
            <form action="" method="post" enctype="multipart/form-data">
            <p>
              nama file : 
            </p>
            <input type="text" name="namafile">
            <input type="hidden" name="pemilik"  value="<?php echo $_SESSION['username']; ?>">
      
           
            <p>
              file :
            </p>
             <input type="file" name="file">
            <p><br>
            </p>

            <center><button class="btn-success" name="submit" type="submit">Tambah</button>        <button class="btn-primary" name="reset" type="reset">Reset<br></center>
            </form>
        </div><br>
      
    </center>

<?php include 'komponen/footer.php'; ?>