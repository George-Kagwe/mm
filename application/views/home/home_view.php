<!DOCTYPE html>
<html>
  <head>
    <title>Data Layer: Simple</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>

      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: {lat: -1.07829, lng: 35.86012},
        });

        // NOTE: This uses cross-domain XHR, and may not work on older browsers.
        map.data.loadGeoJson(
            "<?php echo base_url('/assets/js/map.json'); ?>");
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBozzyzpf69K8ijkkPzZOI1FrOeTfTVACs&callback=initMap">
    </script>
  </body>
</html>