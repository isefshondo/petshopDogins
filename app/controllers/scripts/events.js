limitarText = (idTextArea, maxlenght) => {
    const textarea = document.getElementById(idTextArea);
    
    if(textarea.value.length > maxlenght){
        textarea.value = textarea.value.slice(0, maxlenght);
    }
    if(qt_caracteres = document.getElementById(idTextArea+"_qt_caracteres")){
        qt_caracteres.textContent = textarea.value.length + "/" + maxlenght;
    }
}

previewImages = (event) => {
    const input = event.target;
    const dropAreaImages = document.getElementById('drop-area_imgs');

    dropAreaImages.innerHTML = "";

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