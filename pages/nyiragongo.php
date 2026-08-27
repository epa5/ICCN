<?php
session_start();
$racine = '../';
$titre_page = "Nyiragongo";
$page_actuelle = 'nyiragongo.php';
require '../includes/header.php';
?>

<section style="position:relative; height:90vh; min-height:600px; overflow:hidden; display:flex; align-items:flex-end;">
    <img src="../assets/images/especes/volcan-nyiragongo.jpg" alt="Volcan Nyiragongo" style="position:absolute; inset:0; width:100%; height:100%; object-fit:cover; filter:brightness(0.45);">
    <div style="position:absolute; inset:0; background:linear-gradient(180deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.65) 60%, rgba(0,0,0,0.85) 100%);"></div>
    <div style="position:relative; z-index:2; width:100%; max-width:1200px; margin:0 auto; padding:0 2rem 4rem;">
        <p style="font-family:'Montserrat',sans-serif; font-size:0.8rem; font-weight:600; letter-spacing:3px; text-transform:uppercase; color:#d45a28; margin-bottom:1rem;">Volcan Actif &middot; 3 470 m</p>
        <h1 style="font-family:'Playfair Display',serif; font-size:3.5rem; font-weight:700; color:#fff; line-height:1.1; margin:0 0 1rem;">Nyiragongo<br><em style="color:#d45a28;">le volcan de feu</em></h1>
        <p style="font-family:'Montserrat',sans-serif; font-size:1.1rem; color:rgba(255,255,255,0.85); max-width:600px; line-height:1.7; margin-bottom:2rem;">Ascendez jusqu'au bord du plus grand lac de lave permanent au monde et découvrez un spectacle que peu de volcans sur Terre peuvent offrir.</p>
        <a href="contact.php" style="display:inline-block; background:#d45a28; color:#fff; font-family:'Montserrat',sans-serif; font-weight:600; font-size:0.95rem; padding:0.9rem 2rem; border-radius:50px; text-decoration:none; transition:background 0.3s;">Réserver le Trek <span style="margin-left:0.5rem;">→</span></a>
    </div>
</section>

<section style="background:#111; padding:2.5rem 2rem;">
    <div style="max-width:1200px; margin:0 auto; display:grid; grid-template-columns:repeat(4,1fr); gap:2rem; text-align:center;">
        <div>
            <div style="font-family:'Playfair Display',serif; font-size:2rem; font-weight:700; color:#d45a28;">3 470 m</div>
            <div style="font-family:'Montserrat',sans-serif; font-size:0.8rem; color:rgba(255,255,255,0.6); text-transform:uppercase; letter-spacing:2px; margin-top:0.4rem;">Altitude</div>
        </div>
        <div>
            <div style="font-family:'Playfair Display',serif; font-size:2rem; font-weight:700; color:#d45a28;">250 m</div>
            <div style="font-family:'Montserrat',sans-serif; font-size:0.8rem; color:rgba(255,255,255,0.6); text-transform:uppercase; letter-spacing:2px; margin-top:0.4rem;">Diamètre du lac de lave</div>
        </div>
        <div>
            <div style="font-family:'Playfair Display',serif; font-size:2rem; font-weight:700; color:#d45a28;">2 km</div>
            <div style="font-family:'Montserrat',sans-serif; font-size:0.8rem; color:rgba(255,255,255,0.6); text-transform:uppercase; letter-spacing:2px; margin-top:0.4rem;">Profondeur du cratère</div>
        </div>
        <div>
            <div style="font-family:'Playfair Display',serif; font-size:2rem; font-weight:700; color:#d45a28;">2002</div>
            <div style="font-family:'Montserrat',sans-serif; font-size:0.8rem; color:rgba(255,255,255,0.6); text-transform:uppercase; letter-spacing:2px; margin-top:0.4rem;">Dernière éruption majeure</div>
        </div>
    </div>
</section>

<section style="background:#1a1a1a; padding:5rem 2rem;">
    <div style="max-width:1200px; margin:0 auto;">
        <p style="font-family:'Montserrat',sans-serif; font-size:0.8rem; font-weight:600; letter-spacing:3px; text-transform:uppercase; color:#d45a28; margin-bottom:0.8rem;">Géologie &amp; Nature</p>
        <h2 style="font-family:'Playfair Display',serif; font-size:2.5rem; font-weight:700; color:#fff; line-height:1.15; margin:0 0 2rem;">Le feu<br><em style="color:#d45a28;">au cœur de la terre</em></h2>

        <div style="display:grid; grid-template-columns:1fr 1fr; gap:3rem; align-items:start; margin-bottom:3rem;">
            <div>
                <p style="font-family:'Montserrat',sans-serif; font-size:1rem; color:rgba(255,255,255,0.8); line-height:1.8; margin-bottom:1.5rem;">
                    Le Nyiragongo est un stratovolcan actif situé dans le Parc National des Virunga en République Démocratique du Congo. Il est célèbre pour son lac de lave permanent, le plus grand au monde, qui occupe le fond de son cratère d'un diamètre d'environ 250 mètres.
                </p>
                <p style="font-family:'Montserrat',sans-serif; font-size:1rem; color:rgba(255,255,255,0.8); line-height:1.8; margin-bottom:1.5rem;">
                    La lave du Nyiragongo est une néphélinite extraordinairement fluide, ce qui lui permet de s'écouler à des vitesses exceptionnelles lors des éruptions. Cette particularité rend les événements éruptifs particulièrement dangereux pour les populations environnantes, notamment la ville de Goma située à seulement 18 km au sud.
                </p>
                <p style="font-family:'Montserrat',sans-serif; font-size:1rem; color:rgba(255,255,255,0.8); line-height:1.8;">
                    Les éruptions de 1977 et 2002 ont causé des destructions majeures, la lave atteignant les rues de Goma. Malgré ces dangers, le Nyiragongo reste l'une des attractions naturelles les plus spectaculaires d'Afrique, attirant des randonneurs du monde entier qui viennent contempler le spectacle envoûtant de la lave incandescente.
                </p>
            </div>
            <div style="display:grid; grid-template-columns:1fr; gap:1rem;">
                <div style="background:rgba(212,90,40,0.1); border:1px solid rgba(212,90,40,0.3); border-radius:12px; padding:1.5rem;">
                    <p style="font-family:'Montserrat',sans-serif; font-size:0.75rem; font-weight:600; letter-spacing:2px; text-transform:uppercase; color:rgba(255,255,255,0.5); margin:0 0 0.5rem;">Type</p>
                    <p style="font-family:'Playfair Display',serif; font-size:1.2rem; font-weight:600; color:#fff; margin:0;">Stratovolcan</p>
                </div>
                <div style="background:rgba(212,90,40,0.1); border:1px solid rgba(212,90,40,0.3); border-radius:12px; padding:1.5rem;">
                    <p style="font-family:'Montserrat',sans-serif; font-size:0.75rem; font-weight:600; letter-spacing:2px; text-transform:uppercase; color:rgba(255,255,255,0.5); margin:0 0 0.5rem;">Lave</p>
                    <p style="font-family:'Playfair Display',serif; font-size:1.2rem; font-weight:600; color:#fff; margin:0;">Néphélinite très fluide</p>
                </div>
                <div style="background:rgba(212,90,40,0.1); border:1px solid rgba(212,90,40,0.3); border-radius:12px; padding:1.5rem;">
                    <p style="font-family:'Montserrat',sans-serif; font-size:0.75rem; font-weight:600; letter-spacing:2px; text-transform:uppercase; color:rgba(255,255,255,0.5); margin:0 0 0.5rem;">Statut</p>
                    <p style="font-family:'Playfair Display',serif; font-size:1.2rem; font-weight:600; color:#d45a28; margin:0;">Actif</p>
                </div>
            </div>
        </div>

        <div style="display:grid; grid-template-columns:1fr 1fr; gap:1.5rem; margin-bottom:2rem;">
            <img src="../assets/images/especes/volcan-versants.jpg" alt="Versants du Nyiragongo" style="width:100%; height:350px; object-fit:cover; border-radius:12px;">
            <img src="../assets/images/especes/lac-edouard.jpg" alt="Lac Édouard" style="width:100%; height:350px; object-fit:cover; border-radius:12px;">
        </div>

        <div style="background:rgba(212,90,40,0.12); border-left:4px solid #d45a28; border-radius:0 12px 12px 0; padding:1.5rem 2rem;">
            <p style="font-family:'Montserrat',sans-serif; font-size:0.9rem; color:rgba(255,255,255,0.85); line-height:1.7; margin:0;">
                <strong style="color:#d45a28;"><i class="fa-solid fa-triangle-exclamation"></i> Avertissement sécurité :</strong> L'ascension du Nyiragongo est soumise à des restrictions strictes. Seuls les visiteurs accompagnés de guides rangers autorisés peuvent accéder au sommet. L'activité volcanique est constamment surveillée et le trek peut être annulé à tout moment selon les conditions.
            </p>
        </div>
    </div>
</section>

<section style="background:#111; padding:5rem 2rem;">
    <div style="max-width:1200px; margin:0 auto;">
        <p style="font-family:'Montserrat',sans-serif; font-size:0.8rem; font-weight:600; letter-spacing:3px; text-transform:uppercase; color:#d45a28; margin-bottom:0.8rem;">L'aventure</p>
        <h2 style="font-family:'Playfair Display',serif; font-size:2.5rem; font-weight:700; color:#fff; line-height:1.15; margin:0 0 3rem;">Les étapes du<br><em style="color:#d45a28;">trek volcanique</em></h2>

        <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:1.5rem;">
            <div style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:2rem;">
                <div style="font-family:'Playfair Display',serif; font-size:2rem; font-weight:700; color:rgba(212,90,40,0.3); margin-bottom:0.5rem;">01</div>
                <h3 style="font-family:'Playfair Display',serif; font-size:1.2rem; font-weight:600; color:#fff; margin:0 0 0.8rem;">Départ de Kibati</h3>
                <p style="font-family:'Montserrat',sans-serif; font-size:0.9rem; color:rgba(255,255,255,0.6); line-height:1.7; margin:0;">Le trek débute au poste de ranger de Kibati, à 1 890 m d'altitude. Briefing sécurité et équipement vérifié avant le départ en fin d'après-midi.</p>
            </div>

            <div style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:2rem;">
                <div style="font-family:'Playfair Display',serif; font-size:2rem; font-weight:700; color:rgba(212,90,40,0.3); margin-bottom:0.5rem;">02</div>
                <h3 style="font-family:'Playfair Display',serif; font-size:1.2rem; font-weight:600; color:#fff; margin:0 0 0.8rem;">Zone forestière</h3>
                <p style="font-family:'Montserrat',sans-serif; font-size:0.9rem; color:rgba(255,255,255,0.6); line-height:1.7; margin:0;">Traverse des forêts d'altitude abritant des primates et une flore unique. Le sentier s'élève progressivement à travers une végétation dense et humide.</p>
            </div>

            <div style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:2rem;">
                <div style="font-family:'Playfair Display',serif; font-size:2rem; font-weight:700; color:rgba(212,90,40,0.3); margin-bottom:0.5rem;">03</div>
                <h3 style="font-family:'Playfair Display',serif; font-size:1.2rem; font-weight:600; color:#fff; margin:0 0 0.8rem;">Landes alpines</h3>
                <p style="font-family:'Montserrat',sans-serif; font-size:0.9rem; color:rgba(255,255,255,0.6); line-height:1.7; margin:0;">Au-delà de 2 800 m, la végétation s'éclaircit. Les landes alpines offrent des panoramas spectaculaires sur les volcans environnants et la vallée du Rift.</p>
            </div>

            <div style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:2rem;">
                <div style="font-family:'Playfair Display',serif; font-size:2rem; font-weight:700; color:rgba(212,90,40,0.3); margin-bottom:0.5rem;">04</div>
                <h3 style="font-family:'Playfair Display',serif; font-size:1.2rem; font-weight:600; color:#fff; margin:0 0 0.8rem;">Camp au sommet</h3>
                <p style="font-family:'Montserrat',sans-serif; font-size:0.9rem; color:rgba(255,255,255,0.6); line-height:1.7; margin:0;">Installations de campement basic au bord du cratère. Au crépuscule, le spectacle du lac de lave qui s'illumine commence à se dévoiler.</p>
            </div>

            <div style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:2rem;">
                <div style="font-family:'Playfair Display',serif; font-size:2rem; font-weight:700; color:rgba(212,90,40,0.3); margin-bottom:0.5rem;">05</div>
                <h3 style="font-family:'Playfair Display',serif; font-size:1.2rem; font-weight:600; color:#fff; margin:0 0 0.8rem;">Lever du soleil</h3>
                <p style="font-family:'Montserrat',sans-serif; font-size:0.9rem; color:rgba(255,255,255,0.6); line-height:1.7; margin:0;">À l'aube, le cratère s'illumine sous la lumière du soleil. Le contraste entre la lave incandescente et le ciel naissant est d'une beauté incomparable.</p>
            </div>

            <div style="background:rgba(255,255,255,0.04); border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:2rem;">
                <div style="font-family:'Playfair Display',serif; font-size:2rem; font-weight:700; color:rgba(212,90,40,0.3); margin-bottom:0.5rem;">06</div>
                <h3 style="font-family:'Playfair Display',serif; font-size:1.2rem; font-weight:600; color:#fff; margin:0 0 0.8rem;">Descente</h3>
                <p style="font-family:'Montserrat',sans-serif; font-size:0.9rem; color:rgba(255,255,255,0.6); line-height:1.7; margin:0;">La descente s'effectue en fin de matinée par un itinéraire différent, offrant de nouvelles perspectives sur le paysage volcanique environnant.</p>
            </div>
        </div>
    </div>
</section>

<?php require '../includes/footer.php'; ?>
