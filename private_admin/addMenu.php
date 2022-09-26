
<?php include_once('common/header.php'); ?>
<main class="l-main">
<div class="content-wrapper content-wrapper--with-bg">
 <h1 class="page-title">Add new Menu</h1>
 <div class="card-wrapper">
 <div class="form-wrapper">
 <form method="POST" enctype="multipart/form-data" action="forms/obj.php">
            <form method="post" action="forms/obj.php">
                <h2> Add Menu</h2>
                <div class="input">
                    <label>Link Name</label>
                    <input type="text" name="name"  required = "required">
                </div>
                <div class="input">
                    <label>Link </label>
                    <input type="text" name="link"  required = "required">
                </div>
          
                <div class="input">
                    <label>Active</label>
                    <select  name="active" >
                    <option value="0" selected="selected">Not Active</option>
                    <option value="1">Active</option>
                    </select>
                    
                </div>
                <div class="input">
                <div class="btn-input">
                <Button type="submit" name="menu">Add</Button>  
                <a href="menu.php">Back</a>
                </div>  
                </div>
            </form>
        </div>
   </div>
 
</div>
</main>

<?php include_once('common/footer.php'); ?>
