<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" type="text/css" href="Views/styles/registration.css">
    <link rel="stylesheet" type="text/css" href="Views/styles/shared.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="Views/General/scripts/errorValidations.js" type="text/javascript"></script>
    <script src="Views/registration/scripts/registrationValidation.js"></script>

    <?php include_once "Views/shared/navbar.php"?>

</head>
<body>
    <div id="container">
        <!-- signup form -->
        <form id="registrationForm" method="POST" action="?controller=login&action=validation">
            <h1>Sign up</h1>
            <label style="color: black; display: block; font-size: large"><b>Click TWICE</b> on submit <b>AFTER</b> inputs are entered correctly for <u>confirmation</u></label>
            <input type="text" id="signupUsername" name="username" placeholder="Username" class="tFBorderRadiusAndColor" required><br>
            <label class="invalidInputLabel displayBlock displayNone" name="errorUsernameLabel"></label>
            <input type="password" id="signupPassword" name="password" placeholder="Password" class="tFBorderRadiusAndColor" required><br>
            <label class="invalidInputLabel displayBlock displayNone" name="errorPasswordLabel"></label>
            <input type="password" id="signupConfirmPassword" name="confirmPassword" placeholder="Confirm Password" class="tFBorderRadiusAndColor" required><br>
            <label class="invalidInputLabel displayBlock displayNone" name="notMatchingPasswordLabel"></label>
            <input class="submitButton" id="submitbutton" name="submit" type="submit" value="Sign up">

            <!-- sign up button should redirect to validation.php -->
        </form>
        <a href="?controller=user&action=haveAccount"><button class="backgroundColorAndRadius backButton">Back</button></a>
    </div>
</body>
</html>
