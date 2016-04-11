<?php 
	//function start lagi 
	session_start(); 
	//cek apakah session terdaftar 
	//session terdaftar, saatnya logout 
		session_unset(); 
		session_destroy(); 
		header( "Location: mlebu.html" );
?> 