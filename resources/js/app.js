import { HSStaticMethods } from 'preline/non-auto';

window.HSStaticMethods = HSStaticMethods;

const initializePreline = () => HSStaticMethods.autoInit();

const initializePublicNavbar = () => {
    const navbar = document.querySelector('[data-public-navbar][data-navbar-variant="overlay"]');

    if (!navbar) {
        return;
    }

    let ticking = false;

    const updateNavbar = () => {
        navbar.classList.toggle('is-scrolled', window.scrollY > 20);
        ticking = false;
    };

    const requestNavbarUpdate = () => {
        if (ticking) {
            return;
        }

        ticking = true;
        window.requestAnimationFrame(updateNavbar);
    };

    updateNavbar();
    window.addEventListener('scroll', requestNavbarUpdate, { passive: true });
};

const initializeApp = () => {
    initializePreline();
    initializePublicNavbar();
};

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializeApp, { once: true });
} else {
    initializeApp();
}
