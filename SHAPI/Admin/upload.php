<?php
include('assets/config/db.php');

// Initialize $imageName
$imageName = '';

// Check if a file is uploaded
if(isset($_FILES["file"]) && $_FILES["file"]["name"] != '') {
    $test = explode('.', $_FILES["file"]["name"]);
    $ext = end($test);
    $name = rand(100, 999) . '.' . $ext;    
    $location = 'upload/' . $name;
    move_uploaded_file($_FILES["file"]["tmp_name"], $location);
    echo '<img src="'.$location.'" style="border-radius:14.5px;" height="570" width="320" class="img-thumbnail" />';
    $imageName = $name; // Set $imageName to $name
}

// Check if Confirm button is clicked
if(isset($_POST['confirm'])) {
    // Gather input values
    $title = $_POST['title'];   
    $styles = $_POST['styles'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // Check if required fields are filled
    if(empty($title) || empty($styles) || empty($price) || empty($description)) {
        echo '<script>alert("Please fill up all fields."); window.location.href="addwork.php";</script>';
    } else {
        // Use prepared statement to insert data into the database
        $query = "INSERT INTO card (img, title, list_style, price, art_desc) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($con, $query);

        // Bind parameters
        mysqli_stmt_bind_param($stmt, "sssss", $imageName, $title, $styles, $price, $description);

        // Execute the statement
        $result = mysqli_stmt_execute($stmt);

        if ($result) {
            echo '<script>alert("Card successfully added!"); window.location.href="addwork.php";</script>';
        } else {
            echo '<script>alert("Error inserting into the database: ' . mysqli_error($con) . '"); window.location.href="addwork.php";</script>';
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    }
}

mysqli_close($con);
?>
