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
        }
      });
    });
  });