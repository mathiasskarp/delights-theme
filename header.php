<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="bg-white shadow-sm fixed w-full z-50 transition-all duration-300" id="main-header">
        <div class="container mx-auto px-4">
            <nav class="flex justify-between items-center h-24">
<!-- Logotyp -->
<div class="h-[clamp(3rem,5vw,6rem)] flex items-center">
    <a href="<?php echo home_url(); ?>" class="text-[clamp(1.5rem,3vw,2.5rem)] font-bold" style="color: #00865a; font-family: 'Poppins', sans-serif;">
        Delights
    </a>
</div>
                
                <!-- Huvudmeny -->
                <div class="hidden md:flex space-x-12">
                    <a href="#" class="text-gray-600 hover:text-gray-900 transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-green-700 hover:after:w-full after:transition-all">Meny</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900 transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-green-700 hover:after:w-full after:transition-all">Om oss</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900 transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-green-700 hover:after:w-full after:transition-all">Reviews</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900 transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-green-700 hover:after:w-full after:transition-all">Hitta oss</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900 transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-green-700 hover:after:w-full after:transition-all">Link</a>
                </div>

                <!-- Mobilmeny-knapp -->
                <button class="md:hidden p-2" id="mobile-menu-button" aria-label="Meny">
                    <svg class="w-6 h-6 menu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path class="menu-bars" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path class="menu-close hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </nav>

            <!-- Mobil meny -->
            <div class="md:hidden hidden bg-white" id="mobile-menu">
                <div class="py-3">
                    <a href="#" class="block py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 transition-colors duration-200">Meny</a>
                    <a href="#" class="block py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 transition-colors duration-200">Om oss</a>
                    <a href="#" class="block py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 transition-colors duration-200">Reviews</a>
                    <a href="#" class="block py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 transition-colors duration-200">Hitta oss</a>
                    <a href="#" class="block py-2 text-gray-600 hover:text-gray-900 hover:bg-gray-50 transition-colors duration-200">Link</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Lägg till padding-top för att kompensera för fixed header -->