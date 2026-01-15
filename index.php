<?php
/**
 * Home Page - Amira Diamond Jewelry
 * Pixel-perfect clone of the amira e-commerce website
 */

// Page configuration
$pageTitle = 'Buy Diamonds the Smarter Way | amira';
$pageDescription = 'Discover certified diamonds, transparent pricing, expert guidance, and seamless online experiences designed to help you choose confidently, efficiently, and beautifully.';
$siteName = 'amira';
$showPageTitle = false; // Hide page title since hero section has it

// Top bar configuration
$topBarLinks = [
    ['label' => 'NEWSLETTER', 'url' => '#'],
    ['label' => 'CONTACT US', 'url' => '#'],
    ['label' => 'FAQ', 'url' => '#']
];
$freeShippingText = 'FREE SHIPPING FOR ALL ORDERS OF $100';
$socialLinks = [
    ['icon' => 'facebook', 'url' => '#'],
    ['icon' => 'twitter', 'url' => '#'],
    ['icon' => 'linkedin', 'url' => '#'],
    ['icon' => 'pinterest', 'url' => '#'],
    ['icon' => 'youtube', 'url' => '#'],
    ['icon' => 'telegram', 'url' => '#']
];

// Navigation configuration
$logoText = 'DIAMOND BY amira';
$logoImage = '/assets/images/logo.png';
// Note: Menu items are now hardcoded in navbar.php for easy customization
// Mega menus are now static HTML files in components/ folder for easy editing

// Old mega menu arrays removed - now using static HTML files:
// - components/mega-menu-fine-jewelry.html
// - Add more as needed: mega-menu-bridal.html, etc.

// Legacy mega menu data (kept for reference, not used anymore):
/*
$megaMenus = [
    'Fine Jewelry' => [
        'title' => 'Fine Jewelry',
        'columns' => [
            [
                'title' => 'CREATE YOUR OWN DIAMOND RING',
                'items' => [
                    ['label' => 'Start with a ring', 'url' => '#', 'icon' => 'ring'],
                    ['label' => 'Start with a lab diamond', 'url' => '#', 'icon' => 'diamond'],
                    ['label' => 'Start with a natural diamond', 'url' => '#', 'icon' => 'diamond-filled'],
                    ['label' => 'Shop ready-to-ship rings', 'url' => '#', 'icon' => 'ring-tag'],
                ]
            ],
            [
                'title' => 'WEDDING',
                'items' => [
                    ['label' => 'Women\'s wedding rings', 'url' => '#', 'icon' => 'ring-ornate'],
                    ['label' => 'Men\'s wedding bands', 'url' => '#', 'icon' => 'band'],
                    ['label' => 'Eternity rings', 'url' => '#', 'icon' => 'eternity'],
                ]
            ],
            [
                'title' => 'SHOP BY STYLE',
                'items' => [
                    ['label' => 'Solitaire', 'url' => '#', 'icon' => 'solitaire'],
                    ['label' => 'Halo', 'url' => '#', 'icon' => 'halo'],
                    ['label' => 'Pavé and Side-Stone', 'url' => '#', 'icon' => 'pave'],
                    ['label' => 'Three Stone', 'url' => '#', 'icon' => 'three-stone'],
                    ['label' => 'Hidden Halo', 'url' => '#', 'icon' => 'hidden-halo'],
                    ['label' => 'Shop all styles', 'url' => '#', 'icon' => 'arrow', 'showArrow' => true],
                ]
            ],
            [
                'title' => 'SHOP BY METAL',
                'items' => [
                    ['label' => 'Rose Gold', 'url' => '#', 'icon' => 'rose-gold'],
                    ['label' => 'Yellow Gold', 'url' => '#', 'icon' => 'yellow-gold'],
                    ['label' => 'White Gold', 'url' => '#', 'icon' => 'white-gold'],
                    ['label' => 'Platinum', 'url' => '#', 'icon' => 'platinum'],
                ],
                'subheading' => 'GEMSTONE RINGS',
                'subItems' => [
                    ['label' => 'Moissanite rings', 'url' => '#', 'icon' => 'ring'],
                ]
            ],
            [
                'title' => 'CUSTOM RING DESIGN',
                'items' => [
                    ['label' => 'Custom engagement rings', 'url' => '#', 'icon' => 'ring-ornate'],
                ],
                'subheading' => 'EDUCATION',
                'subItems' => [
                    ['label' => 'Lab grown vs natural diamond', 'url' => '#'],
                    ['label' => 'Most popular engagement rings', 'url' => '#'],
                ],
                'promo' => [
                    'title' => 'Christian Siriano Collection',
                    'image' => '/assets/images/promo-ring.jpg',
                    'url' => '#'
                ]
            ]
        ],
        'explore' => [
            'label' => 'Start with our diamond quiz',
            'url' => '#',
            'icon' => 'diamond'
        ]
    ],
    'Bridal' => [
        'title' => 'Bridal',
        'columns' => [
            [
                'title' => 'ENGAGEMENT RINGS',
                'items' => [
                    ['label' => 'Shop all engagement rings', 'url' => '#', 'icon' => 'ring'],
                    ['label' => 'Lab diamond rings', 'url' => '#', 'icon' => 'diamond'],
                    ['label' => 'Natural diamond rings', 'url' => '#', 'icon' => 'diamond-filled'],
                ]
            ],
            [
                'title' => 'WEDDING BANDS',
                'items' => [
                    ['label' => 'Women\'s wedding bands', 'url' => '#', 'icon' => 'ring-ornate'],
                    ['label' => 'Men\'s wedding bands', 'url' => '#', 'icon' => 'band'],
                    ['label' => 'Matching sets', 'url' => '#', 'icon' => 'eternity'],
                ]
            ],
            [
                'title' => 'SHOP BY STYLE',
                'items' => [
                    ['label' => 'Solitaire', 'url' => '#', 'icon' => 'solitaire'],
                    ['label' => 'Halo', 'url' => '#', 'icon' => 'halo'],
                    ['label' => 'Three Stone', 'url' => '#', 'icon' => 'three-stone'],
                ]
            ],
            [
                'title' => 'SHOP BY METAL',
                'items' => [
                    ['label' => 'Rose Gold', 'url' => '#', 'icon' => 'rose-gold'],
                    ['label' => 'Yellow Gold', 'url' => '#', 'icon' => 'yellow-gold'],
                    ['label' => 'White Gold', 'url' => '#', 'icon' => 'white-gold'],
                    ['label' => 'Platinum', 'url' => '#', 'icon' => 'platinum'],
                ]
            ],
            [
                'title' => 'BRIDAL SETS',
                'items' => [
                    ['label' => 'Complete bridal sets', 'url' => '#', 'icon' => 'ring-ornate'],
                    ['label' => 'Custom bridal sets', 'url' => '#', 'icon' => 'ring'],
                ]
            ]
        ]
    ]
];
*/
// End of legacy mega menu data

// Hero section configuration
$heroTitle = 'Buy Diamonds the Smarter Way';
$heroDescription = 'Discover certified diamonds, transparent pricing, expert guidance, and seamless online experiences designed to help you choose confidently, efficiently, and beautifully.';

// Category section configuration
$categoryTitle = 'Browse Jewelry by Category';
$categoryDescription = 'Explore our wide selection of jewelry, sorted by category to suit every style.';
$categories = [
    ['name' => 'Rings', 'image' => '/assets/images/rings.jpg', 'url' => '#'],
    ['name' => 'Necklaces', 'image' => '/assets/images/necklaces.jpg', 'url' => '#'],
    ['name' => 'Earrings', 'image' => '/assets/images/earrings.jpg', 'url' => '#'],
    ['name' => 'Bracelets', 'image' => '/assets/images/bracelets.jpg', 'url' => '#'],
    ['name' => 'Watches', 'image' => '/assets/images/watches.jpg', 'url' => '#'],
    ['name' => 'Pendants', 'image' => '/assets/images/pendants.jpg', 'url' => '#']
];

// Most selling products configuration
$sectionTitle = 'Most Selling Product';
$sectionDescription = 'Discover our most popular diamond jewelry pieces.';


// Elegance banner configuration
$bannerTitle = 'Redefining Elegance with Unique Charms';
$bannerDescription = 'Fun Lorem Ipsum text may appear in any size and font to simulate everything you create for your campaigns.';
$bannerImage = '/assets/images/elegance-banner.jpg';

// Rings category configuration
$ringsSectionTitle = 'Most Selling Rings Category';
$ringsSectionDescription = 'Explore our most popular ring categories.';
$ringCategories = [
    ['name' => 'Engagement Rings', 'image' => '/assets/images/engagement-rings.jpg', 'url' => '#'],
    ['name' => 'Wedding Bands', 'image' => '/assets/images/wedding-bands.jpg', 'url' => '#'],
    ['name' => 'Cocktail Rings', 'image' => '/assets/images/cocktail-rings.jpg', 'url' => '#'],
    ['name' => 'Eternity Rings', 'image' => '/assets/images/eternity-rings.jpg', 'url' => '#']
];

// Perfect diamond banner configuration
$perfectDiamondTitle = 'Your Perfect Diamond Awaits';
$perfectDiamondDescription = 'Whether you\'re choosing a certified loose diamond or a timeless piece of jewellery, find exceptional brilliance, trusted quality, and craftsmanship made to last forever.';

// Footer configuration
$footerLogo = 'amira';
$footerAbout = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.';
$quickLinks = [
    ['label' => 'Home', 'url' => '/'],
    ['label' => 'Features', 'url' => '#'],
    ['label' => 'How It Works', 'url' => '#'],
    ['label' => 'Blog', 'url' => '#'],
    ['label' => 'Contact', 'url' => '#']
];
$resourceLinks = [
    ['label' => 'Help Center', 'url' => '#'],
    ['label' => 'FAQs', 'url' => '#'],
    ['label' => 'Tutorials', 'url' => '#'],
    ['label' => 'Terms of Service', 'url' => '#'],
    ['label' => 'Privacy Policy', 'url' => '#']
];
$contactEmail = 'dbamira@gmail.com';
$contactWebsite = 'www.amira.ai';
$contactLocation = 'Portland, Illinois';
$footerSocialLinks = [
    ['icon' => 'facebook', 'url' => '#'],
    ['icon' => 'twitter', 'url' => '#'],
    ['icon' => 'instagram', 'url' => '#'],
    ['icon' => 'youtube', 'url' => '#']
];
$copyrightText = 'dbamira';

// Page content
ob_start();
?>

<!-- Hero Section -->
<?php include __DIR__ . '/components/hero.php'; ?>

<!-- Browse Jewelry by Category -->
<?php include __DIR__ . '/components/category-section.php'; ?>

<!-- Promotional Banners -->
<?php include __DIR__ . '/components/promotional-banners.php'; ?>

<!-- Most Selling Products -->
<?php include __DIR__ . '/components/products-section.php'; ?>

<!-- Redefining Elegance Banner -->
<?php include __DIR__ . '/components/elegance-banner.php'; ?>

<!-- Most Selling Rings Category -->
<?php 
$sectionTitle = $ringsSectionTitle;
$sectionDescription = $ringsSectionDescription;
include __DIR__ . '/components/rings-category.php'; 
?>

<!-- Your Perfect Diamond Awaits Banner -->
<?php 
$bannerTitle = $perfectDiamondTitle;
$bannerDescription = $perfectDiamondDescription;
include __DIR__ . '/components/perfect-diamond-banner.php'; 
?>

<?php
$content = ob_get_clean();

// Include the main layout
include __DIR__ . '/layouts/main.php';
?>
