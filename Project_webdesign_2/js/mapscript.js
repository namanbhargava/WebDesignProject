function initMap() {

  var broadway = {
    info: '<strong>FitPlus on Boylston</strong><br>\
  1163 Boylston St<br> Boston, MA 02215<br>\
  <a href="https://www.google.com/maps/place/1163+Boylston+St,+Boston,+MA+02215/@42.3470357,-71.0955864,17z/data=!3m1!4b1!4m5!3m4!1s0x89e37a1cf1d59119:0x67a1469d01dfdf2!8m2!3d42.3470357!4d-71.0933977" target="_blank">Get Directions</a>',
    lat: 42.347036,
    long: -71.093398
  };

  var belmont = {
    info: '<strong>FitPlus on Boston Common</strong><br>\
  139 Tremont St<br> Boston, MA 02111<br>\
  <a href="https://www.google.com/maps/place/Boston+Common/@42.3549544,-71.0676773,17z/data=!3m1!4b1!4m5!3m4!1s0x89e3709dbc6e232b:0x3f8683fc7ba94f04!8m2!3d42.3549544!4d-71.0654886" target="_blank">Get Directions</a>',
    lat: 42.354954,
    long: -71.065489
  };

  var sheridan = {
    info: '<strong>FitPlus on Kendall Square</strong><br>\r\
  355 Binney St<br> Cambridge, MA 02139<br>\
  <a href="https://www.google.com/maps/place/Landmark+Kendall+Square/@42.367116,-71.0975966,15.77z/data=!4m12!1m6!3m5!1s0x89e3709dbc6e232b:0x3f8683fc7ba94f04!2sBoston+Common!8m2!3d42.3549544!4d-71.0654886!3m4!1s0x89e370ae748fb657:0x2c06db5cf9c583b4!8m2!3d42.3681876!4d-71.0899919" target="_blank">Get Directions</a>',
    lat: 42.367447,
    long: -71.089936
  };

  var locations = [
    [broadway.info, broadway.lat, broadway.long, 0],
    [belmont.info, belmont.lat, belmont.long, 1],
    [sheridan.info, sheridan.lat, sheridan.long, 2],
  ];

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 13,
    center: new google.maps.LatLng(42.347036, -71.093398),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });

  var infowindow = new google.maps.InfoWindow({});

  var marker, i;

  for (i = 0; i < locations.length; i++) {
    marker = new google.maps.Marker({
      position: new google.maps.LatLng(locations[i][1], locations[i][2]),
      map: map
    });

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
        infowindow.setContent(locations[i][0]);
        infowindow.open(map, marker);
      }
    })(marker, i));
  }

}
