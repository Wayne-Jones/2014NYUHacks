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

  <!-- JavaScript Files -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/jquery-ui-1.10.4.custom.min.js"></script>
  <script type="text/javascript" src="js/modernizr.custom.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      createList();
    });

    //var eventArray = [Event Title, Description, Date, Time, Location (Maybe Long/Lat)]; //To Call from Backend, AJAX?
    var eventArray = [
    [0,   "Virgins Anonymous",  
    "From they fine john he give of rich he. They age and draw mrs like. Improving end distrusts may instantly was household applauded incommode. Why kept very ever home mrs. Considered sympathize ten uncommonly occasional assistance sufficient not. Letter of on become he tended active enable to. Vicinity relation sensible sociable surprise screened no up as.",
    "5/03/2014",  "05:00PM",  40.729795,  -73.997748], 
    [1,   "Washington Square Pillow Fight", 
    "From they fine john he give of rich he. They age and draw mrs like. Improving end distrusts may instantly was household applauded incommode. Why kept very ever home mrs. Considered sympathize ten uncommonly occasional assistance sufficient not. Letter of on become he tended active enable to. Vicinity relation sensible sociable surprise screened no up as.",
    "4/10/2014",  "12:30PM",  40.732137,  -73.991954],
    [2,   "Martin Sosa Birthday Orgy", 
    "From they fine john he give of rich he. They age and draw mrs like. Improving end distrusts may instantly was household applauded incommode. Why kept very ever home mrs. Considered sympathize ten uncommonly occasional assistance sufficient not. Letter of on become he tended active enable to. Vicinity relation sensible sociable surprise screened no up as.",
    "10/02/2014",  "12:00AM",  40.73522,  -73.99806]
    ];
    
    function createList() {
      for(var i = 0; i < eventArray.length; i++){
        var Event = $("<li>")

        .append($("<div class='row'>")
          .append($("<div class='col-md-8'>")
            .append($("<h2>").html(eventArray[i][1]))))
        .append($("<div class='row'>")
          .append($("<div class='col-md-5'>")
            .append($("<h4>").html(eventArray[i][5] + ", " + eventArray[i][6])))
          .append($("<div class='col-md-5'>")
            .append($("<h4>").html(eventArray[i][3] + " at " + eventArray[i][4])))
          .append($("<div class='col-md-2'>")
            .append($("<button type='button' class='btn btn-primary'>View Event Page</button>"))))
        .append($("<div class='row'>")
          .append($("<div class='col-md-12'>")
            .append($("<p class='lead'>").html(eventArray[i][2]))));
        $("ul.event-list").append(Event);
      

//<p class="lead">
      }
    }
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
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome Wayne!<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Create Event</a></li>
              <li><a href="#">Manage Events</a></li>
              <li><a href="#">My Invitations</a></li>
            </ul>
          </li>
          <!-- THIS IS THE FORM USED TO LOG IN -->
          <li>
            <form class="navbar-form" role="search" action="login.php">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email">
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-default">Sign in</button>
            </form>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </div>


  <ul class="list-unstyled event-list">
  </ul>



</body>
</html>
