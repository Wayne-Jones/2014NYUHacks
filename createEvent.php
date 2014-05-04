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
    <form action="addEvent.php" method="post">
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
          <ul class="nav navbar-nav navbar-right">
              <p class="navbar-text">Hello, Bob</p>
              <li><a href="#">Dashboard</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
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
            <img src="http://lorempixel.com/1500/600/abstract/1" class="img-responsive">
            <div class="container">
              <div class="carousel-caption">
                <h1>Event Title</h1>
                <pthis is="" an="" example="" layout="" with="" carousel="" that="" uses="" the="" bootstrap="" 3="" styles.<="" small=""></pthis>
                <input type="file" name="img">
              </div>
            </div>
          </div>
          <div class="item">
            <img src="http://lorempixel.com/1500/600/abstract/1" class="img-responsive">
            <div class="container">
              <div class="carousel-caption">
                <h1>Event Title</h1>
                <input type="file" name="img">
              </p>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="http://placehold.it/1500X500" class="img-responsive">
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
      <!-- end carousel -->


        <div class="container" id="a-content">
          <div class="row target" id="a-row">
            <div class="col-md-6 col-sm-5" id="a-left">
            
            <!-- SideBar/GuestList -->
            <div class="container" id="a-content">
              <div class="row target" id="a-row">
                <div class="col-md-6 col-sm-5" id="a-left">
                  <div id="MainMenu">
                    <div class="list-group panel">
                      <a href="#demo4" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Location</a>
                      <div class="collapse" id="demo4">
                        <div class="list-group-item">
                          <input type="text" class="form-control" id="location" placeholder="Location">
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
                      <a href="#demo1" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Date and Time</a>
                      <div class="collapse" id="demo1">
                        <div class="list-group-item">
                          <input class="form-control" type="text" id="datepicker" placeholder="Date">
                          <input class="form-control" type="text" id="time" placeholder="Time">
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
                          <input type="text" class="form-control" id="description" placeholder="Description">                          
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
