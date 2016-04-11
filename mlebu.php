<?php
//periksa apakah file ini tidak dipanggil secara langsung, jika dipanggil secara langsung
//maka user akan di kembalikan ke login.thml
if (!isset($_POST["username"]) || !isset($_POST["password"])) {
header( "Location: mlebu.html" );
}
//melihat apakah form telah diisi semua atau tidak. Jika tidak, user akan dikembalikan ke
//halaman login.html
else if (empty($_POST["username"]) || empty($_POST["password"])) {
//header( "Location: mlebu.html" );
echo '<script language="javascript">  
						alert("Username / Password tidak boleh kosong");  
						window.location="mlebu.html";  
						</script>';
}
else{
//mengubah username dan password yang telah dimasukkan menjadi sebuah variabel dan meng-enkripsi password ke md5
//INSERT INTO users (username, password) VALUES (â€˜testâ€™, md5(â€˜testâ€™)); 
$user = $_POST['username'];
$pass = md5($_POST['password']);
//variabel untuk koneksi ke database
$host = "localhost";
$username = "root" ; //user yang akan digunakan pada database.
$password = ""; //password dari username untuk database.
$database = "db_stanbuku"; //dari database yang dibuat tadi
//Melakukan koneksi ke database
$db = mysql_connect("$host", "$username", "$password") or die ("koneksi gagal nih, cek apakah variabel sudah benar apa belum");
//memilih database
mysql_select_db("$database", $db) or die ("Gagal memilih database");
$result=mysql_query("select * from admin where username='$user' AND password='$pass'", $db);
//melihat apakah username dan password yang dimasukkan benar
//menghitung jumlah baris dari query
$rowCheck = mysql_num_rows($result);
//jika benar maka
$data = mysql_fetch_array($result);
session_start();
if($_POST['nilaiCaptcha'] == $_SESSION['Captcha']){
    if($pass==$data['password']){
		// menyimpan username dan level ke dalam session
		$_SESSION['username'] = $data['username'];
		header('location: halamanadmin.php');
		}
		else {
		//jika $rowCheck = 0, berarti username atau password salah, atau tidak terdaftar di database
		echo '<script language="javascript">  
						alert("User atau Password kamu salah");  
						window.location="mlebu.html";  
						</script>';  
		}
	}
	else{
		echo '<script language="javascript">  
				alert("Captcha salah");  
				window.location="mlebu.html";  
				</script>';  
	}
}
?>