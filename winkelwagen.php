<?php
include 'db.php'; // verbindt met de database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegance by Aur - Shopping cart</title>
    <link rel="shortcut icon" href="fotos/flavicon.png" />
    <link rel="stylesheet" href="winkelwagen.css">
</head>
<body>

    <header>
        <div class="logo">
            <img src="fotos/flavicon.png" alt="Icon elegancebyaur">
            <span>Elegance by Aur</span>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="shop.php">Shop</a></li>
                <li><a href="info.php">Info</a></li>
                <li><a href="login.php"><img src="fotos/login.png" alt="Login"></a></li>
            </ul>
        </nav>
    </header>
    
    <div class="cart-container">
        <h1>Shoppingcart</h1>
    
        <div class="cart-item">
            <img src="fotos/dress.png" alt="product">
            <div class="item-info">
                <h2>St. Tropez Dress</h2>
                <p>€34,99</p>
            </div>
    
            <input type="number" value="1" min="1">     <!-- aantal invoer -->
    
            <button class="remove-btn">Delete</button>
        </div>
    
        <div class="cart-item">
            <img src="fotos/necklace.png" alt="product">
            <div class="item-info">
                <h2>Lovely Necklace</h2>
                <p>€19,99</p>
            </div>
    
            <input type="number" value="2" min="1">
    
            <button class="remove-btn">Delete</button>
        </div>
    
        <div class="cart-total">
            <h2>Totaal: €55,00</h2>
            <button class="checkout-btn">Checkout</button>
        </div>
    </div>
    
    </body>
</html>
