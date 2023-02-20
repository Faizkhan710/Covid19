<?php 
include "config.php";

if(isset($_FILES['fileToUpload']))
{
    $errors = array();

    $file_name = $_FILES['fileToUpload']['name'];
    $file_size = $_FILES['fileToUpload']['size'];
    $file_tmp = $_FILES['fileToUpload']['tmp_name'];
    $file_type = $_FILES['fileToUpload']['type'];
    $file_ext = (explode('.',$file_name));
    $file_ext = end($file_ext); 
    $file_ext  = strtolower($file_ext);
    $extensions = array("jpeg","jpg","png");
    
    if(in_array($file_ext,$extensions)===false)
    {
        $errors[] = "this extension file not allowed, please choose another file jpeg,jpg,png";
    }
    if($file_size > 2097152)
    {
        $errors[] = "File size must be 2 MB";

    }
    if(empty($errors)==true)
    {
        move_uploaded_file($file_tmp,"upload/".$file_name);
    }
    else
    {
        print_r($errors);
        die();
    }


}

$title = $_POST["products_title"];
$discription = $_POST["productsdesc"];
$category = $_POST["category"];
$date = date("d M, Y");

session_start();
$author = $_SESSION["user_id"];


$sql = "INSERT INTO `product`(`title`, `description`, `category`, `post_date`, `author`, `post_img`) VALUES ('{$title}','{$discription}',{$category},'{$date}',{$author},'{$file_name}');";
$sql .= "UPDATE category SET `post` = post + 1 WHERE `category_id` = {$category};";

if(mysqli_multi_query($conn,$sql))
{
    header("location:http://localhost:81/kj/admin/products.php");
}
else
{
    echo "query failed";
}