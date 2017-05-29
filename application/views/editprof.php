<!DOCTYPE html>
<html lang="en">
<head>
<title>EDIT PROFILE</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sales Inquiry Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href=<?php echo base_url("assets/css/edit.css")?> rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href=<?php echo base_url("//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese")?> rel="stylesheet">
</head>
<body>
<?php
echo validation_errors();
 ?>
	<!--header-->
	<div class="agile-header">
		<h1>EDIT PROFILE</h1>
		<p>Teruntuk Pelajar dan Mahasiswa Baru yang menempuh pendidikan di Kota Surabaya</p>
	</div>
	<!--//header-->
	<!--main-->

	<div class="agileits-main">
		<div class="wrap">
		<form method="POST" action="<?php echo base_url()."updateprof/update";?>">
			<ul>
				<li class="text">Username :  </li>
				<li><input name="username" type="text" value="<?php echo $username;?>"></li>
			</ul>
			<ul>
				<li class="text">Password  :  </li>
				<li><input name="password" type="password" value="<?php echo $password;?>"></li>
			</ul>
			<ul>
				<li class="text">Nama Lengkap  :  </li>
				<li><input name="nama" type="text" value="<?php echo $nama;?>"></li>
			</ul>
			<ul>
				<li class="text">Asal Daerah :  </li>
				<li><input name="asal" type="text" value="<?php echo $asal;?>"></li>
			</ul>
			<ul>
				<li class="text">Tempat Lahir :  </li>
				<li><input name="tempatLahir" type="text" value="<?php echo $tempatLahir;?>"></li>
			</ul>
			<ul>
				<li class="text">Tanggal Lahir :  </li>
				<li><input name="tglLahir" type="date" value="<?php echo $tglLahir;?>"></li>
			</ul>
			<ul>
				<li class="text">Alamat Asal :  </li>
				<li><input name="alamatAsal" type="text" value="<?php echo $alamatAsal;?>"></li>
			</ul>
			<ul>
				<li class="text">Kampus  :  </li>
				<li><input name="kampus" type="text" value="<?php echo $kampus;?>"></li>
			</ul>
			<ul>
				<li class="text">Alamat Surabaya  :  </li>
				<li><input name="alamatSby" type="text" value="<?php echo $alamatSby;?>"></li>
			</ul>
			<ul>
				<li class="text">Jurusan  :  </li>
				<li><input name="jurusan" type="text" value="<?php echo $jurusan;?>"></li>
			</ul>
			<ul>
				<li class="text">No Handphone  :  </li>
				<li><input name="noHP" type="text" value="<?php echo $noHP;?>"></li>
			</ul>
			<ul>
				<li class="text">Email :  </li>
				<li><input name="email" type="text" value="<?php echo $email;?>"></li>
			</ul>
			<ul>
				<li class="text">ID LINE  :  </li>
				<li><input name="idLine" type="text" value="<?php echo $idLine;?>"></li>
			</ul>
			<div class="clear"></div>
			<div class="agile-submit">
				<input type="hidden" name="is_submit" value="1" />
				<input type="submit" value="Save Changes">
			</div>
			</form>
		</div>	
	</div>
	 <?php echo form_close(); ?>
<!--//main-->
<!--footer-->
<div class="footer-w3">
	<p>&copy; 2017 KPMKR-Surabaya. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
</div>
<!--//footer-->
</body>
</html>