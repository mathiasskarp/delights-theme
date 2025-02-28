// main.js
document.addEventListener('DOMContentLoaded', () => {
    // Mobilmeny-funktionalitet
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuBars = document.querySelector('.menu-bars');
    const menuClose = document.querySelector('.menu-close');
    let isMenuOpen = false;

    function toggleMenu() {
        isMenuOpen = !isMenuOpen;
        
        // Toggle menu visibility
        if (isMenuOpen) {
            mobileMenu.classList.remove('translate-x-full');
            mobileMenu.classList.add('translate-x-0');
            document.body.style.overflow = 'hidden'; // Prevent scrolling when menu is open
        } else {
            mobileMenu.classList.remove('translate-x-0');
            mobileMenu.classList.add('translate-x-full');
            document.body.style.overflow = ''; // Restore scrolling
        }

        // Toggle icon visibility
        menuBars.classList.toggle('hidden');
        menuClose.classList.toggle('hidden');
    }

    mobileMenuButton.addEventListener('click', toggleMenu);

    // Close menu when clicking a link
    const mobileMenuLinks = mobileMenu.querySelectorAll('a');
    mobileMenuLinks.forEach(link => {
        link.addEventListener('click', toggleMenu);
    });

    // Header transparency on scroll
    const handleScroll = () => {
        if (window.scrollY > 0) {
            header.classList.add('bg-white/95', 'backdrop-blur-sm');
            header.classList.remove('bg-white');
        } else {
            header.classList.remove('bg-white/95', 'backdrop-blur-sm');
            header.classList.add('bg-white');
        }
    };

    window.addEventListener('scroll', handleScroll);
    
    console.log('Delights-temat är igång!');
});