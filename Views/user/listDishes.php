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
<?php


?>

    <div id="container" style="justify-content: flex-start;">

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

        <h1>Dish</h1>
<!--        <input type="text" id="dishTitle" name="title" placeholder="Dish Title" class="tFBorderRadiusAndColor" required value="Appetizer" style="text-align: center">-->
<!--        <br>-->
        <a href="?controller=user&action=addDish&catId=<?php echo $_GET['catId']?>"><button class="dishButton">Add</button></a>


        <?php
        if (isset($_SESSION['error']) && $_SESSION['error'] === 'Sorry Something Went Wrong, Try Again !'){
            echo " <label class='invalidInputLabel'> {$_SESSION['error']} </label>";
            unset($_SESSION['error']);
        }
        else if (isset($_SESSION['dishUpdated']) && $_SESSION['dishUpdated'] === 'Dish Info Updated !!'){
            echo " <label class='invalidInputLabel' style='color: forestgreen'> {$_SESSION['dishUpdated']} </label>";
            unset($_SESSION['dishUpdated']);
        }
        else if (isset($_SESSION['dishDeleted']) && $_SESSION['dishDeleted'] === 'Dish Info Deleted Successfully !!'){
            echo " <label class='invalidInputLabel' style='color: forestgreen'> {$_SESSION['dishDeleted']} </label>";
            unset($_SESSION['dishDeleted']);
        }
        else if (isset($_SESSION['dishCreated']) && $_SESSION['dishCreated'] === 'Dish Added Successfully !!'){
            echo " <label class='invalidInputLabel' style='color: forestgreen'> {$_SESSION['dishCreated']} </label>";
            unset($_SESSION['dishCreated']);
        }
        ?>
        <!--  Display Category Name  -->
        <h2><?php echo $dataSent['categoryName']->getCategory()?></h2>

        <!--  Display Dish List  -->
        <?php
        if (!empty($dataSent['listOfDishes'])){
        foreach ($dataSent['listOfDishes'] as $data) : ?>
            <div class="dishBorder">
                <label class="dishTitle"><?php echo $data->getDishTitle()?></label>
                <div style="display: flex; justify-content: space-evenly; ">
                    <a href="?controller=user&action=deleteDish&dishId=<?php echo $data->getDishId()?>&catId=<?php echo $data->getCategoryId()?>"><button class="dishButton">Delete</button></a>
                    <a href="?controller=user&action=editDish&dishId=<?php echo $data->getDishId()?>&catId=<?php echo $data->getCategoryId()?>"><button class="dishButton">Edit</button></a>
                </div>
                <div class="descriptionDiv">
                <p class="dishDescription"><?php echo $data->getDishDescription()?> </p>
                </div>
            </div>
        <?php
        endforeach;
        }
        else{
            echo " <label class='invalidInputLabel' > No Dishes Added Yet </label>";
        }
        ?>
<!--        --><?php //$_SESSION["catId"] = $_GET['catId'] ?>
<!--        --><?php //var_dump($_SESSION["catId"]);?>
        <a href="?controller=home&action=home"><button class="backgroundColorAndRadius backButton">Back</button></a>
    </div>


</body>
</html>
