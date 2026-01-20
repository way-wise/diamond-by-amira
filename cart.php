<?php
$pageTitle = "Shopping Cart";
$currentPage = "cart";

$cartItems = [
    [
        'id' => 1,
        'name' => 'Pear Shaped Diamond Three Stone Engagement Ring in 14K White Gold',
        'image' => '/assets/images/products/product-01.png',
        'price' => 1327.00,
        'quantity' => 1
    ],
    [
        'id' => 2,
        'name' => 'Pear Shaped Diamond Three Stone Engagement Ring in 14K White Gold',
        'image' => '/assets/images/products/product-02.png',
        'price' => 1327.00,
        'quantity' => 1
    ],
    [
        'id' => 3,
        'name' => 'Pear Shaped Diamond Three Stone Engagement Ring in 14K White Gold',
        'image' => '/assets/images/products/product-03.png',
        'price' => 1327.00,
        'quantity' => 1
    ],
    [
        'id' => 4,
        'name' => 'Pear Shaped Diamond Three Stone Engagement Ring in 14K White Gold',
        'image' => '/assets/images/products/product-04.png',
        'price' => 1327.00,
        'quantity' => 1
    ]
];

$recommendedProducts = [
    [
        'name' => 'Celeste Brilliance Solitaire Ring',
        'category' => 'Diamond Ring',
        'price' => 2499.00,
        'originalPrice' => 2649.00,
        'rating' => 5,
        'reviews' => 16,
        'image' => '/assets/images/products/product-01.png',
        'url' => '#'
    ],
    [
        'name' => 'Celeste Brilliance Solitaire Ring',
        'category' => 'Diamond Ring',
        'price' => 2499.00,
        'originalPrice' => 2649.00,
        'rating' => 5,
        'reviews' => 24,
        'image' => '/assets/images/products/product-02.png',
        'url' => '#'
    ],
    [
        'name' => 'Celeste Brilliance Solitaire Ring',
        'category' => 'Diamond Ring',
        'price' => 2499.00,
        'originalPrice' => 2649.00,
        'rating' => 5,
        'reviews' => 16,
        'image' => '/assets/images/products/product-03.png',
        'url' => '#'
    ],
    [
        'name' => 'Celeste Brilliance Solitaire Ring',
        'category' => 'Diamond Ring',
        'price' => 2499.00,
        'originalPrice' => 2649.00,
        'rating' => 5,
        'reviews' => 24,
        'image' => '/assets/images/products/product-04.png',
        'url' => '#'
    ]
];

$subtotal = array_sum(array_map(function($item) {
    return $item['price'] * $item['quantity'];
}, $cartItems));

$shipping = 20.00;
$localPickup = 20.00;
$total = $subtotal + $shipping;

ob_start();
?>

<!-- Breadcrumb -->
<div class="bg-[#F7F5F5] py-4">
    <div class="container-wrapper">
        <div class="flex items-center gap-2 text-sm">
            <a href="/" class="text-[#666666] hover:text-black transition-colors">Home</a>
            <span class="text-[#666666]">/</span>
            <span class="text-black">Cart</span>
        </div>
    </div>
</div>

<!-- Shopping Cart Section -->
<section class="py-8 md:py-12">
    <div class="container-wrapper">
        <!-- Back to Gallery Link -->
        <a href="/shop.php" class="inline-flex items-center gap-2 text-sm text-[#666666] hover:text-black transition-colors mb-6">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Back to the gallery
        </a>

        <h1 class="text-2xl md:text-3xl font-bold text-black mb-8">Shopping Cart</h1>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Cart Items -->
            <div class="lg:col-span-2">
                <!-- Cart Table Header (Desktop) -->
                <div class="hidden md:grid grid-cols-12 gap-4 pb-4 border-b border-[#E5E5E5] text-sm font-medium text-black mb-4">
                    <div class="col-span-5">Product</div>
                    <div class="col-span-2 text-center">Price</div>
                    <div class="col-span-3 text-center">Quantity</div>
                    <div class="col-span-2 text-right">Subtotal</div>
                </div>

                <!-- Cart Items -->
                <div class="space-y-4">
                    <?php foreach ($cartItems as $item): ?>
                    <div class="grid md:grid-cols-12 gap-4 items-center pb-4 border-b border-[#E5E5E5]">
                        <!-- Product Info -->
                        <div class="md:col-span-5 flex items-center gap-4">
                            <div class="w-20 h-20 bg-[#F7F5F5] rounded-lg overflow-hidden flex-shrink-0">
                                <img src="<?php echo htmlspecialchars($item['image']); ?>" 
                                     alt="<?php echo htmlspecialchars($item['name']); ?>" 
                                     class="w-full h-full object-cover">
                            </div>
                            <div class="flex-1">
                                <h3 class="text-sm font-medium text-black line-clamp-2"><?php echo htmlspecialchars($item['name']); ?></h3>
                            </div>
                        </div>

                        <!-- Price -->
                        <div class="md:col-span-2 text-center">
                            <span class="md:hidden text-xs text-[#666666] mr-2">Price:</span>
                            <span class="text-sm font-medium text-black">$<?php echo number_format($item['price'], 2); ?></span>
                        </div>

                        <!-- Quantity -->
                        <div class="md:col-span-3 flex items-center justify-center gap-3">
                            <span class="md:hidden text-xs text-[#666666]">Quantity:</span>
                            <div class="flex items-center border border-[#E5E5E5] rounded-lg">
                                <button class="w-8 h-8 flex items-center justify-center hover:bg-gray-50 transition-colors">
                                    <svg width="12" height="2" viewBox="0 0 12 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1H11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </button>
                                <input type="number" value="<?php echo $item['quantity']; ?>" min="1" 
                                       class="w-12 h-8 text-center text-sm border-x border-[#E5E5E5] focus:outline-none">
                                <button class="w-8 h-8 flex items-center justify-center hover:bg-gray-50 transition-colors">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 1V11M1 6H11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Subtotal & Remove -->
                        <div class="md:col-span-2 flex items-center justify-between md:justify-end gap-4">
                            <div class="text-right">
                                <span class="md:hidden text-xs text-[#666666] mr-2">Subtotal:</span>
                                <span class="text-sm font-bold text-black">$<?php echo number_format($item['price'] * $item['quantity'], 2); ?></span>
                            </div>
                            <button class="text-[#666666] hover:text-red-600 transition-colors">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 5L5 15M5 5L15 15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!-- Coupon Code -->
                <div class="mt-6 flex flex-col sm:flex-row gap-3">
                    <input type="text" placeholder="Coupon Code" 
                           class="flex-1 px-4 py-2.5 border border-[#E5E5E5] rounded-lg text-sm focus:outline-none focus:border-black">
                    <button class="bg-black text-white px-6 py-2.5 rounded-lg text-sm font-medium hover:bg-gray-800 transition-colors whitespace-nowrap">
                        Apply Coupon
                    </button>
                </div>

                <!-- Action Buttons -->
                <div class="mt-4 flex flex-col sm:flex-row gap-3">
                    <button class="flex-1 border border-[#E5E5E5] text-black px-6 py-2.5 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                        Clear Cart
                    </button>
                    <button class="flex-1 border border-[#E5E5E5] text-black px-6 py-2.5 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                        Update Cart
                    </button>
                </div>
            </div>

            <!-- Cart Totals -->
            <div class="lg:col-span-1">
                <div class="bg-white border border-[#E5E5E5] rounded-lg p-6 sticky top-24">
                    <h2 class="text-lg font-bold text-black mb-6">Cart Totals</h2>
                    
                    <div class="space-y-4 mb-6">
                        <div class="flex justify-between text-sm">
                            <span class="text-[#666666]">Subtotal</span>
                            <span class="font-medium text-black">$<?php echo number_format($subtotal, 2); ?></span>
                        </div>
                        
                        <div class="border-t border-[#E5E5E5] pt-4">
                            <div class="text-sm font-medium text-black mb-3">Shipping</div>
                            <div class="space-y-2 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-[#666666]">Free Shipping</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-[#666666]">Flat rate:</span>
                                    <span class="text-black">$<?php echo number_format($shipping, 2); ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-[#666666]">Local pickup:</span>
                                    <span class="text-black">$<?php echo number_format($localPickup, 2); ?></span>
                                </div>
                                <div class="text-xs text-[#999999] mt-2">
                                    Shipping options will be updated during checkout.
                                </div>
                                <a href="#" class="text-xs text-black underline hover:no-underline">Change Address</a>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-[#E5E5E5] pt-4 mb-6">
                        <div class="flex justify-between items-center">
                            <span class="text-base font-bold text-black">Total</span>
                            <span class="text-xl font-bold text-black">$<?php echo number_format($total, 2); ?></span>
                        </div>
                    </div>

                    <a href="/checkout.php" class="block w-full bg-black text-white text-center px-6 py-3 rounded-lg font-medium hover:bg-gray-800 transition-colors">
                        Proceed to Checkout
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- You may like also Section -->
<section class="py-12 md:py-16 bg-[#F7F5F5]">
    <div class="container-wrapper">
        <h2 class="text-2xl md:text-3xl font-bold text-black mb-8">You may like also</h2>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-6">
            <?php foreach ($recommendedProducts as $product): ?>
            <a href="<?php echo htmlspecialchars($product['url']); ?>" class="group bg-white border border-[#E5E5E5] hover:shadow-lg transition-all duration-300">
                <div class="bg-[#F7F5F5] overflow-hidden aspect-square relative">
                    <img src="<?php echo htmlspecialchars($product['image']); ?>" 
                         alt="<?php echo htmlspecialchars($product['name']); ?>" 
                         class="size-full object-cover transition-transform duration-300 group-hover:scale-105">
                </div>
                <div class="p-3 md:p-4 space-y-2">
                    <p class="text-[#666666] text-xs md:text-sm"><?php echo htmlspecialchars($product['category']); ?></p>
                    <h3 class="text-sm md:text-base font-semibold text-black line-clamp-2 group-hover:text-gray-600 transition-colors leading-snug">
                        <?php echo htmlspecialchars($product['name']); ?>
                    </h3>
                    <div class="flex items-center gap-1">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 1L8.854 5.146L13 6.708L9.5 9.854L10.708 14L7 11.646L3.292 14L4.5 9.854L1 6.708L5.146 5.146L7 1Z" 
                                  fill="<?php echo $i < $product['rating'] ? '#FFD700' : '#E5E5E5'; ?>"/>
                        </svg>
                        <?php endfor; ?>
                        <span class="text-xs text-[#666666] ml-1">(<?php echo $product['reviews']; ?>)</span>
                    </div>
                    <div class="flex items-center gap-2 pt-1">
                        <span class="text-base md:text-lg font-bold text-black">$<?php echo number_format($product['price'], 2); ?></span>
                        <span class="text-xs md:text-sm text-[#999999] line-through">$<?php echo number_format($product['originalPrice'], 2); ?></span>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
include 'layouts/main.php';
?>
