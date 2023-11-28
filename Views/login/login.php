<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
</head>
<body>
    <div id="container">
    <!-- login form -->
    <form id="loginForm" method="POST" action="main.php">
        <h1>Login</h1>
        <input type="text" id="loginUsername" name="username" placeholder="Username" required><br>
        <input type="password" id="loginPassword" name="password" placeholder="Password" required><br>
        <p><a href = "forgotpass.php">Forgot password? Click me</a></p>
        <input type="submit" value="Login"> <!-- login up button should redirect to main.php -->
    </form>
    </div>
</body>
</html>