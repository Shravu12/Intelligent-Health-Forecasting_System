<!DOCTYPE html>
<html>
<style>
  h1 {
    font-size: 50px;
    padding-left: 590px;
    padding-top: 60px;
  }

  img {
    float: left;
    width: 77px;
  }

  body {
    margin: 0;
    padding: 0;
    font-family: "Bahnschrift Light", "Bernard MT Condensed", "Berlin Sans FB Demi", "Bell MT";
    width: 100%;
    height: 100vh;
    background-image: url(pic/healthcare-banner\ 2.jpg);
    background-size: cover;
  }
</style>

<body>

  <h1> Google Map for Hospital location</h1>

  <div id="map" style="width:400px;height:400px;background:lightcyan"></div>

  <script>
    function myMap() {
      var mapCanvas = document.getElementById("map");
      var mapOptions = {
        center: {
          lat: 51.5,
          lng: -0.2
        },
        zoom: 10
      };
      var map = new google.maps.Map(mapCanvas, mapOptions);
    }
  </script>
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap" defer></script>



</body>

</html>