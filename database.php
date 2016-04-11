<?php
	$hasil = mysql_select_db($dbName);
	 if (!$hasil) {
		$hasil = mysql_query("CREATE DATABASE $dbName");
		if (!$hasil)
			die("Gagal Buat Database");
		else
			$hasil = mysql_select_db($dbName);
			if (!$hasil) die ("Gagal Konek Database");
}
?>