<?php
$page = 'home';
require 'constants/config.php';
require 'constants/check-login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include("./Snippets/head-global.php"); ?>
<title><?php echo $site_titlex; ?> - Classified Ads</title>
</head>

<body>
   <header id="header-wrap">
      <?php include("./Snippets/top-nav.php"); ?>
      <div id="hero-area">
         <div class="overlay"></div>
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-md-12 col-lg-9 col-xs-12 text-center">
                  <div class="contents">
                     <h1 class="head-title">Welcome to The Largest Ads Website</h1>
                     <p>Buy and sell everything from used cars to mobile phones and computers, or search for property and more</p>
                     <?php include("./Snippets/searchbar.php"); ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <section class="featured section-padding">
      <div class="container">
         <h1 class="section-title">Latest Products</h1>
         <div class="row">
            <?php require 'constants/fetch-latest-ads.php'; ?>
         </div>
      </div>
   </section>
   <section class="featured-lis section-padding">
      <div class="container">
         <div class="row">
            <div class="col-md-12 wow fadeIn" data-wow-delay="0.5s">
               <h3 class="section-title">Featured Products</h3>
               <div id="new-products" class="owl-carousel owl-theme">
                  <?php require 'constants/fetch-featured-ads.php'; ?>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="works section-padding">
      <div class="container">
         <div class="row">
            <div class="col-12">
               <h3 class="section-title">How It Works?</h3>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
               <div class="works-item">
                  <div class="icon-box">
                     <i class="lni-users"></i>
                  </div>
                  <p>Create an Account</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
               <div class="works-item">
                  <div class="icon-box">
                     <i class="lni-bookmark-alt"></i>
                  </div>
                  <p>Post Ad Free</p>
               </div>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-12">
               <div class="works-item">
                  <div class="icon-box">
                     <i class="lni-thumbs-up"></i>
                  </div>
                  <p>Deal Done</p>
               </div>
            </div>
            <hr class="works-line">
         </div>
      </div>
   </section>
   <?php include("./Snippets/footer.php"); ?>
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
   <script>
      $(document).ready(function() {

         var owl = $("#owl-demo");

         owl.owlCarousel({
            items: 10, //10 items above 1000px browser width
            itemsDesktop: [1000, 5], //5 items between 1000px and 901px
            itemsDesktopSmall: [900, 3], // betweem 900px and 601px
            itemsTablet: [600, 2], //2 items between 600 and 0
            itemsMobile: false // itemsMobile disabled - inherit from itemsTablet option
         });

         // Custom Navigation Events
         $(".next").click(function() {
            owl.trigger('owl.next');
         })
         $(".prev").click(function() {
            owl.trigger('owl.prev');
         })
         $(".play").click(function() {
            owl.trigger('owl.play', 1000); //owl.play event accept autoPlay speed as second parameter
         })
         $(".stop").click(function() {
            owl.trigger('owl.stop');
         })

      });
   </script>
</body>

</html>