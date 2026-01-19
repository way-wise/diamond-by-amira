/**
 * Main JavaScript File
 *
 * Add your custom JavaScript here.
 * This file is optional and can be included in the header or footer component.
 */

// Example: Mobile menu toggle (already handled in navbar.php, but you can extend it here)
document.addEventListener('DOMContentLoaded', function () {
  // Add your custom JavaScript here
  console.log('Static PHP Template loaded');
});

// -------------------------
// Price Slider (same pattern as Carat slider)
// -------------------------

let priceMin;
let priceMax;
let priceMinInput;
let priceMaxInput;
let priceSliderTrack;
const priceMinValue = 100;
const priceMaxValue = 10000;
const priceMinGap = 100;

function initPriceSlider() {
  priceMin = document.getElementById('priceMin');
  priceMax = document.getElementById('priceMax');
  priceMinInput = document.getElementById('priceMinInput');
  priceMaxInput = document.getElementById('priceMaxInput');
  priceSliderTrack = document.getElementById('priceSliderTrack');

  if (!priceMin || !priceMax || !priceMinInput || !priceMaxInput || !priceSliderTrack) {
    return;
  }

  // Bind events
  priceMin.addEventListener('input', handlePriceInput);
  priceMax.addEventListener('input', handlePriceInput);

  // Initial paint
  setPriceSliderTrack();
  updatePriceInputs();
}

function handlePriceInput(e) {
  if (!priceMin || !priceMax) return;
  const active = e.target;

  // Adjust z-index so active thumb stays on top
  if (active === priceMin) {
    priceMin.style.zIndex = '3';
    priceMax.style.zIndex = '2';
    if (parseInt(priceMin.value, 10) > parseInt(priceMax.value, 10) - priceMinGap) {
      priceMin.value = parseInt(priceMax.value, 10) - priceMinGap;
    }
  } else {
    priceMax.style.zIndex = '3';
    priceMin.style.zIndex = '2';
    if (parseInt(priceMax.value, 10) < parseInt(priceMin.value, 10) + priceMinGap) {
      priceMax.value = parseInt(priceMin.value, 10) + priceMinGap;
    }
  }

  setPriceSliderTrack();
  updatePriceInputs();
}

function setPriceSliderTrack() {
  if (!priceMin || !priceMax || !priceSliderTrack) return;

  let min = parseInt(priceMin.value, 10);
  let max = parseInt(priceMax.value, 10);

  if (min > max) {
    [min, max] = [max, min];
    priceMin.value = min;
    priceMax.value = max;
  }

  const range = priceMaxValue - priceMinValue;
  const left = ((min - priceMinValue) / range) * 100;
  const right = ((priceMaxValue - max) / range) * 100;

  priceSliderTrack.style.left = `${left}%`;
  priceSliderTrack.style.right = `${right}%`;
}

function updatePriceInputs() {
  if (!priceMin || !priceMax || !priceMinInput || !priceMaxInput) return;

  let min = parseInt(priceMin.value, 10);
  let max = parseInt(priceMax.value, 10);

  if (min > max) {
    [min, max] = [max, min];
    priceMin.value = min;
    priceMax.value = max;
  }

  priceMinInput.value = `$ ${min.toLocaleString()}`;
  priceMaxInput.value = `$ ${max.toLocaleString()}`;
}

// Ensure price slider is initialized after all DOM elements are loaded
window.addEventListener('load', initPriceSlider);

// -------------------------
// Carat Slider
// -------------------------

let caratMin;
let caratMax;
let caratMinInput;
let caratMaxInput;
let caratSliderTrack;
const caratMinValue = 0.15;
const caratMaxValue = 35;
const caratMinGap = 0; // keep gap at 0 to allow touching handles (matches prior behavior)

function initCaratSlider() {
  caratMin = document.getElementById('caratMin');
  caratMax = document.getElementById('caratMax');
  caratMinInput = document.getElementById('caratMinInput');
  caratMaxInput = document.getElementById('caratMaxInput');
  caratSliderTrack = document.getElementById('caratSliderTrack');

  if (!caratMin || !caratMax || !caratMinInput || !caratMaxInput || !caratSliderTrack) {
    return;
  }

  // Bind events
  caratMin.addEventListener('input', handleCaratInput);
  caratMax.addEventListener('input', handleCaratInput);

  // Initial paint
  setCaratSliderTrack();
  updateCaratInputs();
}

function handleCaratInput(e) {
  if (!caratMin || !caratMax) return;
  const active = e.target;

  // Adjust z-index so active thumb stays on top
  if (active === caratMin) {
    caratMin.style.zIndex = '3';
    caratMax.style.zIndex = '2';
    if (parseFloat(caratMin.value) > parseFloat(caratMax.value) - caratMinGap) {
      caratMin.value = (parseFloat(caratMax.value) - caratMinGap).toFixed(2);
    }
  } else {
    caratMax.style.zIndex = '3';
    caratMin.style.zIndex = '2';
    if (parseFloat(caratMax.value) < parseFloat(caratMin.value) + caratMinGap) {
      caratMax.value = (parseFloat(caratMin.value) + caratMinGap).toFixed(2);
    }
  }

  setCaratSliderTrack();
  updateCaratInputs();
}

function setCaratSliderTrack() {
  if (!caratMin || !caratMax || !caratSliderTrack) return;

  let min = parseFloat(caratMin.value);
  let max = parseFloat(caratMax.value);

  if (min > max) {
    [min, max] = [max, min];
    caratMin.value = min;
    caratMax.value = max;
  }

  const range = caratMaxValue - caratMinValue;
  const left = ((min - caratMinValue) / range) * 100;
  const right = ((caratMaxValue - max) / range) * 100;

  caratSliderTrack.style.left = `${left}%`;
  caratSliderTrack.style.right = `${right}%`;
}

function updateCaratInputs() {
  if (!caratMin || !caratMax || !caratMinInput || !caratMaxInput) return;

  let min = parseFloat(caratMin.value);
  let max = parseFloat(caratMax.value);

  if (min > max) {
    [min, max] = [max, min];
    caratMin.value = min;
    caratMax.value = max;
  }

  caratMinInput.value = min.toFixed(2);
  caratMaxInput.value = max.toFixed(2);
}

// Initialize carat slider after load
window.addEventListener('load', initCaratSlider);
