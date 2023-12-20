<!--Error Page in case anything happens-->

<html lang="en" style="height: 100%; width: 100%">
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
    <body >
        <div class="error">
            <h2>Oops! Something went wrong.</h2>
            <p>We're sorry, but it seems like there's an issue with the application.
                Please try again later.</p>
        </div>

        <a href="?controller=home&action=home"><button class="backgroundColorAndRadius backButton homeErrorPage" style="margin: auto;">Home</button></a>

        <div class="contactEdit" style="display: inline">
            <?php include_once "Views/shared/footer.php"?>
        </div>

    </body>
</html>