<?php
declare(strict_types=1);

// Hämta ACF-fält
$hero_image       = get_field('hero_bild');
$hero_title       = get_field('hero_rubrik');
$hero_subtitle    = get_field('hero_underrubrik');
$hero_button_text = get_field('hero_knapp_text');
$peach_icon      = get_field('peach_icon');

// Sätt fallback-värden om något av fälten är tomt
$hero_title       = $hero_title ?: 'Brunch är gott!';
$hero_subtitle    = $hero_subtitle ?: 'Brunch som berör, smaker, gemenskap och goda stunder';
$hero_button_text = $hero_button_text ?: 'Button';

// Säkerhetskontroll för bilderna
$hero_image_url = ! empty($hero_image['url']) ? esc_url($hero_image['url']) : '';
$hero_image_alt = ! empty($hero_image['alt']) ? esc_attr($hero_image['alt']) : 'Hero Image';
$icon_url      = ! empty($peach_icon['url']) ? esc_url($peach_icon['url']) : '';
$icon_alt      = ! empty($peach_icon['alt']) ? esc_attr($peach_icon['alt']) : 'Peach Icon';
?>

<section 
    class="hero bg-cover bg-center min-h-[85vh] flex items-center justify-start text-black mb-6" 
    style="background-image: url('<?php echo $hero_image_url; ?>');"
>
    <div class="container mx-auto px-4">
        <div class="bg-white rounded-3xl shadow-lg p-8 max-w-lg fade-in-up">
            <!-- Peach-ikon (från ACF) -->
            <?php if ($icon_url) : ?>
            <div class="mb-2">
                <img 
                    src="<?php echo $icon_url; ?>"
                    alt="<?php echo $icon_alt; ?>"
                    class="w-[clamp(4rem,12vw,6rem)] h-auto"
                >
            </div>
            <?php endif; ?>
            
            <!-- Rubrik -->
            <h1 class="text-[clamp(2rem,5vw,3.5rem)] font-bold mb-2">
                <?php echo esc_html($hero_title); ?>
            </h1>
            
            <!-- Underrubrik -->
            <p class="text-[clamp(1.25rem,1.5vw,1.5rem)] text-gray-600 mb-6">
                <?php echo esc_html($hero_subtitle); ?>
            </p>
            
            <!-- Knapp -->
            <a 
                href="#"
                class="inline-block text-white px-8 py-2 rounded-full transition-colors duration-200"
                style="background-color: #00865a;"
                onmouseover="this.style.backgroundColor='#006f4a';"
                onmouseout="this.style.backgroundColor='#00865a';"
            >
                <?php echo esc_html($hero_button_text); ?>
            </a>
        </div>
    </div>
</section>