</main>

    <footer class="site-footer">
        <div class="footer-colonnes">

            <div class="footer-colonne footer-marque">
                <div class="footer-logo">
                    <img src="../assets/images/iccn_logo.png" alt="Logo ICCN - Institut Congolais pour la Conservation de la Nature">
                    <img src="../assets/images/virunga_logo.png" alt="Logo virunga - speciffite unique du park">
                    <img src="../assets/images/drapeau.png" alt="Drapeau de la République Démocratique du Congo">
                    <span>Parc National des Virunga</span>
                </div>
                <p>Le plus ancien parc national d'Afrique, sanctuaire de la biodiversité et patrimoine mondial de l'UNESCO en République Démocratique du Congo.</p>

                <div class="reseaux-sociaux">
                    <a href="https://www.facebook.com/virunga" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="https://twitter.com/virunga" target="_blank" rel="noopener noreferrer" aria-label="Twitter / X">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com/virunga" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="https://www.youtube.com/virunga" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>
            </div>

            <div class="footer-colonne">
                <h3>Navigation</h3>
                <ul>
                    <li><a href="a-propos.php">À Propos</a></li>
                    <li><a href="faune-flore.php">Faune &amp; Flore</a></li>
                    <li><a href="galerie.php">Galerie</a></li>
                    <li><a href="nyiragongo.php">Carte du Parc</a></li>
                </ul>
            </div>

            <div class="footer-colonne">
                <h3>Attractions</h3>
                <ul>
                    <li><a href="nyiragongo.php">Volcan Nyiragongo</a></li>
                    <li><a href="rwenzori.php">Monts Rwenzori</a></li>
                    <li><a href="faune-flore.php">Gorilles des Montagnes</a></li>
                    <li><a href="faune-flore.php">Okapis</a></li>
                </ul>
            </div>

            <div class="footer-colonne">
                <h3>Contact</h3>
                <ul class="contact-liste">
                    <li><i class="fa-solid fa-location-dot"></i> Goma, Nord-Kivu, RDC</li>
                    <li><i class="fa-solid fa-phone"></i> +243 (0) 81 234 5678</li>
                    <li><i class="fa-solid fa-envelope"></i> info@virunga.org</li>
                    <li><i class="fa-solid fa-globe"></i> www.virunga.org</li>
                </ul>
            </div>

        </div>

        <div class="footer-bas">
            <p>&copy; <?php echo date("Y"); ?> Parc National des Virunga — Géré par l'ICCN. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Chat integre relie a WhatsApp (Twilio) -->
    <?php require_once __DIR__ . '/chat-widget.php'; ?>

    <script src="../assets/js/menu.js"></script>
</body>
</html>