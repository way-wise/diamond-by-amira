<?php
?>
<section class="relative text-white py-20 lg:py-32 overflow-hidden mx-16">
    <!-- Background decorative elements - Golden light streaks from top right -->
    <div class="absolute inset-0 rounded-3xl overflow-hidden">
        <img src="/assets/images/hero-bg.png" alt="Hero Background" class="w-full h-full object-cover">
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Text Content -->
        <div class="text-center">
            <span class="inline-flex items-center justify-center gap-2 px-3 py-1.5 bg-white text-sm text-black rounded-full mb-6">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.3072 8.89731L5.746 7.89221C6.13655 6.99781 6.83945 6.28581 7.71625 5.89661L8.9241 5.36046C9.3081 5.19001 9.3081 4.63135 8.9241 4.4609L7.75395 3.94148C6.8546 3.54227 6.1391 2.80392 5.75525 1.87898L5.31075 0.807877C5.1458 0.410395 4.59659 0.410396 4.43165 0.807877L3.98713 1.87897C3.60328 2.80392 2.88776 3.54227 1.98842 3.94148L0.81829 4.4609C0.434268 4.63135 0.434268 5.19001 0.81829 5.36046L2.02615 5.89661C2.90294 6.28581 3.60585 6.99781 3.99637 7.89221L4.4352 8.89731C4.60388 9.28361 5.1385 9.28361 5.3072 8.89731ZM9.7007 11.3445L9.8241 11.0616C10.0441 10.5573 10.4403 10.1558 10.9347 9.93611L11.3149 9.76716C11.5206 9.67581 11.5206 9.37696 11.3149 9.28561L10.956 9.12611C10.4489 8.90081 10.0456 8.48441 9.8293 7.96296L9.7026 7.65731C9.61425 7.44431 9.31975 7.44431 9.2314 7.65731L9.1047 7.96296C8.8885 8.48441 8.48515 8.90081 7.978 9.12611L7.61905 9.28561C7.41345 9.37696 7.41345 9.67581 7.61905 9.76716L7.99925 9.93611C8.4937 10.1558 8.8899 10.5573 9.1099 11.0616L9.23335 11.3445C9.32365 11.5515 9.61035 11.5515 9.7007 11.3445Z" fill="#262626" />
                </svg>
                Design Your Own Diamond Jewellery
            </span>
            <h1 class="text-5xl lg:text-6xl font-bold mb-6 leading-tight ">
                Buy Diamonds the Smarter Way
            </h1>
            <p class="text-lg lg:text-xl text-gray-300 mb-8 max-w-2xl mx-auto lg:mx-auto leading-relaxed">
                Discover certified diamonds, transparent pricing, expert guidance, and seamless online experiences designed to help you choose confidently, efficiently, and beautifully.
            </p>
        </div>

        <!-- Shopping Filters -->
        <?php include __DIR__ . '/common/shopping-filter.php'; ?>
    </div>
</section>