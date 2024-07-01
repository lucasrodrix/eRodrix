<style>
    /* Header */
    .header_bg{
        width: 100%;
        height: auto;
        margin: 0;
        background-color: #f2f2f2;
    }
    .header_bg .header_top{
        width: 80%;
        margin: 0 10%;
        font-size: 0.8em;
        padding: 4px 0;
    }
    .header_top .divisor2 a{
        margin-right: 5px;
    }
    .header_bg .header_main{
        width: 80%;
        margin: 0 10%;
        font: 0.8em;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #ffffff;
    }
    .header_main input[type=search]{
        padding: 10px 20px;
        width: 90%;
        margin: 0;
        float: left;
        background-color: #f2f2f2;
    }
    .header_main button{
        float: right;
        padding: 10px 10px;
    }
    .header_bg .header_footer{
        width: 100%;
        margin: 0 0 30px 0;        
        font-size:  0.8em;
        background-color: #ffffff;
    }
    .header_footer ul{
        width: 80%;
        margin: 0 10%;
        padding: 5px 10px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .header_footer a{
        padding: 5px 10px;
        color: #666666;
    }
    .header_footer li{
        display: inline-block;
    }
    .header_footer a:hover,
    .header_footer li:hover{
        background-color: #b0acac;
        color: #ffffff;
    }
    .header_footer li span{
        font-size: 0.7em;
        background-color: #6f7882;
        color: #ffffff;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        padding: 2px 2px;
        margin-top: -10px;
        margin-left: 7px;
        position: absolute;
    }

    /*Responsividade*/
    @media(max-width: 1380px){
        .header_main input[type=search]{
            width: 87%;
        }
    }
    @media(max-width: 1180){
        .header_main input[type=search]{
            width: 85%;
        }
    }
    @media(max-width: 1000px){
        .header_main input[type=search]{
            width: 82%;
        }
        .header_bg .header_top{
            width: 90%;
            margin: 0 5%;
        }
    }
    @media(max-width: 930px){
        .header_bg .header_main{
            width: 90%;
            margin: 0 5%;
            font-size: 0.7em;
            display: block !important;
        }
        .header_bg .header_footer{
            width: 90%;
            margin: 0 5% 30px 5%;
            font-size: 0.7em;
            display: block !important;
        }
        .header_main input[type=search]{
            width: 80% !important;
        }
        .header_bg .header_top{
            font-size: 0.7em;
        }
    }
    @media(max-width: 760px){
        .header_bg .header_main{
            font-size: 0.8em;
        }
        .header_bg .header_footer{
            width: 90%;
            margin: 0 5% 0 5%;
            font-size: 0.7em;
            display: block !important;
        }
        .header_main input[type=search]{
            width: 93% !important;
        }
        .header_bg .header_top{
            font-size: 0.8em;
        }
        .header_footer ul{
            width: 90%;
            margin: 0 5%;
            padding: 5px 10px;
            display: block;
        }
        .header_footer a{
            text-align: center;
            display: block;
        }
    }
    @media(max-width: 660px){
        .header_main input[type=search]{
            width: 100% !important;
            margin-bottom: 5px;
        }
        .header_main button{
            width: 100% !important;
            margin-bottom: 5px;
        }
    }
</style>

<article class="header_bg">
    <div class="header_top">
        <div class="divisor2">
            <p class="text-left m-text-center">
                <i class="fa fa-truck"></i>Entregamos em todo Brasil
            </p>
        </div>
        <div class="divisor2">
            <p class="text-right m-text-center">
                <a href="#" title="Acesse o Facebook da Loja" class="radius btn_off">
                    <i class="fab fa-facebook"></i>
                </a>
                <a href="#" title="Acesse o Instragram da Loja" class="radius btn_off">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" title="Acesse o Twitter da Loja" class="radius btn_off">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" title="Fale conosco via Whatsapp" class="radius btn_off">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="mailto:<?= $mailSite ?>" title="Fale conosco via E-mail" class="radius btn_off">
                    <i class="fa fa-envelope"></i>
                </a>
                <a href="<?= $configBase?>login" title="Faça o login e veja seus pedidos" class="radius btn_off">
                    <i class="fa fa-unlock"></i>
                </a>
            </p>
        </div>
        <div class="clear"></div>
    </div>

    <div class="header_main">
        <div class="divisor3">
            <a href="<?= $configBase?>" title="Retornar a Página Principal">
                <img src="<?= $configBase ?>images/general/logo.png" title="Logomarca da <?= $titleSite ?>" alt="Logomarca da <?= $titleSite ?>">
            </a>
        </div>
        <div class="divisor3">
            <form method="post" id="frm_search">
                <div class="header_frm_input">
                    <input type="search" name="input_search" id="input_search" placeholder="Pesquise aqui..." class="radius">
                </div>
                <div class="header_frm_btn">
                    <button name=btn_search id=btn_search class="radius btn_edit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="divisor3">
            <p class="text-center">
                <i class="fa fa-phone"></i>
                <?= $phoneSite ?>
            </p>
            <p class="text-center">
                <i class="fa fa-envelope"></i>
                <?= $mailSite ?>
            </p>
        </div>
        <div class="clear"></div>
    </div>

    <div class="header_footer">
        <ul class="navigator">
            <a href="<?= $configBase?>categories/offers" title="Conheça nossas Promoções">
                <li>Promoções</li>
            </a>
            <a href="<?= $configBase?>categories/shoes" title="Conheça nossos Calçados">
                <li>Calçados</li>
            </a>
            <a href="<?= $configBase?>categories/shoes" title="Conheça nossas Roupas">
                <li>Roupas</li>
            </a>
            <a href="<?= $configBase?>cart" title="Confira seu carrinho" class="radius">
                <li>
                    <span>99</span>
                    <i class="fas fa-shopping-cart"></i>
                </li>
            </a>
        </ul>
    </div>
    <div class="clear"></div>
</article>