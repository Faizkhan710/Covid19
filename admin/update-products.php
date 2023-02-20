<?php

use LDAP\Result;

 include "header.php"; ?>
<div id="admin-content">
  <div class="container">
  <div class="row">
    <div class="col-md-12">
        <h1 class="admin-heading">Update Products</h1>
    </div>
    <div class="col-md-offset-3 col-md-6">


        <?php
        
        include "config.php";

        
        $post_id  =  $_GET["id"];

        $query = "SELECT * FROM `product` LEFT JOIN category ON product.category = category.category_id LEFT JOIN user ON product.author = user.user_id WHERE product.post_id  = {$post_id}";


        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) > 0) {

            $row = mysqli_fetch_assoc($result)

            
        
        ?>

        <!-- Form for show edit-->
        <form action="" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="form-group">
                <input type="hidden" name="products_id"  class="form-control" value="<?php echo$row['post_id']; ?>" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputTile">Title</label>
                <input type="text" name="products_title"  class="form-control" id="exampleInputUsername" value="<?php echo$row['title']; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"> Description</label>
                <textarea name="productsdesc" class="form-control"  required rows="5">
                <?php echo $row["description"]; ?>
                </textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputCategory">Category</label>
                <select class="form-control" name="category">
                    <option value="<?php echo $row["category_id"]; ?>"><?php echo $row["category_name"]; ?></option>
                  
                </select>
            </div>
            <div class="form-group">
                <label for="">Product image</label>
                <input type="file" name="new-image">
                <img  src="upload/<?php echo$row['post_img']; ?>" height="150px">
                <input type="hidden" name="old-image" value="">
            </div>
            <input type="submit" name="submit" class="btn btn-primary" value="Update" />
        </form>
        <!-- Form End -->

        <?php }
        
        else{
            echo "Result not found";

        } 
      
         ?> 
      </div>
    </div>
  </div>
</div>
<?php include "footer.php"; ?>
