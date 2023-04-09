const productsWrapper = [...document.querySelectorAll('.productsWrapper')];
const previousButton = [...document.querySelectorAll('.leftButton')];
const nextButton = [...document.querySelectorAll('.rightButton')];

productsWrapper.forEach((item, i) => {
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