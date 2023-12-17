<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="Views/styles/login.css">
    <link rel="stylesheet" type="text/css" href="Views/styles/shared.css">
    <script src="Views/login/scripts/validation.js"></script>

    <?php include_once "Views/shared/navbar.php"?>
</head>
<body>


    <div id="container">
    <!-- login form -->
        <form id="loginForm" method="POST" action="?controller=login&action=validation">
            <h1>Login</h1>
            <input type="text" id="loginUsername" name="username" placeholder="Username" class="tFBorderRadiusAndColor" required><br>
            <input type="password" id="loginPassword" name="password" placeholder="Password" class="tFBorderRadiusAndColor" required><br>
            <p><a href = "?controller=login&action=forgotPass">Forgot password? Click me</a></p>
            <input class="submitButton" type="submit" value="Login"> <!-- login up button should redirect to validation.php -->
        </form>
        <a href="?controller=user&action=haveAccount"><button class="backgroundColorAndRadius backButton" >Back</button></a>
    </div>
</body>
</html>