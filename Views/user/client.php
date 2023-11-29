<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Page</title>
    <style>
        <?php include_once "Views/shared/navbar.php"?>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        #container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form input {
            margin: 5px 0;
            padding: 8px;
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>Welcome to Lumia</h1>

        <!-- form for apartment number input -->
        <form id="apartmentForm" method="POST" action="main.php">
            <h4>Enter Your Apartment Number</h4>
            <input type="text" id="apartmentNumber" name="apartmentNumber" placeholder="Apartment Number" required><br>
            <input type="submit" value="Submit"> <!-- submit button should redirect to main.php -->
        </form>
    </div>
</body>
</html>
