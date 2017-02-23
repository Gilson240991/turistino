<?php include "complementos/header.php"; ?>
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="col-sm-9 ">
				<div class="col-sm-offset-9 col-sm-4" style="padding: 20px;">
					<ol class="breadcrumb">
						<li><a href="#">Turistino</a></li>
						<li><a href="#">Perú</a></li>
						<li class="active">Departamento</li>
					</ol>
				</div>
				
					
					<!--inicio del slider-->
					<section id="slider" class="boxed-slider">
						<div class="clearfix">
							<div class="nivoSlider">
								<img src="images/slider/boxed/2.jpg" alt="Slider 1" title="#nivocaption1" />
								<img src="images/slider/boxed/3.jpg" alt="Slider 2" title="#nivocaption2" />
								<img src="images/slider/boxed/4.jpg" alt="Slider 3" title="#nivocaption3" />
								<img src="images/slider/boxed/5.jpg" alt="Slider 4" title="#nivocaption4" />
							</div>
							<div id="nivocaption1" class="nivo-html-caption">Ultra Responsive Design</div>
							<div id="nivocaption2" class="nivo-html-caption">Unlimited Color Options</div>
							<div id="nivocaption3" class="nivo-html-caption">Boxed &amp; Wide Layout</div>
							<div id="nivocaption4" class="nivo-html-caption">Bootstrap Components Compatible</div>
						</div>
					</section>
					<!--Fin del slider-->
					<!--Inicio del tabs-->
				
						<div class="tabs tabs-bordered clearfix" id="tab-2">

							<ul class="tab-nav clearfix">
								<li><a href="#tabs-5">Información</a></li>
								<li><a href="#tabs-6">Atractivo Turistico</a></li>
								<li><a href="#tabs-7">Cultura</a></li>
								<li class="hidden-phone"><a href="#tabs-8">Gastronomia</a></li>
								<li class="hidden-phone"><a href="#tabs-8">Festividades</a></li>
							</ul>

							<div class="tab-container">

								<div class="tab-content clearfix" id="tabs-5">
									Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.
								</div>
								<div class="tab-content clearfix" id="tabs-6">
									Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.
								</div>
								<div class="tab-content clearfix" id="tabs-7">
									<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
									Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.
								</div>
								<div class="tab-content clearfix" id="tabs-8">
									Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.
								</div>

							</div>

						</div>
					
					<!--Fin del tabs-->
					
						<?php for($i=0;$i<=3;$i++){ ?>
<article class="portfolio-item pf-icons pf-illustrations" style="padding: 0">
	<div class="portfolio-image">
		<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
			<div class="flexslider">
				<div class="slider-wrap">
					<div class="slide"><a href="#"><img src="images/portfolio/4/4.jpg" alt="Morning Dew"></a></div>
					<div class="slide"><a href="#"><img src="images/portfolio/4/4-1.jpg" alt="Morning Dew"></a></div>
				</div>
			</div>
		</div>
		<div class="portfolio-overlay" data-lightbox="gallery">
			<a href="images/portfolio/full/4.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
			<a href="images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
			<a href="?view=departamento" class="right-icon"><i class="icon-line-ellipsis"></i></a>
		</div>
	</div>
</article>
<?php } ?>
				
					

			
			</div>
			<?php include 'complementos/aside.php' ?>
		</div>
	</div>
</section>
<?php include 'complementos/carousel.php'; ?>
<?php include 'complementos/footer.php'; ?>