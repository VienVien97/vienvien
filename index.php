<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>

function initMap() {
  var myLatLng = {lat: 21.030438, lng: 105.812931};
  var myLatLng2 = {lat: 21.028881, lng:  105.803184};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom:17,
    center: myLatLng
  });

  var marker1 = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: "http://sv1.upsieutoc.com/2017/03/25/index.png",
    title: 'Hello World!'
    });
  var marke2 = new google.maps.Marker({
    position: myLatLng2,
    map: map,
    icon: "http://sv1.upsieutoc.com/2017/03/25/index.pngss",
    title: 'Hello World!'
  });
}

    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeo5x8lG-xGVZoqWj30puASmcV1pk-ndg&signed_in=true&callback=initMap"></script>
  </body>
</html>