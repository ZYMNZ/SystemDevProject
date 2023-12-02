<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Page</title>

    <link rel="stylesheet" type="text/css" href="Views/styles/shared.css">
    <link rel="stylesheet" type="text/css" href="Views/styles/client.css">

    <?php include_once "Views/shared/navbar.php"?>

</head>
<body>
    <div id="container">
        <h1>Welcome to Lumia</h1>
        <!-- form for apartment number input -->
        <form id="apartmentForm" method="POST" action="main.php">
            <h4>Enter Your Apartment Number</h4>
            <input type="text" id="apartmentNumber" name="apartmentNumber" placeholder="Apartment Number" class="TFborderRadiusAndColor" required><br>
            <input type="submit" class="submitButton" value="Submit"> <!-- submit button should redirect to main.php -->
        </form>
    </div>
</body>
</html>
