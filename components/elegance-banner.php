<?php
/**
 * Redefining Elegance Banner Component
 * Text on left, image on right
 */
$bannerTitle = $bannerTitle ?? 'Redefining Elegance with Unique Charms';
$bannerDescription = $bannerDescription ?? 'Fun Lorem Ipsum text may appear in any size and font to simulate everything you create for your campaigns.';
$bannerImage = $bannerImage ?? '/assets/images/elegance-banner.jpg';
$buttonText = $buttonText ?? 'Shop Diamonds';
$buttonUrl = $buttonUrl ?? '#';
?>
<section class="relative py-20 lg:py-24 px-4 bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 text-white overflow-hidden">
    <!-- Background decorative elements -->
    <div class="absolute right-0 top-0 w-1/2 h-full opacity-20">
        <div class="absolute right-0 top-0 w-96 h-96 bg-blue-400 rounded-full blur-3xl"></div>
        <div class="absolute right-1/4 top-1/4 w-64 h-64 bg-indigo-400 rounded-full blur-2xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left side - Text Content -->
            <div class="order-2 lg:order-1">
                <h2 class="text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                    <?php echo htmlspecialchars($bannerTitle); ?>
                </h2>
                <p class="text-lg lg:text-xl text-blue-100 mb-8 leading-relaxed">
                    <?php echo htmlspecialchars($bannerDescription); ?>
                </p>
                <a href="<?php echo htmlspecialchars($buttonUrl); ?>" 
                   class="inline-block bg-white text-blue-900 px-8 py-4 rounded-lg font-semibold hover:bg-blue-50 transition-colors">
                    <?php echo htmlspecialchars($buttonText); ?>
                </a>
            </div>
            
            <!-- Right side - Image -->
            <div class="relative order-1 lg:order-2">
                <?php if (isset($bannerImage) && file_exists(__DIR__ . '/..' . $bannerImage)): ?>
                    <img src="<?php echo htmlspecialchars($bannerImage); ?>" 
                         alt="<?php echo htmlspecialchars($bannerTitle); ?>"
                         class="w-full h-auto rounded-lg shadow-2xl">
                <?php else: ?>
                    <div class="w-full aspect-[4/5] bg-blue-700 rounded-lg shadow-2xl flex items-center justify-center">
                        <span class="text-blue-300">Banner Image</span>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
