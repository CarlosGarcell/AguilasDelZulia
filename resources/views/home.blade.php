@extends('master')

<head>
	<title>Home</title>
</head>

@section('content')
	
	<!-- Slideshow -->
	<div class="jumbotron slideshow">
		<section class="slideshowContent">
			<h1>&Aacute;guilas del Zulia</h1>
			<p>Secci&oacute;n de prueba para la p&aacute;gina</p>
		</section>
	</div>

	<!-- Current game information -->
	<div class="currentGame col-md-12 container">
		<section class="col-md-7 row">
			<div class="table-responsive col-md-12">
				<table class="table">
					<thead>
						<tr id="innings">
							<th>9no <span class="glyphicon glyphicon-triangle-bottom"></span></th>
							@for($i = 1; $i < 10; $i++)
								<th>{{ $i }}</th>
							@endfor
							<th class="teamData">C</th>
							<th class="teamData">H</th>
							<th class="teamData">E</th>
						</tr>
					</thead>
					<tbody>
						<tr id="otherTeamScore">
							<th scope="row">Equipo</th>
							@for($i = 1; $i < 10; $i++)
								<td>{{ 0 }}</td>
							@endfor
							<th class="teamData">0</th>
							<th class="teamData">0</th>
							<th class="teamData">0</th>
						</tr>
						<tr id="aguilasScore">
							<th scope="row">&Aacute;guilas</th>
							@for($i = 1; $i < 10; $i++)
								<td>{{ 0 }}</td>
							@endfor
							<th class="teamData" id="aguilasScore">0</th>
							<th class="teamData" id="aguilasScore">0</th>
							<th class="teamData" id="aguilasScore">0</th>
						</tr>
					</tbody>
				</table>
				<table class="table col-md-3">
					<thead>
						<tr>
						</tr>
					</thead>
				</table>
			</div>
		</section>

		<!-- <div class="col-md-4 diamond-batter"> -->
			<!-- Diamond -->
			<section class="col-md-2 col-xs-12 diamond">
				<!-- <img src="/images/bases.jpg"> -->
				<div class="base" id="base2"></div>
				<div class="base" id="base1"></div>
				<div class="base" id="base3"></div>
			</section>

			<!-- Current batter standing -->
			<section class="col-md-2 col-xs-12 currentBatter">
				<!-- <img src="/images/BSO.jpg"> -->
				<section class="balls-Strikes">
					<ul class="balls row">
						<li id="indicator">B</li>
						<li id="circle"></li>
						<li id="circle"></li>
						<li id="circle"></li>
						<li id="circle"></li>
					</ul>
					<ul class="strikes row">
						<li id="indicator">S</li>
						<li id="circle"></li>
						<li id="circle"></li>
						<li id="circle"></li>
					</ul>
				</section>
				<ul class="outs row">
					<li id="indicator">O</li>
					<li id="circle"></li>
					<li id="circle"></li>
					<li id="circle"></li>
				</ul>
			</section>
		<!-- </div> -->

		<!-- Audio & Video -->
		<section class="col-md-1 col-xs-12 audio-video">
			<div class="col-md-12 col-sm-6 col-xs-6">
				<a href="#"><img src="/images/headphone-icon.png"></a>
			</div>
			<div class="col-md-12 col-sm-6 col-xs-6">
				<a href="#"><img src="/images/television-icon.png"></div></section></a>
			</div>
		</section>
	</div>

	<!-- Advertisement banners and game review -->
	<div class="ads-Review col-md-12">
		<!-- Left adBanner -->
		<section class="adBanner-left col-md-3">
			<div class="jumbotron">
				<div class="container">
					<h3>¿QUIERES PUBLICAR EN ESTA P&Aacute;GINA?</h3>
					<a href="#" id="adBanner-left-button">PUBLICIDAD AQU&Iacute;</a>
				</div>
			</div>
		</section>

		<!-- Game review -->
		<section class="col-md-6 gameReview">
			<h3>Resumen del Juego</h3>
				<section class="col-md-6 gameVideo">
					<div class="embed-responsive embed-responsive-16by9">
					  <iframe width="560" height="315" src="http://www.youtube.com/embed/K3H9UB1SJHo" class="embed-responsive-item" allowfullscreen></iframe>
					</div>
				</section>
				<section class="col-md-6 reviewText">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</section>
				<a href="#">Ver m&aacute;s</a>
		</section>

		<!-- Right adBanner -->
		<section class="adBanner-right col-md-3">
			<div class="jumbotron">
				<div class="container">
					<h3>¿QUIERES PUBLICAR EN ESTA P&Aacute;GINA?</h3>
					<a href="#" id="adBanner-right-button">PUBLICIDAD AQU&Iacute;</a>
				</div>
			</div>
		</section>
	</div>

	<!-- League table, team leaders, upcoming games & columnists -->
	<div class="col-md-12 informationTables">
		<!-- League table -->
		<div class="informationTable">
			<section class="col-md-3 tableBg">
				<div class="table-responsive">
					<table class="table table-striped">
					<thead>
						<tr>
							<th>TABLA DE POSICIONES</th>
						</tr>
					</thead>
						<tbody>
							@for($i = 1; $i < 9; $i++)
								<tr>
									<td>{{ $i }}. Equipo {{ $i }}</td>
								</tr>
							@endfor
						</tbody>
						<tr>
							<td>
								<a href="#">Ver m&aacute;s</a>
							</td>
						</tr>
					</table>
				</div>
			</section>
		</div>
		<!-- Team Leaders -->
		<div class="informationTable">
			<section class="col-md-3 tableBg">
				<div class="table-responsive">
					<table class="table table-striped">
					<thead>
						<tr>
							<th>L&Iacute;DERES DEL EQUIPO</th>
						</tr>
					</thead>
						<tbody>
							@for($i = 1; $i < 9; $i++)
								<tr>
									<td>{{ $i }}. L&iacute;der {{ $i }}</td>
								</tr>
							@endfor
						</tbody>
						<tr>
							<td>
								<a href="#">Ver m&aacute;s</a>
							</td>
						</tr>
					</table>
				</div>
			</section>
		</div>
		<!-- Upcoming Games -->
		<div class="informationTable">
			<section class="col-md-3 tableBg">
				<div class="table-responsive">
					<table class="table table-striped">
					<thead>
						<tr>
							<th>PR&Oacute;XIMOS JUEGOS</th>
						</tr>
					</thead>
						<tbody>
							@for($i = 1; $i < 9; $i++)
								<tr>
									<td>{{ $i }}. Juego {{ $i }}</td>
								</tr>
							@endfor
						</tbody>
						<tr>
							<td>
								<a href="#">Ver m&aacute;s</a>
							</td>
						</tr>
					</table>
				</div>
			</section>
		</div>
		<!-- Columnists -->
		<div class="informationTable">
			<section class="col-md-3 tableBg">
				<div class="table-responsive">
					<table class="table table-striped">
					<thead>
						<tr>
							<th>COLUMNISTAS</th>
						</tr>
					</thead>
						<tbody>
							@for($i = 1; $i < 9; $i++)
								<tr>
									<td>{{ $i }}. Columnista {{ $i }}</td>
								</tr>
							@endfor
						</tbody>
						<tr>
							<td>
								<a href="#">Ver m&aacute;s</a>
							</td>
						</tr>
					</table>
				</div>
			</section>
		</div>
	</div>
@endsection