'use strict';
// function(){
console.log('linked');
var weatherObject;
var lat;
var lon;

const myAPIKey = '1440d6a354ff5c61bea8267d20c6e4a8'; //key for weather api



///////////////gets 3 day forecast for coordiantes provided/////////////////


// $.get('http://api.openweathermap.org/data/2.5/forecast/daily', {
// 	APPID: myAPIKey,
// 	lat:29.426791,
// 	lon:-98.489602,
// 	units: 'imperial',
// 	cnt:3	
// }).done(function(data) {
// 	console.log('Data returned from server:');
// 	console.log(data);
// 	weatherObject = data
// 	addWeather(data);
// }).fail(function (xhr, err, msg) {
// 	alert('something went wrong!');
// });

function addWeather (forcast) {
	///////////////city name///////////////
	// console.log(forcast);
	var location ='';
		location += '<h3>' + forcast.city.name + '</h3>';
	$('#city').append(location);

	/////////3 day forecast///////////
	var day1 = '';
		day1 += '<p><strong>' + forcast.list[0].temp.max + "°" + ' / ' + forcast.list[0].temp.min + "°" + '</strong></p>';
		day1 += '<img src=http://openweathermap.org/img/w/' + forcast.list[0].weather[0].icon +'.png>' ;		
		day1 += '<p><strong>' + forcast.list[0].weather[0].description + '</strong></p>';	
		day1 += '<p>' + '<strong>humidity:</strong> ' + forcast.list[0].humidity + '</p>';	
		day1 += '<p>' + '<strong>wind:</strong> ' + forcast.list[0].speed + '</p>';
		day1 += '<p>' + '<strong>pressure:</strong> ' + forcast.list[0].pressure + '</p>';
	$('#todaysWeather').append(day1);

	var day2 = '';
		day2 += '<p><strong>' + forcast.list[1].temp.max + "°" + ' / ' + forcast.list[0].temp.min + "°" + '</strong></p>';
		day2 += '<img src=http://openweathermap.org/img/w/' + forcast.list[1].weather[0].icon +'.png>' ;
		day2 += '<p><strong>' + forcast.list[1].weather[0].description + '</strong></p>';	
		day2 += '<p>' + '<strong>humidity:</strong> ' + forcast.list[1].humidity + '</p>';	
		day2 += '<p>' + '<strong>wind:</strong> ' + forcast.list[1].speed + '</p>';
		day2 += '<p>' + '<strong>pressure:</strong> ' + forcast.list[1].pressure + '</p>';
	$('#tomorrow').append(day2);

	var day3 = '';
		day3 += '<p><strong>' + forcast.list[2].temp.max + "°" + ' / ' + forcast.list[0].temp.min + "°" + '</strong></p>';
		day3 += '<img src=http://openweathermap.org/img/w/' + forcast.list[2].weather[0].icon +'.png>' ;
		day3 += '<p><strong>' + forcast.list[2].weather[0].description + '</strong></p>';	
		day3 += '<p>' + '<strong>humidity:</strong> ' + forcast.list[2].humidity + '</p>';	
		day3 += '<p>' + '<strong>wind:</strong> ' + forcast.list[2].speed + '</p>';
		day3 += '<p>' + '<strong>pressure:</strong> ' + forcast.list[2].pressure + '</p>';
	$('#dayAfter').append(day3);
}
// Set our map options
	var mapOptions = {
		// Set the zoom level
		zoom: 6,

		// This sets the center of the map at our location
		center: {
			lat:  29.426791,
			lng: -98.489602
		}

	
	};
	var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions); // renders map
	var marker = new google.maps.Marker({
			position: {lat: 29.426791, lng: -98.489602},
			map: map,
			draggable:true,
			title: 'hello world!'
		});	


	
	
	

//get submit button to take input fields for lat,lon and have them replace the existing values.

// $('#submitButton').click(function(e) {
// 	e.preventDefault();	                          <---- used for the submit button option to pull coordinates for get request.
// 	console.log($('#latitude').val());
// 	console.log($("#longitude").val());
	
//     alert('new coordiantes');
marker.addListener('mouseup',function(){
	
	$("#city").html('');
	$("#todaysWeather").html('');
	$("#tomorrow").html('');
	$("#dayAfter").html('');

	initilizeWeather();
});

function initilizeWeather() {

	var markerLat = marker.getPosition().lat();
	var markerLon = marker.getPosition().lng();

    $.get('http://api.openweathermap.org/data/2.5/forecast/daily', {
	APPID: myAPIKey,
	// lat:$('#latitude').val(),
	// lon:$('#longitude').val(),   <......also used for submit function
	lat: markerLat,
	lon: markerLon,
	units: 'imperial',
	cnt:3	
	}).done(function(data) {
		console.log('Data returned from server:');
		console.log(data);
		
		addWeather(data);
	}).fail(function (xhr, err, msg) {
		alert('something went wrong!');
	});
};
 


	
    




















// })();