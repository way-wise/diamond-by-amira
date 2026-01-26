<?php
$pageTitle = "Choose Your Diamond";
$currentPage = "diamond-selection";

$products = [
    [
        'name' => '1.00 Carat Oval, F Color, VS1 Clarity',
        'category' => 'IGI Certified',
        'price' => 2499.00,
        'originalPrice' => 2650.00,
        'rating' => 5,
        'image' => '/assets/images/products/product-01.png',
        'hoverImage' => '/assets/images/products/product-02.png',
        'url' => 'diamond-detail.php'
    ],
    [
        'name' => '1.00 Carat Pear, G Color, VS2 Clarity',
        'category' => 'IGI Certified',
        'price' => 2499.00,
        'originalPrice' => 2650.00,
        'rating' => 5,
        'image' => '/assets/images/products/product-02.png',
        'hoverImage' => '/assets/images/products/product-03.png',
        'url' => 'diamond-detail.php'
    ],
    [
        'name' => '1.00 Carat Round, F Color, SI1 Clarity',
        'category' => 'IGI Certified',
        'price' => 2499.00,
        'originalPrice' => 2650.00,
        'rating' => 5,
        'image' => '/assets/images/products/product-03.png',
        'hoverImage' => '/assets/images/products/product-04.png',
        'url' => 'diamond-detail.php'
    ],
    [
        'name' => '1.00 Carat Radiant, G Color, VS1 Clarity',
        'category' => 'IGI Certified',
        'price' => 2499.00,
        'originalPrice' => 2650.00,
        'rating' => 5,
        'image' => '/assets/images/products/product-04.png',
        'hoverImage' => '/assets/images/products/product-05.png',
        'url' => 'diamond-detail.php'
    ],
    [
        'name' => '1.02 Carat Pear, F Color, VS2 Clarity',
        'category' => 'IGI Certified',
        'price' => 2499.00,
        'originalPrice' => 2650.00,
        'rating' => 5,
        'image' => '/assets/images/products/product-05.png',
        'hoverImage' => '/assets/images/products/product-06.png',
        'url' => 'diamond-detail.php'
    ],
    [
        'name' => '1.00 Carat Emerald, G Color, VS1 Clarity',
        'category' => 'IGI Certified',
        'price' => 2499.00,
        'originalPrice' => 2650.00,
        'rating' => 5,
        'image' => '/assets/images/products/product-06.png',
        'hoverImage' => '/assets/images/products/product-07.png',
        'url' => 'diamond-detail.php'
    ],
    [
        'name' => '1.00 Carat Heart, F Color, SI1 Clarity',
        'category' => 'IGI Certified',
        'price' => 2499.00,
        'originalPrice' => 2650.00,
        'rating' => 5,
        'image' => '/assets/images/products/product-07.png',
        'hoverImage' => '/assets/images/products/product-08.png',
        'url' => 'diamond-detail.php'
    ],
    [
        'name' => '1.00 Carat Princess, G Color, VS2 Clarity',
        'category' => 'IGI Certified',
        'price' => 2499.00,
        'originalPrice' => 2650.00,
        'rating' => 5,
        'image' => '/assets/images/products/product-08.png',
        'hoverImage' => '/assets/images/products/product-01.png',
        'url' => 'diamond-detail.php'
    ]
];

// Repeat products to fill the grid
$products = array_merge($products, $products, $products);

ob_start();
?>

<!-- Progress Steps -->
<section class="pt-8 md:pt-12">
    <div class="container-wrapper">
        <div class="px-3 md:px-6 py-3 md:py-5 rounded-2xl bg-white border border-[#D7D7D7]">
            <div class="flex md:grid md:grid-cols-3 gap-2 md:gap-8">
                <!-- step 1 - Selected Setting -->
                <div class="grow py-2 md:py-4 px-2 md:px-6 rounded-xl bg-transparent text-black flex items-center justify-between">
                    <div class="flex items-center gap-2 md:gap-4 text-black">
                        <div class="relative">
                            <img src="/assets/images/small-ring.png" alt="" />
                            <svg class="absolute -top-2 -right-2" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 15.75C9.88642 15.75 10.7642 15.5754 11.5831 15.2362C12.4021 14.897 13.1462 14.3998 13.773 13.773C14.3998 13.1462 14.897 12.4021 15.2362 11.5831C15.5754 10.7642 15.75 9.88642 15.75 9C15.75 8.11358 15.5754 7.23583 15.2362 6.41689C14.897 5.59794 14.3998 4.85382 13.773 4.22703C13.1462 3.60023 12.4021 3.10303 11.5831 2.76381C10.7642 2.42459 9.88642 2.25 9 2.25C7.20979 2.25 5.4929 2.96116 4.22703 4.22703C2.96116 5.4929 2.25 7.20979 2.25 9C2.25 10.7902 2.96116 12.5071 4.22703 13.773C5.4929 15.0388 7.20979 15.75 9 15.75ZM8.826 11.73L12.576 7.23L11.424 6.27L8.199 10.1392L6.53025 8.46975L5.46975 9.53025L7.71975 11.7802L8.30025 12.3608L8.826 11.73Z" fill="#16A34A"/>
                            </svg>
                        </div>
                        <div class="flex md:flex flex-col items-start gap-0">
                            <span class="block text-[12px] md:text-[14px] leading-[100%] font-medium text-[#000000]">The Bezel Set Solitaire</span>
                            <span class="block text-lg md:text-lg leading-[100%] font-bold text-[#000000] uppercase">$542.00 CAD</span>
                            <button type="button" class="block text-[12px] md:text-[14px] leading-[100%] font-medium text-gray-500 underline">Remove</button>
                        </div>
                    </div>
                </div>
                <!-- step 2 - Active Diamond Selection -->
                <div class="grow py-2 md:py-4 px-2 md:px-6 rounded-xl bg-[#F7F5F5] text-[#666666] flex items-center justify-between">
                    <div class="flex items-center gap-2 md:gap-4 text-black">
                        <span class="hidden md:inline-block text-[40px] leading-[120%] font-bold text-[#000000]">2</span>
                        <div class="hidden md:flex flex-col items-start gap-1">
                            <span class="block text-[14px] leading-[100%] font-medium text-[#000000]">Choose a</span>
                            <span class="block text-[20px] leading-[100%] font-bold text-[#000000] uppercase">Diamond</span>
                        </div>
                    </div>
                    <div class="p-1.5 md:p-[9px] border border-[#D7D7D7] bg-white rounded-md">
                        <svg class="size-5 md:size-[30px]" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_225_1994)">
                                <path d="M28.091 14.6658C24.4659 7.41548 24.5772 7.63632 24.5541 7.59536C24.3941 7.31223 24.0958 7.14858 23.7892 7.14858C23.6619 7.14858 6.2002 7.14636 6.13159 7.15257C5.83493 7.1787 5.57067 7.35553 5.4318 7.62126C5.42952 7.62571 5.42688 7.62993 5.42466 7.63438L1.90897 14.6657C1.90616 14.6713 1.90382 14.6771 1.90118 14.6827C1.89907 14.687 1.89673 14.6912 1.89473 14.6956C1.89327 14.6988 1.89222 14.7021 1.89081 14.7052C1.89075 14.7054 1.89069 14.7055 1.89069 14.7056C1.75786 15.0079 1.80339 15.3659 2.02552 15.6276C2.02827 15.6309 2.03079 15.6344 2.03366 15.6376L14.3385 29.7003C14.34 29.702 14.3416 29.7034 14.3431 29.705C14.6884 30.0936 15.303 30.1032 15.6568 29.705C15.6583 29.7034 15.6599 29.702 15.6614 29.7003L27.9663 15.6376C27.9669 15.6369 27.9675 15.6361 27.9681 15.6354C28.1926 15.3771 28.2549 14.9938 28.091 14.6658ZM22.3671 8.90639L20.1234 13.3938L16.7578 8.90639H22.3671ZM18.5157 14.1799H11.4843L15 9.49239L18.5157 14.1799ZM13.2422 8.90639L9.87661 13.3937L7.63294 8.90639H13.2422ZM6.21081 9.99284L8.30442 14.1799H4.11725L6.21081 9.99284ZM4.63206 15.9378H9.11735L12.4813 24.9084L4.63206 15.9378ZM15 26.6184L10.9948 15.9378H19.0052L15 26.6184ZM17.5186 24.9085L20.8826 15.9378H25.3679L17.5186 24.9085ZM21.6957 14.1799L23.7892 9.99284L25.8828 14.1799H21.6957Z" fill="#7B7B7B" />
                                <path d="M15 0C14.5146 0 14.1211 0.393516 14.1211 0.878906V3.51568C14.1211 4.00107 14.5146 4.39459 15 4.39459C15.4854 4.39459 15.8789 4.00107 15.8789 3.51568V0.878906C15.8789 0.393516 15.4854 0 15 0Z" fill="#7B7B7B" />
                                <path d="M12.1058 3.77326L10.348 2.01544C10.0049 1.67226 9.44833 1.67226 9.10509 2.01544C8.76185 2.35869 8.76185 2.91515 9.10509 3.25839L10.8629 5.01621C11.2061 5.35945 11.7626 5.35945 12.1058 5.01621C12.4491 4.67296 12.4491 4.1165 12.1058 3.77326Z" fill="#7B7B7B" />
                            </g>
                            <defs>
                                <clipPath id="clip0_225_1994">
                                    <rect width="30" height="30" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
                <!-- step 3 - Disabled Complete Ring -->
                <div class="py-2 md:py-4 px-2 md:px-6 rounded-xl bg-white cursor-not-allowed flex items-center justify-center md:justify-between">
                    <div class="flex items-center gap-2 md:gap-4 text-black">
                        <span class="hidden md:inline-block text-[40px] leading-[120%] font-bold text-[#000000]">3</span>
                        <div class="hidden md:flex flex-col gap-1">
                            <span class="block text-[14px] leading-[100%] font-medium text-[#000000]">Complete</span>
                            <span class="block text-[20px] leading-[100%] font-bold text-[#000000] uppercase">Ring</span>
                        </div>
                    </div>
                    <div class="p-1.5 md:p-[9px] border border-[#D7D7D7] bg-white rounded-md">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 11.375C11.3476 11.375 7.5625 15.1601 7.5625 19.8125C7.98669 30.9906 24.0151 30.9876 24.4375 19.8124C24.4375 15.1601 20.6525 11.375 16 11.375ZM16 26.375C12.3814 26.375 9.4375 23.4311 9.4375 19.8125C9.76744 11.1184 22.2339 11.1208 22.5625 19.8126C22.5625 23.4311 19.6186 26.375 16 26.375Z" fill="#7B7B7B" />
                            <path d="M19.9228 8.27281L21.8017 5.1735C21.9443 4.93819 21.9764 4.65213 21.8894 4.39106L20.6394 0.641062C20.5118 0.258188 20.1535 0 19.75 0H12.25C11.8464 0 11.4882 0.258188 11.3606 0.641062L10.1106 4.39106C10.0235 4.65213 10.0557 4.93819 10.1983 5.1735L12.0771 8.27281C-0.778101 12.8627 2.17952 31.7316 16.0001 32C29.8227 31.7304 32.7761 12.8603 19.9228 8.27281ZM12.9257 1.875H19.0743L19.6993 3.75H12.3006L12.9257 1.875ZM19.3353 5.625L18.0208 7.7935C16.7123 7.56987 15.2876 7.56987 13.9791 7.7935L12.6646 5.625H19.3353ZM16 30.125C10.3136 30.125 5.68746 25.4988 5.68746 19.8125C6.2059 6.15038 25.7961 6.15406 26.3125 19.8126C26.3125 25.4988 21.6863 30.125 16 30.125Z" fill="#7B7B7B" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Diamond Filter Tab Content -->
        <div class="p-5 md:p-10 mt-6 bg-white border border-[#D7D7D7] rounded-2xl">
            <div class="grid lg:grid-cols-12 gap-4">
                <div class="lg:col-span-7">
                    <div class="flex items-center justify-between mb-5">
                        <h2 class="text-xl font-bold text-[#000000]">Shape</h2>
                        <button onclick="toggleMoreShapesDiamond()" class="text-sm text-[#000000] bg-transparent inline-flex items-center gap-2 rounded-md px-4 py-2 hover:bg-gray-50 transition">
                            <span class="mr-2">More Shapes</span>
                            <svg id="diamond-more-icon" class="transition-transform" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 6.75L9 11.25L13.5 6.75" stroke="#737373" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="grid grid-cols-3 md:grid-cols-3 xl:grid-cols-6 gap-4 text-black">
                        <div class="shape-option-diamond flex flex-col items-center gap-2 p-4 border-2 border-black rounded-md cursor-pointer hover:bg-gray-50 transition" onclick="selectShapeDiamond(this)" data-shape="round">
                            <img src="/assets/images/shapes/round.png" alt="Round" class="size-16 object-cover">
                            <h2 class="text-sm">Round</h2>
                        </div>
                        <div class="shape-option-diamond flex flex-col items-center gap-2 p-4 border-2 border-[#D7D7D7] rounded-md cursor-pointer hover:bg-gray-50 transition" onclick="selectShapeDiamond(this)" data-shape="oval">
                            <img src="/assets/images/shapes/oval.png" alt="Oval" class="size-16 object-cover">
                            <h2 class="text-sm">Oval</h2>
                        </div>
                        <div class="shape-option-diamond flex flex-col items-center gap-2 p-4 border-2 border-[#D7D7D7] rounded-md cursor-pointer hover:bg-gray-50 transition" onclick="selectShapeDiamond(this)" data-shape="cushion">
                            <img src="/assets/images/shapes/cushion.png" alt="Cushion" class="size-16 object-cover">
                            <h2 class="text-sm">Cushion</h2>
                        </div>
                        <div class="shape-option-diamond flex flex-col items-center gap-2 p-4 border-2 border-[#D7D7D7] rounded-md cursor-pointer hover:bg-gray-50 transition" onclick="selectShapeDiamond(this)" data-shape="emerald">
                            <img src="/assets/images/shapes/emerald.png" alt="Emerald" class="size-16 object-cover">
                            <h2 class="text-sm">Emerald</h2>
                        </div>
                        <div class="shape-option-diamond flex flex-col items-center gap-2 p-4 border-2 border-[#D7D7D7] rounded-md cursor-pointer hover:bg-gray-50 transition" onclick="selectShapeDiamond(this)" data-shape="princess">
                            <img src="/assets/images/shapes/princess.png" alt="Princess" class="size-16 object-cover">
                            <h2 class="text-sm">Princess</h2>
                        </div>
                        <div class="shape-option-diamond flex flex-col items-center gap-2 p-4 border-2 border-[#D7D7D7] rounded-md cursor-pointer hover:bg-gray-50 transition" onclick="selectShapeDiamond(this)" data-shape="radiant">
                            <img src="/assets/images/shapes/radiant.png" alt="Radiant" class="size-16 object-cover">
                            <h2 class="text-sm">Radiant</h2>
                        </div>
                    </div>
                    <!-- More Shapes Section (Hidden by default) -->
                    <div id="diamond-more-shapes" class="hidden mt-4 grid grid-cols-3 md:grid-cols-3 xl:grid-cols-6 gap-4 text-black">
                        <div class="shape-option-diamond flex flex-col items-center gap-2 p-4 border-2 border-[#D7D7D7] rounded-md cursor-pointer hover:bg-gray-50 transition" onclick="selectShapeDiamond(this)" data-shape="pear">
                            <img src="/assets/images/shapes/pear.png" alt="Pear" class="size-16 object-cover">
                            <h2 class="text-sm">Pear</h2>
                        </div>
                        <div class="shape-option-diamond flex flex-col items-center gap-2 p-4 border-2 border-[#D7D7D7] rounded-md cursor-pointer hover:bg-gray-50 transition" onclick="selectShapeDiamond(this)" data-shape="marquise">
                            <img src="/assets/images/shapes/marquise.png" alt="Marquise" class="size-16 object-cover">
                            <h2 class="text-sm">Marquise</h2>
                        </div>
                        <div class="shape-option-diamond flex flex-col items-center gap-2 p-4 border-2 border-[#D7D7D7] rounded-md cursor-pointer hover:bg-gray-50 transition" onclick="selectShapeDiamond(this)" data-shape="heart">
                            <img src="/assets/images/shapes/heart.png" alt="Heart" class="size-16 object-cover">
                            <h2 class="text-sm">Heart</h2>
                        </div>
                        <div class="shape-option-diamond flex flex-col items-center gap-2 p-4 border-2 border-[#D7D7D7] rounded-md cursor-pointer hover:bg-gray-50 transition" onclick="selectShapeDiamond(this)" data-shape="asscher">
                            <img src="/assets/images/shapes/asscher.png" alt="Asscher" class="size-16 object-cover">
                            <h2 class="text-sm">Asscher</h2>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-5 lg:pl-12 lg:border-l lg:border-[#D7D7D7]">
                    <!-- CARAT SLIDER -->
                    <div class="mb-0">
                        <h2 class="text-xl font-bold text-[#000000]">Carat</h2>
                        <div class="flex flex-col gap-2">
                            <div class="relative h-8 flex items-center">
                                <div class="absolute left-0 right-0 h-[3px] bg-[#E8E8E8] rounded-full" style="top: 50%; margin-top: -1.5px;"></div>
                                <div id="caratSliderTrack2" class="absolute h-[3px] bg-black rounded-full" style="left: 0%; right: 0%; top: 50%; margin-top: -1.5px;"></div>
                                <input id="caratMin2" type="range" min="0.15" max="35" value="0.15" step="0.01"
                                    class="range-min absolute w-full bg-transparent appearance-none pointer-events-auto"
                                    style="top: 50%; margin-top: -8px; z-index: 2;" />
                                <input id="caratMax2" type="range" min="0.15" max="35" value="35" step="0.01"
                                    class="range-max absolute w-full bg-transparent appearance-none pointer-events-auto"
                                    style="top: 50%; margin-top: -8px; z-index: 1;" />
                            </div>
                            <div class="flex items-center gap-3">
                                <input type="text" readonly id="caratMinInput2" value="0.15" class="w-full grow px-4 py-1.5 bg-white border border-[#E8E8E8] rounded focus:outline-none text-[#bbbbbb]" />
                                <span class="text-xl text-[#bbbbbb]">—</span>
                                <input type="text" readonly id="caratMaxInput2" value="24" class="w-full grow px-4 py-1.5 bg-white border border-[#E8E8E8] rounded focus:outline-none text-[#bbbbbb]" />
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-6 col-span-full">
                <div class="lg:col-span-6 lg:pr-12">
                    <!-- Color Selection -->
                    <div class="mb-2">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="text-xl font-bold text-black">Color</h3>
                            <!-- Color tabs -->
                            <div class="flex gap-2">
                                <button type="button" onclick="openColorTab(event, 'white')" class="color-tab active px-4 py-1 rounded-md bg-black text-white text-xs">White</button>
                                <button type="button" onclick="openColorTab(event, 'fancy')" class="color-tab px-4 py-1 rounded-md border border-[#E8E8E8] text-black text-xs">Fancy</button>
                            </div>
                        </div>

                        <!-- White Color Tab Content -->
                        <div id="white-content" class="color-tab-content">
                            <div class="flex flex-col gap-2">
                                <div class="relative h-8 flex items-center">
                                    <div class="absolute left-0 right-0 h-[3px] bg-[#E8E8E8] rounded-full" style="top: 50%; margin-top: -1.5px;"></div>
                                    <div id="colorSliderTrack" class="absolute h-[3px] bg-black rounded-full" style="left: 0%; right: 0%; top: 50%; margin-top: -1.5px;"></div>
                                    <input id="colorMin" type="range" min="0" max="6" value="0" step="1"
                                        class="range-min absolute w-full bg-transparent appearance-none pointer-events-auto"
                                        style="top: 50%; margin-top: -8px; z-index: 2;" />
                                    <input id="colorMax" type="range" min="0" max="6" value="6" step="1"
                                        class="range-max absolute w-full bg-transparent appearance-none pointer-events-auto"
                                        style="top: 50%; margin-top: -8px; z-index: 1;" />
                                </div>
                                <div class="flex justify-between text-sm text-black px-1">
                                    <span>J</span>
                                    <span>I</span>
                                    <span>H</span>
                                    <span>G</span>
                                    <span>F</span>
                                    <span>E</span>
                                    <span>D</span>
                                </div>
                            </div>
                        </div>

                        <!-- Fancy Color Tab Content -->
                        <div id="fancy-content" class="color-tab-content hidden">
                            <div class="grid grid-cols-6 gap-2">
                                <button onclick="toggleFancyColor(this)" class="fancy-color-btn px-3 py-2 border border-[#D7D7D7] rounded-md text-xs text-black hover:border-black transition">Yellow</button>
                                <button onclick="toggleFancyColor(this)" class="fancy-color-btn px-3 py-2 border border-[#D7D7D7] rounded-md text-xs text-black hover:border-black transition">Pink</button>
                                <button onclick="toggleFancyColor(this)" class="fancy-color-btn px-3 py-2 border border-[#D7D7D7] rounded-md text-xs text-black hover:border-black transition">Blue</button>
                                <button onclick="toggleFancyColor(this)" class="fancy-color-btn px-3 py-2 border border-[#D7D7D7] rounded-md text-xs text-black hover:border-black transition">Red</button>
                                <button onclick="toggleFancyColor(this)" class="fancy-color-btn px-3 py-2 border border-[#D7D7D7] rounded-md text-xs text-black hover:border-black transition">Green</button>
                                <button onclick="toggleFancyColor(this)" class="fancy-color-btn px-3 py-2 border border-[#D7D7D7] rounded-md text-xs text-black hover:border-black transition">Purple</button>
                                <button onclick="toggleFancyColor(this)" class="fancy-color-btn px-3 py-2 border border-[#D7D7D7] rounded-md text-xs text-black hover:border-black transition">Orange</button>
                                <button onclick="toggleFancyColor(this)" class="fancy-color-btn px-3 py-2 border border-[#D7D7D7] rounded-md text-xs text-black hover:border-black transition">Violet</button>
                                <button onclick="toggleFancyColor(this)" class="fancy-color-btn px-3 py-2 border border-[#D7D7D7] rounded-md text-xs text-black hover:border-black transition">Gray</button>
                                <button onclick="toggleFancyColor(this)" class="fancy-color-btn px-3 py-2 border border-[#D7D7D7] rounded-md text-xs text-black hover:border-black transition">Black</button>
                                <button onclick="toggleFancyColor(this)" class="fancy-color-btn px-3 py-2 border border-[#D7D7D7] rounded-md text-xs text-black hover:border-black transition">Brown</button>
                                <button onclick="toggleFancyColor(this)" class="fancy-color-btn px-3 py-2 border border-[#D7D7D7] rounded-md text-xs text-black hover:border-black transition">Champagne</button>
                                <button onclick="toggleFancyColor(this)" class="fancy-color-btn px-3 py-2 border border-[#D7D7D7] rounded-md text-xs text-black hover:border-black transition">Cognac</button>
                                <button onclick="toggleFancyColor(this)" class="fancy-color-btn px-3 py-2 border border-[#D7D7D7] rounded-md text-xs text-black hover:border-black transition">Chameleon</button>
                                <button onclick="toggleFancyColor(this)" class="fancy-color-btn px-3 py-2 border border-[#D7D7D7] rounded-md text-xs text-black hover:border-black transition">White</button>
                                <button onclick="toggleFancyColor(this)" class="fancy-color-btn px-3 py-2 border border-[#D7D7D7] rounded-md text-xs text-black hover:border-black transition">S & P</button>
                                <button onclick="toggleFancyColor(this)" class="fancy-color-btn px-3 py-2 border border-[#D7D7D7] rounded-md text-xs text-black hover:border-black transition">Other</button>
                            </div>
                        </div>
                    </div>
                    <!-- Cut Slider -->
                    <div class="mb-2">
                        <h3 class="text-xl font-bold text-black mb-2">Cut</h3>
                        <div class="flex flex-col gap-2">
                            <div class="relative h-8 flex items-center">
                                <div class="absolute left-0 right-0 h-[3px] bg-[#E8E8E8] rounded-full" style="top: 50%; margin-top: -1.5px;"></div>
                                <div id="cutSliderTrack" class="absolute h-[3px] bg-black rounded-full" style="left: 0%; right: 0%; top: 50%; margin-top: -1.5px;"></div>
                                <input id="cutMin" type="range" min="0" max="2" value="0" step="1"
                                    class="range-min absolute w-full bg-transparent appearance-none pointer-events-auto"
                                    style="top: 50%; margin-top: -8px; z-index: 2;" />
                                <input id="cutMax" type="range" min="0" max="2" value="2" step="1"
                                    class="range-max absolute w-full bg-transparent appearance-none pointer-events-auto"
                                    style="top: 50%; margin-top: -8px; z-index: 1;" />
                            </div>
                            <div class="flex justify-between text-sm text-black px-1">
                                <span>Very Good</span>
                                <span>Excellent</span>
                                <span>Ideal</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-6 lg:pl-12 lg:border-l lg:border-[#D7D7D7]">
                    <!-- Clarity Slider -->
                    <div class="mb-2">
                        <h3 class="text-xl font-bold text-black mb-2">Clarity</h3>
                        <div class="flex flex-col gap-2">
                            <div class="relative h-8 flex items-center">
                                <div class="absolute left-0 right-0 h-[3px] bg-[#E8E8E8] rounded-full" style="top: 50%; margin-top: -1.5px;"></div>
                                <div id="claritySliderTrack" class="absolute h-[3px] bg-black rounded-full" style="left: 0%; right: 0%; top: 50%; margin-top: -1.5px;"></div>
                                <input id="clarityMin" type="range" min="0" max="10" value="0" step="1"
                                    class="range-min absolute w-full bg-transparent appearance-none pointer-events-auto"
                                    style="top: 50%; margin-top: -8px; z-index: 2;" />
                                <input id="clarityMax" type="range" min="0" max="10" value="10" step="1"
                                    class="range-max absolute w-full bg-transparent appearance-none pointer-events-auto"
                                    style="top: 50%; margin-top: -8px; z-index: 1;" />
                            </div>
                            <div class="flex justify-between text-xs text-black px-1">
                                <span>I3</span>
                                <span>I2</span>
                                <span>I1</span>
                                <span>SI2</span>
                                <span>SI1</span>
                                <span>VS2</span>
                                <span>VS1</span>
                                <span>VVS2</span>
                                <span>VVS1</span>
                                <span>IF</span>
                                <span>FL</span>
                            </div>
                        </div>
                    </div>
                    <!-- Price Slider -->
                    <div class="mb-6">
                        <h3 class="text-xl font-bold text-black mb-2">Price</h3>
                        <div class="flex flex-col gap-2">
                            <div class="relative h-8 flex items-center">
                                <div class="absolute left-0 right-0 h-[3px] bg-[#E8E8E8] rounded-full" style="top: 50%; margin-top: -1.5px;"></div>
                                <div id="priceSliderTrack2" class="absolute h-[3px] bg-black rounded-full" style="left: 0%; right: 0%; top: 50%; margin-top: -1.5px;"></div>
                                <input id="priceMin2" type="range" min="500" max="8500" value="500" step="100"
                                    class="range-min absolute w-full bg-transparent appearance-none pointer-events-auto"
                                    style="top: 50%; margin-top: -8px; z-index: 2;" />
                                <input id="priceMax2" type="range" min="500" max="8500" value="8500" step="100"
                                    class="range-max absolute w-full bg-transparent appearance-none pointer-events-auto"
                                    style="top: 50%; margin-top: -8px; z-index: 1;" />
                            </div>
                            <div class="flex items-center gap-3">
                                <input type="text" readonly id="priceMinInput2" value="$ 500" class="w-full grow px-4 py-2 bg-white border border-[#E8E8E8] rounded focus:outline-none text-[#bbbbbb]" />
                                <span class="text-xl text-[#bbbbbb]">—</span>
                                <input type="text" readonly id="priceMaxInput2" value="$ 8,500" class="w-full grow px-4 py-2 bg-white border border-[#E8E8E8] rounded focus:outline-none text-[#bbbbbb]" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Shop Header -->
<section class="py-8 md:py-12">
    <div class="container-wrapper">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-8">
            <div>
                <h1 class="text-sm font-medium text-black mb-2">Results - 24,563 Diamonds</h1>
            </div>

            <!-- Filter and Sort Controls -->
            <div class="flex items-center gap-3">
                <!-- Filter Button -->
                <button class="flex items-center gap-2 bg-transparent text-black px-4 py-2.5 rounded-lg text-sm font-medium hover:bg-gray-50 transition-colors">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2V4C16.4183 4 20 7.58172 20 12C20 16.4183 16.4183 20 12 20C7.58172 20 4 16.4183 4 12C4 9.25022 5.38734 6.82447 7.50024 5.38451L7.5 8H9.5V2H3.5V4L5.99918 3.99989C3.57075 5.82434 2 8.72873 2 12Z" fill="black" />
                    </svg>
                    <span class="hidden md:inline">Reset</span>
                </button>
                <!-- Sort Dropdown -->
                <div class="relative">
                    <select class="appearance-none bg-white border border-[#E5E5E5] rounded-lg px-4 py-2.5 pr-10 text-sm text-black focus:outline-none focus:border-black cursor-pointer">
                        <option>Sort by: Best Sellers</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Newest First</option>
                        <option>Top Rated</option>
                    </select>
                    <svg class="absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6L8 10L12 6" stroke="#666666" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
            <?php foreach ($products as $product): ?>
            <a href="<?php echo htmlspecialchars($product['url']); ?>" class="group border border-[#E5E5E5]">
                <div class="bg-gray-100 overflow-hidden aspect-square relative">
                    <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="size-full object-cover transition-all duration-700 ease-in-out group-hover:opacity-0 group-hover:scale-105">
                    <?php if (isset($product['hoverImage'])): ?>
                        <img src="<?php echo htmlspecialchars($product['hoverImage']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" class="size-full object-cover absolute inset-0 opacity-0 scale-95 transition-all duration-700 ease-in-out group-hover:opacity-100 group-hover:scale-100">
                    <?php endif; ?>
                </div>
                <div class="p-3.5 space-y-2.5">
                    <p class="text-gray-500 text-sm"><?php echo htmlspecialchars($product['category']); ?></p>
                    <h3 class="text-sm font-semibold text-gray-900 line-clamp-2 group-hover:text-gray-600 transition-colors"><?php echo htmlspecialchars($product['name']); ?></h3>
                    <div class="flex items-center gap-1">
                        <?php for ($i = 0; $i < 5; $i++): ?>
                            <svg class="w-4 h-4 <?php echo $i < $product['rating'] ? 'text-yellow-400' : 'text-gray-300'; ?> fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                            </svg>
                        <?php endfor; ?>
                        <span class="text-xs text-[#666666] ml-1">(<?php echo $product['rating']; ?>)</span>
                    </div>
                    <div class="flex items-center gap-2 pt-1">
                        <span class="text-base font-bold text-gray-900">$<?php echo number_format($product['price'], 2); ?></span>
                        <?php if (isset($product['originalPrice']) && $product['originalPrice'] != $product['price']): ?>
                            <span class="text-sm text-gray-500 line-through">$<?php echo number_format($product['originalPrice'], 2); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<script>
function selectShapeDiamond(element) {
    document.querySelectorAll('.shape-option-diamond').forEach(option => {
        option.classList.remove('border-black');
        option.classList.add('border-[#D7D7D7]');
    });
    
    element.classList.remove('border-[#D7D7D7]');
    element.classList.add('border-black');
}

function toggleMoreShapesDiamond() {
    const moreShapesSection = document.getElementById('diamond-more-shapes');
    const moreIcon = document.getElementById('diamond-more-icon');
    
    if (!moreShapesSection) return;
    
    if (moreShapesSection.classList.contains('hidden')) {
        moreShapesSection.classList.remove('hidden');
        if (moreIcon) {
            moreIcon.classList.add('rotate-180');
        }
    } else {
        moreShapesSection.classList.add('hidden');
        if (moreIcon) {
            moreIcon.classList.remove('rotate-180');
        }
    }
}
</script>

<?php
$content = ob_get_clean();
include 'layouts/main.php';
?>
