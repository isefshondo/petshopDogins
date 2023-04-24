$('input[name="filters[]"]').change(function(){
    var filters = $('input[name="filters[]"]:checked').map(function () {
        return this.value;
    }).get();
    
    // Enviar o array de filtros para o servidor usando AJAX
    $.ajax({
        type: "POST",
        url: "../models/filters.php",
        data: {filters: filters},
        success: function(result) {
            // Exibir o resultado na página sem recarregar a página inteira
            $("#filters").html(result);

            updateProductsWrapper();
        }
    });

});

$(document).ready(function() {
    // Quando o campo de busca é alterado, buscar os resultados
    $('#busca').on('input', function() {
      // Recuperar a string de busca
      var busca = $(this).val();
      
      // Fazer a requisição AJAX para o arquivo buscar.php
      $.ajax({
        type: 'POST',
        url: '../models/search.php',
        data: {busca: busca},
        success: function(result) {

          $('#resultados').html(result);
          
          updateProductsWrapper();
        }
      });
    });

    $('#forms').submit(function(event) {
      event.preventDefault();
      var formData = $(this).serialize();
      $.ajax({
        url: '../models/login.php',
        method: 'POST',
        data: formData,
        dataType: 'json'
      })
      .done(function(response) {
        if(response.status === 'success'){
          window.location.href = response.redirect;
        }else{
          showAlert(response.message);
        }   
      })
      .fail(function(xhr, status, error) {
        // Exibir uma mensagem de erro genérica para o usuário
        showAlert('Ocorreu um erro ao processar a solicitação.');
        console.error(xhr.responseText);
      });

      return false; // adicionando esta linha
    });
  });

  showAlert = (msg, reload = false) => {
    const alert = document.getElementById('alert');
  
    alert.classList.remove('d-none');
    alert.querySelector(".modal-del-text").textContent = msg;
    alert.querySelector(".btn-danger").addEventListener('click', () => {
      alert.classList.add('d-none');
  
      if(reload==true){
        window.location.reload();
      }
    });
  }  