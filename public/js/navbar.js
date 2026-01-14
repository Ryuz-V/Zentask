// public/js/navbar.js

// Toggle mobile menu
function initNavbar() {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // Efek scroll pada navbar
    const nav = document.querySelector('nav.liquid-glass');
    if (nav) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 10) {
                nav.classList.add('shadow-lg');
            } else {
                nav.classList.remove('shadow-lg');
            }
        });
    }
}

// Jalankan fungsi saat halaman selesai dimuat
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initNavbar);
} else {
    initNavbar();
}
