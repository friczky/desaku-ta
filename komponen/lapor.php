<?php

                $query ="SELECT * FROM elapor_info" ;
                

                if ($data=mysqli_query($koneksi,$query)){
                  $a=1;
                  while($obj=mysqli_fetch_object($data)){



                ?>

<br><center><h2><?= $obj->judul ?></h2>
	
<img  src="<?php echo $base_url;?>admin/foto/<?= $obj->foto?>"class="img-thumbnail" width="30%">
<div class="container"><br>
	<p align="justify"><?= $obj->isi?></p>
</div>
</center>
<?php 

}
}
?>