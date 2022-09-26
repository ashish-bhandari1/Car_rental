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
   
   
   $query = "SELECT * FROM car";
   
   $result = $mysqli->query($query);
   
   if(!$result){
       die('
       <script>
       alert("Can not connect to table");
       </script>
       ');
   }
   include_once('common/header.php');    
   ?>


<main class="l-main">
  <div class="content-wrapper content-wrapper--with-bg">
  <h1 class="page-title">Car Data</h1>
  <div style = "overflow:scroll">
            <table class="table table-bordered" >
               <thead class="thead-dark">
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Image</th>
                     <th scope="col">Name</th>
                     <th scope="col">Color</th>
                     <th scope="col">Power</th>
                     <th scope="col">Tire</th>
                     <th scope="col">Seat</th>
                     <th scope="col">Brand</th>
                     <th scope="col">Model</th>
                     <th scope="col">Rate /day</th>
                     <th scope="col">Car Description</th>
                     <th scope="col">Display</th>
                     <th>Operation</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                         while($row = mysqli_fetch_assoc($result)){
                     ?>   
                  <tr>
                     <th scope='row'> <?php echo $row['id'] ?> </th>
                     <td><img src="../userimg/<?php echo $row['image'] ?>  "></td>
                     <td>  <?php echo $row['name'] ?> </td>
                     <td>  <?php echo $row['color'] ?> </td>
                     <td>  <?php echo $row['power'] ?> </td>
                     <td>  <?php echo $row['tire'] ?> </td>
                     <td>  <?php echo $row['seat'] ?> </td>
                     <td>  <?php echo $row['brand'] ?> </td>
                     <td>  <?php echo $row['model'] ?> </td>
                     <td>  <?php echo $row['rate'] ?> </td>
                     <td>  <?php echo $row['description'] ?> </td>
                     <td>  <?php
                        if ($row['display'] == 1)
                        {
                            echo "Show";
                        } 
                        else{echo "Hide"; }?> 
                     </td>
                     <td>
                        <div class = "tblbtn">
                           <a class="edit" href="caredit.php?ID=<?php echo $row['id']?>" title="Click here to edit this data"> <i class="fas fa-edit"></i>Edit</a>
                           <form method="POST" action="php/obj.php" > 
                              <input type = "text" name = "id" value = "<?php echo $row['id']?>" style="display:none">
                              <button type="submit" name="deletecar" onclick="return confirm('Are you sure you want to delete this data?');" title="Click here to delete this data"> 
                              <i class="fas fa-trash-alt" style="color:red"></i>Delete
                              </button>
                           </form>
                        </div>
                     </td>
                  </tr>
                  <?php } ?> 
               </tbody>
            </table>
         </div>
      

 </div>
</main>

<?php include_once('common/footer.php'); ?>
