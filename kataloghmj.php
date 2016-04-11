<html>
<head>
	<link href="css/style.css" rel="stylesheet">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script> 
var drz;
function buatajax(){
    if (window.XMLHttpRequest){
        return new XMLHttpRequest(); 
    }
    if (window.ActiveXObject){
        return new ActiveXObject("Microsoft.XMLHTTP"); 
    }
    return null; 
}
/*
function buatajaxkiri(){
    if (window.XMLHttpRequest){
        return new XMLHttpRequest(); 
    }
    if (window.ActiveXObject){
        return new ActiveXObject("Microsoft.XMLHTTP"); 
    }
    return null; 
}
*/

function lihat(kata){ 
    if(kata.length==0){ 
        drz = buatajax(); 
        var url="carihmj.php"; 
        drz.onreadystatechange=stateChanged; 
        var params = "r="+kata; 
        drz.open("POST",url,true); 
        //beberapa http header harus kita set kalau menggunakan POST 
        drz.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
        drz.setRequestHeader("Content-length", params.length); 
        drz.setRequestHeader("Connection", "close"); 
		      drz.send(params); 
    }
	else{ 
        drz = buatajax(); 
        var url="carihmj.php"; 
        drz.onreadystatechange=stateChanged; 
        var params = "r="+kata; 
        drz.open("POST",url,true); 
        //pengesetan http header  ketika menggunakan POST 
        drz.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
        drz.setRequestHeader("Content-length", params.length); 
        drz.setRequestHeader("Connection", "close"); 
		      drz.send(params); 
    } 
} 

function stateChanged(){ 
var data; 

    if (drz.readyState==4 && drz.status==200){ 
        data=drz.responseText; 
        if(data.length>0){ 
            document.getElementById("kotaksugest").innerHTML = data; 
            document.getElementById("kotaksugest").style.visibility = "";
			document.getElementById("kotaksugest").fadeIn('slow');
        }else{ 
            document.getElementById("kotaksugest").innerHTML = ""; 
            document.getElementById("kotaksugest").style.visibility = "hidden"; 
        } 
    }
} 


//harga1
//kata = kurangdr
//lihatkiri = lihat
//hrz = drz
/*function lihatkiri(kurangdr){ 
        hrz = buatajaxkiri(); 
        var url="cari.php"; 
        hrz.onreadystatechange=statekiriChanged; 
        var paramskiri = "s="+kurangdr; 
        hrz.open("POST",url,true); 
        //pengesetan http header  ketika menggunakan POST 
        hrz.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
        hrz.setRequestHeader("Content-length", paramskiri.length); 
        hrz.setRequestHeader("Connection", "close"); 
		      hrz.send(paramskiri);  
} 

function statekiriChanged(){ 
var datakiri; 

    if (hrz.readyState==4 && hrz.status==200){
        datakiri=hrz.responseText; 
        if(datakiri.length>0){
            document.getElementById("kotaksugest").innerHTML = datakiri; 
            document.getElementById("kotaksugest").style.visibility = ""; 
        }else{
            document.getElementById("kotaksugest").innerHTML = ""; 
            document.getElementById("kotaksugest").style.visibility = "hidden"; 
        }
    }
}
*/
 
function daleman(kata){ 
    document.getElementById("kata").value = kata; 
    document.getElementById("kotaksugest").style.visibility = "hidden"; 
    document.getElementById("kotaksugest").innerHTML = ""; 
}
/*
function isi(kurangdr){ 
    document.getElementById("kurangdr").value = kurangdr; 
    document.getElementById("kotaksugest").style.visibility = "hidden"; 
    document.getElementById("kotaksugest").innerHTML = ""; 
}
 */

</script>
		</head>
<body>
	<div class="container2" id="wajib">
		<center>
			<form>
			<span class="teksnya"><img src="img/search.png" width="10px" height="10px"/></span> 
			
			<input class="caribuku" type=text id=kata name=kata  placeholder="Judul / Pengarang / Penerbit" onkeyup=lihat(this.value)>  	
			<span style=" font-size:23px; font-family: 'Century Gothic'; font-weight:bolder; color:red; "> |</span> 
			<span class="teksnya">Rp.</span> 
			
			<input class="cariharga" type=text id=kurangdr name=kurangdr placeholder=">_< it does'nt work" onkeyup=lihatkiri(this.value)> 
			<span style=" font-size:23px; font-family: 'Century Gothic'; font-weight:bolder; color:red; "> &nbsp;< </span> <img src="img/book.png" width="35px" height="35px " style="margin-bottom:-13px;" />
			<span style=" font-size:23px; font-family: 'Century Gothic'; font-weight:bolder; color:red; "> >  </span>
			<span class="teksnya">Rp.</span> 
			
			<input class="cariharga"  type=text id=lbhdr name=lbhdr placeholder=">_< it does'nt work" onkeyup=lihatkanan(this.value)>
			</form>
		</center>
	
	<?php
	if(!isset($_SESSION['username'])){
	echo'<table width="100%"  cellpadding="3" cellspacing="1" style="padding-right: 16px;">
	<tr >
    <th class="tabel_buku" width="3%" bgcolor="#FFCC00">No.</th>
	<th class="tabel_bukubuku" width="20%" bgcolor="#FFCC00">Judul</th>
    <th class="tabel_bukubuku" width="20%" bgcolor="#FFCC00" >Pengarang</th>
    <th class="tabel_buku" width="15%" bgcolor="#FFCC00">Harga(Rp.)</th>
    <th class="tabel_buku" width="12%" bgcolor="#FFCC00">Penerbit</th>
	<th class="tabel_buku" width="6%" bgcolor="#FFCC00">Diskon(%)</th>
	<th class="tabel_buku" width="6%" bgcolor="#FFCC00">Tersedia</th>
  </tr>
  </table>';
	}
	else{
	echo'<table width="100%"  cellpadding="3" cellspacing="1" style="padding-right: 16px;">
	<tr >
    <th class="tabel_buku" width="3%" bgcolor="#FFCC00">No.</th>
	<th class="tabel_bukubuku" width="20%" bgcolor="#FFCC00">Judul</th>
    <th class="tabel_bukubuku" width="20%" bgcolor="#FFCC00" >Pengarang</th>
    <th class="tabel_buku" width="9%" bgcolor="#FFCC00">Harga(Rp.)</th>
    <th class="tabel_buku" width="10%" bgcolor="#FFCC00">Penerbit</th>
	<th class="tabel_buku" width="6%" bgcolor="#FFCC00">Diskon(%)</th>
	<th class="tabel_buku" width="8%" bgcolor="#FFCC00">Harga(Diskon)</th>
	<th class="tabel_buku" width="6%" bgcolor="#FFCC00">Tersedia</th>
	<th class="tabel_buku" width="4%" bgcolor="#FFCC00">Jual</th>
  </tr>
  </table>';	
	}
  ?>
	</div>
	<div id="kotaksugest" class="daftarBuku">
	</div>
</body>
</html>