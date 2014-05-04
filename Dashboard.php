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
  </head>
  <body>
    <div id= "pageWrap">
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
            <a class="navbar-brand" href="#">NYU Square</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav pull-right">
              <button type="button" class="btn btn-default navbar-btn">Sign in</button>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <br></br>
      <div class="row">
        <div class="col-md-6">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Create Events</a>
        </div>
        <div class="col-md-6" align = "right">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand2" href="#" >Invites</a>
        </div>
      </div>
      <div id="tfheader">
            <form style="text-align:center" id="tfnewsearch" method="get" action="http://www.google.com">
                <input type="text" class="tftextinput" name="q" size="21" maxlength="120">
                <input type="submit" value="search" class="tfbutton">
            </form>
            <div class="tfclear"></div>
      </div> 
      <div class="row">
          <div class="col-xs-6 col-sm-3">
            <div class="panel panel-default">
              <div class="panel-body">
                  <div>
                    <p>Insert Map Here</p>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">Event Name</div>

          <!-- Add the extra clearfix for only the required viewport -->
          <div class="clearfix visible-xs"></div>

          <div class="col-xs-6 col-sm-3">Physical location</div>
          <div class="col-xs-6 col-sm-3">Contact information</div>
      </div>
      <div class="row">
          <div class="col-xs-6 col-sm-3">
            <div class="panel panel-default">
              <div class="panel-body">
                  <div>
                    <p>Insert Map Here</p>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">Event Name</div>

          <!-- Add the extra clearfix for only the required viewport -->
          <div class="clearfix visible-xs"></div>

          <div class="col-xs-6 col-sm-3">Physical location</div>
          <div class="col-xs-6 col-sm-3">Contact information</div>
      </div>
      <div class="row">
          <div class="col-xs-6 col-sm-3">
            <div class="panel panel-default">
              <div class="panel-body">
                  <div>
                    <p>Insert Map Here</p>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-sm-3">Event Name</div>

          <!-- Add the extra clearfix for only the required viewport -->
          <div class="clearfix visible-xs"></div>

          <div class="col-xs-6 col-sm-3">Physical location</div>
          <div class="col-xs-6 col-sm-3">Contact information</div>
      </div>
    </div>
  </body>
</html>




