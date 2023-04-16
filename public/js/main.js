const productsWrapper = [...document.querySelectorAll('.productsWrapper')];
const brandsWrapper = [...document.querySelectorAll('.brandsHolder')];
const mainCarousel = document.querySelector('.imgs-slider');
let currentImgIndex = 0;
const sectionToggleInfo = [...document.querySelectorAll('#sectionToggle')];
const productTextDetails = [...document.querySelectorAll('.productInfoDetails')];
let purchaseFrequently = document.getElementById('purchaseFrequently');
let purchaseFrequentlyContainer = document.querySelectorAll('.purchaseFrequentlyInfo')[0];

const otherProductImages = [...document.querySelectorAll('.otherProductImages_item')];
const productImage = document.getElementById('productImage');
const btnsAdd = [...document.querySelectorAll('.btnAdd')];
const productCards = [...document.querySelectorAll('.productCardWrapper')];
const formFloatingInputs = [...document.querySelectorAll('.form-floating_input > textarea, .form-floating_input > input[type="text"], input[type="number"]')];
const universalProductCode_checkbox = document.querySelector('.universalProductCode_checkbox');

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

sectionToggleInfo.forEach((item, i) => {
  sectionToggleInfo[i].addEventListener('click', () => {
    let styleDisplay = productTextDetails[i].style.display;
    !styleDisplay ? productTextDetails[i].style.display = "block" : productTextDetails[i].style.display = "";
  })
});


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

/* #limitar quantidade de cliques */
btnsAdd.forEach((item, i) => {
  btnsAdd[i].addEventListener('click', () => {
    if(btnsAdd[i].contains('color_picker')){
      document.getElementById('selectProductColors').append(colorPicker());
    }else if(btnsAdd[i].contains('new_size')){
      document.getElementById('addSize').append();
    }
    console.log("color picker");
  });
});


productCards.forEach((item, i) => {
  productCards[i].addEventListener('mouseover', () => { 
    productCard =  productCards[i].querySelector('.productCardMask');
    productCard.classList.remove('d-none');
    productCard.classList.add('d-flex');
  });
  productCards[i].addEventListener('mouseout', () => {
    productCard =  productCards[i].querySelector('.productCardMask');
    productCard.classList.remove('d-flex');
    productCard.classList.add('d-none');
  });
});

formFloatingInputs.forEach((item, i) => {
  formFloatingInputs[i].addEventListener('input', () => {
    const limit = parseInt(formFloatingInputs[i].getAttribute('data-limit'));

    if(formFloatingInputs[i].value.length > limit){
      formFloatingInputs[i].value = formFloatingInputs[i].value.slice(0, limit);
    }

    if(inputLenght = document.getElementById(formFloatingInputs[i].id + "_inputLenght")){
      inputLenght.textContent = formFloatingInputs[i].value.length + '/' + limit;
    }
  });
});

universalProductCode_checkbox.addEventListener('change', (event) => {
  const universalProductCode_input = document.querySelector('.universalProductCode_input > input[type="number"]');
  
  if(event.target.checked){
    universalProductCode_input.value = '';
    universalProductCode_input.disabled = true;
  }else{
    universalProductCode_input.disabled = false;
  }
});


//FUNCTIONS

previewImages = (event) => {
  const input = event.target;
  const dropAreaImages = document.getElementById('drop-area_imgs');

  dropAreaImages.innerHTML = "";

  if (input.files.length > 5) {
    alert('Você só pode selecionar até 5 imagens');
    input.value = '';
  }else{
    for(let i=0; i<input.files.length; i++){
        const reader = new FileReader();
        reader.onload = () => {
            imagePreview = document.createElement("img");
            const figure = document.createElement("figure");
            figure.className = "drop-area_fig";
            imagePreview.className = "drop-area_fig-img";
            imagePreview.src = reader.result;
            figure.appendChild(imagePreview);
            dropAreaImages.appendChild(figure);
        };
        reader.readAsDataURL(input.files[i]);
    }
  }
}

colorPicker = () => {
  wrapper = document.createElement('div');
  inputColor = document.createElement('input');
  colorName = document.createElement('p');
  wrapper.classList.add('color-picker');
  inputColor.type = 'color';
  inputColor.name = 'cor_produto';
  inputColor.value = '#FF0000';
  wrapper.appendChild(inputColor);

  return wrapper;
}

selectSize = () => {
  labelCheckbox = document.createElement('label');
  inputCheckbox = document.createElement('input');
  
  inputCheckbox.type = 'checkbox'
  inputCheckbox.name
}