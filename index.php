<html>
  <head>
    <title>Mexican Restaurant</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/media_queries.css">
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
  </head>
  <body>


<!--========= SLIDER! ==========
  ==============================-->
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="IMG/mexico-city-bellas.png">
          <div class="carousel-caption">
            <h1 class="sliderIntro">Bienvenidos  |  Welcome</h1>
            <p class="pIntro">To the most Delicious Mexican Restaurant in town!</p>
            <p class="pIntro">100% Authentic Mexican Food</p>
          </div>
        </div>
        <div class="item">
          <img src="IMG/tamales.png">
          <div class="Caption carousel-caption">
          </div>
        </div>
      </div>

      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  <!--========= NAV! ==========
  ==============================-->

    <nav class="navbar navbar-default baraNav">
      <div class="container-fluid">
        <h1 class="logo">Las Fiestas</h1>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse " data-spy="affix" data-offset-top="60" data-offset-bottom="200">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Our Specialties <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
              </ul>
            </li>
            <li><a href="http://www.google.com/">Our Menu</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

  <!--========= BODY! ==========
  ==============================-->
    <div class="container">
      <div class="col-lg-12">
        <h1 class="h1s header">
          Our Specialties
        </h1>
        <h2 class="h2s">
          Nuestras Especialidades
        </h2>
        <div class="col-sm-11 col-md-11 col-lg-11 specialties">
          <div class="col-sm-3 col-md-3 col-lg-3 imgText col-md-offset-1 col-lg-offset-1 smallvs">
            <img src="IMG/tamales.jpg" style="width: 200px; height: 160px;">
            <span class="textImg">Tamales</span>
          </div>
          <div class="col-sm-3 col-md-3 col-lg-3 chori col-md-offset-1 col-lg-offset-1 smallvs">
            <img src="IMG/choriqueso.jpg" style="width: 200px; height: 160px;">
            <span class="queso">Choriqueso</span>
          </div>
          <div class="col-sm-3 col-md-3 col-lg-3 imgText col-md-offset-1 col-lg-offset-1 smallvs">
            <img src="IMG/sopes.jpg" style="width: 200px; height: 160px;">
            <span class="textImg">Sopes</span>
          </div>
        </div>
      </div>
    </div>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  </body>
</html>