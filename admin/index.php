<?php
session_start();
include('includes/config.php');
if(isset($_POST['signin']))
{
$uname=$_POST['username'];
$password=md5($_POST['password']);
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
echo "<script type='text/javascript'> document.location = 'changepassword.php'; </script>";
} else{
  
  echo "<script>alert('Invalid Details');</script>";

}

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        
        <!-- Title -->
        <title>Employee leave management system |  Admin</title>
        <link rel="shortcut icon" type="image/png" href="favicon.png"/>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta charset="UTF-8">
        <meta name="description" content="Responsive Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link type="text/css" rel="stylesheet" href="../assets/plugins/materialize/css/materialize.min.css"/>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="../assets/plugins/material-preloader/css/materialPreloader.min.css" rel="stylesheet">        
       <!--<link href="../assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>-->
        <link href="../assets/css/custom.css" rel="stylesheet" type="text/css"/>
    </head>
    <body  class="signin-page"style="background-color:#9f2063;">
  <!--style=" background-image: url('../assets/images/img1.png') no-repeat;"-->
        <div class="mn-content valign-wrapper" style="background-color:#9f2063;">

            <main class="mn-inner container">
  <h4 align="center"><a href="../index.php"style="color:black"><b><u>EMPLOYEE LEAVE MANAGEMENT SYSTEM | Admin Login</u></b></a></h4>
                <div class="valign">
                      <div class="row">

                          <div class="col s12 m6 l8 offset-l2 offset-m3" >
                              <div class="color:#131338" >
                                  <div class="card-content ">
                                      <span class="card-title"style="font-size:30px"><center>SIGN IN</center></span >
                                       <div class="row">
                                           <form class="col s12" name="signin" method="post" >
                                               <div class="input-field col s12">
                                                   <input id="username" type="text" name="username" class="validate" autocomplete="off" style="font-size:20px" required  >
                                                   <label for="email"style="color:black"style="font-size:30px">Username</label>
                                               </div>
                                               <div class="input-field col s12">
                                                   <input id="password" type="password" class="validate" name="password" autocomplete="off" style="font-size:20px" required>
                                                   <label for="password" style="color:black"style="font-size:30px">Password</label>
                                               </div>
                                               <div class="col s12 right-align m-t-sm">
                                                
                                                   <input type="submit" name="signin" value="Sign in" class="waves-effect waves-light btn teal">
                                               </div>
                                           </form>
                                      </div>
                                  </div>
                                  <img src="img1.png" alt="Centrino Technologies" width="720px" height="350px">
                              </div>
                          </div>
                          
                          
                    </div>
                </div>
                <div class="footer">
                    <p class="copyright"><center><a href="https://centrino.co.ke/">© Centrino Technologies 2021 </a></center></p>

                </div>
            </main>
        </div>
        
        <!-- Javascripts -->
        <script src="../assets/plugins/jquery/jquery-2.2.0.min.js"></script>
        <script src="../assets/plugins/materialize/js/materialize.min.js"></script>
        <script src="../assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
        <script src="../assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="../assets/js/alpha.min.js"></script>
        
    </body>
</html>