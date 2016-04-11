<?php
	session_start();
//cek lagi apakah session telah terdaftar untuk username tersebut
if(isset($_SESSION['username'])){
	$id = $_GET['id'];
	include "koneksi.php";
	$sql = "select * from listbuku where id = '$id'";
	$hasil = mysql_query($sql);
	if (!$hasil) die ('Gagal query...');
	
	$data = mysql_fetch_array($hasil);
	$judul = $data['judul'];
	$pengarang = $data['pengarang'];
	$penerbit = $data['penerbit'];
	$diskon = $data['diskon'];
	$harga = $data['harga'];

echo'
<html>
	<head>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/body.css" rel="stylesheet">
	</head>
	<body>
		<div class="container2">
			<center>
						<div class="menuJual">
							<h2>Penjualan</h2>
							<form action="simpan_kasir.php?id='.$data['id'].'" method="post" enctype="multipart/form-data">
							<table>
								<tr>
									<td class="tabel-feedback-kiri">Judul Buku : </td>
									<td class="tabel-feedback-kanan">'.$judul.'</td>
								</tr>
								<tr>
									<td class="tabel-feedback-kiri">Pengarang : </td>
									<td class="tabel-feedback-kanan">'.$pengarang.'</td>
								</tr>
								<tr>
									<td class="tabel-feedback-kiri">Penerbit : </td>
									<td class="tabel-feedback-kanan">'.$penerbit.'</td>
								</tr>
								<tr>
									<td class="tabel-feedback-kiri">Harga : </td>
									<td class="tabel-feedback-kanan">Rp. '.number_format($harga,2,",",".").'</td>
								</tr>
								<tr>
									<td class="tabel-feedback-kiri">Jumlah Beli  </td>
									<td class="tabel-feedback-kanan">Status</td>
								</tr>
								<tr>
									<td class="tabel-feedback-kiri"><input class="form-control-kiri-rp" style="width:80%;" id="jual" name="jual" type="text" maxlength="2" height="30px"></td>
									<td class="tabel-feedback-kanan">
											<select name="statushmj" class="status-form"  id="statushmj" style="width:55%;">
											<option><center>Umum</option>
											<option>Anggota Inti</option>
										</select></td>
								</tr>
								<tr>
									<td colspan="2"><center><input class="button-tanggapan" name="submit" type="submit" value="submit"></center> </td>
								</tr>
							</table>
						</form>
						</div>
				</center>
			</div>
	</body>
</html>';
}
else{ //jika tidak terdaftar, kembalikan user ke login.html 
header( "Location: mlebu.html" ); }
?>