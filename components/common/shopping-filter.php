<!-- tab list -->
<div class="px-3 md:px-6 py-3 md:py-5 rounded-2xl bg-white border border-[#D7D7D7]">
    <div class="flex md:grid md:grid-cols-3 gap-2 md:gap-8">
        <!-- step 1 -->
        <button onclick="openTab(event, 'tab1')" class="grow tab-button focus:outline-none py-2 md:py-4 px-2 md:px-6 rounded-xl bg-[#F7F5F5] text-black flex items-center justify-between cursor-pointer transition-colors active">
            <div class="tab-content-wrapper flex items-center gap-2 md:gap-4 text-black">
                <span class="tab-number block md:inline-block text-[32px] md:text-[40px] leading-[120%] font-bold text-[#000000]">1</span>
                <div class="tab-text flex md:flex flex-col items-start gap-1">
                    <span class="block text-[12px] md:text-[14px] leading-[100%] font-medium text-[#000000]">Choose a</span>
                    <span class="block text-lg md:text-[20px] leading-[100%] font-bold text-[#000000] uppercase">Setting</span>
                </div>
            </div>
            <div class="tab-icon p-1.5 md:p-[9px] border border-[#D7D7D7] bg-white rounded-md">
                <svg class="size-5 md:size-[30px]" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_224_1779)">
                        <path d="M5.22205 25.9498C7.83381 28.5616 11.3064 30 15 30C18.6936 30 22.1662 28.5616 24.7779 25.9498C27.3898 23.3381 28.8281 19.8655 28.8281 16.1719C28.8281 13.1798 27.8878 10.332 26.1088 7.9364C24.4542 5.7082 22.2194 4.05644 19.6257 3.13799C18.8916 1.30148 17.0955 -1.0257e-06 15 -1.20889e-06C12.9045 -1.39209e-06 11.1084 1.30148 10.3743 3.13799C7.78061 4.05644 5.54584 5.7082 3.89115 7.9364C2.11219 10.332 1.17188 13.1798 1.17188 16.1719C1.17188 19.8655 2.61023 23.3381 5.22205 25.9498ZM15 1.75781C16.777 1.75781 18.2227 3.2035 18.2227 4.98047C18.2227 6.75744 16.777 8.20312 15 8.20312C13.223 8.20312 11.7773 6.75744 11.7773 4.98047C11.7773 3.2035 13.223 1.75781 15 1.75781ZM15 9.96094C16.4167 9.96094 17.6962 9.36533 18.6039 8.4126C21.5886 9.80361 23.5547 12.847 23.5547 16.1719C23.5547 20.889 19.7171 24.7266 15 24.7266C10.2829 24.7266 6.44531 20.889 6.44531 16.1719C6.44531 12.8471 8.41143 9.80367 11.3961 8.4126C12.3039 9.36533 13.5833 9.96094 15 9.96094ZM17.5186 24.9085L20.8826 15.9378H25.3679L17.5186 24.9085ZM21.6957 14.1799L23.7892 9.99284L25.8828 14.1799H21.6957Z" fill="#7B7B7B" />
                    </g>
                    <defs>
                        <clipPath id="clip0_224_1779">
                            <rect width="30" height="30" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
        </button>
        <!-- step 2 -->
        <button onclick="openTab(event, 'tab2')" class="grow tab-button focus:outline-none py-2 md:py-4 px-2 md:px-6 rounded-xl bg-transparent text-[#666666] flex items-center justify-between cursor-pointer transition-colors">
            <div class="tab-content-wrapper flex items-center gap-2 md:gap-4 text-black">
                <span class="tab-number hidden md:inline-block text-[40px] leading-[120%] font-bold text-[#000000]">2</span>
                <div class="tab-text hidden md:flex flex-col items-start gap-1">
                    <span class="block text-[14px] leading-[100%] font-medium text-[#000000]">Choose a</span>
                    <span class="block text-[20px] leading-[100%] font-bold text-[#000000] uppercase">Diamond</span>
                </div>
            </div>
            <div class="tab-icon p-1.5 md:p-[9px] border border-[#D7D7D7] bg-white rounded-md">
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
        </button>
        <!-- step 3 -->
        <div class="py-2 md:py-4 px-2 md:px-6 rounded-xl bg-white cursor-not-allowed flex items-center justify-center md:justify-between">
            <div class="tab-content-wrapper flex items-center gap-2 md:gap-4 text-black">
                <span class="tab-number hidden md:inline-block text-[40px] leading-[120%] font-bold text-[#000000]">3</span>
                <div class="tab-text hidden md:flex flex-col gap-1">
                    <span class="block text-[14px] leading-[100%] font-medium text-[#000000]">Complete</span>
                    <span class="block text-[20px] leading-[100%] font-bold text-[#000000] uppercase">Ring</span>
                </div>
            </div>
            <div class="tab-icon p-1.5 md:p-[9px] border border-[#D7D7D7] bg-white rounded-md">
                <svg class="size-5 md:size-[30px]" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 11.375C11.3476 11.375 7.5625 15.1601 7.5625 19.8125C7.98669 30.9906 24.0151 30.9876 24.4375 19.8124C24.4375 15.1601 20.6525 11.375 16 11.375ZM16 26.375C12.3814 26.375 9.4375 23.4311 9.4375 19.8125C9.76744 11.1184 22.2339 11.1208 22.5625 19.8126C22.5625 23.4311 19.6186 26.375 16 26.375Z" fill="#7B7B7B" />
                    <path d="M19.9228 8.27281L21.8017 5.1735C21.9443 4.93819 21.9764 4.65213 21.8894 4.39106L20.6394 0.641062C20.5118 0.258188 20.1535 0 19.75 0H12.25C11.8464 0 11.4882 0.258188 11.3606 0.641062L10.1106 4.39106C10.0235 4.65213 10.0557 4.93819 10.1983 5.1735L12.0771 8.27281C-0.778101 12.8627 2.17952 31.7316 16.0001 32C29.8227 31.7304 32.7761 12.8603 19.9228 8.27281ZM12.9257 1.875H19.0743L19.6993 3.75H12.3006L12.9257 1.875ZM19.3353 5.625L18.0208 7.7935C16.7123 7.56987 15.2876 7.56987 13.9791 7.7935L12.6646 5.625H19.3353ZM4.63206 15.9378H9.11735L12.4813 24.9084L4.63206 15.9378ZM15 26.6184L10.9948 15.9378H19.0052L15 26.6184ZM17.5186 24.9085L20.8826 15.9378H25.3679L17.5186 24.9085ZM21.6957 14.1799L23.7892 9.99284L25.8828 14.1799H21.6957Z" fill="#7B7B7B" />
                </svg>
            </div>
        </div>
    </div>
</div>

<!-- tab content for step 1 -->
<div id="tab1" class="tab-content p-4 md:p-10 mt-6 bg-white border border-[#D7D7D7] rounded-2xl">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-4">
        <div class="lg:col-span-7">
            <div class="flex items-center justify-between mb-5">
                <h2 class="text-xl font-bold text-[#000000]">Shape</h2>
                <button class="text-sm text-[#000000] bg-transparent inline-flex items-center gap-2 rounded-md px-4 py-2">
                    <span class="mr-2">More Shapes</span>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 6.75L9 11.25L13.5 6.75" stroke="#737373" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="grid grid-cols-3 md:grid-cols-3 xl:grid-cols-6 gap-4 text-black">
                <div class="flex flex-col items-center gap-2 p-4 border border-[#D7D7D7] rounded-md">
                    <img src="/assets/images/shapes/round.png" alt="Round" class="size-16 object-cover">
                    <h2>Round</h2>
                </div>
                <div class="flex flex-col items-center gap-2 p-4 border border-[#D7D7D7] rounded-md">
                    <img src="/assets/images/shapes/round.png" alt="Round" class="size-16 object-cover">
                    <h2>Round</h2>
                </div>
                <div class="flex flex-col items-center gap-2 p-4 border border-[#D7D7D7] rounded-md">
                    <img src="/assets/images/shapes/oval.png" alt="Round" class="size-16 object-cover">
                    <h2>Oval</h2>
                </div>
                <div class="flex flex-col items-center gap-2 p-4 border border-[#D7D7D7] rounded-md">
                    <img src="/assets/images/shapes/cushion.png" alt="Round" class="size-16 object-cover">
                    <h2>Cushion</h2>
                </div>
                <div class="flex flex-col items-center gap-2 p-4 border border-[#D7D7D7] rounded-md">
                    <img src="/assets/images/shapes/princess.png" alt="Round" class="size-16 object-cover">
                    <h2>Princess</h2>
                </div>
                <div class="flex flex-col items-center gap-2 p-4 border border-[#D7D7D7] rounded-md">
                    <img src="/assets/images/shapes/radiant.png" alt="Round" class="size-16 object-cover">
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
        <div class="lg:col-span-5">
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
        <div class="lg:col-span-7 flex lg:justify-end lg:border-l">
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

<!-- tab content for step 2 -->
<div id="tab2" class="tab-content p-5 md:p-10 mt-6 bg-white border border-[#D7D7D7] rounded-2xl hidden">
    <div class="grid lg:grid-cols-12 gap-4">
        <div class="lg:col-span-7">
            <div class="flex items-center justify-between mb-5">
                <h2 class="text-xl font-bold text-[#000000]">Shape</h2>
                <button class="text-sm text-[#000000] bg-transparent inline-flex items-center gap-2 rounded-md px-4 py-2">
                    <span class="mr-2">More Shapes</span>
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.5 6.75L9 11.25L13.5 6.75" stroke="#737373" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="grid grid-cols-3 md:grid-cols-3 xl:grid-cols-6 gap-4 text-black">
                <div class="flex flex-col items-center gap-2 p-4 border border-[#D7D7D7] rounded-md">
                    <img src="/assets/images/shapes/round.png" alt="Round" class="size-16 object-cover">
                    <h2>Round</h2>
                </div>
                <div class="flex flex-col items-center gap-2 p-4 border border-[#D7D7D7] rounded-md">
                    <img src="/assets/images/shapes/oval.png" alt="Oval" class="size-16 object-cover">
                    <h2>Oval</h2>
                </div>
                <div class="flex flex-col items-center gap-2 p-4 border border-[#D7D7D7] rounded-md">
                    <img src="/assets/images/shapes/cushion.png" alt="Cushion" class="size-16 object-cover">
                    <h2>Cushion</h2>
                </div>
                <div class="flex flex-col items-center gap-2 p-4 border border-[#D7D7D7] rounded-md">
                    <img src="/assets/images/shapes/emerald.png" alt="Emerald" class="size-16 object-cover">
                    <h2>Emerald</h2>
                </div>
                <div class="flex flex-col items-center gap-2 p-4 border border-[#D7D7D7] rounded-md">
                    <img src="/assets/images/shapes/princess.png" alt="Princess" class="size-16 object-cover">
                    <h2>Princess</h2>
                </div>
                <div class="flex flex-col items-center gap-2 p-4 border border-[#D7D7D7] rounded-md">
                    <img src="/assets/images/shapes/radiant.png" alt="Radiant" class="size-16 object-cover">
                    <h2>Radiant</h2>
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
        <hr class="my-6 col-span-full ">
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

<!-- Include external JavaScript at the end of the body with defer to ensure DOM is ready -->
<script src="/assets/js/shopping-filter.js" defer></script>