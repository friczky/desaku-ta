<?php include ('../../koneksi.php') ; ?>
<?php include '../komponen/header.php'; ?>

<?php include '../komponen/navbar.php'; ?>

<?php include '../komponen/sidebar.php'; ?>

 
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
            <li class="breadcrumb-item active">Tambah Surat       </li>
          </ul>
          <h1>Pilih Surat</h1>
          <div class="row" >
               <?php
                $query ="SELECT * FROM jenis_surat" ;
                if ($data=mysqli_query($koneksi,$query)){
                  $a=1;
                  while($obj=mysqli_fetch_object($data)){
                ?>
          <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo $base_url;?>admin/foto/sensei.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?= $obj->jenis ?></h5>
    
    <a href="<?php echo $base_url;?>admin/tambah_surat/form_surat/?id=<?= $obj->id?>" class="btn btn-primary">Pilih</a>
  </div>
</div>
     
             <?php 
      }
    }
      ?></div>
        
        </div>

   
    

<?php include '../komponen/footer.php'; ?>