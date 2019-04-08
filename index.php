<?php
include "login/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/logo.png">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsLxwEmTlQYyJ-cMlon9fmoxBoa_qe6IU&callback=initMap"
type="text/javascript"></script>
    <title>GO-LAUNDRY</title>

  </head>
  <body>

    <header id="home">
  		<div class="bg-img" style="background-image: url('./img/background1.jpg');">
  			<div class="overlay"></div>
  		</div>
  		<nav id="nav" class="navbar navbar-fixed-top bg-dark">
  			<div class="container">
  				<div class="navbar-header">
  					<div class="navbar-brand">
  						<a href="index.php">
  							<img class="logo" src="img/logo.png" alt="logo">
  							<img class="logo-alt" src="img/logo-alt.png" alt="logo">
  						</a>
  					</div>
  					<div class="nav-collapse">
  						<span></span>
  					</div>
  				</div>
  				<ul class="main-nav nav navbar-nav navbar-right">
  					<li><a href="#home">Home</a></li>
  					<li><a href="#features">Fitur & Layanan</a></li>
            <li><a href="#histori">Laundry</a></li>
  					<li><a href="#team">Team</a></li>
  					<li><a href="#contact">Kontak</a></li>
  				</ul>
  			</div>
  		</nav>
  		<div class="home-wrapper">
  			<div class="container">
  				<div class="row">
  					<div class="col-md-10 col-md-offset-1">
  						<div class="home-content">
  							<h1 class="white-text">CEPAT, TEPAT, DIANTAR KE TEMPAT</h1>
  							<p class="white-text2">GO-LAUNDRY merupakan sebuah aplikasi web yang dapat memudahkan mencari jasa laundry di sekitar kawasan Telkom University sesuai keinginan berdasarkan harga, layanan, kenyamanan, dan kecepatan.
  							</p>
  							<a href="login/login.php"><button class="white-btn">Login</button></a>
  							<a href="login/created.php"><button class="main-btn">Register</button></a>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</header>

  	<div id="features" class="section md-padding">
  		<div class="container">
  			<div class="row">
  				<div class="section-header text-center">
  					<h2 class="title">Fitur GO-LAUNDRY</h2>
  				</div>
  				<div class="col-md-4">
  					<div class="features">
  						<i class="fas fa-map-marker-alt"></i>
  						<h3>Share Lokasi</h3>
  						<p>User dapat mengetahui dimana lokasi terdekat jasa laundry yang akan dimunjulkan dalam bentuk maps</p>
  					</div>
  				</div>
  				<div class="col-md-4">
  					<div class="features">
  						<i class="fa fa-motorcycle"></i>
  						<h3>Antar dan Jemput</h3>
  						<p>Memberikan fasilitas untuk memilih bisa di Jemput dan di Antar kembali ketempat sesuai dengan ketentuan yang berlaku.</p>
  					</div>
  				</div>
  				<div class="col-md-4">
  					<div class="features">
  						<i class="fa fa-child"></i>
  						<h3>Pilih Jasa Laundry</h3>
  						<p>User dapat memilih secara bebas jasa laundry yang di inginkan berdasarkan, harga, layanan dan kecepatan</p>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>

    <div id="features" class="section md-padding">
      <div class="container">
        <div class="row">
          <div class="section-header text-center">
            <h2 class="title">Layanan GO-LAUNDRY</h2>
          </div>
          <div class="col-md-4">
            <div class="features">
              <i class="fab fa-opencart"></i>
              <h3>Layanan Biasa</h3>
              <p>User akan mendapatkan layanan pencucian seperti biasa bisa Cuci+Seterika dengan beberapa paket yaitu Normal Services (2 Hari), One Day Services (1 Hari) dan Urgent Services (12 Jam).</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="features">
              <i class="fab fa-cloudscale"></i>
              <h3>Dry Cleaning</h3>
              <p>User akan mendapatkan layanan spesial, karena proses pencucian tidak menggunakan air deterjen. Melainkan dengan proses kimiawi untuk tetap menjaga kualitas bahan</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="features">
              <i class="fas fa-cart-plus"></i>
              <h3>Wet Cleaning</h3>
              <p>User akan mendapatkan layanan super spesial, akan mendapatkan pelayanan secara khusus untuk penanganan setiap jenis bahan karena pada layanan ini ramah lingkungan</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="histori" class="section md-padding">
  		<div class="container">
  			<div class="row">
  				<div class="section-header text-center">
  					<h2 class="title">Data Laundry</h2>
  				</div>
            <div class="col-xs-12">
              <div class="panel panel-default">
                <div class="panel-heading">Update Transaksi Laundry</div>
                  <div class="panel-body textkita">
                    <table class="table table-striped table-bordered table-hover">
                      <tr>
                        <td>Nama Laundry</td>
                        <td>Total Pesanan Masuk</td>
                        <td>Pesanan Belum Diproses</td>
                        <td>Pesanan Sedang Diproses</td>
                        <td>Pesanan Selesai</td>
                      </tr>
                      <tr>
                        <?php
                        $query = "select nama_laundry from laundry";
                        $hasil = mysqli_query($koneksi, $query);
                        while ($row = mysqli_fetch_array($hasil)) {
                          $nama = $row['nama_laundry'];
                          $query1 = "select count(kode_pesanan) as jumlah_masuk, nama_laundry from pesanan ps,laundry ln where ps.kode_laundry = ln.kode_laundry and nama_laundry='$nama'";
                          $kueri1 = "select count(kode_pesanan) as belum, nama_laundry from pesanan ps,laundry ln where ps.kode_laundry = ln.kode_laundry and nama_laundry='$nama' and status_pesanan='Belum Diproses'";
                          $query2 = "select count(kode_pesanan) as proses, nama_laundry from pesanan ps,laundry ln where ps.kode_laundry = ln.kode_laundry and nama_laundry='$nama' and status_pesanan='Sedang Diproses'";
                          $query3 = "select count(kode_pesanan) as selesai, nama_laundry from pesanan ps,laundry ln where ps.kode_laundry = ln.kode_laundry and nama_laundry='$nama' and status_pesanan='Selesai'";
                          $hasil_1 = mysqli_query($koneksi, $kueri1);
                          $hasil1 = mysqli_query($koneksi, $query1);
                          $hasil2 = mysqli_query($koneksi, $query2);
                          $hasil3 = mysqli_query($koneksi, $query3);
                          $result_1 = mysqli_fetch_array($hasil_1);
                          $result1 = mysqli_fetch_array($hasil1);
                          $result2 = mysqli_fetch_array($hasil2);
                          $result3 = mysqli_fetch_array($hasil3);
                        ?>
                          <td><?php echo $row['nama_laundry']; ?></td>
                          <td><?php echo $result1['jumlah_masuk']; ?></td>
                          <td><?php echo $result_1['belum']; ?></td>
                          <td><?php echo $result2['proses']; ?></td>
                          <td><?php echo $result3['selesai']; ?></td>
                         </tr>
                         <?php
                       }
                       ?>
                    </table>
                  </div>
                </div>
  		    </div>
  	    </div>
      </div>
    </div>

  	<div id="team" class="section md-padding">
  		<div class="container">
  			<div class="row">
  				<div class="section-header text-center">
  					<h2 class="title">Team Kami</h2>
  				</div>
  				<div class="col-sm-4">
  					<div class="team">
  						<div class="team-img">
  							<img class="img-responsive" src="img/team1.jpg" alt="">
  							<div class="overlay">
  							</div>
  						</div>
  						<div class="team-content">
  							<h3>Zakaria Wahyu Nur Utomo</h3>
  							<span>Programer</span>
  						</div>
  					</div>
  				</div>
  				<div class="col-sm-4">
  					<div class="team">
  						<div class="team-img">
  							<img class="img-responsive" src="./img/team2.jpg" alt="">
  							<div class="overlay">
  							</div>
  						</div>
  						<div class="team-content">
  							<h3>Ridho Renaldo Barus</h3>
  							<span>Designer</span>
  						</div>
  					</div>
  				</div>
  				<div class="col-sm-4">
  					<div class="team">
  						<div class="team-img">
  							<img class="img-responsive" src="./img/team3.jpg" alt="">
  							<div class="overlay">
  							</div>
  						</div>
  						<div class="team-content">
  							<h3>Tania Angelina Hutajulu</h3>
  							<span>Analyst</span>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>

	<div id="contact" class="section md-padding">
		<div class="container">
			<div class="row">
				<div class="section-header text-center">
					<h2 class="title">Kontak Kami</h2>
				</div>
				<div class="col-sm-4">
					<div class="contact">
						<i class="fab fa-whatsapp-square"></i>
						<h3>WA / SMS</h3>
						<p>085-555-666-777</p>
					</div>
				</div>
        <div class="col-sm-4">
          <div class="contact">
            <i class="fa fa-phone"></i>
            <h3>No. Telp</h3>
            <p>(0274) 6411378</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="contact">
            <i class="fab fa-line"></i>
            <h3>Line</h3>
            <p>@go_laundry</p>
          </div>
        </div>
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<p>Go_laundry@gmail.com</p>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="contact">
						<i class="fas fa-map-marker-alt"></i>
						<h3>Alamat</h3>
						<p>Jl. Telekomunikasi No 1 Telkom University</p>
					</div>
				</div>
        <div class="col-sm-4">
          <div class="contact">
            <i class="fab fa-instagram"></i>
            <h3>Instagram</h3>
            <p>@go_laundry</p>
          </div>
        </div>
			</div>
		</div>
	</div>

	<footer id="footer" class="sm-padding bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-logo">
						<a href="index.php"><img src="img/logo-alt.png" alt="logo"></a>
					</div>
					<ul class="footer-follow">
						<li><a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a></li>
						<li><a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a></li>
						<li><a href="https://www.google.com"><i class="fab fa-google-plus"></i></a></li>
						<li><a href="https://www.linkedin.com"><i class="fab fa-linkedin"></i></a></li>
						<li><a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a></li>
					</ul>
					<div class="footer-copyright">
						<p>Copyright © 2018. GO-LAUNDRY All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div id="back-to-top">
    <i class="fas fa-arrow-up"></i>
  </div>

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>
