function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.watchPosition(showPosition);
    } else {

    }
}

function showPosition(position) {
    var lat = position.coords.latitude;
    var lang = position.coords.longitude;
    document.location="go.php?l=" + lang + "&lt=" +lat;
}