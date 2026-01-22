<?php
$pageTitle = "Thank You";
$currentPage = "thank-you";

ob_start();
?>

<!-- Thank You Section -->
<section class="py-16 md:py-24">
    <div class="container-wrapper text-center">
        <!-- Success Icon -->
        <div class="flex justify-center mb-8">
            <div class="w-20 h-20 md:w-24 md:h-24 bg-black rounded-full flex items-center justify-center">
                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M40 12L18 34L8 24" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>

        <!-- Thank You Message -->
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-black mb-4">Thank you!</h1>
        <p class="text-[#666666] text-base md:text-lg mb-8 max-w-xl mx-auto">
            Your order has been confirmed & it is on the way. Thank your email for the details.
        </p>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="/index.php" class="bg-black text-white px-8 py-3 rounded-lg font-medium hover:bg-gray-800 transition-colors">
                Go to Homepage
            </a>
            <a href="#" class="border border-black text-black px-8 py-3 rounded-lg font-medium hover:bg-gray-50 transition-colors">
                Check Order Details
            </a>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
include 'layouts/main.php';
?>
