<?php
/**
 * Most Selling Product Component
 * Product grid section - 6 products in a row on desktop
 */
$sectionTitle = $sectionTitle ?? 'Most Selling Product';
$sectionDescription = $sectionDescription ?? 'Discover our most popular diamond jewelry pieces.';
$products = $products ?? [
    [
        'name' => 'Celeste Brilliance Solitaire Ring',
        'price' => 2499.00,
        'originalPrice' => 2435.00,
        'rating' => 5,
        'image' => '/assets/images/product1.jpg',
        'url' => '#'
    ],
    [
        'name' => 'Celeste Brilliance Solitaire Ring',
        'price' => 2499.00,
        'originalPrice' => 2435.00,
        'rating' => 5,
        'image' => '/assets/images/product2.jpg',
        'url' => '#'
    ],
    [
        'name' => 'Celeste Brilliance Solitaire Ring',
        'price' => 2499.00,
        'originalPrice' => 2435.00,
        'rating' => 5,
        'image' => '/assets/images/product3.jpg',
        'url' => '#'
    ],
    [
        'name' => 'Celeste Brilliance Solitaire Ring',
        'price' => 2499.00,
        'originalPrice' => 2435.00,
        'rating' => 5,
        'image' => '/assets/images/product4.jpg',
        'url' => '#'
    ],
    [
        'name' => 'Celeste Brilliance Solitaire Ring',
        'price' => 2499.00,
        'originalPrice' => 2435.00,
        'rating' => 5,
        'image' => '/assets/images/product5.jpg',
        'url' => '#'
    ],
    [
        'name' => 'Celeste Brilliance Solitaire Ring',
        'price' => 2499.00,
        'originalPrice' => 2435.00,
        'rating' => 5,
        'image' => '/assets/images/product6.jpg',
        'url' => '#'
    ]
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
        
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4 lg:gap-6">
            <?php foreach ($products as $product): ?>
                <a href="<?php echo htmlspecialchars($product['url']); ?>" 
                   class="group">
                    <div class="bg-gray-100 rounded-lg overflow-hidden aspect-square mb-3 hover:shadow-lg transition-shadow">
                        <?php if (isset($product['image']) && file_exists(__DIR__ . '/..' . $product['image'])): ?>
                            <img src="<?php echo htmlspecialchars($product['image']); ?>" 
                                 alt="<?php echo htmlspecialchars($product['name']); ?>"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <?php else: ?>
                            <div class="w-full h-full flex items-center justify-center bg-gray-200">
                                <span class="text-gray-400 text-xs">Product</span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <h3 class="text-sm font-semibold text-gray-900 mb-2 line-clamp-2 group-hover:text-gray-600 transition-colors">
                        <?php echo htmlspecialchars($product['name']); ?>
                    </h3>
                    <div class="flex items-center mb-2">
                        <?php for ($i = 0; $i < $product['rating']; $i++): ?>
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                            </svg>
                        <?php endfor; ?>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-base font-bold text-gray-900">
                            $<?php echo number_format($product['price'], 2); ?>
                        </span>
                        <?php if (isset($product['originalPrice']) && $product['originalPrice'] != $product['price']): ?>
                            <span class="text-sm text-gray-500 line-through">
                                $<?php echo number_format($product['originalPrice'], 2); ?>
                            </span>
                        <?php endif; ?>
                    </div>
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
