<?php
$products = [
    [
        'name' => 'Celeste Brilliance Solitaire Ring',
        'category' => 'Diamond Ring',
        'price' => 2499.00,
        'originalPrice' => 2435.00,
        'rating' => 5,
        'ratingCount' => 100,
        'image' => '/assets/images/products/product-01.png',
        'url' => '#'
    ],
    [
        'name' => 'Celeste Brilliance Solitaire Ring',
        'category' => 'Diamond Ring',
        'price' => 2499.00,
        'originalPrice' => 2435.00,
        'rating' => 5,
        'ratingCount' => 100,
        'image' => '/assets/images/products/product-02.png',
        'url' => '#'
    ],
    [
        'name' => 'Celeste Brilliance Solitaire Ring',
        'category' => 'Diamond Ring',
        'price' => 2499.00,
        'originalPrice' => 2435.00,
        'rating' => 5,
        'ratingCount' => 100,
        'image' => '/assets/images/products/product-03.png',
        'url' => '#'
    ],
    [
        'name' => 'Celeste Brilliance Solitaire Ring',
        'category' => 'Diamond Ring',
        'price' => 2499.00,
        'originalPrice' => 2435.00,
        'rating' => 5,
        'ratingCount' => 100,
        'image' => '/assets/images/products/product-04.png',
        'url' => '#'
    ],
    [
        'name' => 'Celeste Brilliance Solitaire Ring',
        'category' => 'Diamond Ring',
        'price' => 2499.00,
        'originalPrice' => 2435.00,
        'rating' => 5,
        'ratingCount' => 100,
        'image' => '/assets/images/products/product-05.png',
        'url' => '#'
    ],
    [
        'name' => 'Celeste Brilliance Solitaire Ring',
        'category' => 'Diamond Ring',
        'price' => 2499.00,
        'originalPrice' => 2435.00,
        'rating' => 5,
        'ratingCount' => 100,
        'image' => '/assets/images/products/product-06.png',
        'url' => '#'
    ],
    [
        'name' => 'Celeste Brilliance Solitaire Ring',
        'category' => 'Diamond Ring',
        'price' => 2499.00,
        'originalPrice' => 2435.00,
        'rating' => 5,
        'ratingCount' => 100,
        'image' => '/assets/images/products/product-07.png',
        'url' => '#'
    ],
    [
        'name' => 'Celeste Brilliance Solitaire Ring',
        'category' => 'Diamond Ring',
        'price' => 2499.00,
        'originalPrice' => 2435.00,
        'rating' => 5,
        'ratingCount' => 100,
        'image' => '/assets/images/products/product-08.png',
        'url' => '#'
    ]
];

?>

<section class="py-16">
    <div class="container-wrapper">
        <div class="flex justify-between items-start mb-10">
            <div>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-3">
                    Most Selling Product
                </h2>
                <p class="text-gray-600 text-base">
                    creating sample books filled with preset paragraphs.
                </p>
            </div>
            <a href="#"
                class="text-gray-900 font-semibold hover:underline hidden lg:inline-flex items-center gap-2 text-base">
                See All
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.75 9H14.25M14.25 9L9 3.75M14.25 9L9 14.25" stroke="#59667D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-6">
            <?php foreach ($products as $product): ?>
                <a href="<?php echo htmlspecialchars($product['url']); ?>"
                    class="group border border-[#E5E5E5]">
                    <div class="bg-gray-100 overflow-hidden aspect-square">
                        <?php if (isset($product['image']) && file_exists(__DIR__ . '/..' . $product['image'])): ?>
                            <img src="<?php echo htmlspecialchars($product['image']); ?>"
                                alt="<?php echo htmlspecialchars($product['name']); ?>"
                                class="size-full object-cover group-hover:scale-110 transition-transform duration-300">
                        <?php else: ?>
                            <div class="size-full flex items-center justify-center bg-gray-200">
                                <span class="text-gray-400 text-xs">Product</span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="p-3.5 space-y-2.5">
                        <p class="text-gray-500 text-sm">
                            <?php echo htmlspecialchars($product['category']); ?>
                        </p>
                        <h3 class="text-sm font-semibold text-gray-900 line-clamp-2 group-hover:text-gray-600 transition-colors">
                            <?php echo htmlspecialchars($product['name']); ?>
                        </h3>
                        <div class="flex items-center gap-1">
                            <?php for ($i = 0; $i < $product['rating']; $i++): ?>
                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                    <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
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