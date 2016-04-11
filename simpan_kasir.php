<?php
	session_start();
	if(isset($_SESSION['username'])){
		$jual=$_POST['jual'];
		$id = $_GET['id'];
		$submit = $_POST['submit'];
		$statushmj = $_POST['statushmj'];
		include "koneksi.php";
		if ($submit == "submit") {
			$sql = "select * from listbuku where id = '$id'";
			$hasil = mysql_query($sql);
			if (!$hasil) die ('Gagal query...');
			$data = mysql_fetch_array($hasil);
			
			$judul = $data['judul'];
			$pengarang = $data['pengarang'];
			$penerbit = $data['penerbit'];
			$diskonawal = $data['diskon'];
			$harga = $data['harga'];
			$jumlah = $data['jumlah'];
			
			//DISKON PENERBIT ASLI
			if($penerbit == "Andi Publisher"){
				$diskpen = 20;
			}
			elseif($penerbit == "Gava Media"){
				$diskpen = 30;
			}
			elseif($penerbit == "Graha Ilmu"){
				$diskpen = 35;
			}
			elseif($penerbit == "Lokomedia"){
				$diskpen = 45;
			}
			
			//diskon statushmj
			if($statushmj == "Anggota Inti"){
					if($penerbit == "Andi Publisher"){
						$diskon = 15;
					}
					elseif($penerbit == "Gava Media"){
						$diskon = 20;
					}
					elseif($penerbit == "Graha Ilmu"){
						$diskon = 20;
					}
					elseif($penerbit == "Lokomedia"){
						if($harga > 60000){
							$diskon = 30;
						}
						else{
							$diskon = 25;
						}
					}
				}
				elseif($statushmj == "Umum"){
					$diskon = $diskonawal;
				}
			//jika jumlah yang di request lebih dari / sama dengan jumlah yang ada
			if($jumlah >= $jual){
					//PROSES LAPORAN HMJ TI
				
						//query pencocokan data
				$queryhmj = mysql_query("select * from hmj where judul = '$judul' AND penerbit ='$penerbit' AND pengarang ='$pengarang' AND status='$statushmj'"); 
				$foundhmj=mysql_num_rows($queryhmj);
				if($foundhmj>0){
					$queryhmjcek = mysql_query("select * from hmj where judul = '$judul' AND penerbit ='$penerbit' AND pengarang ='$pengarang' AND status='$statushmj'"); 
					$datahmj = mysql_fetch_array($queryhmjcek);
					$cookiehmj = $datahmj['jumlah'];
					$jumlahhmj = $cookiehmj+$jual; 
					$sqlhmj = "UPDATE hmj SET
						jumlah = '$jumlahhmj'
						where judul = '$judul' AND penerbit ='$penerbit' AND pengarang ='$pengarang' AND status='$statushmj'
						";
					$hasilhmj = mysql_query($sqlhmj);
						if(!$hasilhmj){
							echo "gagal update database hmj, ";
						}
						else{
							echo "berhasil update database hmj, ";
						}
				}
				else{
					$untunghmj = (($diskpen - $diskon)/100)*$harga;
					$sqlhmj = "INSERT INTO hmj SET
									judul= '$judul',
									penerbit = '$penerbit',
									pengarang = '$pengarang',
									harga = '$harga',
									status = '$statushmj',
									jumlah = '$jual',
									diskon = '$diskon'
									";
				$hasilhmj = mysql_query($sqlhmj);
						if(!$hasilhmj){
							echo "gagal tambah query hmj, ";
						}
						else{
							echo "berhasil tambah query hmj, ";
						}
				}
						
				
				//PROSES LAPORAN HARIAN
					$today = date("d");
					$querylaporan = mysql_query("select * from lapharian where judul = '$judul' AND penerbit ='$penerbit' AND pengarang ='$pengarang' AND status='$statushmj' AND tanggal='$today'"); 
					$foundlaporan=mysql_num_rows($querylaporan);
					
					if($foundlaporan>0){
					$querylaporancek = mysql_query("select * from lapharian where judul = '$judul' AND penerbit ='$penerbit' AND pengarang ='$pengarang' AND status='$statushmj' AND tanggal='$today' "); 
					$datalaporan = mysql_fetch_array($querylaporancek);
					$cookielaporan = $datalaporan['jumlah'];
					$jumlahlaporan = $cookielaporan+$jual; 
					$sqllaporan = "UPDATE lapharian SET
						jumlah = '$jumlahhmj'
						where judul = '$judul' AND penerbit ='$penerbit' AND pengarang ='$pengarang' AND status='$statushmj' AND tanggal='$today'
						";
					$hasillaporan = mysql_query($sqllaporan);
						if(!$hasillaporan){
							echo "gagal update database laporan, ";
						}
						else{
							echo "berhasil update database laporan, ";
						}
				}
				else{
					$sqllaporan = "INSERT INTO lapharian SET
									tanggal = '$today',
									judul= '$judul',
									penerbit = '$penerbit',
									pengarang = '$pengarang',
									harga = '$harga',
									status = '$statushmj',
									jumlah = '$jual',
									diskon = '$diskon'
									";
				$hasillaporan = mysql_query($sqllaporan);
						if(!$hasillaporan){
							echo "gagal tambah query laporan, ";
						}
						else{
							echo "berhasil tambah query laporan, ";
						}
				}
						
						
				//PROSES LAPORAN PENERBIT
				
						//query pencocokan data
				$querypenerbit = mysql_query("select * from penerbit where judul = '$judul' AND penerbit ='$penerbit' AND pengarang ='$pengarang' "); 
				$foundpenerbit=mysql_num_rows($querypenerbit);
				if($foundpenerbit>0){
					$querypenerbitcek = mysql_query("select * from penerbit where judul = '$judul' AND penerbit ='$penerbit' AND pengarang ='$pengarang' "); 
					$datapenerbit = mysql_fetch_array($querypenerbitcek);
					$cookiepenerbit = $datapenerbit['jumlah'];
					$jumlahpenerbit = $cookiepenerbit + $jual; 
					$sqlpenerbit = "UPDATE penerbit SET
						jumlah = '$jumlahpenerbit'
						where judul = '$judul' AND penerbit ='$penerbit' AND pengarang ='$pengarang'
						";
					$hasilpenerbit = mysql_query($sqlpenerbit);
						if(!$hasilpenerbit){
							echo "gagal update database penerbit, ";
						}
						else{
							echo "berhasil update database penerbit, ";
						}
				}
				else{
					$untungpenerbit = $harga - (($diskpen/100)*$harga);
					$sqlpenerbit = "INSERT INTO penerbit SET
									judul= '$judul',
									pengarang = '$pengarang',
									penerbit = '$penerbit',
									harga = '$harga',
									jumlah = '$jual',
									diskon = '$diskpen'
									";
				$hasilpenerbit = mysql_query($sqlpenerbit);
						if(!$hasilpenerbit){
							echo "gagal tambah query penerbit, ";
						}
						else{
							echo "berhasil tambah query penerbit, ";
						}
				}
				//PROSES UPDATE LIST BUKU
					$jumlahupdate = $jumlah - $jual;
					$sqlupdate = "UPDATE listbuku SET
					jumlah = '$jumlahupdate'
					where judul = '$judul' AND penerbit ='$penerbit' AND pengarang ='$pengarang'";
					$hasilupdate = mysql_query($sqlupdate);
						if(!$hasilupdate){
							echo "gagal update query listbuku, ";
						}
						else{
							echo "berhasil update query listbuku, ";
						}
					echo '<br><a href="halamanadmin.php?menu=penjualan">kembali</a>';
			}
			else{
				echo '<script language="javascript">  
					alert("Tidak Bisa Memproses Penjualan");  
					window.location="halamanadmin.php?menu=daftarbuku";  
					</script>';  
			}
		}
	}
	else{
		header( "Location: mlebu.html" );
	}
	?>