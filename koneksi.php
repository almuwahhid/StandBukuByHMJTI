<?php
//localhost
//root
//buku_tamu
	error_reporting(E_ALL ^ E_DEPRECATED);
	 $host = "localhost";
	 $user = "root";
	 $pass = "";
	 $dbName = "db_stanbuku";
	 
	 $kon = mysql_connect($host, $user, $pass);
	 if (!$kon)
		die("Gagal Koneksi...");
		
	 include "database.php";		    

	$sqlTabelBukuTamu = "create table if not exists profil (
					nomor int(3) auto_increment not null primary key,
					nama varchar(40) not null,
					status varchar(15) not null, 
					tanggapan text(1000) not null default '',
					KEY(nama) )";
					
	$sqlListBuku = "create table if not exists listbuku(
					id int(4) auto_increment not null primary key,
					judul varchar(300) not null,
					penerbit varchar(40) not null,
					pengarang varchar (70) not null,
					harga int(7) not null default 0,
					diskon int(3) not null default 0,
					jumlah int(3) not null default 0,
					KEY(judul) )";
		
	$sqlLogin = "create table if not exists admin(
					id int auto_increment primary key,
					username varchar(20) not null,
					password varchar(40) not null, 
					KEY(username) )";
	$sqlhmj = "create table if not exists hmj(
					id int auto_increment primary key,
					judul varchar(300) not null,
					penerbit varchar(40) not null,
					pengarang varchar (70) not null,
					harga int(7) not null default 0,
					status varchar(15) not null,
					jumlah int(3) not null default 0,
					diskon int(3) not null default 0,
					KEY(judul) )";
	$sqlpenerbit = "create table if not exists penerbit(
					id int auto_increment primary key,
					judul varchar(300) not null,
					penerbit varchar(40) not null,
					pengarang varchar (70) not null,
					harga int(7) not null default 0,
					diskon int(3) not null default 0,
					jumlah int(3) not null default 0,
					KEY(penerbit) )";
					
	$sqllaporan = "create table if not exists lapharian(
						id int auto_increment primary key,
						tanggal int(3) not null default 0,
						judul varchar(300) not null,
						penerbit varchar(40) not null,
						pengarang varchar (70) not null,
						harga int(7) not null default 0,
						status varchar(15) not null,
						jumlah int(3) not null default 0,
						diskon int(3) not null default 0,
						KEY(judul) )";
					
	mysql_query ($sqlTabelBukuTamu) or die("Gagal Buat Tabel Buku Tamu ");
	mysql_query ($sqlLogin) or die("Gagal Buat Tabel Login ");
	mysql_query ($sqlListBuku) or die("Gagal Buat Tabel List Buku ");
	mysql_query ($sqlhmj) or die("Gagal Buat Tabel List Buku ");
	mysql_query ($sqlpenerbit) or die("Gagal Buat Tabel List Buku ");
	mysql_query ($sqllaporan) or die("Gagal Buat Tabel List Buku ");
?>