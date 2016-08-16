'use strict';
// function(){
console.log('linked');
var weatherObject;
const myAPIKey = '1440d6a354ff5c61bea8267d20c6e4a8';

$.get('http://api.openweathermap.org/data/2.5/forecast/daily', {
	APPID: myAPIKey,
	q:     'San Antonio, TX',
	units: 'imperial'
	
}).done(function(data) {
	console.log('Data returned from server:');
	console.log(data);
	weatherObject = data
	addWeather(data);



}).fail(function (xhr, err, msg) {
	alert('something went wrong!');
});


function addWeather (forcast) {
	///////////////city///////////////
	var location ='';
		location += '<h3>' + weatherObject.city.name + '</h3>';
	$('#city').append(location);

	//////////city content///////////
	var day1 = '';
		day1 += '<p><strong>' + weatherObject.list[0].temp.max + "°" + ' / ' + weatherObject.list[0].temp.min + "°" + '</strong></p>';
		day1 += '<img src=http://openweathermap.org/img/w/' + weatherObject.list[0].weather[0].icon +'.png>' ;		
		day1 += '<p><strong>' + weatherObject.list[0].weather[0].description + '</strong></p>';	
		day1 += '<p>' + '<strong>humidity:</strong> ' + weatherObject.list[0].humidity + '</p>';	
		day1 += '<p>' + '<strong>wind:</strong> ' + weatherObject.list[0].speed + '</p>';
		day1 += '<p>' + '<strong>pressure:</strong> ' + weatherObject.list[0].pressure + '</p>';
	$('#todaysWeather').append(day1);

	var day2 = '';
		day2 += '<p><strong>' + weatherObject.list[1].temp.max + "°" + ' / ' + weatherObject.list[0].temp.min + "°" + '</strong></p>';
		day2 += '<img src=http://openweathermap.org/img/w/' + weatherObject.list[1].weather[0].icon +'.png>' ;
		day2 += '<p><strong>' + weatherObject.list[1].weather[0].description + '</strong></p>';	
		day2 += '<p>' + '<strong>humidity:</strong> ' + weatherObject.list[1].humidity + '</p>';	
		day2 += '<p>' + '<strong>wind:</strong> ' + weatherObject.list[1].speed + '</p>';
		day2 += '<p>' + '<strong>pressure:</strong> ' + weatherObject.list[1].pressure + '</p>';
	$('#tomorrow').append(day2);

	var day3 = '';
		day3 += '<p><strong>' + weatherObject.list[2].temp.max + "°" + ' / ' + weatherObject.list[0].temp.min + "°" + '</strong></p>';
		day3 += '<img src=http://openweathermap.org/img/w/' + weatherObject.list[2].weather[0].icon +'.png>' ;
		day3 += '<p><strong>' + weatherObject.list[2].weather[0].description + '</strong></p>';	
		day3 += '<p>' + '<strong>humidity:</strong> ' + weatherObject.list[2].humidity + '</p>';	
		day3 += '<p>' + '<strong>wind:</strong> ' + weatherObject.list[2].speed + '</p>';
		day3 += '<p>' + '<strong>pressure:</strong> ' + weatherObject.list[2].pressure + '</p>';
	$('#dayAfter').append(day3);
}





















//})();