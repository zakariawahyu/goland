<?php
include 'koneksi.php';
	$user = $_POST['user'];
	$pass = md5($_POST['pw']);

	$query = "SELECT * FROM member WHERE username_member ='$user' AND password_member ='$pass'";
	$hasil = mysqli_query($koneksi, $query);
	$row = mysqli_num_rows($hasil);
	if ($row > 0) {
		session_start();
		setcookie("nama", $user);
		$_SESSION['username'] = $user;
		echo "<script>alert('Login Berhasil'); document.location='../member/index.php';</script>";
	} else {
		echo "<script>alert('Username dan password salah'); document.location='login.php';</script>";
	}
?>
