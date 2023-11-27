<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <style>
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
        <!-- forgot password form -->
        <form id="forgotPasswordForm" method="POST" action="login.php">
            <h1>Reset Password</h1>
            <input type="text" id="forgotUsername" name="username" placeholder="Username" required><br>
            <input type="password" id="forgotPassword" name="password" placeholder="Password" required><br>
            <input type="password" id="forgotConfirmPassword" name="confirmPassword" placeholder="Confirm Password" required><br>
            <input type="submit" value="Sumbit"> <!-- submit button should redirect to login.php -->
        </form>
    </div>
</body>
</html>
