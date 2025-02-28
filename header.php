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
                <button class="md:hidden p-2 z-50 relative" id="mobile-menu-button" aria-label="Meny">
                    <svg class="w-8 h-8 menu-icon transition-all duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path class="menu-bars transition-all duration-300" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path class="menu-close hidden transition-all duration-300" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </nav>

            <!-- Mobil meny -->
            <div class="md:hidden fixed inset-0 bg-white/95 backdrop-blur-sm transform transition-transform duration-300 ease-in-out translate-x-full" id="mobile-menu">
                <div class="h-full flex flex-col justify-center items-center space-y-8 text-center p-6">
                    <a href="#" class="text-gray-800 hover:text-[#00865a] transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-green-700 hover:after:w-full after:transition-all">
                        Meny
                    </a>
                    <a href="#" class="text-gray-800 hover:text-[#00865a] transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-green-700 hover:after:w-full after:transition-all">
                        Om oss
                    </a>
                    <a href="#" class="text-gray-800 hover:text-[#00865a] transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0.5 after:bg-green-700 hover:after:w-full after:transition-all">
                        Reviews
                    </a>
                    <a href="#" class="text-gray-800 hover:text-[#00865a] transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-green-700 hover:after:w-full after:transition-all">
                        Hitta oss
                    </a>
                    <a href="#" class="text-gray-800 hover:text-[#00865a] transition-colors duration-200 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-green-700 hover:after:w-full after:transition-all">
                        Link
                    </a>
                </div>
            </div>
        </div>
    </header>
