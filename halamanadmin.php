<?php 
//mulai session 
session_start();
//cek lagi apakah session telah terdaftar untuk username tersebut
if(isset($_SESSION['username'])){
echo'
	<html>
		<head>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/body.css" rel="stylesheet">
		</head>
		<body>
			<div class="container2">
			<center>
					<div class="menuAdmin">
					<img class="gambaradmin" src="img/logo HMJ.png" width="65px" height="50px"/>
						<a href="halamanadmin.php?menu=inputbuku">Input Buku</a> &nbsp;|&nbsp; <a href="halamanadmin.php?menu=penjualan">Penjualan</a> &nbsp;|&nbsp; <a href="halamanadmin.php?menu=daftarbuku">Cari Buku Anggota Inti</a> &nbsp;|&nbsp; 
						<a href="halamanadmin.php?menu=harian">Laporan Harian</a> &nbsp;|&nbsp; 
						<a href="halamanadmin.php?menu=laporan">Laporan</a>
						<br> <a href="metu.php">Logout</a><br><hr>
					</div>
				</center>
			</div>
		</body>
	</html>
';
$menu=isset($_GET["menu"]) ? $_GET["menu"] : "";
if($menu=="inputbuku"){
	include("inputBuku.php");
	//include("inputBuku.php");
}elseif($menu=="penjualan"){
	include("katalogBuku.php");
}elseif($menu=="daftarbuku"){
	include("kataloghmj.php");
}elseif($menu=="harian"){
	include("carilaporan.php");
	//include("lapHarian.php");
}elseif($menu=="laporan"){
	include("laporan.php");
	//include("lapHarian.php");
}
//dan jika terdaftar
}
else{ //jika tidak terdaftar, kembalikan user ke login.html 
header( "Location: mlebu.html" ); }
?> 