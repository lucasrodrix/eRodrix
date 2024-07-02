<!-- <?php include_once 'modal.php';?> -->
<?php include_once 'header.php';?>
<main class="container">
    <section class="container_main">
        <div class="container_controller bgcolor-gray">
            <div class="container_details">
                <p class="paragraph_navigator color-white-dark">
                    <a href="<?= $configBase?>" title="Retornar a Página Principal">
                        <i class="fa fa-home"></i>Home
                    </a>/Checklist
                </p>
            </div>
        </div>
    </section>    
    <section class="container_main">
        <div class="container_controller">
            <h2 class="text-left m-text-center font-text-sub title_checklist">Escolha a forma de Pagamento:</h2>
                <div class="divisor4 card4 bgcolor-white-dark radius payment">
                    <img src="<?= $configBase ?>images/general/mercadopago.png" title="Imagem do Pagamento" alt="Imagem do Pagamento">
                    <p class="text-center color-dark font-text-sub actions">
                        <a href="#" class="radius btn_new modal_payment" data-id="1" data-pay="mercadoPagoPix">
                            <i class="fa fa-credit-card"></i> Pagar Agora
                        </a>
                    </p>
                </div>
                <div class="divisor4 card4 bgcolor-white-dark radius payment">
                    <img src="<?= $configBase ?>images/general/pagseguro.png" title="Imagem do Pagamento" alt="Imagem do Pagamento">
                    <p class="text-center color-dark font-text-sub actions">
                        <a href="#" class="radius btn_new modal_payment" data-id="1" data-pay="creditCard">
                            <i class="fa fa-credit-card"></i> Pagar Agora
                        </a>
                    </p>
                </div>
                <div class="clear"></div>
            <div class="container_cart">
                <h1 class="font-text-medium font-weight-medium text-left m-text-center">Lista de Produtos do seu Pedido:</h1>
                <table class="table">
                    <?php for($i = 0; $i < 6; $i++):?>
                        <tr>
                            <td class="td_minus td_img">
                                <img src="<?= $configBase ?>images/products/product.png" title="Imagem do Produto: Tenis Adidas Sporting" alt="Imagem do Produto: Tenis Adidas Sporting">
                            </td>
                            <td class="td_plus">
                                <h2>Tenis Adidas Sporting</h2>
                                <p>Cor: Azul - Tamanho: 33</p>
                            </td>
                            <td class="td_minus">
                                <h2>R$ 320,00</h2>
                            </td>
                            <td class="td_minus">
                                <form method="post" id="form_cart">
                                    <input type="number" name="input_cart" id="input_cart" value="1" class="radius">
                                </form>
                            </td>
                            <td class="td_sub">
                                <p class="cart_actions text-center font-text-max">
                                    <a href="#" title="Produto listado no Carrinho" class="color-green-dark radius" id="delete_cart">
                                        <i class="fa fa-check"></i>
                                    </a>
                                </p>
                            </td>
                        </tr>
                    <?php endfor;?>
                    <tr>
                        <td colspan="5">
                            <p class="text-right font-weight-medium font-text-medium">Total do Carrinho: R$1.200,00</p>
                        </td>                        
                    </tr>
                    <div class="clear"></div>
                </table>
                <div class="clear"></div>
            </div>
        </div>
    </section>
</main>

<?php include_once 'footer.php';?>