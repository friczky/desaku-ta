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
            <li class="breadcrumb-item active">Permohonan Surat      </li>
          </ul>
          <h1>Permohonan Surat</h1>
          <p align="rigth"><a href="<?php echo $base_url;?>admin/tambah_surat"><button class="btn-success">Tambah <i class="fa fa-plus"></i></button></a></p>

           <!-- /.box-header -->
            <div class="box-body">
            <table id="example1" class="table table-striped table-bordered " style="width:100%">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Jenis Surat</th>
                  <th>Foto</th>
                  <th>Action</th>
                </tr>
                </thead>
                <?php

                $query ="SELECT * FROM p_surat" ;
                

                if ($data=mysqli_query($koneksi,$query)){
                  $a=1;
                  while($obj=mysqli_fetch_object($data)){



                ?>
                <tbody>
                <tr>
                  <td><?= $a ?></td>
                  <td><?= $obj->nama ?> </td>
                  <td><?= $obj->jenis ?></td>
                  <td><img src="<?php echo $base_url;?>admin/foto/<?= $obj->foto ?>" width="50" alt="foto" class="margin"></td>
                
                  <td>
                     <a class="btn btn-success btn-sm btn-flat" href="<?php echo $base_url;?>"><i class="fa fa-edit"></i> </a>
                     <a onclick="return confirm('Apakah Yakin mau Dihapuss?')" href="<?php echo $base_url;?>admin/p_surat/hapus/?id=<?= $obj->id?>" class="btn btn-danger btn-sm btn-flat" href=""><i class="fa fa-trash"></i> </a>
                     <a  href="<?php echo $base_url;?>admin/p_surat/surat/<?= $obj->link ?>/?secret=<?= $obj->id ?>&?<?= $obj->nama?>" class="btn btn-danger btn-sm btn-flat" href=""><i class="fa fa-print"></i> </a>
                  </td>
                </tr>
                <?php
                $a++ ;
                }
                }
                ?>
               
                </tbody>
              </table>
            </div>
</div>
</div>

        </div>


<?php include '../komponen/footer.php'; ?>