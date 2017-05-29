<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>KPMKR-Surabaya</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Medico Club Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href=<?php echo base_url("assets/css/bootstrap.css")?> rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href=<?php echo base_url("assets/css/style.css")?> type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href=<?php echo base_url("assets/css/font-awesome.css")?> rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- portfolio -->	
<link rel="stylesheet" href=<?php echo base_url("assets/css/chocolat.css")?> type="text/css" media="all">
<!-- //portfolio -->	
<!-- font -->
<link href=<?php echo base_url("//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i")?> rel="stylesheet">
<link href=<?php echo base_url('//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300')?> rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="<?=base_url()?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?=base_url()?>assets/js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<div class="agileinfo-dot">
			<div class="header-top" style="">
				<div class="header">
					<div class="header-top-info">
						<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<div class="agileits-logo">
									<a href="<?php echo base_url().'login/home'?>"><img src=<?php echo base_url("assets/images/header.png")?> alt="KPMKR-Surabaya" style="width:250px;height:35px;"/></a>
								</div>
							</div>

							<!-- Collect the nav links, forms, and other content for toggling -->
							<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
								<nav>
									<ul class="nav navbar-nav ">
										<li class="active"><a href=<?php echo base_url().'login/home'?>>Home</a></li>
										<li><a href="#about" class="scroll">About</a></li>
										<li><a href="#gallery" class="scroll">Gallery</a></li>
										<li><a href="#team" class="scroll">People</a></li>
										<li><a href="#events" class="scroll">Events</a></li>
										<li><a href="#mail" class="scroll">Mail Us</a></li>
										<li class="dropdown" style="cursor: pointer;"><a href="#"><?php echo $this->session->userdata('username')?></a>
										 	<div class="dropdown-content">
										 	<a href="<?php echo base_url().'updateprof/update_data/'.$this->session->userdata('username')?>">Edit Profile</a>
										    <a href="<?php echo base_url().'login/logout'?>">Logout</a>
										</li>
									</ul>
								</nav>
							</div>
							<!-- /.navbar-collapse -->
						</nav>
					</div>
				</div>
			</div>
			
			<div class="w3layouts-banner-info">
				<div class="container">
					<div class="w3layouts-banner-slider">
						<div class="w3layouts-banner-top-slider">
							<div class="slider">
								<div class="callbacks_container">
									<ul class="rslides callbacks callbacks1" id="slider4">
										<li>
											<div class="w3ls-text">			
											<div class="w3ls-text-info">
													<h2><span>KPMKR</span></h2>
												</div>
											</div>
										</li>
										<li>
											<div class="w3ls-text">			
											<div class="w3ls-text-info">
													<h4>Kerukunan Pelajar Mahasiswa Kepulauan Riau</h4>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<div class="clearfix"> </div>
								<script src="<?=base_url()?>assets/js/responsiveslides.min.js"></script>
								<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									  // Slideshow 4
									  $("#slider4").responsiveSlides({
										auto: true,
										pager:true,
										nav:true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
										  $('.events').append("<li>before event fired.</li>");
										},
										after: function () {
										  $('.events').append("<li>after event fired.</li>");
										}
									  });
								
									});
								 </script>
								<!--banner Slider starts Here-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- welcome -->
	<div class="welcome" id="about">
		<div class="container">
			<div class="agileits-heading">
				<h2>About</h2> 
			</div>
			<div class="agileinfo-about-info">
				<h4>KPMKR-Surabaya merupakan singkatan dari Kerukunan Pelajar Mahasiswa Kepulauan Riau-Surabaya</h4>
				<p><b>KPMKR-Surabaya</b> adalah sebuah organisasi bersifat kedaerahan yang bertujuan untuk menaungi pelajar maupun mahasiswa asal Kepulauan Riau yang sedang menempuh pendidikan di kota Surabaya.<b> KPMKR-Surabaya</b> berdiri sejak tanggal 11 Maret 2005 dan bertujuan untuk menumbuhkan kecerdasan, kesadaran, persaudaraan, serta tanggung jawab sebagai bentuk pengabdian kepada daerah, bangsa dan negara.</p>
				 <p><b>KPMKR-Surabaya</b> memiliki fasilitas Asrama baik putra maupun putra yang berguna untuk menampung pelajar dan mahasiswa <a href="https://id.wikipedia.org/wiki/Kepulauan_Riau">Kepulauan Riau</a> ketika berada dikota Surabaya baik bersifat sementara ataupun menetap.<b> KPMKR-Surabaya</b> memiliki berbagai macam kegiatan yang bertujuan untuk merekatkan pelajar dan mahasiswa <a href="https://id.wikipedia.org/wiki/Kepulauan_Riau">Kepulauan Riau</a>. Dana yang diperoleh KPMKR-Surabaya berasal dari pemerintah provinsi Kepulauan Riau.</p>
               <p><button class="buttons button5"><a href=href="#" data-toggle="modal" data-target="#myModal" style=" text-transform: uppercase;color:black">See more details</a></button></p>
			</div>
			<div class="modal about-modal fade" id="myModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header"> 
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>					
							<h4 class="modal-title">PROFIL <span>KPMKR-Surabaya</span></h4>
						</div> 
						<div class="modal-body">
							<div class="agileits-w3layouts-info">
								<h6>SEJARAH </h6>
								<p>Berdiri pada tanggal 11 Maret 2005. Berkedudukan di Surabaya.			Berdasarkan Akta Pendirian Organisasi Kerukunan Pelajar Mahasiswa Kepulauan Riau – Surabaya (KPMKR – Surabaya) Nomor 22 , tahun 21 Juli 2014.</p>
								<h6>SIFAT</h6>
								<p>Kedaerahan yang menjunjung tinggi rasa persatuan, kekeluargaan, dan persaudaraan serta bergerak di bidang pendidikan, sosial, dan budaya.</p>
								<h6>TUJUAN</h6>
								<p><li>Membina rasa persatuan dan persaudaraan antar anggota</li>
								<li>Meningkatkan kualitas pendidikan, sosial, dan budaya anggota yang berguna untuk pembangunan daerah, bangsa, dan agama.</li></p>
								<button class="close"><a href="#"  data-dismiss="modal" data-toggle="modal" data-target="#meModal"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></button>
								<h6>KEANGGOTAAN</h6>
								<p><li>Anggota Biasa</li>
								<li>Anggota Luar Biasa</li>
								<li>Anggota Kehormatan</li></p>
								<h6>KEKUASAAN</h6>
								<p>Kekuasaan tertinggi organisasi terletak pada Musyawarah Besar KPMKR-Surabaya.</p>
								<h6>KEUANGAN</h6>
								<p>Keuangan organisasi diperoleh dari pemerintah provinsi Kepulauan Riau dan dana lain yang sah serta tidak mengikat.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal about-modal fade" id="meModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header"> 
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>					
							<h4 class="modal-title">ARTI <span>LAMBANG</span></h4>
						</div> 
						<div class="modal-body">
							<div class="agileits-w3layouts-info">
								<img src=<?php echo base_url("assets/images/kpm.png")?> alt="" class="img-responsive" style="width:185px;height:185px;text-align:center;"/>
								<h6>Buku</h6>
								<p>melambangkan menuntut ilmu</p>
								<button class="close"><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#mmModal"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a></button>
								<h6>Lancang Kuning</h6>
								<p><li>Melambangkan Putera-Puteri Kepulauan Riau</li>
								<li>Warna Kuning pada layar melambangkan kejayaan</li>
								<li>Warna cokelat pada sampan melambangkan kesederhanaan</li></p>
								<h6>Tugu Pahlawan</h6>
								<p><li>Melambangkan perjuangan pelajar dan mahasiswa Kepulauan Riau di Surabaya</li>
								<li>Warna putih melambangkan niat yang bersih</li></p>
								<h6 style="text-align: center">Nama organisasi berbentuk lingkaran melambangkan kesatuan dan kebulatan tekad KPMKR-Surabaya </h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal about-modal fade" id="mmModal" tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header"> 
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>					
							<h4 class="modal-title">STRUKTUR <span>KPMKR-Surabaya</span></h4>
						</div> 
						<div class="modal-body">
							<div class="agileits-w3layouts-info">
								<img src=<?php echo base_url("assets/images/struktur.png")?> alt="" class="img-responsive" style="width:500px;height:130px;text-align:center;"/>
								<h6>Keterangan</h6>
								<p>Garis Perintah  : ______</p>
								<p>Garis Koordinas : ------ </p>
								<img src=<?php echo base_url("assets/images/org.png")?> alt="" class="img-responsive" style="width:1500px;height:250px;text-align:center;"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="welcome-agileinfo">
				<div class="col-md-6 col-sm-6 col-xs-6 welcome-grids">
					<div class="view view-w3-agile">
						<img src=<?php echo base_url("assets/images/intro.jpg")?> alt="" class="img-responsive" />
						<div class="agileits-w3layouts-mask">
							<h4>Keluarga Besar KPMKR-Surabaya</h4>
							<p>Pelaksanaan Idul Adha</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6 welcome-grids">
					<div class="view view-w3-agile">
						<img src=<?php echo base_url("assets/images/5.jpg")?> alt="" class="img-responsive" />
						<div class="agileits-w3layouts-mask">
							<h4>Keluarga Besar KPMKR-Surabaya</h4>
							<p>Pelaksanaan Mubes 2014</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //welcome -->
	<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<div class="agileits-heading">
				<h3>Services</h3> 
			</div>
			<div class="specialty-grids-top">
				<div class="col-md-4 service-box" style="visibility: visible; -webkit-animation-delay: 0.4s;">
					<figure class="icon">
						<i class="fa fa-home" aria-hidden="true"></i>
					</figure>
					<h5>Asrama Segantang Lada</h5>
					<p>KPMKR-Surabaya memiliki Asrama Putra dan Asrama Putri yang bertujuan untuk menampung pelajar maupun mahasiswa yang menempuh pendidikan di Surabaya bisa bersifat sementara maupun menetap.
					<br>Asrama Putra : Jl. Keputih Timur No 9 Surabaya
					<br>Asrama Putri : Jl. Keputih Gang 2 No 10 Surabaya </p>
				</div>
				<div class="col-md-4 service-box">
					<figure class="icon">
						<i class="fa fa-book" aria-hidden="true"></i>
					</figure>
					<h5>Perpustakaan</h5>
					<p>KPMKR-Surabaya memiliki perpustakaan untuk menunjang perkuliahan yang bisa dipinjam oleh seluruh anggota KPMKR yang membutuhkan. Perpustakaan KPMKR berada di Asrama Putra KPMKR-Surabaya. </p>
				</div>
				<div class="col-md-4 service-box">
					<figure class="icon">
						<i class="fa fa-car" aria-hidden="true"></i>
					</figure>
					<h5>Penjemputan Mahasiswa Baru</h5>
					<p>KPMKR-Surabaya melayani penjemputan mahasiswa baru yang merantau ke Surabaya dari Bandara Djuanda menuju Asrama KPMKR-Surabaya. </p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
	<!-- portfolio -->
	<div class="portfolio" id="gallery">
		<div class="container">
			<div class="agileits-heading">
				<h3>Gallery</h3> 
			</div>
			<ul class="simplefilter w3layouts agileits">
				<li class="active w3layouts agileits" data-filter="all">All</li>
				<li class="w3layouts agileits" data-filter="1">Category1</li>
				<li class="w3layouts agileits" data-filter="2">Category2</li>
				<li class="w3layouts agileits" data-filter="3">Category3</li>
				<li class="w3layouts agileits" data-filter="4">Category4</li>
				<li class="w3layouts agileits" data-filter="5">Category5</li>
			</ul>
			
			
			<div class="filtr-container w3layouts agileits">

			<?php foreach($gambar as $img) { ?>
				<div class="filtr-item w3layouts agileits portfolio-t" data-category="<?php echo(rand(1,5)).', '.rand(1,5);?>" data-sort="Busy streets">
					<a href="<?php echo base_url().'assets/images/portfolio/thumbnails/'.$img['image'];?>" class="b-link-stripe w3layouts agileits b-animate-go thickbox">
						<figure>
							<img src="<?php echo base_url().'assets/images/portfolio/thumbnails/'.$img['image'];?>" class="img-responsive w3layouts agileits" alt="W3layouts Agileits">
							<figcaption>
								<h3><?= $img['nama']; ?></h3>
							</figcaption>
						</figure>
					</a>
				</div>
				<?php } ?>		
				<div class="clearfix"></div>
			</div>		
		</div>
	</div>
	<!-- //portfolio -->
	<!-- team -->
	<div class="jarallax team" id="team">
		<div class="team-dot">
			<div class="container">
				<div class="agileits-heading team-heading">
					<h3>People</h3>
				</div>
				<div class="agileits-team-grids">
					<div class="col-md-3 agileits-team-grid">
						<div class="team-info">
							<img src=<?php echo base_url("assets/images/galih.jpg")?> alt="">
							<div class="team-caption"> 
								<h4>Galih Andanniyo Harahap</h4>
								<p>Ketua KPMKR-Surabaya periode 2013/2014</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileits-team-grid">
						<div class="team-info">
							<img src=<?php echo base_url("assets/images/eman.jpg")?> alt="">
							<div class="team-caption"> 
								<h4>Muhammad Agus Sulaiman</h4>
								<p>Ketua KPMKR-Surabaya periode 2014/2015</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileits-team-grid">
						<div class="team-info">
							<img src=<?php echo base_url("assets/images/ferdii.jpg")?> alt="">
							<div class="team-caption"> 
								<h4>Ferdi Agus Kurniawan</h4>
								<p>Ketua KPMKR-Surabaya periode 2015/2016</p>
							</div>
						</div>
					</div>
					<div class="col-md-3 agileits-team-grid">
						<div class="team-info">
							<img src=<?php echo base_url("assets/images/ami.jpg")?> alt="">
							<div class="team-caption"> 
								<h4>Amy Reza Andrea</h4>
								<p>Ketua KPMKR-Surabaya periode 2016/2017</p>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!-- //team -->
	<!-- events -->
	<div class="w3-events" id="events"> 
		<div class="container">
			<div class="agileits-heading">
				<h3>Latest Events</h3>
			</div>
			
			<div class="events-info">

			 <?php foreach($data as $list) { ?>

				<div class="col-md-6 event-grids">
					<div class="w3layouts-text">
						<h4><?= $list['tanggal']; ?><span><?= $list['bulan']; ?></span></h4>
						<h6><a href="#" data-toggle="modal" data-target="'#'.<?php echo $list['idNews']?>"><?= $list['judul']; ?></a></h6> 
						<div class="clearfix"> </div>
					</div>
					<p><?= substr($list['isiberita'],0,250); ?></p>
				</div>
				<?php } ?>
			</div>

		</div> 
	</div> 
	<!-- //events -->
	<!-- modal -->
	 <?php foreach($data as $list) { ?>
	<div class="modal about-modal fade" id="<?php echo $list['idNews']?>" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header"> 
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
					<h4 class="modal-title"><?= $list['judul']; ?></span></h4>
				</div> 
				<div class="modal-body">
					<div class="agileits-w3layouts-info">
						<img src="<?php echo base_url().'assets/images/news/'.$list['image']; ?>" alt="" style="width:300px;height:200px;text-align:center;"/>
						<p style="text-align: justify;"><?= $list['isiberita']; ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<!-- //modal -->
	<!-- newsletter -->
	<div class="newsletter jarallax">
		<div class="w3-agile-newsletter">
			<div class="container">
				<div class="agileits-heading team-heading">
					<h3>Maps</h3>
				</div>
				<div class="newsletter-grids">
					<div id="map" style="border:9px solid rgba(0, 0, 0, 0.65);width:100%;height:400px;"></div>
						 <script>
						      function initMap() {
						        var uluru = {lat:-7.290554, lng:112.801749};
						        var map = new google.maps.Map(document.getElementById('map'), {
						          zoom: 20,
						          center: uluru  
						        });
						        var marker = new google.maps.Marker({
						          position: uluru,
						          map: map
						        });
						      }
						    </script>
						    <script async defer
						    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCucNwwSjIz1CI1NvyuoT1exG-OQdGq8l4&callback=initMap">
						    </script>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //newsletter -->
	<!-- contact -->
	<div class="contact" id="mail">
		<div class="container">
			<div class="agileits-heading">
				<h3>Contact</h3>
			</div>
			<div class="w3layouts-contact-grids">
				<div class="col-sm-3 w3layouts-contact-grid">
					<img src=<?php echo base_url("assets/images/icon/home.png")?> alt="KPMKR-Surabaya" style="width:70px;height:70px;"/>
					<h5>Alamat Kesektariatan</h5>
					<p>Jalan Keputih Timur No 9, Sukolilo<br>
               		 Kota Surabaya- Provinsi Jawa Timur<br>
                	 60111</p>
				</div>
				<div class="col-sm-3 w3layouts-contact-grid">
					<img src=<?php echo base_url("assets/images/icon/line.png")?> alt="KPMKR-Surabaya" style="width:70px;height:70px;"/>
					<h5>LINE</h5>
					<p>@fua8428h</p>
				</div>
				<div class="col-sm-3 w3layouts-contact-grid">
					<img src=<?php echo base_url("assets/images/icon/gmail.png")?> alt="KPMKR-Surabaya" style="width:70px;height:70px;"/>
					<h5>Email</h5>
					<p><a href="mailto:kpmkr.surabaya@gmail.com">kpmkr.surabaya@gmail.com</a></p>
				</div>
				<div class="col-sm-3 w3layouts-contact-grid">
					<img src=<?php echo base_url("assets/images/icon/share.png")?> alt="KPMKR-Surabaya" style="width:70px;height:70px;"/>
					<h5>Social</h5>
					<p>Touch With Us</p>
					<div class="agileinfo-social-grids">
						<ul>
							<li> 
							<a href="https://facebook.com/groups/KPMKR.Surabaya/" class="btn btn-default btn-lg">
							<img src=<?php echo base_url("assets/images/icon/fb.png")?> alt="KPMKR-Surabaya" style="width:50px;height:50px;"/></a>
							</li>
							<li>
							<a href="https://twitter.com/kpmkr_surabaya" class="btn btn-default btn-lg">
							<img src=<?php echo base_url("assets/images/icon/twitter.png")?> alt="KPMKR-Surabaya" style="width:50px;height:50px;"/></a>
							</li>
							<li> 
							<a href="https://www.instagram.com/kpmkrsurabaya/" class="btn btn-default btn-lg">
							<img src=<?php echo base_url("assets/images/icon/instagram.png")?> alt="KPMKR-Surabaya" style="width:50px;height:50px;"/></a>
							</li>
							<li>
							<a href="https://www.youtube.com/channel/UCW-xDTnHvranu_QAyK9lg3Q" class="btn btn-default btn-lg">
							<img src=<?php echo base_url("assets/images/icon/youtube.png")?> alt="KPMKR-Surabaya" style="width:50px;height:50px;"/></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- contact-info -->
	<div class="contact-info jarallax">
		<div class="contact-info-grids">
			<div class="container">
				<div class="agileits-heading team-heading">
					<h3>Leave a Message</h3>
				</div>
				<div class="contact-form">
					<?php echo form_open('Message/create'); ?> 
						<input type="text" placeholder="Name" name="name" required="">
						<input type="email" placeholder="Email" name="email" required="">
						<input type="text" placeholder="Telephone" name="telephone" required="">
						<textarea placeholder="Message" name="message" required=""></textarea>
						<input type="submit" value="SUBMIT">
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>
	</div>
	<!-- //contact-info -->
	<!-- footer -->
	<footer>
		<div class="container">
			<div class="copyright">
				<p>© 2017 KPMKR-Surabaya. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		</div>
	</footer>
	<!-- //footer -->
	<script src="<?=base_url()?>assets/js/jarallax.js"></script>
	<script src="<?=base_url()?>assets/js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="<?=base_url()?>assets/js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/move-top.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- Tabs-JavaScript -->
	<script src="<?=base_url()?>assets/js/jquery.filterizr.js"></script>
		<script src="<?=base_url()?>assets/js/controls.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-container').filterizr();
			});
		</script>
	<!-- //Tabs-JavaScript -->
	<!-- PopUp-Box-JavaScript -->
		<script src="<?=base_url()?>assets/js/jquery.chocolat.js"></script>
		<script type="text/javascript">
			$(function() {
				$('.filtr-item a').Chocolat();
			});
		</script>
	<!-- //PopUp-Box-JavaScript -->
</body>	
</html>