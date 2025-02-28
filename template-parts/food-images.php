<?php
// Hämta bilderna från ACF
$upper_image_1 = get_field('food_upper_image_1');
$upper_image_2 = get_field('food_upper_image_2');
$lower_image_1 = get_field('food_lower_image_1');
$lower_image_2 = get_field('food_lower_image_2');
$lower_image_3 = get_field('food_lower_image_3');

// Sätt fallback-värden om bilder saknas
$upper_image_1_url = !empty($upper_image_1['url']) ? esc_url($upper_image_1['url']) : '';
$upper_image_1_alt = !empty($upper_image_1['alt']) ? esc_attr($upper_image_1['alt']) : 'Upper Image 1';

$upper_image_2_url = !empty($upper_image_2['url']) ? esc_url($upper_image_2['url']) : '';
$upper_image_2_alt = !empty($upper_image_2['alt']) ? esc_attr($upper_image_2['alt']) : 'Upper Image 2';

$lower_image_1_url = !empty($lower_image_1['url']) ? esc_url($lower_image_1['url']) : '';
$lower_image_1_alt = !empty($lower_image_1['alt']) ? esc_attr($lower_image_1['alt']) : 'Lower Image 1';

$lower_image_2_url = !empty($lower_image_2['url']) ? esc_url($lower_image_2['url']) : '';
$lower_image_2_alt = !empty($lower_image_2['alt']) ? esc_attr($lower_image_2['alt']) : 'Lower Image 2';

$lower_image_3_url = !empty($lower_image_3['url']) ? esc_url($lower_image_3['url']) : '';
$lower_image_3_alt = !empty($lower_image_3['alt']) ? esc_attr($lower_image_3['alt']) : 'Lower Image 3';
?>

<section class="food-images py-10 bg-white mb-12">
  <div class="container mx-auto px-4">
    <h2 class="text-[clamp(2rem,4vw,2.5rem)] font-semi-bold text-left mb-4">
      Food images
    </h2>
    
    <!-- Övergripande grid-container -->
    <div class="grid gap-6">
      
      <!-- Övre raden: 
           - 1 kolumn på mobil (sm) 
           - 2 kolumner på surfplatta (md) 
           - 2.5fr / 1.5fr på desktop (lg) för 75/25-fördelning -->
      <div class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-[2.5fr_1.5fr]">
        
        <!-- Första bilden (75%) -->
        <?php if ($upper_image_1_url): ?>
          <div class="relative h-[clamp(15rem,30vw,25rem)]">
            <img
              class="w-full h-full object-cover rounded-3xl"
              src="<?php echo $upper_image_1_url; ?>"
              alt="<?php echo $upper_image_1_alt; ?>"
            >
          </div>
        <?php endif; ?>

        <!-- Andra bilden (25%) -->
        <?php if ($upper_image_2_url): ?>
          <div class="relative h-[clamp(15rem,30vw,25rem)]">
            <img
              class="w-full h-full object-cover rounded-3xl"
              src="<?php echo $upper_image_2_url; ?>"
              alt="<?php echo $upper_image_2_alt; ?>"
            >
          </div>
        <?php endif; ?>

      </div>
      
      <!-- Nedre raden:
           - 1 kolumn på mobil (sm)
           - 2 kolumner på surfplatta (md)
           - 12 kolumner på desktop (lg) för mosaik
             * Första bilden: col-span-5
             * Andra bilden: col-span-3
             * Tredje bilden: col-span-4 -->
      <div class="grid gap-6 grid-cols-1 md:grid-cols-2 lg:grid-cols-12">
        
        <!-- Första bilden (5/12) -->
        <?php if ($lower_image_1_url): ?>
          <div class="relative lg:col-span-5 md:col-span-1 h-[clamp(15rem,30vw,25rem)]">
            <img
              class="w-full h-full object-cover rounded-3xl"
              src="<?php echo $lower_image_1_url; ?>"
              alt="<?php echo $lower_image_1_alt; ?>"
            >
          </div>
        <?php endif; ?>
        
        <!-- Andra bilden (3/12) -->
        <?php if ($lower_image_2_url): ?>
          <div class="relative lg:col-span-3 md:col-span-1 h-[clamp(15rem,30vw,25rem)]">
            <img
              class="w-full h-full object-cover rounded-3xl"
              src="<?php echo $lower_image_2_url; ?>"
              alt="<?php echo $lower_image_2_alt; ?>"
            >
          </div>
        <?php endif; ?>
        
        <!-- Tredje bilden (4/12) -->
        <?php if ($lower_image_3_url): ?>
          <div class="relative lg:col-span-4 md:col-span-2 h-[clamp(15rem,30vw,25rem)]">
            <img
              class="w-full h-full object-cover rounded-3xl"
              src="<?php echo $lower_image_3_url; ?>"
              alt="<?php echo $lower_image_3_alt; ?>"
            >
          </div>
        <?php endif; ?>
      </div>
      
    </div>
  </div>
</section>