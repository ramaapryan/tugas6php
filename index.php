<!DOCTYPE html>
<html>
<head>
	<title>Tugas 6 php</title>
	<!-- menghubungkan dengan file css -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- menghubungkan dengan file jquery -->
	<script type="text/javascript" src="jquery.js"></script>

	<style>
		p.pf{
			text-align: center;
		}
	</style>
</head>
<body>
<!-- 
Author : diki alfarabi hadi 
Site : www.malasngoding.com
-->
<div class="content">
	<header>
		<h1 class="judul">Web Rama Apryan Lokanantha </h1>
		<!-- <h3 class="deskripsi">Membuat Halaman Web Dinamis Dengan PHP</h3> -->
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">HOME</a></li>
			<li><a href="index.php?page=tentang">ABOUT ME</a></li>
			<li><a href="index.php?page=resume">RESUME</a></li>
			<li><a href="index.php?page=portfolio">PORTFOLIO</a></li>
			<li><a href="index.php?page=skill">SKILL</a></li>
		</ul>
	</div>
 
	<div class="badan">

	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "home.php";
				break;
			case 'tentang':
				include "about.php";
				break;
			case 'resume':
				include "resume.php";
				break;
            case 'portfolio':
                include "portoflio.php";
                break;	
			case 'skill':
            	include "skill.php";
                break;				
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "home.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
<div class="content">
	<footer>
		<p class="pf">&copy; <b>2023 Rama company</b>. All rights reserved.</p>
	</footer>
</div>
</html>