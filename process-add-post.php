<?php
require 'connect-db.php';
// Up bài viết  
if (isset($_POST['btnSubmit'])) {
    $title = $_POST['title'];
// Upload ảnh 
    $image = $_FILES['image']['name'];
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $file_ext = strtolower(end(explode('.',$_FILES['image']['name'])));
    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
    }
        
    if($file_size > 2097152) {
        $errors[]='Kích thước file không được lớn hơn 2MB';
    }
    $target = "images/".basename($image);
    $sql = "INSERT INTO posts( title,image ) VALUES ( '$title', '$image' )";
    if (mysqli_query($conn, $sql) && move_uploaded_file($_FILES['image']['tmp_name'], $target) && empty($errors)==true) {
            echo '<script language="javascript">alert("Đăng bài viết thành công!");</script>';
            } else{
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý");</script>';
            }
}
    header("location: index.php");  
?>

