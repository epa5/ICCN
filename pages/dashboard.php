<?php
session_start();
$racine = '../';
$titre_page = "Accueil";
$page_actuelle = 'dashboard.php';
require '../includes/header.php';
?>

<section class="dashboard-hero">
    <img src="../assets/images/especes/hero-virunga.jpg" alt="Vue du Parc National des Virunga" class="dashboard-hero-img">
    <div class="dashboard-hero-overlay"></div>
    <div class="dashboard-hero-stripe"></div>

    <div class="dashboard-hero-contenu">
        <div class="badge-pulse">
            <span class="point-pulse"></span>
            Patrimoine Mondial UNESCO · Fondé en 1925
        </div>

        <h1 class="dashboard-hero-titre">
            Bienvenue<?php echo isset($_SESSION['prenom']) ? ', ' . htmlspecialchars($_SESSION['prenom']) : ''; ?><br>
            <em>là où la vie règne souveraine</em>
        </h1>

        <p class="dashboard-hero-texte">
            Le plus ancien parc national d'Afrique, s'étendant sur les contreforts des volcans Virunga en RDC. Sanctuaire des gorilles des montagnes, du lac de lave du Nyiragongo et d'une biodiversité sans pareille.
        </p>

        <div class="dashboard-hero-boutons">
            <a href="a-propos.php" class="bouton-dore-plein">Découvrir le Parc <i class="fa-solid fa-arrow-right"></i></a>
            <a href="galerie.php" class="bouton-contour-clair">Voir la Galerie</a>
        </div>
    </div>
</section>

<section class="barre-stats">
    <div class="barre-stats-grille">
        <div class="stat-item">
            <div class="stat-valeur">7 900 km²</div>
            <div class="stat-label">Superficie totale</div>
        </div>
        <div class="stat-item">
            <div class="stat-valeur">1 025+</div>
            <div class="stat-label">Espèces d'oiseaux</div>
        </div>
        <div class="stat-item">
            <div class="stat-valeur">218</div>
            <div class="stat-label">Espèces de reptiles</div>
        </div>
        <div class="stat-item">
            <div class="stat-valeur">706</div>
            <div class="stat-label">Gorilles des Montagnes</div>
        </div>
    </div>
</section>

<section class="section-meteo">
    <style>
        .meteo-carte {
            max-width: 1100px; margin: 0 auto; padding: 32px;
            background: linear-gradient(135deg, #0b3d2e 0%, #14532d 100%);
            border-radius: 18px; color: #fff; text-align: center;
        }
        .meteo-titre { font-size: 13px; letter-spacing: 3px; text-transform: uppercase; color: #d4af37; margin-bottom: 6px; }
        .meteo-ville { font-size: 24px; font-weight: 700; margin-bottom: 20px; }
        .meteo-grille { display: flex; justify-content: center; gap: 40px; flex-wrap: wrap; }
        .meteo-item { display: flex; flex-direction: column; align-items: center; gap: 6px; }
        .meteo-item i { font-size: 26px; color: #d4af37; }
        .meteo-valeur { font-size: 28px; font-weight: 800; }
        .meteo-label { font-size: 12px; opacity: .75; letter-spacing: 1px; text-transform: uppercase; }
    </style>
    <div class="meteo-carte">
        <p class="meteo-titre">Météo de la région du Parc</p>
        <p class="meteo-ville"><i class="fa-solid fa-location-dot"></i> Goma / Virunga</p>
        <div class="meteo-grille" id="meteo-grille">
            <div class="meteo-item"><i class="fa-solid fa-spinner fa-spin"></i><span class="meteo-label">Chargement…</span></div>
        </div>
    </div>
    <script>
    (function () {
        var url = 'https://api.open-meteo.com/v1/forecast?latitude=-1.6836&longitude=29.2244'
            + '&current=temperature_2m,relative_humidity_2m,weather_code,wind_speed_10m&timezone=Africa%2FLagos';
        var libelles = {
            0:['Ciel dégagé','fa-sun'], 1:['Peu nuageux','fa-cloud-sun'], 2:['Partiellement nuageux','fa-cloud-sun'],
            3:['Couvert','fa-cloud'], 45:['Brouillard','fa-smog'], 48:['Brouillard givrant','fa-smog'],
            51:['Bruine légère','fa-cloud-rain'], 53:['Bruine','fa-cloud-rain'], 55:['Bruine forte','fa-cloud-showers-heavy'],
            61:['Pluie faible','fa-cloud-rain'], 63:['Pluie modérée','fa-cloud-rain'], 65:['Pluie forte','fa-cloud-showers-heavy'],
            71:['Neige faible','fa-snowflake'], 73:['Neige','fa-snowflake'], 75:['Neige forte','fa-snowflake'],
            80:['Averses faibles','fa-cloud-rain'], 81:['Averses','fa-cloud-showers-heavy'], 82:['Averses violentes','fa-cloud-showers-heavy'],
            95:['Orage','fa-bolt'], 96:['Orage grêle','fa-bolt'], 99:['Orage fort grêle','fa-bolt']
        };
        fetch(url)
            .then(function (r) { return r.json(); })
            .then(function (d) {
                var c = d.current;
                var info = libelles[c.weather_code] || ['Variable','fa-cloud'];
                document.getElementById('meteo-grille').innerHTML =
                    '<div class="meteo-item"><i class="fa-solid ' + info[1] + '"></i>' +
                    '<span class="meteo-valeur">' + Math.round(c.temperature_2m) + '°C</span>' +
                    '<span class="meteo-label">' + info[0] + '</span></div>' +
                    '<div class="meteo-item"><i class="fa-solid fa-droplet"></i>' +
                    '<span class="meteo-valeur">' + c.relative_humidity_2m + '%</span>' +
                    '<span class="meteo-label">Humidité</span></div>' +
                    '<div class="meteo-item"><i class="fa-solid fa-wind"></i>' +
                    '<span class="meteo-valeur">' + Math.round(c.wind_speed_10m) + ' km/h</span>' +
                    '<span class="meteo-label">Vent</span></div>';
            })
            .catch(function () {
                document.getElementById('meteo-grille').innerHTML =
                    '<span class="meteo-label">Météo momentanément indisponible</span>';
            });
    })();
    </script>
</section>

<section class="section-highlights">
    <p class="eyebrow">Merveilles du Virunga</p>
    <h2 class="titre-highlights">Un parc,<br><em>mille visages</em></h2>

    <div class="grille-highlights">
        <a href="faune-flore.php" class="carte-highlight carte-haute">
            <img src="../assets/images/especes/gorille-montagne.jpg" alt="Gorilles des Montagnes">
            <div class="carte-highlight-overlay"></div>
            <div class="carte-highlight-contenu">
                <span class="tag-highlight">Espèce emblématique</span>
                <h3>Gorilles des Montagnes</h3>
                <p>Le Virunga abrite plus de la moitié de la population mondiale des gorilles des montagnes, l'une des espèces les plus menacées sur Terre.</p>
            </div>
        </a>

        <a href="nyiragongo.php" class="carte-highlight">
            <img src="../assets/images/especes/volcan-nyiragongo.jpg" alt="Volcan Nyiragongo">
            <div class="carte-highlight-overlay"></div>
            <div class="carte-highlight-contenu">
                <span class="tag-highlight">Randonnée volcanique</span>
                <h3>Volcan Nyiragongo</h3>
                <p>Le lac de lave permanent du Nyiragongo est le plus grand au monde. Une ascension nocturne au-dessus des nuages, inoubliable.</p>
            </div>
        </a>

        <a href="a-propos.php" class="carte-highlight">
            <img src="../assets/images/especes/foret-primaires.jpg" alt="Forêts primaires du Virunga">
            <div class="carte-highlight-overlay"></div>
            <div class="carte-highlight-contenu">
                <span class="tag-highlight">UNESCO</span>
                <h3>Forêts Primaires</h3>
                <p>Des savanes aux glaciers éternels des Rwenzori, le parc couvre cinq zones climatiques distinctes, abritant une biodiversité exceptionnelle.</p>
            </div>
        </a>
    </div>
</section>

<section class="bandeau-conservation">
    <img src="../assets/images/especes/elephant-virunga.jpg" alt="Éléphants dans le parc Virunga" class="bandeau-conservation-img">

    <div class="bandeau-conservation-grille">
        <div>
            <p class="eyebrow eyebrow-alerte">Conservation &amp; Urgence</p>
            <h2 class="titre-conservation">
                Un parc sous<br>
                <em>menace constante</em>
            </h2>
            <p class="texte-conservation">
                Les rangers du Virunga risquent leur vie chaque jour pour protéger l'une des dernières grandes forêts tropicales d'Afrique centrale. Braconnage, exploitation illégale, conflits armés — les menaces sont réelles et permanentes.
            </p>
            <a href="contact.php" class="bouton-alerte">Soutenir les Rangers <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="grille-chiffres-conservation">
            <div class="chiffre-conservation">
                <div class="chiffre-conservation-valeur">600+</div>
                <div class="chiffre-conservation-label">Rangers en service</div>
            </div>
            <div class="chiffre-conservation">
                <div class="chiffre-conservation-valeur">200</div>
                <div class="chiffre-conservation-label">Rangers tombés au combat</div>
            </div>
            <div class="chiffre-conservation">
                <div class="chiffre-conservation-valeur">96%</div>
                <div class="chiffre-conservation-label">De gorilles sauvés</div>
            </div>
            <div class="chiffre-conservation">
                <div class="chiffre-conservation-valeur">1925</div>
                <div class="chiffre-conservation-label">Année de fondation</div>
            </div>
        </div>
    </div>
</section>

<section class="cta-finale">
    <p class="eyebrow">Planifiez votre visite</p>
    <h2 class="titre-cta-finale">Vivez une expérience <em>inoubliable</em></h2>
    <p class="texte-cta-finale">
        Depuis Goma, partez à la rencontre des gorilles, gravissez le Nyiragongo ou explorez les forêts millénaires du Virunga.
    </p>
    <div class="boutons-cta-finale">
        <a href="carte.php" class="bouton-dore-plein">Explorer la Carte</a>
        <a href="contact.php" class="bouton-contour-clair">Nous Contacter</a>
    </div>
</section>

<?php require '../includes/footer.php'; ?>