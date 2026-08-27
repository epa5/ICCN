document.addEventListener('DOMContentLoaded', function () {
    const boutonHamburger = document.getElementById('menuHamburger');
    const menu = document.getElementById('menuPrincipal');
    const header = document.querySelector('.site-header');

    /* ---- Hamburger toggle ---- */
    if (boutonHamburger && menu) {
        boutonHamburger.addEventListener('click', () => {
            menu.classList.toggle('ouvert');
            const icone = boutonHamburger.querySelector('i');
            icone.classList.toggle('fa-bars');
            icone.classList.toggle('fa-xmark');
        });

        menu.querySelectorAll('a').forEach(lien => {
            lien.addEventListener('click', () => {
                menu.classList.remove('ouvert');
                boutonHamburger.querySelector('i').classList.add('fa-bars');
                boutonHamburger.querySelector('i').classList.remove('fa-xmark');
            });
        });
    }

    /* ---- Header scroll effect ---- */
    if (header) {
        const appliquerScroll = () => {
            header.classList.toggle('header-scrolle', window.scrollY > 40);
        };
        window.addEventListener('scroll', appliquerScroll, { passive: true });
        appliquerScroll();
    }
});