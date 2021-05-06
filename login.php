<?php
  require '../constants/config.php';
  require '../constants/check-login.php';
  ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $site_titlex; ?> - Admin Dashboard</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="../assets/icon/favicon.ico">
    <link rel="stylesheet" type="text/css" href="../assets/css/main-admin.css">
    <style>
        
    .admin_form{
       height: 100vh;
       display: flex;
       justify-content: center;
       align-items: center;
    }
    .log-btn{
        cursor: pointer;
        background: #0178ee;
        color: white;
    }
    .log-btn:hover{
        background: white;
        color: #0178ee;box-shadow: 0px 3px 5px 0px #0178ee;
    }
    .register-form{
        padding: 4% 8%;
    box-shadow: 0px 3px 5px 0px #0178ee;
    }
    
    @media(min-width:768px){
            .login-form{
                min-width: 430px;
            }
        }
        @media(max-width:768px){
            .login-form{
                min-width: auto;
            }
        }
        .centered{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .centered>img{
            max-width: 400px;
        }
        h3{    text-transform: uppercase;
    font-size: x-large;
    font-weight: 700;
    color: #0178ee;}
    </style>

</head>
    <div class="container admin_form">
        
            <div class="register-form login-area">
                <a target="_blank" class="centered" href="../"><?php echo $site_title; ?></a><br>
              <h3>
                Login
              </h3>
              <form  class="login-form" action="../app/login.php" method="POST" autocomplete="off">
                <?php require '../admin/admin-login.php'; ?>
                <div class="form-group">
                  <div class="input-icon">
                    <i class="lni-envelope"></i>
                    <input type="text" id="UserEmail" class="form-control" name="user_email" required placeholder="Email Address">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-icon">
                    <i class="lni-lock"></i>
                    <input type="password" name="password" required class="form-control" placeholder="Password">
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" required name="check" id="checkedall">
                    <label class="custom-control-label" for="checkedall">Im not a robot</label>
                  </div>
                </div>
                <div class="text-center">
                  <input id="btnSubmit" type="submit" value="Login" class="btn btn-common log-btn">
                </div>
              </form>
            
        </div>
    </div>