<?php
session_start();
$racine = '../';
$titre_page = "Faune & Flore";
$page_actuelle = 'faune-flore.php';
require '../includes/header.php';
?>

<section class="dashboard-hero">
    <img src="../assets/images/especes/gorille-montagne.jpg" alt="Gorille des Montagnes du Virunga" class="dashboard-hero-img">
    <div class="dashboard-hero-overlay"></div>
    <div class="dashboard-hero-stripe"></div>

    <div class="dashboard-hero-contenu">
        <div class="badge-pulse">
            <span class="point-pulse"></span>
            Faune & Flore
        </div>

        <h1 class="dashboard-hero-titre">
            La Vie Sauvage<br>
            <em>du Virunga</em>
        </h1>

        <p class="dashboard-hero-texte">
            Découvrez la biodiversité extraordinaire du Parc National des Virunga, sanctuaire de certaines des espèces les plus rares et menacées au monde.
        </p>
    </div>
</section>

<section class="section-highlights" style="padding-top: 4rem; padding-bottom: 4rem;">
    <p class="eyebrow">Découvrir</p>
    <h2 class="titre-highlights">Biodiversité<br><em>exceptionnelle</em></h2>

    <p style="max-width: 700px; margin: 1.5rem auto 0; text-align: center; color: rgba(255,255,255,0.75); line-height: 1.8; font-size: 1.05rem;">
        Le Parc National des Virunga abrite une incroyable diversité d'espèces, des gorilles des montagnes aux éléphants de forêt en passant par plus de 700 espèces d'oiseaux. Chaque zone climatique du parc offre un habitat unique à une faune et une flore remarquables.
    </p>
</section>

<section style="padding: 2rem 0 5rem; background: linear-gradient(180deg, #0a0f0a 0%, #111a11 100%);">
    <div style="max-width: 1200px; margin: 0 auto; padding: 0 2rem;">

        <div style="display: flex; justify-content: center; gap: 0.75rem; margin-bottom: 3rem; flex-wrap: wrap;">
            <span style="padding: 0.5rem 1.25rem; border-radius: 2rem; background: rgba(196, 164, 105, 0.2); color: #c4a469; font-size: 0.85rem; font-weight: 500; border: 1px solid rgba(196, 164, 105, 0.3); cursor: default;">Tous</span>
            <span style="padding: 0.5rem 1.25rem; border-radius: 2rem; background: transparent; color: rgba(255,255,255,0.5); font-size: 0.85rem; font-weight: 500; border: 1px solid rgba(255,255,255,0.1); cursor: default;">Mammifères</span>
            <span style="padding: 0.5rem 1.25rem; border-radius: 2rem; background: transparent; color: rgba(255,255,255,0.5); font-size: 0.85rem; font-weight: 500; border: 1px solid rgba(255,255,255,0.1); cursor: default;">Oiseaux</span>
            <span style="padding: 0.5rem 1.25rem; border-radius: 2rem; background: transparent; color: rgba(255,255,255,0.5); font-size: 0.85rem; font-weight: 500; border: 1px solid rgba(255,255,255,0.1); cursor: default;">Reptiles</span>
            <span style="padding: 0.5rem 1.25rem; border-radius: 2rem; background: transparent; color: rgba(255,255,255,0.5); font-size: 0.85rem; font-weight: 500; border: 1px solid rgba(255,255,255,0.1); cursor: default;">Primates</span>
        </div>

        <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1.5rem;">

            <div style="background: rgba(255,255,255,0.04); border-radius: 1rem; overflow: hidden; border: 1px solid rgba(255,255,255,0.06); transition: transform 0.3s ease, border-color 0.3s ease;">
                <div style="position: relative; height: 220px; overflow: hidden;">
                    <img src="../assets/images/especes/gorille-montagne.jpg" alt="Gorille des Montagnes" style="width: 100%; height: 100%; object-fit: cover;">
                    <span style="position: absolute; top: 1rem; right: 1rem; padding: 0.3rem 0.75rem; border-radius: 1rem; font-size: 0.7rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; background: rgba(220, 38, 38, 0.9); color: #fff;">En danger</span>
                </div>
                <div style="padding: 1.5rem;">
                    <span style="font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.1em; color: #c4a469; font-weight: 600;">Primate</span>
                    <h3 style="color: #fff; font-size: 1.2rem; margin: 0.5rem 0 0.25rem; font-weight: 600;">Gorille des Montagnes</h3>
                    <p style="color: rgba(255,255,255,0.45); font-size: 0.8rem; font-style: italic; margin: 0 0 0.75rem;">Gorilla beringei beringei</p>
                    <p style="color: rgba(255,255,255,0.6); font-size: 0.85rem; line-height: 1.6; margin: 0 0 1rem;">L'espèce emblématique du Virunga. Le parc abrite plus de la moitié de la population mondiale de ces primates majestueux.</p>
                    <div style="display: flex; justify-content: space-between; padding-top: 1rem; border-top: 1px solid rgba(255,255,255,0.06);">
                        <div>
                            <div style="font-size: 0.65rem; text-transform: uppercase; letter-spacing: 0.05em; color: rgba(255,255,255,0.35); margin-bottom: 0.25rem;">Population</div>
                            <div style="color: #c4a469; font-weight: 600; font-size: 0.95rem;">~1 063</div>
                        </div>
                        <div style="text-align: right;">
                            <div style="font-size: 0.65rem; text-transform: uppercase; letter-spacing: 0.05em; color: rgba(255,255,255,0.35); margin-bottom: 0.25rem;">Habitat</div>
                            <div style="color: rgba(255,255,255,0.7); font-size: 0.85rem;">Forêt montagnarde</div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="background: rgba(255,255,255,0.04); border-radius: 1rem; overflow: hidden; border: 1px solid rgba(255,255,255,0.06); transition: transform 0.3s ease, border-color 0.3s ease;">
                <div style="position: relative; height: 220px; overflow: hidden;">
                    <img src="../assets/images/especes/gorille-portrait.jpg" alt="Gorille de Grauer" style="width: 100%; height: 100%; object-fit: cover;">
                    <span style="position: absolute; top: 1rem; right: 1rem; padding: 0.3rem 0.75rem; border-radius: 1rem; font-size: 0.7rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; background: rgba(234, 88, 12, 0.9); color: #fff;">En danger critique</span>
                </div>
                <div style="padding: 1.5rem;">
                    <span style="font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.1em; color: #c4a469; font-weight: 600;">Primate</span>
                    <h3 style="color: #fff; font-size: 1.2rem; margin: 0.5rem 0 0.25rem; font-weight: 600;">Gorille de Grauer</h3>
                    <p style="color: rgba(255,255,255,0.45); font-size: 0.8rem; font-style: italic; margin: 0 0 0.75rem;">Gorilla beringei graueri</p>
                    <p style="color: rgba(255,255,255,0.6); font-size: 0.85rem; line-height: 1.6; margin: 0 0 1rem;">Aussi appelé gorille des plaines de l'est, c'est le plus grand des primates non humains. Endémique à l'est de la RDC.</p>
                    <div style="display: flex; justify-content: space-between; padding-top: 1rem; border-top: 1px solid rgba(255,255,255,0.06);">
                        <div>
                            <div style="font-size: 0.65rem; text-transform: uppercase; letter-spacing: 0.05em; color: rgba(255,255,255,0.35); margin-bottom: 0.25rem;">Population</div>
                            <div style="color: #c4a469; font-weight: 600; font-size: 0.95rem;">~3 800</div>
                        </div>
                        <div style="text-align: right;">
                            <div style="font-size: 0.65rem; text-transform: uppercase; letter-spacing: 0.05em; color: rgba(255,255,255,0.35); margin-bottom: 0.25rem;">Habitat</div>
                            <div style="color: rgba(255,255,255,0.7); font-size: 0.85rem;">Forêt de basse altitude</div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="background: rgba(255,255,255,0.04); border-radius: 1rem; overflow: hidden; border: 1px solid rgba(255,255,255,0.06); transition: transform 0.3s ease, border-color 0.3s ease;">
                <div style="position: relative; height: 220px; overflow: hidden;">
                    <img src="../assets/images/especes/elephant-virunga.jpg" alt="Éléphant de Forêt" style="width: 100%; height: 100%; object-fit: cover;">
                    <span style="position: absolute; top: 1rem; right: 1rem; padding: 0.3rem 0.75rem; border-radius: 1rem; font-size: 0.7rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; background: rgba(220, 38, 38, 0.9); color: #fff;">En danger</span>
                </div>
                <div style="padding: 1.5rem;">
                    <span style="font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.1em; color: #c4a469; font-weight: 600;">Mammifère</span>
                    <h3 style="color: #fff; font-size: 1.2rem; margin: 0.5rem 0 0.25rem; font-weight: 600;">Éléphant de Forêt</h3>
                    <p style="color: rgba(255,255,255,0.45); font-size: 0.8rem; font-style: italic; margin: 0 0 0.75rem;">Loxodonta cyclotis</p>
                    <p style="color: rgba(255,255,255,0.6); font-size: 0.85rem; line-height: 1.6; margin: 0 0 1rem;">Plus petit que son cousin de savane, l'éléphant de forêt joue un rôle crucial dans l'écosystème forestier du Virunga.</p>
                    <div style="display: flex; justify-content: space-between; padding-top: 1rem; border-top: 1px solid rgba(255,255,255,0.06);">
                        <div>
                            <div style="font-size: 0.65rem; text-transform: uppercase; letter-spacing: 0.05em; color: rgba(255,255,255,0.35); margin-bottom: 0.25rem;">Population</div>
                            <div style="color: #c4a469; font-weight: 600; font-size: 0.95rem;">~1 000</div>
                        </div>
                        <div style="text-align: right;">
                            <div style="font-size: 0.65rem; text-transform: uppercase; letter-spacing: 0.05em; color: rgba(255,255,255,0.35); margin-bottom: 0.25rem;">Habitat</div>
                            <div style="color: rgba(255,255,255,0.7); font-size: 0.85rem;">Forêt équatoriale</div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="background: rgba(255,255,255,0.04); border-radius: 1rem; overflow: hidden; border: 1px solid rgba(255,255,255,0.06); transition: transform 0.3s ease, border-color 0.3s ease;">
                <div style="position: relative; height: 220px; overflow: hidden;">
                    <img src="../assets/images/especes/elephant-savane.jpg" alt="Buffle du Cap" style="width: 100%; height: 100%; object-fit: cover;">
                    <span style="position: absolute; top: 1rem; right: 1rem; padding: 0.3rem 0.75rem; border-radius: 1rem; font-size: 0.7rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; background: rgba(34, 197, 94, 0.9); color: #fff;">Vulnérable</span>
                </div>
                <div style="padding: 1.5rem;">
                    <span style="font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.1em; color: #c4a469; font-weight: 600;">Mammifère</span>
                    <h3 style="color: #fff; font-size: 1.2rem; margin: 0.5rem 0 0.25rem; font-weight: 600;">Buffle du Cap</h3>
                    <p style="color: rgba(255,255,255,0.45); font-size: 0.8rem; font-style: italic; margin: 0 0 0.75rem;">Syncerus caffer caffer</p>
                    <p style="color: rgba(255,255,255,0.6); font-size: 0.85rem; line-height: 1.6; margin: 0 0 1rem;">Redoutable et puissant, le buffle du Cap est l'un des « Big Five » d'Afrique. Les troupeaux du Virunga sont souvent observés dans les zones de savane.</p>
                    <div style="display: flex; justify-content: space-between; padding-top: 1rem; border-top: 1px solid rgba(255,255,255,0.06);">
                        <div>
                            <div style="font-size: 0.65rem; text-transform: uppercase; letter-spacing: 0.05em; color: rgba(255,255,255,0.35); margin-bottom: 0.25rem;">Population</div>
                            <div style="color: #c4a469; font-weight: 600; font-size: 0.95rem;">~30 000</div>
                        </div>
                        <div style="text-align: right;">
                            <div style="font-size: 0.65rem; text-transform: uppercase; letter-spacing: 0.05em; color: rgba(255,255,255,0.35); margin-bottom: 0.25rem;">Habitat</div>
                            <div style="color: rgba(255,255,255,0.7); font-size: 0.85rem;">Savane & zones humides</div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="background: rgba(255,255,255,0.04); border-radius: 1rem; overflow: hidden; border: 1px solid rgba(255,255,255,0.06); transition: transform 0.3s ease, border-color 0.3s ease;">
                <div style="position: relative; height: 220px; overflow: hidden;">
                    <img src="../assets/images/especes/singe-canopee.jpg" alt="Chimpanzé" style="width: 100%; height: 100%; object-fit: cover;">
                    <span style="position: absolute; top: 1rem; right: 1rem; padding: 0.3rem 0.75rem; border-radius: 1rem; font-size: 0.7rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; background: rgba(220, 38, 38, 0.9); color: #fff;">En danger</span>
                </div>
                <div style="padding: 1.5rem;">
                    <span style="font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.1em; color: #c4a469; font-weight: 600;">Primate</span>
                    <h3 style="color: #fff; font-size: 1.2rem; margin: 0.5rem 0 0.25rem; font-weight: 600;">Chimpanzé</h3>
                    <p style="color: rgba(255,255,255,0.45); font-size: 0.8rem; font-style: italic; margin: 0 0 0.75rem;">Pan troglodytes</p>
                    <p style="color: rgba(255,255,255,0.6); font-size: 0.85rem; line-height: 1.6; margin: 0 0 1rem;">Notre plus proche parent vivant, le chimpanzé du Virunga vit en communautés complexes dans les forêts du parc.</p>
                    <div style="display: flex; justify-content: space-between; padding-top: 1rem; border-top: 1px solid rgba(255,255,255,0.06);">
                        <div>
                            <div style="font-size: 0.65rem; text-transform: uppercase; letter-spacing: 0.05em; color: rgba(255,255,255,0.35); margin-bottom: 0.25rem;">Population</div>
                            <div style="color: #c4a469; font-weight: 600; font-size: 0.95rem;">~5 000</div>
                        </div>
                        <div style="text-align: right;">
                            <div style="font-size: 0.65rem; text-transform: uppercase; letter-spacing: 0.05em; color: rgba(255,255,255,0.35); margin-bottom: 0.25rem;">Habitat</div>
                            <div style="color: rgba(255,255,255,0.7); font-size: 0.85rem;">Forêt tropicale</div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="background: rgba(255,255,255,0.04); border-radius: 1rem; overflow: hidden; border: 1px solid rgba(255,255,255,0.06); transition: transform 0.3s ease, border-color 0.3s ease;">
                <div style="position: relative; height: 220px; overflow: hidden;">
                    <img src="../assets/images/especes/gorille-herbe.jpg" alt="Gorille des Plaines" style="width: 100%; height: 100%; object-fit: cover;">
                    <span style="position: absolute; top: 1rem; right: 1rem; padding: 0.3rem 0.75rem; border-radius: 1rem; font-size: 0.7rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.05em; background: rgba(220, 38, 38, 0.9); color: #fff;">En danger</span>
                </div>
                <div style="padding: 1.5rem;">
                    <span style="font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.1em; color: #c4a469; font-weight: 600;">Primate</span>
                    <h3 style="color: #fff; font-size: 1.2rem; margin: 0.5rem 0 0.25rem; font-weight: 600;">Gorille des Plaines</h3>
                    <p style="color: rgba(255,255,255,0.45); font-size: 0.8rem; font-style: italic; margin: 0 0 0.75rem;">Gorilla beringei graueri</p>
                    <p style="color: rgba(255,255,255,0.6); font-size: 0.85rem; line-height: 1.6; margin: 0 0 1rem;">Variété de gorille vivant dans les plaines herbeuses du Virunga, souvent observé en train de se nourrir dans les prairies à basse altitude.</p>
                    <div style="display: flex; justify-content: space-between; padding-top: 1rem; border-top: 1px solid rgba(255,255,255,0.06);">
                        <div>
                            <div style="font-size: 0.65rem; text-transform: uppercase; letter-spacing: 0.05em; color: rgba(255,255,255,0.35); margin-bottom: 0.25rem;">Population</div>
                            <div style="color: #c4a469; font-weight: 600; font-size: 0.95rem;">~3 800</div>
                        </div>
                        <div style="text-align: right;">
                            <div style="font-size: 0.65rem; text-transform: uppercase; letter-spacing: 0.05em; color: rgba(255,255,255,0.35); margin-bottom: 0.25rem;">Habitat</div>
                            <div style="color: rgba(255,255,255,0.7); font-size: 0.85rem;">Plaines herbeuses</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="cta-finale">
    <p class="eyebrow">Protéger la faune</p>
    <h2 class="titre-cta-finale">Chaque espèce <em>compte</em></h2>
    <p class="texte-cta-finale">
        Le braconnage et la destruction de l'habitat menacent ces espèces uniques. Votre soutien peut faire la différence pour leur survie.
    </p>
    <div class="boutons-cta-finale">
        <a href="contact.php" class="bouton-dore-plein">Soutenir la Conservation</a>
        <a href="a-propos.php" class="bouton-contour-clair">En Savoir Plus</a>
    </div>
</section>

<?php require '../includes/footer.php'; ?>
