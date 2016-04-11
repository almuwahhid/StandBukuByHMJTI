<?php
if(isset($_SESSION['username'])){
echo'<html>
	<head>
	<link href="css/style.css" rel="stylesheet">
	</head>
	<body>
		<div class="container2">
			<center>
				<div class="containerinput">
				<form name="forminput" method="post" action="">
					<table width="100%">
										<tr>
											<td class="tabel-feedback-kanan">Judul Buku :</td>
											<td class="tabel-feedback-kiri">Penerbit :</td>
										</tr>
										<tr>
											<td class="tabel-feedback-kanan"><input class="form-control-kiri" id="judul" name="judul" type="text" maxlength="300" height="30px"></td>
											<td class="tabel-feedback-kiri">
												<select name="penerbit" class="status-form">
													<option>Andi Publisher</option>
													<option>Graha Ilmu</option>
													<option>Gava Media</option>
													<option>Lokomedia</option>
												</select>
											</td>
										</tr>
										<tr>
											<td class="tabel-feedback-kanan">Harga :</td>
											<td class="tabel-feedback-kiri">Jumlah :</td>
										</tr>
										<tr>
											<td class="tabel-feedback-kanan">Rp. <input class="form-control-kiri-rp" id="harga" name="harga" type="text" maxlength="10" height="30px"></td>
											<td class="tabel-feedback-kiri"><input class="form-control-kiri" id="jumlah" name="jumlah" type="text" maxlength="3" height="30px"></td>
										</tr>
										<tr>
											<td colspan="2"><center>Pengarang : </center></td>
										</tr>
										<tr>
											<td colspan="2"><center><input class="form-control-kiri" name="pengarang" type="text" maxlength="150" height="30px"></center></td>
										</tr>
										<tr>
											<td colspan="2"><center><input class="button-tanggapan" name="submit" type="submit" value="submit"></center></td>
										</tr>
									</table>
					</form>
			</center>
		</div>
	</body>
</html>';


$menu=isset($_POST["submit"]);
		if ($menu=="submit") {  
				//Membuat Koneksi Ke Database  
		//validasi data yang kosong  
			if (empty($_POST['judul']) || empty($_POST['harga']) || empty($_POST['jumlah'])) {  
				echo '<script language="javascript">  
				alert("Kolom Tidak Boleh Kosong");  
				window.location="halamanadmin.php?menu=inputbuku";  
				</script>';  
				exit();
			}
			else {
				if($_POST['penerbit']=="Andi Publisher")
							$diskon = 10;
				elseif($_POST['penerbit']=="Graha Ilmu")
					$diskon = 15;
				elseif($_POST['penerbit']=="Gava Media")
					$diskon = 12;
				elseif($_POST['penerbit']=="Lokomedia"){
					if($_POST['harga']>60000){
						$diskon = 25;
					}
					else{
						$diskon = 15;
					}
				}
					
				include "koneksi.php";	
				$sql = "INSERT INTO listbuku SET  
										judul = '$_POST[judul]',
                                        penerbit = '$_POST[penerbit]', 
										pengarang = '$_POST[pengarang]',
                                        harga = '$_POST[harga]', 
										diskon = '$diskon',
                                        jumlah='$_POST[jumlah]'";
				$hasil = mysql_query($sql);
				if(!$hasil){
					echo '<script type="text/javascript">  
					alert("Gagal");  
					</script>'; 
				}
				else{
					echo '<script type="text/javascript">  
					alert("Terima Kasih Banyak");  
					</script>'; 
				}
				exit;  
			}  
		}
	}
	else{ //jika tidak terdaftar, kembalikan user ke login.html 
header( "Location: mlebu.html" ); }
?>