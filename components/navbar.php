<?php

?>
<nav class="bg-white shadow-sm sticky top-0 z-50 relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Left side - Empty space -->
            <div class="flex-1 flex justify-start items-center">
                <!-- Navigation Menu Items (on right side of logo) -->
                <div class="hidden lg:flex items-center space-x-6 mr-6">
                    <!-- Fine Jewelry Menu Item -->
                    <div class="relative group" data-menu-trigger="Fine Jewelry">
                        <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-gray-900 font-medium text-sm transition-colors px-3 py-2 rounded-lg hover:bg-gray-50">
                            <span>Fine Jewelry</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                    </div>
                    
                    <!-- Bridal Menu Item -->
                    <div class="relative group" data-menu-trigger="Bridal">
                        <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-gray-900 font-medium text-sm transition-colors px-3 py-2 rounded-lg hover:bg-gray-50">
                            <span>Bridal</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
            </div>
            <!-- Center - Logo -->
            <div class="flex-1 flex justify-center">
                <a href="/" class="text-2xl font-bold text-gray-900 tracking-wide hover:text-gray-700 transition-colors">
                    <?php if (isset($logoImage) && file_exists(__DIR__ . '/..' . $logoImage)): ?>
                        <img src="<?php echo htmlspecialchars($logoImage); ?>" alt="<?php echo htmlspecialchars($logoText); ?>" class="h-12 w-auto">
                    <?php else: ?>
                        <?php echo htmlspecialchars($logoText); ?>
                    <?php endif; ?>
                </a>
            </div>
            
            <!-- Right side - Navigation Menu Items + Icons -->
            <div class="flex-1 flex justify-end items-center">
                <!-- Navigation Menu Items (on right side of logo) -->
                <div class="hidden lg:flex items-center space-x-6 mr-6">
                    <!-- Watches Menu Item -->
                    <div class="relative group" data-menu-trigger="Watches">
                        <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-gray-900 font-medium text-sm transition-colors px-3 py-2 rounded-lg hover:bg-gray-50">
                            <span>Watches</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                    </div>
                    
                    <!-- Brands Menu Item -->
                    <div class="relative group" data-menu-trigger="Brands">
                        <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-gray-900 font-medium text-sm transition-colors px-3 py-2 rounded-lg hover:bg-gray-50">
                            <span>Brands</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                
                <!-- Icons: Search, Cart, Account -->
                <div class="flex items-center space-x-5">
                    <!-- Search Icon -->
                    <button class="text-gray-700 hover:text-gray-900 transition-colors" aria-label="Search">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </button>
                    
                    <!-- Cart Icon -->
                    <button class="text-gray-700 hover:text-gray-900 transition-colors relative" aria-label="Shopping Cart">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                        </svg>
                        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
                    </button>
                    
                    <!-- Account Icon -->
                    <button class="text-gray-700 hover:text-gray-900 transition-colors" aria-label="Account">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </button>
                </div>
                
                <!-- Mobile menu button -->
                <button class="lg:hidden ml-4 text-gray-700 hover:text-gray-900" aria-label="Menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Static HTML Mega Menus - Easy to customize -->
    <?php include __DIR__ . '/mega-menu/fine-jewelry.html'; ?>
    <?php include __DIR__ . '/mega-menu/bridal.html'; ?>
</nav>

<script>
// Mega menu hover functionality
document.addEventListener('DOMContentLoaded', function() {
    const navItems = document.querySelectorAll('nav .group[data-menu-trigger]');
    
    navItems.forEach(item => {
        // Get menu title from data attribute
        const menuTitle = item.getAttribute('data-menu-trigger');
        if (!menuTitle) return;
        
        // Find the corresponding mega menu
        const megaMenuFixed = document.querySelector(`.mega-menu-fixed[data-menu-title="${menuTitle}"]`);
        if (!megaMenuFixed) return;
        
        const megaMenu = megaMenuFixed.querySelector('.mega-menu');
        if (!megaMenu) return;
        
        let hideTimeout;
        let isHoveringNav = false;
        let isHoveringMenu = false;
        
        // Function to show menu
        function showMenu() {
            clearTimeout(hideTimeout);
            megaMenuFixed.classList.remove('opacity-0', 'invisible', 'pointer-events-none');
            megaMenuFixed.classList.add('opacity-100', 'visible', 'pointer-events-auto');
            megaMenu.classList.remove('translate-y-[-10px]');
            megaMenu.classList.add('translate-y-0');
        }
        
        // Function to hide menu with delay
        function hideMenu() {
            hideTimeout = setTimeout(() => {
                // Only hide if not hovering over nav item or menu
                if (!isHoveringNav && !isHoveringMenu) {
                    megaMenuFixed.classList.remove('opacity-100', 'visible', 'pointer-events-auto');
                    megaMenuFixed.classList.add('opacity-0', 'invisible', 'pointer-events-none');
                    megaMenu.classList.remove('translate-y-0');
                    megaMenu.classList.add('translate-y-[-10px]');
                }
            }, 300); // 300ms delay before hiding
        }
        
        // Nav item hover events with smart detection
        item.addEventListener('mouseenter', function(e) {
            clearTimeout(hideTimeout);
            isHoveringNav = true;
            showMenu();
        });
        
        item.addEventListener('mouseleave', function(e) {
            // Check if mouse is moving to mega menu
            const relatedTarget = e.relatedTarget;
            if (relatedTarget && (megaMenuFixed.contains(relatedTarget) || megaMenu.contains(relatedTarget))) {
                // Mouse is moving to menu, don't hide
                return;
            }
            isHoveringNav = false;
            hideMenu();
        });
        
        // Mega menu hover events with smart detection
        megaMenuFixed.addEventListener('mouseenter', function(e) {
            clearTimeout(hideTimeout);
            isHoveringMenu = true;
            showMenu();
        });
        
        megaMenuFixed.addEventListener('mouseleave', function(e) {
            // Check if mouse is moving to nav item
            const relatedTarget = e.relatedTarget;
            if (relatedTarget && item.contains(relatedTarget)) {
                // Mouse is moving to nav item, don't hide
                return;
            }
            isHoveringMenu = false;
            hideMenu();
        });
    });
});
</script>
