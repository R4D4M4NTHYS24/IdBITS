// Place a draggable marker on the map
var marker = new google.maps.Marker({
    position: myLatlng,
    map: map,
    draggable:true,
    title:"Drag me!"
});

//get marker position and store in hidden input
google.maps.event.addListener(marker, 'dragend', function (evt) {
    document.getElementById("latInput").value = evt.latLng.lat().toFixed(3);
    document.getElementById("lngInput").value = evt.latLng.lng().toFixed(3);
});