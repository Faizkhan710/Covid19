<?php include "header.php"; ?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1 class="admin-heading">All Products</h1>
            </div>
            <div class="col-md-2">
                <a class="add-new" href="add-products.php">add Products</a>
            </div>
            <div class="col-md-12">
                <?php

                include "config.php";

                $query = "SELECT * FROM `product` LEFT JOIN category ON product.category = category.category_id LEFT JOIN user ON product.author = user.user_id ORDER BY product.post_id DESC;";

                $result = mysqli_query($conn, $query);
                if(mysqli_num_rows($result) > 0) {
                

                ?>
                <table class="content-table">
                    <thead>
                        <th>S.No.</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Date</th>
                        <th>Author</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>

                    <?php while($row = mysqli_fetch_assoc($result))
                    
                    {
                        ?>
                        <tr>
                            <td class='id'><?php echo $row["post_id"]; ?></td>
                            <td><?php echo $row["title"]; ?></td>
                            <td><?php echo $row["category_name"]; ?></td>
                            <td><?php echo $row["post_date"]; ?></td>
                            <td><?php echo $row["username"]; ?></td>
                            <td class='edit'><a href='update-products.php?id=<?php echo $row["post_id"]; ?>'><i class='fa fa-edit'></i></a></td>
                            <td class='delete'><a href='delete-products.php?id=<?php echo $row["post_id"]; ?>'><i class='fa fa-trash-o'></i></a></td>
                        </tr>
                        <?php } ?>
                      
                    </tbody>
                </table>

                <?php } ?>
                <ul class='pagination admin-pagination'>
                    <li class="active"><a>1</a></li>
                    <li><a>2</a></li>
                    <li><a>3</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>