<!--Error Page in case anything happens-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error</title>
    <link rel="stylesheet" type="text/css" href="Views/styles/error.css">
    <link rel="stylesheet" type="text/css" href="Views/styles/navbarFooter.css">
    <link rel="stylesheet" type="text/css" href="Views/styles/shared.css">

    <?php include_once "Views/shared/navbar.php"?>
</head>
<body>
<div class="error">
    <h2>Oops! Something went wrong.</h2>
    <p>We're sorry, but it seems like there's an issue with the application.
        Please try again later.</p>
</div>

<a href="?controller=user&action=haveAccount"><button class="backgroundColorAndRadius backButton" >Back STAFF</button></a>
<a href="?controller=user&action=client"><button class="backgroundColorAndRadius backButton" >Back CLIENT</button></a>

<?php include_once "Views/shared/footer.php"?>
</body>
</html>