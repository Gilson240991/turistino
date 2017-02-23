<?php include_once 'complementos/header.php'; ?>
<div class="container " style="margin-top: 60px;">
	<div class="row clearfix">
		<div class="col-sm-9" style="">
			<!--slider-->
			<section id="slider" class="slider clearfix ">
				<div class="camera_wrap" id="camera_wrap_1">
					<div data-thumb="images/slider/full/thumbs/1.jpg" data-src="images/slider/full/1.jpg">
						<div class="camera_caption fadeFromBottom flex-caption slider-caption-bg" style="left: 0; border-radius: 0; max-width: none;">
							<div class="container">Powerful Layout with Responsive functionality that can be adapted to any screen size.</div>
						</div>
					</div>
					<div data-thumb="images/slider/full/thumbs/2.jpg" data-src="images/slider/full/2.jpg">
						<div class="camera_caption fadeFromBottom flex-caption slider-caption-bg" style="left: 0; border-radius: 0; max-width: none;">
							<div class="container">Looks beautiful &amp; ultra-sharp on Retina Screen Displays.</div>
						</div>
					</div>
					<div data-thumb="images/slider/full/thumbs/3.jpg" data-src="images/slider/full/3.jpg">
						<div class="camera_caption fadeFromBottom flex-caption slider-caption-bg" style="left: 0; border-radius: 0; max-width: none;">
							<div class="container">Included 20+ custom designed Slider Pages with Premium Sliders like Layer, Revolution, Swiper &amp; others.</div>
						</div>
					</div>
					<div data-thumb="images/slider/full/thumbs/4.jpg" data-src="images/slider/full/4.jpg">
						<div class="camera_caption fadeFromBottom flex-caption slider-caption-bg" style="left: 0; border-radius: 0; max-width: none;">
							<div class="container">You have easy control on each &amp; every element that provides endless customization possibilities.</div>
						</div>
					</div>
				</div>
			</section>
			<!--end slider-->
			<section  style="background: linear-gradient(to bottom,#CB0000 0,#A00006 100%);padding: 10px;">
				<form action="" class="form-horizontal" style="margin-top: 10px;">
					<div class="form-group">
						<div class="col-sm-12">
							<div class="col-sm-2">
								<label for="" style="color: #fff;" class="control-label">Servicio</label>
							</div>
							<div class="col-sm-3">
								<select name="" id="" class="form-control">
									<option value="">SELECCIONAR</option>
									<option value="">ALOJAMIENTO</option>
									<option value="">VUELOS</option>
									<option value="">TRANSPORTE</option>
									<option value="">ENTRADAS</option>
									<option value="">RESTAURANTE</option>
									<option value="">PAQUETES</option>
								</select>
							</div>
							<div class="col-sm-2">
								<label for="" style="color: #fff;" class="control-label">A donde ir</label>
							</div>
							<div class="col-sm-3">
								<input type="text" class="form-control">
							</div>
							<div class="col-sm-2">
								<button type="submit" class="btn btn-block" style="background: linear-gradient(to bottom,#fbb733 0,#fbb733 50%,#faa500 51%,#faa500 100%);color: #303030;font-weight: 600;">Buscar <i class="icon-search3"></i></button>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<div class="col-sm-2">
								<label for="" style="color: #fff;" class="control-label">Fecha Inicio</label>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
									<input type="text" value="" class="datepicker form-control tleft past-enabled" placeholder="dd/mm/yy">
									<span class="input-group-addon" >
										<i class="icon-calendar2"></i>
									</span>
								</div>
							</div>
							<div class="col-sm-2">
								<label for="" style="color: #fff;" class="control-label">Fecha de Fin</label>
							</div>
							<div class="col-sm-3">
								<div class="input-group">
									<input type="text" value="" class="datepicker form-control tleft past-enabled" placeholder="dd/mm/yy">
									<span class="input-group-addon">
										<i class="icon-calendar2"></i>
									</span>
								</div>
							</div>
						</div>
					</div>
				</form>
			</section>
			<section class="portfolio-container" style="margin-top: 20px;">
				<!-- Portfolio Items
				============================================= -->
				<div id="portfolio" class="portfolio">
					<div class="row">
						<div class="col-sm-12">
							<?php for($i=0;$i<=23;$i++){ ?>
							<article class="portfolio-item pf-icons pf-illustrations">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="?view=departamento"><img src="images/portfolio/4/4.jpg" alt="Morning Dew"></a></div>
												<div class="slide"><a href="?view=departamento"><img src="images/portfolio/4/4-1.jpg" alt="Morning Dew"></a></div>
											</div>
										</div>
									</div>
									<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="images/portfolio/full/4.jpg" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
										<a href="images/portfolio/full/4-1.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="?view=departamento" class="right-icon"><i class="icon-line-ellipsis"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
									<span><a href="#"><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
								</div>
							</article>
							<?php } ?>
						</div>
					</div>
					</div><!-- #portfolio end -->
				</section>
				
			</div>
		
			<?php include 'complementos/aside.php'; ?>
			</div>
			</div>
			<?php include 'complementos/carousel.php'; ?>
			<?php include 'complementos/footer.php'; ?>
		
		<script type="text/javascript" src="js/jquery.camera.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($){
				$('.portfolio-container').pajinate({
					items_per_page : 8,
					item_container_id : '#portfolio',
					nav_panel_id : '.pagination-container ul',
					show_first_last: false
				});
				$( '.pagination a' ).click(function() {
					var t=setTimeout(function(){ $( '.flexslider .slide' ).resize(); },1000);
				});
			});
		</script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$('#camera_wrap_1').camera({
					thumbnails: true,
					height: '40%',
					loader: 'pie',
					loaderPadding: 1,
					loaderStroke: 5,
					onLoaded: function() {
						$('#camera_wrap_1').find('.camera_next').html('<i class="icon-angle-right"></i>');
						$('#camera_wrap_1').find('.camera_prev').html('<i class="icon-angle-left"></i>');
					}
				});
			});
		</script>
		<script>
		$( function() {
		$( ".datepicker" ).datepicker({
		dateFormat: "dd/mm/yy"
		});
		} );
		</script>