<?php $title = "Home"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title><?php $title ?></title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="tbs3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.0.3/css/font-awesome.min.css">
    
    <!-- BootstrapFormHelpers -->
    <link rel="stylesheet" type="text/css" href="BootstrapFormHelpers/dist/css/bootstrap-formhelpers.min.css" media="screen">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><i class="fa fa-power-off fa-rotate-90"></i> aia</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#"><i class="fa fa-info-circle"></i> Wiki</a></li>
            <li><a href="#"><i class="fa fa-map-marker"></i> Map</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Resources<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="about.php"><i class="fa fa-info"></i> About</a></li>
                <li><a href="#"><i class="fa fa-code-fork"></i> Git</a></li>
                <li><a href="#"><i class="fa fa-ban"></i> Error Reporting</a></li>
                <li class="divider"></li>
                <li><a href="credits.php">Credits</a></li>
              </ul>
            </li>
          </ul>
           <ul class="nav navbar-nav navbar-right">
             <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-laptop"></i> Machine<b class="caret"></b></a>
                <ul class="dropdown-menu"> 
                  <li><a href="#"><i class="fa fa-leaf"></i> Seed Rank <span class="badge">420</span></a></li>  
                  <li><a href="#"><i class="fa fa-cog"></i> Re-Configure</a></li>
                  <li><a href="#">Update Seed Bank</a></li>
                  <li><a href="#">Update Leech Bank</a></li>
                  <li><a href="#">Update Seed Bank Catalogue</a></li>
                  <li><a href="#">Update Leech Bank Catalogue</a></li>
                </ul>
              </li>  
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-clock-o"></i><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Date & Time<!-- reference script tag here --></a></li>
                  </ul>
              </li>
              <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bullseye"></i><b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li><a href="#"><strong>Server Address:</strong> 127.0.0.1</a></li>
                      <li><a href="#"><strong>Machine Name:</strong> Gaia_Omega</a></li>
                      <li><a href="#"><strong>Machine Type:</strong> Lap-top</a></li>
                      <li><a href="#"><strong>Machine Model:</strong> Satellite L505</a></li>
                      <li><a href="#"><strong>Machine Rating:</strong> Good</a></li>
                      <li><a href="#"><strong>Owner Name:</strong> The_Nuanderthal</a></li>
                      <li><a href="#"><strong>Owner Rating:</strong> Good</a></li>
                      <li><a href="#"><strong>Performance:</strong> Good</a></li>
                  </ul>
              </li>
            </ul>  
          <form class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" placeholder="Spirit Name" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Spirit Key" class="form-control">
            </div>
            <button type="submit" class="btn btn-success"><i class="fa fa-power-off fa-rotate-90"></i></button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
