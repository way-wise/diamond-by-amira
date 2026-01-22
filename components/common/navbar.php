<nav class="bg-white shadow-sm sticky top-0 z-[100] relative">
    <div class="container-wrapper">
        <div class="flex justify-between items-center h-20">
            <!-- Left side - Empty space -->
            <div class="flex-1 hidden lg:flex justify-start items-center">
                <!-- Navigation Menu Items (on right side of logo) -->
                <div class="hidden lg:flex items-center gap-5">
                    <!-- Fine Jewelry Menu Item -->
                    <div class="relative group" data-menu-trigger="Fine Jewelry">
                        <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-gray-900 font-medium text-sm">
                            <span>Fine Jewelry</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Bridal Menu Item -->
                    <div class="relative group" data-menu-trigger="Bridal">
                        <a href="#" class="flex items-center space-x-2 text-gray-700 hover:text-gray-900 font-medium text-sm">
                            <span>Bridal</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
            <!-- Center - Logo -->
            <div class="flex-1 flex lg:justify-center">
                <a href="/" class="text-2xl font-bold text-gray-900 tracking-wide hover:text-gray-700 transition-colors">
                    <img src="/assets/images/logo.png" alt="Logo" class="md:h-12 h-6 w-auto">
                </a>
            </div>

            <!-- Right side - Navigation Menu Items + Icons -->
            <div class="flex-1 flex justify-end gap-5 items-center">
                <!-- Navigation Menu Items (on right side of logo) -->
                <div class="hidden lg:flex items-center gap-5">
                    <!-- Watches Menu Item -->
                    <div class="relative group" data-menu-trigger="Watches">
                        <a href="#" class="flex items-center gap-2 text-gray-700 hover:text-gray-900 font-medium text-sm">
                            <span>Watches</span>
                            <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Brands Menu Item -->
                    <div class="relative group" data-menu-trigger="Brands">
                        <a href="#" class="flex items-center gap-2 text-gray-700 hover:text-gray-900 font-medium text-sm">
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
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21 21L16.66 16.66M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                    <!-- Account Icon -->
                    <button class="text-gray-700 hover:text-gray-900 transition-colors" aria-label="Account">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 21V19C19 17.9391 18.5786 16.9217 17.8284 16.1716C17.0783 15.4214 16.0609 15 15 15H9C7.93913 15 6.92172 15.4214 6.17157 16.1716C5.42143 16.9217 5 17.9391 5 19V21M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>

                    <!-- Cart Icon -->
                    <button id="cart-toggle" class="text-gray-700 hover:text-gray-900 transition-colors relative" aria-label="Shopping Cart">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10M3.103 6.034H20.897M3.4 5.467C3.14036 5.81319 3 6.23426 3 6.667V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6.667C21 6.23426 20.8596 5.81319 20.6 5.467L18.6 2.8C18.4137 2.55161 18.1721 2.35 17.8944 2.21115C17.6167 2.07229 17.3105 2 17 2H7C6.68951 2 6.38328 2.07229 6.10557 2.21115C5.82786 2.35 5.58629 2.55161 5.4 2.8L3.4 5.467Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span id="cart-count" class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
                    </button>                   
                </div>

                <!-- Mobile menu button -->
                <button id="mobile-menu-toggle" class="lg:hidden ml-4 text-gray-700 hover:text-gray-900" aria-label="Menu">
                    <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-[200] lg:hidden hidden transition-opacity duration-300" style="top: 0 !important;"></div>
    
    <!-- Mobile Menu Sidebar -->
    <div id="mobile-menu" class="fixed top-0 left-0 h-screen w-80 bg-white z-[201] lg:hidden transform -translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto" style="top: 0 !important;">
        <div class="p-6">
            <!-- Close Button -->
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-xl font-bold text-gray-900">Menu</h2>
                <button id="mobile-menu-close" class="text-gray-700 hover:text-gray-900">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <div class="space-y-1">
                <!-- Fine Jewelry - Has Megamenu -->
                <div class="mobile-menu-item">
                    <button class="mobile-menu-trigger w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors">
                        <span class="font-medium">Fine Jewelry</span>
                        <svg class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-submenu hidden overflow-hidden">
                        <div class="px-4 py-2 space-y-2">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Rings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Necklaces</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Bracelets</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Earrings</a>
                        </div>
                    </div>
                </div>

                <!-- Bridal - Has Megamenu -->
                <div class="mobile-menu-item">
                    <button class="mobile-menu-trigger w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors">
                        <span class="font-medium">Bridal</span>
                        <svg class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-submenu hidden overflow-hidden">
                        <div class="px-4 py-2 space-y-2">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Engagement Rings</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Wedding Bands</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Bridal Sets</a>
                        </div>
                    </div>
                </div>

                <!-- Watches - Simple Dropdown -->
                <div class="mobile-menu-item">
                    <button class="mobile-menu-trigger w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors">
                        <span class="font-medium">Watches</span>
                        <svg class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-submenu hidden overflow-hidden">
                        <div class="px-4 py-2 space-y-2">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Men's Watches</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Women's Watches</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Luxury Watches</a>
                        </div>
                    </div>
                </div>

                <!-- Brands - Simple Dropdown -->
                <div class="mobile-menu-item">
                    <button class="mobile-menu-trigger w-full flex items-center justify-between px-4 py-3 text-gray-700 hover:bg-gray-50 rounded-lg transition-colors">
                        <span class="font-medium">Brands</span>
                        <svg class="w-5 h-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="mobile-submenu hidden overflow-hidden">
                        <div class="px-4 py-2 space-y-2">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Tiffany & Co.</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Cartier</a>
                            <a href="#" class="block px-4 py-2 text-sm text-gray-600 hover:text-gray-900 hover:bg-gray-50 rounded">Bulgari</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Static HTML Mega Menus - Easy to customize -->
    <?php include __DIR__ . '/../mega-menu/fine-jewelry.php'; ?>
    <?php include __DIR__ . '/../mega-menu/bridal.php'; ?>

    <!-- Simple Dropdown Menus for Watches and Brands -->
    <div class="simple-dropdown hidden absolute bg-white shadow-lg rounded-lg py-2 min-w-[200px] z-[90]" data-dropdown="Watches" style="top: 80px;">
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors">Men's Watches</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors">Women's Watches</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors">Luxury Watches</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors">Smart Watches</a>
    </div>

    <div class="simple-dropdown hidden absolute bg-white shadow-lg rounded-lg py-2 min-w-[200px] z-[90]" data-dropdown="Brands" style="top: 80px;">
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors">Tiffany & Co.</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors">Cartier</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors">Bulgari</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors">Van Cleef & Arpels</a>
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors">Harry Winston</a>
    </div>
</nav>

<script>
        // Mobile menu toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuClose = document.getElementById('mobile-menu-close');
            const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
            const hamburgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');

            function openMobileMenu() {
                mobileMenuOverlay.classList.remove('hidden');
                setTimeout(() => {
                    mobileMenuOverlay.classList.add('opacity-100');
                    mobileMenu.classList.remove('-translate-x-full');
                    mobileMenu.classList.add('translate-x-0');
                }, 10);
                hamburgerIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
                document.body.style.overflow = 'hidden';
            }

            function closeMobileMenu() {
                mobileMenuOverlay.classList.remove('opacity-100');
                mobileMenu.classList.remove('translate-x-0');
                mobileMenu.classList.add('-translate-x-full');
                setTimeout(() => {
                    mobileMenuOverlay.classList.add('hidden');
                }, 300);
                hamburgerIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
                document.body.style.overflow = '';
            }

            if (mobileMenuToggle) {
                mobileMenuToggle.addEventListener('click', function() {
                    if (mobileMenu.classList.contains('-translate-x-full')) {
                        openMobileMenu();
                } else {
                    closeMobileMenu();
                }
            });
        }

        if (mobileMenuClose) {
            mobileMenuClose.addEventListener('click', closeMobileMenu);
        }

        if (mobileMenuOverlay) {
            mobileMenuOverlay.addEventListener('click', closeMobileMenu);
        }

        // Mobile submenu toggle functionality
        const mobileMenuTriggers = document.querySelectorAll('.mobile-menu-trigger');
        
        mobileMenuTriggers.forEach(trigger => {
            trigger.addEventListener('click', function() {
                const menuItem = this.closest('.mobile-menu-item');
                const submenu = menuItem.querySelector('.mobile-submenu');
                const arrow = this.querySelector('svg');
                
                if (submenu) {
                    const isHidden = submenu.classList.contains('hidden');
                    
                    // Close all other submenus
                    document.querySelectorAll('.mobile-submenu').forEach(sub => {
                        if (sub !== submenu) {
                            sub.classList.add('hidden');
                            sub.style.maxHeight = '0px';
                        }
                    });
                    
                    // Reset all arrows
                    document.querySelectorAll('.mobile-menu-trigger svg').forEach(svg => {
                        if (svg !== arrow) {
                            svg.style.transform = 'rotate(0deg)';
                        }
                    });
                    
                    if (isHidden) {
                        submenu.classList.remove('hidden');
                        submenu.style.maxHeight = submenu.scrollHeight + 'px';
                        arrow.style.transform = 'rotate(180deg)';
                    } else {
                        submenu.style.maxHeight = '0px';
                        arrow.style.transform = 'rotate(0deg)';
                        setTimeout(() => {
                            submenu.classList.add('hidden');
                        }, 300);
                    }
                }
            });
        });
    });

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