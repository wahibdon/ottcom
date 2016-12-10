<!DOCTYPE html>
<html>
	<head>
		<title>Contact - OTT Communications</title>
	<style>
	#map {
		height: 350px;
	}
	</style>
    </head>
	<?php require_once("header.php"); ?>
	<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-68015543-1', 'auto');
		  ga('send', 'pageview');

</script>
		<div id="map"></div>
		<h1 class="gray-txt xtra-padding-lr xtra-margin-top center">OTT Communications</h1>
		<address class="xtra-padding-lr center xtra-margin-top sixteen-pt">
			13100 Magisterial Drive, Suite 202
			<br>
			Louisville, KY 40223
			<br>
			<a class="sixteen-pt" href="tel:+15022676999">(502) 267-6999</a>
			<br>
		</address>
	<h1 class="gray-txt xtra-padding-lr xtra-margin-top center">New Business</h1>
	<address class="xtra-padding-lr center sixteen-pt">
		Mark Hess
		<br>
		Director, Business Development
		<br>
		<a class="sixteen-pt" href="tel:+15026947086">Tel: (502) 694-7086</a>
		<br>
		<a class="sixteen-pt" href="mailto:mhess@ottcom.com" target="_top">Email: mhess@ottcom.com</a>
	</address>
	<h2 class="gray-txt text-center center xtra-margin-top sixteen-pt">Let's make something great!</h2>
	<form id="contact-form" class="center xtra-margin-top sixteen-pt">
		<input type="text" name="firstlastname" placeholder="First Last">
		<br>
		<input type="text" name="companyname" placeholder="Company Name">
		<br>
		<input type="text" name="email" placeholder="Email">
		<br>
		<textarea name="description" placeholder="Describe your project"></textarea>
		<br>
		<input type="submit" value="Send Message" placeholder="Send Message">
		<br>
	</form>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script>
	function initialize() {
		var mapCanvas = document.getElementById('map');
		var mapOptions = {
			center: new google.maps.LatLng(38.26728887035871, -85.50921268979594),
			zoom: 13,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(mapCanvas, mapOptions)
		var image = '/images/map_pin-16-small.png';
		var beachMarker = new google.maps.Marker({
			position: {lat: 38.26728887035871, lng: -85.50921268979594},
			map: map,
			icon: image
		});
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	</script>
	<?php require_once("footer.php"); ?>
