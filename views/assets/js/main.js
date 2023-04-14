const productsWrapper = [...document.querySelectorAll('.productsWrapper')];

const brandsWrapper = [...document.querySelectorAll('.brandsHolder')];

const mainCarousel = document.querySelector('.imgs-slider');
let currentImgIndex = 0;

const sectionToggleInfo = [...document.querySelectorAll('#sectionToggle')];
const productTextDetails = [...document.querySelectorAll('.productInfoDetails')];

const otherProductImages = [...document.querySelectorAll('.otherProductImages_item')];
const productImage = document.getElementById('productImage');

let purchaseFrequently = document.getElementById('purchaseFrequently');
let purchaseFrequentlyContainer = document.querySelectorAll('.purchaseFrequentlyInfo')[0];

productsWrapper.forEach((item, i) => {
  const previousButton = [...document.querySelectorAll('.leftButton')];
  const nextButton = [...document.querySelectorAll('.rightButton')];
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
  const carouselImages = mainCarousel.querySelectorAll('img');
  currentImgIndex = (currentImgIndex + 1) % carouselImages.length;
  mainCarousel.scrollLeft = currentImgIndex * carouselImages[0].offsetWidth;
}

mainCarousel ? setInterval(moveCarouselImage, 2500) : null;

otherProductImages.forEach((item, i) => {
  if(!otherProductImages[i].classList.contains('void')){
    otherProductImages[i].addEventListener('click', () => {
      otherProductImage = otherProductImages[i].querySelector('.otherProductImage');
      document.querySelector('.otherProductImages_item.active').classList.remove('active');
      otherProductImages[i].classList.add('active');
      productImage.src = otherProductImage.src;
    });
  }
});

sectionToggleInfo.forEach((item, i) => {
  sectionToggleInfo[i].addEventListener('click', () => {
    let styleDisplay = productTextDetails[i].style.display;
    !styleDisplay ? productTextDetails[i].style.display = "block" : productTextDetails[i].style.display = "";
  })
});