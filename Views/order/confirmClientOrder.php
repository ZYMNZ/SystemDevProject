
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="Views/styles/shared.css">
    <link rel="stylesheet" type="text/css" href="Views/styles/confirmClientOrder.css">
    <?php include_once "Views/shared/navbar.php"?>
</head>
<body>

    <div id="container">
        <h1>Are you sure?</h1>
        <div>
            <input type="button" class="displayBlock backgroundColorAndRadius" value="Confirm" onclick="location.href='?controller=&action='">
            <input type="button" class="displayBlock backgroundColorAndRadius" value="Change" onclick="location.href='?controller=&action='">
        </div>
    </div>

    <div class="orderList">

    </div>
</body>
</html>
