<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Por los Pulmones de Manzana de Tucumán</title>

    <!-- Le styles -->
    <link href="bootstrap_2/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Alegreya:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel="stylesheet">

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll">

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Pulmones de Manzana de Tucumán</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="#inicio">Legislación</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#como-ayudar">Cómo puedo ayudar?</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Example row of columns -->
      <div class="row" id="inicio">
        <div class="span12">a
          <h1 class="centered">Constitución Nacional de la Nación Argentina</h1>
          <?php require('legislacion.php'); ?>
        </div>
      </div>

      <hr>

      <footer>
        <p>San Miguel de Tucumán &middot; 2012</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap_2/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap_2/js/script.js"></script>
  </body>
</html>