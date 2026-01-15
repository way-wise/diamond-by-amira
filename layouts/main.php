<?php

/**
 * Main Layout Template
 * 
 * This file assembles all components into a complete page.
 * 
 * Required variables:
 * - $pageTitle: Page title (displayed in <title> and optionally in content)
 * - $pageDescription: Meta description for SEO
 * 
 * Optional variables:
 * - $siteName: Site name (defaults to 'Your Site')
 * - $navItems: Array of navigation items [['label' => 'Home', 'url' => '/']]
 * - $footerAbout: Footer about text
 * - $footerLinks: Array of footer links
 * - $contactEmail: Contact email address
 * - $contactPhone: Contact phone number
 * - $customCSS: Path to custom CSS file
 * - $showPageTitle: Boolean to show/hide page title in content (default: true)
 */

// Set default values if not provided
$siteName = $siteName ?? 'Your Site';
$showPageTitle = $showPageTitle ?? true;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : 'A clean, minimal static website template'; ?>">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'Static PHP Template'; ?></title>

    <!-- Google Fonts - Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', 'sans-serif'],
                    },
                },
            },
        }
    </script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/assets/css/custom.css">

    <!-- Additional Custom CSS (if needed) -->
    <?php if (isset($customCSS)): ?>
        <link rel="stylesheet" href="<?php echo htmlspecialchars($customCSS); ?>">
    <?php endif; ?>
</head>

<body class="min-h-screen flex flex-col bg-white font-sans">
    <?php include __DIR__ . '/../components/common/topbar.php'; ?>

    <?php include __DIR__ . '/../components/common/navbar.php'; ?>

    <!-- Main Content -->
    <main class="flex-grow">
        <?php if ($showPageTitle && isset($pageTitle)): ?>
            <div class="bg-white shadow-sm border-b">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                    <h1 class="text-3xl font-bold text-gray-900"><?php echo htmlspecialchars($pageTitle); ?></h1>
                </div>
            </div>
        <?php endif; ?>

        <?php
        // Content will be included here by the page file
        if (isset($content)) {
            echo $content;
        }
        ?>
    </main>

    <?php include __DIR__ . '/../components/common/footer.php'; ?>

    </body>
</html>
