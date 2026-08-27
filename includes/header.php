<?php
$racine = $racine ?? '';
if (!isset($page_actuelle)) {
    $page_actuelle = basename($_SERVER['PHP_SELF']);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($titre_page) ? $titre_page . " - Parc National des Virunga" : "Parc National des Virunga"; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,600&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $racine; ?>assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

<header class="site-header">
    <div class="entete-conteneur">

        <a href="<?php echo $racine; ?>pages/dashboard.php" class="logo-lien">
            <img src="<?php echo $racine; ?>assets/images/virunga_logo.png" alt="Logo Virunga" class="logo-icone">
            <span class="logo-texte">
                Parc National
                <small>des Virunga</small>
            </span>
        </a>

        <button type="button" class="menu-hamburger" id="menuHamburger" aria-label="Ouvrir le menu">
            <i class="fa-solid fa-bars"></i>
        </button>

        <nav class="menu-principal" id="menuPrincipal">
            <ul>
                <li><a href="dashboard.php" class="<?php echo ($page_actuelle == 'dashboard.php') ? 'actif' : ''; ?>">Accueil</a></li>
                <li><a href="a-propos.php" class="<?php echo ($page_actuelle == 'a-propos.php') ? 'actif' : ''; ?>">À propos</a></li>
                <li><a href="faune-flore.php" class="<?php echo ($page_actuelle == 'faune-flore.php') ? 'actif' : ''; ?>">Faune</a></li>
                <li><a href="nyiragongo.php" class="<?php echo ($page_actuelle == 'nyiragongo.php') ? 'actif' : ''; ?>">Nyiragongo</a></li>
                <li><a href="rwenzori.php" class="<?php echo ($page_actuelle == 'rwenzori.php') ? 'actif' : ''; ?>">Rwenzori</a></li>
                <li><a href="galerie.php" class="<?php echo ($page_actuelle == 'galerie.php') ? 'actif' : ''; ?>">Galerie</a></li>
                <li><a href="carte.php" class="<?php echo ($page_actuelle == 'carte.php') ? 'actif' : ''; ?>">Carte</a></li>
                <li><a href="contact.php" class="<?php echo ($page_actuelle == 'contact.php') ? 'actif' : ''; ?>">Contact</a></li>
            </ul>
        </nav>

    </div>
</header>

<main>
