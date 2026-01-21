<?php
$pageTitle = "In Press";
$currentPage = "press";

ob_start();
?>

<!-- Hero Section -->
<section class="relative bg-black text-white py-16 md:py-24 overflow-hidden rounded-[40px] m-8">
    <div class="absolute inset-0">
        <img src="/assets/images/breadcrumb-bg.png" alt="">
    </div>
    
    <div class="container-wrapper relative z-10 text-center max-w-[916px]">
        <h1 class="text-2xl md:text-3xl lg:text-[48px] font-bold mb-4">In Press</h1>
        <p class="text-gray-300 text-sm md:text-base">
            Welcome to the SeatWaves Press Center — your go-to resource for the latest news, media assets.
        </p>
    </div>
</section>

<!-- Press Content -->
<section class="py-12 md:py-16">
    <div class="container-wrapper max-w-4xl">
        <!-- About Section -->
        <div class="mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-black mb-4">About Amira Diamonds</h2>
            <p class="text-[#666666] leading-relaxed">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            </p>
        </div>

        <!-- Latest News Section -->
        <div class="mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-black mb-6">Latest News & Announcements</h2>
            <ul class="space-y-4">
                <li class="flex items-start gap-3">
                    <span class="text-black font-medium whitespace-nowrap">[August 2025]</span>
                    <span class="text-[#666666]">— Amira launches new mobile app with enhanced seat selection features.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-black font-medium whitespace-nowrap">[August 2025]</span>
                    <span class="text-[#666666]">— Partnership announced with major concert promoters to expand ticket availability.</span>
                </li>
                <li class="flex items-start gap-3">
                    <span class="text-black font-medium whitespace-nowrap">[August 2025]</span>
                    <span class="text-[#666666]">— Amira hits 1 million users worldwide.</span>
                </li>
            </ul>
        </div>

        <!-- Media Resources Section -->
        <div class="mb-12">
            <h2 class="text-2xl md:text-3xl font-bold text-black mb-4">Media Resources</h2>
            <p class="text-[#666666] mb-4">
                Download official SeatWaves logos, brand guidelines, and high-resolution images for press use:
            </p>
            <a href="#" class="text-black font-medium underline hover:no-underline">
                [Download Media Kit] (link to media assets)
            </a>
        </div>

        <!-- Press Contact Section -->
        <div class="bg-[#F7F5F5] rounded-lg p-6 md:p-8">
            <h2 class="text-2xl md:text-3xl font-bold text-black mb-4">Press Contact</h2>
            <p class="text-[#666666] mb-4">
                For media inquiries, interview requests, or additional information, please contact:
            </p>
            <div class="space-y-2 text-[#666666]">
                <p><strong class="text-black">Press Relations Team</strong></p>
                <p><strong class="text-black">Email:</strong> press@amira.com</p>
                <p><strong class="text-black">Phone:</strong> +1 (555) 123-4567</p>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
include 'layouts/main.php';
?>
