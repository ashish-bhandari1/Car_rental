<?php 
$mysqli =  new mysqli('localhost','root','','car_rental');
if(!$mysqli){
    die('
    <script>
    alert("Can not connect to database");
    windows.location = ("../index.php");
    </script>
    ');
}

$id =  $_GET["ID"];

$query = "SELECT * FROM car WHERE id = '$id'";

$result = $mysqli->query($query);

if(!$result ){
    die('
    <script>
    alert("Can not connect to table");
    windows.location = ("../index.php");
    </script>
    ');
}
$row = mysqli_fetch_assoc($result);

?>

<?php include_once('common/header.php'); ?>
<main class="l-main">
<div class="content-wrapper content-wrapper--with-bg">
 <div class="card-wrapper">
 <div class="form-wrapper">
 <form method="POST" enctype="multipart/form-data" action="php/obj.php">
            <h2> Edit Car Data</h2>
                <div class="input" style = "display:none">
                    <label>ID</label>
                    <input type="text" name="id"  value = "<?php echo $id ?>" required = "required">
                </div>
                <div class="input">
                    <label>Image</label>
                    <input type="file" name="profile" type="file"  accept=".jpg,.png" required = "required">
                </div>
                <div class="input">
                    <label>Car Name</label>
                    <input type="text" name="name"  required = "required" value = "<?php echo $row['name']?>">
                </div>
                <div class="input">
                    <label>Color</label>
                    <input type="text" name="color"  required = "required" value = "<?php echo $row['color']?>">
                </div>                
                <div class="input">
                    <label>Engine Power</label>
                    <input type="text" name="power"  required = "required" value = "<?php echo $row['power']?>">
                </div>
                <div class="input">
                    <label>Tire</label>
                    <input type="text" name="tire"  required = "required" value = "<?php echo $row['tire']?>" >
                </div>
                <div class="input">
                    <label>Seat</label>
                    <input type="text" name="seat" required = "required" value = "<?php echo $row['seat']?>">
                </div>
                <div class="input">
                    <label>Brand</label>
                    <input type="text" name="brand"  required = "required" value = "<?php echo $row['brand']?>">
                </div>
                <div class="input">
                    <label>Model</label>
                    <input type="text" name="model" required = "required" value = "<?php echo $row['model']?>">
                </div>
                <div class="input">
                    <label>Rate</label>
                    <input type="text" name="rate" required = "required" value = "<?php echo $row['rate']?>">
                </div>
                <div class="input">
                    <label>Description</label>
                    <input type="text" name="desc" required = "required"  style = "min-height:70px" value = "<?php echo $row['description']?>">
                </div>
          
                <div class="input">
                    <label>Display</label>
                    <select  name="verify" >
                    <option value="0" selected="selected">Hide</option>
                    <option value="1">Show</option>
                </select>
                
            <div class="input">
                <div class="btn-input">
                <Button type="submit" name="c_update">Update</Button>  
                <a href="car.php">Back</a>
                </div>                
            </div>                
            </form>     
         
        </div>
   </div>
 
</div>
</main>

<?php include_once('common/footer.php'); ?>

