
<?php include_once('common/header.php'); ?>
<main class="l-main">
<div class="content-wrapper content-wrapper--with-bg">
 <h1 class="page-title">Add new Car</h1>
 <div class="card-wrapper">
 <div class="form-wrapper">
 <form method="POST" enctype="multipart/form-data" action="forms/obj.php">
            <h2> Form</h2>
                <div class="input">
                    <label>Image</label>
                    <input type="file" name="profile" type="file"  accept=".jpg,.png" required = "required">
                </div>
                <div class="input">
                    <label>Car Name</label>
                    <input type="text" name="name"  required = "required" >
                </div>
                <div class="input">
                    <label>Color</label>
                    <input type="text" name="color"  required = "required">
                </div>                
                <div class="input">
                    <label>Engine Power</label>
                    <input type="text" name="power"  required = "required" >
                </div>
                <div class="input">
                    <label>Tire</label>
                    <input type="text" name="tire"  required = "required" >
                </div>
                <div class="input">
                    <label>Seat</label>
                    <input type="text" name="seat" required = "required" >
                </div>
                <div class="input">
                    <label>Brand</label>
                    <input type="text" name="brand"  required = "required" >
                </div>
                <div class="input">
                    <label>Model</label>
                    <input type="text" name="model" required = "required" >
                </div>
                <div class="input">
                    <label>Rate</label>
                    <input type="number" name="rate" required = "required" >
                </div>
                <div class="input">
                    <label>Description</label><br>
                    <textarea rows = '3' cols = '65' name="desc" required = "required" >    </textarea>
                </div>
          
                <div class="input">
                    <label>Display</label>
                    <select  name="verify" >
                    <option value="0" selected="selected">Hide</option>
                    <option value="1">Show</option>
                </select>

            <div class="input">
                <div class="btn-input">
                <Button type="submit" name="addCar">Add</Button>  
                </div>                
            </div>                
            </form>               
                    
        </div>
   </div>
 
</div>
</main>

<?php include_once('common/footer.php'); ?>
