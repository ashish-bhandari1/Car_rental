<?php
include 'function.php';

if(isset($_POST["admin"])){
    $user = $_POST["username"];
    $pw = $_POST["password"]; 
    
    $obj = new admin($user, $pw );
}


if(isset($_POST["c_update"])){
    $id = $_POST["id"];
    $profile = $_FILES['profile']['name'];
    $name = $_POST["name"];
    $color = $_POST["color"];
    $power = $_POST["power"];
    $tire = $_POST["tire"];
    $seat = $_POST["seat"];
    $brand = $_POST["brand"];
    $model = $_POST["model"];
    $rate = $_POST["rate"];
    $desc = $_POST["desc"];
    $display = $_POST["verify"];

    $obj = new c_edit();
    $obj->edit($id, $name, $profile,$color, $power, $tire, $seat, $brand, $model, $rate, $desc, $display);
}


if(isset($_POST["deletecar"])){

    $id = $_POST['id'];
   
    $mysqli =  new mysqli('localhost','root','','car_rental');
    if(!$mysqli){
        die('
        <script>
        alert("Can not connect to database");
        window.location = ("../car.php");
        </script>
        ');
    }

    $query = "DELETE FROM car WHERE id = '$id' ";
    $result = $mysqli->query($query);
    
    if(!$result){
        die('
        <script>
        alert("Can not connect to table");
        window.location = ("../car.php");
        </script>
        ');
    }
       
    else{
            echo '
            <script>
            alert("Successfully deleted!");
            window.location = ("../car.php");
            </script>
            ';
            
    }
    
}

  

if(isset($_POST["deletemenu"])){

    $id = $_POST['id'];
   
    $mysqli =  new mysqli('localhost','root','','car_rental_admin');
    if(!$mysqli){
        die('
        <script>
        alert("Can not connect to database");
        window.location = ("../menu.php");
        </script>
        ');
    }

    $query = "DELETE FROM menu WHERE id = '$id' ";
    $result = $mysqli->query($query);
    
    if(!$result){
        die('
        <script>
        alert("Can not connect to table");
        window.location = ("../menu.php");
        </script>
        ');
    }
       
    else{
            echo '
            <script>
            alert("Successfully deleted!");
            window.location = ("../menu.php");
            </script>
            ';
            
    }
    
}

  


if(isset($_POST["admin_pw"])){   
    $current = md5($_POST['current_pw']);
    $new = md5($_POST['new_pw']);
    $renew = md5($_POST['retype_new_pw']);
   
    $obj = new admin_setting();
    $obj->change_pw($current, $new, $renew);
 
}



?>