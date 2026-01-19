// shopping-filter.js
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM fully loaded, initializing tabs...');
    
    // Initialize main tabs
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');
    
    // Show first tab by default if no tab is active
    const activeTab = document.querySelector('.tab-button.active');
    if (!activeTab && tabButtons.length > 0) {
        console.log('No active tab found, activating first tab...');
        tabContents.forEach(content => content.classList.add('hidden'));
        document.getElementById('tab1')?.classList.remove('hidden');
        tabButtons[0].classList.add('active');
    }

    // Initialize color tabs
    const colorTabs = document.querySelectorAll('.color-tab');
    if (colorTabs.length > 0) {
        console.log('Initializing color tabs...');
        // Activate first color tab
        openColorTab({ currentTarget: colorTabs[0] }, 'white');
    }

    // Initialize color slider items
    const colorItems = document.querySelectorAll('.color-slider-item');
    if (colorItems.length > 0) {
        console.log('Initializing color slider items...');
        colorItems.forEach((item, index) => {
            // Activate first item by default
            if (index === 0) item.classList.add('active');
            
            item.addEventListener('click', function() {
                colorItems.forEach(i => i.classList.remove('active'));
                this.classList.add('active');
            });
        });
    }

    // Initialize fancy color options
    const fancyColorOptions = document.querySelectorAll('.fancy-color-option');
    if (fancyColorOptions.length > 0) {
        console.log('Initializing fancy color options...');
        // Activate first option by default
        if (fancyColorOptions.length > 0) fancyColorOptions[0].classList.add('active');
        
        fancyColorOptions.forEach(option => {
            option.addEventListener('click', function() {
                fancyColorOptions.forEach(opt => opt.classList.remove('active'));
                this.classList.add('active');
            });
        });
    }

    // Initialize carat sliders
    initCaratSliders();
});

function initCaratSliders() {
    // Initialize all range sliders (price, carat, carat2)
    initRangeSlider('price', 'priceMin', 'priceMax', 'priceMinInput', 'priceMaxInput', 'priceSliderTrack');
    initRangeSlider('carat', 'caratMin', 'caratMax', 'caratMinInput', 'caratMaxInput', 'caratSliderTrack');
    initRangeSlider('carat2', 'caratMin2', 'caratMax2', 'caratMinInput2', 'caratMaxInput2', 'caratSliderTrack2');
}

function initRangeSlider(name, minId, maxId, minInputId, maxInputId, trackId) {
    const minSlider = document.getElementById(minId);
    const maxSlider = document.getElementById(maxId);
    const minInput = document.getElementById(minInputId);
    const maxInput = document.getElementById(maxInputId);
    const track = document.getElementById(trackId);
    
    if (!minSlider || !maxSlider) return;
    
    console.log(`Initializing ${name} slider...`);
    
    // Update display and track when sliders change
    minSlider.addEventListener('input', function() {
        if (minInput) {
            minInput.value = name === 'price' ? `$ ${parseInt(this.value).toLocaleString()}` : this.value;
        }
        updateSliderTrack(minSlider, maxSlider, track);
    });
    
    maxSlider.addEventListener('input', function() {
        if (maxInput) {
            maxInput.value = name === 'price' ? `$ ${parseInt(this.value).toLocaleString()}` : this.value;
        }
        updateSliderTrack(minSlider, maxSlider, track);
    });
    
    // Make track clickable
    if (track && track.parentElement) {
        const container = track.parentElement;
        container.addEventListener('click', function(e) {
            const rect = container.getBoundingClientRect();
            const clickX = e.clientX - rect.left;
            const percentage = clickX / rect.width;
            const min = parseFloat(minSlider.min);
            const max = parseFloat(minSlider.max);
            const value = min + (percentage * (max - min));
            
            // Determine which slider to update based on proximity
            const minVal = parseFloat(minSlider.value);
            const maxVal = parseFloat(maxSlider.value);
            const midPoint = (minVal + maxVal) / 2;
            
            if (value < midPoint) {
                minSlider.value = value;
                minSlider.dispatchEvent(new Event('input'));
            } else {
                maxSlider.value = value;
                maxSlider.dispatchEvent(new Event('input'));
            }
        });
    }
    
    // Initial track update
    updateSliderTrack(minSlider, maxSlider, track);
}

function updateSliderTrack(minSlider, maxSlider, track) {
    if (!track) return;
    
    const min = parseFloat(minSlider.min);
    const max = parseFloat(minSlider.max);
    const minVal = parseFloat(minSlider.value);
    const maxVal = parseFloat(maxSlider.value);
    
    const minPercent = ((minVal - min) / (max - min)) * 100;
    const maxPercent = ((maxVal - min) / (max - min)) * 100;
    
    track.style.left = `${minPercent}%`;
    track.style.width = `${maxPercent - minPercent}%`;
    track.style.right = 'auto';
}

function updateRangeTrack(prefix) {
    const minSlider = document.querySelector(`#${prefix}Min`);
    const maxSlider = document.querySelector(`#${prefix}Max`);
    const track = document.querySelector(`#${prefix}SliderTrack`);
    
    if (minSlider && maxSlider && track) {
        const min = parseFloat(minSlider.min);
        const max = parseFloat(maxSlider.max);
        const minVal = parseFloat(minSlider.value);
        const maxVal = parseFloat(maxSlider.value);
        
        // Calculate percentages for the track
        const minPercent = ((minVal - min) / (max - min)) * 100;
        const maxPercent = 100 - ((max - maxVal) / (max - min)) * 100;
        
        // Update track style
        track.style.left = `${minPercent}%`;
        track.style.right = `${100 - maxPercent}%`;
    }
}

// Tab functionality
function openTab(evt, tabName) {
    // Prevent default if event exists
    if (evt) {
        evt.preventDefault();
    }
    
    console.log('Opening tab:', tabName);
    
    // Get all tab buttons and contents
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');
    
    // Hide all tab contents and remove active classes
    tabContents.forEach(content => content.classList.add('hidden'));
    tabButtons.forEach(button => {
        button.classList.remove('active', 'bg-[#F7F5F5]', 'text-black');
        button.classList.add('bg-transparent', 'text-[#666666]');
    });
    
    // Show the selected tab content
    const targetTab = document.getElementById(tabName);
    if (targetTab) {
        targetTab.classList.remove('hidden');
    }
    
    // Update active state of clicked button
    const clickedButton = evt?.currentTarget || document.querySelector(`.tab-button[onclick*="${tabName}"]`);
    if (clickedButton) {
        clickedButton.classList.add('active', 'bg-[#F7F5F5]', 'text-black');
        clickedButton.classList.remove('bg-transparent', 'text-[#666666]');
    }
}

// Color tab functionality
function openColorTab(evt, tabName) {
    // Hide all color tab content
    const colorTabContents = document.getElementsByClassName('color-tab-content');
    for (let i = 0; i < colorTabContents.length; i++) {
        colorTabContents[i].classList.add('hidden');
    }
    
    // Remove active class from all color tabs
    const colorTabs = document.querySelectorAll('.color-tab');
    colorTabs.forEach(tab => {
        tab.classList.remove('bg-black', 'text-white');
        tab.classList.add('bg-white', 'text-black', 'border', 'border-[#E8E8E8]');
    });
    
    // Show the current color tab and add active class
    const content = document.getElementById(tabName + '-content');
    if (content) {
        content.classList.remove('hidden');
    }
    
    if (evt && evt.currentTarget) {
        evt.currentTarget.classList.remove('bg-white', 'text-black', 'border', 'border-[#E8E8E8]');
        evt.currentTarget.classList.add('bg-black', 'text-white');
    }
}

// Metal border update
function updateMetalBorder(radio) {
    // Reset all borders to gray
    document.querySelectorAll('[id$="-border"]').forEach(div => {
        div.classList.remove('border-black');
        div.classList.add('border-[#E8E8E8]');
    });

    // Set the selected border to black
    const selectedBorder = document.getElementById(radio.value + '-border');
    if (selectedBorder) {
        selectedBorder.classList.remove('border-[#E8E8E8]');
        selectedBorder.classList.add('border-black');
    }
}

// Style border update
function updateStyleBorder(radio) {
    // Reset all style borders to gray
    document.querySelectorAll('[id$="-style"]').forEach(div => {
        div.classList.remove('border-black');
        div.classList.add('border-[#E8E8E8]');
    });

    // Set the selected border to black
    const selectedStyle = document.getElementById(radio.value + '-style');
    if (selectedStyle) {
        selectedStyle.classList.remove('border-[#E8E8E8]');
        selectedStyle.classList.add('border-black');
    }
}
