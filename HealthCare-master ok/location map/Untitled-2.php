<!DOCTYPE html>
<html>

<body>
  <!DOCTYPE html>
  <html>

  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Location of Dhaka Division Hospitals </title>
    <style>
      #map {
        height: 100%;
      }

      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>

  <body>
    <h1 id="top">Links to Sections of The Same Page</h1>
    <section>
      <ul>

        <li><a href="#section1">#section1</a></li>
        <li><a href="#section2">#section2</a></li>
        <li><a href="#section3">#section3</a></li>
        <li><a href="#section4">#section4</a></li>
        <li><a href="#section5">#section5</a></li>
        <li><a href="#section6">#section6</a></li>
      </ul>

    </section>
    <div id="map"></div>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: {
            lat: 23.77,
            lng: 90.35
          }
        });

        setMarkers(map);
      }



      var beaches = [
        ['Ibn sina hospital , Dhanmondi', 23.751362, 90.368856, 4],
        ['Bangladesh Medical College Hospital, Dhaka', 23.750306, 90.369895, 5],
        ['Square Hospital dhaka', 23.752798, 90.381718, 3],
        ['Dhaka Shishu Hospital', 23.773209, 90.371424, 2],
        ['BIRDEM General Hospital, Dhaka', 23.739368, 90.396546, 1]
      ];

      function setMarkers(map) {

        var image = {
          url: 'https://cdn2.iconfinder.com/data/icons/font-awesome/1792/map-marker-48.png',


          size: new google.maps.Size(60, 32),

          origin: new google.maps.Point(0, 0),

          anchor: new google.maps.Point(0, 32)
        };

        var shape = {
          coords: [1, 1, 1, 20, 18, 20, 18, 1],
          type: 'poly'
        };

        for (var i = 0; i < beaches.length; i++) {
          var beach = beaches[i];
          var marker = new google.maps.Marker({
            position: {
              lat: beach[1],
              lng: beach[2]
            },
            map: map,
            icon: image,
            shape: shape,
            title: beach[0],
            zIndex: beach[3]
          });
        }
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5lBaUSzJh25BjLBpJ5KetHvjQf3EYg_8&callback=initMap">
    </script>
  </body>

  </html>