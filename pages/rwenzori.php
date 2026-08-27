<?php
session_start();
$racine = '../';
$titre_page = "Rwenzori";
$page_actuelle = 'attractions.php';
require '../includes/header.php';
?>

<section class="dashboard-hero" style="height: 85vh; min-height: 500px;">
    <img src="../assets/images/especes/hero-virunga.jpg" alt="Rwenzori les montagnes de la lune" class="dashboard-hero-img">
    <div class="dashboard-hero-overlay"></div>
    <div class="dashboard-hero-stripe"></div>

    <div class="dashboard-hero-contenu">
        <div class="badge-pulse">
            <span class="point-pulse"></span>
            Montagnes de la Lune · 5 109 m
        </div>

        <h1 class="dashboard-hero-titre">
            Rwenzori<br>
            <em>les montagnes de la lune</em>
        </h1>

        <p class="dashboard-hero-texte">
            Massif montagneux d'Afrique centrale culminant à 5 109 m, les Rwenzori abritent des glaciers équatoriaux, des forêts de bruyères géantes et une biodiversité endémique unique au monde.
        </p>

        <div class="dashboard-hero-boutons">
            <a href="contact.php" class="bouton-dore-plein">Planifier l'Ascension <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<section class="barre-stats">
    <div class="barre-stats-grille">
        <div class="stat-item">
            <div class="stat-valeur">5 109 m</div>
            <div class="stat-label">Pic Margherita</div>
        </div>
        <div class="stat-item">
            <div class="stat-valeur">120 km</div>
            <div class="stat-label">Longueur</div>
        </div>
        <div class="stat-item">
            <div class="stat-valeur">50 km</div>
            <div class="stat-label">Largeur</div>
        </div>
        <div class="stat-item">
            <div class="stat-valeur">1994</div>
            <div class="stat-label">Classement UNESCO</div>
        </div>
    </div>
</section>

<section class="section-highlights" style="padding: 6rem 2rem;">
    <p class="eyebrow">Géologie &amp; Sommets</p>
    <h2 class="titre-highlights" style="max-width: 650px;">
        Un massif rocheux<br>
        <em>au cœur de l'Afrique</em>
    </h2>

    <div style="display: grid; grid-template-columns: 1.2fr 1fr; gap: 4rem; align-items: start; max-width: 1280px; margin: 0 auto;">
        <div>
            <p style="font-size: 1rem; color: rgba(237,232,216,0.8); line-height: 1.8; margin-bottom: 2rem;">
                Les montagnes Rwenzori, surnommées les « Montagnes de la Lune », forment un massif cristallin d'origine tectonique situé à la frontière entre la RDC et l'Ouganda. Élevé à plus de 5 000 mètres d'altitude, ce chaînon montagneux constitue la troisième plus haute sommet d'Afrique. Ses pics permanents, ses glaciers équatoriaux et ses chutes d'eau spectaculaires en font l'un des environnements les plus uniques du continent.
            </p>
            <p style="font-size: 1rem; color: rgba(237,232,216,0.8); line-height: 1.8; margin-bottom: 2.5rem;">
                Les Rwenzori abritent cinq sommets principaux dépassant les 4 800 m, chacun offrant des panoramas exceptionnels et des défis d'ascension variés pour les alpinistes du monde entier.
            </p>

            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; font-family: 'Work Sans', sans-serif;">
                    <thead>
                        <tr style="border-bottom: 2px solid rgba(201,168,76,0.3);">
                            <th style="text-align: left; padding: 0.8rem 1rem; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase; color: var(--or);">Sommets</th>
                            <th style="text-align: right; padding: 0.8rem 1rem; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase; color: var(--or);">Altitude</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid rgba(201,168,76,0.12);">
                            <td style="padding: 0.9rem 1rem; color: var(--creme); font-size: 0.95rem; font-weight: 500;">Pic Margherita</td>
                            <td style="text-align: right; padding: 0.9rem 1rem; color: var(--or); font-family: 'Fraunces', serif; font-size: 1.1rem; font-weight: 600;">5 109 m</td>
                        </tr>
                        <tr style="border-bottom: 1px solid rgba(201,168,76,0.12);">
                            <td style="padding: 0.9rem 1rem; color: var(--creme); font-size: 0.95rem; font-weight: 500;">Pic Alexandra</td>
                            <td style="text-align: right; padding: 0.9rem 1rem; color: var(--or); font-family: 'Fraunces', serif; font-size: 1.1rem; font-weight: 600;">5 091 m</td>
                        </tr>
                        <tr style="border-bottom: 1px solid rgba(201,168,76,0.12);">
                            <td style="padding: 0.9rem 1rem; color: var(--creme); font-size: 0.95rem; font-weight: 500;">Pic Savoia</td>
                            <td style="text-align: right; padding: 0.9rem 1rem; color: var(--or); font-family: 'Fraunces', serif; font-size: 1.1rem; font-weight: 600;">4 977 m</td>
                        </tr>
                        <tr style="border-bottom: 1px solid rgba(201,168,76,0.12);">
                            <td style="padding: 0.9rem 1rem; color: var(--creme); font-size: 0.95rem; font-weight: 500;">Pic Speke</td>
                            <td style="text-align: right; padding: 0.9rem 1rem; color: var(--or); font-family: 'Fraunces', serif; font-size: 1.1rem; font-weight: 600;">4 890 m</td>
                        </tr>
                        <tr>
                            <td style="padding: 0.9rem 1rem; color: var(--creme); font-size: 0.95rem; font-weight: 500;">Pic Baker</td>
                            <td style="text-align: right; padding: 0.9rem 1rem; color: var(--or); font-family: 'Fraunces', serif; font-size: 1.1rem; font-weight: 600;">4 844 m</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div style="display: flex; flex-direction: column; gap: 1.5rem;">
            <div style="position: relative; border-radius: 3px; overflow: hidden; aspect-ratio: 4 / 3;">
                <img src="../assets/images/especes/foret-primaires.jpg" alt="Forêt de montagne des Rwenzori" style="width: 100%; height: 100%; object-fit: cover;">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.2rem; background: linear-gradient(to top, rgba(11,26,13,0.9), transparent);">
                    <span style="font-size: 0.72rem; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase; color: var(--or);">Zone forestière</span>
                </div>
            </div>
            <div style="position: relative; border-radius: 3px; overflow: hidden; aspect-ratio: 4 / 3;">
                <img src="../assets/images/especes/village-inonde.jpg" alt="Pied des montagnes Rwenzori" style="width: 100%; height: 100%; object-fit: cover;">
                <div style="position: absolute; bottom: 0; left: 0; right: 0; padding: 1.2rem; background: linear-gradient(to top, rgba(11,26,13,0.9), transparent);">
                    <span style="font-size: 0.72rem; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase; color: var(--or);">Pied du massif</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section style="background: var(--vert-footer); border-top: 1px solid rgba(201,168,76,0.15); border-bottom: 1px solid rgba(201,168,76,0.15); padding: 6rem 2rem;">
    <div style="max-width: 1280px; margin: 0 auto;">
        <p class="eyebrow">Biodiversité altitudinale</p>
        <h2 class="titre-highlights" style="max-width: 650px; margin-bottom: 3.5rem;">
            Cinq zones,<br>
            <em>cinq mondes</em>
        </h2>

        <div style="display: flex; flex-direction: column; gap: 0;">

            <!-- Zone 1 -->
            <div style="display: grid; grid-template-columns: 200px 1fr 1.5fr 1.5fr; gap: 0; border-bottom: 1px solid rgba(201,168,76,0.12); align-items: center;">
                <div style="padding: 1.8rem 1.5rem; border-right: 1px solid rgba(201,168,76,0.1);">
                    <span style="font-family: 'Fraunces', serif; font-size: 1.3rem; font-weight: 600; color: var(--or);">800 – 1 500 m</span>
                </div>
                <div style="padding: 1.8rem 1.5rem; border-right: 1px solid rgba(201,168,76,0.1);">
                    <h3 style="font-family: 'Fraunces', serif; font-size: 1.15rem; color: var(--creme); margin-bottom: 0.3rem;">Zone brousse &amp; forêt</h3>
                    <span style="font-size: 0.75rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--gris-texte);">Termitières &amp; bush</span>
                </div>
                <div style="padding: 1.8rem 1.5rem; border-right: 1px solid rgba(201,168,76,0.1);">
                    <p style="font-size: 0.9rem; color: rgba(237,232,216,0.75); line-height: 1.6;">Graminées, plantes herbacées, arbustes épineux, palmiers raphia.</p>
                </div>
                <div style="padding: 1.8rem 1.5rem;">
                    <p style="font-size: 0.9rem; color: rgba(237,232,216,0.75); line-height: 1.6;">Éléphants, buffles, lion, hyène, phacochère, antilopes.</p>
                </div>
            </div>

            <!-- Zone 2 -->
            <div style="display: grid; grid-template-columns: 200px 1fr 1.5fr 1.5fr; gap: 0; border-bottom: 1px solid rgba(201,168,76,0.12); align-items: center;">
                <div style="padding: 1.8rem 1.5rem; border-right: 1px solid rgba(201,168,76,0.1);">
                    <span style="font-family: 'Fraunces', serif; font-size: 1.3rem; font-weight: 600; color: var(--or);">1 500 – 2 500 m</span>
                </div>
                <div style="padding: 1.8rem 1.5rem; border-right: 1px solid rgba(201,168,76,0.1);">
                    <h3 style="font-family: 'Fraunces', serif; font-size: 1.15rem; color: var(--creme); margin-bottom: 0.3rem;">Forêt de montagne</h3>
                    <span style="font-size: 0.75rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--gris-texte);">Canopée dense</span>
                </div>
                <div style="padding: 1.8rem 1.5rem; border-right: 1px solid rgba(201,168,76,0.1);">
                    <p style="font-size: 0.9rem; color: rgba(237,232,216,0.75); line-height: 1.6;">Fougères arborescentes, mousses, lichens, hélichryses, lobélias géants.</p>
                </div>
                <div style="padding: 1.8rem 1.5rem;">
                    <p style="font-size: 0.9rem; color: rgba(237,232,216,0.75); line-height: 1.6;">Gorilles des montagnes, singes colobes, cerfs forêts, oiseaux endémiques.</p>
                </div>
            </div>

            <!-- Zone 3 -->
            <div style="display: grid; grid-template-columns: 200px 1fr 1.5fr 1.5fr; gap: 0; border-bottom: 1px solid rgba(201,168,76,0.12); align-items: center;">
                <div style="padding: 1.8rem 1.5rem; border-right: 1px solid rgba(201,168,76,0.1);">
                    <span style="font-family: 'Fraunces', serif; font-size: 1.3rem; font-weight: 600; color: var(--or);">2 500 – 3 500 m</span>
                </div>
                <div style="padding: 1.8rem 1.5rem; border-right: 1px solid rgba(201,168,76,0.1);">
                    <h3 style="font-family: 'Fraunces', serif; font-size: 1.15rem; color: var(--creme); margin-bottom: 0.3rem;">Bambouseraie</h3>
                    <span style="font-size: 0.75rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--gris-texte);">Bambous géants</span>
                </div>
                <div style="padding: 1.8rem 1.5rem; border-right: 1px solid rgba(201,168,76,0.1);">
                    <p style="font-size: 0.9rem; color: rgba(237,232,216,0.75); line-height: 1.6;">Bambous géants Arundinaria, fougères, orchidées, mousse couvre-sol.</p>
                </div>
                <div style="padding: 1.8rem 1.5rem;">
                    <p style="font-size: 0.9rem; color: rgba(237,232,216,0.75); line-height: 1.6;">Éléphants de forêt, singes cercopithèques, chouettes endémiques.</p>
                </div>
            </div>

            <!-- Zone 4 -->
            <div style="display: grid; grid-template-columns: 200px 1fr 1.5fr 1.5fr; gap: 0; border-bottom: 1px solid rgba(201,168,76,0.12); align-items: center;">
                <div style="padding: 1.8rem 1.5rem; border-right: 1px solid rgba(201,168,76,0.1);">
                    <span style="font-family: 'Fraunces', serif; font-size: 1.3rem; font-weight: 600; color: var(--or);">3 500 – 4 500 m</span>
                </div>
                <div style="padding: 1.8rem 1.5rem; border-right: 1px solid rgba(201,168,76,0.1);">
                    <h3 style="font-family: 'Fraunces', serif; font-size: 1.15rem; color: var(--creme); margin-bottom: 0.3rem;">Bruyères &amp; lobélies</h3>
                    <span style="font-size: 0.75rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--gris-texte);">Vegetation alpine</span>
                </div>
                <div style="padding: 1.8rem 1.5rem; border-right: 1px solid rgba(201,168,76,0.1);">
                    <p style="font-size: 0.9rem; color: rgba(237,232,216,0.75); line-height: 1.6;">Bruyères géantes de 10 m, lobélies géantes, sénecios arborescents, euphorbes.</p>
                </div>
                <div style="padding: 1.8rem 1.5rem;">
                    <p style="font-size: 0.9rem; color: rgba(237,232,216,0.75); line-height: 1.6;">Chamois Rwenzori (Cephalophus), oiseaux montagnards, caméléons de altitude.</p>
                </div>
            </div>

            <!-- Zone 5 -->
            <div style="display: grid; grid-template-columns: 200px 1fr 1.5fr 1.5fr; gap: 0; align-items: center;">
                <div style="padding: 1.8rem 1.5rem; border-right: 1px solid rgba(201,168,76,0.1);">
                    <span style="font-family: 'Fraunces', serif; font-size: 1.3rem; font-weight: 600; color: var(--or);">4 500 – 5 109 m</span>
                </div>
                <div style="padding: 1.8rem 1.5rem; border-right: 1px solid rgba(201,168,76,0.1);">
                    <h3 style="font-family: 'Fraunces', serif; font-size: 1.15rem; color: var(--creme); margin-bottom: 0.3rem;">Nival &amp; glaciaire</h3>
                    <span style="font-size: 0.75rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--gris-texte);">Glaciers équatoriaux</span>
                </div>
                <div style="padding: 1.8rem 1.5rem; border-right: 1px solid rgba(201,168,76,0.1);">
                    <p style="font-size: 0.9rem; color: rgba(237,232,216,0.75); line-height: 1.6;">Rochers nus, lichens crustacés, mousses, algues microscopiques.</p>
                </div>
                <div style="padding: 1.8rem 1.5rem;">
                    <p style="font-size: 0.9rem; color: rgba(237,232,216,0.75); line-height: 1.6;">Grive Rwenzori endémique, oiseaux migrateurs rares, invertébrés endémiques.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="cta-finale">
    <p class="eyebrow">Prêt à explorer</p>
    <h2 class="titre-cta-finale">Gravissez les <em>Montagnes de la Lune</em></h2>
    <p class="texte-cta-finale">
        Planifiez votre ascension des Rwenzori et découvrez des paysages d'une beauté extraordinaire, des forêts tropicales aux glaciers équatoriaux.
    </p>
    <div class="boutons-cta-finale">
        <a href="contact.php" class="bouton-dore-plein">Planifier l'Ascension <i class="fa-solid fa-arrow-right"></i></a>
        <a href="attractions.php" class="bouton-contour-clair">Retour aux Attractions</a>
    </div>
</section>

<?php require '../includes/footer.php'; ?>
