<?php
$pageTitle = "Choose Your Setting";
$currentPage = "settings-selection";

$products = [
    [
        'name' => 'Celeste Brilliance Solitaire Ring',
        'category' => 'Diamond Ring',
        'price' => 2449.00,
        'originalPrice' => 2599.00,
        'rating' => 5,
        'image' => '/assets/images/products/product-01.png',
        'hoverImage' => '/assets/images/products/product-02.png',
        'url' => 'product-detail.php'
    ],
    [
        'name' => 'Graceful Brilliance Solitaire Ring',
        'category' => 'Diamond Ring',
        'price' => 2499.00,
        'originalPrice' => 2650.00,
        'rating' => 5,
        'image' => '/assets/images/products/product-02.png',
        'hoverImage' => '/assets/images/products/product-03.png',
        'url' => 'product-detail.php'
    ],
    [
        'name' => 'Celeste Radiant Halo Solitaire Ring',
        'category' => 'Diamond Ring',
        'price' => 2599.00,
        'originalPrice' => 2750.00,
        'rating' => 5,
        'image' => '/assets/images/products/product-03.png',
        'hoverImage' => '/assets/images/products/product-04.png',
        'url' => 'product-detail.php'
    ],
    [
        'name' => 'Celeste Art Deco Solitaire Ring',
        'category' => 'Diamond Ring',
        'price' => 2399.00,
        'originalPrice' => 2550.00,
        'rating' => 5,
        'image' => '/assets/images/products/product-04.png',
        'hoverImage' => '/assets/images/products/product-05.png',
        'url' => 'product-detail.php'
    ],
    [
        'name' => 'Celeste 3D Cluster 14 White Gold Ring',
        'category' => 'Diamond Ring',
        'price' => 2449.00,
        'originalPrice' => 2600.00,
        'rating' => 5,
        'image' => '/assets/images/products/product-05.png',
        'hoverImage' => '/assets/images/products/product-06.png',
        'url' => 'product-detail.php'
    ],
    [
        'name' => 'Graceful Brilliance Solitaire Ring',
        'category' => 'Diamond Ring',
        'price' => 2499.00,
        'originalPrice' => 2650.00,
        'rating' => 5,
        'image' => '/assets/images/products/product-06.png',
        'hoverImage' => '/assets/images/products/product-07.png',
        'url' => 'product-detail.php'
    ],
    [
        'name' => 'Celeste Radiant Halo Solitaire Ring',
        'category' => 'Diamond Ring',
        'price' => 2599.00,
        'originalPrice' => 2750.00,
        'rating' => 5,
        'image' => '/assets/images/products/product-07.png',
        'hoverImage' => '/assets/images/products/product-08.png',
        'url' => 'product-detail.php'
    ],
    [
        'name' => 'Celeste Art Deco Solitaire Ring',
        'category' => 'Diamond Ring',
        'price' => 2399.00,
        'originalPrice' => 2550.00,
        'rating' => 5,
        'image' => '/assets/images/products/product-08.png',
        'hoverImage' => '/assets/images/products/product-01.png',
        'url' => 'product-detail.php'
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
                <!-- step 1 - Active Setting Selection -->
                <div class="grow py-2 md:py-4 px-2 md:px-6 rounded-xl bg-[#F7F5F5] text-black flex items-center justify-between">
                    <div class="flex items-center gap-2 md:gap-4 text-black">
                        <span class="hidden md:inline-block text-[40px] leading-[120%] font-bold text-[#000000]">1</span>
                        <div class="hidden md:flex flex-col items-start gap-1">
                            <span class="block text-[14px] leading-[100%] font-medium text-[#000000]">Choose a</span>
                            <span class="block text-[20px] leading-[100%] font-bold text-[#000000] uppercase">Setting</span>
                        </div>
                    </div>
                    <div class="p-1.5 md:p-[9px] border border-[#D7D7D7] bg-white rounded-md">
                        <svg class="size-5 md:size-[30px]" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_224_1779)">
                                <path d="M5.22205 25.9498C7.83381 28.5616 11.3064 30 15 30C18.6936 30 22.1662 28.5616 24.7779 25.9498C27.3898 23.3381 28.8281 19.8655 28.8281 16.1719C28.8281 13.1798 27.8878 10.332 26.1088 7.9364C24.4542 5.7082 22.2194 4.05644 19.6257 3.13799C18.8916 1.30148 17.0955 -1.0257e-06 15 -1.20889e-06C12.9045 -1.39209e-06 11.1084 1.30148 10.3743 3.13799C7.78061 4.05644 5.54584 5.7082 3.89115 7.9364C2.11219 10.332 1.17188 13.1798 1.17188 16.1719C1.17188 19.8655 2.61023 23.3381 5.22205 25.9498ZM15 1.75781C16.777 1.75781 18.2227 3.2035 18.2227 4.98047C18.2227 6.75744 16.777 8.20312 15 8.20312C13.223 8.20312 11.7773 6.75744 11.7773 4.98047C11.7773 3.2035 13.223 1.75781 15 1.75781ZM15 9.96094C16.4167 9.96094 17.6962 9.36533 18.6039 8.4126C21.5886 9.80361 23.5547 12.847 23.5547 16.1719C23.5547 20.889 19.7171 24.7266 15 24.7266C10.2829 24.7266 6.44531 20.889 6.44531 16.1719C6.44531 12.8471 8.41143 9.80367 11.3961 8.4126C12.3039 9.36533 13.5833 9.96094 15 9.96094ZM10.0243 5.1706C10.0479 5.79375 10.1855 6.38806 10.4185 6.93263C8.87924 7.69523 7.55637 8.82732 6.55647 10.2503C5.33379 11.9905 4.6875 14.0381 4.6875 16.1719C4.6875 21.8582 9.31365 26.4844 15 26.4844C20.6863 26.4844 25.3125 21.8582 25.3125 16.1719C25.3125 14.0381 24.6662 11.9904 23.4435 10.2503C22.4436 8.82732 21.1208 7.69517 19.5815 6.93264C19.8144 6.38806 19.9521 5.79375 19.9757 5.1706C24.2704 7.10355 27.0703 11.3657 27.0703 16.1719C27.0703 22.8275 21.6556 28.2422 15 28.2422C8.34439 28.2422 2.92969 22.8275 2.92969 16.1719C2.92969 11.3657 5.72959 7.10355 10.0243 5.1706Z" fill="#7B7B7B" />
                            </g>
                            <defs>
                                <clipPath id="clip0_224_1779">
                                    <rect width="30" height="30" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
                <!-- step 2 - Completed Diamond Selection -->
                <div class="grow py-2 md:py-4 px-2 md:px-6 rounded-xl bg-transparent text-black flex items-center justify-between">
                    <div class="flex items-center gap-2 md:gap-4 text-black">
                        <div class="relative">
                            <img src="/assets/images/small-diamond.png" alt="" />
                            <svg class="absolute -top-2 -right-2" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 15.75C9.88642 15.75 10.7642 15.5754 11.5831 15.2362C12.4021 14.897 13.1462 14.3998 13.773 13.773C14.3998 13.1462 14.897 12.4021 15.2362 11.5831C15.5754 10.7642 15.75 9.88642 15.75 9C15.75 8.11358 15.5754 7.23583 15.2362 6.41689C14.897 5.59794 14.3998 4.85382 13.773 4.22703C13.1462 3.60023 12.4021 3.10303 11.5831 2.76381C10.7642 2.42459 9.88642 2.25 9 2.25C7.20979 2.25 5.4929 2.96116 4.22703 4.22703C2.96116 5.4929 2.25 7.20979 2.25 9C2.25 10.7902 2.96116 12.5071 4.22703 13.773C5.4929 15.0388 7.20979 15.75 9 15.75ZM8.826 11.73L12.576 7.23L11.424 6.27L8.199 10.1392L6.53025 8.46975L5.46975 9.53025L7.71975 11.7802L8.30025 12.3608L8.826 11.73Z" fill="#16A34A"/>
                            </svg>
                        </div>
                        <div class="flex md:flex flex-col items-start gap-0">
                            <span class="block text-[12px] md:text-[14px] leading-[100%] font-medium text-[#000000]">1.00 Carat Round Diamond</span>
                            <span class="block text-lg md:text-lg leading-[100%] font-bold text-[#000000] uppercase">$2,499.00 CAD</span>
                            <button type="button" class="block text-[12px] md:text-[14px] leading-[100%] font-medium text-gray-500 underline">Remove</button>
                        </div>
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

        <!-- Setting Filter Tab Content -->
        <div class="p-4 md:p-10 mt-6 bg-white border border-[#D7D7D7] rounded-2xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-4">
                <div class="lg:col-span-7">
                    <div class="flex items-center justify-between mb-5">
                        <h2 class="text-xl font-bold text-[#000000]">Shape</h2>
                        <button onclick="toggleMoreShapesPage('settings')" class="text-sm text-[#000000] bg-transparent inline-flex items-center gap-2 rounded-md px-4 py-2 hover:bg-gray-50 transition">
                            <span class="mr-2">More Shapes</span>
                            <svg id="settings-more-icon" class="transition-transform" width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5 6.75L9 11.25L13.5 6.75" stroke="#737373" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                    <div class="grid grid-cols-3 md:grid-cols-3 xl:grid-cols-6 gap-4 text-black">
                        <div class="flex flex-col items-center gap-2 p-4 border-2 border-black rounded-md cursor-pointer hover:bg-gray-50 transition shape-option" data-shape="round" onclick="selectShape(this)">
                            <img src="/assets/images/shapes/round.png" alt="Round" class="size-16 object-cover">
                            <h2>Round</h2>
                        </div>
                        <div class="flex flex-col items-center gap-2 p-4 border-2 border-[#D7D7D7] rounded-md cursor-pointer hover:bg-gray-50 transition shape-option" data-shape="round-2" onclick="selectShape(this)">
                            <img src="/assets/images/shapes/round.png" alt="Round" class="size-16 object-cover">
                            <h2>Round</h2>
                        </div>
                        <div class="flex flex-col items-center gap-2 p-4 border-2 border-[#D7D7D7] rounded-md cursor-pointer hover:bg-gray-50 transition shape-option" data-shape="oval" onclick="selectShape(this)">
                            <img src="/assets/images/shapes/oval.png" alt="Oval" class="size-16 object-cover">
                            <h2>Oval</h2>
                        </div>
                        <div class="flex flex-col items-center gap-2 p-4 border-2 border-[#D7D7D7] rounded-md cursor-pointer hover:bg-gray-50 transition shape-option" data-shape="cushion" onclick="selectShape(this)">
                            <img src="/assets/images/shapes/cushion.png" alt="Cushion" class="size-16 object-cover">
                            <h2>Cushion</h2>
                        </div>
                        <div class="flex flex-col items-center gap-2 p-4 border-2 border-[#D7D7D7] rounded-md cursor-pointer hover:bg-gray-50 transition shape-option" data-shape="princess" onclick="selectShape(this)">
                            <img src="/assets/images/shapes/princess.png" alt="Princess" class="size-16 object-cover">
                            <h2>Princess</h2>
                        </div>
                        <div class="flex flex-col items-center gap-2 p-4 border-2 border-[#D7D7D7] rounded-md cursor-pointer hover:bg-gray-50 transition shape-option" data-shape="radiant" onclick="selectShape(this)">
                            <img src="/assets/images/shapes/radiant.png" alt="Radiant" class="size-16 object-cover">
                            <h2>Radiant</h2>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-5 lg:pl-12 lg:border-l lg:border-[#D7D7D7]">
                    <!-- PRICE SLIDER -->
                    <div class="mb-5">
                        <h2 class="text-xl font-bold text-[#000000]">Price</h2>
                        <div class="flex flex-col gap-2">
                            <div class="relative h-8 flex items-center">
                                <div class="absolute left-0 right-0 h-[3px] bg-[#E8E8E8] rounded-full" style="top: 50%; margin-top: -1.5px;"></div>
                                <div id="priceSliderTrack" class="absolute h-[3px] bg-black rounded-full" style="left: 0%; right: 0%; top: 50%; margin-top: -1.5px;"></div>
                                <input id="priceMin" type="range" min="100" max="10000" value="100" step="100"
                                    class="range-min absolute w-full bg-transparent appearance-none pointer-events-auto"
                                    style="top: 50%; margin-top: -8px; z-index: 2;" />
                                <input id="priceMax" type="range" min="100" max="10000" value="10000" step="100"
                                    class="range-max absolute w-full bg-transparent appearance-none pointer-events-auto"
                                    style="top: 50%; margin-top: -8px; z-index: 1;" />
                            </div>
                            <div class="flex items-center gap-3">
                                <input type="text" readonly id="priceMinInput" value="$ 500" class="w-full grow px-4 py-2 bg-white border border-[#E8E8E8] rounded focus:outline-none text-[#bbbbbb]" />
                                <span class="text-xl text-[#bbbbbb]">—</span>
                                <input type="text" readonly id="priceMaxInput" value="$ 8,500" class="w-full grow px-4 py-2 bg-white border border-[#E8E8E8] rounded focus:outline-none text-[#bbbbbb]" />
                            </div>
                        </div>
                    </div>
                    <!-- CARAT SLIDER -->
                    <div class="mb-0">
                        <h2 class="text-xl font-bold text-[#000000]">Carat</h2>
                        <div class="flex flex-col gap-2">
                            <div class="relative h-8 flex items-center">
                                <div class="absolute left-0 right-0 h-[3px] bg-[#E8E8E8] rounded-full" style="top: 50%; margin-top: -1.5px;"></div>
                                <div id="caratSliderTrack" class="absolute h-[3px] bg-black rounded-full" style="left: 0%; right: 0%; top: 50%; margin-top: -1.5px;"></div>
                                <input id="caratMin" type="range" min="0.15" max="35" value="0.15" step="0.01"
                                    class="range-min absolute w-full bg-transparent appearance-none pointer-events-auto"
                                    style="top: 50%; margin-top: -8px; z-index: 2;" />
                                <input id="caratMax" type="range" min="0.15" max="35" value="35" step="0.01"
                                    class="range-max absolute w-full bg-transparent appearance-none pointer-events-auto"
                                    style="top: 50%; margin-top: -8px; z-index: 1;" />
                            </div>
                            <div class="flex items-center gap-3">
                                <input type="text" readonly id="caratMinInput" value="0.15" class="w-full grow px-4 py-1.5 bg-white border border-[#E8E8E8] rounded focus:outline-none text-[#bbbbbb]" />
                                <span class="text-xl text-[#bbbbbb]">—</span>
                                <input type="text" readonly id="caratMaxInput" value="24" class="w-full grow px-4 py-1.5 bg-white border border-[#E8E8E8] rounded focus:outline-none text-[#bbbbbb]" />
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-6 col-span-full">
                <div class="lg:col-span-4">
                    <!-- Metal Selection -->
                    <div class="">
                        <h3 class="text-xl font-bold text-[#000000] mb-6">Metal</h3>
                        <div class="flex items-center gap-6 text-black">
                            <!-- 18K Yellow -->
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="metal" value="yellow" class="hidden" checked onchange="updateMetalBorder(this)">
                                <div class="flex flex-col items-center">
                                    <div id="yellow-border" class="w-12 h-12 rounded-full border-2 border-black flex items-center justify-center mb-1">
                                        <div class="w-10 h-10 rounded-full bg-[#FFD700]"></div>
                                    </div>
                                    <span class="text-sm font-medium">18K Yellow</span>
                                </div>
                            </label>

                            <!-- 18K White -->
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="metal" value="white" class="hidden" onchange="updateMetalBorder(this)">
                                <div class="flex flex-col items-center">
                                    <div id="white-border" class="w-12 h-12 rounded-full border-2 border-[#E8E8E8] flex items-center justify-center mb-1">
                                        <div class="w-10 h-10 rounded-full bg-[#F5F5F5]"></div>
                                    </div>
                                    <span class="text-sm font-medium">18K White</span>
                                </div>
                            </label>

                            <!-- 14K Rose -->
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="metal" value="rose" class="hidden" onchange="updateMetalBorder(this)">
                                <div class="flex flex-col items-center">
                                    <div id="rose-border" class="w-12 h-12 rounded-full border-2 border-[#E8E8E8] flex items-center justify-center mb-1">
                                        <div class="w-10 h-10 rounded-full bg-[#E0BFB8]"></div>
                                    </div>
                                    <span class="text-sm font-medium">14K Rose</span>
                                </div>
                            </label>

                            <!-- Platinum -->
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="metal" value="platinum" class="hidden" onchange="updateMetalBorder(this)">
                                <div class="flex flex-col items-center">
                                    <div id="platinum-border" class="w-12 h-12 rounded-full border-2 border-[#E8E8E8] flex items-center justify-center mb-1">
                                        <div class="w-10 h-10 rounded-full bg-[#E5E4E2]"></div>
                                    </div>
                                    <span class="text-sm font-medium">Platinum</span>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-8 flex lg:justify-start lg:border-l lg:pl-12">
                    <!-- Style Selection -->
                    <div class="">
                        <h3 class="text-xl font-bold text-[#000000] mb-6">Style</h3>
                        <div class="flex flex-wrap items-center gap-3">
                            <!-- Solitaire -->
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="style" value="solitaire" class="hidden" checked onchange="updateStyleBorder(this)">
                                <div class="flex items-center gap-2 px-4 py-2 border-2 border-black rounded-lg transition text-sm text-[#000000]" id="solitaire-style">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.11875 6.9375L9.10625 3H9.33125L11.3188 6.9375H7.11875ZM8.65625 15.825L2.1875 8.0625H8.65625V15.825ZM9.78125 15.825V8.0625H16.25L9.78125 15.825ZM12.5563 6.9375L10.6063 3H14.4688L16.4375 6.9375H12.5563ZM2 6.9375L3.96875 3H7.83125L5.88125 6.9375H2Z" fill="black" />
                                    </svg>
                                    <span>Solitaire</span>
                                </div>
                            </label>

                            <!-- Halo -->
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="style" value="halo" class="hidden" onchange="updateStyleBorder(this)">
                                <div class="flex items-center gap-2 px-4 py-2 border-2 border-[#E8E8E8] rounded-lg transition text-sm text-[#000000]" id="halo-style">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_224_1895)">
                                            <path d="M9 0C4.02943 0 0 4.02943 0 9C0 13.9706 4.02943 18 9 18C13.9706 18 18 13.9706 18 9C18 4.02943 13.9706 0 9 0ZM9.05933 3.14868L10.4777 7.57726L15.126 7.68163L11.3522 10.3975L12.6892 14.8513L8.93958 12.1014L5.11743 14.7502L6.57421 10.3337L2.87401 7.51684L7.52453 7.53772L9.05933 3.14868Z" fill="black" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_224_1895">
                                                <rect width="18" height="18" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span>Halo</span>
                                </div>
                            </label>

                            <!-- Three Stone -->
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="style" value="three-stone" class="hidden" onchange="updateStyleBorder(this)">
                                <div class="flex items-center gap-2 px-4 py-2 border-2 border-[#E8E8E8] rounded-lg transition text-sm text-[#000000]" id="three-stone-style">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 9C12 8.175 12.675 7.5 13.5 7.5C14.325 7.5 15 8.175 15 9C15 9.825 14.325 10.5 13.5 10.5C12.675 10.5 12 9.825 12 9ZM7.5 9C7.5 8.175 8.175 7.5 9 7.5C9.825 7.5 10.5 8.175 10.5 9C10.5 9.825 9.825 10.5 9 10.5C8.175 10.5 7.5 9.825 7.5 9ZM3 9C3 8.175 3.675 7.5 4.5 7.5C5.325 7.5 6 8.175 6 9C6 9.825 5.325 10.5 4.5 10.5C3.675 10.5 3 9.825 3 9ZM9.75 13.5C9.75 12.675 10.425 12 11.25 12C12.075 12 12.75 12.675 12.75 13.5C12.75 14.325 12.075 15 11.25 15C10.425 15 9.75 14.325 9.75 13.5ZM5.25 13.5C5.25 12.675 5.925 12 6.75 12C7.575 12 8.25 12.675 8.25 13.5C8.25 14.325 7.575 15 6.75 15C5.925 15 5.25 14.325 5.25 13.5ZM9.75 4.5C9.75 3.675 10.425 3 11.25 3C12.075 3 12.75 3.675 12.75 4.5C12.75 5.325 12.075 6 11.25 6C10.425 6 9.75 5.325 9.75 4.5ZM5.25 4.5C5.25 3.675 5.925 3 6.75 3C7.575 3 8.25 3.675 8.25 4.5C8.25 5.325 7.575 6 6.75 6C5.925 6 5.25 5.325 5.25 4.5Z" fill="black" />
                                    </svg>
                                    <span>Three Stone</span>
                                </div>
                            </label>

                            <!-- Nature -->
                            <label class="flex items-center cursor-pointer">
                                <input type="radio" name="style" value="nature" class="hidden" onchange="updateStyleBorder(this)">
                                <div class="flex items-center gap-2 px-4 py-2 border-2 border-[#E8E8E8] rounded-lg transition text-sm text-[#000000]" id="nature-style">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12 9L6.75 1.5L1.5 9H2.895L0 13.5H5.25V16.5H8.25V13.5H13.5L10.605 9H12ZM15.105 9H16.5L11.25 1.5L9.4575 4.0575L13.44 9.75H11.9775L14.3925 13.5H18L15.105 9ZM9.75 14.25H12.75V16.5H9.75V14.25Z" fill="black" />
                                    </svg>
                                    <span>Nature</span>
                                </div>
                            </label>

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
                <h1 class="text-sm font-medium text-black mb-2">Results - 24,563 Settings</h1>
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
function selectShape(element) {
    document.querySelectorAll('.shape-option').forEach(option => {
        option.classList.remove('border-black');
        option.classList.add('border-[#D7D7D7]');
    });
    
    element.classList.remove('border-[#D7D7D7]');
    element.classList.add('border-black');
}

function updateMetalBorder(input) {
    document.querySelectorAll('input[name="metal"]').forEach(radio => {
        const value = radio.value;
        const border = document.getElementById(value + '-border');
        if (border) {
            if (radio.checked) {
                border.classList.remove('border-[#E8E8E8]');
                border.classList.add('border-black');
            } else {
                border.classList.remove('border-black');
                border.classList.add('border-[#E8E8E8]');
            }
        }
    });
}

function updateStyleBorder(input) {
    document.querySelectorAll('input[name="style"]').forEach(radio => {
        const value = radio.value;
        const styleDiv = document.getElementById(value + '-style');
        if (styleDiv) {
            if (radio.checked) {
                styleDiv.classList.remove('border-[#E8E8E8]');
                styleDiv.classList.add('border-black');
            } else {
                styleDiv.classList.remove('border-black');
                styleDiv.classList.add('border-[#E8E8E8]');
            }
        }
    });
}

function toggleMoreShapesPage(pageId) {
    const moreShapesSection = document.getElementById(pageId + '-more-shapes');
    const moreIcon = document.getElementById(pageId + '-more-icon');
    
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
