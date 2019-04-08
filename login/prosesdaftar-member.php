<?php
	include 'koneksi.php';

	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$alamat = $_POST['alamat'];
	$no_telp = $_POST['telp'];

	$cekuser = mysqli_query($koneksi, "SELECT * FROM member WHERE username = '$username'");

		if(mysqli_num_rows($cekuser) > 0) {
     echo '<script language="javascript">alert("Username Sudah Terdaftar ! "); document.location="created.php";</script>';
   } else {
     if(!$username || !$password) {
       echo '<script language="javascript">alert("Masih Ada Data Yang Kosong !"); document.location="created.php";</script>';
     } else {
       $simpan = mysqli_query($koneksi, "INSERT INTO member VALUES('','$username','$password','$no_telp','Non Member' ,'$alamat')");
       if($simpan) {
         echo '<script language="javascript">alert("Pendaftaran Sukses, Silahkan Login ! "); document.location="login.php";</script>';
       } else {
         echo '<script language="javascript">alert("Pendaftaran Gagal ! "); document.location="created.php";</script>';
       }
     }
   }
?>
