<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" type="text/css" href="Views/styles/registration.css">
    <link rel="stylesheet" type="text/css" href="Views/styles/shared.css">

    <?php include_once "Views/shared/navbar.php"?>

</head>
<body>
    <div id="container">
        <!-- signup form -->
        <form id="signupForm" method="POST" action="login.php">
            <h1>Sign up</h1>
            <input type="text" id="signupUsername" name="username" placeholder="Username" required><br>
            <input type="password" id="signupPassword" name="password" placeholder="Password" required><br>
            <input type="password" id="signupConfirmPassword" name="confirmPassword" placeholder="Confirm Password" required><br>
            <input type="submit" value="Sign up"> <!-- sign up button should redirect to validation.php -->
        </form>
        <a href="?controller=login&action=login"><button style="padding: 8px 14px; margin-right:14%; ">Back</button></a>
    </div>
</body>
</html>
