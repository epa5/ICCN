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

    <!-- Bouton WhatsApp simple -->
    <a href="https://wa.me/243971127831?text=<?php echo rawurlencode('Bonjour, je souhaite des informations sur le Parc National des Virunga.'); ?>"
       target="_blank" rel="noopener noreferrer" aria-label="Discuter sur WhatsApp"
       style="position:fixed; bottom:24px; right:24px; z-index:9999; width:60px; height:60px;
              background:#25D366; border-radius:50%; display:flex; align-items:center; justify-content:center;
              box-shadow:0 4px 14px rgba(0,0,0,.35); transition:transform .2s;"
       onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
        <svg viewBox="0 0 32 32" width="32" height="32" fill="#fff" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 3C9.4 3 4 8.4 4 15c0 2.1.6 4.2 1.7 6L4 29l8.2-1.6c1.2.6 2.5.9 3.8.9h0c6.6 0 12-5.4 12-12S22.6 3 16 3zm0 21.9c-1.2 0-2.3-.3-3.4-.8l-.7-.4-4.9 1 1-4.7-.4-.7c-.7-1.1-1-2.4-1-3.7 0-5.2 4.2-9.4 9.4-9.4s9.4 4.2 9.4 9.4-4.2 9.3-9.4 9.3zm5.2-7c-.3-.1-1.7-.9-2-1-.3-.1-.5-.1-.7.1-.2.3-.7 1-.9 1.2-.2.2-.3.2-.6.1-.3-.1-1.2-.5-2.3-1.4-.9-.8-1.4-1.7-1.6-2-.2-.3 0-.5.1-.6l.4-.5c.1-.2.2-.3.3-.5.1-.2 0-.4 0-.5 0-.1-.7-1.7-.9-2.3-.2-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1 1-1 2.5s1.1 2.9 1.2 3.1c.1.2 2.1 3.3 5.2 4.6.7.3 1.3.5 1.7.6.7.2 1.4.2 1.9.1.6-.1 1.7-.7 1.9-1.4.2-.7.2-1.3.2-1.4-.1-.1-.3-.2-.6-.3z"/>
        </svg>
    </a>

    <script src="../assets/js/menu.js"></script>
</body>
</html>