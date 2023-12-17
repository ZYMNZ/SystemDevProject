<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dish</title>

    <link rel="stylesheet" type="text/css" href="Views/styles/category.css"> <!-- Create a new CSS file for dish styles -->
    <link rel="stylesheet" type="text/css" href="Views/styles/shared.css">
    <?php include_once "Views/shared/navbar.php"?>
</head>
<body>

    <div id="container">
        <form id="addDishForm" method="POST" action="?controller=dish&action=save" enctype="multipart/form-data">
            <h1>Dish</h1>
            
            <div id="imageSelection">
                <label for="dishImage" class="imageLabel"><strong>Select Image</strong></label>
                <input type="file" class="dishImage" name="categoryImage" accept="image/*">
<!--                <span id="selectedImage">No image selected</span>-->
            </div>
<!--            ^ this had to be replaced with a php loop that fetches the data from DB-->
            <br>
            <input class="uploadButton " type="submit" value="Upload">
        </form>
        <br>
        <input type="text" id="dishTitle" name="title" placeholder="Dish Title" class="tFBorderRadiusAndColor" required value="Appetizer" style="text-align: center">
<!--        <br>-->

        <br>
        <div class="dishBorder">
            <label class="dishTitle">Soup</label>
            <a href=""><button class="dishButton">Delete</button></a>
            <a href="?controller=user&action=editCategory"><button class="dishButton">Edit</button></a>

            <div class="descriptionDiv">
            <p class="dishDescription">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            </div>
        </div>

        <a href="?controller=home&action=home"><button class="backgroundColorAndRadius backButton" >Back</button></a>
    </div>

<!--    <script>-->
<!--        document.getElementById('dishImage').addEventListener('change', function() {-->
<!--            document.getElementById('selectedImage').innerText = this.files[0].name;-->
<!--        });-->
<!--    </script>-->

</body>
</html>
