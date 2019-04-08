<?php
include 'koneksi.php';
if (isset($_POST['login'])) {
	$user = $_POST['username'];
	$pass = md5($_POST['password']);
	$query = "SELECT * FROM laundry WHERE username_laundry='$user' and password_laundry='$pass'";
	$hasil = mysqli_query($koneksi, $query);
	$row = mysqli_num_rows($hasil);
	if ($row > 0) {
		session_start();
		$_SESSION['username'] = $user;
		echo "<script>alert('Login Berhasil'); document.location='../admin/index.php';</script>";
	} else {
		echo "<script>alert('Username dan password salah'); document.location='login.php';</script>";
	}
}
?>
