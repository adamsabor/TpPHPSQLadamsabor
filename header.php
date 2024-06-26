<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MangaShop - Votre destination pour les meilleurs mangas.">
    <meta name="keywords" content="manga, shop, acheter, vente, shonen, seinen">
    <meta name="author" content="MangaShop">
    <title>MangaShop</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<header class="mb-4">
    <div class="container">
        <div class="header-content d-flex justify-content-between align-items-center py-3">
            <a href="index.php"><img src="images/logo.png" alt="MangaShop Logo" class="logo"></a>
            <nav>
                <ul class="d-flex list-unstyled mb-0">
                    <li class="mx-3"><a href="#Meilleurvente">Meilleurs ventes</a></li>
                    <li class="mx-3"><a href="#Shonen">Shonen</a></li>
                    <li class="mx-3"><a href="#Seinens">Seinens</a></li>
                    <li class="mx-3"><a href="#promotions">Promotion</a></li>
                </ul>
            </nav>
            <input type="search" class="form-control w-25" placeholder="Rechercher des mangas...">
            <div id="cart" class="cart ml-3">
                <h3>Panier</h3>
                <ul id="cart-items" class="list-unstyled"></ul>
                <p>Total: <span id="cart-total">0.00€</span></p>
                <button id="empty-cart" class="btn btn-danger">Vider le panier</button>
                <button id="checkout" class="btn btn-success">Passer à la caisse</button>
            </div>
            <div id="user-auth" class="ml-3">
                <button id="login" class="btn btn-primary">Connexion</button>
                <button id="logout" class="btn btn-secondary" style="display:none;">Déconnexion</button>
            </div>
        </div>
    </div>
</header>
