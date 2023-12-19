<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Dish</title>
    <link rel="stylesheet" type="text/css" href="Views/styles/addAndEditDish.css">
    <link rel="stylesheet" type="text/css" href="Views/styles/shared.css">
    <link rel="stylesheet" type="text/css" href="Views/styles/navbarFooter.css">
    <?php include_once "Views/shared/navbar.php"?>
</head>
<body>

<form method="post" action="?controller=user&action=createDish&catId=<?php echo $_GET['catId']?>">
    <h1 style="margin-top: 10%">Add Dish</h1>
    <br>
    <div>
        <label style="font-size: x-large">
            Dish Title:
        </label>
        <br>
        <input type="text" name="dishTitle" class="tFBorderRadiusAndColor" required>
<!--        <input type="hidden" name="dishId" class="tFBorderRadiusAndColor" required>-->

    </div>

    <br>

    <div style="margin-top: 10%">
        <label style="font-size: x-large">
            Dish Description:
        </label>
        <br>
        <textarea  name="dishDescription" style="border-radius: 16px; border-color: #FFCC8F;     border-width: medium;"></textarea>
    </div>

    <input type="submit" class="submitButton">
</form>
<a href="?controller=user&action=listDishes&catId=<?php echo $_GET['catId']?>"><button class="backgroundColorAndRadius backButtonEditCategory" >Back</button></a>

<div style="margin-bottom: 30%"></div>
</body>
</html>