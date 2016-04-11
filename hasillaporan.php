<?php 
include "koneksi.php";	
 session_start();
$kata = $_POST['status'];



if(!isset($_SESSION['username'])){
	echo "Anda Harus Login dahulu";
}
else{
	
	//Perhitungan HMJ TI
	if($kata=="HMJ TI"){
		$query = mysql_query("select * from hmj order by id asc"); 
	}
	else{
			$query = mysql_query("select * from penerbit where penerbit like '$kata' order by id asc");
	}
	$nomer=0;
	$totalUntung=0;
	$totalbuku=0;
	$totalbruto=0;
	$found=mysql_num_rows($query);
	echo'<table width="100%" cellpadding="3" cellspacing="1" style="text-align:center;">
	<tr >
    <th class="tabel_buku" width="3%" bgcolor="#FFCC00">No.</th>
	<th class="tabel_bukubuku" width="30%" bgcolor="#FFCC00">Judul</th>
    <th class="tabel_buku" width="10%" bgcolor="#FFCC00">Penerbit</th>
	<th class="tabel_bukubuku" width="16%" bgcolor="#FFCC00" >Pengarang</th>
    <th class="tabel_buku" width="9%" bgcolor="#FFCC00">Harga(Rp.)</th>
	<th class="tabel_buku" width="9%" bgcolor="#FFCC00">Status</th>
	<th class="tabel_buku" width="3%" bgcolor="#FFCC00">Terjual</th>
	<th class="tabel_buku" width="11%" bgcolor="#FFCC00">Qty</th>
	<th class="tabel_buku" width="9%" bgcolor="#FFCC00">Untung</th></tr>';
	if($kata=="HMJ TI"){
		while($k=mysql_fetch_array($query)){
		echo '<tr ><td class="tabel_buku" width="3%">'.++$nomer.".".'</td>'; 
		echo '<td class="tabel_buku" width="30%" >'.$k['judul'].'</td>'; 
		echo '<td class="tabel_buku" width="10%">'.$k['penerbit'].'</td>'; 
		$penerbit = $k['penerbit'];
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
		echo '<td class="tabel_buku" width="16%">'.$k['pengarang'].'</td>'; 
		echo '<td class="tabel_buku" width="9%">'.number_format($k['harga'],2,",",".").'</td>'; 
		echo '<td class="tabel_buku" width="9%">'.$k['status']."/".$k['diskon']."%".'</td>';
		echo '<td class="tabel_buku" width="3%">'.$k['jumlah'].'</td>';
		$qty=$k['jumlah']*$k['harga'];
		echo '<td class="tabel_buku" width="11%">'.number_format($qty,2,",",".").'</td>'; 
		$untung=((($diskpen-$k['diskon'])/100)*$k['harga']);
		echo '<td class="tabel_buku" width="9%">'.number_format($untung,2,",",".").'</td>'; 		
		echo '</tr>'; 
		$totalUntung = $totalUntung + $untung;
		$totalbuku = $totalbuku + $k['jumlah'];
		$totalbruto = $totalbruto + $k['harga'];
		}
	}
	else{
		while($k=mysql_fetch_array($query)){
		echo '<tr ><td class="tabel_buku" width="3%">'.++$nomer.".".'</td>'; 
		echo '<td class="tabel_buku" width="30%" >'.$k['judul'].'</td>'; 
		echo '<td class="tabel_buku" width="10%">'.$k['penerbit'].'</td>'; 
		$penerbit = $k['penerbit'];
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
		echo '<td class="tabel_buku" width="16%">'.$k['pengarang'].'</td>'; 
		echo '<td class="tabel_buku" width="9%">'.number_format($k['harga'],2,",",".").'</td>'; 
		echo '<td class="tabel_buku" width="9%">'.$k['diskon']."%".'</td>';
		echo '<td class="tabel_buku" width="3%">'.$k['jumlah'].'</td>';
		$qty=$k['jumlah']*$k['harga'];
		echo '<td class="tabel_buku" width="11%">'.number_format($qty,2,",",".").'</td>'; 
		$untung=($k['harga']-((($diskpen)/100)*$k['harga']));
		echo '<td class="tabel_buku" width="9%">'.number_format($untung,2,",",".").'</td>'; 		
		echo '</tr>'; 
		$totalUntung = $totalUntung + $untung;
		$totalbuku = $totalbuku + $k['jumlah'];
		$totalbruto = $totalbruto + $k['harga'];
		}
	}
	echo"</table>";
	echo'<center><span style="font-weight:bolder; font-size:21px; text-align:center; color:red;"><h2>Total Keuntungan '.$kata.' : Rp. '.number_format($totalUntung,2,",",".").'</h2></span>';
	echo'<span style="font-weight:bolder; font-size:21px; text-align:center; color:red;"><h3>Total Buku Terjual : '.$totalbuku.' Buku</h3></span>';
	echo'<span style="font-weight:bolder; font-size:21px; text-align:center; color:red;"><h3>Total Bruto '.$kata.' : Rp. '.number_format($totalbruto,2,",",".").'</h3></span></center>';
	 }
die();
?>