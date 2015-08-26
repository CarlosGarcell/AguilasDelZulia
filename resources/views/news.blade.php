@extends('master')

<head>
	<link rel="stylesheet" type="text/css" href="/css/news.css">
</head>

@section('content')

	<body>
		<section class="newsHeader col-md-12">
			<div class="col-md-2">
				<h2>NOTICIAS</h2>
			</div>
		</section>

		<!-- News section -->
		<div class="container">
			<section class="col-md-12 newsTopSection">
				<div class="newsTitle">
					<h1>Lorem Ipsum is simply dummy text of the printing</h1>
				</div>
				<div class="col-md-12 col-xs-12 newsImg">
					<img src="/images/placeholder-noticias.jpg" alt="..." class="img-responsive">
					<p class="text-justify lead">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<div class="col-md-12 col-xs-12">
					<p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</section>
		</div>

		<!-- Extras section -->
		<div class="container extras">
			<!-- Video -->
			<section class="col-md-4 col-xs-12 newsVideo">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="http://www.youtube.com/embed/K3H9UB1SJHo" class="embed-responsive-item" allowfullscreen></iframe>
				</div>
			</section>
		</div>

		<!-- Other news links -->
		<div class='container otherNews'>
			<div class="col-md-12 col-xs-12 row">
				<ul>
					<h4>Otras Noticias</h4>
					<li><p id="inlineP">></p><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></li>
					<li><p id="inlineP">></p><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></li>
					<li><p id="inlineP">></p><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></li>
					<li><p id="inlineP">></p><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a></li>
				</ul>
			</div>
		</div>

		<!-- Comments section -->
		<div class="container comments">
			<div class="col-md-12 col-xs-12 row">
				<div class="commentsHeader">
					<div class="arrow"></div>
					<h3>Comentarios</h3>
				</div>
			</div>
		</div>
	</body>

@endsection