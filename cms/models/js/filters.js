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