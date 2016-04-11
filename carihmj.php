<?php 
include "koneksi.php";	
 session_start();
$kata = $_POST['r'];

if(!isset($kata) || empty($kata)){
		$query = mysql_query("select * from listbuku order by id asc"); 
	}
	else{
		$query = mysql_query("select * from listbuku where judul like '%$kata%' or 
	 pengarang like '%$kata%' or penerbit like '%$kata%' order by id asc"); 
	}
	$nomer=0;
	$found=mysql_num_rows($query);
	echo'<table width="100%" cellpadding="3" cellspacing="1" style="text-align:center;">';
	if($found>0){
		while($k=mysql_fetch_array($query)){ 
		echo '<tr ><td class="tabel_buku" width="3%">'.++$nomer.".".'</td>'; 
		echo '<td class="tabel_buku" width="20%" >'.$k['judul'].'</td>'; 
		echo '<td class="tabel_buku" width="20%">'.$k['pengarang'].'</td>'; 
		echo '<td class="tabel_buku" width="9%">'.number_format($k['harga'],2,",",".").'</td>'; 
		echo '<td class="tabel_buku" width="10%">'.$k['penerbit'].'</td>'; 
		$penerbit = $k['penerbit'];
		$harga = $k['harga'];
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
		echo '<td class="tabel_buku" width="6%">'.$diskon."%".'</td>';
		echo '<td class="tabel_buku" width="8%">'.number_format(($k['harga']-($k['harga']*($diskon/100))),2,",",".").'</td>'; 		
		echo '<td class="tabel_buku" width="6%">'.$k['jumlah'].'</td>'; 
		echo '<td class="tabel_buku" width="4%"><span><a href="kassir.php?id='. $k['id'].'">Kassir</a></span></td></tr>'; 
		}
	}
	else{
		echo"<tr>";
		echo'<td class="tabel_buku" colspan="7"><center>Maaf Buku yang anda cari tidak tersedia</center></td>';
		echo"</tr>";
	}
	 echo"</table>";
?>