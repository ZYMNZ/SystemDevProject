<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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

        #container input {
            margin: 5px;
            padding: 8px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div id="container">
        <h1>Have an account?</h1>  
        <div>
            <input type="button" value="Yes" onclick="location.href='login.php'">
            <input type="button" value="No" onclick="location.href='signup.php'">
        </div>
    </div>
</body>
</html>
