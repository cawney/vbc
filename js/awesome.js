function initialize() {
        var mapOptions = {
          center: { lat: 38.054190, lng: 84.729776 },
          zoom: 8
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);


//-34.397, 150.644