



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
    grid-template-rows: 1fr 1fr 1fr 2.6fr;
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
    max-height: 300px;
    max-width: 320px;
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
      
                    <span id="uploaded_image" class="imij"></span>
        

                        <div class="file-field input-field">
                            <div class="btn">
                                <span>File</span>
                                <input type="file" id="file"name="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text">
                            </div>
                        </div>
                    
                     </div>
                                    <!-- Title -->
                        <div class="title">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">title</i>
                                <input id="icon_prefix" type="text" class="validate" name="title">
                                <label for="icon_prefix">Art title</label>
                            </div>
                        </div>
                        <!-- Drop Down -->
                        <div class="drop-down">
                            <div class="input-field col s12">
                                <div class="input-field row">
                                    <i class="material-icons">palette</i>
                                    <select name="styles" class="dropdown">
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
                                <input id="number_inline" type="number" class="validate" name="price">
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems);
  });

    </script>
    
<script>
$(document).ready(function(){
 $(document).on('change', '#file', function(){
  var name = document.getElementById("file").files[0].name;
  var form_data = new FormData();
  var ext = name.split('.').pop().toLowerCase();
  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
  {
   alert("Invalid Image File");
  }
  var oFReader = new FileReader();
  oFReader.readAsDataURL(document.getElementById("file").files[0]);
  var f = document.getElementById("file").files[0];
  var fsize = f.size||f.fileSize;
  if(fsize > 2000000)
  {
   alert("Image File Size is very big");
  }
  else
  {
   form_data.append("file", document.getElementById('file').files[0]);
   $.ajax({
    url:"upload.php",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#uploaded_image').html("<label class='text-success'>Image Uploading...</label>");
    },   
    success:function(data)
    {
     $('#uploaded_image').html(data);
    }
   });
  }
 });
});
</script>
</body>
</html>
