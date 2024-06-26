<style>

</style>
<div class="clear"></div>
<article class="footer_bg">
    <div class="footer_main">
        <ul class="navigator">
            <div class="divisor3">
                <a href="<?= $configBase?>categories" title="Navegue em nossas Categorias" class="radius">
                    <li>Categorias</li>
                </a>
                <a href="<?= $configBase?>offers" title="Navegue em nossas Promoções" class="radius">
                    <li>Promoções</li>
                </a>
                <a href="<?= $configBase?>shoes" title="Navegue em nossa categoria de Calçados" class="radius">
                    <li>Calçados</li>
                </a>
                <a href="<?= $configBase?>clothes" title="Navegue em nossa categoria de Roupas" class="radius">
                    <li>Roupas</li>
                </a>
                <a href="<?= $configBase?>register" title="Cadastre-se em nossa Loja!" class="radius">
                    <li><i class="fas fa-user"></i>Cadastre-se</li>
                </a>
                <a href="<?= $configBase?>login" title="Visualize sua conta e seus pedidos" class="radius">
                    <li><i class="fas fa-unlock"></i>Entrar</li>
                </a>
            </div>
            <div class="divisor3">
                <a href="<?= $configBase?>aboutus" title="Conheça nossa Loja" class="radius">
                    <li>Sobre</li>
                </a>
                <a href="<?= $configBase?>policy" title="Conheça nossa política de privacidade" class="radius">
                    <li>Política</li>
                </a>
                <a href="<?= $configBase?>devolution" title="Conheça nossas regras para troca e devolução" class="radius">
                    <li>Troca e Devolução</li>
                </a>
                <a href="<?= $configBase?>senders" title="Conheça nossas formas de envio" class="radius">
                    <li>Formas de Envio</li>
                </a>
                <a href="<?= $configBase?>payments" title="Conheça nossas formas de pagamento" class="radius">
                    <li>Formas de Pagamento</li>
                </a>
            </div>
            <div class="divisor3">
                <p class="text-center color-white font-text-min">
                    Nossas Redes Sociais:
                </p>
                <p class="text-center font-text-medium">
                    <a href="#" title="Acesse a nossa página no Facebook" class="radius footer_socials"><i class="fab fa-facebook"></i></a>
                    <a href="#" title="Acesse a nosso perfil no Instagram" class="radius footer_socials"><i class="fab fa-instagram"></i></a>
                </p>
                <div class="espaco-max"></div>
                <p class="font-text-min color-white text-center">Canais de Contato:</p>
                <ul class="navigator">
                    <a href="#" title="Fale conosco via Whatsapp" class="radius footer_contact">
                        <li>
                            <i class="fab fa-whatsapp"></i>
                            <?= $phoneSite ?>
                        </li>
                    </a>
                    <a href="mailto:<?= $mailSite ?>" title="Fale conosco via E-mail" class="radius footer_contact">
                        <li>
                            <i class="fa fa-envelope"></i>
                            <?= $mailSite ?>
                        </li>
                    </a>
                    <a href="#" title="Fale conosco via Telefone" class="radius footer_contact">
                        <li>
                            <i class="fa fa-phone"></i>
                            <?= $phoneSite ?>
                        </li>
                    </a>
                </ul>
            </div>
        </ul>
        <div class="clear"></div>
    </div>
    <div class="footer_down">
        <h1 class="text-center"><?= $titleSite; ?> - &copy; <?= date('Y'); ?> - Todos os Direitos Reservados</h1>
        <p class="text-center">Desenvolvido por <?= $nameAutor; ?></p>        
    </div>
</article>