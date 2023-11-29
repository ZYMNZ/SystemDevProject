<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="Views/styles/haveAccount.css">
    <link rel="stylesheet" type="text/css" href="Views/styles/shared.css">
    <?php include_once "Views/shared/navbar.php"?>
</head>
<body>

    <div id="container">
        <h1>Have an account?</h1>  
        <div>
            <input type="button" value="Yes" onclick="location.href='?controller=login&action=login'">
            <input type="button" value="No" onclick="location.href='?controller=registration&action=registration'">
        </div>
    </div>
</body>
</html>
