<?php
$pageTitle = "Checkout";
$currentPage = "checkout";

$orderItems = [
    [
        'name' => 'UNHEATED Apple-iPhone11 Pro, 64GB,COLOR - GRAY, Camera - 12 MP',
        'quantity' => 1,
        'price' => 449.00
    ]
];

$subtotal = array_sum(array_map(function($item) {
    return $item['price'] * $item['quantity'];
}, $orderItems));

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
            <span class="text-black">Checkout</span>
        </div>
    </div>
</div>

<!-- Checkout Section -->
<section class="py-8 md:py-12">
    <div class="container-wrapper">
        <!-- Back to Gallery Link -->
        <a href="/shop.php" class="inline-flex items-center gap-2 text-sm text-[#666666] hover:text-black transition-colors mb-6">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 12L6 8L10 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Back to the gallery
        </a>

        <!-- Coupon Notice -->
        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4 mb-8">
            <p class="text-sm text-blue-800">
                Have a coupon? 
                <a href="#" class="font-medium underline hover:no-underline">Click here to enter your code</a>
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Billing Details Form -->
            <div class="lg:col-span-2">
                <h2 class="text-2xl font-bold text-black mb-6">Billing details</h2>

                <form class="space-y-6">
                    <!-- First Name & Last Name -->
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-black mb-2">
                                First Name<span class="text-red-500">*</span>
                            </label>
                            <input type="text" placeholder="Type First Name" required
                                   class="w-full px-4 py-2.5 border border-[#E5E5E5] rounded-lg text-sm focus:outline-none focus:border-black">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-black mb-2">
                                Last Name<span class="text-red-500">*</span>
                            </label>
                            <input type="text" placeholder="Type Last Name" required
                                   class="w-full px-4 py-2.5 border border-[#E5E5E5] rounded-lg text-sm focus:outline-none focus:border-black">
                        </div>
                    </div>

                    <!-- Company Name -->
                    <div>
                        <label class="block text-sm font-medium text-black mb-2">
                            Company Name <span class="text-[#999999]">(Optional)</span>
                        </label>
                        <input type="text" placeholder="Type Company Name"
                               class="w-full px-4 py-2.5 border border-[#E5E5E5] rounded-lg text-sm focus:outline-none focus:border-black">
                    </div>

                    <!-- Country / Region -->
                    <div>
                        <label class="block text-sm font-medium text-black mb-2">
                            Country / Region<span class="text-red-500">*</span>
                        </label>
                        <div class="relative">
                            <select required class="w-full px-4 py-2.5 border border-[#E5E5E5] rounded-lg text-sm focus:outline-none focus:border-black appearance-none bg-white">
                                <option value="">Type Country / Region Name</option>
                                <option value="us">United States</option>
                                <option value="uk">United Kingdom</option>
                                <option value="ca">Canada</option>
                                <option value="au">Australia</option>
                            </select>
                            <svg class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 6L8 10L12 6" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>

                    <!-- Street Address -->
                    <div>
                        <label class="block text-sm font-medium text-black mb-2">
                            Street Address<span class="text-red-500">*</span>
                        </label>
                        <input type="text" placeholder="House Number and street name" required
                               class="w-full px-4 py-2.5 border border-[#E5E5E5] rounded-lg text-sm focus:outline-none focus:border-black mb-3">
                        <input type="text" placeholder="Apartment, suite, etc. (optional)"
                               class="w-full px-4 py-2.5 border border-[#E5E5E5] rounded-lg text-sm focus:outline-none focus:border-black">
                    </div>

                    <!-- Postcode / Zip & Town / City -->
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-black mb-2">
                                Postcode / Zip <span class="text-[#999999]">(Optional)</span>
                            </label>
                            <input type="text" placeholder="Type Post code"
                                   class="w-full px-4 py-2.5 border border-[#E5E5E5] rounded-lg text-sm focus:outline-none focus:border-black">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-black mb-2">
                                Town / City<span class="text-red-500">*</span>
                            </label>
                            <input type="text" placeholder="Type Last Name" required
                                   class="w-full px-4 py-2.5 border border-[#E5E5E5] rounded-lg text-sm focus:outline-none focus:border-black">
                        </div>
                    </div>

                    <!-- Phone Number & Email Address -->
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-black mb-2">
                                Phone Number<span class="text-red-500">*</span>
                            </label>
                            <input type="tel" placeholder="Type First Name" required
                                   class="w-full px-4 py-2.5 border border-[#E5E5E5] rounded-lg text-sm focus:outline-none focus:border-black">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-black mb-2">
                                Email Address<span class="text-red-500">*</span>
                            </label>
                            <input type="email" placeholder="Type Last Name" required
                                   class="w-full px-4 py-2.5 border border-[#E5E5E5] rounded-lg text-sm focus:outline-none focus:border-black">
                        </div>
                    </div>

                    <!-- Account Username & Password -->
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-black mb-2">
                                Account Username<span class="text-red-500">*</span>
                            </label>
                            <input type="text" placeholder="Type First Name" required
                                   class="w-full px-4 py-2.5 border border-[#E5E5E5] rounded-lg text-sm focus:outline-none focus:border-black">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-black mb-2">
                                Create Account Password<span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <input type="password" placeholder="Type Last Name" required
                                       class="w-full px-4 py-2.5 border border-[#E5E5E5] rounded-lg text-sm focus:outline-none focus:border-black">
                                <button type="button" class="absolute right-4 top-1/2 -translate-y-1/2 text-[#666666] hover:text-black">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 7C8.34315 7 7 8.34315 7 10C7 11.6569 8.34315 13 10 13C11.6569 13 13 11.6569 13 10C13 8.34315 11.6569 7 10 7Z" stroke="currentColor" stroke-width="1.5"/>
                                        <path d="M10 3C5 3 2 10 2 10C2 10 5 17 10 17C15 17 18 10 18 10C18 10 15 3 10 3Z" stroke="currentColor" stroke-width="1.5"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Ship to different address checkbox -->
                    <div class="flex items-center gap-2">
                        <input type="checkbox" id="shipToDifferent" class="w-4 h-4 rounded border-[#E5E5E5]">
                        <label for="shipToDifferent" class="text-sm text-black">Ship to a different address</label>
                    </div>

                    <!-- Order Note -->
                    <div>
                        <label class="block text-sm font-medium text-black mb-2">
                            Order Note <span class="text-[#999999]">(Optional)</span>
                        </label>
                        <textarea rows="4" placeholder="Notes about your order, e.g. special notes for delivery"
                                  class="w-full px-4 py-2.5 border border-[#E5E5E5] rounded-lg text-sm focus:outline-none focus:border-black resize-none"></textarea>
                    </div>
                </form>
            </div>

            <!-- Order Summary -->
            <div class="lg:col-span-1">
                <div class="bg-white border border-[#E5E5E5] rounded-lg p-6 sticky top-24">
                    <h2 class="text-lg font-bold text-black mb-6">Your Order</h2>
                    
                    <!-- Order Items -->
                    <div class="space-y-4 mb-6 pb-6 border-b border-[#E5E5E5]">
                        <div class="flex justify-between text-sm font-medium">
                            <span class="text-black">Product</span>
                            <span class="text-black">Subtotal</span>
                        </div>
                        <?php foreach ($orderItems as $item): ?>
                        <div class="space-y-2">
                            <div class="flex justify-between gap-4">
                                <span class="text-sm text-[#666666] flex-1 line-clamp-2">
                                    <?php echo htmlspecialchars($item['name']); ?> × <?php echo $item['quantity']; ?>
                                </span>
                                <span class="text-sm font-medium text-black whitespace-nowrap">
                                    $<?php echo number_format($item['price'] * $item['quantity'], 2); ?>
                                </span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Subtotal -->
                    <div class="space-y-4 mb-6 pb-6 border-b border-[#E5E5E5]">
                        <div class="flex justify-between text-sm">
                            <span class="font-medium text-black">Subtotal</span>
                            <span class="font-medium text-black">$<?php echo number_format($subtotal, 2); ?></span>
                        </div>
                    </div>

                    <!-- Shipping -->
                    <div class="mb-6 pb-6 border-b border-[#E5E5E5]">
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

                    <!-- Total -->
                    <div class="mb-6 pb-6 border-b border-[#E5E5E5]">
                        <div class="flex justify-between items-center">
                            <span class="text-base font-bold text-black">Total</span>
                            <span class="text-xl font-bold text-black">$<?php echo number_format($total, 2); ?></span>
                        </div>
                    </div>

                    <!-- Payment Methods -->
                    <div class="space-y-3 mb-6">
                        <div class="text-sm font-medium text-black mb-3">Check payments</div>
                        <div class="space-y-2">
                            <label class="flex items-start gap-3 cursor-pointer">
                                <input type="radio" name="payment" value="cod" class="mt-1">
                                <span class="text-sm text-black">Cash on delivery</span>
                            </label>
                        </div>
                        <p class="text-xs text-[#666666] mt-2">
                            I agree with the <a href="#" class="text-black underline hover:no-underline">terms and conditions</a>
                        </p>
                    </div>

                    <!-- Place Order Button -->
                    <button type="submit" class="w-full bg-black text-white px-6 py-3 rounded-lg font-medium hover:bg-gray-800 transition-colors">
                        Place Order
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
include 'layouts/main.php';
?>
