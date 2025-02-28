<?php declare(strict_types=1); ?>

<section 
    class="hero bg-cover bg-center min-h-[85vh] flex items-center justify-start text-black mb-6" 
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/text-bild.webp');"
>
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-3xl shadow-lg p-8 max-w-lg fade-in-up">
            <!-- Delights-ikon -->
            <div class="mb-2">
                <img 
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/delights.webp"
                    alt="Delights Icon"
                    class="w-[clamp(4rem,12vw,6rem)] h-auto"
                >
            </div>
            
            <!-- Rubrik -->
            <h1 class="text-[clamp(2rem,5vw,3.5rem)] font-bold mb-2">
                Brunch är gott!
            </h1>
            
            <!-- Underrubrik -->
            <p class="text-[clamp(1.25rem,1.5vw,1.5rem)] text-gray-600 mb-6">
                Brunch som berör, smaker, gemenskap och goda stunder
            </p>
            
            <!-- Knapp -->
            <a 
                href="#"
                class="inline-block text-white px-8 py-2 rounded-full transition-colors duration-200"
                style="background-color: #00865a;"
                onmouseover="this.style.backgroundColor='#006f4a';"
                onmouseout="this.style.backgroundColor='#00865a';"
            >
                Button
            </a>
        </div>
    </div>
</section>