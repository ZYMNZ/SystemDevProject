<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" type="text/css" href="Views/styles/forgotPass.css">
    <link rel="stylesheet" type="text/css" href="Views/styles/shared.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="Views/General/scripts/errorValidations.js" type="text/javascript"></script>
    <script src="Views/login/scripts/forgetPassValidation.js" type="text/javascript"></script>

    <?php include_once "Views/shared/navbar.php"?>
</head>
<body>
    <div id="container" style="height: 84vh;">
        <!-- forgot password form -->
        <form id="forgotPasswordForm" method="POST" action="/?controller=login&action=forgotPassValidation">
            <h1>Reset Password</h1>
<!--            <input type="text" id="forgotUsername" name="username" placeholder="Username" class="tFBorderRadiusAndColor" required><br>-->
<!--            <input type="password" id="forgotPassword" name="password" placeholder="Password" class="tFBorderRadiusAndColor" required><br>-->
<!--            <input type="password" id="forgotConfirmPassword" name="confirmPassword" placeholder="Confirm Password" class="tFBorderRadiusAndColor" required><br>-->
<!--            <br>-->
<!--            <input class="submitButton" type="submit" value="Submit">-->

            <label style="color: black; display: block; font-size: large"><b>Click TWICE</b> on submit <b>AFTER</b> inputs are entered correctly for <u>confirmation</u></label>
            <?php
            if (isset($_SESSION['error']) && ($_SESSION['error'] === 'Sorry try again !' ||$_SESSION['error'] === 'Sorry the USERNAME is invalid, try again !' )){
                echo " <label class='invalidInputLabel'> {$_SESSION['error']} </label>";
                unset($_SESSION['error']);
            }
            ?>
            <input type="text" id="forgotUsername" name="username" placeholder="Username" class="tFBorderRadiusAndColor" required><br>
            <label class="invalidInputLabel displayBlock displayNone" name="errorUsernameLabel"></label>
            <input type="password" id="forgotPassword" name="password" placeholder="New Password" class="tFBorderRadiusAndColor" required><br>
            <label class="invalidInputLabel displayBlock displayNone" name="errorPasswordLabel"></label>
            <input type="password" id="forgotConfirmPassword" name="confirmPassword" placeholder="Confirm Password" class="tFBorderRadiusAndColor" required><br>
            <label class="invalidInputLabel displayBlock displayNone" name="notMatchingPasswordLabel"></label> <br/>
            <input class="submitButton" id="submitbutton" name="submit" type="submit" value="Submit">


            <!-- submit button should redirect to login.php -->
        </form>
        <a href="?controller=login&action=login"><button class="backgroundColorAndRadius backButton" >Back</button></a>
    </div>
</body>
</html>
