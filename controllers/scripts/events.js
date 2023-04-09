limitarText = (idTextArea, maxlenght) => {
    const textarea = document.getElementById(idTextArea);
    
    if(textarea.value.length > maxlenght){
        textarea.value = textarea.value.slice(0, maxlenght);
    }
    if(qt_caracteres = document.getElementById(idTextArea+"_qt_caracteres")){
        qt_caracteres.textContent = textarea.value.length + "/" + maxlenght;
    }
}