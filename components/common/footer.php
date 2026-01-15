<?php

/**
 * Footer Component - Amira Design
 */
$footerLogo = $footerLogo ?? 'amira';
$footerAbout = $footerAbout ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.';
$quickLinks = $quickLinks ?? [
    ['label' => 'Home', 'url' => '/'],
    ['label' => 'Features', 'url' => '#'],
    ['label' => 'How It Works', 'url' => '#'],
    ['label' => 'Blog', 'url' => '#'],
    ['label' => 'Contact', 'url' => '#']
];
$resourceLinks = $resourceLinks ?? [
    ['label' => 'Help Center', 'url' => '#'],
    ['label' => 'FAQs', 'url' => '#'],
    ['label' => 'Tutorials', 'url' => '#'],
    ['label' => 'Terms of Service', 'url' => '#'],
    ['label' => 'Privacy Policy', 'url' => '#']
];
$contactEmail = $contactEmail ?? 'dbamira@gmail.com';
$contactWebsite = $contactWebsite ?? 'www.amira.ai';
$contactLocation = $contactLocation ?? 'Portland, Illinois';
$footerSocialLinks = $footerSocialLinks ?? [
    ['icon' => 'facebook', 'url' => '#'],
    ['icon' => 'twitter', 'url' => '#'],
    ['icon' => 'instagram', 'url' => '#'],
    ['icon' => 'youtube', 'url' => '#']
];
$copyrightText = $copyrightText ?? 'dbamira';
?>
<footer class="bg-[#F3F2F6] pt-16">
    <div class="container-wrapper">
        <div class="text-white py-24 rounded-t-2xl flex items-center justify-center" style="background-image: url('./assets/images/footer-bg.png'); background-size: cover; background-position: center;">
            <div class="max-w-[560px] text-center">
                <h2 class="text-2xl lg:text-[32px] font-bold text-[#FFFFFF] mb-5">Your Perfect Diamond Awaits</h2>
                <p class="text-sm font-normal text-[#FFFFFF] mb-6">Whether you’re choosing a certified loose diamond or a timeless piece of jewellery, find exceptional brilliance, trusted quality, and craftsmanship made to last forever.</p>
                <a href="#" class="inline-flex items-center gap-2.5 bg-blue-600 text-white px-6 py-2.5 rounded-full">
                    <span>Explore the Collection</span>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.1716 11.0009L10.8076 5.63687L12.2218 4.22266L20 12.0009L12.2218 19.779L10.8076 18.3648L16.1716 13.0009H4V11.0009H16.1716Z" fill="#091D3D" />
                    </svg>
                </a>
            </div>
        </div>
        <div class="bg-white pt-20 px-[60px]">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                <!-- Left Column - Logo and About -->
                <div class="flex flex-col gap-3.5">
                    <a href="/">
                        <img src="./assets/images/logo.png" alt="Diamond by Amira" class="w-[105px] h-auto">
                    </a>
                    <p class="text-gray-400 text-sm leading-relaxed">
                        <?php echo htmlspecialchars($footerAbout); ?>
                    </p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2 text-sm">
                        <?php foreach ($quickLinks as $link): ?>
                            <li>
                                <a href="<?php echo htmlspecialchars($link['url']); ?>"
                                    class="text-gray-400 hover:text-white transition-colors">
                                    <?php echo htmlspecialchars($link['label']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Resources -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Resources</h3>
                    <ul class="space-y-2 text-sm">
                        <?php foreach ($resourceLinks as $link): ?>
                            <li>
                                <a href="<?php echo htmlspecialchars($link['url']); ?>"
                                    class="text-gray-400 hover:text-white transition-colors">
                                    <?php echo htmlspecialchars($link['label']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Info</h3>
                    <ul class="space-y-2 text-sm text-gray-400">
                        <li>
                            <a href="mailto:<?php echo htmlspecialchars($contactEmail); ?>"
                                class="hover:text-white transition-colors">
                                <?php echo htmlspecialchars($contactEmail); ?>
                            </a>
                        </li>
                        <li>
                            <a href="https://<?php echo htmlspecialchars($contactWebsite); ?>"
                                target="_blank"
                                class="hover:text-white transition-colors">
                                <?php echo htmlspecialchars($contactWebsite); ?>
                            </a>
                        </li>
                        <li><?php echo htmlspecialchars($contactLocation); ?></li>
                    </ul>
                </div>
            </div>
            <div class="flex justify-center items-center gap-4 mb-8">
                <span class="text-sm text-gray-800">Follow us:</span>
                <div class="flex items-center space-x-3">
                    <?php foreach ($footerSocialLinks as $social): ?>
                        <a href="<?php echo htmlspecialchars($social['url']); ?>"
                            class="text-gray-400 hover:text-white transition-colors"
                            aria-label="<?php echo htmlspecialchars($social['icon']); ?>">
                            <?php
                            $iconSvg = '';
                            switch (strtolower($social['icon'])) {
                                case 'facebook':
                                    $iconSvg = '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>';
                                    break;
                                case 'twitter':
                                case 'x':
                                    $iconSvg = '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>';
                                    break;
                                case 'instagram':
                                    $iconSvg = '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>';
                                    break;
                                case 'youtube':
                                    $iconSvg = '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>';
                                    break;
                                default:
                                    $iconSvg = '<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/></svg>';
                            }
                            echo $iconSvg;
                            ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="py-8 border-t border-gray-800">
                <p class="text-sm text-gray-800 text-center">
                    &copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($copyrightText); ?>. All rights reserved.
                </p>
            </div>
        </div>
    </div>
</footer>