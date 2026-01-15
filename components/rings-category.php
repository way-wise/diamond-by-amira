<?php
/**
 * Most Selling Rings Category Component
 * Category names shown below images
 */
$sectionTitle = $sectionTitle ?? 'Most Selling Rings Category';
$sectionDescription = $sectionDescription ?? 'Explore our most popular ring categories.';
$ringCategories = $ringCategories ?? [
    ['name' => 'Engagement Rings', 'image' => '/assets/images/engagement-rings.jpg', 'url' => '#'],
    ['name' => 'Wedding Bands', 'image' => '/assets/images/wedding-bands.jpg', 'url' => '#'],
    ['name' => 'Cocktail Rings', 'image' => '/assets/images/cocktail-rings.jpg', 'url' => '#'],
    ['name' => 'Eternity Rings', 'image' => '/assets/images/eternity-rings.jpg', 'url' => '#']
];
$seeAllUrl = $seeAllUrl ?? '#';
?>
<section class="py-16 px-4 bg-white">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-start mb-10">
            <div>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-3">
                    <?php echo htmlspecialchars($sectionTitle); ?>
                </h2>
                <p class="text-gray-600 text-base">
                    <?php echo htmlspecialchars($sectionDescription); ?>
                </p>
            </div>
            <a href="<?php echo htmlspecialchars($seeAllUrl); ?>" 
               class="text-gray-900 font-semibold hover:underline hidden lg:block text-base">
                See All
            </a>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <?php foreach ($ringCategories as $category): ?>
                <a href="<?php echo htmlspecialchars($category['url']); ?>" 
                   class="group">
                    <div class="relative overflow-hidden rounded-lg aspect-square bg-gray-100 mb-3 hover:shadow-lg transition-shadow">
                        <?php if (isset($category['image']) && file_exists(__DIR__ . '/..' . $category['image'])): ?>
                            <img src="<?php echo htmlspecialchars($category['image']); ?>" 
                                 alt="<?php echo htmlspecialchars($category['name']); ?>"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <?php else: ?>
                            <div class="w-full h-full flex items-center justify-center bg-gray-200">
                                <span class="text-gray-400 text-sm text-center px-2"><?php echo htmlspecialchars($category['name']); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <p class="text-center text-gray-900 font-medium text-sm">
                        <?php echo htmlspecialchars($category['name']); ?>
                    </p>
                </a>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center mt-8 lg:hidden">
            <a href="<?php echo htmlspecialchars($seeAllUrl); ?>" 
               class="text-gray-900 font-semibold hover:underline text-base">
                See All
            </a>
        </div>
    </div>
</section>
