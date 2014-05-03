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
        <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
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
      <script>
  $(document).ready(function(){
    $( "#datepicker" ).datepicker();
  });
  </script>
    <!--<link href="css/carousel.css" rel="stylesheet">-->
  </head>
  <body>
    
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
          <pthis is="" an="" example="" layout="" with="" carousel="" that="" uses="" the="" bootstrap="" 3="" styles.<="" small=""><p></p>
          <p><a class="btn btn-lg btn-primary" href="http://getbootstrap.com">Add a Picture!</a>
        </p></pthis></div>
      </div>
    </div>
    <div class="item">
      <img src="http://lorempixel.com/1500/600/abstract/1" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Event Title</h1>
          <p><a class="btn btn-lg btn-primary" href="http://getbootstrap.com">Add a Picture!</a>
        </p>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="http://placehold.it/1500X500" class="img-responsive">
      <div class="container">
        <div class="carousel-caption">
          <h1>Event Title</h1>
          <p><p><a class="btn btn-lg btn-primary" href="http://getbootstrap.com">Add a Picture!</a>
        </p></p>
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
        <div class="list-group-item">
            <p>Date: <input type="text" id="datepicker">            </p>
            <button class="btn btn-xlarge" class="btn btn-default navbar-btn">Submit</button>
        </div>
    </div>
    <a href="#demo2" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu">Description</a>
    <div class="collapse" id="demo2">
        <div class="form-group">
            <div class="list-group-item">
             <!--</1><label for="name">Insert Description Here                 </label>!-->
                 <input type="text" class="form-control" id="name" 
         placeholder="Description">
                <button class="btn btn-xlarge" class="btn btn-default navbar-btn">Submit</button>
            </div>
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

<!-- Map of Event -->
<div class="panel panel-default">
  <div class="panel-body">
    <div>
        <input type="text" class="form-control" id="name" 
         placeholder="Location">
        <button class="btn btn-xlarge" class="btn btn-default navbar-btn">Submit</button>
        <p>Insert Map Here</p>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
  </body>
</html>
