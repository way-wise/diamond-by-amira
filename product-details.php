<?php
$pageTitle = "Pear Shaped Diamond Three Stone Engagement Ring In 14K White Gold";
$currentPage = "product";

ob_start();
?>

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


<!-- Progress Steps - Selected Items -->
<section class="pt-8 md:pt-12">
    <div class="container-wrapper">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-6 border border-[#D7D7D7] rounded-2xl">
            <!-- Step 1: Choose Your Diamond -->
            <div class="p-4 flex items-center gap-3">
                <div class="relative">
                    <img src="/assets/images/small-ring.png" alt="Diamond" class="w-12 h-12 object-contain">
                    <svg class="absolute -top-1 -right-1 size-4" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="10" fill="#16A34A" />
                        <path d="M6 10L8.5 12.5L14 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-xs text-[#666666]">Choose Your Diamond</p>
                    <p class="text-sm font-bold text-black">$523.00 CAD</p>
                </div>
            </div>

            <!-- Step 2: Choose Your Setting -->
            <div class="p-4 flex items-center gap-3">
                <div class="relative">
                    <img src="/assets/images/small-diamond.png" alt="Ring" class="w-12 h-12 object-contain">
                    <svg class="absolute -top-1 -right-1 size-4" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="10" fill="#16A34A" />
                        <path d="M6 10L8.5 12.5L14 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-xs text-[#666666]">Choose Your Setting</p>
                    <p class="text-sm font-bold text-black">$42.00 CAD</p>
                </div>
            </div>

            <!-- Step 3: Complete -->
            <div class="bg-[#F7F5F5] rounded-lg p-4 flex items-center gap-3">
                <div class="relative">
                    <img src="/assets/images/complete-ring.png" alt="Ring" class="w-12 h-12 object-contain">
                    <svg class="absolute -top-1 -right-1 size-4" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="10" fill="#16A34A" />
                        <path d="M6 10L8.5 12.5L14 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <div class="flex-1">
                    <p class="text-xs text-[#666666]">Complete</p>
                    <p class="text-sm font-bold text-black">$65.00 CAD</p>
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
                <div class="swiper productMainSwiper mb-4 bg-[#F7F5F5] rounded-lg overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="aspect-square flex items-center justify-center p-8">
                                <img src="/assets/images/products/product-01.png" alt="Product" class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="aspect-square flex items-center justify-center p-8">
                                <img src="/assets/images/products/product-02.png" alt="Product" class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="aspect-square flex items-center justify-center p-8">
                                <img src="/assets/images/products/product-03.png" alt="Product" class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="aspect-square flex items-center justify-center p-8">
                                <img src="/assets/images/products/product-04.png" alt="Product" class="w-full h-full object-contain">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="aspect-square flex items-center justify-center p-8">
                                <img src="/assets/images/products/product-05.png" alt="Product" class="w-full h-full object-contain">
                            </div>
                        </div>
                    </div>
                    <!-- Navigation Buttons -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <!-- Thumbnail Slider -->
                <div class="swiper productThumbSwiper">
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
                <!-- Rating -->
                <div class="flex items-center gap-2 mb-4">
                    <div class="flex items-center gap-1">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 1L10.163 5.526L15 6.11L11.5 9.473L12.326 14.29L8 11.926L3.674 14.29L4.5 9.473L1 6.11L5.837 5.526L8 1Z" fill="#FFD700" />
                            </svg>
                        <?php endfor; ?>
                    </div>
                    <span class="text-sm text-[#666666]">(24)</span>
                </div>

                <h1 class="text-2xl md:text-3xl font-bold text-black mb-4">Pear Shaped Diamond Three Stone Engagement Ring In 14K White Gold</h1>

                <!-- Price -->
                <div class="my-6 py-5 border-b border-[#E5E5E5] border-t flex items-center justify-between">
                    <div class="text-xs text-[#666666]">Final ring price</div>
                    <div class="flex items-center gap-3">
                        <span class="text-3xl font-bold text-black">$2,499.00</span>
                        <span class="text-xl text-[#999999] line-through">$2,699.00</span>
                    </div>
                </div>

                <!-- Description -->
                <div class="mb-6 pb-6 border-b border-[#E5E5E5]">
                    <p class="text-sm text-[#666666] leading-relaxed">
                        Nam ut sapien ante elit accumsan gravida. Morbi vitae orci auctor, rutrum nunc a, blandit odio. Praesent aliquam egestas viterra. Maecenas lacus odio, feugiat eu eros et amet, maximus sapien dolor. Vivamus nisl sapien, adipiscing ut amet eros ut amet, ultrices cursus ipsum. Sed consequat lectus ligula.
                    </p>
                </div>

                <!-- Action Buttons -->
                <div class="space-y-3 mb-6">
                    <button class="w-full bg-black text-white px-6 py-3 font-medium hover:bg-gray-800 transition-colors">
                        Add to Cart
                    </button>
                    <button class="w-full border border-black text-black px-6 py-3 font-medium hover:bg-gray-50 transition-colors flex items-center justify-center gap-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 17.5C10 17.5 2.5 12.5 2.5 6.66667C2.5 5.34058 3.02678 4.06881 3.96447 3.13112C4.90215 2.19344 6.17392 1.66667 7.5 1.66667C8.58333 1.66667 9.58333 2.08333 10 2.91667C10.4167 2.08333 11.4167 1.66667 12.5 1.66667C13.8261 1.66667 15.0979 2.19344 16.0355 3.13112C16.9732 4.06881 17.5 5.34058 17.5 6.66667C17.5 12.5 10 17.5 10 17.5Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
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
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </summary>
                        <div class="pb-4 text-sm text-[#666666]">
                            <p>Enjoy free returns within 30 days and complimentary resizing to ensure your jewelry fits perfectly.</p>
                        </div>
                    </details>
                </div>

                <!-- Return Policy -->
                <div class="my-6 flex justify-center items-center gap-2 text-sm text-[#666666]">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.2815 9.3321C13.4384 9.17664 13.4397 8.92338 13.2842 8.76642C13.1287 8.60946 12.8755 8.60823 12.7185 8.76369L13 9.04789L13.2815 9.3321ZM8 13.9999L7.71852 14.2841C7.87442 14.4385 8.12558 14.4385 8.28148 14.2841L8 13.9999ZM3.28148 8.76369C3.12451 8.60823 2.87125 8.60946 2.7158 8.76642C2.56034 8.92338 2.56156 9.17664 2.71852 9.3321L3 9.04789L3.28148 8.76369ZM2.72101 9.3346C2.87933 9.48866 3.13258 9.48521 3.28664 9.32689C3.44071 9.16856 3.43725 8.91532 3.27893 8.76125L2.99997 9.04793L2.72101 9.3346ZM7.99997 4.67059L7.67893 4.9092C7.75416 5.01043 7.87273 5.07024 7.99886 5.07059C8.12498 5.07094 8.24388 5.01179 8.31968 4.91098L7.99997 4.67059ZM12.7197 8.76656C12.5621 8.92136 12.5598 9.17461 12.7146 9.33222C12.8694 9.48982 13.1227 9.4921 13.2803 9.3373L13 9.05193L12.7197 8.76656ZM13 9.04789L12.7185 8.76369L7.71852 13.7157L8 13.9999L8.28148 14.2841L13.2815 9.3321L13 9.04789ZM8 13.9999L8.28148 13.7157L3.28148 8.76369L3 9.04789L2.71852 9.3321L7.71852 14.2841L8 13.9999ZM2.99997 9.04793L3.27893 8.76125C2.48769 7.9913 2.19578 6.84229 2.52358 5.78805L2.14162 5.66928L1.75966 5.55052C1.34246 6.89228 1.71398 8.35466 2.72101 9.3346L2.99997 9.04793ZM2.14162 5.66928L2.52358 5.78805C2.85139 4.7338 3.74337 3.9529 4.8317 3.76737L4.76448 3.37306L4.69726 2.97875C3.31211 3.21488 2.17686 4.20875 1.75966 5.55052L2.14162 5.66928ZM4.76448 3.37306L4.8317 3.76737C5.92003 3.58184 7.02035 4.02311 7.67893 4.9092L7.99997 4.67059L8.32101 4.43198C7.48282 3.30423 6.08241 2.74262 4.69726 2.97875L4.76448 3.37306ZM7.99997 4.67059L8.31968 4.91098C8.98101 4.03144 10.079 3.59604 11.1634 3.7833L11.2314 3.38914L11.2995 2.99497C9.91939 2.75663 8.52196 3.31079 7.68026 4.4302L7.99997 4.67059ZM11.2314 3.38914L11.1634 3.7833C12.2478 3.97057 13.1361 4.749 13.4642 5.7994L13.846 5.68016L14.2278 5.56091C13.8103 4.22404 12.6796 3.23331 11.2995 2.99497L11.2314 3.38914ZM13.846 5.68016L13.4642 5.7994C13.7922 6.8498 13.5048 7.99545 12.7197 8.76656L13 9.05193L13.2803 9.3373C14.2794 8.35588 14.6453 6.89779 14.2278 5.56091L13.846 5.68016Z" fill="#242424" />
                    </svg>
                    <span>30-day returns, no fine print</span>
                </div>

                <!-- Share -->
                <div class="pt-6 border-t border-[#E5E5E5]">
                    <div class="flex justify-center items-center gap-4">
                        <span class="text-sm font-medium text-black">Share:</span>
                        <div class="flex items-center gap-3">
                            <a href="#" class="text-[#666666] hover:text-black transition-colors">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14.6708 14.2H16.6708L17.4708 11H14.6708V9.4C14.6708 8.576 14.6708 7.8 16.2708 7.8H17.4708V5.112C17.21 5.0776 16.2252 5 15.1852 5C13.0132 5 11.4708 6.3256 11.4708 8.76V11H9.0708V14.2H11.4708V21H14.6708V14.2Z" fill="#737373" />
                                </svg>
                            </a>
                            <a href="#" class="text-[#666666] hover:text-black transition-colors">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.1157 5H20.8444L14.8836 11.83L21.8967 21.1257H16.4062L12.1028 15.4891L7.18428 21.1257H4.45302L10.8281 13.8178L4.10352 5.00127H9.73379L13.6178 10.1524L18.1157 5ZM17.1561 19.4887H18.6685L8.90768 6.55182H7.28595L17.1561 19.4887Z" fill="#737373" />
                                </svg>
                            </a>
                            <a href="#" class="text-[#666666] hover:text-black transition-colors">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_484_675)">
                                        <path d="M13.0001 21.0003C17.4186 21.0003 21.0003 17.4186 21.0003 13.0001C21.0003 8.58166 17.4186 5 13.0001 5C8.58166 5 5 8.58166 5 13.0001C5 16.205 6.88483 18.9698 9.60648 20.2467L11.4385 11.6337C11.4854 11.4291 11.611 11.251 11.788 11.1381C11.965 11.0252 12.1793 10.9863 12.3847 11.03C12.5901 11.0737 12.7701 11.1964 12.8858 11.3716C13.0015 11.5468 13.0438 11.7605 13.0033 11.9665C12.7841 13.0001 12.5921 13.4001 12.6009 13.8802C12.6145 14.6322 12.8193 15.0338 13.0177 15.2418C13.2201 15.4538 13.5121 15.5682 13.8938 15.5618C14.2834 15.5538 14.7242 15.417 15.1146 15.1706C15.8738 14.6938 16.2002 13.8762 16.2002 13.0001C16.1997 12.5247 16.0932 12.0554 15.8886 11.6263C15.684 11.1972 15.3863 10.8191 15.0173 10.5194C14.6482 10.2198 14.217 10.0061 13.755 9.89396C13.293 9.78182 12.8119 9.77401 12.3465 9.87112C11.8811 9.96822 11.4432 10.1678 11.0646 10.4553C10.6861 10.7429 10.3763 11.1111 10.1579 11.5334C9.93944 11.9556 9.81783 12.4212 9.80189 12.8964C9.78594 13.3715 9.87606 13.8442 10.0657 14.2802C10.143 14.4732 10.1421 14.6887 10.0633 14.8811C9.98441 15.0735 9.83374 15.2276 9.6432 15.3108C9.45265 15.394 9.2372 15.3998 9.04248 15.3268C8.84777 15.2539 8.68909 15.1081 8.60006 14.9202C8.28159 14.1897 8.14999 13.3915 8.21712 12.5974C8.28425 11.8034 8.54801 11.0386 8.9846 10.3719C9.42119 9.70531 10.0169 9.15786 10.7179 8.77899C11.4189 8.40011 12.2033 8.20172 13.0001 8.20172C13.797 8.20172 14.5813 8.40011 15.2824 8.77899C15.9834 9.15786 16.5791 9.70531 17.0157 10.3719C17.4523 11.0386 17.716 11.8034 17.7832 12.5974C17.8503 13.3915 17.7187 14.1897 17.4002 14.9202C17.1058 15.5986 16.5682 16.1474 15.9666 16.5258C15.3626 16.9058 14.641 17.149 13.9226 17.1618C13.2673 17.1738 12.5849 16.9922 12.0353 16.5154L11.1281 20.7811C11.7281 20.9251 12.3553 21.0011 12.9993 21.0011L13.0001 21.0003Z" fill="#737373" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_484_675">
                                            <rect width="26" height="26" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="#" class="text-[#666666] hover:text-black transition-colors">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.59418 6.77845C8.59394 7.24989 8.40644 7.70192 8.07292 8.03511C7.73939 8.3683 7.28717 8.55535 6.81573 8.55512C6.34429 8.55488 5.89226 8.36738 5.55907 8.03385C5.22588 7.70033 5.03883 7.24811 5.03906 6.77667C5.0393 6.30523 5.2268 5.8532 5.56033 5.52001C5.89385 5.18682 6.34607 4.99976 6.81751 5C7.28895 5.00024 7.74098 5.18774 8.07417 5.52126C8.40736 5.85479 8.59442 6.30701 8.59418 6.77845ZM8.64751 9.8714H5.09239V20.9989H8.64751V9.8714ZM14.2646 9.8714H10.7273V20.9989H14.229V15.1596C14.229 11.9067 18.4685 11.6045 18.4685 15.1596V20.9989H21.9792V13.9509C21.9792 8.46713 15.7044 8.67155 14.229 11.3645L14.2646 9.8714Z" fill="#737373" />
                                </svg>
                            </a>
                            <a href="#" class="text-[#666666] hover:text-black transition-colors">
                                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13 5C8.584 5 5 8.584 5 13C5 17.416 8.584 21 13 21C17.416 21 21 17.416 21 13C21 8.584 17.416 5 13 5ZM16.712 10.44C16.592 11.704 16.072 14.776 15.808 16.192C15.696 16.792 15.472 16.992 15.264 17.016C14.8 17.056 14.448 16.712 14 16.416C13.296 15.952 12.896 15.664 12.216 15.216C11.424 14.696 11.936 14.408 12.392 13.944C12.512 13.824 14.56 11.96 14.6 11.792C14.6056 11.7666 14.6048 11.7401 14.5978 11.715C14.5909 11.6899 14.5779 11.6669 14.56 11.648C14.512 11.608 14.448 11.624 14.392 11.632C14.32 11.648 13.2 12.392 11.016 13.864C10.696 14.08 10.408 14.192 10.152 14.184C9.864 14.176 9.32 14.024 8.912 13.888C8.408 13.728 8.016 13.64 8.048 13.36C8.064 13.216 8.264 13.072 8.64 12.92C10.976 11.904 12.528 11.232 13.304 10.912C15.528 9.984 15.984 9.824 16.288 9.824C16.352 9.824 16.504 9.84 16.6 9.92C16.68 9.984 16.704 10.072 16.712 10.136C16.704 10.184 16.72 10.328 16.712 10.44Z" fill="#737373" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- You may like also Section -->
<section class="py-12 md:py-16 bg-[#F7F5F5]">
    <div class="container-wrapper">
        <h2 class="text-2xl md:text-3xl font-bold text-black mb-8">You may like also</h2>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 lg:gap-6">
            <?php
            $recommendedProducts = [
                ['name' => 'Celeste Brilliance Solitaire Ring', 'category' => 'Diamond Ring', 'price' => 2499.00, 'originalPrice' => 2649.00, 'image' => '/assets/images/products/product-01.png', 'hoverImage' => '/assets/images/products/product-02.png'],
                ['name' => 'Celeste Brilliance Solitaire Ring', 'category' => 'Diamond Ring', 'price' => 2499.00, 'originalPrice' => 2649.00, 'image' => '/assets/images/products/product-02.png', 'hoverImage' => '/assets/images/products/product-03.png'],
                ['name' => 'Celeste Brilliance Solitaire Ring', 'category' => 'Diamond Ring', 'price' => 2499.00, 'originalPrice' => 2649.00, 'image' => '/assets/images/products/product-03.png', 'hoverImage' => '/assets/images/products/product-04.png'],
                ['name' => 'Celeste Brilliance Solitaire Ring', 'category' => 'Diamond Ring', 'price' => 2499.00, 'originalPrice' => 2649.00, 'image' => '/assets/images/products/product-04.png', 'hoverImage' => '/assets/images/products/product-05.png'],
            ];
            foreach ($recommendedProducts as $product): ?>
                <a href="#" class="group bg-white border border-[#E5E5E5] hover:shadow-lg transition-all duration-300">
                    <div class="bg-[#F7F5F5] overflow-hidden aspect-square relative">
                        <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>" class="size-full object-cover transition-all duration-700 ease-in-out group-hover:opacity-0 group-hover:scale-105">
                        <img src="<?php echo $product['hoverImage']; ?>" alt="<?php echo $product['name']; ?>" class="size-full object-cover absolute inset-0 opacity-0 scale-95 transition-all duration-700 ease-in-out group-hover:opacity-100 group-hover:scale-100">
                    </div>
                    <div class="p-3 md:p-4 space-y-2">
                        <p class="text-[#666666] text-xs md:text-sm"><?php echo $product['category']; ?></p>
                        <h3 class="text-sm md:text-base font-semibold text-black line-clamp-2 group-hover:text-gray-600 transition-colors leading-snug">
                            <?php echo $product['name']; ?>
                        </h3>
                        <div class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                            <span class="text-xs text-[#666666] ml-1">(24)</span>
                        </div>
                        <div class="flex items-center gap-2 pt-1">
                            <span class="text-base md:text-lg font-bold text-black">$<?php echo number_format($product['price'], 2); ?></span>
                            <span class="text-xs md:text-sm text-[#999999] line-through">$<?php echo number_format($product['originalPrice'], 2); ?></span>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const thumbSwiper = new Swiper('.productThumbSwiper', {
            spaceBetween: 10,
            slidesPerView: 5,
            freeMode: true,
            watchSlidesProgress: true,
            breakpoints: {
                320: {
                    slidesPerView: 3
                },
                640: {
                    slidesPerView: 4
                },
                768: {
                    slidesPerView: 5
                }
            }
        });

        const mainSwiper = new Swiper('.productMainSwiper', {
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
    .productThumbSwiper .swiper-slide-thumb-active .aspect-square {
        border-color: #000 !important;
    }

    .swiper-button-next,
    .swiper-button-prev {
        color: #000;
        background: white;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
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