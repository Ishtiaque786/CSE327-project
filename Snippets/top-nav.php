
<html>
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
   <div class="top-bar">
      <div class="container">
         <div class="row">
            <div class="col-lg-7 col-md-5 col-xs-12">
               <ul class="list-inline">
                  <li><a style="position: absolute;top: 0;left: 0;margin-left: 15px;" class="header-top-button"><i class="lni-envelope"></i><?php echo $site_email; ?></a></li>
                  <?php
                     if ($logged == "1") {
                        ?>
                  <li><a class="not-on-desktop" style="position: absolute;top: 0;right: 80px;" href="<?php echo $myrole ; ?>" class="header-top-button"><i class="lni-user"></i> My Account</a>
                  <li><a class="not-on-desktop" style="position: absolute;top: 0;right: 0;" href="logout" class="header-top-button"><i class="lni-enter"></i> Log Out</a></li>
                  <?php
                     }else{
                     
                        ?>
                  <li><a class="not-on-desktop" style="position: absolute;top: 0;right: 80px;" href="login" class="header-top-button"><i class="lni-lock"></i> Log In</a> </li>
                  <li><a class="not-on-desktop" style="position: absolute;top: 0;right: 0;" href="register" class="header-top-button"><i class="lni-pencil"></i> Register</a></li>
                  <?php
                     }
                     
                     ?>
               </ul>
            </div>
            <div class="col-lg-5 col-md-7 col-xs-12">
               <div class="header-top-right float-right">
                  <?php
                     if ($logged == "1") {
                        ?>
                  <a href="<?php echo $myrole ; ?>" class="header-top-button"><i class="lni-user"></i> My Account</a> |
                  <a href="logout" class="header-top-button"><i class="lni-enter"></i> Log Out</a>
                  <?php
                     }else{
                     
                        ?>
                  <a href="login" class="header-top-button"><i class="lni-lock"></i> Log In</a> |
                  <a href="register" class="header-top-button"><i class="lni-pencil"></i> Register</a>
                  <?php
                     }
                     
                     ?>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div style="background: #00254a;">
   <div class="container new-nav">
      <div class="language-switcher">
         English
      </div>
      <div class="logo-wrapper">
         <a id="site_logo" href="./" class="logo-brand"><?php echo $site_title; ?></a>
      </div>
      <div class="post-button-wrapper">
         <div class="post-btn">
               <?php
                  if ($logged == "1") {
                     print '<a class="btn btn-common" href="'.$myrole.'/upload"><i class="lni-pencil-alt"></i> Post an Ad</a>';                  
                     }else{                  
                     print '<a class="btn btn-common" href="login"><i class="lni-lock"></i> Login to Post</a>';                 
                     }                  
               ?>
         </div>
   </div>
      
      </div>
   </div>
   <nav class="navbar navbar-expand-lg bg-catbar fixed-top scrolling-navbar">
      <div class="container also-mobile-wrapper">
         <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="lni-menu"></span>
            <span class="lni-menu"></span>
            <span class="lni-menu"></span>
            </button>
            <div class="post-btn only-on-smd" style="margin: 12px 10px 12px 15px;">
               <?php
                  if ($logged == "1") {
                     print '<a class="btn btn-common" href="'.$myrole.'/upload"><i class="lni-pencil-alt"></i> Post an Ad</a>';                  
                     }else{                  
                     print '<a class="btn btn-common" href="login"><i class="lni-lock"></i> Login to Post</a>';                 
                     }                  
               ?>
            </div> 
         </div>
         <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="navbar-nav mr-auto w-100 justify-content-center">
               <li class="nav-item <?php if($page == 'home'){echo 'active';} ?>">
                  <a class="nav-link" href="./">
                  Home
                  </a>
               </li>
               <li class="nav-item <?php if($pager == 'listings'){echo 'active';} ?>">
                  <a class="nav-link" href="listings">
                  Listings
                  </a>
               </li>
               <li class="nav-item <?php if($page == 'faq'){echo 'active';} ?>">
                  <a class="nav-link" href="faq">
                  FAQ
                  </a>
               </li>
               <li class="nav-item <?php if($page == 'contact'){echo 'active';} ?>">
                  <a class="nav-link" href="contact">
                  Contact
                  </a>
               </li>
               <li class="nav-item <?php if($page == 'about'){echo 'active';} ?>">
                  <a class="nav-link" href="about">
                  About
                  </a>
               </li>
               <li class="nav-item">
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

              
               <a href="#" id="toogle" class="nav-link"><i class="lni-search"></i>Search</a>
               </li>
            </ul>
         </div>
         <div class="hide"><?php include("./Snippets/searchbar-header.php"); ?></div>
         <a class="search-toggler not-on-desktop" id="toogle2" href="#"><i class="lni-search"></i>
                 </a>
                 
      </div>
      <ul class="mobile-menu">
         <li>
            <a class="<?php if($page == 'home'){echo 'active';} ?>" href="./">
            Home
            </a>
         <li>
            <a class="<?php if($page == 'listings'){echo 'active';} ?>" href="listings">
            Listings
            </a>
         <li>
         <li>
            <a class="<?php if($page == 'faq'){echo 'active';} ?>" href="faq">
            FAQ
            </a>
         <li>
         <li>
            <a class="<?php if($page == 'contact'){echo 'active';} ?>" href="contact">
            Contact
            </a>
         <li>
         <li>
            <a class="about <?php if($page == 'about'){echo 'active';} ?>" href="about">
            About
            </a>
         <li>
         <?php
                     if ($logged == "1") {
                        ?>
                  <li class="nav-item"><a  class="only-on-smd nav-link" href="<?php echo $myrole ; ?>" class="header-top-button"></i> My Account</a>
                  <li class="nav-item"><a class="only-on-smd nav-link" class="header-top-button"> Log Out</a></li>
                  <?php
                     }else{
                     
                        ?>
                  <li class="nav-item"><a class="only-on-smd nav-link" href="login" class="header-top-button"> Log In</a> </li>
                  <li class="nav-item"><a class="only-on-smd nav-link" href="register" class="header-top-button"> Register</a></li>
                  <?php
                     }
                     
                     ?>
      </ul>
      
   </nav>
   
</html>
<script>
               $( "#toogle" ).click(function() {
               $( ".hide" ).toggle('slow');
               });
               $( "#toogle2" ).click(function() {
               $( ".hide" ).toggle('slow');
               });
</script>
