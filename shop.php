<?php
include 'db.php'; // verbindt met de database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegance by Aur - Shop</title>
    <link rel="shortcut icon" href="fotos/flavicon.png" />
    <link rel="stylesheet" href="shop.css">
</head>
<body>
    
    <header>
        <div class="logo">
          <img src="fotos/flavicon.png" alt="Icoon elegancebyaur">
          <span> Elegance by Aur</span>
        </div>
        <nav>
          <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="info.php">Info</a></li>
            <li><a href="winkelwagen.php"><img src="fotos/shopping bag icon.webp" alt="shopping cart"></a></li>
            <li><a href="login.php"><img src="fotos/login.png" alt="Login"></a></li>
          </ul>
        </nav>
      </header>

      <table>
        <tr>    <!-- eerste rij = kolomtitels -->
            <th>Picture product</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
        </tr>
        <tr>
            <td><img src="fotos/dress.png" alt="picture dress"></td>
            <td>St. Tropez Dress</td>
            <td>34.99€</td>
            <td>Embrace effortless elegance with this stunning dress. Featuring delicate off-shoulder sleeves, a flowy mini skirt, and a chic bow adorned with a floral detail, this piece exudes femininity and grace.</td>
        </tr>
        <tr>
            <td><img src="fotos/shoes.png" alt="picture shoes"></td>
            <td>Statement Boots</td>
            <td>89.99€</td>
            <td>These faux suede or faux leather heeled boots are a must-have for every fashionista! With their elegant design and comfortable fit, they’re perfect for everyday wear or a night out.</td>
        </tr>
        <tr>
            <td><img src="fotos/necklace.png" alt="picture necklace"></td>
            <td>Lovely Necklace</td>
            <td>19.99€</td>
            <td>A beautiful and elegant necklace that's easy to combine with your outfit and other jewelry. This medium-length necklace is a real eye-catcher. Check out our matching ring: Lovely ring!</td>
        </tr>
        <tr>
            <td><img src="fotos/ring.png" alt="picture ring"></td>
            <td>Lovely Ring</td>
            <td>14.99€</td>
            <td>This minimalist ring with a statement heart adds a touch of love to your look. Complete your ring party by adding this fun statement ring. Check out our matching necklace: Lovely necklace!</td>
        </tr>
        </table>

        <a class="back-to-top" href="#top">↑ Terug naar boven</a>

</body>
</html>