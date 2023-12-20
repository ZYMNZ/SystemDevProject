<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contact</title>

    <link rel="stylesheet" type="text/css" href="Views/styles/contact.css"> <!-- Create a new CSS file for contact styles -->
    <link rel="stylesheet" type="text/css" href="Views/styles/shared.css">
    <?php include_once "Views/shared/navbar.php"?>
</head>
<body>

<!--

    CURRENTLY DISABLED !!!

-->


    <div id="container">
        
        <form id="addContactForm" method="POST" action="?controller=contact&action=save">
            <h1>Add Contact</h1>
            <input type="text" id="contactTitle" name="title" placeholder="Contact Title" class="tFBorderRadiusAndColor" required><br>
            <textarea id="contactDescription" name="description" placeholder="Contact Info" class="tFBorderRadiusAndColor" required></textarea><br>
            <input class="submitButton" type="submit" value="Save">
        </form>

        <a href="?controller=home&action=index"><button class="backgroundColorAndRadius backButton" >Back</button></a>
    </div>

</body>
</html>
