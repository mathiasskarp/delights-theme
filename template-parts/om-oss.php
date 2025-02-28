<?php
declare(strict_types=1);

// Hämta ACF-fält
$om_oss_rubrik = get_field('om_oss_rubrik');
$om_oss_text   = get_field('om_oss_text');
$om_oss_bild   = get_field('om_oss_bild');

// Säkerhetskontroll för bilden
$bild_url = ! empty($om_oss_bild['url']) ? esc_url($om_oss_bild['url']) : '';
$bild_alt = ! empty($om_oss_bild['alt']) ? esc_attr($om_oss_bild['alt']) : 'Om oss bild';
?>

<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="flex flex-wrap items-center -mx-4">
            <!-- Textinnehåll -->
            <div class="w-full lg:w-1/2 px-4 lg:mb-0">
            <h2 class="text-[clamp(2.75rem,6vw,3.75rem)] font-semi-bold leading-none mb-6">
    <?php echo esc_html($om_oss_rubrik); ?>
</h2>
                <div class="text-[clamp(1rem,1.2vw,1.125rem)] text-gray-600 leading-relaxed">
                    <?php echo wp_kses_post($om_oss_text); ?>
                </div>
            </div>
            
           <!-- Bild -->
<div class="w-full lg:w-1/2 px-4">
    <div class="relative w-full pt-[100%]"> 
        <?php if ($bild_url) : ?>
            <img 
                src="<?php echo $bild_url; ?>"
                alt="<?php echo $bild_alt; ?>"
                class="absolute inset-0 w-full h-full object-cover rounded-3xl"
            >
        <?php endif; ?>
    </div>
</div>
        </div>
    </div>
</section> 