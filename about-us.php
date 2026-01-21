<?php
$pageTitle = "About Us";
$currentPage = "about";

ob_start();
?>

<!-- Hero Section -->
<section class="relative bg-black text-white py-16 md:py-24 overflow-hidden rounded-[40px] m-8">
    <div class="absolute inset-0">
        <img src="/assets/images/breadcrumb-bg.png" alt="">
    </div>
    
    <div class="container-wrapper relative z-10 text-center max-w-[916px]">
        <h1 class="text-2xl md:text-3xl lg:text-[48px] font-bold mb-4">About Us</h1>
        <p class="text-gray-300 text-sm md:text-base">
            Crafting timeless diamond pieces with trust, precision, and unmatched craftsmanship.
        </p>
    </div>
</section>

<!-- Main Content Section -->
<section class="py-12 md:py-16">
    <div class="container-wrapper">
        <!-- Section 1: From Diamonds to Stages -->
        <div class="mb-16 md:mb-24">
            <h2 class="text-2xl md:text-3xl lg:text-[56px] lg:leading-[64px] font-bold text-black text-center mb-4">
                From Diamonds to Stages – Your Perfect Seat Awaits
            </h2>
            <p class="text-[#666666] text-center mb-8 leading-relaxed">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution
            </p>
            
            <div class="bg-[#F7F5F5] rounded-lg overflow-hidden">
                <img src="/assets/images/about-us-main.svg" alt="Showroom" class="w-full h-auto object-cover">
            </div>
            
            <p class="text-[#666666] text-center mt-8 leading-relaxed">
                Here's a history where it's all started: In 2020, Amira Diamonds was founded by a team of event enthusiasts, tech innovators, and customer experience experts who shared a common frustration: buying tickets online was often confusing, impersonal, and lacked transparency. They envisioned a platform where users could not only purchase tickets but also visualize their seats in real-time, compare options, and make informed decisions—all in one place. What began as a small startup quickly grew into a trusted name in the ticketing industry, thanks to our commitment to innovation, transparency, and putting the customer first. Today, Amira Diamonds serves millions of users worldwide, partnering with top venues, artists, and event organizers to bring you the best seat selection experience available.
            </p>
        </div>

        <!-- Section 2: Image Left, Text Right -->
        <div class="flex flex-col md:flex-row items-center gap-12 mb-16 md:mb-24">
            <img src="/assets/images/about-us-diamond.png" alt="Diamond" class="w-full max-w-[524px] h-auto rounded-lg">
            <div class="">
                <h3 class="text-2xl md:text-3xl font-bold text-black mb-4">
                    Contrary to popular belief, Lorem Ipsum is not simply.
                </h3>
                <p class="text-[#666666] leading-relaxed">
                    It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.
                </p>
            </div>
        </div>

        <!-- Section 3: Text Left, Image Right -->
        <div class="flex flex-col md:flex-row items-center gap-12 mb-16 md:mb-24">
            <div>
                <h3 class="text-2xl md:text-3xl font-bold text-black mb-4">
                    Ipsum is not simply random text, it has roots
                </h3>
                <p class="text-[#666666] leading-relaxed">
                    It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.
                </p>
            </div>
            <img src="/assets/images/about-us-ring.png" alt="Ring Detail" class="w-full max-w-[524px] h-auto rounded-lg">
        </div>

        <!-- Section 4: Image Left, Text Right -->
        <div class="flex flex-col md:flex-row items-center gap-12 mb-16 md:mb-24">
            <img src="/assets/images/about-us-ring-hand.png" alt="Ring on Hand" class="w-full max-w-[524px] h-auto rounded-lg">
            <div>
                <h3 class="text-2xl md:text-3xl font-bold text-black mb-4">
                    Contrary to popular belief, Lorem Ipsum is not simply.
                </h3>
                <p class="text-[#666666] leading-relaxed">
                    It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC.
                </p>
            </div>
        </img>
    </div>
</section>

<?php
$content = ob_get_clean();
include 'layouts/main.php';
?>
