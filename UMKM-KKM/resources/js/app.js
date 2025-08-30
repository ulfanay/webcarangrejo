import './bootstrap';
import { initAOS, refreshAOS } from './aos-config';

// Initialize AOS when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    initAOS();
});

// Reinitialize AOS after Livewire updates (if using Livewire)
if (window.Livewire) {
    window.Livewire.hook('message.processed', () => {
        refreshAOS();
    });
}
