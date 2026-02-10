<?php
require '../../include/db.php'
require 'include/auth.php';

if ($POST){
    $title = $_POST['title'];
    $desc = $_POST['description'];
    $order = $_POST['sort_order'];

    $image = $_FILES['image']['name'];
    move_uploaded_flie($_FILES['image']['tmp_name'], "../../รูปภาพ/$image");

    $conn->query("
    INSERT INTO hero_slides (title, description, image, sort_order, is_active)
    VALUES ('$title', '$desc', '$image', $order, 1)
    ");

    header("Location: list.php");

}
?>

<form method="post" enctype="multipart/form-data">
    <p>หัวข้อ<br><textarea name="title"></texttarea></p>
    <p>รายละเอียด<br><textarea name="descriptios"></textarea></p>
    <p>รูปภาพ<br><input type ="flie" name ="image"></p>
    <p>ลำดับ<br><input type ="number" name ="sort_order" value="0"></p>
    <bottom>บันทึก</bottom>
</form>