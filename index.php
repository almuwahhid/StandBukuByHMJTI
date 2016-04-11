
<html>
	 <head>
		<link href="css/flat.css" type="text/css" rel="stylesheet" >
		  <link href="css/style.css" type="text/css" rel="stylesheet" >
		  <link href="css/scroll.css" type="text/css" rel="stylesheet" >
		  <link href="css/alertify.core.css" rel="stylesheet" type="text/css">
		  <link href="css/alertify.css" rel="stylesheet" type="text/css">
		  <script type="text/javascript" src="js/jquery.min.js"></script>
		  <script type="text/javascript" src="js/alertify.min.js"></script>
		  <script type="text/javascript">
            $('document').ready(function() {
                $('#btn').click(function() {
                    var nama = $('#name').val();
                    var status = $('#status').val();
                    var tanggapan = $('#tanggapan').val();
                    var data = 'nama=' + nama + '&status=' + status + '&tanggapan=' + tanggapan;
                    $.ajax({
                        type: 'POST',
                        url: "aksi-form.php",
                        data: data,
						dataType : "json",
                        success: function(hasil) {
							if(hasil.gue){
								   alertify.alert("Terima Kasih Banyak", function (e) {
							if (e) {
							window.location="index.php";  
							} 
							});
								 }else{
								      alertify.alert("semua kolom harus diisi!!!");
								 }
                         },
						 error: function() {
						
						}
                    });
                });
            });
        </script>
		<script src="js/onepage.js"></script>
		<title>STAND BUKU 2015</title>
	</head>
	<body>
				<!--<header>
		<img src="img/twd-logo-mini.png" alt="logo twd mini">
		<h1><a href="http://www.tutorial-webdesign.com">Tutorial-WebDesign<small>.com</small></a></h1>
	</header>-->
	<div id="kepala" class="onepage-pagination">
		scroll me
	</div>
	<div class="main">
		
		<section class="page one">
			<div class="page-container">
				<div class="containernya">
					<img src="img/logo HMJ.png" width="100px" height="80px"/>
					<h2>Berikan komentar anda untuk kegiatan kami yang lebih baik </h2>
					<div class="tabel-feedback">
						<form name="form" method="post">  
							<table width="100%">
								<tr>
									<td class="tabel-feedback-kanan">Nama :</td>
									<td class="tabel-feedback-kiri">Status :</td>
								</tr>
								<tr>
									<td class="tabel-feedback-kanan"><input class="form-control-kiri" id="name" name="name" type="text" maxlength="40" size="20" height="30px"></td>
									<td class="tabel-feedback-kiri">
										<select name="status" class="status-form"  id="status">
											<option>Mahasiswa</option>
											<option>Dosen</option>
											<option>Lain - Lain</option>
										</select>
									</td>
								</tr>
								<tr>
									<td colspan="2">Tanggapan anda tentang kegiatan ini :</td>
								</tr>
								<tr>
									<td colspan="2">
										<textarea name="tanggapan" id="tanggapan" class="tanggapan-form"></textarea>
									</td>
								</tr>
								<tr>
									<td colspan="2"><center><input class="button-tanggapan" id="btn" type="button" value="SUBMIT"></center></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</section>
		
		<section class="page two">
			<div class="container2">
			<center>
				<h2>Katalog Buku</h2>
				<iframe src="katalogBuku.php">
					
				</iframe>
				</center>
			</div>
		</section>
	</div>
<script type="text/javascript">
	$(".main").onepage_scroll({
		sectionContainer: "section",
		easing: "cubic-bezier(0.180, 0.900, 0.410, 1.210)"
	});
	</script>
	</body>
</html>