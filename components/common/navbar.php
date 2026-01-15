<?php

?>
<nav class="bg-white shadow-sm sticky top-0 z-50 relative">
    <div class="container-wrapper">
        <div class="flex justify-between items-center h-20">
            <!-- Left side - Empty space -->
            <div class="flex-1 flex justify-start items-center">
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
            <div class="flex-1 flex justify-center">
                <a href="/" class="text-2xl font-bold text-gray-900 tracking-wide hover:text-gray-700 transition-colors">
                    <img src="/assets/images/logo.png" alt="Logo" class="h-12 w-auto">
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
                    <button class="text-gray-700 hover:text-gray-900 transition-colors relative" aria-label="Shopping Cart">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 10C16 11.0609 15.5786 12.0783 14.8284 12.8284C14.0783 13.5786 13.0609 14 12 14C10.9391 14 9.92172 13.5786 9.17157 12.8284C8.42143 12.0783 8 11.0609 8 10M3.103 6.034H20.897M3.4 5.467C3.14036 5.81319 3 6.23426 3 6.667V20C3 20.5304 3.21071 21.0391 3.58579 21.4142C3.96086 21.7893 4.46957 22 5 22H19C19.5304 22 20.0391 21.7893 20.4142 21.4142C20.7893 21.0391 21 20.5304 21 20V6.667C21 6.23426 20.8596 5.81319 20.6 5.467L18.6 2.8C18.4137 2.55161 18.1721 2.35 17.8944 2.21115C17.6167 2.07229 17.3105 2 17 2H7C6.68951 2 6.38328 2.07229 6.10557 2.21115C5.82786 2.35 5.58629 2.55161 5.4 2.8L3.4 5.467Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
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
    <?php include __DIR__ . '/../mega-menu/fine-jewelry.html'; ?>
    <?php include __DIR__ . '/../mega-menu/bridal.html'; ?>
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