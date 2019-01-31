<?php

session_start();
if(!isset($_SESSION["user"])) {
	//Jika belum login akan teralihkan ke halaman login.php
	header("Location: login.php");
} else {
	//Membuat session user menjadi object
	$user = json_decode(json_encode($_SESSION["user"]), FALSE);
}