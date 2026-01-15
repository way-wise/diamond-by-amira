<?php
/**
 * Hero Section Component
 * Dark background with golden light streaks from top right
 * Left: Title and description
 * Right: Diamond Design Card with:
 * - "Design Your Own Diamond Jewellery" button at top
 * - 3 Steps indicator (1 Choose SETTING active)
 * - Diamond image
 * - Filters (Shape, Metal, Style)
 * - Price and Carat sliders
 * - View Diamond button
 */
$heroTitle = $heroTitle ?? 'Buy Diamonds the Smarter Way';
$heroDescription = $heroDescription ?? 'Discover certified diamonds, transparent pricing, expert guidance, and seamless online experiences designed to help you choose confidently, efficiently, and beautifully.';
$diamondImage = $diamondImage ?? '/assets/images/diamond-hero.jpg';
?>
<section class="relative bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white py-20 lg:py-32 overflow-hidden">
    <!-- Background decorative elements - Golden light streaks from top right -->
    <div class="absolute inset-0 opacity-30">
        <div class="absolute top-0 right-0 w-96 h-96 bg-yellow-400 rounded-full blur-3xl transform translate-x-1/4 -translate-y-1/4"></div>
        <div class="absolute top-1/4 right-1/4 w-64 h-64 bg-yellow-300 rounded-full blur-2xl"></div>
        <div class="absolute top-0 right-0 w-48 h-96 bg-yellow-500 opacity-50 blur-xl"></div>
    </div>
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left side - Text Content -->
            <div class="text-center lg:text-left">
                <h1 class="text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    <?php echo htmlspecialchars($heroTitle); ?>
                </h1>
                <p class="text-lg lg:text-xl text-gray-300 mb-8 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                    <?php echo htmlspecialchars($heroDescription); ?>
                </p>
            </div>
            
            <!-- Right side - Diamond Design Card -->
            <div class="bg-white rounded-lg shadow-2xl text-gray-900 overflow-hidden">
                <!-- Design Your Own Button at Top -->
                <div class="p-6 pb-4 border-b border-gray-200">
                    <button class="w-full bg-gray-900 text-white py-3 px-6 rounded-lg font-semibold hover:bg-gray-800 transition-colors text-sm">
                        Design Your Own Diamond Jewellery
                    </button>
                </div>
                
                <!-- 3 Steps Indicator -->
                <div class="px-6 py-4 border-b border-gray-200">
                    <div class="flex justify-between items-center">
                        <div class="flex-1 text-center">
                            <div class="w-10 h-10 bg-gray-900 text-white rounded-full flex items-center justify-center mx-auto mb-2 font-bold text-sm">1</div>
                            <p class="text-xs font-semibold text-gray-900">Choose SETTING</p>
                        </div>
                        <div class="flex-1 text-center opacity-50">
                            <div class="w-10 h-10 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center mx-auto mb-2 font-bold text-sm">2</div>
                            <p class="text-xs font-semibold text-gray-600">Choose DIAMOND</p>
                        </div>
                        <div class="flex-1 text-center opacity-50">
                            <div class="w-10 h-10 bg-gray-300 text-gray-600 rounded-full flex items-center justify-center mx-auto mb-2 font-bold text-sm">3</div>
                            <p class="text-xs font-semibold text-gray-600">Complete RING</p>
                        </div>
                    </div>
                </div>
                
                <!-- Diamond Image -->
                <div class="w-full h-64 bg-gray-100 flex items-center justify-center">
                    <?php if (isset($diamondImage) && file_exists(__DIR__ . '/..' . $diamondImage)): ?>
                        <img src="<?php echo htmlspecialchars($diamondImage); ?>" 
                             alt="Diamond"
                             class="w-full h-full object-cover">
                    <?php else: ?>
                        <div class="text-gray-400 text-center">
                            <svg class="w-24 h-24 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                            </svg>
                            <p class="text-sm">Diamond Image</p>
                        </div>
                    <?php endif; ?>
                </div>
                
                <!-- Card Content - Filters -->
                <div class="p-6">
                    <div class="space-y-5 mb-6">
                        <!-- Shape Filter -->
                        <div>
                            <label class="block text-sm font-semibold mb-2 text-gray-700">Shape</label>
                            <div class="flex flex-wrap gap-2">
                                <?php 
                                $shapes = ['Round', 'Oval', 'Cushion', 'Emerald', 'Princess', 'Radiant'];
                                foreach ($shapes as $shape): 
                                ?>
                                    <button class="px-3 py-1.5 border border-gray-300 rounded text-xs hover:bg-gray-100 transition-colors <?php echo $shape === 'Round' ? 'bg-gray-900 text-white border-gray-900' : ''; ?>">
                                        <?php echo htmlspecialchars($shape); ?>
                                    </button>
                                <?php endforeach; ?>
                                <button class="px-3 py-1.5 border border-gray-300 rounded text-xs hover:bg-gray-100 transition-colors">
                                    More Shapes
                                </button>
                            </div>
                        </div>
                        
                        <!-- Metal Filter -->
                        <div>
                            <label class="block text-sm font-semibold mb-2 text-gray-700">Metal</label>
                            <div class="flex flex-wrap gap-2">
                                <?php 
                                $metals = ['18K Yellow', '18K White', '14K Rose', 'Platinum'];
                                foreach ($metals as $metal): 
                                ?>
                                    <button class="px-3 py-1.5 border border-gray-300 rounded text-xs hover:bg-gray-100 transition-colors">
                                        <?php echo htmlspecialchars($metal); ?>
                                    </button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <!-- Style Filter -->
                        <div>
                            <label class="block text-sm font-semibold mb-2 text-gray-700">Style</label>
                            <div class="flex flex-wrap gap-2">
                                <?php 
                                $styles = ['Solitaire', 'Halo', 'Three Stone', 'Nature'];
                                foreach ($styles as $style): 
                                ?>
                                    <button class="px-3 py-1.5 border border-gray-300 rounded text-xs hover:bg-gray-100 transition-colors">
                                        <?php echo htmlspecialchars($style); ?>
                                    </button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        
                        <!-- Price Range -->
                        <div>
                            <label class="block text-sm font-semibold mb-2 text-gray-700">Price: $600 - $9,500</label>
                            <input type="range" min="600" max="9500" value="600" 
                                   class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                            <div class="flex justify-between text-xs text-gray-500 mt-1">
                                <span>$600</span>
                                <span>$9,500</span>
                            </div>
                        </div>
                        
                        <!-- Carat Range -->
                        <div>
                            <label class="block text-sm font-semibold mb-2 text-gray-700">Carat: 0.15 - 2.4</label>
                            <input type="range" min="0.15" max="2.4" step="0.05" value="0.15" 
                                   class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer">
                            <div class="flex justify-between text-xs text-gray-500 mt-1">
                                <span>0.15</span>
                                <span>2.4</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- View Diamond Button -->
                    <button class="w-full bg-gray-900 text-white py-3 px-6 rounded-lg font-semibold hover:bg-gray-800 transition-colors text-sm">
                        View Diamond
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
