<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegance by Aur - Info</title>
    <link rel="shortcut icon" href="fotos/flavicon.png">
    <link rel="stylesheet" href="info.css">
</head>
<body id="top">

<header>
    <div class="logo">
        <img src="fotos/flavicon.png" alt="Icon elegancebyaur">
        <span>Elegance by Aur</span>
    </div>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="shop.html">Shop</a></li>
            <li><a href="winkelwagen.html"><img src="fotos/shopping bag icon.webp" alt="shopping cart"></a></li>
            <li><a href="login.html"><img src="fotos/login.png" alt="Login"></a></li>
        </ul>
    </nav>
</header>

<main class="info-container">
    <h1 class="pagina-titel">Contact & Informatie</h1>

    <div class="info-card">
        <div class="info-icon">📞</div>
        <div>
            <h2>Ons telefoonnummer</h2>
            <p><a href="tel:+32492492942">+32 492 49 29 42</a></p>
        </div>
    </div>

    <div class="info-card">
        <div class="info-icon">📍</div>
        <div>
            <h2>Onze locatie</h2>
            <p>Kerkstraat 13<br>1840 Londerzeel, België</p>
        </div>
    </div>

    <div class="locatie"> <!--afbeeling dat doorlinkt naar google maps-->
        <a href="https://www.google.com/maps/place/Kerkstraat+13,+1840+Londerzeel/@51.0026129,4.3018263,18.67z/data=!4m5!3m4!1s0x47c3eb93c179ef87:0x23eb3966da66df86!8m2!3d51.0024422!4d4.3022232?entry=ttu&g_ep=EgoyMDI2MDIyNS4wIKXMDSoASAFQAw%3D%3D" target="_blank">
            <img src="fotos/googlemaps.jpg" alt="Google Maps Foto">
        </a>
</main>

    <a class="back-to-top" href="#top">↑ Terug naar boven</a>

</body>
</html>