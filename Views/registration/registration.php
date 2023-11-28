<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
    <script>
        // add password validation 
    </script>
</head>
<body> 
    <div id="container">     
        <!-- signup form -->
        <form id="signupForm" method="POST" action="login.php">
            <h1>Sign up</h1>
            <input type="text" id="signupUsername" name="username" placeholder="Username" required><br>
            <input type="password" id="signupPassword" name="password" placeholder="Password" required><br>
            <input type="password" id="signupConfirmPassword" name="confirmPassword" placeholder="Confirm Password" required><br>
            <input type="submit" value="Sign up"> <!-- sign up button should redirect to login.php -->
        </form>
    </div>
</body>
</html>
