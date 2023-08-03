$(document).ready(function() {

    $.ajax({
        type: "get",
        url: '/aplicacoes/CartaServicos/listaCategorias_div.cfm?codTipoPessoa=' + urlCodTipoPessoa, // pagina de acao
        //data: dadosFormulario, // variaveis de form
        //dataType: "json",
        success: function(objResponse) {
            // Check to see if request was successful.

            objResponse = objResponse.replace(/^\s+|\s+$/g, "");

            if (objResponse) {
                $("#listaCategorias").html(objResponse);
                $("#migalha-2").html(nomeTipoPessoa);
                return false;
            } else {
                $("#listaCategorias").html("Erro ao exibir as categorias!");
            }
        },
        error: function(objRequest, strError) {
            $("#listaCategorias").html("Erro ao exibir as categorias!!!!!!");
        }
    });

});