<?php
session_start(); 
include 'config.php'; 

$login_error = ""; 
$register_error = ""; 

// LOGIN-verwerking
if (isset($_POST['login'])) { // login ingedrukt
    $email = $conn->real_escape_string($_POST['login_email']); // email opschonen
    $password = $conn->real_escape_string($_POST['login_password']); // wachtwoord opschonen

    $result = $conn->query("SELECT * FROM contacts WHERE email = '$email'"); // gebruiker zoeken
    if ($result->num_rows == 1) { // gebruiker gevonden
        $user = $result->fetch_assoc(); // data ophalen

        if ($password === 'wachtwoord') { // wachtwoord check
            $_SESSION['user_id'] = $user['person_id']; // sessie id
            $_SESSION['user_name'] = $user['first_name']; // sessie naam
            header("Location: shop.php"); // doorsturen shop
            exit; // stoppen script
        } else {
            $login_error = "Ongeldig wachtwoord."; 
        }
    } else {
        $login_error = "Ongeldige e-mail."; 
    }
}

// REGISTER-verwerking
if (isset($_POST['register'])) { // register ingedrukt
    $name = $conn->real_escape_string($_POST['register_name']); // naam opschonen
    $email = $conn->real_escape_string($_POST['register_email']); // email opschonen
    $password = $conn->real_escape_string($_POST['register_password']); // wachtwoord opschonen
    $password_confirm = $conn->real_escape_string($_POST['register_password_confirm']); // bevestiging opschonen

    if ($password !== $password_confirm) { // wachtwoorden mismatch
        $register_error = "Wachtwoorden komen niet overeen.";
    } else {
        $check = $conn->query("SELECT * FROM contacts WHERE email = '$email'"); // email check
        if ($check->num_rows > 0) { // email bestaat
            $register_error = "E-mail is al in gebruik.";
        } else {
            $conn->query("INSERT INTO contacts (first_name, last_name, email) VALUES ('$name', '', '$email')"); // gebruiker toevoegen
            $_SESSION['user_id'] = $conn->insert_id; // sessie id
            $_SESSION['user_name'] = $name; // sessie naam
            header("Location: shop.php"); // doorsturen shop
            exit; // stoppen script
        }
    }
}
?>

<!DOCTYPE html> 
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Elegance by Aur - Login</title> 
    <link rel="shortcut icon" href="fotos/flavicon.png" />
    <link rel="stylesheet" href="shop.css"> 

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- bootstrap laden -->

    <style>
    body { background-color: white; font-family: Georgia, italic; } /* pagina basisstijl */
    .navbar { background-color: #ffb6d9; } /* navigatie achtergrond */
    .card-custom { max-width: 420px; margin: 80px auto; border-radius: 15px; background: #fff0f6; } /* login kaart */
    .btn-pink { background-color: #ffb6d9; color: white; } /* roze knop */
    .btn-pink:hover { background-color: #ff69b4; } /* hover effect */
    .nav-tabs .nav-link.active { background-color: #ffb6d9; color: white; border: none; } /* actieve tab */
    .nav-tabs .nav-link { color: #ff69b4; } /* niet-actieve tab */
    a { color: #ff69b4; text-decoration: none; } /* link stijl */
</style>

</head>
<body>

<header>
    <div class="logo"> 
        <img src="fotos/flavicon.png" alt="Icon elegancebyaur"> <!-- logo afbeelding -->
        <span>Elegance by Aur</span>
    </div>
    <nav> 
        <ul>
            <li><a href="index.php">Home</a></li> 
            <li><a href="shop.php">Shop</a></li> 
            <li><a href="info.html">Info</a></li> 
            <li><a href="winkelwagen.php"><img src="fotos/shopping bag icon.webp" alt="Winkelwagen"></a></li> 
        </ul>
    </nav>
</header>

<div class="card card-custom shadow p-4"> <!-- login/register kaart -->

    <ul class="nav nav-tabs mb-3" id="authTabs" role="tablist"> <!-- tab knoppen -->
        <li class="nav-item w-50">
            <button class="nav-link active w-100" data-bs-toggle="tab" data-bs-target="#login">Login</button> <!-- login tab -->
        </li>
        <li class="nav-item w-50">
            <button class="nav-link w-100" data-bs-toggle="tab" data-bs-target="#register">Registreren</button> <!-- register tab -->
        </li>
    </ul>

    <div class="tab-content"> <!-- tab inhoud -->

        <!-- LOGIN -->
        <div class="tab-pane fade show active" id="login"> <!-- login panel -->
            <h4 class="text-center mb-3">Welkom terug</h4> 
            <?php if ($login_error) echo "<div class='alert alert-danger'>$login_error</div>"; ?>
            <form method="POST"> <!-- login formulier -->
                <div class="mb-3">
                    <label class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="login_email" required> <!-- email invoer -->
                </div>
                <div class="mb-3">
                    <label class="form-label">Wachtwoord</label>
                    <input type="password" class="form-control" name="login_password" required> <!-- wachtwoord invoer -->
                </div>
                <button type="submit" class="btn btn-pink w-100" name="login">Log in</button> <!-- login knop -->
            </form>
        </div>

        <!-- REGISTER -->
        <div class="tab-pane fade" id="register"> <!-- register panel -->
            <h4 class="text-center mb-3">Maak een account</h4>
            <?php if ($register_error) echo "<div class='alert alert-danger'>$register_error</div>"; ?>
            <form method="POST"> <!-- register formulier -->
                <div class="mb-3">
                    <label class="form-label">Naam</label>
                    <input type="text" class="form-control" name="register_name" required> <!-- naam invoer -->
                </div>
                <div class="mb-3">
                    <label class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="register_email" required> <!-- email invoer -->
                </div>
                <div class="mb-3">
                    <label class="form-label">Wachtwoord</label>
                    <input type="password" class="form-control" name="register_password" required> <!-- wachtwoord invoer -->
                </div>
                <div class="mb-3">
                    <label class="form-label">Bevestig wachtwoord</label>
                    <input type="password" class="form-control" name="register_password_confirm" required> <!-- bevestiging invoer -->
                </div>
                <button type="submit" class="btn btn-pink w-100" name="register">Registreer</button> <!-- register knop -->
            </form>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> <!-- bootstrap -->

</body>
</html>
