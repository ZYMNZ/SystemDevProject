<?php
unset($_SESSION["catId"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" type="text/css" href="Views/styles/home.css">
    <link rel="stylesheet" type="text/css" href="Views/styles/navbarFooter.css">
    <link rel="stylesheet" type="text/css" href="Views/styles/shared.css">

    <?php include_once "Views/shared/navbar.php"?>
</head>
<body>

<div class="fixedHome">

    <p class="fixedP">Step into a world of culinary delight at <span class="highlight">Lumia</span>, where every dish is a masterpiece and every meal is a journey through exquisite flavors.</p>
    <label class="highlight">What are we cooking?</label>
    <figure class="imageContainer">
        <img src="views/images/vege.jpg" alt="Vegetables">
        <img src="views/images/salad.jpg" alt="Salad">
    </figure>
    <p class="fixedP2">We produce pastries and confections “like at home” - without the addition of any preservatives, dyes; formula as close as possible to homemade food.</p>
    <hr class="solid orange">
    <h3 class="sectionTitle">Tasty.</h3>
    <h3 class="sectionTitle">&</h3>
    <h3 class="sectionTitle">Quick.</h3>
    <figure class="imageContainer">
        <img style="width: 30%" src="views/images/girlEat.jpg" alt="Girl eating">
    </figure>
    <hr class="solid orange">

</div>

    <!-- appetizers section -->
    <section id="appetizers">
        <h2>Appetizers</h2>
        <div class="product">
            <div class="imageAndEditButton dishImageHomePage">
                <img src="Views/images/appetizer1.jpg" alt="Appetizer 1" class="">
                <a href="?controller=user&action=listDishes&catId=1"><button>Edit</button></a>
            </div>
            <div class="dishListing">
                <?php
                    if (!empty($_SESSION['listOfDishes'])){
                    foreach ($dataSent['dish'] as $data) :
                        if ($data->getCategoryId() == 1){ //category 1 = appetizers
                ?>
                <div class="dishDiv">
                    <div class="titleWithAddButton">
                        <h3> <?php echo $data->getDishTitle();?> </h3>
                        <button>Add</button>
                    </div>
                    <p> <?php echo $data->getDishDescription()?></p>
                </div>

                <?php
                        }
                        endforeach;
                    }
                    else{
                        echo "<label>Sorry There Isn't Any Appetizers Today!</label>";
                    }
                ?>
            </div>

        </div>
    </section>

    <!-- main course section -->
    <section id="mainCourse">
        <h2>Main Course</h2>
        <div class="product">
            <div class="imageAndEditButton dishImageHomePage">
                <img src="Views/images/main_course1.jpg" alt="Main Course 1">
                <a href="?controller=user&action=listDishes&catId=2"><button>Edit</button></a>
            </div>
            <div class="dishListing">
                <?php
                if (!empty($_SESSION['listOfDishes'])){
                    foreach ($dataSent['dish'] as $data) :
                       if ($data->getCategoryId() == 2){//category 2 = Main Course

                ?>

                <div class="dishDiv">
                    <div class="titleWithAddButton">
                        <h3><?php echo $data->getDishTitle(); ?> </h3>
                        <button>Add</button>
                    </div>
                    <p><?php echo $data->getDishDescription(); ?></p>
                </div>

                <?php
                           }
                        endforeach;
                    }
                    else{
                        echo "<label>Sorry There Isn't Any Main Courses Today!</label>";
                    }
                ?>
            </div>


        </div>
    </section>

    <!-- dessert section -->
    <section id="dessert">
        <h2>Dessert</h2>
        <div class="product">
            <div class="imageAndEditButton dishImageHomePage">
                <img src="Views/images/desserts1.jpg" alt="Dessert 1">
                <a href="?controller=user&action=listDishes&catId=3"><button>Edit</button></a>
            </div>
            <div class="dishListing">
                <?php
                    if (!empty($_SESSION['listOfDishes'])){
                     foreach ($dataSent['dish'] as $data) :
                         if ($data->getCategoryId() == 3){//category 3 = Desserts

                ?>

                <div class="dishDiv">
                    <div class="titleWithAddButton">
                        <h3><?php echo $data->getDishTitle();?></h3>
                        <button>Add</button>
                    </div>
                    <p><?php echo $data->getDishDescription();?></p>
                </div>

                <?php
                         }
                     endforeach;
                    }
                    else{
                        echo "<label>Sorry There Isn't Any Desserts Today!</label>";
                    }

                ?>
            </div>


        </div>
    </section>

    <!-- beverages section -->
    <section id="beverages">
        <h2 style="">Beverages</h2>
        <div class="product">
            <div class="imageAndEditButton dishImageHomePage">
                <img src="Views/images/beverage1.jpg" alt="Beverage 1" style="border-radius: 7pc;border: 2px solid #000;">
                <a href="?controller=user&action=listDishes&catId=4"><button>Edit</button></a>
            </div>
            <div class="dishListing">
                <?php
                    if (!empty($_SESSION['listOfDishes'])){
                        foreach ($dataSent['dish'] as $data) :
                            if ($data->getCategoryId() == 4){  //category 4 = Beverages

                ?>

                <div class="dishDiv">
                    <div class="titleWithAddButton">
                        <h3><?php echo $data->getDishTitle();?> </h3>
                        <button>Add</button>
                    </div>
                    <p><?php echo $data->getDishDescription();?></p>
                </div>

                <?php
                            }
                        endforeach;
                    }
                    else{
                        echo "<label>Sorry There Isn't Any Beverages Today!</label>";
                    }
                ?>
            </div>
        </div>
    </section>

    <!-- contact section -->
    <?php include_once "Views/shared/footer.php"?>
</body>
</html>
