// main.js
document.addEventListener('DOMContentLoaded', () => {
    // Mobilmeny-funktionalitet
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuBars = mobileMenuButton?.querySelector('.menu-bars');
    const menuClose = mobileMenuButton?.querySelector('.menu-close');
    const header = document.getElementById('main-header');

    if (mobileMenuButton && mobileMenu && menuBars && menuClose) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            menuBars.classList.toggle('hidden');
            menuClose.classList.toggle('hidden');
        });
    }

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