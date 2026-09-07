// JS entry for Vite + Tailwind
import '../css/app.css';

// If bootstrap.js exists and is used for other bootstrapping, import it dynamically
import('./bootstrap').catch(() => {
    // bootstrap.js not present or failed to load; ignore
});

// Example: simple DOM-ready helper
document.addEventListener('DOMContentLoaded', () => {
    // placeholder for future JS
});
