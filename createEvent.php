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

    <!-- Bootstrap / CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">

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
        
    <script>
      // Load this when the DOM is ready
      $(document).ready(function(){
        // You used .myCarousel here. 
        // That's the class selector not the id selector,
        // which is #myCarousel
        $('#myCarousel').carousel();
        $('#datepicker').datepicker();
      });
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
    <form action="addEvent.php" method="POST" enctype="multipart/form-data">
        <div class="container" id="a-content">
          <div class="row target" id="a-row">
            <div class="col-md-6 col-sm-5" id="a-left">
            
            <!-- SideBar/GuestList -->
            <div class="container" id="a-content">
              <div class="row target" id="a-row">
                <div class="col-md-6 col-sm-5" id="a-left">
                  <div id="MainMenu">
                    <div class="list-group panel">
                      <a href="#demo4" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Event Title & Location</a>
                      <div class="collapse" id="demo4">
                        <div class="list-group-item">
                          <input type="text" class="form-control" id="eventTitle" placeholder="Event Title" required>
                          <input type="text" class="form-control" id="location" placeholder="Enter Full Location" required>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              
                <!-- /Sidebar/GuestList -->
                <!-- Date/Time/Description -->
                <div class="col-md-6 col-sm-7" id="a-right">
                  <div id="MainMenu">
                    <div class="list-group panel">
                      <a href="#demo1" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Date & Time</a>
                      <div class="collapse" id="demo1">
                        <div class="list-group-item">
                          <input class="form-control" type="text" id="datepicker" placeholder="Date" required>
                          <input class="form-control" type="text" id="time" placeholder="Time" required>
                        </div>
                      </div>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-sm-12" id="a-right" style="margin-left: 15px; margin-bottom: 10px;">
          <a href="#demo2" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Description</a>
          <div class="collapse" id="demo2">
            <div class="list-group-item">
              <input type="text" class="form-control" id="description" placeholder="Description" required>                          
            </div>
          </div>
        </div>
        <div class="col-md-12 col-sm-12" id="a-right" style="margin-left: 15px; margin-bottom: 10px;">
          <a href="#demo5" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">File Upload</a>
          <div class="collapse" id="demo5">
            <div class="list-group-item">
              <input type="file" class="span4" id="file" name="file">                       
            </div>
          </div>
        </div>
    <!-- /Date/Time/Description -->
     
        <!-- Accept/Decline
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

      <div class="panel-body">
        <input type="submit" class="form-control">
      </div>
  </form>
  </body>
</html>
