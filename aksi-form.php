<?php
	include "koneksi.php";	
	$nama = $_POST['nama'];
	$status = $_POST['status'];
	$tanggapan = $_POST['tanggapan'];
	if(empty($_POST['nama']) || empty($_POST['tanggapan'])){
		echo json_encode(array('gue'=>false));
	}
	else{
		$hasil = mysql_query("INSERT INTO profil SET  
										nama = '$nama',
                                        status = '$status', 
										tanggapan = '$tanggapan'
										");
		if ($hasil){
			echo json_encode(array('gue'=>true));
		}
		else{
			echo json_encode(array('gue'=>false));
		}
	}
		
?>