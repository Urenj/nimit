<?php
include('assets/config/db.php');

if(isset($_FILES["file"]) && $_FILES["file"]["name"] != '') {
    $test = explode('.', $_FILES["file"]["name"]);
    $ext = end($test);
    $name = rand(100, 999) . '.' . $ext;
    $location = 'upload/' . $name;     
    move_uploaded_file($_FILES["file"]["tmp_name"], $location);
    echo '<img src="'.$location.'" style="border-radius:15px;" height="300" width="320" class="img-thumbnail" />';
}

mysqli_close($con);
?>
