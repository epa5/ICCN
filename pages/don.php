<?php
session_start();
$racine = '../';
$titre_page = "Faire un don";
$page_actuelle = 'don.php';
require '../includes/header.php';
?>

<section class="don-hero">
    <div class="don-hero-contenu">
        <span class="badge-pulse">Patrimoine Mondial UNESCO · Fondé en 1925</span>
        <h1 class="don-hero-titre">Protégez <em>les Virunga</em></h1>
        <p class="don-hero-texte">
            Votre don préserve l'un des écosystèmes les plus précieux de la planète et les gorilles de montagne.
        </p>
    </div>
</section>

<section class="barre-stats">
    <div class="barre-stats-grille">
        <div class="stat-item">
            <div class="stat-valeur">3 000+</div>
            <div class="stat-label">Gorilles protégés</div>
        </div>
        <div class="stat-item">
            <div class="stat-valeur">700+</div>
            <div class="stat-label">Rangers sur le terrain</div>
        </div>
        <div class="stat-item">
            <div class="stat-valeur">7 800 km²</div>
            <div class="stat-label">De forêt préservée</div>
        </div>
        <div class="stat-item">
            <div class="stat-valeur">140 ans</div>
            <div class="stat-label">Du plus vieux parc d'Afrique</div>
        </div>
    </div>
</section>

<div class="don-disposition">
    <div class="don-info">
        <div>
            <h2 class="titre-info">Pourquoi donner ?</h2>
            <p class="texte-info">
                Le Parc National des Virunga, classé au patrimoine mondial de l'UNESCO, abrite plus de la moitié des gorilles de montagne du monde. Il est menacé par la déforestation, le braconnage et l'instabilité régionale.
            </p>
        </div>

        <div class="don-cartes">
            <div class="don-carte">
                <span class="don-carte-icone">&#129421;</span>
                <div>
                    <div class="don-carte-titre">Protection des espèces</div>
                    <div class="don-carte-texte">Financement direct des programmes anti-braconnage et de suivi des gorilles.</div>
                </div>
            </div>
            <div class="don-carte">
                <span class="don-carte-icone">&#128737;&#65039;</span>
                <div>
                    <div class="don-carte-titre">Soutien aux rangers</div>
                    <div class="don-carte-texte">Plus de 700 rangers risquent leur vie chaque jour pour protéger le parc.</div>
                </div>
            </div>
            <div class="don-carte">
                <span class="don-carte-icone">&#127807;</span>
                <div>
                    <div class="don-carte-titre">Reforestation</div>
                    <div class="don-carte-texte">Des milliers d'arbres replantés chaque année pour restaurer l'habitat naturel.</div>
                </div>
            </div>
        </div>

        <div class="don-partenaires">
            <div class="don-partenaires-titre">Partenaires &amp; Certifications</div>
            <div class="don-partenaires-badges">
                <span>&#127482;&#127486; UNESCO</span>
                <span>&#127757; WWF Partner</span>
                <span>&#128274; Stripe Secure</span>
                <span>&#129519; Afriregister</span>
            </div>
        </div>
    </div>

    <div class="don-formulaire-cadre">
        <div class="don-entete-formulaire">
            <span class="don-coeur">&#10084;&#65039;</span>
            <div>
                <h2 class="don-formulaire-titre">Formulaire de don</h2>
                <p class="don-formulaire-sous-titre">Parc National des Virunga — RDC</p>
            </div>
        </div>

        <div id="donApplication"></div>
    </div>
</div>

<style>
.don-hero {
    position: relative;
    padding: 110px 2rem 60px;
    text-align: center;
    background: linear-gradient(180deg, rgba(11,26,13,.55) 0%, rgba(11,26,13,.92) 100%);
}
.don-hero-contenu { max-width: 720px; margin: 0 auto; }
.don-hero-titre { font-family: 'Fraunces', serif; color: var(--creme); font-size: clamp(2rem, 5vw, 3.4rem); line-height: 1.1; }
.don-hero-titre em { color: var(--or); font-style: italic; }
.don-hero-texte { color: var(--gris-texte); margin: 18px auto 0; max-width: 560px; }

.don-disposition {
    max-width: 1180px; margin: 0 auto; padding: 48px 2rem 64px;
    display: grid; grid-template-columns: 2fr 3fr; gap: 40px; align-items: start;
}
.don-info { display: flex; flex-direction: column; gap: 28px; }
.titre-info { color: var(--creme); font-family: 'Fraunces', serif; font-size: 1.6rem; margin-bottom: 12px; }
.texte-info { color: var(--gris-texte); font-size: .95rem; line-height: 1.7; }
.don-cartes { display: flex; flex-direction: column; gap: 12px; }
.don-carte { display: flex; gap: 14px; padding: 14px; background: rgba(255,255,255,.04); border: 1px solid rgba(201,168,76,.18); border-radius: 14px; }
.don-carte-icone { font-size: 1.5rem; }
.don-carte-titre { color: var(--creme); font-weight: 600; font-size: .95rem; }
.don-carte-texte { color: var(--gris-texte); font-size: .83rem; margin-top: 4px; line-height: 1.6; }
.don-partenaires { background: var(--vert-fonce); border: 1px solid rgba(201,168,76,.2); border-radius: 16px; padding: 20px; text-align: center; }
.don-partenaires-titre { color: var(--gris-texte); font-size: .68rem; text-transform: uppercase; letter-spacing: 2px; font-weight: 700; margin-bottom: 12px; }
.don-partenaires-badges { display: flex; flex-wrap: wrap; justify-content: center; gap: 8px; }
.don-partenaires-badges span { background: rgba(201,168,76,.12); color: var(--creme); font-size: .75rem; padding: 7px 12px; border-radius: 9px; }

.don-formulaire-cadre {
    background: var(--creme); color: var(--vert-fonce); border-radius: 20px;
    padding: 28px; box-shadow: 0 18px 48px rgba(0,0,0,.35);
}
.don-entete-formulaire { display: flex; align-items: center; gap: 12px; margin-bottom: 22px; }
.don-coeur { width: 42px; height: 42px; border-radius: 50%; background: rgba(201,168,76,.15); color: var(--or); display: flex; align-items: center; justify-content: center; font-size: 1.1rem; }
.don-formulaire-titre { font-family: 'Fraunces', serif; color: var(--vert-fonce); font-size: 1.25rem; }
.don-formulaire-sous-titre { color: var(--gris-fonce); font-size: .75rem; margin-top: 2px; }

.don-section-titre { font-family: 'Fraunces', serif; color: var(--vert-fonce); font-size: 1.05rem; margin: 22px 0 12px; }
.don-grille-causes { display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px; }
.don-bouton-cause {
    display: flex; align-items: center; gap: 8px; padding: 12px 14px; border-radius: 12px;
    border: 2px solid #e2dcc8; background: #fff; color: var(--vert-fonce); font-size: .85rem; font-weight: 600;
    text-align: left; cursor: pointer; transition: .2s;
}
.don-bouton-cause.sel { border-color: var(--or); background: #faf5e6; }
.don-grille-montants { display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px; margin-bottom: 12px; }
.don-bouton-montant {
    padding: 12px; border-radius: 12px; background: #fff; border: 2px solid #e2dcc8;
    color: var(--vert-fonce); font-weight: 700; font-size: .95rem; cursor: pointer; transition: .2s;
}
.don-bouton-montant.sel { background: var(--vert-fonce); color: var(--creme); border-color: var(--vert-fonce); }
.don-montant-ligne { display: flex; gap: 10px; }
.don-champ-montant { flex: 1; position: relative; }
.don-symbole { position: absolute; left: 14px; top: 50%; transform: translateY(-50%); color: var(--or-fonce); font-weight: 700; }
.don-champ-montant input {
    width: 100%; padding: 12px 12px 12px 34px; border-radius: 12px; border: 2px solid #e2dcc8;
    background: #fff; font-size: .9rem; outline: none; transition: .2s;
}
.don-champ-montant input:focus, .don-select:focus, .don-champ:focus, .don-champ-texte:focus { border-color: var(--or); box-shadow: 0 0 0 3px rgba(201,168,76,.25); }
.don-select {
    padding: 12px; border-radius: 12px; border: 2px solid #e2dcc8; background: #fff;
    color: var(--vert-fonce); font-weight: 600; font-size: .85rem; outline: none; cursor: pointer;
}
.don-recurrent { display: flex; align-items: center; gap: 10px; margin-top: 14px; font-size: .85rem; color: var(--vert-fonce); }
.don-interrupteur { position: relative; width: 44px; height: 24px; flex-shrink: 0; }
.don-interrupteur input { opacity: 0; width: 0; height: 0; }
.don-interrupteur .interrupteur-trace { position: absolute; inset: 0; border-radius: 999px; background: #d8d2bd; transition: .2s; cursor: pointer; }
.don-interrupteur .interrupteur-bille { position: absolute; top: 3px; left: 3px; width: 18px; height: 18px; border-radius: 50%; background: #fff; transition: .2s; box-shadow: 0 1px 3px rgba(0,0,0,.3); }
.don-interrupteur input:checked + .interrupteur-trace { background: var(--vert-fonce); }
.don-interrupteur input:checked + .interrupteur-trace + .interrupteur-bille { transform: translateX(20px); }

.don-entete-infos { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 8px; }
.don-anonyme { display: flex; align-items: center; gap: 8px; font-size: .82rem; color: var(--gris-fonce); cursor: pointer; }
.don-grille-champs { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
.don-bloc-champ { display: flex; flex-direction: column; gap: 5px; }
.don-bloc-champ.pleine-largeur { grid-column: 1 / -1; }
.don-bloc-champ label { font-size: .66rem; font-weight: 700; text-transform: uppercase; letter-spacing: .5px; color: var(--gris-fonce); }
.don-bloc-champ label .etoile { color: #dc2626; }
.don-champ, .don-select-pays, .don-champ-texte {
    padding: 11px 13px; border-radius: 12px; border: 2px solid #e2dcc8; background: #fff;
    color: var(--vert-fonce); font-size: .9rem; outline: none; transition: .2s; width: 100%;
}
.don-bloc-champ input:disabled { opacity: .5; background: #f2efe4; }
.don-champ-texte { resize: none; }

.don-paiement-cadre { background: #fff; border: 2px solid #e2dcc8; border-radius: 16px; padding: 18px; }
.don-bloc-stripe { margin-bottom: 14px; }
.don-bloc-stripe label { display: block; font-size: .66rem; font-weight: 700; text-transform: uppercase; letter-spacing: .5px; color: var(--gris-fonce); margin-bottom: 7px; }
.don-stripe { padding: 12px 13px; border: 2px solid #e2dcc8; border-radius: 12px; background: #fff; transition: .2s; }
.don-stripe.don-stripe-focus { border-color: var(--or); box-shadow: 0 0 0 3px rgba(201,168,76,.25); }
.don-stripe.don-stripe-invalid { border-color: #dc2626; }
.don-securite { display: flex; align-items: center; gap: 8px; font-size: .72rem; color: var(--gris-fonce); margin-top: 10px; }

.don-erreur {
    display: flex; gap: 9px; align-items: flex-start; background: #fdecec; border: 1px solid #f5c2c2;
    color: #b91c1c; border-radius: 12px; padding: 12px 14px; font-size: .85rem; margin-top: 4px;
}
.don-soumettre {
    width: 100%; padding: 15px; border: none; border-radius: 16px; background: var(--vert-fonce);
    color: var(--creme); font-size: 1.05rem; font-weight: 700; cursor: pointer; margin-top: 18px; transition: .2s;
}
.don-soumettre:hover:not(:disabled) { background: var(--or); color: var(--vert-fonce); }
.don-soumettre:disabled { opacity: .5; cursor: not-allowed; }
.don-mentions { text-align: center; font-size: .72rem; color: var(--gris-fonce); margin-top: 14px; line-height: 1.6; }
.don-mentions a { color: var(--vert-fonce); text-decoration: underline; }

.don-etat { text-align: center; padding: 50px 20px; }
.don-spinner { width: 52px; height: 52px; margin: 0 auto 18px; border-radius: 50%; border: 4px solid #e2dcc8; border-top-color: var(--or); animation: don-spin 1s linear infinite; }
@keyframes don-spin { to { transform: rotate(360deg); } }
.don-etat-titre { font-family: 'Fraunces', serif; color: var(--vert-fonce); font-size: 1.5rem; margin-bottom: 10px; }
.don-etat-texte { color: var(--gris-fonce); font-size: .95rem; line-height: 1.7; max-width: 420px; margin: 0 auto; }
.don-etat-texte strong { color: var(--vert-fonce); }
.don-check { width: 64px; height: 64px; margin: 0 auto 18px; border-radius: 50%; background: #e5f2e8; display: flex; align-items: center; justify-content: center; color: #2f7d46; font-size: 1.6rem; }
.don-recommencer {
    margin-top: 18px; padding: 12px 30px; border: none; border-radius: 999px; background: var(--vert-fonce);
    color: var(--creme); font-weight: 600; cursor: pointer; transition: .2s;
}
.don-recommencer:hover { background: var(--or); color: var(--vert-fonce); }

@media (max-width: 900px) {
    .don-disposition { grid-template-columns: 1fr; }
    .don-grille-causes { grid-template-columns: 1fr; }
}
</style>

<script src="https://js.stripe.com/v3/"></script>
<script>
(function () {
    // Remplace par ta clé publique Stripe (Afriregister)
    var STRIPE_PUBLISHABLE_KEY = "pk_test_51OEtPlJLPaRJtYbGTWFQkXqAU0000000000000000000000000000000000000000000000000000000000000000000000";
    var stripe = Stripe(STRIPE_PUBLISHABLE_KEY);
    var elements = stripe.elements();

    var PRESETS = [10, 25, 50, 100, 250, 500];
    var CAUSES = [
        { id: "gorilla", label: "Protection des gorilles", icon: "\u{1F98D}" },
        { id: "rangers", label: "Soutien aux rangers", icon: "\u{1F6E1}\uFE0F" },
        { id: "reforestation", label: "Reforestation", icon: "\u{1F33F}" },
        { id: "community", label: "Communautés locales", icon: "\u{1F3E0}\uFE0F" },
        { id: "general", label: "Fonds général", icon: "\u{1F30D}" }
    ];
    var DEVISE = { USD: "$", EUR: "\u20AC", GBP: "\u00A3", CDF: "FC" };

    var etat = {
        amount: 50, customAmount: "", isCustom: false, cause: "gorilla", currency: "USD",
        firstName: "", lastName: "", email: "", country: "", countryName: "", university: "",
        phone: "", anonymous: false, recurring: false, message: "",
        etape: "form", erreur: "", countries: [], loadingCountries: true,
        universities: [], loadingUniversities: false
    };

    var CARD_STYLE = {
        base: { fontSize: "15px", color: "#122318", "::placeholder": { color: "#94c9a3" } },
        invalid: { color: "#dc2626" }
    };
    var cardNumber, cardExpiry, cardCvc;
    function creerElementsStripe() {
        cardNumber = elements.create("cardNumber", { style: CARD_STYLE });
        cardExpiry = elements.create("cardExpiry", { style: CARD_STYLE });
        cardCvc = elements.create("cardCvc", { style: CARD_STYLE });
    }

    function finalAmount() {
        return etat.isCustom ? (parseFloat(etat.customAmount) || 0) : etat.amount;
    }
    function symbole() { return DEVISE[etat.currency] || etat.currency; }

    function causeLabel() {
        var c = CAUSES.filter(function (x) { return x.id === etat.cause; })[0];
        return c ? c.label : "";
    }

    function montantTexte() {
        return finalAmount() > 0 ? finalAmount() + " " + etat.currency : "...";
    }

    function avecEchappement(s) {
        return (s || "").replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;");
    }

    function rendre() {
        var racine = document.getElementById("donApplication");
        if (!racine) return;

        if (etat.etape === "processing") {
            racine.innerHTML =
                '<div class="don-etat">' +
                '  <div class="don-spinner"></div>' +
                '  <div class="don-etat-titre">Traitement de votre don...</div>' +
                '  <div class="don-etat-texte">Veuillez ne pas fermer cette page.</div>' +
                '</div>';
            return;
        }
        if (etat.etape === "success") {
            racine.innerHTML =
                '<div class="don-etat">' +
                '  <div class="don-check">&#10003;</div>' +
                '  <div class="don-etat-titre">Merci pour votre générosité !</div>' +
                '  <div class="don-etat-texte">Votre don de <strong>' + montantTexte() + '</strong> pour <strong>' + avecEchappement(causeLabel()) + '</strong> contribue à protéger le patrimoine exceptionnel du Parc National des Virunga.</div>' +
                '  <p style="color:var(--gris-fonce);font-size:.85rem;margin-top:14px;">Un reçu a été envoyé à <strong>' + avecEchappement(etat.email) + '</strong>.</p>' +
                '  <button class="don-recommencer" onclick="donReinit()">Faire un autre don</button>' +
                '</div>';
            return;
        }

        var causesHtml = CAUSES.map(function (c) {
            return '<button type="button" class="don-bouton-cause' + (etat.cause === c.id ? " sel" : "") + '" onclick="donSetCause(\'' + c.id + '\')">' +
                '<span>' + c.icon + '</span><span>' + avecEchappement(c.label) + '</span></button>';
        }).join("");

        var montantsHtml = PRESETS.map(function (p) {
            return '<button type="button" class="don-bouton-montant' + (!etat.isCustom && etat.amount === p ? " sel" : "") + '" onclick="donSetMontant(' + p + ')">' + p + '</button>';
        }).join("");

        var paysOptions = etat.countries.map(function (c) {
            return '<option value="' + avecEchappement(c.cca2) + '"' + (etat.country === c.cca2 ? " selected" : "") + '>' +
                avecEchappement(c.name.common) + '</option>';
        }).join("");

        var universitesOptions = etat.universities.map(function (u) {
            return '<option value="' + avecEchappement(u.name) + '"' + (etat.university === u.name ? " selected" : "") + '>' +
                avecEchappement(u.name) + '</option>';
        }).join("");

        var devisesHtml = ["USD", "EUR", "GBP", "CDF"].map(function (k) {
            return '<option value="' + k + '"' + (etat.currency === k ? " selected" : "") + '>' + k + " " + DEVISE[k] + '</option>';
        }).join("");

        var anonyme = etat.anonymous;
        var erreurHtml = (etat.erreur || etat.etape === "error")
            ? '<div class="don-erreur"><span>&#9888;&#65039;</span><span>' + (etat.erreur || "Une erreur est survenue. Veuillez réessayer.") + '</span></div>'
            : "";

        racine.innerHTML =
            '<form id="donForm">' +

            '<div class="don-section-titre">1. Choisissez votre cause</div>' +
            '<div class="don-grille-causes">' + causesHtml + '</div>' +

            '<div class="don-section-titre">2. Montant du don</div>' +
            '<div class="don-grille-montants">' + montantsHtml + '</div>' +
            '<div class="don-montant-ligne">' +
            '  <div class="don-champ-montant">' +
            '    <span class="don-symbole">' + symbole() + '</span>' +
            '    <input type="number" min="1" step="0.01" placeholder="Montant personnalisé" value="' + avecEchappement(etat.customAmount) + '" oninput="donSetPersonnalise(this.value)">' +
            '  </div>' +
            '  <select class="don-select" onchange="donSetDevise(this.value)">' + devisesHtml + '</select>' +
            '</div>' +
            '<div class="don-recurrent">' +
            '  <div class="don-interrupteur" onclick="donToggleRecurrent()">' +
            '    <input type="checkbox" ' + (etat.recurring ? "checked" : "") + '>' +
            '    <span class="interrupteur-trace"></span><span class="interrupteur-bille"></span>' +
            '  </div>' +
            '  <span>Don mensuel récurrent</span>' +
            '</div>' +

            '<div class="don-section-titre">3. Vos informations</div>' +
            '<div class="don-entete-infos">' +
            '  <label class="don-anonyme">' +
            '    <input type="checkbox" ' + (anonyme ? "checked" : "") + ' onchange="donToggleAnonyme(this.checked)"> Don anonyme' +
            '  </label>' +
            '</div>' +
            '<div class="don-grille-champs">' +
            '  <div class="don-bloc-champ"><label>Prénom' + (anonyme ? "" : ' <span class="etoile">*</span>') + '</label>' +
            '    <input class="don-champ" type="text" value="' + avecEchappement(etat.firstName) + '" placeholder="Jean" ' + (anonyme ? "disabled" : "") + ' oninput="donSetChamp(\'firstName\', this.value)"></div>' +
            '  <div class="don-bloc-champ"><label>Nom' + (anonyme ? "" : ' <span class="etoile">*</span>') + '</label>' +
            '    <input class="don-champ" type="text" value="' + avecEchappement(etat.lastName) + '" placeholder="Dupont" ' + (anonyme ? "disabled" : "") + ' oninput="donSetChamp(\'lastName\', this.value)"></div>' +
            '  <div class="don-bloc-champ"><label>Email <span class="etoile">*</span></label>' +
            '    <input class="don-champ" type="email" value="' + avecEchappement(etat.email) + '" placeholder="jean@exemple.com" oninput="donSetChamp(\'email\', this.value)"></div>' +
            '  <div class="don-bloc-champ"><label>Téléphone</label>' +
            '    <input class="don-champ" type="tel" value="' + avecEchappement(etat.phone) + '" placeholder="+243 ..." oninput="donSetChamp(\'phone\', this.value)"></div>' +
            '  <div class="don-bloc-champ pleine-largeur"><label>Pays <span class="etoile">*</span></label>' +
            '    <select class="don-select-pays" onchange="donSetChamp(\'country\', this.value)">' +
            '      <option value="">' + (etat.loadingCountries ? "Chargement des pays..." : "Sélectionnez votre pays") + '</option>' +
            paysOptions +
            '    </select></div>' +
            '  <div class="don-bloc-champ pleine-largeur"><label>Université' + (etat.country ? ' <span class="etoile">*</span>' : '') + '</label>' +
            '    <select class="don-select-pays" onchange="donSetChamp(\'university\', this.value)">' +
            '      <option value="">' + (etat.universityHint()) + '</option>' +
            universitesOptions +
            '    </select></div>' +
            '  <div class="don-bloc-champ pleine-largeur"><label>Message (optionnel)</label>' +
            '    <textarea class="don-champ-texte" rows="3" placeholder="Laissez un message d\'encouragement..." oninput="donSetChamp(\'message\', this.value)">' + avecEchappement(etat.message) + '</textarea></div>' +
            '</div>' +

            '<div class="don-section-titre">4. Paiement sécurisé</div>' +
            '<div class="don-paiement-cadre">' +
            '  <div class="don-bloc-stripe"><label>Numéro de carte</label><div id="stripeCardNumber" class="don-stripe"></div></div>' +
            '  <div class="don-grille-champs">' +
            '    <div class="don-bloc-stripe"><label>Expiration</label><div id="stripeCardExpiry" class="don-stripe"></div></div>' +
            '    <div class="don-bloc-stripe"><label>CVC</label><div id="stripeCardCvc" class="don-stripe"></div></div>' +
            '  </div>' +
            '  <div class="don-securite"><span>&#128274;</span> Paiement sécurisé par Stripe — vos données sont chiffrées et protégées.</div>' +
            '</div>' +

            erreurHtml +

            '<button type="submit" class="don-soumettre" ' + (finalAmount() < 1 ? "disabled" : "") + '>Faire un don de ' + montantTexte() + (etat.recurring ? " / mois" : "") + '</button>' +

            '<p class="don-mentions">En faisant ce don, vous acceptez les <a href="#" onclick="return false">conditions d\'utilisation</a> d\'Afriregister. Reçu fiscal disponible sur demande.</p>' +
            '</form>';

        creerElementsStripe();
        cardNumber.mount("#stripeCardNumber");
        cardExpiry.mount("#stripeCardExpiry");
        cardCvc.mount("#stripeCardCvc");

        var form = document.getElementById("donForm");
        form.onsubmit = function (e) { e.preventDefault(); donSoumettre(); };
    }

    window.donSetCause = function (id) { etat.cause = id; rendre(); };
    window.donSetMontant = function (v) { etat.isCustom = false; etat.amount = v; etat.customAmount = ""; rendre(); };
    window.donSetPersonnalise = function (v) { etat.isCustom = true; etat.customAmount = v; rendre(); };
    window.donSetDevise = function (v) { etat.currency = v; rendre(); };
    window.donToggleRecurrent = function () { etat.recurring = !etat.recurring; rendre(); };
    window.donToggleAnonyme = function (v) { etat.anonymous = v; if (v) { etat.firstName = ""; etat.lastName = ""; } rendre(); };
    function nomPaysPourCode(code) {
        var p = etat.countries.filter(function (c) { return c.cca2 === code; })[0];
        return p ? p.name.common : "";
    }
    etat.universityHint = function () {
        if (etat.loadingUniversities) return "Chargement des universités...";
        if (!etat.country) return "Sélectionnez d'abord un pays";
        if (!etat.universities.length) return "Aucune université trouvée";
        return "Sélectionnez votre université";
    };
    window.donSetChamp = function (champ, v) {
        etat[champ] = v;
        if (champ === "country") {
            etat.countryName = nomPaysPourCode(v);
            etat.university = "";
            etat.universities = [];
            if (v) {
                chargerUniversites(etat.countryName);
            } else {
                etat.loadingUniversities = false;
                rendre();
            }
        }
    };

    function chargerUniversites(nomPays) {
        etat.loadingUniversities = true;
        etat.universities = [];
        rendre();
        fetch("https://universities.hipolabs.com/search?country=" + encodeURIComponent(nomPays))
            .then(function (r) { return r.json(); })
            .then(function (data) {
                etat.universities = (data || []).map(function (u) {
                    return { name: u.name };
                }).sort(function (a, b) { return a.name.localeCompare(b.name); });
                etat.loadingUniversities = false;
                rendre();
            })
            .catch(function () { etat.loadingUniversities = false; rendre(); });
    }
    window.donReinit = function () {
        etat.etape = "form"; etat.erreur = "";
        rendre();
    };

    var SHEET_URL = "https://script.google.com/macros/s/AKfycbwWZcJcsT-kL627yKrj234JacDl-hhAFFYpAXvrjHgIg-lx4c6XCDsX-0WIPBGIDxVD/exec";

    async function donSoumettre() {
        if (finalAmount() < 1) { etat.erreur = "Le montant minimum est 1 " + etat.currency + "."; rendre(); return; }
        if (!etat.email || !etat.country || !etat.university) { etat.erreur = "Veuillez remplir tous les champs obligatoires."; rendre(); return; }
        etat.etape = "processing"; etat.erreur = ""; rendre();
        enregistrerDon();
        try {
            var res = await stripe.createPaymentMethod({
                type: "card",
                card: cardNumber,
                billing_details: {
                    name: etat.anonymous ? "Donateur anonyme" : (etat.firstName + " " + etat.lastName).trim(),
                    email: etat.email,
                    phone: etat.phone,
                    address: { country: etat.country }
                }
            });
            if (res.error) {
                etat.etape = "error"; etat.erreur = res.error.message || "Erreur lors du paiement."; rendre();
            } else {
                // paymentMethod.id serait envoyé à ton backend (Afriregister / Stripe)
                console.log("PaymentMethod créé:", res.paymentMethod.id);
                console.log("Afriregister params:", {
                    amount: finalAmount(), currency: etat.currency, cause: etat.cause,
                    donor: etat.anonymous ? null : { firstName: etat.firstName, lastName: etat.lastName, email: etat.email, phone: etat.phone, country: etat.country },
                    recurring: etat.recurring, message: etat.message, paymentMethodId: res.paymentMethod.id,
                    metadata: { source: "virunga-donation-form", project: "parc_national_virunga" }
                });
                etat.etape = "success"; rendre();
            }
        } catch (err) {
            etat.etape = "error"; etat.erreur = err.message || "Une erreur est survenue."; rendre();
        }
    }

    function enregistrerDon() {
        var corps = {
            firstName: etat.firstName,
            lastName: etat.lastName,
            email: etat.email,
            phone: etat.phone,
            country: etat.countryName || etat.country,
            university: etat.university,
            message: etat.message,
            amount: finalAmount(),
            currency: etat.currency,
            cause: causeLabel()
        };
        fetch(SHEET_URL, {
            method: "POST",
            mode: "no-cors",
            body: JSON.stringify(corps),
            headers: { "Content-Type": "text/plain;charset=utf-8" }
        }).catch(function () {});
    }

    fetch("https://countriesnow.space/api/v0.1/countries/flag/images")
        .then(function (r) { return r.json(); })
        .then(function (res) {
            etat.countries = (res && res.data || []).map(function (c) {
                return { name: { common: c.name }, cca2: c.iso2, flag: c.flag };
            }).sort(function (a, b) { return a.name.common.localeCompare(b.name.common); });
            etat.loadingCountries = false;
            rendre();
        })
        .catch(function () { etat.loadingCountries = false; rendre(); });

    rendre();
})();
</script>

<?php require '../includes/footer.php'; ?>
