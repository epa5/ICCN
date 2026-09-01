<?php
session_start();
$racine = '../';
$titre_page = "Galerie";
$page_actuelle = 'galerie.php';
require '../includes/header.php';

$photos = [
    ['fichier' => 'gorille-montagne.jpg', 'titre' => 'Silverback', 'categorie' => 'Faune'],
    ['fichier' => 'gorille-portrait.jpg', 'titre' => 'Portrait de Gorille', 'categorie' => 'Faune'],
    ['fichier' => 'gorille-herbe.jpg', 'titre' => 'Repos dans la clairière', 'categorie' => 'Faune'],
    ['fichier' => 'hero-virunga.jpg', 'titre' => 'Forêt primaire du Virunga', 'categorie' => 'Paysages'],
    ['fichier' => 'foret-primaires.jpg', 'titre' => 'Communautés riveraines', 'categorie' => 'Paysages'],
    ['fichier' => 'village-inonde.jpg', 'titre' => 'Saison des pluies', 'categorie' => 'Paysages'],
    ['fichier' => 'volcan-nyiragongo.jpg', 'titre' => 'Nyiragongo nocturne', 'categorie' => 'Volcans'],
    ['fichier' => 'volcan-versants.jpg', 'titre' => 'Versants du Nyiragongo', 'categorie' => 'Volcans'],
    ['fichier' => 'elephant-virunga.jpg', 'titre' => 'Éléphants de savane', 'categorie' => 'Faune'],
    ['fichier' => 'elephant-savane.jpg', 'titre' => 'Matin en savane', 'categorie' => 'Faune'],
    ['fichier' => 'singe-canopee.jpg', 'titre' => 'Primate de la canopée', 'categorie' => 'Faune'],
    ['fichier' => 'lac-edouard.jpg', 'titre' => 'Lac Édouard', 'categorie' => 'Paysages'],
];

$filtres = ['Tous', 'Faune', 'Paysages', 'Volcans'];
$filtre_active = isset($_GET['categorie']) ? $_GET['categorie'] : 'Tous';

$filtre_active_lower = strtolower($filtre_active);
$photos_affichees = array_filter($photos, function ($p) use ($filtre_active_lower) {
    if ($filtre_active_lower === 'tous') {
        return true;
    }
    return strtolower($p['categorie']) === $filtre_active_lower;
});
?>

<section class="galerie-hero">
    <div class="galerie-hero-contenu">
        <p class="eyebrow">Galerie Photographique</p>
        <h1 class="galerie-hero-titre">Virunga en Images</h1>
        <p class="galerie-hero-texte">
            Explorez la beauté sauvage du Parc National des Virunga à travers notre collection de photographies.
        </p>
    </div>
</section>

<section class="galerie-filtres">
    <div class="galerie-filtres-contenu">
        <?php foreach ($filtres as $filtre): ?>
            <a href="?categorie=<?= urlencode($filtre) ?>"
               class="bouton-filtre <?= strtolower($filtre) === $filtre_active_lower ? 'actif' : '' ?>">
                <?= htmlspecialchars($filtre) ?>
            </a>
        <?php endforeach; ?>
    </div>
</section>

<section class="galerie-section">
    <div class="gallery-masonry">
        <?php foreach ($photos_affichees as $photo): ?>
            <a href="../assets/images/especes/<?= htmlspecialchars($photo['fichier']) ?>"
               target="_blank"
               class="gallery-img"
               data-categorie="<?= htmlspecialchars($photo['categorie']) ?>">
                <img src="../assets/images/especes/<?= htmlspecialchars($photo['fichier']) ?>"
                     alt="<?= htmlspecialchars($photo['titre']) ?>"
                     loading="lazy">
                <div class="gallery-overlay">
                    <span class="gallery-overlay-categorie"><?= htmlspecialchars($photo['categorie']) ?></span>
                    <span class="gallery-overlay-titre"><?= htmlspecialchars($photo['titre']) ?></span>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
</section>

<?php require '../includes/footer.php'; ?>
