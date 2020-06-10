<?php 

include 'komponen/header.php';

include 'komponen/navbar.php';

?>
<div class="inner-content">
		<div class="container">
			<div class="section-head">
				<h2>Berita</h2>
			</div>

			<div class="row">
				<div class="col-md-8">
 <?php

                $query ="SELECT * FROM berita" ;
                

                if ($data=mysqli_query($koneksi,$query)){
                  $a=1;
                  while($obj=mysqli_fetch_object($data)){



                ?>
					<article class="style2">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<a href="../17_post_01.html">
									<div class="article-thumb">
										<img src="<?php echo $base_url;?>asset/foto/<?= $obj->foto?>" class="img-responsive" alt=""/>
									</div>
								</a>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="post-excerpt">
									<div class="small-title cat"><?= $obj->kategori?></div>
									<h3><a href="./17_post_01.html"><?= $obj->judul?></a></h3>
									<div class="meta">
										<span>by <a href="#" class="link"><?= $obj->judul?></a></span>
										<span><?= $obj->judul?></span>
										<span class="comment"><i class="fa fa-comment-o"></i> 1</span>
									</div>
									<p><?= $obj->isi?></p>
									<a href="#" class="small-title rmore">Read More</a>
								</div>
							</div>
						</div>
					</article>
<?php
}
}
?>
	

				

					<ul class="pagi-nation">
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">...</a></li>
						<li><a href="#">42</a></li>
					</ul>
				</div>

<aside class="col-md-4">
					<div class="side-widget">
						<h4>Follow Us</h4>
						<div class="side-social">
							<a href="#"><i class="fa fa-facebook"></i> 2,279 <span>fans</span></a>
							<a href="#"><i class="fa fa-twitter"></i> 1,928 <span>followers</span></a>
							<a href="#"><i class="fa fa-google-plus"></i> 829 <span>followers</span></a>
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="side-widget">
						<h4>Subscribe</h4>
						<div class="side-newsletter text-center">
							<p>Get the best viral stories straight into your inbox!</p>
							<form action="php/subscribe.php" id="invite" method="POST">
								<input placeholder="Your email address" class="e-mail" name="email" id="address" data-validate="validate(required, email)" type="email">
								<button type="submit">Sign up</button>
								<span>Don't worry we don't spam</span>
							</form>
						</div>
					</div>

					<div class="clearfix"></div>

				


					<div class="clearfix"></div>

					<div class="side-widget">
						<h4><i class="fa fa-instagram"></i> &nbsp;Instagram</h4>
						<ul class="instagram-lite"></ul>
					</div>
					
					<div class="clearfix"></div>

					<div class="side-widget">
						<h4>Tweets</h4>
						<div id="tweecool"></div>
					</div>
										
				</aside>
			</div>
		</div>
	</div>


<?php
include 'komponen/footer.php';

?>