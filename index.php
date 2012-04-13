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
          <!--<a class="brand" href="#">Pulmones de Manzana de Tucumán</a>-->
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="#legislacion">Legislación</a></li>
              <li><a href="#cpm">Código Plan. Urbano</a></li>
              <li><a href="#geo">Informe Geo</a></li>
              <li><a href="#contacto">Contacto</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Example row of columns -->
      <div class="row" id="legislacion">
        <div class="span12">
          <?php require('legislacion.php'); ?>
          <?php require('lgma.php'); ?>
          <?php require('ley_25275.php'); ?>
        </div>
      </div>

      <!-- Example row of columns -->
      <div class="row" id="cpm">
        <div class="span12">
          <?php require('cpm.php'); ?>
        </div>
      </div>

      <!-- Example row of columns -->
      <div class="row" id="geo">
        <div class="span12">
          <?php require('geo.php'); ?>
        </div>
      </div>

      <!-- Example row of columns -->
      <div class="row" id="contacto">
        <div class="span12">
          <?php require('contacto.php'); ?>
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
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>