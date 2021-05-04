<?php
  require 'constants/config.php';
  require 'constants/check-login.php';
  $page = "about";
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $site_titlex; ?> - About Us</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/line-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
    <link rel="stylesheet" type="text/css" href="assets/css/color-switcher.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <link rel="icon" href="assets/icon/favicon.ico">
  </head>
  <body>
    <header id="header-wrap">
		<?php include("./Snippets/top-nav.php");?>
    </header>
    <div class="page-header" style="background: url(assets/img/banner1.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="product-title">About Us</h2>
              <ol class="breadcrumb">
                <li><a href="./">Home /</a></li>
                <li style="color:white;" class="current">About Us</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 col-xs-12">
            <div class="about-wrapper">
              <p class="intro-desc">
                <?php
                  try {
                     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  
                  
                  $stmt = $conn->prepare("SELECT * FROM tbl_about LIMIT 1");
                  $stmt->execute();
                  $result = $stmt->fetchAll();
                  
                     foreach($result as $row)
                     {
                  
                  echo $row['about'];
                  
                  
                  }
                  				  
                  }catch(PDOException $e)
                     {
                     echo "Connection failed: " . $e->getMessage();
                     }
                  
                     ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include("./Snippets/footer.php");?>
    <a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
    </a>
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>
    <script src="assets/js/summernote.js"></script>
  </body>
</html>