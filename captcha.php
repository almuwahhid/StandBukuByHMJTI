<?php
 
//aktifkan session
session_start();
 
header("Content-type: image/png");
 
// beri nama session dengan nama Captcha
$_SESSION["Captcha"]="";
 
//tentukan ukuran gambar
$gbr = imagecreate(124, 45);
 
//warna background gambar
imagecolorallocate($gbr, 251, 251, 251);
 
$grey = imagecolorallocate($gbr, 128, 128, 128);
 
$black = imagecolorallocate($gbr, 0, 0,0);
 
// tentukan font
$font = "gothic.TTF"; 
 
// membuat nomor acak dan ditampilkan pada gambar
for($i=0;$i<=5;$i++) {
	// jumlah karakter
	$nomor=rand(0, 9);
 
	$_SESSION["Captcha"].=$nomor;
 
	$sudut= rand(-25, 25);
 
	imagettftext($gbr, 20, $sudut, 8+15*$i, 25, $black, $font, $nomor);
 
	// efek shadow
	//imagettftext ($gbr, 20, $sudut, 9+15*$i, 26, $grey, $font, $nomor);
}
//untuk membuat gambar 
imagepng($gbr); 
imagedestroy($gbr);
?>