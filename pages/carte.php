<?php
session_start();
$racine = '../';
$titre_page = "Carte";
$page_actuelle = 'carte.php';
require '../includes/header.php';
?>

<section class="carte-hero">
    <div class="carte-hero-contenu">
        <h1 class="carte-hero-titre">Carte du Parc National</h1>
        <p class="carte-hero-sous-titre">Orientation</p>
    </div>
</section>

<section class="carte-section">
    <div class="carte-grille">

        <div class="carte-svg-conteneur">
            <svg viewBox="0 0 600 500" xmlns="http://www.w3.org/2000/svg" class="carte-svg">
                <defs>
                    <linearGradient id="terrainGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#2d5016;stop-opacity:0.3"/>
                        <stop offset="50%" style="stop-color:#3a6b1e;stop-opacity:0.2"/>
                        <stop offset="100%" style="stop-color:#2d5016;stop-opacity:0.3"/>
                    </linearGradient>
                    <filter id="shadow" x="-20%" y="-20%" width="140%" height="140%">
                        <feDropShadow dx="0" dy="2" stdDeviation="3" flood-opacity="0.3"/>
                    </filter>
                    <linearGradient id="lakeGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" style="stop-color:#4a90a4;stop-opacity:0.8"/>
                        <stop offset="100%" style="stop-color:#3a7a8e;stop-opacity:0.9"/>
                    </linearGradient>
                </defs>

                <!-- Grid lines -->
                <g opacity="0.15" stroke="#666" stroke-width="0.5">
                    <line x1="0" y1="100" x2="600" y2="100"/>
                    <line x1="0" y1="200" x2="600" y2="200"/>
                    <line x1="0" y1="300" x2="600" y2="300"/>
                    <line x1="0" y1="400" x2="600" y2="400"/>
                    <line x1="120" y1="0" x2="120" y2="500"/>
                    <line x1="240" y1="0" x2="240" y2="500"/>
                    <line x1="360" y1="0" x2="360" y2="500"/>
                    <line x1="480" y1="0" x2="480" y2="500"/>
                </g>

                <!-- Park boundary -->
                <polygon points="80,60 520,40 560,180 540,320 480,440 320,480 160,460 60,360 40,200"
                         fill="url(#terrainGrad)" stroke="#4a7c2e" stroke-width="2" stroke-dasharray="8,4"/>

                <!-- Terrain shading - mountains -->
                <g opacity="0.4">
                    <polygon points="180,120 220,80 260,120 240,140 200,140" fill="#5a8a3e"/>
                    <polygon points="380,100 420,60 460,100 440,120 400,120" fill="#5a8a3e"/>
                    <polygon points="280,200 320,160 360,200 340,220 300,220" fill="#5a8a3e"/>
                    <polygon points="440,280 480,240 520,280 500,300 460,300" fill="#5a8a3e"/>
                    <polygon points="140,320 180,280 220,320 200,340 160,340" fill="#5a8a3e"/>
                </g>

                <!-- Lake Edward -->
                <ellipse cx="300" cy="380" rx="180" ry="80" fill="url(#lakeGrad)" stroke="#3a7a8e" stroke-width="1.5"/>
                <text x="300" y="385" text-anchor="middle" fill="#fff" font-size="14" font-weight="600" opacity="0.9">Lac Édouard</text>

                <!-- Rivers -->
                <g stroke="#4a90a4" stroke-width="2" fill="none" opacity="0.7">
                    <path d="M120,180 Q180,200 220,260 Q260,320 280,380"/>
                    <path d="M480,160 Q440,220 400,280 Q380,320 340,380"/>
                    <path d="M520,120 Q500,180 480,240 Q460,300 420,360"/>
                    <path d="M200,80 Q220,140 240,200 Q260,260 280,340"/>
                    <path d="M160,400 Q200,380 260,370 Q320,360 380,370"/>
                </g>

                <!-- Volcanoes - Nyiragongo -->
                <g transform="translate(200,130)">
                    <polygon points="0,-35 25,10 -25,10" fill="#d45a28" filter="url(#shadow)"/>
                    <circle cx="0" cy="-20" r="5" fill="#ff6b3a" opacity="0.7"/>
                    <text x="0" y="20" text-anchor="middle" fill="#d45a28" font-size="10" font-weight="700">Nyiragongo</text>
                </g>

                <!-- Volcanoes - Nyamuragira -->
                <g transform="translate(350,110)">
                    <polygon points="0,-30 20,8 -20,8" fill="#d45a28" filter="url(#shadow)"/>
                    <circle cx="0" cy="-18" r="4" fill="#ff6b3a" opacity="0.7"/>
                    <text x="0" y="18" text-anchor="middle" fill="#d45a28" font-size="10" font-weight="700">Nyamuragira</text>
                </g>

                <!-- Mountains - Rwenzori -->
                <g transform="translate(460,200)">
                    <polygon points="-20,15 0,-25 20,15" fill="#c9a84c" filter="url(#shadow)"/>
                    <polygon points="-10,15 5,-15 20,15" fill="#c9a84c" filter="url(#shadow)"/>
                    <text x="0" y="25" text-anchor="middle" fill="#c9a84c" font-size="10" font-weight="700">Rwenzori</text>
                </g>

                <!-- Cities - Goma -->
                <g transform="translate(160,250)">
                    <circle cx="0" cy="0" r="8" fill="#8faa80" filter="url(#shadow)"/>
                    <circle cx="0" cy="0" r="4" fill="#fff"/>
                    <text x="14" y="4" fill="#8faa80" font-size="11" font-weight="700">Goma</text>
                </g>

                <!-- Cities - Rutshuru -->
                <g transform="translate(280,180)">
                    <circle cx="0" cy="0" r="7" fill="#8faa80" filter="url(#shadow)"/>
                    <circle cx="0" cy="0" r="3.5" fill="#fff"/>
                    <text x="14" y="4" fill="#8faa80" font-size="10" font-weight="700">Rutshuru</text>
                </g>

                <!-- Cities - Mutsora -->
                <g transform="translate(380,260)">
                    <circle cx="0" cy="0" r="7" fill="#8faa80" filter="url(#shadow)"/>
                    <circle cx="0" cy="0" r="3.5" fill="#fff"/>
                    <text x="14" y="4" fill="#8faa80" font-size="10" font-weight="700">Mutsora</text>
                </g>

                <!-- Lodge - Virunga Lodge -->
                <g transform="translate(250,300)">
                    <rect x="-8" y="-8" width="16" height="16" rx="3" fill="#c9a84c" filter="url(#shadow)"/>
                    <text x="0" y="3" text-anchor="middle" fill="#fff" font-size="8">L</text>
                    <text x="14" y="4" fill="#c9a84c" font-size="10" font-weight="700">Virunga Lodge</text>
                </g>

                <!-- Compass -->
                <g transform="translate(540,60)">
                    <circle cx="0" cy="0" r="22" fill="rgba(255,255,255,0.9)" stroke="#666" stroke-width="1"/>
                    <polygon points="0,-18 4,-4 -4,-4" fill="#c94040"/>
                    <polygon points="0,18 4,4 -4,4" fill="#999"/>
                    <text x="0" y="-6" text-anchor="middle" fill="#c94040" font-size="7" font-weight="700">N</text>
                    <line x1="-18" y1="0" x2="18" y2="0" stroke="#666" stroke-width="0.5"/>
                    <line x1="0" y1="-18" x2="0" y2="18" stroke="#666" stroke-width="0.5"/>
                </g>

                <!-- Scale bar -->
                <g transform="translate(40,470)">
                    <line x1="0" y1="0" x2="80" y2="0" stroke="#333" stroke-width="2"/>
                    <line x1="0" y1="-4" x2="0" y2="4" stroke="#333" stroke-width="2"/>
                    <line x1="40" y1="-3" x2="40" y2="3" stroke="#333" stroke-width="1.5"/>
                    <line x1="80" y1="-4" x2="80" y2="4" stroke="#333" stroke-width="2"/>
                    <text x="0" y="14" fill="#333" font-size="8">0</text>
                    <text x="40" y="14" text-anchor="middle" fill="#333" font-size="8">25</text>
                    <text x="80" y="14" text-anchor="middle" fill="#333" font-size="8">50 km</text>
                </g>

                <!-- Legend -->
                <g transform="translate(20,420)">
                    <rect x="-5" y="-5" width="170" height="75" rx="5" fill="rgba(255,255,255,0.92)" stroke="#ddd" stroke-width="1"/>
                    <circle cx="10" cy="10" r="5" fill="#d45a28"/>
                    <text x="22" y="14" fill="#333" font-size="9">Volcans actifs</text>
                    <circle cx="10" cy="30" r="5" fill="#c9a84c"/>
                    <text x="22" y="34" fill="#333" font-size="9">Montagnes</text>
                    <circle cx="10" cy="50" r="5" fill="#4a90a4"/>
                    <text x="22" y="54" fill="#333" font-size="9">Lacs & rivières</text>
                    <circle cx="95" cy="10" r="5" fill="#8faa80"/>
                    <text x="107" y="14" fill="#333" font-size="9">Villes</text>
                    <line x1="95" y1="30" x2="115" y2="30" stroke="#4a7c2e" stroke-width="2" stroke-dasharray="4,2"/>
                    <text x="120" y="34" fill="#333" font-size="9">Limite parc</text>
                </g>
            </svg>
        </div>

        <div class="carte-liste-conteneur">
            <h2 class="carte-liste-titre">Lieux Principaux</h2>

            <div class="carte-liste">
                <div class="carte-item" data-type="city">
                    <div class="carte-item-icone" style="background:#8faa80;">
                        <i class="fa-solid fa-city"></i>
                    </div>
                    <div class="carte-item-contenu">
                        <h3>Goma</h3>
                        <span class="carte-item-type" style="color:#8faa80;">Ville</span>
                        <p>Capitale touristique du Nord-Kivu, point de départ pour les visites du parc et du volcan Nyiragongo.</p>
                    </div>
                </div>

                <div class="carte-item" data-type="volcano">
                    <div class="carte-item-icone" style="background:#d45a28;">
                        <i class="fa-solid fa-fire"></i>
                    </div>
                    <div class="carte-item-contenu">
                        <h3>Nyiragongo</h3>
                        <span class="carte-item-type" style="color:#d45a28;">Volcan</span>
                        <p>Volcan actif abritant le plus grand lac de lave permanent au monde, culminant à 3 470 m.</p>
                    </div>
                </div>

                <div class="carte-item" data-type="volcano">
                    <div class="carte-item-icone" style="background:#d45a28;">
                        <i class="fa-solid fa-fire"></i>
                    </div>
                    <div class="carte-item-contenu">
                        <h3>Nyamuragira</h3>
                        <span class="carte-item-type" style="color:#d45a28;">Volcan</span>
                        <p>Volcan actif le plus actif d'Afrique, situé à environ 15 km au nord-ouest du Nyiragongo.</p>
                    </div>
                </div>

                <div class="carte-item" data-type="lake">
                    <div class="carte-item-icone" style="background:#4a90a4;">
                        <i class="fa-solid fa-water"></i>
                    </div>
                    <div class="carte-item-contenu">
                        <h3>Lac Édouard</h3>
                        <span class="carte-item-type" style="color:#4a90a4;">Lac</span>
                        <p>Lac du Rift Albertin, frontière naturelle entre la RDC et l'Ouganda, riche en biodiversité aquatique.</p>
                    </div>
                </div>

                <div class="carte-item" data-type="city">
                    <div class="carte-item-icone" style="background:#8faa80;">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="carte-item-contenu">
                        <h3>Rutshuru</h3>
                        <span class="carte-item-type" style="color:#8faa80;">Ville</span>
                        <p>Commune du territoire de Rutshuru, zone clé pour l'observation des gorilles de montagne.</p>
                    </div>
                </div>

                <div class="carte-item" data-type="mountain">
                    <div class="carte-item-icone" style="background:#c9a84c;">
                        <i class="fa-solid fa-mountain"></i>
                    </div>
                    <div class="carte-item-contenu">
                        <h3>Rwenzori</h3>
                        <span class="carte-item-type" style="color:#c9a84c;">Montagne</span>
                        <p>Les « Montagnes de la Lune », chaîne montagneuse aux sommets enneigés culminant à 5 109 m.</p>
                    </div>
                </div>

                <div class="carte-item" data-type="city">
                    <div class="carte-item-icone" style="background:#8faa80;">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="carte-item-contenu">
                        <h3>Mutsora</h3>
                        <span class="carte-item-type" style="color:#8faa80;">Ville</span>
                        <p>Poste avancé dans le secteur central du parc, zone de patrouille des rangers.</p>
                    </div>
                </div>

                <div class="carte-item" data-type="lodge">
                    <div class="carte-item-icone" style="background:#c9a84c;">
                        <i class="fa-solid fa-house"></i>
                    </div>
                    <div class="carte-item-contenu">
                        <h3>Virunga Lodge</h3>
                        <span class="carte-item-type" style="color:#c9a84c;">Lodge</span>
                        <p>Lodge de prestige offrant une vue panoramique sur les volcans et le Lac Kivu.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="carte-pratique">
    <h2 class="carte-pratique-titre">Informations Pratiques</h2>
    <div class="carte-pratique-grille">

        <div class="carte-pratique-carte">
            <div class="carte-pratique-icone">
                <i class="fa-solid fa-plane"></i>
            </div>
            <h3>Par avion</h3>
            <p>Vol international vers l'aéroport de Goma (GOM). Depuis Kinshasa, vols intérieurs avec CAA ou Congo Airways. Transfert vers le parc en 45 minutes depuis l'aéroport.</p>
        </div>

        <div class="carte-pratique-carte">
            <div class="carte-pratique-icone">
                <i class="fa-solid fa-car"></i>
            </div>
            <h3>Par route</h3>
            <p>Depuis Goma, la RN2 mène au parc en direction du nord. Trajet de 2 heures vers le secteur Rutshuru. Véhicules tout-terrain recommandés pour les zones de brousse.</p>
        </div>

        <div class="carte-pratique-carte">
            <div class="carte-pratique-icone">
                <i class="fa-solid fa-passport"></i>
            </div>
            <h3>Formalités</h3>
            <p>Visa obligatoire pour les ressortissants étrangers. Permis d'entrée au parc obligatoire, disponible au poste d'accueil. Vaccin jaune recommandé.</p>
        </div>

    </div>
</section>

<style>
    .carte-hero {
        background: linear-gradient(135deg, #1a3a0a 0%, #2d5016 50%, #1a3a0a 100%);
        padding: 80px 40px;
        text-align: center;
    }

    .carte-hero-titre {
        font-family: 'Playfair Display', serif;
        font-size: 2.8rem;
        color: #fff;
        margin: 0 0 10px 0;
    }

    .carte-hero-sous-titre {
        font-family: 'Montserrat', sans-serif;
        color: #c9a84c;
        font-size: 1.1rem;
        font-weight: 500;
        letter-spacing: 3px;
        text-transform: uppercase;
        margin: 0;
    }

    .carte-section {
        max-width: 1200px;
        margin: 0 auto;
        padding: 60px 20px;
    }

    .carte-grille {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        align-items: start;
    }

    .carte-svg-conteneur {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 20px;
        border: 1px solid #e0e0e0;
        position: sticky;
        top: 20px;
    }

    .carte-svg {
        width: 100%;
        height: auto;
        display: block;
    }

    .carte-liste-conteneur {
        padding: 0;
    }

    .carte-liste-titre {
        font-family: 'Playfair Display', serif;
        font-size: 1.8rem;
        color: #1a3a0a;
        margin: 0 0 24px 0;
    }

    .carte-liste {
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .carte-item {
        display: flex;
        gap: 16px;
        background: #fff;
        border-radius: 10px;
        padding: 18px;
        border: 1px solid #eee;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .carte-item:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .carte-item-icone {
        width: 44px;
        height: 44px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1.1rem;
        flex-shrink: 0;
    }

    .carte-item-contenu h3 {
        font-family: 'Montserrat', sans-serif;
        font-size: 1rem;
        font-weight: 700;
        color: #1a3a0a;
        margin: 0 0 2px 0;
    }

    .carte-item-type {
        font-family: 'Montserrat', sans-serif;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .carte-item-contenu p {
        font-size: 0.9rem;
        color: #555;
        margin: 6px 0 0 0;
        line-height: 1.5;
    }

    .carte-pratique {
        background: #f8f9fa;
        padding: 60px 20px;
        text-align: center;
    }

    .carte-pratique-titre {
        font-family: 'Playfair Display', serif;
        font-size: 2rem;
        color: #1a3a0a;
        margin: 0 0 40px 0;
    }

    .carte-pratique-grille {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        max-width: 1100px;
        margin: 0 auto;
    }

    .carte-pratique-carte {
        background: #fff;
        border-radius: 12px;
        padding: 32px 24px;
        border: 1px solid #e0e0e0;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .carte-pratique-carte:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 16px rgba(0,0,0,0.08);
    }

    .carte-pratique-icone {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background: linear-gradient(135deg, #2d5016, #4a7c2e);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 1.3rem;
        margin: 0 auto 18px auto;
    }

    .carte-pratique-carte h3 {
        font-family: 'Montserrat', sans-serif;
        font-size: 1.15rem;
        font-weight: 700;
        color: #1a3a0a;
        margin: 0 0 12px 0;
    }

    .carte-pratique-carte p {
        font-size: 0.95rem;
        color: #555;
        line-height: 1.6;
        margin: 0;
    }

    @media (max-width: 900px) {
        .carte-grille {
            grid-template-columns: 1fr;
        }
        .carte-svg-conteneur {
            position: static;
        }
        .carte-pratique-grille {
            grid-template-columns: 1fr;
        }
    }
</style>

<?php require '../includes/footer.php'; ?>
