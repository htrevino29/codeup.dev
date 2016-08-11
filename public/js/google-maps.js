// (function() {
"use strict";

	console.log('linked');
	//------------------MAP--------------------------------------------------------------
	// Set our map options
	var mapOptions = {
		// Set the zoom level
		zoom: 12,

		// This sets the center of the map at our location
		center: {
			lat:  29.426791,
			lng: -98.489602
		}
	};

	// Render the map
	var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
	var goldStar = {
		path: 'M 125,5 155,90 245,90 175,145 200,230 125,180 50,230 75,145 5,90 95,90 z',
		fillColor: 'blue',
		fillOpacity: 0.8,
		scale: .1,
		strokeColor: 'gold',
		strokeWeight: 1
	};




	//------------------------Hyatt (current location)---------------------------------------------------
	var address = "600 E Market St, San Antonio, TX 78205";
	

	// Init geocoder object
	var geocoder = new google.maps.Geocoder();

	// Geocode our address
	geocoder.geocode({ "address": address }, function(results, status) {

	// Check for a successful result
	if (status == google.maps.GeocoderStatus.OK) {
	  
	   // Recenter the map over the address
		map.setCenter(results[0].geometry.location);
		var marker2 = new google.maps.Marker({            // sets marker to location
		position: results[0].geometry.location,          // results[0].geometry.location 
		icon: goldStar,
		map: map 

	   // will grab location gps from geocoder.
	   })
	// console.log(results[0].geometry.location);
   } else {

	   // Show an error message with the status if our request fails
	   alert("Geocoding Hyatt was not successful - STATUS: " + status);
   }

   });

	//--------------------------Stella----------------------------
	// Create lat and long for our marker position
	var stellaPublicHouse = "1414 S Alamo St, San Antonio, TX 78210";

	var geocodeStella = new google.maps.Geocoder();

	// Geocode our address
	geocodeStella.geocode({ "address": stellaPublicHouse }, function(results, status) {

   // Check for a successful result
   if (status == google.maps.GeocoderStatus.OK) {
	   
		var infowindow = new google.maps.InfoWindow({
			content: "Stella Public House"
		});

		var marker = new google.maps.Marker({
		position: results[0].geometry.location,
		map: map
	   
		});
		// Open the window using our map and marker
		marker.addListener('click', function() {
		  infowindow.open(map, marker);
		});
	// console.log(results[0].geometry.location);
   } else {

	   // Show an error message with the status if our request fails
	   alert("Geocoding Stella was not successful - STATUS: " + status);
   }

   });



	//--------------------Fratellos----------------------
	var fratellosDeli = "2503 Broadway St, San Antonio, TX 78215";
	var geocodeFratellos = new google.maps.Geocoder();
	geocodeFratellos.geocode({ "address": fratellosDeli }, function(results, status) {

   // Check for a successful result
   if (status == google.maps.GeocoderStatus.OK) {
		var infowindow = new google.maps.InfoWindow({
			content: "Fratellos Deli"
		});
		var marker = new google.maps.Marker({
		position: results[0].geometry.location,
		map: map
		});
		marker.addListener('click', function() {
		  infowindow.open(map, marker);
		});
	// console.log(results[0].geometry.location);
   } else {

	   // Show an error message with the status if our request fails
	   alert("Geocoding Fratellos was not successful - STATUS: " + status);
	  }
   });
	//----------------Barbaro----------------------------------------
	var barbaro = "2720 McCullough Ave, San Antonio, TX 78212";
	var geocodeBarbaro = new google.maps.Geocoder();
	geocodeBarbaro.geocode({ "address": barbaro }, function(results, status) {

   // Check for a successful result
   if (status == google.maps.GeocoderStatus.OK) {
	   
		var marker = new google.maps.Marker({
		position: results[0].geometry.location,
		map: map
		});
		var infowindow = new google.maps.InfoWindow({
			content: "Barbaro"
		});
		marker.addListener('click', function() {
		  infowindow.open(map, marker);
		});
	// console.log(results[0].geometry.location);
   } else {

	   // Show an error message with the status if our request fails
	   alert("Geocoding Barbaro was not successful - STATUS: " + status);
   }

   });



   





























// })();


