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
    <h3 class="sectionTitle">Quick.</h3>
    <figure class="imageContainer">
        <img src="views/images/girlEat.jpg" alt="Girl eating">
    </figure>
    <hr class="solid orange">

</div>

    <!-- appetizers section -->
    <section id="appetizers">
        <h2>Appetizers</h2>
        <div class="product">
            <div class="imageAndEditButton dishImageHomePage">
                <img src="Views/images/appetizer1.jpg" alt="Appetizer 1" class="">
                <a ><button>Edit</button></a>
            </div>
            <div class="dishListing">
                <?php // START LOOP ?>

                <div style="border: 1px solid #000; display: block; margin:5% 0 ">
                    <div class="titleWithAddButton">
                        <h3>Appetizer 1 <?php ?> </h3>
                        <button>Add</button>
                    </div>
                    <p>Description of Appetizer 1. <?php ?></p>
                </div>

                <?php //END LOOP ?>
            </div>

        </div>
    </section>

    <!-- main course section -->
    <section id="mainCourse">
        <h2>Main Course</h2>
        <div class="product">
            <div class="imageAndEditButton dishImageHomePage">
                <img src="Views/images/main_course1.jpg" alt="Main Course 1">
                <a ><button>Edit</button></a>
            </div>
            <div class="dishListing">
                <?php // START LOOP ?>

                <div style="border: 1px solid #000; display: block; margin:5% 0 ">
                    <div class="titleWithAddButton">
                        <h3>Main Course 1 <?php ?> </h3>
                        <button>Add</button>
                    </div>
                    <p>Description of Main Course 1.</p>
                </div>

                <?php //END LOOP ?>
            </div>


        </div>
    </section>

    <!-- dessert section -->
    <section id="dessert">
        <h2>Dessert</h2>
        <div class="product">
            <div class="imageAndEditButton dishImageHomePage">
                <img src="Views/images/desserts1.jpg" alt="Dessert 1">
                <a ><button>Edit</button></a>
            </div>
            <div class="dishListing">
                <?php // START LOOP ?>

                <div style="border: 1px solid #000; display: block; margin:5% 0 ">
                    <div class="titleWithAddButton">
                        <h3>Dessert 1 <?php ?> </h3>
                        <button>Add</button>
                    </div>
                    <p>Description of Dessert 1.</p>
                </div>

                <?php //END LOOP ?>
            </div>


        </div>
    </section>

    <!-- beverages section -->
    <section id="beverages">
        <h2 style="">Beverages</h2>
        <div class="product">
            <div class="imageAndEditButton dishImageHomePage">
                <img src="Views/images/beverage1.jpg" alt="Beverage 1" style="border-radius: 7pc;border: 2px solid #000;">
                <a ><button>Edit</button></a>
            </div>
            <div class="dishListing">
                <?php // START LOOP ?>

                <div style="border: 1px solid #000; display: block; margin:5% 0 ">
                    <div class="titleWithAddButton">
                        <h3>Beverage 1 <?php ?> </h3>
                        <button>Add</button>
                    </div>
                    <p>Description of Beverage 1.</p>
                </div>

                <?php //END LOOP ?>
            </div>
        </div>
    </section>

    <!-- contact section -->
    <?php include_once "Views/shared/footer.php"?>
</body>
</html>
