<!DOCTYPE html>
<html>
<head>
	<link href="css/style.css" rel="stylesheet">
	<script type="text/javascript" src="js/jquery-1.2.3.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
	$().ajaxStart(function() {
		$('#loading').show();
		$('#result').hide();
	}).ajaxStop(function() {
		$('#loading').hide();
		$('#result').fadeIn('slow');
	});

	$('#myForm').submit(function() {
		$.ajax({
			type: 'POST',
			url: $(this).attr('action'),
			data: $(this).serialize(),
			success: function(data) {
				$('#result').html(data);
			}
		})
		return false;
	});
})
</script>
		</head>
<body>
	<div class="container2" id="wajib" style="position:static;">
		<center>
			<form id="myForm" method="post" action="hasillaporan.php">
			<h1>LAPORAN</h1>
			<span class="teksnya"><img src="img/search.png" width="10px" height="10px"/></span> 
			<select name="status" id="status" class="caribuku"  onkeyup=lihat(this.value)>
											<option>Andi Publisher</option>
											<option>Lokomedia</option>
											<option>Graha Ilmu</option>
											<option>Gava Media</option>
											<option>HMJ TI</option>
										</select>
			<input type="submit" value="SUBMIT" class="button-tanggapan" style="height : 34px;"/>
			</form>
		</center>
	
	<?php
	
	if(!isset($_SESSION['username'])){
	echo '<script language="javascript">  
				alert("Anda Tidak dapat Mengakses Halaman Ini");  
				window.location="mlebu.html";  
				</script>';
	}
	else{
	echo'<table width="100%"  cellpadding="3" cellspacing="1">
	
	
  </tr>
  </table>';	
	}
  ?>
	</div>
	<center><div id="loading" style="display:none; margin-top:10px"><img src="img/loading.gif" alt="loading..." /></div></center>
	<div id="result" style="display:none;"></div>
	</div>
</body>
</html>