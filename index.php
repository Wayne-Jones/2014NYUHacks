<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NYU Square</title>

    <!-- Bootstrap / CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- JavaScript Files -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Load the Google Maps API  -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        createList();
        $('tr.rowClickable').bind('click', function() { 
              var markerID = $(this).attr('id');
              centerMarker(markerID);
        });
      });

      var rendererOptions = {
        draggable: true
      };
      var geocoder;
      var directionsDisplay= new google.maps.DirectionsRenderer(rendererOptions);;
      var directionsService = new google.maps.DirectionsService();
      var map;
      //var eventArray = [Event Title, Date, Time, Location (Maybe Long/Lat)]; //To Call from Backend, AJAX?
      var eventArray = [
        [0,   "Virgins Anonymous",  "5/03/2014",  "05:00PM",  40.729795,  -73.997748], 
        [1,   "Washington Square Pillow Fight", "4/10/2014",  "12:30PM",  40.732137,  -73.991954]
      ];
      
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
      


      function createList() {
          for (var i = 0; i < eventArray.length; i++) {
              var row = $("<tr class='rowClickable' id=" + i + ">").append($("<td>").html
                (
                  eventArray[i][1])
                ).append($("<td>").html(eventArray[i][4] + " , " + eventArray[i][5]));
              $("tbody").append(row);
          }
      }

      function centerMarker(id) {
        console.log("I've been called");
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(eventArray[id][4], eventArray[id][5]),
            map: map
          });
        map.panTo(marker.getPosition());
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
            position: new google.maps.LatLng(eventArray[i][4], eventArray[i][5]),
            map: map
          });
          var contentString = '<div id="popupTitle">Event Title: '+eventArray[i][1]+'<div id="popupDate">Date of Event: '+eventArray[i][2]+'</div><br><div id="popupTime">Time of Event: '+eventArray[i][3]+'</div>';
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
            <form class="navbar-form" role="search" action="login.php">
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

    <div class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <strong>Warning!</strong> Better check yourself, you're not looking too good.
    </div>

    <div class="row" style="border-bottom: 2px groove; border-top: 2px groove;">
      <div class="col-xs-6 col-md-6">
        <div id="map-canvas"/></div>
      </div>
      <div class="col-xs-6 col-md-6">        
        <table class="table table-hover">
          <thead>
            <tr>
              <th>What?</th>
              <th>Where?</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>  

    

  </body>
</html>
