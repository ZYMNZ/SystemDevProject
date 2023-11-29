<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="Views/styles/forgotPass.css">
    <link rel="stylesheet" type="text/css" href="Views/styles/shared.css">

    <?php include_once "Views/shared/navbar.php"?>
</head>
<body>
    <div id="container">
        <!-- forgot password form -->
        <form id="forgotPasswordForm" method="POST" action="?controller=login&action=login">
            <h1>Reset Password</h1>
            <input type="text" id="forgotUsername" name="username" placeholder="Username" required><br>
            <input type="password" id="forgotPassword" name="password" placeholder="Password" required><br>
            <input type="password" id="forgotConfirmPassword" name="confirmPassword" placeholder="Confirm Password" required><br>
            <br>
            <input type="submit" value="Submit"> <!-- submit button should redirect to login.php -->
        </form>
        <a href="?controller=login&action=login"><button style="padding: 8px 14px; margin-right:14%; ">Back</button></a>
    </div>
</body>
</html>
