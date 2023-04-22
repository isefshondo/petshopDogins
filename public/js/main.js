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
const productCards = [...document.querySelectorAll('.productCardWrapper')];
const formFloatingInputs = [...document.querySelectorAll('.form-floating_input > textarea, .form-floating_input > input[type="text"], input[type="number"]')];
const universalProductCode_checkbox = document.querySelector('.universalProductCode_checkbox');
const categoriesOptions = [...document.querySelectorAll('.categoriesOption')];
const productImages = document.querySelector('#productImages');

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

const btnsAdd = [...document.querySelectorAll('.btnAdd')];

btnsAdd.forEach((item, i) => {
  btnsAdd[i].addEventListener('click', () => {
    if(btnsAdd[i].classList.contains('color_picker')){
      const otherColors = document.getElementById('otherColors');
      const limit = otherColors.getAttribute('data-limit');
      if(otherColors.childElementCount < limit-1){
        otherColors.append(colorPicker());
        numColors++;
      }else{
        msg = 'Você só pode selecionar até ' + limit + ' cores';
        showAlert(msg);
      }
    }else if(btnsAdd[i].classList.contains('add-size')){
      const newSize = document.querySelector('.new-size');
      btnsAdd[i].classList.add('d-none');
      newSize.classList.remove('d-none');

      newSize.querySelector('.btnAdd').addEventListener('click', () => {
        const otherSizes = document.querySelector('.otherSizes');
        const size = newSize.querySelector('input[type="text"]').value;
        otherSizes.append(selectSize(size));
        newSize.querySelector('input[type="text"]').value = '';
        newSize.classList.add('d-none');
        btnsAdd[i].classList.remove('d-none');
      });
    }
  });
});


// ColorPicker
const colorPickers = [...document.querySelectorAll('.color-picker')];
let btnsRemove = [...document.querySelectorAll('.remove')];
let numColors = 0;
let idColorPicker = 0;


colorPickers.forEach((item, i) => {
  colorPickers[i].addEventListener('change', () => {
    selectedColor = colorPickers[i].querySelector('.selected_color');
    selectedColor.textContent = colorPickers[i].querySelector('input[type="color"]').value;
    console.log(colorPickers[i]);
  });
});

btnsRemove.forEach((item, i) => {
  btnsRemove[i].addEventListener('click', (event) => {
    wrapperRemove(event.target.parentNode);
    console.log(btnsRemove);
  });
});

const info = document.querySelector('.info');
const modalInfo = document.getElementById('modal-info');

info.addEventListener('mouseover', () => {
  console.log(modalInfo);
  console.log(info);
  modalInfo.classList.remove('d-none');
});

info.addEventListener('mouseout', () => {
  if(!modalInfo.classList.contains('d-none')){
    modalInfo.classList.add('d-none');
  }
});

colorPicker = () => {
  wrapper = document.createElement('div');
  inputColor = document.createElement('input');
  colorName = document.createElement('p');
  btnRemove = document.createElement('span');
  wrapper.classList.add('color-picker');
  colorName.classList.add('selected_color');
  btnRemove.classList.add('btnAdd');
  btnRemove.classList.add('remove');
  btnRemove.textContent = '- Remover';
  inputColor.type = 'color';
  inputColor.name = 'productColors[]';
  inputColor.value = randomColor();
  colorName.innerText = inputColor.value;
  wrapper.appendChild(inputColor);
  wrapper.appendChild(colorName);
  wrapper.appendChild(btnRemove);
  idColorPicker++;
  wrapper.id = idColorPicker;

  
  btnRemove.addEventListener('click', (event) => {
    wrapperRemove(event.target.parentNode);
    console.log(btnsRemove);
  });

  // Adiciona o novo botão de remoção à lista
  btnsRemove.push(btnRemove);

  // Atualiza a lista de botões de remoção
  btnsRemove = [...document.querySelectorAll('.remove')];

  inputColor.addEventListener('change', () => {
    colorName.innerText = inputColor.value;
  });

  return wrapper;
}

function randomColor(){
  // Gerar 3 números aleatórios entre 0 e 255
  const r = Math.floor(Math.random() * 256);
  const g = Math.floor(Math.random() * 256);
  const b = Math.floor(Math.random() * 256);

  // Concatenar os valores hexadecimais em uma string
  const color = `#${r.toString(16)}${g.toString(16)}${b.toString(16)}`;

  return color;
}

function wrapperRemove(btnParent){
  wrapperParent = btnParent.parentNode;
  wrapperParent.removeChild(btnParent);
  numColors--;
  
  btnsRemove = [...document.querySelectorAll('.remove')];
}

productCards.forEach((item, i) => {
  productCards[i].addEventListener('mouseover', () => { 
    productCard = productCards[i].querySelector('.productCardMask');
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


const universalProductCode_input = document.querySelector('.universalProductCode_input > input[type="number"]');

document.addEventListener('DOMContentLoaded', function() {
  noCode = document.querySelector('input[name="no-code"]');

  // Verificar se o checkbox está marcado
  if(noCode.checked){
    universalProductCode_input.value = '';
    universalProductCode_input.disabled = true;
  }else{
    universalProductCode_input.disabled = false;
  }
});


if(universalProductCode_checkbox){
  universalProductCode_checkbox.addEventListener('change', (event) => {
  
    if(event.target.checked){
      universalProductCode_input.value = '';
      universalProductCode_input.disabled = true;
    }else{
      universalProductCode_input.disabled = false;
    }
  });
}

categoriesOptions.forEach((item, i) => {
  categoriesOptions[i].addEventListener('click', (event) => {
    const checkedRadio = document.querySelector('.categoriesOption > input[type="radio"]:checked');

    if(checkedRadio){
      const otherOption = checkedRadio.closest('.categoriesOption');
      otherOption.classList.remove('checked');
    }
    categoriesOptions[i].classList.add('checked');
  });
});

if(productImages){
  productImages.addEventListener('change', (event) => {
    const input = event.target;
    const dropAreaImages = document.getElementById('drop-area_imgs');
    const limit = productImages.getAttribute('data-limit');
  
    dropAreaImages.innerHTML = "";
  
    if(input.files.length > limit){
      msg = 'Você só pode selecionar até ' + limit + ' imagens';
      showAlert(msg);
      input.value = '';
    }else{
      for(let i=0; i<input.files.length; i++){
          const reader = new FileReader();
          reader.onload = () => {
              const imagePreview = document.createElement("img");
              const figure = document.createElement("figure");
              const span = document.createElement("span");
              figure.className = "drop-area_fig";
              span.className = "closeIcon";
              span.innerHTML = "<i class='fa-sharp fa-solid fa-circle-xmark'></i>";
              imagePreview.className = "drop-area_fig-img";
              imagePreview.src = reader.result;
              figure.appendChild(imagePreview);
              figure.appendChild(span);
              dropAreaImages.appendChild(figure);

              span.addEventListener('click', () => {
                  dropAreaImages.removeChild(figure);
              });
          };
          reader.readAsDataURL(input.files[i]);
      }
    }
  });
  
}

const btnCancelar = document.getElementById("btnCancelar");
const btnModalCancel = document.getElementById("btnModalCancel");
const modal = document.getElementById('modal-product');

btnCancelar.addEventListener('click', () => {
  modal.classList.remove('d-none');
});

btnModalCancel.addEventListener('click', () => {
  modal.classList.add('d-none');
});

modal.querySelector('.Iconfechar').addEventListener('click', () => {
  modal.classList.add('d-none');
});


//FUNCTIONS

selectSize = (size) => {

  if((!size || size.trim() === '')){
    return '';
  }
  const labelCheckbox = document.createElement('label'); 
  const inputCheckbox = document.createElement('input');

  inputCheckbox.type = 'checkbox';
  inputCheckbox.name = 'sizes[]';
  inputCheckbox.value = size;
  inputCheckbox.checked = true

  labelCheckbox.appendChild(inputCheckbox);
  labelCheckbox.appendChild(document.createTextNode(` ${size}`));

  return labelCheckbox;
}

showAlert = (msg) => {
  const alert = document.getElementById('alert');

  alert.classList.remove('d-none');
  alert.querySelector(".modal-del-text").textContent = msg;
  alert.querySelector(".btn-danger").addEventListener('click', () => {
    alert.classList.add('d-none');
  });
}