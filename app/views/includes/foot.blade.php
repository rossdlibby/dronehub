<!-- Scripts -->
{{ HTML::script( '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js' ) }}
{{ HTML::script( '//maps.googleapis.com/maps/api/js?v=3.exp&sensor=true' ) }}

<!-- Geolocation -->

<script>
$('#findLocation').click(function() {

	// Replace nav icon with loading icon
	$('#locIcon').addClass('fa-spin')
	if(!!navigator.geolocation) {
		var map;

		var mapOptions = {
			zoom: 15,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		map = new google.maps.Map(document.getElementById('mapholder'), mapOptions);

		navigator.geolocation.getCurrentPosition(function(position) {
			var geolocate = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

			var infowindow = new google.maps.InfoWindow({
				map: map,
				position: geolocate,
				content:
					'Lat: ' + position.coords.latitude + 
					'Lng: ' + position.coords.longitude
			});
			var addr = $.getJSON('//maps.googleapis.com/maps/api/geocode/json?latlng=' + position.coords.latitude + ',' + position.coords.longitude,
				function(response, status, jqXHR) {
					$('#location').val(jqXHR.responseText.split('formatted_address" : "')[1].split('"')[0]);

					// Turn off the loading icon
					$('#locIcon').removeClass('fa-spin');
				});
		});
	} else {
		$('#location').html('Couldn\'t find your location.');
	}
});
</script>

</body>
</html>