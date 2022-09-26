
<?php

$mysqli =  new mysqli('localhost','root','','car_rental');
if(!$mysqli){
    die('
    <script>
    alert("Can not connect to database");
    window.location = ("index.php");
    </script>
    ');
}

$id = $_GET['id'];
$query = "SELECT * FROM car  WHERE id = '$id' ";

$result = $mysqli->query($query);

if(!$result ){
    die('
    <script>
    alert("Can not connect to table");
    window.location = ("index.php");
    </script>
    ');
}
$row = mysqli_fetch_assoc($result);

include_once('common/header.php');

?>
  <!-- <div class = "detail-wrapper">
      <div class = "top-wrapper">
        <div class = "row">
          <div class = "col-md-5 flim">
            <img class="embed-responsive-item " src="images/<?php echo $row['image']; ?>" ></iframe>
          </div>
          <div class = "col-md-6 detail" >
            <h1>   <?php  echo $row['name']; ?>   </h1>
            <p class="card-topic"><span>Color:</span>
              <?php  echo $row['color']; ?>
            </p>
            <p class="card-topic"><span>Engine Power:</span>
              <?php  echo $row['power']; ?>
            </p>
            <p class="card-topic"><span>Tire:</span>
              <?php  echo $row['tire']; ?>
            </p>
            <p class="card-topic"><span>Seat:</span>
              <?php  echo $row['seat']; ?>
            </p>
            <p class="card-topic"><span>Brand:</span>
              <?php  echo $row['brand']; ?>
            </p>
            <p class="card-topic"><span>Model:</span>
              <?php  echo $row['model']; ?>
            </p>
            <p class="card-topic"><span>Rate:</span>
              <?php  echo $row['rate']; ?>
            </p>
                
            <p class="card-topic back-home" ><a class="card-text"  href = "index.php #movie-section"> <i class="fas fa-arrow-left"></i>Back Home  </a></p>
          </div>
        </div>
        <p class="card-topic" style = "margin:4px 10px; padding:5px 8px"> <?php  echo $row['description']; ?>
        </p>
        <div class = "book-now">
          <div class = "show-book">
            <form method = "post" action = "book.php"> 
              <input type = "text" name = "id" value = "<?php echo $movie ?>" style = "display:none">
              <button  class="btn btn-primary" name = "moviebtn" type = "submit"> Book Now</button>  
            </form>
          </div>
        </div>
      </div>
    </div> -->

  <div class = "detail-wrapper">
      <div class = "top-wrapper">
        <div class = "row">
          <div class = "col-md-6 flim">
            <img class="embed-responsive-item " src="userimg/<?php echo $row['image']; ?>" ></iframe>
          </div>
          <div class = "col-md-5 detail" >
            <h1>   <?php  echo $row['name']; ?>   </h1>
            <p class="card-topic"><span>Color:</span>
            <?php  echo $row['color']; ?>
            </p>
            <p class="card-topic"><span>Engine Power:</span>
              <?php  echo $row['power']; ?>
            </p>
            <p class="card-topic"><span>Tire:</span>
              <?php  echo $row['tire']; ?>
            </p>
            <p class="card-topic"><span>Seat:</span>
              <?php  echo $row['seat']; ?>
            </p>
            <p class="card-topic"><span>Brand:</span>
              <?php  echo $row['brand']; ?>
            </p>
            <p class="card-topic"><span>Model:</span>
              <?php  echo $row['model']; ?>
            </p>
            <p class="card-topic"><span>Rate:</span>
              <?php  echo $row['rate']; ?>
            </p>
                
            <p class="card-topic back-home" ><a class="card-text"  href = "index.php "> <i class="fas fa-arrow-left"></i>Back Home  </a></p>
          </div>
        </div>
        <p class="card-topic" style = "margin:4px 10px; padding:5px 8px"> <?php  echo $row['description']; ?>
        </p>
        <div class = "book-now">
          <div class = "show-book">
          <a href="book.php?id=<?php echo $row['id']; ?>" class="btn btn-primary booknow">Book Now</a>
          </div>
        </div>
      </div>
    </div>     
</body>
<?php include_once('common/footer.php'); ?>
