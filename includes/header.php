<?php
	if(!isset($page)) $page = "unknown";

	// if($page == "home")
	// 	$logoPath = "assets/img/logo-white.png";
	// else
	// 	$logoPath = "assets/img/logo.png";

	$logoPath = "assets/img/global-goals-logo.png";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Amazon Drilling</title>
	<meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#003a75">
    <meta name="apple-mobile-web-app-status-bar-style" content="#003a75">
    <meta name="theme-color" content="#003a75">
    <meta name="apple-mobile-web-app-status-bar-style" content="#003a75">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Walter Kimaro">


	<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/flexboxgrid.min.css">
	<link rel="stylesheet" href="assets/css/flex.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/<?php echo $page; ?>.css">
	<link rel="icon" href="logo.png">
</head>
<body class="show-na">
	<header>
		<div class="layout center justified section-wrapper">
			<a id="logo" href="<?php echo $page === "home" ? '#' : 'index.html';?>" class="layout vertica center">
				<img src="assets/img/logo-horizontal.svg" alt="Amazon Drilling logo">
			</a>

			<nav class="layout center" onclick="hideMenu()">
				<a href="<?php echo $page === "home" ? '#' : 'index.html';?>" class="layout center-center <?php echo $page === "home" ? 'active' : '';?>">Home</a>
				<a href="<?php echo $page === "about" ? '#' : 'about.html';?>" class="layout center-center <?php echo $page === "about" ? 'active' : '';?>">About Us</a>
				<a href="<?php echo $page === "services" ? '#' : 'services.html';?>" class="layout center-center <?php echo $page === "services" ? 'active' : '';?>">Our Services</a>
				<a href="<?php echo $page === "contacts" ? '#' : 'contacts.html';?>" class="layout center-center <?php echo $page === "contacts" ? 'active' : '';?>">Contact Us</a>
				<!-- <a href="#" class="layout center-center">Sustainability</a> -->
				<!-- <a href="#" class="layout center-center">Fleets</a> -->
			</nav>

			<div id="callUs" class="layout center">
				CALL US : <strong>+255 743 25 00 05</strong>
			</div>

			<button id="menuToggler" class="for-mob" onclick="toggleMenu()">
				<svg width="24px" height="24px" viewBox="0 0 512 512"><path d="M501.3 96H10.7C4.8 96 0 100.8 0 106.7s4.8 10.7 10.7 10.7h490.7c5.9 0 10.7-4.8 10.7-10.7S507.2 96 501.3 96z"/><path d="m501.3 245.3h-490.7c-5.9 0-10.7 4.8-10.7 10.7s4.8 10.7 10.7 10.7h490.7c5.9 0 10.7-4.8 10.7-10.7s-4.8-10.7-10.7-10.7z"/><path d="m501.3 394.7h-490.7c-5.9 0-10.7 4.8-10.7 10.7s4.8 10.7 10.7 10.7h490.7c5.9 0 10.7-4.8 10.7-10.7 0-5.9-4.8-10.7-10.7-10.7z"/></svg>
				<svg width="24px" height="24px" viewBox="0 0 64 64"><path d="M28.9 31.8L0.6 60.1c-0.8 0.8-0.8 2.1 0 2.8 0.4 0.4 0.9 0.6 1.4 0.6 0.5 0 1-0.2 1.4-0.6l28.5-28.5 28.5 28.5c0.4 0.4 0.9 0.6 1.4 0.6 0.5 0 1-0.2 1.4-0.6 0.8-0.8 0.8-2.1 0-2.8L35.1 31.8 63.4 3.4c0.8-0.8 0.8-2.1 0-2.8 -0.8-0.8-2.1-0.8-2.8 0L32 29.2 3.4 0.6c-0.8-0.8-2.1-0.8-2.8 0 -0.8 0.8-0.8 2.1 0 2.8L28.9 31.8z"/></svg>
			</button>
		</div>
	</header>
	<script>
		var header = document.querySelector('header');
		function toggleMenu(){
			if(!header.classList.contains('nav-open'))
				header.classList.add('nav-open');
			else
				hideMenu();
		}
		
		function hideMenu(){
			header.classList.remove('nav-open');
		}
	</script>