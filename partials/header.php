<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="resources/icons/favicon/apple-touch-icon.png">
  	<link rel="icon" type="image/png" sizes="32x32" href="resources/icons/favicon/favicon-32x32.png">
  	<link rel="icon" type="image/png" sizes="16x16" href="resources/icons/favicon/favicon-16x16.png">
  	<link rel="manifest" href="resources/icons/favicon/site.webmanifest">
  	<link rel="shortcut icon" href="resources/icons/favicon/favicon.ico">
  	<meta name="msapplication-TileColor" content="#96d2b3">
  	<meta name="msapplication-config" content="resources/icons/favicon/browserconfig.xml">
  	<meta name="theme-color" content="#96d2b3">
    <!-- Ionicons CSS -->
    <link rel="stylesheet" href="./vendors/css/ionicons.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./vendors/css/bootstrap.min.css">
    <!-- Custome CSS file -->
    <link rel="stylesheet" href="./resources/css/style.css">
    <title>El Anunciante FL | <?php echo $title; ?> </title>
  </head>
  <body>
    <header class="container-fluid pt-0 px-0">
      <div class="header row justify-content-center align-items-center p-2">
        <!-- Header logo -->
          <div class="header__logo col-sm-1 col-md-2 h-auto text-center pt-0">
            <a href="#"><img class="img-fluid w-75 h-auto" src="./resources/img/logo.png" alt="Papagayo El Anunciante FL"></a>
          </div>
        <!-- Header name -->
          <div class="col-sm-7 col-md-6 text-center">
            <a class="text-decoration-none" href="#">
              <h1 class="header__name">ElAnuncianteFL.com</h1>
              <p class="header__name--sm h5">The Best Way To Reach The Hispanic Community</p>
            </a>
          </div>
        <!-- Header info -->
          <div class="col-sm-4 col-md-4 ml-auto">
            <div class="nav__info nav flex-column">
              <a class="nav-link text-secondary p-0" href="tel:+13524505261"><i class="ion-ios-telephone mr-md-1 mr-lg-2"></i>352-450-5261</a>
              <a class="nav-link text-secondary p-0" href="tel:+18006603515"><i class="ion-ios-telephone mr-md-1 mr-lg-2"></i>800-660-3515</a>
              <a class="nav-link text-secondary p-0" href="mailto:info@elanunciantefl.com"><i class="ion-ios-email mr-2"></i>info@elanunciantefl.com</a>
            </div>
            <div class="nav__social nav">
              <a class="nav-link text-secondary" href="https://www.facebook.com/pg/ElAnuncianteFL" target="_blank"><i class="ion-social-facebook"></i></a>
              <a class="nav-link text-secondary" href="https://www.instagram.com/elanunciantefl/?hl=es-la" target="_blank"><i class="ion-social-instagram"></i></a>
              <a class="nav-link text-secondary" href="https://www.twitter.com/ElAnuncianteFL" target="_blank"><i class="ion-social-twitter"></i></a>
              <!-- <a class="nav-link text-secondary" href="#">Español</a> -->
            </div>
          </div>
      </div>
      <div class="container-fluid bg-dark shadow" style="border-top: 5px solid #ed1c24;">
        <div class="row">
          <div class="col-sm-12 mx-auto">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark " itemscope itemtype="https://schema.org/SiteNavigationElement">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav navbar-dark bg-dark mx-auto">
                  <a class="nav-item nav-link mx-2" href="index.php" itemprop="url">Home <span class="sr-only">(current)</span></a>
                  <!-- <a class="nav-item nav-link mx-2" href="#">Latest Issue</a> -->
                  <li class="nav-item dropdown mx-2">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Latest Issue
                    </a>
                    <div class="dropdown-menu bg-dark border-0" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item text-secondary" href="latest-issue-ocala.php" itemprop="url">Ocala</a>
                      <a class="dropdown-item text-secondary" href="latest-issue-orlando.php" itemprop="url">Orlando</a>
                    </div>
                  </li>
                  <a class="nav-item nav-link mx-2" href="#" itemprop="url">Free Classifieds</a>
                  <a class="nav-item nav-link mx-2" href="#" itemprop="url">Place Your Ad</a>
                  <a class="nav-item nav-link mx-2" href="#" itemprop="url">Get Coupons</a>
                  <a class="nav-item nav-link mx-2" href="#" itemprop="url">About Us</a>
                  <a class="nav-item nav-link mx-2" href="#" itemprop="url">Media Kit</a>
                  <a class="nav-item nav-link mx-2" href="#" itemprop="url">Contact Us</a>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
<?php
  // Developer database connection
	$link = mysqli_connect('localhost', 'root', 'root', 'el-anunciante');
  // Production database connction
	// $link = mysqli_connect('localhost', 'dms_admin', 'Colombia.0202', 'dms_articles');
	if(mysqli_connect_error()){
		die ("There was an error connecting to the database");
	}
	mysqli_set_charset($link,"utf8");
?>
