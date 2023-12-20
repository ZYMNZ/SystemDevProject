
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" type="text/css" href="Views/styles/login.css">
    <link rel="stylesheet" type="text/css" href="Views/styles/shared.css">


    <?php include_once "Views/shared/navbar.php"?>
</head>
<body>
<?php //var_dump($_SESSION['username']); ?>

    <div id="container">
    <!-- login form -->
        <form id="loginForm" method="POST" action="?controller=login&action=loginValidation">
            <?php
            if (isset($_SESSION['error']) && $_SESSION['error'] === 'Username or Password was invalid !'){
                echo " <label class='invalidInputLabel'> {$_SESSION['error']} </label>";
                unset($_SESSION['error']);
            }
            else if (isset($_SESSION['passwordUpdated']) && $_SESSION['passwordUpdated'] === 'Password Updated Successfully !!'){
                echo " <label class='invalidInputLabel' style='color: forestgreen'> {$_SESSION['passwordUpdated']} </label>";
                unset($_SESSION['passwordUpdated']);
            }
            ?>

            <h1>Login</h1>
            <input type="text" id="loginUsername" name="username" placeholder="Username" class="tFBorderRadiusAndColor" required><br>
            <input type="password" id="loginPassword" name="password" placeholder="Password" class="tFBorderRadiusAndColor" required><br>
            <p><a href = "?controller=login&action=forgotPass">Forgot password? Click me</a></p>
            <input class="submitButton" type="submit" value="Login"> <!-- login up button should redirect to validation.php -->
        </form>
        <a href="?controller=user&action=haveAccount"><button class="backgroundColorAndRadius backButton" >Back</button></a>
    </div>
<?php
//include_once 'Views/General/session.php';
//session_unset();
//session_destroy();
?>
</body>
</html>