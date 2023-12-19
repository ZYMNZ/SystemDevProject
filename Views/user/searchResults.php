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


    <h1>Results</h1>

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

    ?>

    <?php
        if (!empty($dataSent['searchResults'])){
        foreach ($dataSent['searchResults'] as $data) : ?>
            <div class="dishBorder">
                <label class="dishTitle"><?php echo $data->getDishTitle()?></label>
    <!--            <div style="display: flex; justify-content: space-evenly; ">-->
    <!--                <a href="?controller=user&action=deleteDish&dishId=--><?php //echo $data->getDishId()?><!--&catId=--><?php //echo $data->getCategoryId()?><!--"><button class="dishButton">Delete</button></a>-->
    <!--                <a href="?controller=user&action=editDish&dishId=--><?php //echo $data->getDishId()?><!--&catId=--><?php //echo $data->getCategoryId()?><!--"><button class="dishButton">Edit</button></a>-->
    <!--            </div>-->
                <div class="descriptionDiv">
                    <p class="dishDescription"><?php echo $data->getDishDescription()?> </p>
                </div>
            </div>
    <?php
        endforeach;
        }
        else{
            echo " <label class='invalidInputLabel' style='font-size: xx-large'>No Dish Found !!</label>";
        }

    ?>
    <a href="?controller=home&action=home"><button class="backgroundColorAndRadius backButton">Back</button></a>
</div>


</body>
</html>
