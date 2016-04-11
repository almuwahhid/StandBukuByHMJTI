<?php
if(isset($_SESSION['username'])){
	include "koneksi.php";
	$nomer=0;
	echo'
<html>
<head>
	<link href="css/style.css" rel="stylesheet">
		</head>
<body>
	<div class="container2">
	<table width="100%"  cellpadding="3" cellspacing="1" style="text-align:center;">
	<tr >
    <th class="tabel_buku" width="3%" bgcolor="#FFCC00">No.</th>
	<th class="tabel_bukubuku" width="5%" bgcolor="#FFCC00">Tanggal</th>
	<th class="tabel_bukubuku" width="20%" bgcolor="#FFCC00">Judul</th>
    <th class="tabel_bukubuku" width="20%" bgcolor="#FFCC00" >Pengarang</th>
    <th class="tabel_buku" width="12%" bgcolor="#FFCC00">Penerbit</th>
	<th class="tabel_buku" width="10%" bgcolor="#FFCC00">Harga(Rp.)</th>
    <th class="tabel_buku" width="6%" bgcolor="#FFCC00">Diskon(%)</th>
	<th class="tabel_buku" width="6%" bgcolor="#FFCC00">Harga(Diskon)</th>
	<th class="tabel_buku" width="6%" bgcolor="#FFCC00">Status</th>
	<th class="tabel_buku" width="6%" bgcolor="#FFCC00">Jumlah</th>
  </tr>';
  $total = 0;
	$query = mysql_query("select * from lapharian order by id asc");
		while($k=mysql_fetch_array($query)){ 
		echo '<tr><td class="tabel_buku" width="3%">'.++$nomer.".".'</td>'; 
		echo '<td class="tabel_buku" width="5%">'.$k['tanggal']."/03/2015".'</td>'; 
		echo '<td class="tabel_buku" width="20%">'.$k['judul'].'</td>'; 
		echo '<td class="tabel_buku" width="20%">'.$k['pengarang'].'</td>'; 
		echo '<td class="tabel_buku" width="12%">'.$k['penerbit'].'</td>'; 
		echo '<td class="tabel_buku" width="10%">Rp. '.number_format($k['harga'],2,",",".").'</td>'; 
		echo '<td class="tabel_buku" width="6%">'.$k['diskon']."%".'</td>'; 
		echo '<td class="tabel_buku" width="6%">'."Rp. ".number_format(($k['harga']-($k['harga']*$k['diskon']/100)),2,",",".").'</td>'; 
		echo '<td class="tabel_buku" width="6%">'.$k['status'].'</td>'; 
		echo '<td class="tabel_buku" width="6%">'.$k['jumlah'].'</td></tr>'; 
		$total = $total + (($k['harga']-($k['harga']*$k['diskon']/100))*$k['jumlah']);
		}	
  echo'</table>
  <center><span style="font-weight:bolder; font-size:21px; text-align:center; color:red;"><h2>Total Bruto : Rp. '.number_format($total,2,",",".").'</h2></span></center>
	</div>
</body>
</html>';
}
else{ //jika tidak terdaftar, kembalikan user ke login.html 
header( "Location: mlebu.php" ); }
?>