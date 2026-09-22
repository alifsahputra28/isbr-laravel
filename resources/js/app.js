import { HSStaticMethods } from 'preline/non-auto';

window.HSStaticMethods = HSStaticMethods;

const initializePreline = () => HSStaticMethods.autoInit();

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initializePreline, { once: true });
} else {
    initializePreline();
}
