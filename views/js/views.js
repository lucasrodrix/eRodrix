$(document).ready(function(){
    //Abrir Modal
    $("#open_modal").click(function(){
        $('.modal').css('display', 'flex');
        $(".modal").fadeIn(400);
    });
    //Fechar Modal
    $('.modal-close').click(function(){
        $('.modal').css('display', 'none');
        $(".modal").fadeOut(400);
    });

    //Abrir Notificações
    $('.open_notification').click(function(){
        $('.notification-container').css('display', 'flex');
        $(".notification-container").fadeIn(400);
    });
    //Fechar Notificações
    $('.notification-close').click(function(){
        $('.notification-container').css('display', 'none');
        $(".notification-container").fadeOut(400);
    });

    //CEP Automatico - República Virtual
    $('zipcode').blur(function(e){
        if($.trim($('.zipcode').val())){
            $.getScript('http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep='+$('.zipcode').val(),
            function(){
                if(resultadoCEP["resultado"]){
                    $('.address').val(unescape(resultadoCEP["tipo_logradouro"]) +""+ unescape(resultadoCEP["logradouro"]));
                    $('.neighborhood').val(unescape(resultadoCEP["bairro"]));
                    $('.city').val(unescape(resultadoCEP["cidade"]));
                    $('.state').val(unescape(resultadoCEP["uf"]));
                }
            });
        }
    });

    //Autocarregamento de imagens - preview
    var loadFile = function(event){
        var reader = new FileReader();
        reader.onload = function(){
            var output = document.getElementById("loadPhoto");
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }

    //Intervalo de tempo - modais
    setInterval(function(){
        $(".notification-container").fadeOut(1000);
    },5000);
});