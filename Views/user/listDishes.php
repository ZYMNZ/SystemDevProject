<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dish</title>

    <link rel="stylesheet" type="text/css" href="Views/styles/listDishes.css"> <!-- Create a new CSS file for dish styles -->
    <link rel="stylesheet" type="text/css" href="Views/styles/navbarFooter.css">
    <link rel="stylesheet" type="text/css" href="Views/styles/shared.css">
    <link rel="stylesheet" type="text/css" href="Views/styles/home.css">
    <?php include_once "Views/shared/navbar.php"?>
</head>
<body>

    <div id="container">

       <!-- <form id="addDishForm" method="POST" action="?controller=dish&action=save" enctype="multipart/form-data">
            <h1>Dish</h1>

            <div id="imageSelection">
                <label for="dishImage" class="imageLabel"><strong>Select Image</strong></label>
                <input type="file" class="dishImage" name="categoryImage" accept="image/*">
                <span id="selectedImage">No image selected</span> //comment
            </div>
            ^ this had to be replaced with a php loop that fetches the data from DB //comment
            <br>
            <input class="uploadButton " type="submit" value="Upload">
        </form>-->
        <br>
        <h1>Dish</h1>
<!--        <input type="text" id="dishTitle" name="title" placeholder="Dish Title" class="tFBorderRadiusAndColor" required value="Appetizer" style="text-align: center">-->
<!--        <br>-->
        <h2><?php $dataSent['categoryName']->getCategory()?></h2>
        <br>
        <?php foreach ($dataSent['listOfDishes'] as $data) : ?>
            <div class="dishBorder">
                <label class="dishTitle"><?php echo $data->getDishTitle()?></label>
                <a href="?controller=user&action=deleteDish&dishId=<?php echo $data->getDishId() ?>"><button class="dishButton">Delete</button></a>
                <a href="?controller=user&action=editDish&dishId=<?php echo $data->getDishId() ?>"><button class="dishButton">Edit</button></a>

                <div class="descriptionDiv">
                <p class="dishDescription"><?php echo $data->getDishDescription()?> </p>
                </div>
            </div>
        <?php endforeach;?>
        <a href="?controller=home&action=home"><button class="backgroundColorAndRadius backButton" >Back</button></a>
    </div>

<!--    <script>-->
<!--        document.getElementById('dishImage').addEventListener('change', function() {-->
<!--            document.getElementById('selectedImage').innerText = this.files[0].name;-->
<!--        });-->
<!--    </script>-->

</body>
</html>
