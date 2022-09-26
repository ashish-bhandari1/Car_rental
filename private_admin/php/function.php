<?php
class admin{
    function __construct($user, $pw){
        $mysqli =  new mysqli('localhost','root','','car_rental_admin');
        if(!$mysqli){
            die('
            <script>
            alert("Can not connect to database");
            window.location = ("../index.php");
            </script>
            ');
        }
        $query = "SELECT * FROM ADMIN";
        $result = $mysqli->query($query);
        if(!$result){
            die('
            <script>
            alert("Can not connect to table");
            window.location = ("../index.php");
            </script>
            ');
        }

        $row = mysqli_fetch_assoc($result);
        session_start();

        while($row){
         
            if($row['username'] == $user && $row['password'] == md5($pw)){
                $_SESSION ["xuser"] = $user;
                $_SESSION["xpw"] = md5($pw);
                echo '<script>
                window.location = ("../body.php");
                </script>';
            }
            
            else{
                echo '
                <script>
                alert("Username password does not match! Try again");
                window.location = ("../index.php");
                </script>
                ';
                
            }
        }
    }
}

class admin_setting{
    function change_pw($current, $new, $renew){
        session_start();
        $password = $_SESSION ["xpw"];


        if($password == $current){
        if($renew == $new){
            $mysqli =  new mysqli('localhost','root','','car_rental_admin');
            if(!$mysqli){
                die('
                <script>
                alert("Can not connect to database");
                window.location = ("../p_home.php");
                </script>
                ');
            }
           
            $query = "UPDATE admin SET password = '$renew' ";
            $result = $mysqli->query($query);
            if($result){
                $_SESSION["pw"] = $renew;

                echo '
                <script>
                alert("Password Successfully changed!");
                window.location = ("../index.php");
                </script>
                ';
                 }
            }
            else{
                die('
                <script>
                alert("Password doesnot match!");
                window.location = ("../setting.php");
                </script>
                ');  
            }
        }
        else{
            echo $current."<br>";
            echo $password;
            die('
            <script>
            alert("Incorrect Current Password!");
            window.location = ("../setting.php");
            </script>
            ');  
        }
    }
}


class c_edit{
    
    function edit ($id, $name, $profile,$color, $power, $tire, $seat, $brand, $model, $rate, $desc,  $display)
    {
        $mysqli = new mysqli("localhost","root","","car_rental");
        if(mysqli_connect_errno()){
            die("Error 01: cannot connect to Database <a href='#'>Report this error</a>".mysqli_connect_error());
        }
        // image file directory
        $target = "../../userimg/".basename($profile);
        
        //get image height and width
        
        $image_info = getimagesize($_FILES["profile"]["tmp_name"]);
     
        $allowed_image_extension = array(
            "png",
            "PNG",
            "jpg",
            "JPG",
            "jpeg",
            "JPEG"
        );

        $file_extension = pathinfo($_FILES["profile"]["name"], PATHINFO_EXTENSION);
    
       
        //validate extension
        if (! in_array($file_extension, $allowed_image_extension)) {
            echo '
            <script>
            alert("Error: Upload valid images. Only PNG and JPEG are allowed.");
            window.location = ("../car.php");
            </script>
            '; 
        }
        //validate size
        else if($_FILES["profile"]["size"] > 2000000){
            echo '
            <script>
            alert("Error: Image size exceeds 2MB");
            window.location = ("../car.php");
            </script>
            '; 
        }
        //
      
        else{   
            if(move_uploaded_file($_FILES["profile"]["tmp_name"], $target)){   
                     
                $qry = "UPDATE car SET name = '$name' , image = '$profile', color =  '$color', power = '$power',  tire =  '$tire',  seat =  '$seat', brand = '$brand', model =  '$model', rate = '$rate', description = '$desc', display =  '$display' WHERE id = '$id'";
                $result = $mysqli->query($qry);

                if(!$result){
                    echo("Data insertion error, : ".$mysqli -> error);
                    //header("Location: ../movies.php?msg =  <i class='errorMsg' id = 'ermsg' style='color:red'> Error while movie uploading<span  id = 'errorClose' onclick='errorfunction()'> close</span> </i>");
                }
                if($result){
                 echo '
                    <script>
                    alert("Successfully Updated");
                    window.location = ("../car.php");

                    </script>
                    ';  
                }          
            }
            else{
                echo '
                <script>
                alert("Unable to Update! Please try again later");
                window.location = ("../car.php");
                </script>
                ';  
            }
      
    }
}

  
}


?>