<?php
/**
 * Contact Page
 * 
 * Example page demonstrating the layout system.
 */

// Page configuration
$pageTitle = 'Contact Us';
$pageDescription = 'Get in touch with us';
$siteName = 'Static PHP Template';

// Navigation items
$navItems = [
    ['label' => 'Home', 'url' => '/'],
    ['label' => 'About', 'url' => '/pages/about.php'],
    ['label' => 'Contact', 'url' => '/pages/contact.php']
];

// Footer configuration
$footerAbout = 'A clean, minimal static website template built with PHP and Tailwind CSS. Perfect for building fast, maintainable static websites.';
$footerLinks = [
    ['label' => 'Home', 'url' => '/'],
    ['label' => 'About', 'url' => '/pages/about.php'],
    ['label' => 'Contact', 'url' => '/pages/contact.php']
];
$contactEmail = 'contact@example.com';
$contactPhone = '+1 (555) 123-4567';

// Page content
ob_start();
?>

<div class="max-w-2xl mx-auto">
    <div class="bg-white shadow-md rounded-lg p-8">
        <h2 class="text-2xl font-bold text-gray-900 mb-6">Get in Touch</h2>
        
        <form class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                    Name
                </label>
                <input type="text" 
                       id="name" 
                       name="name" 
                       required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
            </div>
            
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                    Email
                </label>
                <input type="email" 
                       id="email" 
                       name="email" 
                       required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
            </div>
            
            <div>
                <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">
                    Subject
                </label>
                <input type="text" 
                       id="subject" 
                       name="subject" 
                       required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition">
            </div>
            
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                    Message
                </label>
                <textarea id="message" 
                          name="message" 
                          rows="5" 
                          required
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition resize-none"></textarea>
            </div>
            
            <button type="submit" 
                    class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                Send Message
            </button>
        </form>
    </div>
    
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Email</h3>
            <p class="text-gray-600">
                <a href="mailto:<?php echo htmlspecialchars($contactEmail); ?>" 
                   class="text-blue-600 hover:text-blue-700">
                    <?php echo htmlspecialchars($contactEmail); ?>
                </a>
            </p>
        </div>
        
        <div class="bg-white shadow-md rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Phone</h3>
            <p class="text-gray-600">
                <a href="tel:<?php echo htmlspecialchars($contactPhone); ?>" 
                   class="text-blue-600 hover:text-blue-700">
                    <?php echo htmlspecialchars($contactPhone); ?>
                </a>
            </p>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();

// Include the main layout
include __DIR__ . '/../layouts/main.php';
?>
