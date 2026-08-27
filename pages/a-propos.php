<?php
session_start();
$racine = '../';
$titre_page = "À Propos";
$page_actuelle = 'a-propos.php';
require '../includes/header.php';
?>

<section class="dashboard-hero">
    <img src="../assets/images/especes/foret-primaires.jpg" alt="Forêts primaires du Virunga" class="dashboard-hero-img">
    <div class="dashboard-hero-overlay"></div>
    <div class="dashboard-hero-stripe"></div>

    <div class="dashboard-hero-contenu">
        <div class="badge-pulse">
            <span class="point-pulse"></span>
            Patrimoine Mondial UNESCO
        </div>

        <h1 class="dashboard-hero-titre">
            À Propos du <em>Virunga</em>
        </h1>

        <p class="dashboard-hero-texte">
            Histoire · Mission · Conservation
        </p>

        <div class="dashboard-hero-boutons">
            <a href="#mission" class="bouton-dore-plein">Notre Mission <i class="fa-solid fa-arrow-down"></i></a>
            <a href="#zones" class="bouton-contour-clair">Explorer les Zones</a>
        </div>
    </div>
</section>

<section id="mission" style="max-width: 1280px; margin: 0 auto; padding: 5rem 2rem; display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
    <div>
        <p class="eyebrow">Notre Mission</p>
        <h2 style="font-family: 'Fraunces', serif; font-size: clamp(1.8rem, 3.5vw, 2.8rem); color: var(--creme); margin-bottom: 1.5rem; line-height: 1.15;">
            Protéger le Virunga, <em style="font-style: italic; color: var(--or);">c'est protéger l'avenir</em>
        </h2>
        <p style="font-size: 1rem; color: rgba(237,232,216,0.75); line-height: 1.75; margin-bottom: 1.5rem;">
            L'Institut Congolais pour la Conservation de la Nature (ICCN) est l'organisme gouvernemental chargé de la gestion et de la protection du Parc National des Virunga. Fondé en 1925, le parc est le plus ancien d'Afrique et constitue un sanctuaire unique pour des milliers d'espèces, dont les gorilles des montagnes.
        </p>
        <p style="font-size: 1rem; color: rgba(237,232,216,0.75); line-height: 1.75; margin-bottom: 2rem;">
            Notre mission est double : préserver la biodiversité exceptionnelle du parc tout en soutenant les communautés locales qui vivent à ses abords. Face aux menaces du braconnage, de l'exploitation illégale des ressources et des conflits armés, nos rangers œuvrent chaque jour avec courage et dévouement.
        </p>
        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
            <a href="contact.php" class="bouton-dore-plein">Nous Soutenir <i class="fa-solid fa-arrow-right"></i></a>
            <a href="faune-flore.php" class="bouton-contour-clair">Découvrir la Faune</a>
        </div>
    </div>

    <div style="position: relative;">
        <img src="../assets/images/especes/village-inonde.jpg" alt="Communautés riveraines du Virunga" style="width: 100%; border-radius: 4px; display: block;">
        <div style="position: absolute; top: -1rem; right: -1rem; background: var(--or); color: var(--vert-fonce); padding: 0.8rem 1.2rem; border-radius: 3px; text-align: center; box-shadow: 0 4px 20px rgba(0,0,0,0.3);">
            <div style="font-family: 'Fraunces', serif; font-size: 1.4rem; font-weight: 700; line-height: 1;">1925</div>
            <div style="font-size: 0.7rem; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase;">Fondation</div>
        </div>
    </div>
</section>

<section id="zones" style="background: var(--vert-footer); padding: 5rem 2rem; border-top: 1px solid rgba(201,168,76,0.15); border-bottom: 1px solid rgba(201,168,76,0.15);">
    <div style="max-width: 1280px; margin: 0 auto; text-align: center;">
        <p class="eyebrow">Biodiversité Unique</p>
        <h2 style="font-family: 'Fraunces', serif; font-size: clamp(1.8rem, 3.5vw, 2.8rem); color: var(--creme); margin-bottom: 1rem;">
            Cinq Zones <em style="font-style: italic; color: var(--gris-texte);">Climatiques</em>
        </h2>
        <p style="font-size: 1rem; color: rgba(237,232,216,0.65); max-width: 600px; margin: 0 auto 3rem; line-height: 1.7;">
            Du lac Édouard aux sommets enneigés des Rwenzori, le Virunga offre un spectacle naturel d'une diversité inégalée.
        </p>

        <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 1.5rem;">
            <div style="background: rgba(19,32,22,0.8); border: 1px solid rgba(201,168,76,0.15); border-radius: 3px; padding: 2rem 1.5rem; text-align: center; transition: border-color 0.3s;" onmouseover="this.style.borderColor='rgba(201,168,76,0.5)'" onmouseout="this.style.borderColor='rgba(201,168,76,0.15)'">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">🌊</div>
                <h3 style="font-family: 'Fraunces', serif; font-size: 1.1rem; color: var(--creme); margin-bottom: 0.5rem;">Lac Édouard</h3>
                <p style="font-size: 0.85rem; color: var(--gris-texte); line-height: 1.5;">Eau douce, hippopotames et oiseaux migrateurs</p>
            </div>

            <div style="background: rgba(19,32,22,0.8); border: 1px solid rgba(201,168,76,0.15); border-radius: 3px; padding: 2rem 1.5rem; text-align: center; transition: border-color 0.3s;" onmouseover="this.style.borderColor='rgba(201,168,76,0.5)'" onmouseout="this.style.borderColor='rgba(201,168,76,0.15)'">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">🦁</div>
                <h3 style="font-family: 'Fraunces', serif; font-size: 1.1rem; color: var(--creme); margin-bottom: 0.5rem;">Savane</h3>
                <p style="font-size: 0.85rem; color: var(--gris-texte); line-height: 1.5;">Éléphants, buffles et grandes plaines herbeuses</p>
            </div>

            <div style="background: rgba(19,32,22,0.8); border: 1px solid rgba(201,168,76,0.15); border-radius: 3px; padding: 2rem 1.5rem; text-align: center; transition: border-color 0.3s;" onmouseover="this.style.borderColor='rgba(201,168,76,0.5)'" onmouseout="this.style.borderColor='rgba(201,168,76,0.15)'">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">🌿</div>
                <h3 style="font-family: 'Fraunces', serif; font-size: 1.1rem; color: var(--creme); margin-bottom: 0.5rem;">Forêt Tropicale</h3>
                <p style="font-size: 0.85rem; color: var(--gris-texte); line-height: 1.5;">Gorilles, primates et canopée luxuriante</p>
            </div>

            <div style="background: rgba(19,32,22,0.8); border: 1px solid rgba(201,168,76,0.15); border-radius: 3px; padding: 2rem 1.5rem; text-align: center; transition: border-color 0.3s;" onmouseover="this.style.borderColor='rgba(201,168,76,0.5)'" onmouseout="this.style.borderColor='rgba(201,168,76,0.15)'">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">🌋</div>
                <h3 style="font-family: 'Fraunces', serif; font-size: 1.1rem; color: var(--creme); margin-bottom: 0.5rem;">Zone Volcanique</h3>
                <p style="font-size: 0.85rem; color: var(--gris-texte); line-height: 1.5;">Nyiragongo, lave active et paysages lunaires</p>
            </div>

            <div style="background: rgba(19,32,22,0.8); border: 1px solid rgba(201,168,76,0.15); border-radius: 3px; padding: 2rem 1.5rem; text-align: center; transition: border-color 0.3s;" onmouseover="this.style.borderColor='rgba(201,168,76,0.5)'" onmouseout="this.style.borderColor='rgba(201,168,76,0.15)'">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">🏔️</div>
                <h3 style="font-family: 'Fraunces', serif; font-size: 1.1rem; color: var(--creme); margin-bottom: 0.5rem;">Rwenzori</h3>
                <p style="font-size: 0.85rem; color: var(--gris-texte); line-height: 1.5;">Glaciers éternels et sommets de 5 000 m</p>
            </div>
        </div>
    </div>
</section>

<section style="max-width: 1280px; margin: 0 auto; padding: 5rem 2rem;">
    <div style="text-align: center; margin-bottom: 4rem;">
        <p class="eyebrow">Notre Histoire</p>
        <h2 style="font-family: 'Fraunces', serif; font-size: clamp(1.8rem, 3.5vw, 2.8rem); color: var(--creme);">
            Un Siècle de <em style="font-style: italic; color: var(--or);">Conservation</em>
        </h2>
    </div>

    <div style="position: relative; max-width: 800px; margin: 0 auto;">
        <div style="position: absolute; left: 50%; top: 0; bottom: 0; width: 2px; background: linear-gradient(to bottom, var(--or), rgba(201,168,76,0.2)); transform: translateX(-50%);"></div>

        <div style="position: relative; display: flex; align-items: center; margin-bottom: 3rem;">
            <div style="width: 45%; text-align: right; padding-right: 2.5rem;">
                <div style="font-family: 'Fraunces', serif; font-size: 1.8rem; font-weight: 700; color: var(--or); margin-bottom: 0.3rem;">1925</div>
                <h3 style="font-family: 'Fraunces', serif; font-size: 1.1rem; color: var(--creme); margin-bottom: 0.5rem;">Fondation du Parc</h3>
                <p style="font-size: 0.85rem; color: var(--gris-texte); line-height: 1.5;">Création de l'Albert National Park par le roi Albert Ier de Belgique, premier parc national d'Afrique.</p>
            </div>
            <div style="position: absolute; left: 50%; transform: translateX(-50%); width: 14px; height: 14px; background: var(--or); border-radius: 50%; border: 3px solid var(--vert-fonce); z-index: 2;"></div>
            <div style="width: 45%;"></div>
        </div>

        <div style="position: relative; display: flex; align-items: center; margin-bottom: 3rem;">
            <div style="width: 45%;"></div>
            <div style="position: absolute; left: 50%; transform: translateX(-50%); width: 14px; height: 14px; background: var(--or); border-radius: 50%; border: 3px solid var(--vert-fonce); z-index: 2;"></div>
            <div style="width: 45%; text-align: left; padding-left: 2.5rem;">
                <div style="font-family: 'Fraunces', serif; font-size: 1.8rem; font-weight: 700; color: var(--or); margin-bottom: 0.3rem;">1960</div>
                <h3 style="font-family: 'Fraunces', serif; font-size: 1.1rem; color: var(--creme); margin-bottom: 0.5rem;">Indépendance</h3>
                <p style="font-size: 0.85rem; color: var(--gris-texte); line-height: 1.5;">Le parc devient le Parc National des Virunga sous la gestion de la République Démocratique du Congo.</p>
            </div>
        </div>

        <div style="position: relative; display: flex; align-items: center; margin-bottom: 3rem;">
            <div style="width: 45%; text-align: right; padding-right: 2.5rem;">
                <div style="font-family: 'Fraunces', serif; font-size: 1.8rem; font-weight: 700; color: var(--or); margin-bottom: 0.3rem;">1979</div>
                <h3 style="font-family: 'Fraunces', serif; font-size: 1.1rem; color: var(--creme); margin-bottom: 0.5rem;">Patrimoine UNESCO</h3>
                <p style="font-size: 0.85rem; color: var(--gris-texte); line-height: 1.5;">Inscription au patrimoine mondial de l'UNESCO pour sa biodiversité exceptionnelle et ses paysages uniques.</p>
            </div>
            <div style="position: absolute; left: 50%; transform: translateX(-50%); width: 14px; height: 14px; background: var(--or); border-radius: 50%; border: 3px solid var(--vert-fonce); z-index: 2;"></div>
            <div style="width: 45%;"></div>
        </div>

        <div style="position: relative; display: flex; align-items: center; margin-bottom: 3rem;">
            <div style="width: 45%;"></div>
            <div style="position: absolute; left: 50%; transform: translateX(-50%); width: 14px; height: 14px; background: var(--or); border-radius: 50%; border: 3px solid var(--vert-fonce); z-index: 2;"></div>
            <div style="width: 45%; text-align: left; padding-left: 2.5rem;">
                <div style="font-family: 'Fraunces', serif; font-size: 1.8rem; font-weight: 700; color: var(--or); margin-bottom: 0.3rem;">1994</div>
                <h3 style="font-family: 'Fraunces', serif; font-size: 1.1rem; color: var(--creme); margin-bottom: 0.5rem;">Menaces sur les Gorilles</h3>
                <p style="font-size: 0.85rem; color: var(--gris-texte); line-height: 1.5;">Les guerres civiles et le braconnage menacent gravement les populations de gorilles des montagnes.</p>
            </div>
        </div>

        <div style="position: relative; display: flex; align-items: center; margin-bottom: 3rem;">
            <div style="width: 45%; text-align: right; padding-right: 2.5rem;">
                <div style="font-family: 'Fraunces', serif; font-size: 1.8rem; font-weight: 700; color: var(--or); margin-bottom: 0.3rem;">1994</div>
                <h3 style="font-family: 'Fraunces', serif; font-size: 1.1rem; color: var(--creme); margin-bottom: 0.5rem;">Site en Danger</h3>
                <p style="font-size: 0.85rem; color: var(--gris-texte); line-height: 1.5;">Le Virunga est inscrit sur la liste du patrimoine mondial en péril par l'UNESCO.</p>
            </div>
            <div style="position: absolute; left: 50%; transform: translateX(-50%); width: 14px; height: 14px; background: var(--or); border-radius: 50%; border: 3px solid var(--vert-fonce); z-index: 2;"></div>
            <div style="width: 45%;"></div>
        </div>

        <div style="position: relative; display: flex; align-items: center; margin-bottom: 3rem;">
            <div style="width: 45%;"></div>
            <div style="position: absolute; left: 50%; transform: translateX(-50%); width: 14px; height: 14px; background: var(--or); border-radius: 50%; border: 3px solid var(--vert-fonce); z-index: 2;"></div>
            <div style="width: 45%; text-align: left; padding-left: 2.5rem;">
                <div style="font-family: 'Fraunces', serif; font-size: 1.8rem; font-weight: 700; color: var(--or); margin-bottom: 0.3rem;">2006</div>
                <h3 style="font-family: 'Fraunces', serif; font-size: 1.1rem; color: var(--creme); margin-bottom: 0.5rem;">Renaissance</h3>
                <p style="font-size: 0.85rem; color: var(--gris-texte); line-height: 1.5;">Le parc connaît un renouveau avec de nouveaux programmes de conservation et de tourisme durable.</p>
            </div>
        </div>

        <div style="position: relative; display: flex; align-items: center;">
            <div style="width: 45%; text-align: right; padding-right: 2.5rem;">
                <div style="font-family: 'Fraunces', serif; font-size: 1.8rem; font-weight: 700; color: var(--or); margin-bottom: 0.3rem;">2024</div>
                <h3 style="font-family: 'Fraunces', serif; font-size: 1.1rem; color: var(--creme); margin-bottom: 0.5rem;">Avenir Commun</h3>
                <p style="font-size: 0.85rem; color: var(--gris-texte); line-height: 1.5;">L'ICCN poursuit sa mission avec l'appui international pour la protection durable du Virunga et de ses habitants.</p>
            </div>
            <div style="position: absolute; left: 50%; transform: translateX(-50%); width: 14px; height: 14px; background: var(--or); border-radius: 50%; border: 3px solid var(--vert-fonce); z-index: 2;"></div>
            <div style="width: 45%;"></div>
        </div>
    </div>
</section>

<section class="cta-finale">
    <p class="eyebrow">Rejoignez-nous</p>
    <h2 class="titre-cta-finale">Ensemble pour le <em>Virunga</em></h2>
    <p class="texte-cta-finale">
        Chaque geste compte. Découvrez comment vous pouvez contribuer à la préservation de ce trésor naturel pour les générations futures.
    </p>
    <div class="boutons-cta-finale">
        <a href="contact.php" class="bouton-dore-plein">Nous Contacter <i class="fa-solid fa-arrow-right"></i></a>
        <a href="carte.php" class="bouton-contour-clair">Explorer la Carte</a>
    </div>
</section>

<?php require '../includes/footer.php'; ?>
