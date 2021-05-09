<?php
  require '../constants/config.php';
  require '../constants/check-login.php';
  
  if (isset($_GET['node'])) {
    require 'constants/fetch-add-info.php';
  
  }else{
      header("location:../");
  }
  
  if ($key == "1") {
  
  }else{
      header("location:../");
  }
  
  if ($logged == "1") {
  	   if ($myrole == "user") {
  
  	   }else{
  
  	   	header("location:../");
  
  	   }
  
  	}else{
  
  		header("location:../");
  
  	}
  
  
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $site_titlex; ?> - Edit</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/fonts/line-icons.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/slicknav.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/color-switcher.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/summernote.css">
    <link rel="icon" href="../assets/icon/favicon.ico">
    <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("select.country").change(function(){
            var selectedCountry = $(".country option:selected").val();
            $.ajax({
                type: "POST",
                url: "../test.php",
                data: { country : selectedCountry } 
            }).done(function(data){
                $("#response").html(data);
            });
        });
    });
    </script>
  </head>
  <body>
    <header id="header-wrap">
    <?php include("../Snippets/top-nav-user.php");?>
    </header>
    <div class="page-header" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="product-title">Edit <?php echo $title; ?></h2>
              <ol class="breadcrumb">
                <li><a href="../">Home /</a></li>
                <li class="current" style="color:white">Edit <?php echo $title; ?></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="content" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
            <aside>
              <div class="sidebar-box">
                <div class="user">
                  <figure>
                    <a >
                    <?php 
                      if ($myavatar == null) {
                      
                      	print '<img class="user_avatar" src="../assets/img/blank_avatar.png" alt="">';
                      
                      }else{
                      	print '<img class="user_avatar" src="../uploads/avatar/'.$myavatar.'" alt="">';
                      
                      }
                      
                      ?>
                    </a>
                  </figure>
                  <div class="usercontent">
                    <h3>@<?php echo $myusername; ?>
                      <?php if ($accver == "YES") { print '<span class="lni-check-mark-circle"></span>'; } ?>
                    </h3>
                    <h4>ID: <?php echo $myid; ?></h4>
                  </div>
                </div>
                <nav class="navdashboard">
                  <ul>
                    <li>
                      <a  href="./">
                      <i class="lni-user"></i>
                      <span>My Account</span>
                      </a>
                    </li>
                    <li>
                      <a href="myads">
                      <i class="lni-layers"></i>
                      <span>My Ads</span>
                      </a>
                    </li>
                    <li>
                      <a href="my-active-ads">
                      <i class="lni-cloud-check"></i>
                      <span>My Active Ads</span>
                      </a>
                    </li>
                    <li>
                      <a href="my-pending-ads">
                      <i class="lni-cloud-upload"></i>
                      <span>My Pending Ads</span>
                      </a>
                    </li>
                    <li>
                      <a href="my-featured-ads">
                      <i class="lni-star"></i>
                      <span>My Featured Ads</span>
                      </a>
                    </li>
                    <li>
                      <a href="upload">
                      <i class="lni-upload"></i>
                      <span>Upload Ads</span>
                      </a>
                    </li>
                    <li>
                      <a href="../logout">
                      <i class="lni-enter"></i>
                      <span>Logout</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </aside>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-9">
            <div class="row page-content">
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="inner-box">
                  <div class="dashboard-box">
                    <h2 class="dashbord-title">Edit <?php echo $title; ?></h2>
                  </div>
                  <div class="dashboard-wrapper">
                    <form action="app/update-ad.php" method="POST" autocomplete="on" onsubmit="var text = document.getElementById('minle').value; if(text.length < 10) { alert('Short description should be not less than 108 Characters'); return false; } return true;">
                      <?php require 'constants/check_reply.php'; ?>
                      <div class="form-group mb-3">
                        <label class="control-label">Ad Title <span class="required">*</span></label>
                        <input value="<?php echo $title; ?>" class="form-control input-md" name="title" placeholder="Enter Ad Title" required type="text">
                      </div>
                      <div class="form-group mb-3 tg-inputwithicon">
                        <label class="control-label">Category <span class="required">*</span></label>
                        <div class="tg-select form-control">
                          <select name="category" required>
                            <option value="" selected disabled>Select Category</option>
                            <?php
                              try {
                                  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                              
                                
                                $stmt = $conn->prepare("SELECT * FROM tbl_categories ORDER BY category");
                                $stmt->execute();
                                $result = $stmt->fetchAll();
                              
                                  foreach($result as $row)
                                  {
                                  print '<option'; if ($category == $row['category']) { print ' selected'; } print ' value="'.$row['category'].'">'.$row['category'].'</option>';
                                }
                                          
                                }catch(PDOException $e)
                                  {
                                  echo "Connection failed: " . $e->getMessage();
                                  }
                              
                                  ?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group mb-3 tg-inputwithicon">
                        <label class="control-label">City <span class="required">*</span></label>
                        <div class="tg-select form-control">
                          <select class="country" name="city" required>
                            <option value="" selected disabled>Select City</option>
                            <?php
                              try {
                                  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                              
                                
                                $stmt = $conn->prepare("SELECT * FROM tbl_cities ORDER BY city");
                                $stmt->execute();
                                $result = $stmt->fetchAll();
                              
                                  foreach($result as $row)
                                  {
                                  print '<option'; if ($city == $row['city']) { print ' selected'; } print ' value="'.$row['city'].'">'.$row['city'].'</option>';
                                }
                                          
                                }catch(PDOException $e)
                                  {
                                  echo "Connection failed: " . $e->getMessage();
                                  }
                              
                                  ?>
                          </select>
                        </div>
                        <div id="response" name="area">
                        
                        </div>
                      </div>
                      <div class="form-group mb-3 tg-inputwithicon">
                        <label class="control-label">Condition <span class="required">*</span></label>
                        <div class="tg-select form-control">
                          <select name="condition" required>
                            <option value="" selected disabled>Select Condition</option>
                            <option <?php if ($adcond == "For_Rent") { print ' selected'; } ?> value="For_Rent">For Rent</option>
                            <option <?php if ($adcond == "For_Sale") { print ' selected'; } ?> value="For_Sale">For Sale</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group mb-3">
                        <label class="control-label">Price (<?php echo $currency_before; ?><?php echo $currency; ?>)</label><span class="required">*</span>
                        <input value="<?php echo $price; ?>" class="form-control input-md" name="price" required placeholder="Enter Price" type="number">
                        <div class="tg-checkbox mt-3">
                          <div class="custom-control custom-checkbox">
                            <input <?php if ($fixed == "YES") { print ' checked '; } ?> type="checkbox" class="custom-control-input" name="fixed" id="tg-priceoncall">
                            <label class="custom-control-label" for="tg-priceoncall">Fixed</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group mb-3">
                      <div class="inout-wrapper-phone" style="display: flex;">
                        <input class="form-control input-md" placeholder="+880" style="width: 55px;pointer-events: none; "><input value="<?php echo $phone; ?>" maxlength="10" style="width: -webkit-fill-available;" class="form-control input-md" type="tel" placeholder="123-456-6789" id="phone" name="phone">
                      </div>
                      </div>
                      <div class="form-group mb-3">
                        <label class="control-label">Brand (If any)</label>
                        <input value="<?php echo $brand; ?>" class="form-control input-md" name="brand" placeholder="Enter Brand" type="text">
                      </div>
                      <div class="form-group mb-3">
                        <label class="control-label">Short Description (10+ Characters)<span class="required">*</span></label>
                        <textarea maxlength="108" id="minle" class="form-control input-md" name="shortdesc" required><?php echo $short_desc; ?></textarea>
                      </div>
                      <div class="form-group md-3">
                        <label class="control-label">Description<span class="required">*</span></label>
                        <textarea  id="summernote" name="description" required><?php echo $des; ?></textarea>
                      </div>
                      <input type="hidden" value="<?php echo $ad_id; ?>" name="ad_id">
                      <button type="submit" class="btn btn-common fullwidth mt-4">Save</button>
                      <a class="btn btn-common fullwidth mt-4" href="ad-images?node=<?php echo $ad_id; ?>">Edit Images</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <?php include("../Snippets/footer.php");?>
    <a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
    </a>
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <script src="../assets/js/jquery-min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/waypoints.min.js"></script>
    <script src="../assets/js/wow.js"></script>
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/jquery.slicknav.js"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/form-validator.min.js"></script>
    <script src="../assets/js/contact-form-script.min.js"></script>
    <script src="../assets/js/summernote.js"></script>
    <script src="../assets/js/password-validate.js"></script>
    <script>
      $('#summernote').summernote({
          height: 250, // set editor height
          minHeight: null, // set minimum height of editor
          maxHeight: null, // set maximum height of editor
          focus: false // set focus to editable area after initializing summernote
      });
    </script>
  </body>
</html>