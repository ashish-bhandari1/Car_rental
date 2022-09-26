<?php 
   $mysqli =  new mysqli('localhost','root','','car_rental');
   $conn =  new mysqli('localhost','root','','car_rental_admin');
   if(!$mysqli || !$conn){
       die('
       <script>
       alert("Can not connect to database");
       windows.location = ("index.php");
       </script>
       ');
   }
   
   $query = "SELECT * FROM car WHERE display = '1'";
   $menuQry = "SELECT * FROM menu WHERE active = '1'";
   
   $result = $mysqli->query($query);
   $menuResult = $conn->query($menuQry);
   $btnResult = $conn->query($menuQry);
   
   if(!$result || !$menuResult ){
       die('
       <script>
       alert("Can not connect to table");
       windows.location = ("index.php");
       </script>
       ');
   }
   
   
   
   ?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!DOCTYPE html>
<html>
   <head>
      <title>Car Rental</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah|Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Calistoga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Tomorrow&display=swap" rel="stylesheet">
    <link href="fontawesome/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

    <header class="nav-head navbar" >
        <div class="logo" id="logo" ><img src="images/logo.png" alt="Logo"></div>
        <div class="navbar" id="nav">
            <ul class="nav-ul">

                  <?php 
                     while($qryRow = mysqli_fetch_assoc($menuResult)){
                     ?>               
                  <li class="nav-item ">
                     <a class="nav-link" href="<?php echo $qryRow['link']; ?> "><?php echo $qryRow['link_name'] ?> </a>
                  </li>
                  <?php } ?>
<!--                   
                <li>
                    <a href="#Home-session"> Home</a>
                </li>
                <li>
                    <a href="#Home-session"> Service</a>
                </li>
                <li>
                    <a href="#Home-session"> Rent</a>
                </li>
                <li>
                    <a href="#Home-session"> Price</a>
                </li>
                <li>
                    <a href="#Home-session"> tour package</a>
                </li> -->

            </ul>
        </div>

        <div class="icon" id="menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <div class="user" id="user"><img src="images/account.svg" alt="Logo"></div>

    </header>
    <body>

    <div class="loginForm" id="login_form">
        <div class="formWrapper" id="form_wrapper">
            <form method="post" class="login-form">
            <?php 
                     session_start();
                     if(isset($_SESSION["cusEmail"] )){
                    ?>
                        <a href="login/login.php"> Change Passowrd</a>
                        <a href = "login/logout.php" onclick="return confirm('Are you sure you want to Logout?');" >Logout</a>
                    <?php }
                     else{
                        echo'
                        <a href="login/login.php"> Login</a>
                        <a href="login/register.php"> register now</a> ';
                     }
                     ?>
              
                
            </form>
        </div>
    </div>
    <!-- login form _____________ End-->
 
