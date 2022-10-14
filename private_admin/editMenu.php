
<?php 
   $mysqli =  new mysqli('localhost','root','','car_rental_admin');
   if(!$mysqli){
       die('
       <script>
       alert("Can not connect to database");
       window.location = ("menu.php");
       </script>
       ');
   }
   $id = $_GET['ID'];
   $query = "SELECT * FROM menu WHERE id = '$id'";

   $result = $mysqli->query($query);
   $row = mysqli_fetch_assoc($result);
?>

<?php include_once('common/header.php'); ?>
<main class="l-main">
<div class="content-wrapper content-wrapper--with-bg">
 <div class="card-wrapper">
 <div class="form-wrapper">
            <form method="post" action="forms/obj.php">
                <h2> Update Menu</h2>
                <div class="input">
                    <label>Link Name</label>
                    <input type="text" name="id" value = "<?php echo $row['id']; ?>" style="display:none;">
                    <input type="text" name="name"  required = "required" value = "<?php echo $row['link_name']; ?>" >
                </div>
                <div class="input">
                    <label>Link </label>
                    <input type="text" name="link"  required = "required" value = "<?php echo $row['link']; ?>" >
                </div>
          
                <div class="input">
                    <label>Active</label>
                   
                    <select  name="active" >
                    <?php 
                        if($row['active'] == 1){
                            echo' <option value="1" selected="selected">Active</option> ';
                        }else{
                            echo' <option value="0" selected="selected">Not Active</option> ';

                        }
                    ?>
                    <option value="0" >Not Active</option>
                    <option value="1">Active</option>
                    </select>
                    
                </div>
                <div class="input">
                <div class="btn-input">
                <Button type="submit" name="edit_menu">Update</Button>  
                <a href="menu.php">Back</a>
                </div>     
            </div>
            </form>
            </div>
   </div>
 
</div>
</main>
<?php include_once('common/footer.php'); ?>
