<?php
include('assets/config/db.php');

if (isset($_POST['upload'])) {
    $file = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size']; // Size in bytes

    // Set a maximum allowed file size (in this example, 5MB)
    $maxFileSize = 5 * 1024 * 1024; // 5MB in bytes

    // Check if the file size is within the allowed limit
    if ($fileSize > $maxFileSize) {
        echo "System Report: File size exceeds the allowed limit (5MB)!";
    } else {
        // Check if the file with the same name already exists in the database
        $checkQuery = "SELECT * FROM card WHERE img = '$file'";
        $checkResult = mysqli_query($con, $checkQuery);

        if (mysqli_num_rows($checkResult) > 0) {
            // File with the same name already exists, delete it before inserting the new one
            $deleteQuery = "DELETE FROM card WHERE img = '$file'";
            $deleteResult = mysqli_query($con, $deleteQuery);

            if ($deleteResult) {
                $target_directory = "C:/xampp/htdocs/SHAPI/Admin/assets/img";
                $existingFile = $target_directory . '/' . $file;

                // Remove the existing file from the server
                if (file_exists($existingFile)) {
                    unlink($existingFile);
                }
            }
        }

        // Proceed with inserting into the database and moving the file
        $query = "INSERT INTO card(img) VALUES ('$file')";
        $res = mysqli_query($con, $query);

        if ($res) {
            $target_directory = "C:/xampp/htdocs/SHAPI/Admin/assets/img";
            $target_file = $target_directory . '/' . $file;

            // Create the target directory if it doesn't exist
            if (!is_dir($target_directory)) {
                mkdir($target_directory, 0777, true);
            }

            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
            echo "File uploaded successfully!";
        } else {
            echo "Error inserting into the database.";
        }
    }
}


mysqli_close($con);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
</head>
<style>
 html{
    overflow: hidden;
 }

*{
    color: white;
}
.main-wrapper{  
    display: flex;
    flex-direction: row;
}

.work-form{
    box-sizing: border-box;
    background-color: #2D2F31;
    width: 1250px;
    height: 613px;
    position: relative;
    top: 10px;
    border-radius: 15px;
    padding: 20px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr 1fr 1fr 1fr;
    grid-template-areas: 
    "img title"
    "img dropdown"
    "img price"
    "desc desc";
    justify-self: center;
    align-self: center;
    gap: 20px;
    overflow: hidden;
} 

.img-container{
    grid-area: img;
    box-sizing: border-box;
    display: flex;
    flex-flow: row wrap;
    align-items: end;
    gap: 20px;
}

.input-field.row {
  display: flex;
  flex-flow: row nowrap;
  align-items: center;
  justify-content: flex-start;
  position: relative;
  left: 20px;
  gap: 20px;

}

.title{
    grid-area: title;
    display: flex;
    position: relative;
    left: 5px;
}

.drop-down{
    grid-area: dropdown;
    width: 250px;
}

.price-container{
    grid-area: price;
    position: relative;
    top: 5px;
    
}

.description{
    grid-area: desc;
}

.imij{
    min-height: 300px;
    min-width: 250px;
    border-style: inset;
    z-index: 1;
}

textarea{
    height: 300px;
    font-size: 20px;
}   

select {
  color: yellow;
}

option {
  color: yellow;
}

.submit{
    display: flex;
    justify-self: end;
    align-self: end;
    position:relative;
    right: 150px;
    bottom: 15px;
}

#upload{
    position: relative;
    bottom: 20px;
}


</style>
<body>
    <div class="main-wrapper">
        
        <?php 
        include "admin-nav.php";
        ?>
        
        <!-- Form -->
        <form action="" method="post" class="main-wrapper" enctype="multipart/form-data">
            <div class="work-form">
                <!-- Image container -->
                    <div class="img-container">
                    <?php
                            include('assets/config/db.php');

                            // Fetch the latest row from the database
                            $selectLatestQuery = "SELECT * FROM card ORDER BY id DESC LIMIT 1";
                            $latestResult = mysqli_query($con, $selectLatestQuery); 
                            // Fetch the latest row from the database
                            if ($latestResult) {
                                // Check if there are rows in the result
                                if (mysqli_num_rows($latestResult) > 0) {
                                    // Fetch the row
                                    $row = mysqli_fetch_assoc($latestResult);
                            
                                    // Display the image
                                    echo "<img id='uploadedImage' class='imij' src='" . $row['img'] . "'>";
                                } else {
                                    echo "No images found.";
                                }
                            }
                            mysqli_close($con);
                   ?>

                        <div class="file-field input-field">
                            <div class="btn">
                                <span>File</span>
                                <input type="file" name="image">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                        <button id="upload"class="btn waves-effect waves-light" type="submit" name="upload">Submit
                          <i class="material-icons right">send</i>
                        </button>
                     </div>
                <!-- Title -->
                <div class="title">
                    <div class="input-field col s6">
                        <i class="material-icons prefix">title</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Art title</label>
                    </div>
                </div>
                <!-- Drop Down -->
                <div class="drop-down">
                    <div class="input-field col s12 ">
                        <div class="input-field row">
                            <i class="material-icons">palette</i>
                            <select name="styles" id="" class="dropdown">
                                <option value="" disabled selected>Art work's type of art</option>
                                <option value="Original ArtStyle">Original ArtStyle</option>
                                <option value="Chibi">Chibi</option>
                                <option value="Digital WaterColor">Digital Water Color</option>
                                <option value="Graphic Stylization">Graphic Stylization</option>
                                <option value="Cute Aesthetic Style">Cute Aesthetic Style</option>
                            </select>

                        </div>
                    </div>    
                </div>
                <!-- Price -->
                <div class="price-container">
                    <div class="input-field inline">
                        <i class="material-icons prefix ">attach_money</i>
                        <input id="number_inline" type="number" class="validate">
                        <label for="number_inline" class="yellow-text" style="font-size: 15px;">Price</label>
                    </div>
                </div>
                <!-- Description -->
                <div class="description" >
                    <!-- Add input fields for description -->
                    <label for="description" class="yellow-text" style="font-size: 15px;" >Description:</label>
                    <textarea id="description" class="materialize-textarea" name="description" data-length="120" ></textarea>
                </div>
            </div>
            <!-- Add Card -->
            <span class="submit">
                <input type='hidden' name='client_id'>
                <button id = "add-btn" type='submit' class='waves-effect waves-light btn yellow darken-2' name='confirm' style="height: 60px; width: 150px;">
                <i class="material-icons">add</i>
                    
               </button>
            </span>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });

    </script>
</body>
</html>
