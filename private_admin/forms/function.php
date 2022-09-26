<?php
class dashboard{
    function car ($name, $profile,$color, $power, $tire, $seat, $brand, $model, $rate, $display, $desc)
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
            window.location = ("../addcar.php");
            </script>
            '; 
        }
        //validate size
        else if($_FILES["profile"]["size"] > 2000000){
            echo '
            <script>
            alert("Error: Image size exceeds 2MB");
            window.location = ("../addcar.php");
            </script>
            '; 
        }
        //
      
        else{   
            if(move_uploaded_file($_FILES["profile"]["tmp_name"], $target)){   
                     
                $qry = "INSERT INTO car VALUES('', '$name','$profile',  '$color','$power','$tire','$seat','$brand','$model','$rate','$desc','$display')";
                $result = $mysqli->query($qry);

                if(!$result){
                    echo("Data insertion error, : ".$mysqli -> error);
                    //header("Location: ../movies.php?msg =  <i class='errorMsg' id = 'ermsg' style='color:red'> Error while movie uploading<span  id = 'errorClose' onclick='errorfunction()'> close</span> </i>");
                }
                if($result){
                 echo '
                    <script>
                    alert("Successfully Added");
                    window.location = ("../addcar.php");

                    </script>
                    ';  
                }          
            }
            else{
                echo '
                <script>
                alert("Unable to Add! Please try again later");
                window.location = ("../addcar.php");
                </script>
                ';  
            }
      
    }
}

    function menu($name, $link, $verify){
        $mysqli =  new mysqli('localhost','root','','car_rental_admin');
        if(!$mysqli){
            die('
            <script>
            alert("Can not connect to database");
            window.location = ("../menu.php");
            </script>
            ');
        }
        $query = "INSERT INTO menu VALUES('', '$name','$link','$verify')";
        $Userqry = "SELECT link_name FROM menu WHERE link_name = '$name'";//username validating query

        $UserResult = $mysqli->query($Userqry);
        
        $userCount = mysqli_num_rows($UserResult);
            
        if($userCount > 0){//validaing username first    
            echo '
            <script>
            alert("Error: Link already exist!");
            window.location = ("../menu.php");
            </script>
                ';
            die();
        }
        else{
        
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
                alert("Successfully Added");
                window.location = ("../menu.php");
                </script>
                ';
            }
        }
    }

    
    function edit_menu($id, $name, $link, $verify){
        $mysqli =  new mysqli('localhost','root','','car_rental_admin');
        if(!$mysqli){
            die('
            <script>
            alert("Can not connect to database");
            window.location = ("menu.php");
            </script>
            ');
        }
        $query = "UPDATE menu SET link_name =  '$name', link = '$link', active = '$verify' WHERE id = '$id'";
        
            $result = $mysqli->query($query);
            if(!$result){
                die('
                <script>
                alert("Can not connect to table");
                window.location = ("menu.php");
                </script>
                ');
            }
            else{
                echo '
                <script>
                alert("Successfully Updated");
                window.location = ("../menu.php");
                </script>
                ';
            }
        
    }


}
?>