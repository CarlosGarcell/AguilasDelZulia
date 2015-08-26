<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="/css/master.css">
		<link rel="stylesheet" type="text/css" href="/css/home.css">
	</head>

	<body>

		<!-- Top advertisement banner -->
		<div class="row">
			<section class="adBanner-top col-xs-12">
				<div class="adBanner-top-wrapper">
					<div class="adBanner-top-text col-xs-7">
						<h3>¿QUIERES PUBLICAR EN ESTA P&Aacute;GINA?</h3>
					</div>
					<div class="adBanner-top-button col-xs-4">
						<a href="#">PUBLICIDAD AQU&Iacute;</a>
					</div>
				</div>
			</section>
		</div>

		<!-- Logo, team name and menu -->
		<div class="container">
			<section class="teamInfo page-header col-xs-12">
				<div class="row">
					<div class="col-md-3">
						<img src="/images/aguilas-logo.jpg">
					</div>
					<div class="col-md-3 teamName">
						<h1>&Aacute;guilas del Zulia</h1>
					</div>
				</div>
			</section>
		</div>
		<div class="mainMenu container">
			<section>
				<ul class="nav nav-pills">
					<li role="presentation"><a href="/">INICIO</a></li>
					<li role="presentation"><a href="#">EQUIPO</a></li>
					<li role="presentation"><a href="news">NOTICIAS</a></li>
					<li role="presentation"><a href="#">CONTACTO</a></li>
				</ul>
			</section>
		</div>

		@yield('content')

		<!-- Bottom advertisement banner -->
		<div class="row">
			<section class="adBanner-bottom col-xs-12">
				<div class="adBanner-bottom-wrapper">
					<div class="adBanner-bottom-text col-xs-7">
						<h3>¿QUIERES PUBLICAR EN ESTA P&Aacute;GINA?</h3>
					</div>
					<div class="adBanner-bottom-button col-xs-4">
						<a href="#">PUBLICIDAD AQU&Iacute;</a>
					</div>
				</div>
			</section>
		</div>

		<!-- Footer -->
		<!-- Bottom advetisement banner -->
		<!-- <footer class="footer">
			<nav class="navbar navbar-inverse" role="navigation">
		  <div class="container-fluid"> -->
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <!-- <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">&Aacute;guilas</a>
		      <p class="navbar-text">Copyright 2013 All Display. All rights reserved. &copy;</p>
		    </div> -->

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="/">INICIO</a></li>
		        <li><a href="team">EQUIPO</a></li>
		        <li><a href="news">NOTICIAS</a></li>
		        <li><a href="contact">CONTACTO</a></li>
		      </ul>		        		  
		    </div>
		  </div> -->
		<!-- </nav>
		</footer> -->

		<!-- Scripts -->
		<script type="text/javascript" src="/js/jquery-1.11.3.js"></script>
		<script type="text/javascript" src="/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="/js/onScrollFixedNavbar.js"></script>
		<script type="text/javascript" src="/js/LinkBehavior.js"></script>
		<script type="text/javascript" src="/js/Scoreboard.js"></script>
	</body>
</html>