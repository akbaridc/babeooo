<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
   require 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data user dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$query = $data->fetch_assoc();
 
if($cek > 0){
	$_SESSION['username'] 	= "$username";
	$_SESSION['nama']	= $query['nama'];
	$_SESSION['status']		= "login";
	header("location:index.php");
}else{
	header("location:login.php");
}
?>