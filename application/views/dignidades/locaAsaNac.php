<h1 class="tit" Align="center">Localizaciones de postulantes a Asambleista Nacional </h1>
<div class="container">
	<div class="row">
		<div class="col-md-4">
			

		</div>
		<div class="col md-8">
			<div id="mapaCan" style="height:500px; width:100%; border:2px solid black;"></div>
		</div>
	</div>
</div>

<script type="text/javascript">
	function initMap() {
		var centro = new google.maps.LatLng(-1.3804393775871402, -78.77341064151292);
		var mapaCan = new google.maps.Map(
			document.getElementById('mapaCan'), {
				center: centro,
				zoom: 6.5,
				mapTypeId: google.maps.MapTypeId.HYBRID
			}
		);

		<?php if ($candiAsaNac) : ?>
			<?php foreach ($candiAsaNac as $lugarTempor) : ?>
				var coordeTemporal = new google.maps.LatLng(<?php echo $lugarTempor->lati_can; ?>, <?php echo $lugarTempor->longi_can; ?>);
				var marcador = new google.maps.Marker({
					position: coordeTemporal,
					title: "<?php echo $lugarTempor->nom_can; ?>",
					map: mapaCan,
                    icon: "<?php echo base_url(); ?>/assets/images/icon.png"
				});
			<?php endforeach; ?>
		<?php endif; ?>

	}
</script>