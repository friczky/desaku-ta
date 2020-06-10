<?php include 'komponen/header.php'; ?>

<?php include 'komponen/navbar.php'; ?>

<?php include 'komponen/sidebar.php'; ?>

 <div class="page-content">
        <!-- Page Header-->
        <div class="page-header no-margin-bottom">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">elapor</h2>
          </div>
        </div>
        <!-- Breadcrumb-->
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">elapor
                  </li>
          </ul>
          <h1>elapor</h1>
          <p align="rigth"><a href="artikel-tambah.php"><button class="btn-success">Tambah Artikel</button></a></p>

           <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                  <th>No</th>
                  <th>pelapor</th>
                  <th>judul</th>
                  <th>isi</th>
                  <th>foto</th>
                  
                </tr>
                </thead>
                <?php

                $query ="SELECT * FROM elapor " ;
                

                if ($data=mysqli_query($koneksi,$query)){
                  $a=1;
                  while($obj=mysqli_fetch_object($data)){



                ?>
                <tbody>
                <tr>
                  <td><?= $a ?></td>
                  <td><?= $obj->pelapor ?> </td>
                  <td><?= $obj->judul ?></td>
                  <td><img src="foto/<?= $obj->foto ?>" width="50" alt="foto" class="margin"></td>
                  <td><?=substr($obj->isi,0,200)?>...</td>
                  <td>
                     <a class="btn btn-success btn-sm btn-flat" href="edit.php?id=<?= $obj->id?>"><i class="fa fa-edit"></i> </a>
                     <a onclick="return confirm('Apakah Yakin mau Dihapuss?')" href="hapus.php?id=<?= $obj->id ?>" class="btn btn-danger btn-sm btn-flat" href=""><i class="fa fa-trash"></i> </a>
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


<?php include 'komponen/footer.php'; ?>