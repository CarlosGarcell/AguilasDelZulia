@extends('master')

<head>
	<title>Home</title>
</head>

@section('content')

	<!-- Top advertisement banner -->
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
		<section class="homeMenu">
			<ul class="nav nav-pills">
				<li role="presentation"><a href="#">INICIO</a></li>
				<li role="presentation"><a href="#">EQUIPO</a></li>
				<li role="presentation"><a href="#">NOTICIAS</a></li>
				<li role="presentation"><a href="#">CONTACTO</a></li>
			</ul>
		</section>
	</div>
	
	<!-- Slidewshow -->
	<div class="jumbotron">
		<section class="slideshowContent">
			<h1>&Aacute;guilas del Zulia</h1>
			<p>Secci&oacute;n de prueba para la p&aacute;gina</p>
		</section>
	</div>

	<!-- Current game information -->
	<div class="currentGame col-md-12">
		<section class="col-md-1 col-xs-12 teams">
			<p>Alta del 9no</p>
			<p>Equipo</p>
			<p id="aguilas">&Aacute;guilas</p>
		</section>
		<!-- Current game scoreboard -->
		<section class="col-md-4 col-xs-12 currentGameScore">
			@for($i = 1; $i < 10; $i++)	
				<ul>
					<li>{{ $i }}</li>
					<li>0</li>
					<li id="aguilas">0</li>
				</ul>
			@endfor
		</section>
		<!-- Game stats -->
		<section class="col-md-2 col-xs-12 gameStats">
			<ul>
				<li>C</li>
				<li>0</li>
				<li id="aguilas">0</li>
			</ul>
			<ul>
				<li>H</li>
				<li>0</li>
				<li id="aguilas">0</li>
			</ul>
			<ul>
				<li>E</li>
				<li>0</li>
				<li id="aguilas">0</li>
			</ul>
		</section>
		<!-- Diamond -->
		<section class="col-md-2 col-xs-12"></section>
		<!-- Current batter stading -->
		<section class="col-md-2 col-xs-12"></section>
		<!-- Audio & Video -->
		<section class="col-md-1 col-xs-12 audio-video">
			<ul>
				<li><img src="/images/headphone-icon.png"></li>
				<li><img src="/images/television-icon.png"></li>
			</ul>
		</section>
	</div>
@endsection