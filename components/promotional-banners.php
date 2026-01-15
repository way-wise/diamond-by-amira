<?php
/**
 * Promotional Banners Component
 * Two side-by-side banners with proper layout
 */
$banners = $banners ?? [
    [
        'title' => 'Hurry! Flat 40% Off Ends Tonight!',
        'subtitle' => 'Grab Your Favorites Before The Clock Runs Out',
        'buttonText' => 'Shop Now',
        'buttonUrl' => '#',
        'image' => '/assets/images/promo1.jpg',
        'bgColor' => 'bg-white',
        'textColor' => 'text-gray-900'
    ],
    [
        'title' => 'Just Dropped Our New Collection!',
        'subtitle' => 'Be The First To Ship Exclusive Designs',
        'buttonText' => 'Explore Collection',
        'buttonUrl' => '#',
        'image' => '/assets/images/promo2.jpg',
        'bgColor' => 'bg-gray-900',
        'textColor' => 'text-white'
    ]
];
?>
<section class="py-16 px-4 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 gap-6">
            <?php foreach ($banners as $banner): ?>
                <div class="<?php echo htmlspecialchars($banner['bgColor']); ?> rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-shadow">
                    <div class="flex flex-col md:flex-row">
                        <div class="flex-1 p-8 lg:p-10 flex flex-col justify-center <?php echo htmlspecialchars($banner['textColor']); ?>">
                            <h3 class="text-2xl lg:text-3xl font-bold mb-3 leading-tight">
                                <?php echo htmlspecialchars($banner['title']); ?>
                            </h3>
                            <p class="text-base lg:text-lg mb-6 <?php echo $banner['bgColor'] === 'bg-white' ? 'text-gray-600' : 'text-gray-300'; ?>">
                                <?php echo htmlspecialchars($banner['subtitle']); ?>
                            </p>
                            <a href="<?php echo htmlspecialchars($banner['buttonUrl']); ?>" 
                               class="inline-block <?php echo $banner['bgColor'] === 'bg-white' ? 'bg-gray-900 text-white hover:bg-gray-800' : 'bg-white text-gray-900 hover:bg-gray-100'; ?> px-6 py-3 rounded-lg font-semibold transition-colors w-fit">
                                <?php echo htmlspecialchars($banner['buttonText']); ?>
                            </a>
                        </div>
                        <div class="flex-1 h-64 md:h-auto min-h-[250px]">
                            <?php if (isset($banner['image']) && file_exists(__DIR__ . '/..' . $banner['image'])): ?>
                                <img src="<?php echo htmlspecialchars($banner['image']); ?>" 
                                     alt="<?php echo htmlspecialchars($banner['title']); ?>"
                                     class="w-full h-full object-cover">
                            <?php else: ?>
                                <div class="w-full h-full bg-gray-300 flex items-center justify-center">
                                    <span class="text-gray-500">Image</span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
