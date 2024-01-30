<?php
include('assets/config/db.php');

// Initialize $imageName

// Check if a file is uploaded
if(isset($_FILES["file"]) && $_FILES["file"]["name"] != '') {
    $test = explode('.', $_FILES["file"]["name"]);
    $ext = end($test);
    $name = rand(100, 999) . '.' . $ext;
    $location = 'upload/' . $name;
    move_uploaded_file($_FILES["file"]["tmp_name"], $location);
    echo '<img src="'.$location.'" style="border-radius:15px;" height="575" width="320" class="img-thumbnail" />';
}

// Check if Confirm button is clicked
if(isset($_POST['confirm'])) {
    // Gather input values
    $title = $_POST['title'];
    $styles = $_POST['styles'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // Insert data into the database
    $query = "INSERT INTO card (img, title, list_style, price, art_desc) VALUES ('$name', '$title', '$styles', '$price', '$description')";
    $result = mysqli_query($con, $query);

    if ($result) {
        header("Location: addwork.php");

        echo "File and data uploaded successfully!";
    } else {
        header("Location: addwork.php");
        
        echo "Error inserting into the database: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>

