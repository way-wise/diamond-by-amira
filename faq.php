<?php
$pageTitle = "Frequently Asked Questions (FAQ)";
$currentPage = "faq";

ob_start();
?>

<!-- Hero Section -->
<section class="relative bg-black text-white py-16 md:py-24 overflow-hidden rounded-[40px] m-8">
    <div class="absolute inset-0">
        <img src="/assets/images/breadcrumb-bg.png" alt="">
    </div>
    
    <div class="container-wrapper relative z-10 text-center max-w-[916px]">
        <h1 class="text-2xl md:text-3xl lg:text-[48px] font-bold mb-4">Frequently Asked Questions (FAQ)</h1>
        <p class="text-gray-300 text-sm md:text-base">
            Find answers to common questions about features, integrations, pricing, and support for a seamless experience.
        </p>
    </div>
</section>

<!-- FAQ Tabs and Content -->
<section class="py-12 md:py-16">
    <div class="container-wrapper">
        <!-- Tabs -->
        <div class="flex flex-wrap justify-center gap-2 md:gap-4 mb-12 border-b border-[#E5E5E5]">
            <button class="faq-tab active px-4 md:px-6 py-3 text-sm md:text-base font-medium border-b-2 border-black text-black transition-colors" data-tab="general">
                General
            </button>
            <button class="faq-tab px-4 md:px-6 py-3 text-sm md:text-base font-medium border-b-2 border-transparent text-[#666666] hover:text-black transition-colors" data-tab="buying">
                Buying
            </button>
            <button class="faq-tab px-4 md:px-6 py-3 text-sm md:text-base font-medium border-b-2 border-transparent text-[#666666] hover:text-black transition-colors" data-tab="payments">
                Payments & Pricing
            </button>
            <button class="faq-tab px-4 md:px-6 py-3 text-sm md:text-base font-medium border-b-2 border-transparent text-[#666666] hover:text-black transition-colors" data-tab="account">
                Account & Profile
            </button>
            <button class="faq-tab px-4 md:px-6 py-3 text-sm md:text-base font-medium border-b-2 border-transparent text-[#666666] hover:text-black transition-colors" data-tab="diamond">
                Diamond Information
            </button>
            <button class="faq-tab px-4 md:px-6 py-3 text-sm md:text-base font-medium border-b-2 border-transparent text-[#666666] hover:text-black transition-colors" data-tab="support">
                Technical Support
            </button>
            <button class="faq-tab px-4 md:px-6 py-3 text-sm md:text-base font-medium border-b-2 border-transparent text-[#666666] hover:text-black transition-colors" data-tab="policies">
                Safety & Policies
            </button>
        </div>

        <!-- FAQ Content -->
        <div class="max-w-4xl mx-auto">
            <!-- General Tab -->
            <div class="faq-content active" id="general">
                <div class="space-y-4">
                    <details class="group border border-[#E5E5E5] rounded-lg" open>
                        <summary class="flex items-center justify-between p-4 md:p-6 cursor-pointer hover:bg-gray-50 transition-colors">
                            <span class="text-base md:text-lg font-semibold text-black">Where can I get some?</span>
                            <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </summary>
                        <div class="px-4 md:px-6 pb-4 md:pb-6 text-sm md:text-base text-[#666666] leading-relaxed">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </details>

                    <details class="group border border-[#E5E5E5] rounded-lg">
                        <summary class="flex items-center justify-between p-4 md:p-6 cursor-pointer hover:bg-gray-50 transition-colors">
                            <span class="text-base md:text-lg font-semibold text-black">Where does it come from?</span>
                            <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </summary>
                        <div class="px-4 md:px-6 pb-4 md:pb-6 text-sm md:text-base text-[#666666] leading-relaxed">
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        </div>
                    </details>

                    <details class="group border border-[#E5E5E5] rounded-lg">
                        <summary class="flex items-center justify-between p-4 md:p-6 cursor-pointer hover:bg-gray-50 transition-colors">
                            <span class="text-base md:text-lg font-semibold text-black">Why do we use it?</span>
                            <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </summary>
                        <div class="px-4 md:px-6 pb-4 md:pb-6 text-sm md:text-base text-[#666666] leading-relaxed">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
                        </div>
                    </details>

                    <details class="group border border-[#E5E5E5] rounded-lg">
                        <summary class="flex items-center justify-between p-4 md:p-6 cursor-pointer hover:bg-gray-50 transition-colors">
                            <span class="text-base md:text-lg font-semibold text-black">What is Lorem Ipsum?</span>
                            <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </summary>
                        <div class="px-4 md:px-6 pb-4 md:pb-6 text-sm md:text-base text-[#666666] leading-relaxed">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                        </div>
                    </details>

                    <details class="group border border-[#E5E5E5] rounded-lg">
                        <summary class="flex items-center justify-between p-4 md:p-6 cursor-pointer hover:bg-gray-50 transition-colors">
                            <span class="text-base md:text-lg font-semibold text-black">The standard Lorem Ipsum passage, used since the 1500s</span>
                            <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </summary>
                        <div class="px-4 md:px-6 pb-4 md:pb-6 text-sm md:text-base text-[#666666] leading-relaxed">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris."</p>
                        </div>
                    </details>

                    <details class="group border border-[#E5E5E5] rounded-lg">
                        <summary class="flex items-center justify-between p-4 md:p-6 cursor-pointer hover:bg-gray-50 transition-colors">
                            <span class="text-base md:text-lg font-semibold text-black">Section 1.10.32 of "de Finibus Bonorum et Malorum", written by Cicero in 45 BC</span>
                            <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </summary>
                        <div class="px-4 md:px-6 pb-4 md:pb-6 text-sm md:text-base text-[#666666] leading-relaxed">
                            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo."</p>
                        </div>
                    </details>
                </div>
            </div>

            <!-- Other tabs content (hidden by default) -->
            <div class="faq-content hidden" id="buying">
                <div class="text-center py-12">
                    <p class="text-[#666666]">Buying questions content will be displayed here.</p>
                </div>
            </div>

            <div class="faq-content hidden" id="payments">
                <div class="text-center py-12">
                    <p class="text-[#666666]">Payments & Pricing questions content will be displayed here.</p>
                </div>
            </div>

            <div class="faq-content hidden" id="account">
                <div class="text-center py-12">
                    <p class="text-[#666666]">Account & Profile questions content will be displayed here.</p>
                </div>
            </div>

            <div class="faq-content hidden" id="diamond">
                <div class="text-center py-12">
                    <p class="text-[#666666]">Diamond Information questions content will be displayed here.</p>
                </div>
            </div>

            <div class="faq-content hidden" id="support">
                <div class="text-center py-12">
                    <p class="text-[#666666]">Technical Support questions content will be displayed here.</p>
                </div>
            </div>

            <div class="faq-content hidden" id="policies">
                <div class="text-center py-12">
                    <p class="text-[#666666]">Safety & Policies questions content will be displayed here.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.faq-tab');
    const contents = document.querySelectorAll('.faq-content');

    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');

            tabs.forEach(t => {
                t.classList.remove('active', 'border-black', 'text-black');
                t.classList.add('border-transparent', 'text-[#666666]');
            });

            this.classList.add('active', 'border-black', 'text-black');
            this.classList.remove('border-transparent', 'text-[#666666]');

            contents.forEach(content => {
                if (content.id === targetTab) {
                    content.classList.remove('hidden');
                    content.classList.add('active');
                } else {
                    content.classList.add('hidden');
                    content.classList.remove('active');
                }
            });
        });
    });
});
</script>

<?php
$content = ob_get_clean();
include 'layouts/main.php';
?>
