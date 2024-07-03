$(document).ready(function(){
    //Captura URL do Site

    //Abrir Modal de Compra
    $('.open_buy').click(function(e){
        $('.modal_buy').css('display', 'flex');

        var id = $(this).attr('data-id');

        $('#input_id').val(id);
    });

    //Fechar Modal de Compra
    $('.close').click(function(e){
        $('.modal_buy').css('display', 'none');
        $('#input_id').val('');
    });

    //Abrir Modal de Endereço
    $('.open_adress').click(function(e){
        $('.modal_address').css('display', 'flex');
    });

    //Fechar Modal de Endereço
    $('.close').click(function(e){
        $('.modal_address').css('display', 'none');
    });

    //Abrir Modal de Pagamento
    $('.modal_payment').click(function(e){
        $('.paymentData').css('display', 'flex');
    });

    //Fechar Modal de Pagamento
    $('.close').click(function(e){
        $('.paymentData').css('display', 'none');
    });
});