

<?php include_once('common/header.php'); 

$mysqli =  new mysqli('localhost','root','','car_rental_admin');
if(!$mysqli){
    die('
    <script> alert("Can not connect to database");   </script>
    ');
}
$query = "SELECT * FROM menu";
$result = $mysqli->query($query);
if(!$result){
    die('
    <script> alert("Can not connect to table");       </script>
    ');
}
?>
<main class="l-main">
<div class="content-wrapper content-wrapper--with-bg">
 <h1 class="page-title">Menu</h1>
 <div class="card-wrapper">
 <a href = "addmenu.php" id = "addMenu">Add New menu</a>
      <table class="table ">
      <thead class="thead-dark">
         <tr>
         <th>SN</th>
         <th>Name</th>
         <th>Link</th>
         <th>Active</th>
         <th>Operation</th>  
         </tr>
     </thead>
         <tbody>
          
      <?php while($row = mysqli_fetch_assoc($result)){ 
         echo '<tr>
         <td> '. $row['id'].' </td>
         <td> '. $row['link_name'].' </td>
         <td> '. $row['link'].' </td>';
        
         if($row['active'] == 0){ 
             echo '<td style="color:red"> No </td>'; 
            }
            else{
                echo '<td style="color:green"> Yes </td>' ;
            }
        ?>
        <td>
         <div class = "tblbtn" style = "width:150px">
                           <a class="edit" href="editMenu.php?ID=<?php echo $row['id']?>" title="Click here to edit this data"> <i class="fas fa-edit"></i>Edit</a>
                           <form method="POST" action="php/obj.php" > 
                              <input type = "text" name = "id" value = "<?php echo $row['id']?>" style="display:none">
                              <button type="submit" name="deletemenu" onclick="return confirm('Are you sure you want to delete this data?');" title="Click here to delete this data"> 
                              <i class="fas fa-trash-alt" style="color:red"></i>Delete
                              </button>
                           </form>
        </div>
        </td>
        </tr>
        <?php             
      }
         ?>
     </tbody>
    </table>     
   </div>
 
</div>
</div>
</main>

<?php include_once('common/footer.php'); ?>
