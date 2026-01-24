/**
 * Component Loader
 * Dynamically loads Navbar and Footer, and handles active states.
 */

document.addEventListener('DOMContentLoaded', async () => {
    // 1. Load Navbar
    await loadComponent('navbar-placeholder', 'components/navbar.html');

    // 2. Load Footer
    await loadComponent('footer-placeholder', 'components/footer.html');

    // 3. Highlight Active Link
    setActiveLink();

    // 4. Re-initialize Mobile Toggle (since it was just injected)
    initMobileNav();
});

async function loadComponent(elementId, filePath) {
    const element = document.getElementById(elementId);
    if (!element) return;

    try {
        const response = await fetch(filePath);
        if (response.ok) {
            const html = await response.text();
            element.innerHTML = html;
        } else {
            console.error(`Failed to load ${filePath}: ${response.status}`);
        }
    } catch (error) {
        console.error(`Error loading component ${filePath}:`, error);
    }
}

function setActiveLink() {
    // Get current filename (e.g., 'index.html', 'about.html')
    // If path is just '/', assume index.html
    let currentPath = window.location.pathname.split('/').pop() || 'index.html';

    // Select all nav links
    const navLinks = document.querySelectorAll('.nav-links a');

    navLinks.forEach(link => {
        const linkPath = link.getAttribute('href');

        // Exact match (e.g., 'services.html' matches 'services.html')
        if (linkPath === currentPath) {
            link.classList.add('active');

            // If it's inside a dropdown, highlight the parent too
            const parentDropdown = link.closest('.dropdown');
            if (parentDropdown) {
                const parentLink = parentDropdown.querySelector('.dropdown-toggle') || parentDropdown.querySelector('a');
                if (parentLink) parentLink.classList.add('active');
            }
        }
    });

    // Special case for Projects Dropdown parents if not handled above
    if (currentPath === 'projects.html') {
        const projectsLink = document.querySelector('a[href="projects.html"]');
        if (projectsLink) projectsLink.classList.add('active');
    }
}

function initMobileNav() {
    const navToggle = document.getElementById('navToggle');
    const navLinks = document.getElementById('navLinks');

    if (navToggle && navLinks) {
        // Clone and replace to remove any old event listeners if called multiple times
        const newToggle = navToggle.cloneNode(true);
        navToggle.parentNode.replaceChild(newToggle, navToggle);

        newToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            newToggle.classList.toggle('active');
        });
    }
}
