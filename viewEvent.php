<?php
  require "db.php";
  session_start();
?>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" type="text/javascript"></script>
      <script src="js/bootstrap.min.js" type="text/javascript"></script>
      <script>
          // Load this when the DOM is ready
          $(document).ready(function(){
            // You used .myCarousel here. 
            // That's the class selector not the id selector,
            // which is #myCarousel
            $('#myCarousel').carousel();
        });
      </script>
      <!-- Load the Google Maps API  -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      createTable();
      $('tr.rowClickable').bind('click', function() { 
        var markerID = $(this).attr('id');
        centerMarker(markerID);
      });
    });

    var rendererOptions = {
      draggable: true
    };
    var geocoder;
    var markerHash = {};
    var directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);
    var directionsService = new google.maps.DirectionsService();
    var map;
    //var eventArray = [Event Title, Date, Time, Location (Maybe Long/Lat)]; //To Call from Backend, AJAX?
    var eventArray = [
    [0,   "Virgins Anonymous",  "5/03/2014",  "05:00PM",  40.729795,  -73.997748]
    ];

    function initialize() {
      geocoder = new google.maps.Geocoder();
      var nyu = new google.maps.LatLng(40.730869, -73.997218);
      var mapOptions = {
        zoom:15,
        center: nyu
      }
      map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
      addEvents();
    }
    
    function createTable() {
      for(var i = 0; i < eventArray.length; i++){
        var eventRow = $("<tr class='rowClickable' id='M" + i + "'>")
        .append($("<td>").html(eventArray[i][1]))
        .append($("<td>").html(eventArray[i][4] + " , " + eventArray[i][5]));
        
        $("tbody").append(eventRow);
      }
    }

    function addEvents() {
      for(var i = 0; i < eventArray.length; i++){
        var marker = new google.maps.Marker({
          position: new google.maps.LatLng(eventArray[i][4], eventArray[i][5]),
          map: map
        });

        var contentString = '<div id="popupTitle">Event Title: '+eventArray[i][1]+'<div id="popupDate">Date of Event: '+eventArray[i][2]+'</div><br><div id="popupTime">Time of Event: '+eventArray[i][3]+'</div>';
        
        var infowindow = new google.maps.InfoWindow({
          content: contentString
        });
        
        markerHash['M' + i] = marker;
        
        bindInfoWindow(marker, map, infowindow, contentString);
      }
    }

    function bindInfoWindow(marker, map, infowindow, strDescription) {
      google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(strDescription);
        infowindow.open(map, marker);
      });
    }

    function centerMarker(id) {
      console.log("I've been called");
      map.panTo(markerHash[id].getPosition());
    }

    google.maps.event.addDomListener(window, 'load', initialize);
    

  </script>
    <!--<link href="css/carousel.css" rel="stylesheet">-->
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
          <!-- THIS IS FOR THE ALREADY LOGGED IN USER -->
          <?php
          if(isset($_SESSION['user'])){
            echo '
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome '.$_SESSION['fName'].'<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="createEvent.php">Create Event</a></li>
                <li><a href="#">Manage Events</a></li>
                <li><a href="invitations.php">My Invitations</a></li>
              </ul>
            </li>
            <li><button type="submit" id="signOut" class="btn btn-default" style="margin-top: 10px;"><a href="logout.php">Log Out</a></button></li>';
          }
          else{
            echo '
            <li>
              <form class="navbar-form" action="login.php" method="POST">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email" name="email" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
                <button type="submit" class="btn btn-default">Sign in</button>
              </form>
            </li>';
          }
          ?>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </div>
    
      
    <!-- Carousel
    ================================================== -->
    <form action="addEvent.php" method="POST">
      <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="item active">
            <img src="./images/lel.png" class="img-responsive">
            <div class="container">
              <div class="carousel-caption">
                <h1>Event Title</h1>
                <pthis is="" an="" example="" layout="" with="" carousel="" that="" uses="" the="" bootstrap="" 3="" styles.<="" small=""></pthis>
                <input type="file" name="img">
              </div>
            </div>
          </div>
          <div class="item">
            <img src="./images/image.jpg" class="img-responsive">
            <div class="container">
              <div class="carousel-caption">
                <h1>Event Title</h1>
                <input type="file" name="img">
              </p>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="./images/1500X500.gif" class="img-responsive">
            <div class="container">
              <div class="carousel-caption">
                <h1>Event Title</h1>
                <input type="file" name="img">
              </div>
            </div>
          </div>
        </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="icon-prev"></span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="icon-next"></span>
  </a>  
</div>
<!-- /.carousel -->
    
    
<div class="container" id="a-content">
    <div class="row target" id="a-row">
        <div class="col-md-6 col-sm-5" id="a-left">

<!-- SideBar/GuestList -->
<div class="container" id="a-content">
    <div class="row target" id="a-row">
        <div class="col-md-6 col-sm-5" id="a-left">
            <div id="MainMenu">
  <div class="list-group panel">
    <a href="#demo3" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Guest List</a>
    <div class="collapse" id="demo3">
        <a href="" class="list-group-item"> Insert List of People Here.</a>
    </div>
        </div>
        </div>
            </div>
<!-- /Sidebar/GuestList -->

<!-- Date/Time/Description -->
<div class="col-md-6 col-sm-7" id="a-right">
<div id="MainMenu">
  <div class="list-group panel">
    <a href="#demo1" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Date and Time</a>
    <div class="collapse" id="demo1">
        <a href="" class="list-group-item">Insert Date and Time Here.</a>
    </div>
    <a href="#demo2" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Description</a>
    <div class="collapse" id="demo2">
      <a href="" class="list-group-item">Insert Description Here.</a>
    </div>
   </div>
  </div>
</div>
</div>
</div>
</div>
   </div>
    </div>
<!-- /Date/Time/Description -->

    
    <!-- Accept/Decline -->
    <div class="row">
    <div class="span4" style="text-align:center">
    <div class="col-md-4"></div>
    <div class="col-md-4">
     <button class="btn btn-xlarge" class="btn btn-default navbar-btn">Accept </button>
    <button class="btn btn-xlarge" class="btn btn-default navbar-btn">Decline </button>
    <div class="col-md-4"></div>
        </div>
</div>
</div>
<!-- /Accept/Decline -->

<!-- Map of Event -->
<div class="panel panel-default">
  <div class="panel-body">
    <div>
        <div class="row" style="border-bottom: 2px groove; border-top: 2px groove;">
    <div class="col-md-12 col-sm-12">
      <div id="map-canvas"/></div>
    </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>
