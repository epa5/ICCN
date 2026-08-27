<?php
session_start();
$racine = '../';
$titre_page = "Contact";
$page_actuelle = 'contact.php';

$erreurs = [];
$submitted = false;
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $objet = $_POST['objet'] ?? '';
    $message = trim($_POST['message'] ?? '');

    if (empty($nom)) {
        $erreurs['nom'] = "Le nom complet est requis.";
    }
    if (empty($email)) {
        $erreurs['email'] = "L'adresse email est requise.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs['email'] = "Adresse email invalide.";
    }
    if (empty($message)) {
        $erreurs['message'] = "Le message est requis.";
    }

    $submitted = true;

    if (empty($erreurs)) {
        $success = true;
        $nom = '';
        $email = '';
        $objet = '';
        $message = '';
    }
}

require '../includes/header.php';
?>

<style>
    /* ---- Hero Contact ---- */
    .contact-hero {
        position: relative;
        height: 400px;
        overflow: hidden;
        display: flex;
        align-items: flex-end;
        background: var(--vert-fonce);
    }

    .contact-hero-img {
        position: absolute;
        inset: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center 30%;
    }

    .contact-hero-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, var(--vert-fonce) 0%, rgba(11,26,13,0.6) 50%, rgba(11,26,13,0.25) 100%);
    }

    .contact-hero-stripe {
        position: absolute;
        top: 0; left: 0; bottom: 0;
        width: 4px;
        background: linear-gradient(to bottom, var(--or), transparent);
    }

    .contact-hero-contenu {
        position: relative;
        max-width: 1280px;
        width: 100%;
        margin: 0 auto;
        padding: 0 2rem 3.5rem;
        color: var(--creme);
    }

    .contact-hero-contenu .eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(201,168,76,0.12);
        border: 1px solid rgba(201,168,76,0.35);
        border-radius: 2px;
        padding: 0.35rem 0.9rem;
        margin-bottom: 1.2rem;
        font-family: 'Work Sans', sans-serif;
        font-size: 0.72rem;
        font-weight: 600;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: var(--or);
    }

    .contact-hero-titre {
        font-family: 'Fraunces', serif;
        font-weight: 700;
        font-size: clamp(2rem, 5vw, 3.2rem);
        line-height: 1.1;
        margin-bottom: 0.8rem;
    }
    .contact-hero-titre em { color: var(--or); font-style: italic; }

    .contact-hero-texte {
        font-size: 1.05rem;
        color: rgba(237,232,216,0.7);
        max-width: 500px;
    }

    /* ---- Contenu Contact ---- */
    .contact-section {
        max-width: 1280px;
        margin: 0 auto;
        padding: 4rem 2rem;
    }

    .contact-grille {
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        gap: 3rem;
        align-items: start;
    }

    /* Colonne gauche — infos */
    .contact-infos-titre {
        font-family: 'Fraunces', serif;
        font-size: 1.6rem;
        color: var(--creme);
        margin-bottom: 1.5rem;
    }

    .contact-info-item {
        display: flex;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1.5rem;
    }

    .contact-info-icone {
        width: 42px;
        height: 42px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(201,168,76,0.1);
        border: 1px solid rgba(201,168,76,0.25);
        border-radius: 3px;
        color: var(--or);
        font-size: 1rem;
    }

    .contact-info-label {
        font-family: 'Work Sans', sans-serif;
        font-size: 0.72rem;
        font-weight: 600;
        letter-spacing: 0.12em;
        text-transform: uppercase;
        color: var(--or);
        margin-bottom: 0.25rem;
    }

    .contact-info-valeur {
        font-size: 0.95rem;
        color: rgba(237,232,216,0.85);
        line-height: 1.5;
    }

    .contact-separateur {
        height: 1px;
        background: rgba(201,168,76,0.12);
        margin: 2rem 0;
    }

    /* Boîte Don & Conservation */
    .contact-don-box {
        background: rgba(201,168,76,0.06);
        border: 1px solid rgba(201,168,76,0.2);
        border-radius: 4px;
        padding: 1.8rem;
        margin-top: 1.5rem;
    }

    .contact-don-box-titre {
        font-family: 'Fraunces', serif;
        font-size: 1.15rem;
        color: var(--creme);
        margin-bottom: 0.6rem;
    }

    .contact-don-box-texte {
        font-size: 0.9rem;
        color: rgba(237,232,216,0.65);
        line-height: 1.65;
        margin-bottom: 1.2rem;
    }

    .contact-don-box .bouton-dore-plein {
        display: inline-flex;
    }

    /* Colonne droite — formulaire */
    .contact-formulaire-carte {
        background: #132016;
        border: 1px solid rgba(201,168,76,0.12);
        border-radius: 6px;
        padding: 2.5rem;
    }

    .contact-form-titre {
        font-family: 'Fraunces', serif;
        font-size: 1.4rem;
        color: var(--creme);
        margin-bottom: 0.4rem;
    }

    .contact-form-soustitre {
        font-size: 0.88rem;
        color: var(--gris-texte);
        margin-bottom: 2rem;
    }

    .form-champ {
        margin-bottom: 1.3rem;
    }

    .form-champ label {
        display: block;
        font-family: 'Work Sans', sans-serif;
        font-size: 0.78rem;
        font-weight: 600;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        color: rgba(237,232,216,0.7);
        margin-bottom: 0.45rem;
    }

    .form-champ label .obligatoire {
        color: #d45a28;
    }

    .form-champ input,
    .form-champ select,
    .form-champ textarea {
        width: 100%;
        padding: 0.75rem 1rem;
        background: rgba(237,232,216,0.05);
        border: 1px solid rgba(237,232,216,0.15);
        border-radius: 4px;
        color: var(--creme);
        font-family: 'Work Sans', sans-serif;
        font-size: 0.95rem;
        transition: border-color 0.2s;
        outline: none;
    }

    .form-champ input:focus,
    .form-champ select:focus,
    .form-champ textarea:focus {
        border-color: var(--or);
    }

    .form-champ input::placeholder,
    .form-champ textarea::placeholder {
        color: rgba(237,232,216,0.3);
    }

    .form-champ select {
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%23c9a84c' stroke-width='1.5' fill='none'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 1rem center;
        padding-right: 2.5rem;
    }

    .form-champ select option {
        background: #132016;
        color: var(--creme);
    }

    .form-champ textarea {
        min-height: 140px;
        resize: vertical;
    }

    .form-erreur {
        color: #e07a6c;
        font-size: 0.8rem;
        margin-top: 0.35rem;
    }

    .form-champ input.erreur,
    .form-champ select.erreur,
    .form-champ textarea.erreur {
        border-color: #d45a28;
    }

    .contact-form-bouton {
        width: 100%;
        padding: 0.85rem;
        background: var(--or);
        color: var(--vert-fonce);
        font-family: 'Work Sans', sans-serif;
        font-weight: 600;
        font-size: 0.88rem;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        transition: background 0.2s;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
    }
    .contact-form-bouton:hover {
        background: var(--or-fonce);
    }

    /* Message de succès */
    .contact-success {
        background: rgba(72,160,90,0.12);
        border: 1px solid rgba(72,160,90,0.35);
        border-radius: 4px;
        padding: 1.5rem;
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .contact-success-icon {
        font-size: 2rem;
        color: #48a05a;
        margin-bottom: 0.5rem;
    }

    .contact-success-titre {
        font-family: 'Fraunces', serif;
        font-size: 1.15rem;
        color: var(--creme);
        margin-bottom: 0.3rem;
    }

    .contact-success-texte {
        font-size: 0.88rem;
        color: var(--gris-texte);
    }

    /* Responsive */
    @media (max-width: 900px) {
        .contact-grille {
            grid-template-columns: 1fr;
        }
        .contact-hero { height: 320px; }
    }

    @media (max-width: 600px) {
        .contact-hero { height: 260px; }
        .contact-formulaire-carte { padding: 1.5rem; }
    }
</style>

<section class="contact-hero">
    <img src="../assets/images/especes/hero-virunga.jpg" alt="Forêt du Virunga" class="contact-hero-img">
    <div class="contact-hero-overlay"></div>
    <div class="contact-hero-stripe"></div>

    <div class="contact-hero-contenu">
        <div class="eyebrow">
            <i class="fa-solid fa-envelope"></i>
            Contactez-nous
        </div>
        <h1 class="contact-hero-titre">
            Planifiez votre<br><em>aventure</em>
        </h1>
        <p class="contact-hero-texte">
            Que vous souhaitiez réserver une visite, partir en randonnée ou soutenir nos efforts de conservation, notre équipe est à votre disposition.
        </p>
    </div>
</section>

<section class="contact-section">
    <div class="contact-grille">

        <div class="contact-colonne-gauche">
            <h2 class="contact-infos-titre">Nos Coordonnées</h2>

            <div class="contact-info-item">
                <div class="contact-info-icone">
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div>
                    <div class="contact-info-label">Bureau Principal</div>
                    <div class="contact-info-valeur">
                        Avenue du Parc, Goma<br>
                        Nord-Kivu, République Démocratique du Congo
                    </div>
                </div>
            </div>

            <div class="contact-info-item">
                <div class="contact-info-icone">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div>
                    <div class="contact-info-label">Téléphone</div>
                    <div class="contact-info-valeur">+243 (0) 81 234 5678</div>
                </div>
            </div>

            <div class="contact-info-item">
                <div class="contact-info-icone">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div>
                    <div class="contact-info-label">Email</div>
                    <div class="contact-info-valeur">info@virunga.org</div>
                </div>
            </div>

            <div class="contact-info-item">
                <div class="contact-info-icone">
                    <i class="fa-solid fa-clock"></i>
                </div>
                <div>
                    <div class="contact-info-label">Horaires</div>
                    <div class="contact-info-valeur">
                        Lundi – Vendredi : 8h00 – 17h00<br>
                        Samedi : 8h00 – 12h00
                    </div>
                </div>
            </div>

            <div class="contact-separateur"></div>

            <div class="contact-don-box">
                <h3 class="contact-don-box-titre">Don &amp; Conservation</h3>
                <p class="contact-don-box-texte">
                    Votre soutien permet de protéger les gorilles des montagnes et de financer les rangers qui défendent le parc au péril de leur vie chaque jour.
                </p>
                <a href="#" class="bouton-dore-plein">Faire un don <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>

        <div class="contact-colonne-droite">
            <div class="contact-formulaire-carte">
                <h2 class="contact-form-titre">Envoyez-nous un message</h2>
                <p class="contact-form-soustitre">Remplissez le formulaire ci-dessous et nous vous répondrons dans les plus brefs délais.</p>

                <?php if ($success): ?>
                    <div class="contact-success">
                        <div class="contact-success-icon"><i class="fa-solid fa-circle-check"></i></div>
                        <div class="contact-success-titre">Message envoyé !</div>
                        <div class="contact-success-texte">Merci pour votre message. Notre équipe vous répondra sous 24 à 48 heures.</div>
                    </div>
                <?php endif; ?>

                <form method="POST" action="">
                    <div class="form-champ">
                        <label for="nom">Nom complet <span class="obligatoire">*</span></label>
                        <input
                            type="text"
                            id="nom"
                            name="nom"
                            placeholder="Votre nom complet"
                            value="<?php echo htmlspecialchars($nom ?? ''); ?>"
                            class="<?php echo !empty($erreurs['nom']) ? 'erreur' : ''; ?>"
                        >
                        <?php if (!empty($erreurs['nom'])): ?>
                            <div class="form-erreur"><?php echo $erreurs['nom']; ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="form-champ">
                        <label for="email">Email <span class="obligatoire">*</span></label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="votre@email.com"
                            value="<?php echo htmlspecialchars($email ?? ''); ?>"
                            class="<?php echo !empty($erreurs['email']) ? 'erreur' : ''; ?>"
                        >
                        <?php if (!empty($erreurs['email'])): ?>
                            <div class="form-erreur"><?php echo $erreurs['email']; ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="form-champ">
                        <label for="objet">Objet</label>
                        <select id="objet" name="objet">
                            <option value="reserve-une-visite" <?php echo ($objet ?? '') === 'reserve-une-visite' ? 'selected' : ''; ?>>Réserver une visite</option>
                            <option value="trek-nyiragongo" <?php echo ($objet ?? '') === 'trek-nyiragongo' ? 'selected' : ''; ?>>Trek Nyiragongo</option>
                            <option value="trekking-gorilles" <?php echo ($objet ?? '') === 'trekking-gorilles' ? 'selected' : ''; ?>>Trekking gorilles</option>
                            <option value="ascension-rwenzori" <?php echo ($objet ?? '') === 'ascension-rwenzori' ? 'selected' : ''; ?>>Ascension Rwenzori</option>
                            <option value="programme-conservation" <?php echo ($objet ?? '') === 'programme-conservation' ? 'selected' : ''; ?>>Programme de conservation</option>
                            <option value="autre" <?php echo ($objet ?? '') === 'autre' ? 'selected' : ''; ?>>Autre</option>
                        </select>
                    </div>

                    <div class="form-champ">
                        <label for="message">Message <span class="obligatoire">*</span></label>
                        <textarea
                            id="message"
                            name="message"
                            placeholder="Décrivez votre demande..."
                            class="<?php echo !empty($erreurs['message']) ? 'erreur' : ''; ?>"
                        ><?php echo htmlspecialchars($message ?? ''); ?></textarea>
                        <?php if (!empty($erreurs['message'])): ?>
                            <div class="form-erreur"><?php echo $erreurs['message']; ?></div>
                        <?php endif; ?>
                    </div>

                    <button type="submit" class="contact-form-bouton">
                        Envoyer le message <i class="fa-solid fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>

    </div>
</section>

<?php require '../includes/footer.php'; ?>
