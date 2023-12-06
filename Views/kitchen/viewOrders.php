<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitchen Orders</title>

    <link rel="stylesheet" type="text/css" href="Views/styles/kitchen-orders.css"> <!-- Assuming you have a common style file for kitchen orders -->
    <link rel="stylesheet" type="text/css" href="Views/styles/shared.css">
    <?php include_once "Views/shared/navbar.php"?>
</head>
<body>

    <div id="container">
        <!-- example table number -->
        <h1>Table #5 Orders</h1>

        <div id="orderList">
            <!-- example orders just for testing until db works with view -->
            <div class="orderBox">
                <p><strong>Order ID:</strong> #123457</p>
                <p><strong>Items:</strong> Burger, Fries, Soda</p>
                <p><strong>Total:</strong> $12.99</p>
                
                <div class="orderButtons">
                    <form method="POST" action="/?controller=kitchen&action=markReady">
                        <input type="hidden" name="order_id" value="123457"> <!-- must repllace with dynamic order ID -->
                        <input type="submit" class="readyButton" value="Ready">
                    </form>
                    
                    <form method="POST" action="/?controller=kitchen&action=cancelOrder">
                        <input type="hidden" name="order_id" value="123457">
                        <input type="submit" class="cancelButton" value="Cancel">
                    </form>
                </div>
            </div>


        </div>
    </div>

</body>
</html>
