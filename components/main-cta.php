<?php
/**
 * Your Perfect Diamond Awaits Banner Component
 */
$bannerTitle = $bannerTitle ?? 'Your Perfect Diamond Awaits';
$bannerDescription = $bannerDescription ?? 'Whether you\'re choosing a certified loose diamond or a timeless piece of jewellery, find exceptional brilliance, trusted quality, and craftsmanship made to last forever.';
$buttonText = $buttonText ?? 'Explore the Collection';
$buttonUrl = $buttonUrl ?? '#';
?>
<section class="relative py-20 px-4 bg-black text-white overflow-hidden">
    <!-- Background texture -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, white 1px, transparent 0); background-size: 40px 40px;"></div>
    </div>
    
    <div class="max-w-4xl mx-auto text-center relative z-10">
        <h2 class="text-4xl lg:text-5xl font-bold mb-6">
            <?php echo htmlspecialchars($bannerTitle); ?>
        </h2>
        <p class="text-lg lg:text-xl text-gray-300 mb-8 max-w-2xl mx-auto">
            <?php echo htmlspecialchars($bannerDescription); ?>
        </p>
        <a href="<?php echo htmlspecialchars($buttonUrl); ?>" 
           class="inline-flex items-center gap-2 bg-white text-black px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors group">
            <?php echo htmlspecialchars($buttonText); ?>
            <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
            </svg>
        </a>
    </div>
</section>
