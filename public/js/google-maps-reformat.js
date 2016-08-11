var map = new google.maps.Map(document.getElementById('my-map'), {
    zoom: 14,

    // position of codeup
    center: {
        lat:  29.426791,
        lng: -98.489602
    }
});

function addMarkerAndINfoWindow(place){
    var marker = new google.maps.Marker({
        position: place.geometry.location,
        map: map
    })

    infowindow.open(map, marker);
}

function changeZoomLevel(e) {
    var zoomLevel = document.getElementById('change-zoom').value;
    map.setZoom(parseInt(zoomLevel));
};

var mapOptions = {
    zoom: 14,
    // position of codeup
    center: {
        lat: 29.426791,
        lng: -98.489602
    }
};

var mapDiv = document.getElementById('my-map');
var map = new google.maps.Map(mapDiv, mapOptions);

var geocoder = new google.maps.Geocoder();

var searchTerm = 'austin';

geocoder.geocode({address: searchTerm }), function(results, status) {
    if ( status != google.maps.GeocoderStatus.OK) {
        alert('Geocoding was not successful - STATUS ' + status);
        return;
    }

    map.setZoom(4);
    results.forEach(addMarkerAndINfoWindow);

});


document.getElementById('zoom-btn').addEventListener('click', changeZoomLevel);