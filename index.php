<?php
include 'db.php'; /* verbind met de database */
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegance by Aur</title>
  <meta name="description" content="Welcome to Elegance by Aur, find our handmade products here." />
  <link rel="shortcut icon" href="fotos/flavicon.png" />

  <!-- Bootstrap CSS (bootstrap laden)-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>   /* begin CSS styling */
.titel {   /* header */
    background-color: #ffb6d9;
    padding: 20px; /* Ruimte binnenin de header */
    text-align: center; /* Tekst in het midden */
    font-size: 2rem; /* Grote tekst */
    font-weight: bold; 
    color: #ffffff; 
  }

  * {
    margin: 0;      /* verwijdert standaard marges */
    padding: 0;     /* == padding */
    box-sizing: border-box;   /*zorgt dat padding binnen breedte valt*/
  }
  
  body {
    background-color: white;          /* achtergrond kleur*/
    font-family: Georgia, Italic;
    line-height: 1.6;
  }
  
  header {
    display: flex;      /*zet elementen naast elkaar*/
    justify-content: space-between;
    align-items: center;
    background-color: #ffb6d9;      /* kleur header */
    color: white;                 /* kleur tekst in header */
    padding: 1rem 2rem;
    flex-wrap: wrap;        /*zorgt dat het breekt op kleine schermen*/
  }
  

  .logo {
    display: flex;        /*naast elkaar*/
    align-items: center;
    gap: 10px;
    font-size: 1.5rem;
    font-weight: bold;
  }

nav ul li a img {
  width: 24px;       /*breedte icon*/
  height: 24px;       /*hoogte icoon*/
  object-fit: contain;
  display: block;
}

/* Zorg dat alles netjes op één lijn staat */
nav ul li {
  display: flex;
  align-items: center;
}

nav ul {
  list-style: none;     /*geen bolletjes*/
  display: flex;        /*naast elkaar*/
  gap: 1.5rem;
}

nav a {
  text-decoration: none;
  color: white;
  font-weight: 500;
}

  
.container {
    display: flex; /*elementen naast elkaar*/
    flex-direction: row; /* links en rechts naast elkaar */
    align-items: flex-start; /* bovenkanten gelijk */
    padding: 20px; /* ruimte rond */
  }
  
.image-section {  /*afbeelding in midden scherm*/
    flex: 1; /* neemt 50% van de breedte */
  }
  
.image-section img {
    max-width: 100%; /* afbeelding wordt nooit te breed */
    border-radius: 10px; /* zachte afgeronde hoeken */
  }
  
.info-section {   /* tekst in midden scherm */
    flex: 1; /* ook 50% van de breedte (andere helf van afbeelding) */
    background-color: #ffe4f2;
    color: #ffb6d9;
    font-family: Georgia, Italic;
    padding: 10px; /* ruimte binnen het tekstvak */
    border-radius: 10px; /* afgeronde hoeken */
    margin-left: 20px; /* ruimte tussen tekstvak en foto */
    display: flex;         /* flex container */
    flex-direction: column; /* elementen onder elkaar */
  }
 


  

 /* buttons (beide) */

 .buttons {
  display: flex;            /* naast elkaar */
  gap: 12px;                /* ruimte tussen de knoppen */
  margin-top: 65px;         /* ruitme onder de tekst + knoppen */
}

.btn-shop {
    background-color: #ffb6d9;      /* kleur knop */
    color: white;
    text-decoration: none;
    padding: 12px 28px;    /* omhulsel */
    border-radius: 10px;    /*afgerond*/
    font-weight: bold;
    display: inline-block;
  }
  


  /* hover effect */
.btn:hover {
    background-color: white;
    color: #ffb6d9;
  }

a:hover {
  text-decoration: underline;   /*underline bij hover*/  }
  </style>
</head>
<body>

  /* Header */
  <header>
    <div class="logo">
      <img src="fotos/flavicon.png" alt="Icoon elegancebyaur">
      <span> Elegance by Aur</span>
    </div>
    <nav>
      <ul>
        <li><a href="winkelwagen.php"><img src="fotos/shopping bag icon.webp" alt="shopping cart"></a></li>
        <li><a href="login.php"><img src="fotos/login.png" alt="Login"></a></li>
      </ul>
    </nav>
  </header>

  /* Hoofdcontainer */
  <div class="main-container container">
    /* Afbeelding */
    <div class="image-section">
      <img src="fotos/shop.jpg" alt="Shop Image">
    </div>

    /* Info + buttons */
    <div class="info-section">
      <h2>Welcome!</h2>
      <p>Find our handmade products here <br> ﾒ૦ﾒ૦ <br> -𝒜</p>
      <div class="buttons">
        <a href="shop.php" class="btn-shop">Shop</a>
        <a href="info.php" class="btn-shop">Info</a>
      </div>
    </div>
  </div>

  /* Bootstrap */
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>