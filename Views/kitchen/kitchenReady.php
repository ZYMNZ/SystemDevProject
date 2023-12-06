<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitchen Orders</title>

    <link rel="stylesheet" type="text/css" href="Views/styles/kitchen-orders.css"> <!-- Create a new CSS file for kitchen orders styles -->
    <link rel="stylesheet" type="text/css" href="Views/styles/shared.css">
    <?php include_once "Views/shared/navbar.php"?>
</head>
<body>

    <div id="container">
        <h1>Kitchen Orders</h1>

        <div class="orderBox">
            <!-- just some example data -->
            <p><strong>Order ID:</strong> #123457</p>
            <p><strong>Items:</strong> Burger, Fries, Soda</p>
            <p><strong>Total:</strong> $12.99</p>
            
            <div class="readyButtons">
                <form method="POST" action="/?controller=kitchen&action=markReady">
                    <input type="hidden" name="order_id" value="123457"> <!-- we will repllace with dynamic order ID -->
                    <input type="submit" class="readyButton" value="Yes">
                </form>
                
                <form method="POST" action="/?controller=kitchen&action=markNotReady">
                    <input type="hidden" name="order_id" value="123457"> 
                    <input type="submit" class="notReadyButton" value="No">
                </form>
            </div>
        </div>


    </div>

</body>
</html>
