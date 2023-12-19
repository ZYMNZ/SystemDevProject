<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Dish</title>
    <link rel="stylesheet" type="text/css" href="Views/styles/editDish.css">
    <link rel="stylesheet" type="text/css" href="Views/styles/shared.css">
    <?php include_once "Views/shared/navbar.php"?>
</head>
<body>

   <form method="post" action="?controller=user&action=updateDish&catId=<?php echo $_GET['catId']?>">
       <h1 style="margin-top: 10%">Edit Dish</h1>
       <br>
        <div>
            <label style="font-size: x-large">
                Dish Title:
            </label>
            <br>
            <input type="text" name="dishTitle" value="<?php echo $dataSent['dish']->getDishTitle() ?>" class="tFBorderRadiusAndColor" required>
            <input type="hidden" name="dishId" value="<?php echo $dataSent['dish']->getDishId() ?>" class="tFBorderRadiusAndColor" required>

        </div>

        <br>

       <div style="margin-top: 10%">
           <label style="font-size: x-large">
               Dish Description:
           </label>
           <br>
           <textarea  name="dishDescription" style="border-radius: 16px; border-color: #FFCC8F;     border-width: medium;"> <?php echo $dataSent['dish']->getDishDescription() ?></textarea>
       </div>

       <input type="submit" class="submitButton">
   </form>
   <a href="?controller=user&action=listDishes&catId=<?php echo $_GET['catId']?>"><button class="backgroundColorAndRadius backButtonEditCategory" >Back</button></a>

   <div style="margin-bottom: 30%"></div>
</body>
</html>