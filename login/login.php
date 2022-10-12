<!DOCTYPE html>  
<html>
    <title>Login</title>
<head>
<link href="../fontawesome/css/all.css" rel="stylesheet"> 


    <link rel = "stylesheet" type ="text/css" href="../css/login.css">
</head>
<body>

    <div class = "form-wrapper">
    <?php   session_start();
                     if(!isset($_SESSION["cusEmail"] )){
                 ?>
            <form method = "post" action= "obj.php">
            <h1>sign in</h1>
            <div class = "input">
                <input name = "username" id = "username" required = "required" type = "text" placeholder = "Username">
                <input name = "password" id = "pw" required = "required" type = "password" placeholder = "Password">
                <button type = "submit" name = "login" class = "login">Login </button>
                <a href = "../index.php" style = "margin-top:-4vh; font-size: 13px" >Back Home</a>
                <a href = "register.php" style = " color: rgb(126, 81, 231);
">Register now</a>
            </div>
                     
        </form>
         <?php  }else{  ?>
            <form method = "post" action= "obj.php">
            <h1>sign in</h1>
            <div class = "input">
                 <input name = "current_pw" id = "password" required = "required" type = "password" placeholder = "Current Password">
                <input name = "new_pw" id = "pw" required = "required" type = "password" placeholder = "New Password">
                <input name = "retype_new_pw"  required = "required" type = "password" placeholder = "Retype New Password">
                <button type = "submit" name="change_pw" class = "login">Change Password </button>
                <a href = "../index.php" style = " color: rgb(126, 81, 231);
">Back Home</a>
            </div>
                     
        </form>
         <?php  }?>
   
   
   
        </div>
    <script src="../js/script.js"></script>

</body>

</html>