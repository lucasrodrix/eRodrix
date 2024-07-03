<?php include_once 'payment.php';?>
<?php include_once 'header.php';?>
<main class="container">
    <section class="container_main">
        <div class="container_controller bgcolor-gray">
            <div class="container_details">
                <p class="paragraph_navigator color-white-dark">
                    <a href="<?= $configBase?>" title="Retornar a Página Principal">
                        <i class="fa fa-home"></i>Home
                    </a>/Pedido Finalizado
                </p>
            </div>
        </div>
    </section>    
    <section class="container_main">
        <div class="container_controller">
            <div class="clear"></div>
            <div class="container_cart infoScroll">
                <h2 class="font-text-mex font-weight-medium text-center">Pedido Recebido com Sucesso.</h2>
                <div class="information bgcolor-white-dark">
                    <p class="text-center font-text-min">
                        Você receberá um e-mail assim que o pagamento for identificado e aprovado.
                    </p>
                    <p class="text-center font-weight-sub">
                        Obs.: Verifique a sua caixa de SPAM e/ou lixo eletrônico, caso o e-mail não chegue em alguns minutos.
                    </p>
                    <p class="text-center font-weight-min btnThanks">
                        <a href="<?= $configBase?>login" title="Acesse o seu painel para acompanhar o pedido." class="radius btn_edit">
                            <i class="fa fa-box-open"></i> Acompanhar Pedido
                        </a>
                    </p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <div class="container_controller">
            <?php require 'pages-container/container-bestsellers.php';?>
            <?php require 'pages-container/container-banner-small.php';?>
            <?php require 'pages-container/container-foryou.php';?>
            <?php require 'pages-container/container-thebest.php';?>            
        </div>
    </section>
</main>

<?php include_once 'footer.php';?>