const productsWrapperP1 = [...document.querySelectorAll('.productsWrapper')];
const productsWrapperP2 = [...document.querySelectorAll('.secondProductsWrapper')];
const brandsWrapper = [...document.querySelectorAll('.brandsHolder')];
const mainCarousel = document.querySelector('.imgs-slider');
const carouselImages = mainCarousel.querySelectorAll('img');
let currentImgIndex = 0;

let purchaseFrequently = document.getElementById('purchaseFrequently');
let purchaseFrequentlyContainer = document.querySelectorAll('.purchaseFrequentlyInfo')[0];

productsWrapperP1.forEach((item, i) => {
  const previousButton = [...document.querySelectorAll('.btnPrevFirstProducts')];
  const nextButton = [...document.querySelectorAll('.btnNextFirstProducts')];
  // TODO: Maybe change the size of the scroll
  let wrapperDimensions = item.getBoundingClientRect();
  let wrapperWidth = wrapperDimensions.width;

  previousButton[i].addEventListener('click', () => {
    item.scrollLeft -= wrapperWidth;
  });

  nextButton[i].addEventListener('click', () => {
    item.scrollLeft += wrapperWidth;
  });
});

productsWrapperP2.forEach((item, i) => {
  const previousButton = [...document.querySelectorAll('.btnPrevSecondProducts')];
  const nextButton = [...document.querySelectorAll('.btnNextSecondProducts')];
  // TODO: Maybe change the size of the scroll
  let wrapperDimensions = item.getBoundingClientRect();
  let wrapperWidth = wrapperDimensions.width;

  previousButton[i].addEventListener('click', () => {
    item.scrollLeft -= wrapperWidth;
  });

  nextButton[i].addEventListener('click', () => {
    item.scrollLeft += wrapperWidth;
  });
});

brandsWrapper.forEach((item, i) => {
  const previousButton = [...document.querySelectorAll('.btnPrevPartnerBrands')];
  const nextButton = [...document.querySelectorAll('.btnNextPartnerBrands')];
  let brandWrapperDimension = item.getBoundingClientRect();
  let brandsWrapperWidth = brandWrapperDimension.width;

  previousButton[i].addEventListener('click', () => {
    item.scrollLeft -= brandsWrapperWidth;
  });

  nextButton[i].addEventListener('click', () => {
    item.scrollLeft += brandsWrapperWidth;
  });
});

function moveCarouselImage () {
  currentImgIndex = (currentImgIndex + 1) % carouselImages.length;
  mainCarousel.scrollLeft = currentImgIndex * carouselImages[0].offsetWidth;
}

setInterval(moveCarouselImage, 2500);