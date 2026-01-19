<!-- Cart Drawer Overlay -->
<div id="cart-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-[200] hidden transition-opacity duration-300"></div>

<!-- Cart Drawer -->
<div id="cart-drawer" class="fixed top-0 right-0 h-full w-full md:w-96 bg-white z-[201] transform translate-x-full transition-transform duration-300 ease-in-out flex flex-col">
    <!-- Cart Header -->
    <div class="flex items-center justify-between p-6 border-b border-gray-200">
        <h2 class="text-xl font-bold text-gray-900">Shopping Cart</h2>
        <button id="cart-close" class="text-gray-700 hover:text-gray-900">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
    </div>

    <!-- Cart Items -->
    <div id="cart-items" class="flex-1 overflow-y-auto p-6">
        <!-- Empty Cart State -->
        <div id="empty-cart" class="flex flex-col items-center justify-center h-full text-center">
            <svg class="w-24 h-24 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
            </svg>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Your cart is empty</h3>
            <p class="text-gray-600 mb-4">Add some items to get started</p>
            <button id="continue-shopping" class="px-6 py-2 bg-black text-white rounded-lg hover:bg-gray-800 transition-colors">
                Continue Shopping
            </button>
        </div>

        <!-- Cart Items List (hidden by default) -->
        <div id="cart-items-list" class="hidden space-y-4">
            <!-- Sample Cart Item -->
            <div class="flex gap-4 pb-4 border-b border-gray-200">
                <div class="w-20 h-20 bg-gray-100 rounded-lg overflow-hidden flex-shrink-0">
                    <img src="/assets/images/products/product-01.png" alt="Product" class="w-full h-full object-cover">
                </div>
                <div class="flex-1">
                    <h4 class="text-sm font-semibold text-gray-900 mb-1">Celeste Brilliance Solitaire Ring</h4>
                    <p class="text-xs text-gray-600 mb-2">Diamond Ring</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <button class="w-6 h-6 flex items-center justify-center border border-gray-300 rounded hover:bg-gray-50">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                                </svg>
                            </button>
                            <span class="text-sm font-medium">1</span>
                            <button class="w-6 h-6 flex items-center justify-center border border-gray-300 rounded hover:bg-gray-50">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                </svg>
                            </button>
                        </div>
                        <button class="text-red-500 hover:text-red-700">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="text-right">
                    <p class="text-sm font-bold text-gray-900">$2,499.00</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Cart Footer -->
    <div class="border-t border-gray-200 p-6 space-y-4">
        <!-- Subtotal -->
        <div class="flex items-center justify-between text-base">
            <span class="text-gray-600">Subtotal</span>
            <span id="cart-subtotal" class="font-semibold text-gray-900">$0.00</span>
        </div>
        
        <!-- Shipping Note -->
        <p class="text-xs text-gray-600">Shipping and taxes calculated at checkout</p>

        <!-- Checkout Button -->
        <button class="w-full py-3 bg-black text-white rounded-lg font-semibold hover:bg-gray-800 transition-colors">
            Proceed to Checkout
        </button>

        <!-- View Cart Link -->
        <a href="/cart.php" class="block text-center text-sm text-gray-700 hover:text-gray-900 underline">
            View Full Cart
        </a>
    </div>
</div>

<script>
    // Cart drawer functionality
    document.addEventListener('DOMContentLoaded', function() {
        const cartToggle = document.getElementById('cart-toggle');
        const cartDrawer = document.getElementById('cart-drawer');
        const cartClose = document.getElementById('cart-close');
        const cartOverlay = document.getElementById('cart-overlay');
        const continueShopping = document.getElementById('continue-shopping');

        function openCart() {
            cartOverlay.classList.remove('hidden');
            setTimeout(() => {
                cartOverlay.classList.add('opacity-100');
                cartDrawer.classList.remove('translate-x-full');
                cartDrawer.classList.add('translate-x-0');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        function closeCart() {
            cartOverlay.classList.remove('opacity-100');
            cartDrawer.classList.remove('translate-x-0');
            cartDrawer.classList.add('translate-x-full');
            setTimeout(() => {
                cartOverlay.classList.add('hidden');
            }, 300);
            document.body.style.overflow = '';
        }

        if (cartToggle) {
            cartToggle.addEventListener('click', openCart);
        }

        if (cartClose) {
            cartClose.addEventListener('click', closeCart);
        }

        if (cartOverlay) {
            cartOverlay.addEventListener('click', closeCart);
        }

        if (continueShopping) {
            continueShopping.addEventListener('click', closeCart);
        }
    });
</script>
