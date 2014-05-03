<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NYU Square</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Load the Google Maps API  -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript">
      var rendererOptions = {
        draggable: true
      };
      var geocoder;
      var directionsDisplay= new google.maps.DirectionsRenderer(rendererOptions);;
      var directionsService = new google.maps.DirectionsService();
      var map;
      //var eventArray = [Event Title, Date, Time, Location (Maybe Long/Lat)]; //To Call from Backend, AJAX?
      var eventArray = [["Party at Dawid's House", "5/03/2014", "05:00PM", 40.729795,  -73.997748], ["Washington Square Pillow Fight", "4/10/2014", "12:30PM", 40.732137, -73.991954]];
      function initialize() {
        geocoder = new google.maps.Geocoder();
        var nyu = new google.maps.LatLng(40.730869, -73.997218);
        var mapOptions = {
          zoom:15,
          center: nyu
        }
        map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
        addPublicEventMarkers();
      }
      
      function bindInfoWindow(marker, map, infowindow, strDescription) {
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(strDescription);
          infowindow.open(map, marker);
        });
      }
      function addPublicEventMarkers() {
        for(var i=0;i<eventArray.length;i++){
          var marker = new google.maps.Marker({
            position: new google.maps.LatLng(eventArray[i][3], eventArray[i][4]),
            map: map
          });
          var contentString = '<div id="popupTitle">Event Title: '+eventArray[i][0]+'<div id="popupDate">Date of Event: '+eventArray[i][1]+'</div><br><div id="popupTime">Time of Event: '+eventArray[i][2]+'</div>';
          var infowindow = new google.maps.InfoWindow({
            content: contentString
          });
          bindInfoWindow(marker, map, infowindow, contentString);
        }
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" style="position:relative;" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a style="padding: 0px; margin: 0px;" class="navbar-brand" href="#"><img src="images/logo.png"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav pull-right">
            <form class="navbar-form" role="search">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-default">Sign in</button>
            </form>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="Flexible-container">
      <div id="map-canvas"/>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-6 col-md-4">
        
      </div>
      <div class="col-xs-12 col-md-8">        

      </div>
    </div>  

    

  </body>
</html>
