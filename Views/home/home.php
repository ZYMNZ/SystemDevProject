<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" type="text/css" href="Views/styles/home.css">
    <link rel="stylesheet" type="text/css" href="Views/styles/navbar_footer.css">
</head>
<body>
    <?php include_once "Views/shared/navbar.php"?>

    <!-- appetizers section -->
    <section id="appetizers">
        <h2>Appetizers</h2>
        <div class="product">
            <img src="appetizer1.jpg" alt="Appetizer 1">
            <h3>Appetizer 1</h3>
            <p>Description of Appetizer 1.</p>
        </div>
    </section>

    <!-- main course section -->
    <section id="mainCourse">
        <h2>Main Course</h2>
        <div class="product">
            <img src="main_course1.jpg" alt="Main Course 1">
            <h3>Main Course 1</h3>
            <p>Description of Main Course 1.</p>
        </div>
    </section>

    <!-- dessert section -->
    <section id="dessert">
        <h2>Dessert</h2>
        <div class="product">
            <img src="dessert1.jpg" alt="Dessert 1">
            <h3>Dessert 1</h3>
            <p>Description of Dessert 1.</p>
        </div>
    </section>

    <!-- beverages section -->
    <section id="beverages">
        <h2>Beverages</h2>
        <div class="product">
            <img src="beverage1.jpg" alt="Beverage 1">
            <h3>Beverage 1</h3>
            <p>Description of Beverage 1.</p>
        </div>
    </section>

    <!-- contact section -->
    <?php include_once "Views/shared/footer.php"?>
</body>
</html>
