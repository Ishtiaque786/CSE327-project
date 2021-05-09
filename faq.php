<?php

  require 'constants/config.php';
  require 'constants/check-login.php';
  $page = 'faq';
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $site_titlex; ?> - Frequently Asked Questions</title>
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
              <h2 class="product-title">FAQ</h2>
              <ol class="breadcrumb">
                <li><a href="./">Home /</a></li>
                <li style="color:white;" class="current">FAQ</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="faq section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="head-faq text-center">
              <h2 class="section-title">Frequently Asked Questions</h2>
            </div>
            <div class="panel-group" id="accordion">
              <?php
                try {
                    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                	
                 	$stmt = $conn->prepare("SELECT * FROM tbl_faqs ORDER BY id");
                	$stmt->execute();
                	$result = $stmt->fetchAll();
                
                    foreach($result as $row)
                    {
                    	?>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $row['id']; ?>">
                    <?php echo $row['quest']; ?>
                    </a>
                  </h4>
                </div>
                <div id="collapse<?php echo $row['id']; ?>" class="panel-collapse collapse">
                  <div class="panel-body">
                    <p>
                      <?php echo $row['answ']; ?>
                    </p>
                  </div>
                </div>
              </div>
              <?php
                }
                				  
                }catch(PDOException $e)
                   {
                   echo "Connection failed: " . $e->getMessage();
                   }
                
                   ?>
            </div>
          </div>
        </div>
      </div>
    </div>
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
=======
require '../constants/config.php';
require '../constants/check-login.php';

if ($logged == "1") {
       if ($myrole == "admin") {

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $site_titlex; ?> - Frequently Asked Questions</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../assets/css/main-admin.css">

</head>

<body>

    <div id="wrapper">

         <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a target="_blank" class="navbar-brand" href="../"><?php echo $site_title; ?></a>
            </div>
        

            <ul class="nav navbar-top-links navbar-right">

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php echo $myusername; ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="account"><i class="fa fa-gear fa-fw"></i> Account Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>

                </li>

            </ul>
           

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="./"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="pub-ads"><i class="fa fa-edit fa-fw"></i> Published Ads</a>
                        </li>
                        <li>
                            <a href="active-ads"><i class="fa fa-check-circle-o fa-fw"></i> Active Ads</a>
                        </li>
                        <li>
                            <a href="pending-ads"><i class="fa fa-spinner fa-fw"></i> Pending Ads</a>
                        </li>
                        <li>
                            <a href="featured-ads"><i class="fa fa-star-o fa-fw"></i> Featured Ads</a>
                        </li>
                        <li>
                            <a href="users"><i class="fa fa-users fa-fw"></i> Users</a>
                        </li>
                        <li>
                            <a href="account"><i class="fa fa-cog fa-fw"></i> Account Settings</a>
                        </li>
                        <li>
                            <a href="faq"><i class="fa fa-question-circle fa-fw"></i> FAQ</a>
                        </li>
                        <li>
                            <a href="about"><i class="fa fa-info-circle fa-fw"></i> About</a>
                        </li>
                         <li>
                            <a href="../logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>

                    </ul>
                </div>
              
            </div>
        
        </nav>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
            <h4 class="page-header">Frequently Asked Questions</h4>
        </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                     <?php require 'constants/check-reply.php'; ?>
                     <a href="add-faq" class="btn btn-default">Add FAQ</a><br><br>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Frequently Asked Questions
                        </div>


                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Question</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    try {
                                   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
                                  $stmt = $conn->prepare("SELECT * FROM tbl_faqs");
                                  $stmt->execute();
                                  $result = $stmt->fetchAll();

                                  foreach($result as $row)
                                  {


                                    ?>
                                    <tr class="odd gradeX">
                                        <td ><?php echo $row['quest']; ?> </td>
                                        <td >
                                             <div class="btn-group">
                                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                                                    Select Action <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                     <li><a href="edit-quest?node=<?php echo $row['id'];?>">Edit</a>
                                                    </li>
    
                                                <li><a onclick = "return confirm('Deleting faq ?');" href="app/drp-qs.php?node=<?php echo $row['id'];?>">Delete</a>
                                                    </li>
         
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <?php
        

                                  }
                      
                                 }catch(PDOException $e)
                                   {
                                     echo "Connection failed: " . $e->getMessage();
                                  }

                                    ?>

                                  
                                </tbody>
                            </table>

                        </div>

                    </div>
    
                </div>
             
            </div>
         

        </div>


    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
    <script src="dist/js/sb-admin-2.js"></script>


    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
