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

    //Tabelas zebradas
    $("table tbody tr:odd").css("background-color", "#d2d2d2");
    $("table tbody tr:even").css("background-color", "#e4e4e4");
    $("table tbody td").css("padding", "10px 20px");

    //Máscara de CEP
    jQuery("input.zipcode").mask("99999-999")
        .focusout(function(event) {
            var target, zipcode, element;
            target = (event.currentTarget) ? event.currentTarget : event.sreElement;
            zipcode = target.value.replace(/\D/g,'');
            element = $(target);
            element.unmask();

            if(zipcode.lenght > 9) {
                element.mask("99999-999");
            }else{
                element.mask("99999-999");
            }
        });

    //Máscara de Telefone
    jQuery("input.phone").mask("(99) 99999-9999")
        .focusout(function(event) {
            var target, phone, element;
            target = (event.currentTarget) ? event.currentTarget : event.sreElement;
            phone = target.value.replace(/\D/g,'');
            element = $(target);
            element.unmask();

            if(phone.lenght > 9) {
                element.mask("(99) 99999-9999");
            }else{
                element.mask("(99) 99999-9999");
            }
        });
        
    //Máscara de Data
    jQuery("input.dateBirth").mask("99/99/9999")
        .focusout(function(event) {
            var target, dateBirth, element;
            target = (event.currentTarget) ? event.currentTarget : event.sreElement;
            dateBirth = target.value.replace(/\D/g,'');
            element = $(target);
            element.unmask();

            if(dateBirth.lenght > 9) {
                element.mask("99/99/9999");
            }else{
                element.mask("99/99/9999");
            }
        });

    //Máscara de CPF
    jQuery("input.cpf").mask("999.999.999-99")
        .focusout(function(event) {
            var target, cpf, element;
            target = (event.currentTarget) ? event.currentTarget : event.sreElement;
            cpf = target.value.replace(/\D/g,'');
            element = $(target);
            element.unmask();

            if(cpf.lenght > 9) {
                element.mask("999.999.999-99");
            }else{
                element.mask("999.999.999-99");
            }
        });

    //Máscara de CNPJ
    jQuery("input.cnpj").mask("99.999.999/9999-99")
        .focusout(function(event) {
            var target, cnpj, element;
            target = (event.currentTarget) ? event.currentTarget : event.sreElement;
            cnpj = target.value.replace(/\D/g,'');
            element = $(target);
            element.unmask();

            if(cnpj.lenght > 9) {
                element.mask("99.999.999/9999-99");
            }else{
                element.mask("99.999.999/9999-99");
            }
        });

    //Máscara de moeda
    $('.money').masMoney();

    //Validar CPF
    function CPF(){"user_strict";function r(r){
        for(var t=null,n=0;9>n;++n)t+=r.toString().charAt(n)*(10-n);var i=t%11;return i=2>i?0:11-i}function t(r){
        for(var t=null,n=0;10>n;++n)t+=r.toString().charAt(n)*(11-n);var i=t%11;return i=2>i?0:11-i}var n="(CPF Inválido)",
        i="";this.gera=function(){for(var n="",i=0;9>i;++i)n+=Math.floor(9*Math.random())+"";var o=r(n),a=n+"-"+o+t(n+""+o);
        return a},this.valida=function(o){for(var a=o.replace(/\D/g,""),u=a.substring(0,9),f=a.substring(9,11),v=0;10>v;v++)
        if(""+u+f==""+v+v+v+v+v+v+v+v+v+v+v)return n;var c=r(u),e=t(u+""+c);return f.toString()===c.toString()+e.toString()?i:n}}

    var CPF = new CPF();
    $(".cpf").keypress(function(){
        $("#validateCPF").html(CPF.valida($(this).val()));
    });

    $(".cpf").blur(function(){
        $("#validateCPF").html(CPF.valida($(this).val()));
    });

    //Validar CNPJ
    function cnpj(cnpj) {

        cnpj = cnpj.replace(/[^\d]+/g, '');

        if (cnpj == '') return false;

        if (cnpj.length != 14)
            return false;

        if (cnpj == "00000000000000" ||
            cnpj == "11111111111111" ||
            cnpj == "22222222222222" ||
            cnpj == "33333333333333" ||
            cnpj == "44444444444444" ||
            cnpj == "55555555555555" ||
            cnpj == "66666666666666" ||
            cnpj == "77777777777777" ||
            cnpj == "88888888888888" ||
            cnpj == "99999999999999")
            return false;

        tamanho = cnpj.length - 2
        numeros = cnpj.substring(0, tamanho);
        digitos = cnpj.substring(tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2)
                pos = 9;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(0)) return false;
        tamanho = tamanho + 1;
        numeros = cnpj.substring(0, tamanho);
        soma = 0;
        pos = tamanho - 7;
        for (i = tamanho; i >= 1; i--) {
            soma += numeros.charAt(tamanho - i) * pos--;
            if (pos < 2)
                pos = 9;
        }
        resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
        if (resultado != digitos.charAt(1))
            return false;

        return true;
    }

    function validarCNPJ(el){
        if(cnpj(el.value) == false){
            $("#validateCNPJ").html('(CNPJ Inválido)');
        }else{
            $("#validateCNPJ").html('');
        }
    }    
});