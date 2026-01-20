<?php
$pageTitle = "Solitaire ring 1";
$currentPage = "product";

ob_start();
?>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Progress Steps -->
<section class="bg-white border-b border-[#E5E5E5] py-6">
    <div class="container-wrapper">
        <div class="flex items-center justify-between max-w-3xl mx-auto">
            <!-- Step 1 -->
            <div class="flex items-center gap-3 flex-1">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-black text-white flex items-center justify-center font-bold">
                        1
                    </div>
                    <div class="hidden sm:block">
                        <div class="text-xs text-[#666666]">Choose a</div>
                        <div class="text-sm font-bold text-black">SETTING</div>
                    </div>
                </div>
            </div>

            <div class="h-px bg-[#E5E5E5] flex-1 max-w-[100px]"></div>

            <!-- Step 2 -->
            <div class="flex items-center gap-3 flex-1">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-[#E5E5E5] text-[#666666] flex items-center justify-center font-bold">
                        2
                    </div>
                    <div class="hidden sm:block">
                        <div class="text-xs text-[#666666]">Choose a</div>
                        <div class="text-sm font-bold text-[#666666]">DIAMOND</div>
                    </div>
                </div>
            </div>

            <div class="h-px bg-[#E5E5E5] flex-1 max-w-[100px]"></div>

            <!-- Step 3 -->
            <div class="flex items-center gap-3 flex-1 justify-end">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-[#E5E5E5] text-[#666666] flex items-center justify-center font-bold">
                        3
                    </div>
                    <div class="hidden sm:block">
                        <div class="text-xs text-[#666666]">Complete</div>
                        <div class="text-sm font-bold text-[#666666]">RING</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product Detail Section -->
<section class="py-8 md:py-12">
    <div class="container-wrapper">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12">
            <!-- Product Images -->
            <div>
                <!-- Main Slider -->
                <div class="swiper ringMainSwiper mb-4 bg-[#F7F5F5] rounded-lg overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="aspect-square flex items-center justify-center p-8">
                                <img src="/assets/images/products/product-01.png" alt="Ring" class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="aspect-square flex items-center justify-center p-8">
                                <img src="/assets/images/products/product-02.png" alt="Ring" class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="aspect-square flex items-center justify-center p-8">
                                <img src="/assets/images/products/product-03.png" alt="Ring" class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="aspect-square flex items-center justify-center p-8">
                                <img src="/assets/images/products/product-04.png" alt="Ring" class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="aspect-square flex items-center justify-center p-8">
                                <img src="/assets/images/products/product-05.png" alt="Ring" class="w-full h-full object-contain">
                            </div>
                        </div>
                    </div>
                    <!-- Navigation Buttons -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <!-- Thumbnail Slider -->
                <div class="swiper ringThumbSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide cursor-pointer">
                            <div class="aspect-square bg-[#F7F5F5] rounded-lg overflow-hidden border-2 border-transparent hover:border-black transition-colors p-2">
                                <img src="/assets/images/products/product-01.png" alt="Thumbnail" class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div class="swiper-slide cursor-pointer">
                            <div class="aspect-square bg-[#F7F5F5] rounded-lg overflow-hidden border-2 border-transparent hover:border-black transition-colors p-2">
                                <img src="/assets/images/products/product-02.png" alt="Thumbnail" class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div class="swiper-slide cursor-pointer">
                            <div class="aspect-square bg-[#F7F5F5] rounded-lg overflow-hidden border-2 border-transparent hover:border-black transition-colors p-2">
                                <img src="/assets/images/products/product-03.png" alt="Thumbnail" class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div class="swiper-slide cursor-pointer">
                            <div class="aspect-square bg-[#F7F5F5] rounded-lg overflow-hidden border-2 border-transparent hover:border-black transition-colors p-2">
                                <img src="/assets/images/products/product-04.png" alt="Thumbnail" class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div class="swiper-slide cursor-pointer">
                            <div class="aspect-square bg-[#F7F5F5] rounded-lg overflow-hidden border-2 border-transparent hover:border-black transition-colors p-2">
                                <img src="/assets/images/products/product-05.png" alt="Thumbnail" class="w-full h-full object-contain">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Info -->
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-black mb-4">Solitaire ring 1</h1>
                
                <!-- Price -->
                <div class="mb-6">
                    <div class="text-xs text-[#666666] mb-2">Price Only for Setting</div>
                    <div class="flex items-center gap-3">
                        <span class="text-3xl font-bold text-black">$2,499.00</span>
                        <span class="text-xl text-[#999999] line-through">$2,699.00</span>
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-6">
                    <h3 class="text-sm font-medium text-black mb-2">Description</h3>
                    <p class="text-sm text-[#666666] leading-relaxed">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Praesent aliquam egestas viterra. Maecenas lacus odio, feugiat eu eros et amet, maximus sapien dolor. Vivamus nisl sapien, adipiscing ut amet eros ut amet, ultrices cursus ipsum. Sed consequat lectus ligula.
                    </p>
                </div>

                <!-- Metal Selection -->
                <div class="mb-6">
                    <h3 class="text-sm font-medium text-black mb-3">Metal</h3>
                    <div class="grid grid-cols-3 md:grid-cols-6 gap-3">
                        <button class="flex flex-col items-center gap-2 p-3 border-2 border-black rounded-lg hover:bg-gray-50 transition-colors">
                            <div class="w-8 h-8 rounded-full bg-[#FFD700] border border-[#E5E5E5]"></div>
                            <span class="text-xs text-black font-medium">18K Yellow</span>
                        </button>
                        <button class="flex flex-col items-center gap-2 p-3 border-2 border-[#E5E5E5] rounded-lg hover:border-black transition-colors">
                            <div class="w-8 h-8 rounded-full bg-[#F5F5F5] border border-[#E5E5E5]"></div>
                            <span class="text-xs text-[#666666] font-medium">18K White</span>
                        </button>
                        <button class="flex flex-col items-center gap-2 p-3 border-2 border-[#E5E5E5] rounded-lg hover:border-black transition-colors">
                            <div class="w-8 h-8 rounded-full bg-[#FFE4E1] border border-[#E5E5E5]"></div>
                            <span class="text-xs text-[#666666] font-medium">14K Rose</span>
                        </button>
                        <button class="flex flex-col items-center gap-2 p-3 border-2 border-[#E5E5E5] rounded-lg hover:border-black transition-colors">
                            <div class="w-8 h-8 rounded-full bg-[#E5E4E2] border border-[#E5E5E5]"></div>
                            <span class="text-xs text-[#666666] font-medium">Platinum</span>
                        </button>
                        <button class="flex flex-col items-center gap-2 p-3 border-2 border-[#E5E5E5] rounded-lg hover:border-black transition-colors">
                            <div class="w-8 h-8 rounded-full bg-[#C0C0C0] border border-[#E5E5E5]"></div>
                            <span class="text-xs text-[#666666] font-medium">Platinum</span>
                        </button>
                    </div>
                </div>

                <!-- Shape Selection -->
                <div class="mb-6">
                    <h3 class="text-sm font-medium text-black mb-3">Shape</h3>
                    <div class="grid grid-cols-3 md:grid-cols-6 gap-3">
                        <button class="flex flex-col items-center gap-2 p-3 border-2 border-black rounded-lg hover:bg-gray-50 transition-colors">
                            <div class="w-10 h-10 flex items-center justify-center">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="16" cy="16" r="12" stroke="currentColor" stroke-width="1.5"/>
                                </svg>
                            </div>
                            <span class="text-xs text-black font-medium">Round</span>
                        </button>
                        <button class="flex flex-col items-center gap-2 p-3 border-2 border-[#E5E5E5] rounded-lg hover:border-black transition-colors">
                            <div class="w-10 h-10 flex items-center justify-center">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="16" cy="16" r="12" stroke="currentColor" stroke-width="1.5"/>
                                </svg>
                            </div>
                            <span class="text-xs text-[#666666] font-medium">Princess</span>
                        </button>
                        <button class="flex flex-col items-center gap-2 p-3 border-2 border-[#E5E5E5] rounded-lg hover:border-black transition-colors">
                            <div class="w-10 h-10 flex items-center justify-center">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 4L20 12L28 16L20 20L16 28L12 20L4 16L12 12L16 4Z" stroke="currentColor" stroke-width="1.5"/>
                                </svg>
                            </div>
                            <span class="text-xs text-[#666666] font-medium">Cushion</span>
                        </button>
                        <button class="flex flex-col items-center gap-2 p-3 border-2 border-[#E5E5E5] rounded-lg hover:border-black transition-colors">
                            <div class="w-10 h-10 flex items-center justify-center">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="8" y="8" width="16" height="16" stroke="currentColor" stroke-width="1.5"/>
                                </svg>
                            </div>
                            <span class="text-xs text-[#666666] font-medium">Emerald</span>
                        </button>
                        <button class="flex flex-col items-center gap-2 p-3 border-2 border-[#E5E5E5] rounded-lg hover:border-black transition-colors">
                            <div class="w-10 h-10 flex items-center justify-center">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <ellipse cx="16" cy="16" rx="8" ry="12" stroke="currentColor" stroke-width="1.5"/>
                                </svg>
                            </div>
                            <span class="text-xs text-[#666666] font-medium">Oval</span>
                        </button>
                        <button class="flex flex-col items-center gap-2 p-3 border-2 border-[#E5E5E5] rounded-lg hover:border-black transition-colors">
                            <div class="w-10 h-10 flex items-center justify-center">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 4L20 12L28 16L20 20L16 28L12 20L4 16L12 12L16 4Z" stroke="currentColor" stroke-width="1.5"/>
                                </svg>
                            </div>
                            <span class="text-xs text-[#666666] font-medium">Radiant</span>
                        </button>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="space-y-3 mb-6">
                    <button class="w-full bg-black text-white px-6 py-3 rounded-lg font-medium hover:bg-gray-800 transition-colors">
                        Select Settings
                    </button>
                    <button class="w-full border border-[#E5E5E5] text-black px-6 py-3 rounded-lg font-medium hover:bg-gray-50 transition-colors flex items-center justify-center gap-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 17.5C10 17.5 2.5 12.5 2.5 6.66667C2.5 5.34058 3.02678 4.06881 3.96447 3.13112C4.90215 2.19344 6.17392 1.66667 7.5 1.66667C8.58333 1.66667 9.58333 2.08333 10 2.91667C10.4167 2.08333 11.4167 1.66667 12.5 1.66667C13.8261 1.66667 15.0979 2.19344 16.0355 3.13112C16.9732 4.06881 17.5 5.34058 17.5 6.66667C17.5 12.5 10 17.5 10 17.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        Add to wishlist
                    </button>
                </div>

                <!-- Product Information Accordion -->
                <div class="border-t border-[#E5E5E5]">
                    <details class="group border-b border-[#E5E5E5]" open>
                        <summary class="flex items-center justify-between py-4 cursor-pointer">
                            <span class="text-sm font-medium text-black">Product Information</span>
                            <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </summary>
                        <div class="pb-4 text-sm text-[#666666] space-y-2">
                            <p><strong>Style:</strong> Solitaire</p>
                            <p><strong>Metal:</strong> 18K Yellow Gold</p>
                            <p><strong>Setting Type:</strong> Prong</p>
                            <p><strong>Band Width:</strong> 2mm</p>
                            <p><strong>Center Stone:</strong> Not Included</p>
                        </div>
                    </details>

                    <details class="group border-b border-[#E5E5E5]">
                        <summary class="flex items-center justify-between py-4 cursor-pointer">
                            <span class="text-sm font-medium text-black">100% money-back guarantee</span>
                            <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </summary>
                        <div class="pb-4 text-sm text-[#666666]">
                            <p>We stand behind our products with a 100% money-back guarantee. If you're not completely satisfied with your purchase, return it within 30 days for a full refund.</p>
                        </div>
                    </details>

                    <details class="group border-b border-[#E5E5E5]">
                        <summary class="flex items-center justify-between py-4 cursor-pointer">
                            <span class="text-sm font-medium text-black">Free returns and resizing</span>
                            <svg class="w-5 h-5 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </summary>
                        <div class="pb-4 text-sm text-[#666666]">
                            <p>Enjoy free returns within 30 days and complimentary resizing to ensure your jewelry fits perfectly.</p>
                        </div>
                    </details>
                </div>

                <!-- Return Policy -->
                <div class="mt-6 flex items-center gap-2 text-sm text-[#666666]">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10C2 14.4183 5.58172 18 10 18C14.4183 18 18 14.4183 18 10C18 5.58172 14.4183 2 10 2V4C13.3137 4 16 6.68629 16 10C16 13.3137 13.3137 16 10 16C6.68629 16 4 13.3137 4 10C4 7.79086 5.07189 5.83566 6.75 4.66667L6.75 7H8.75V2H3.75V4L5.99902 3.99991C3.85661 5.45947 2.5 7.85498 2.5 10.5L2 10Z" fill="currentColor"/>
                    </svg>
                    <span>30-day returns, no fine print</span>
                </div>

                <!-- Share -->
                <div class="mt-6 pt-6 border-t border-[#E5E5E5]">
                    <div class="flex items-center gap-4">
                        <span class="text-sm font-medium text-black">Share:</span>
                        <div class="flex items-center gap-3">
                            <a href="#" class="text-[#666666] hover:text-black transition-colors">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 1.66667H12.5C11.3949 1.66667 10.3351 2.10567 9.55372 2.88705C8.77233 3.66844 8.33333 4.72827 8.33333 5.83333V8.33333H5.83333V11.6667H8.33333V18.3333H11.6667V11.6667H14.1667L15 8.33333H11.6667V5.83333C11.6667 5.61232 11.7545 5.40036 11.9107 5.24408C12.067 5.0878 12.279 5 12.5 5H15V1.66667Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#" class="text-[#666666] hover:text-black transition-colors">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.1667 2.5C18.3687 3.06286 17.4851 3.49338 16.55 3.775C16.0482 3.19788 15.3812 2.78887 14.6392 2.60323C13.8973 2.41759 13.1163 2.46429 12.4018 2.737C11.6873 3.00972 11.0737 3.49529 10.6442 4.12805C10.2146 4.76082 9.98979 5.51029 10 6.275V7.10833C8.53557 7.14626 7.08444 6.82147 5.77588 6.16283C4.46733 5.50419 3.34197 4.53215 2.5 3.33333C2.5 3.33333 -0.833333 10.8333 6.66667 14.1667C4.95041 15.3316 2.906 15.9157 0.833333 15.8333C8.33333 20 17.5 15.8333 17.5 6.25C17.4991 6.01788 17.477 5.78633 17.4333 5.55833C18.2839 4.71953 18.8841 3.66055 19.1667 2.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#" class="text-[#666666] hover:text-black transition-colors">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 7C8.89543 7 8 7.89543 8 9C8 10.1046 8.89543 11 10 11C11.1046 11 12 10.1046 12 9C12 7.89543 11.1046 7 10 7Z" stroke="currentColor" stroke-width="1.5"/>
                                    <path d="M10 3C6 3 3 9 3 9C3 9 6 15 10 15C14 15 17 9 17 9C17 9 14 3 10 3Z" stroke="currentColor" stroke-width="1.5"/>
                                </svg>
                            </a>
                            <a href="#" class="text-[#666666] hover:text-black transition-colors">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.6667 5.83333H3.33333C2.41286 5.83333 1.66667 6.57953 1.66667 7.5V15.8333C1.66667 16.7538 2.41286 17.5 3.33333 17.5H16.6667C17.5871 17.5 18.3333 16.7538 18.3333 15.8333V7.5C18.3333 6.57953 17.5871 5.83333 16.6667 5.83333Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <a href="#" class="text-[#666666] hover:text-black transition-colors">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="8.33333" stroke="currentColor" stroke-width="1.5"/>
                                    <path d="M10 5.83333V10L12.5 12.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 md:py-20 bg-black text-white">
    <div class="container-wrapper text-center">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold mb-4">Your Perfect Diamond Awaits</h2>
        <p class="text-gray-300 text-base md:text-lg mb-8 max-w-2xl mx-auto">
            Whether you're choosing a certified loose diamond or a timeless piece of jewellery, 
            find exceptional brilliance, trusted quality, and unfathomable deals in our forever.
        </p>
        <button class="bg-white text-black px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition-colors inline-flex items-center gap-2">
            Explore the Collection
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Thumbnail Swiper
    const thumbSwiper = new Swiper('.ringThumbSwiper', {
        spaceBetween: 10,
        slidesPerView: 5,
        freeMode: true,
        watchSlidesProgress: true,
        breakpoints: {
            320: {
                slidesPerView: 3,
            },
            640: {
                slidesPerView: 4,
            },
            768: {
                slidesPerView: 5,
            }
        }
    });

    // Main Swiper
    const mainSwiper = new Swiper('.ringMainSwiper', {
        spaceBetween: 10,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: thumbSwiper,
        },
    });
});
</script>

<style>
.ringThumbSwiper .swiper-slide-thumb-active .aspect-square {
    border-color: #000 !important;
}

.swiper-button-next,
.swiper-button-prev {
    color: #000;
    background: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.swiper-button-next:after,
.swiper-button-prev:after {
    font-size: 16px;
    font-weight: bold;
}
</style>

<?php
$content = ob_get_clean();
include 'layouts/main.php';
?>
