<?php
include('connect.php');

if (isset($_POST['Submit'])) {
    $item_name = $_REQUEST['item_name'];
    $discount_price = $_REQUEST['discount_price'];
    $item_price = $_REQUEST['item_price'];
    $item_mockup = $_FILES['file_mockup']['name'];
    $item_mockuptmp = $_FILES['file_mockup']['tmp_name'];
    $item_color = $_REQUEST['item_color'];
    $item_size = $_REQUEST['item_size'];
    $description = $_REQUEST['description'];

    $file = "";
    $file_tmp = "";
    $location = "uploads/";
    move_uploaded_file($item_mockuptmp,$location.$item_mockup);
    // Insert item details into the items table
    $sql = "INSERT INTO items (item_name, item_price, discount_price, item_color, item_size,Item_mockup, item_description)
            VALUES ('$item_name', '$item_price', '$discount_price', '$item_color', '$item_size','$item_mockup', '$description')";

    $qry = mysqli_query($conn, $sql);

    if ($qry) {
        $item_id = mysqli_insert_id($conn);

        foreach ($_FILES['images']['name'] as $key => $value) {
            $file =  $_FILES['images']['name'][$key];
            $file_tmp = $_FILES['images']['tmp_name'][$key];
            move_uploaded_file($file_tmp, $location . $file);

            $sql_images = "INSERT INTO item_images (item_id, image_) VALUES ('$item_id', '$file')";
            $qry_images = mysqli_query($conn, $sql_images);

            if ($qry_images) {
                header('location:seller.php?file_uploaded=File uploaded successfully!');
            }
        }

    }
}
?>