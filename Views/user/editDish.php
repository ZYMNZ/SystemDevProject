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

   <form method="post" action="?controller=user&action=updateDish">
       <h1 style="margin-top: 10%">Edit Dish</h1>
       <br>
        <div>
            <label style="font-size: x-large">
                Dish Title:
            </label>
            <br>
            <input type="text" name="dishTitle" value="Soup" class="tFBorderRadiusAndColor">
        </div>

        <br>

       <div style="margin-top: 10%">
           <label style="font-size: x-large">
               Dish Description:
           </label>
           <br>
           <textarea  name="dishTitle" style="border-radius: 16px; border-color: #FFCC8F;     border-width: medium;"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</textarea>
       </div>

       <input type="submit" class="submitButton">
   </form>
   <a href="?controller=user&action=listDishes"><button class="backgroundColorAndRadius backButtonEditCategory" >Back</button></a>

   <div style="margin-bottom: 30%"></div>
</body>
</html>