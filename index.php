<?php
// Page content
ob_start();
?>

<!-- Hero Section -->
<?php include __DIR__ . '/components/hero.php'; ?>

<!-- Shop Categories -->
<?php include __DIR__ . '/components/shop-categories-section.php'; ?>

<!-- Browse Jewelry by Category -->
<?php include __DIR__ . '/components/category-section.php'; ?>

<!-- Promotional Banners -->
<?php include __DIR__ . '/components/promotional-banners.php'; ?>

<!-- Most Selling Products -->
<?php include __DIR__ . '/components/products-section.php'; ?>

<!-- Redefining Elegance Banner -->
<?php include __DIR__ . '/components/elegance-banner.php'; ?>

<!-- Most Selling Rings Category -->
<?php include __DIR__ . '/components/most-selling-rings.php'; ?>

<?php
$content = ob_get_clean();

// Include the main layout
include __DIR__ . '/layouts/main.php';
?>
