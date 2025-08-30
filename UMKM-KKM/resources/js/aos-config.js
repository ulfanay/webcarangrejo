// AOS (Animate On Scroll) Configuration
import AOS from 'aos';
import 'aos/dist/aos.css';

// Initialize AOS with custom settings
export function initAOS() {
    AOS.init({
        // Global settings:
        disable: 'mobile', // disable on mobile devices
        startEvent: 'DOMContentLoaded',
        initClassName: 'aos-init',
        animatedClassName: 'aos-animate',
        useClassNames: false,
        disableMutationObserver: false,
        debounceDelay: 50,
        throttleDelay: 99,
        
        // Settings that can be overridden on per-element basis
        offset: 100, // offset (in px) from the original trigger point
        delay: 100, // values from 0 to 3000, with step 50ms
        duration: 1000, // values from 0 to 3000, with step 50ms
        easing: 'ease-in-out-cubic', // easing for AOS animations
        once: true, // whether animation should happen only once
        mirror: false, // whether elements should animate out while scrolling past them
        anchorPlacement: 'top-bottom',
    });
}

// Reinitialize AOS for dynamic content
export function refreshAOS() {
    AOS.refresh();
}

// Auto initialize on DOM ready
document.addEventListener('DOMContentLoaded', initAOS);
