<!-- Footer
============================================= -->
<footer id="footer" class="nomargin dark" style="clear: both;">
<!-- Copyrights
============================================= -->
<div id="copyrights">
<div class="container clearfix">
<div class="col_half">
Copyrights &copy; 2017 Todos los derechos reservados.
</div>
<div class="col_half col_last tright">
<div class="copyrights-menu copyright-links fright clearfix">
<a href="#">Alojamiento</a>/<a href="#">Vuelos</a>/<a href="#">Transporte</a>/<a href="#">Entradas</a>/<a href="#">Restaurante</a>/<a href="#">Paquetes</a>
</div>
</div>
</div>
</div><!-- #copyrights end -->
</footer><!-- #footer end -->
</div><!-- #wrapper end -->
<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>
<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery.nivo.js"></script>

<script type="text/javascript" src="js/components/bs-datatable.js"></script>
<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>
<script>

		$(document).ready(function() {
			$('#datatable1').DataTable();
		});

	</script>
<script type="text/javascript">

		jQuery(document).ready(function($) {

			$('.nivoSlider').nivoSlider({
				effect: 'random',
				slices: 15,
				boxCols: 12,
				boxRows: 6,
				animSpeed: 500,
				pauseTime: 8000,
				directionNav: true,
				controlNav: true,
				pauseOnHover: true,
				prevText: '<i class="icon-angle-left"></i>',
				nextText: '<i class="icon-angle-right"></i>',
				afterLoad: function(){
					$('#slider').find('.nivo-caption').addClass('slider-caption-bg');
				}
			});

		});

	</script>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>