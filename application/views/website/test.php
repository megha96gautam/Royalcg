<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset=utf-8>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/currency.js@1.2.2/dist/currency.min.js"></script>
<script type="text/javascript" src="js/jquery.currency.localization.en_US.js"></script>
<link type="text/css" rel="stylesheet" href="css/currency.default.css">
<title>Currency Converter - jQuery Plugin</title>
<script type="text/javascript">
$(document).ready(function(){
    $('#currency-widget').currency();
});
</script>
<style type="text/css">
#currency-widget {
    width:223px;
}
</style>
</head>
<body>
<div id="currency-widget"></div>
</body>
</html>
<!-- End of currency-wrapper -->



<!-- <!DOCTYPE html>
<html>
  <head>
    <title>Geocoding Service</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <style> 
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      /*#map {
        height: 100%;
      }*/
      /* Optional: Makes the sample page fill the window. */
     /* html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>
  </head>
  <body>
    <div id="floating-panel">
      <input id="address" type="textbox" value="Sydney, NSW">
      <input id="submit" type="button" value="Geocode">
    </div>
    <div id="map"></div>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 8,
          center: {lat: -34.397, lng: 150.644}
        });
        var geocoder = new google.maps.Geocoder();

        document.getElementById('submit').addEventListener('click', function() {
          geocodeAddress(geocoder, map);
        });
      }

      function geocodeAddress(geocoder, resultsMap) {
        var address = document.getElementById('address').value;
        geocoder.getLatLng(address, function(point) {
         var latitude = point.y;
         var longitude = point.x;  
          alert(longitude); 
         // do something with the lat lng
    });
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmkaNdq9hfPxbs_Y4lwU4OApJzQWXGdwI
&callback=initMap">
    </script>
  </body>
</html>*/

