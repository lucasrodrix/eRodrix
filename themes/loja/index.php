<style>

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
            <a href="<?= $configBase?>home" title="Retornar a Página Principal">
                <img src="<?= $configBase ?>images/general/logo.png" title="Logomarca da <?= $titleSite ?>" alt="Logomarca da <?= $titleSite ?>">
            </a>
        </div>
        <div class="divisor3">
            <form method="post" id="frm_search">
                <div class="header_frm_input">
                    <input type="search" name="input_search" id="input_search" placeholder="Pesquise aqui..." class="radius">
                </div>
                <div class="header_frm_btn">
                    <button name=btn_serach id=btn_serach class="radius">
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