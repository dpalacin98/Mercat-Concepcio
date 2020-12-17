<?php include "templates/master.php";?>

<?php startblock("titulo");?>
Landing
<?php endblock()?>

<?php startblock("css");?>
<link rel="stylesheet" href="../style/landing.css">
<?php endblock()?>

<?php startblock("principal");?>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="../media/banner1.jpg" class="d-block w-100" alt="..." height="500">
				</div>
				<div class="carousel-item">
					<img src="../media/banner2.jpg" class="d-block w-100" alt="..." height="500">
				</div>
				<div class="carousel-item">
					<img src="../media/banner3.jpg" class="d-block w-100" alt="..." height="500">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm textoMercado">
					<h4>Bienvenidos al Mercat de La Concepció</h4><br>
					<p class="text-justify">
						Bienvenidos y bienvenidas a nuestro Mercado virtual.
						El Mercado de La Concepció, quiere ser tu "plaza" el espacio de encuentro ideal para comprar, charlar, disfrutar de una experiencia gastronómica y social en todos los sentidos. Por ello, aparte de una extensa oferta alimentaria, encontrarás actividades para todas las edades.
						En el mercado de La Concepció queremos ser la "plaza" del barrio, del Eixample y de la ciudad, para que nuestros amigos y clientes, vengan y recuperen el espacio que los Mercados originalmente siempre han ocupado, el de la plaza del pueblo donde la gente se encuentra y comparte.
						Sin embargo, apostamos también por la modernidad y las nuevas tecnologías, por eso también te invitamos a visitar nuestra web, a que te pasees virtualmente por las paradas, a que te informes de nuestra agenda de actividades y a que, si no puedes venir hasta el mercado, hagas tus compras on-line en las paradas que más te gusten y nosotros te las llevaremos allí donde nos digas, a la hora que tú prefieras.
					</p>
				</div>
				<div class="col-sm mapaMercado">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.0026285881795!2d2.166679415426052!3d41.39574927926347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2ec0442c335%3A0x910bd3779074fc37!2sMercat%20de%20la%20Concepci%C3%B3!5e0!3m2!1ses!2ses!4v1606686860701!5m2!1ses!2ses" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
			</div>
		</div>
		<div class="imagenPromocion">
			<img src="../media/fondo.jpg" alt="" width="100%" height="500px">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm textoMercado">
					<h4 class="tituloParadas">Paradas del Mercado</h4>
					<div id="carouselExampleIndicatorsNew" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicatorsNew" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicatorsNew" data-slide-to="1"></li>
							<li data-target="#carouselExampleIndicatorsNew" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="../media/banner4.jpg" class="d-block w-100" alt="..." height="500">
							</div>
							<div class="carousel-item">
								<img src="../media/banner5.jpg" class="d-block w-100" alt="..." height="500">
							</div>
							<div class="carousel-item">
								<img src="../media/banner6.jpg" class="d-block w-100" alt="..." height="500">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleIndicatorsNew" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleIndicatorsNew" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
<?php endblock()?>