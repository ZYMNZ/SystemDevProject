<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" type="text/css" href="Views/styles/registration.css">
    <link rel="stylesheet" type="text/css" href="Views/styles/shared.css">
    <script src="Views/registration/scripts/validation.js"></script>

    <?php include_once "Views/shared/navbar.php"?>

</head>
<body>
    <div id="container">
        <!-- signup form -->
        <form id="signupForm" method="POST" action="?controller=login&action=login">
            <h1>Sign up</h1>
            <input type="text" id="signupUsername" name="username" placeholder="Username" class="TFborderRadiusAndColor" required><br>
            <input type="password" id="signupPassword" name="password" placeholder="Password" class="TFborderRadiusAndColor" required><br>
            <input type="password" id="signupConfirmPassword" name="confirmPassword" placeholder="Confirm Password" class="TFborderRadiusAndColor" required><br>
            <input class="submitButton" type="submit" value="Sign up"> <!-- sign up button should redirect to validation.php -->
        </form>
        <a href="?controller=user&action=haveAccount"><button class="backgroundColorAndRadius backButton">Back</button></a>
    </div>
</body>
</html>
