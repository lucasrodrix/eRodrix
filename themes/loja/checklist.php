<!-- <?php include_once 'modal.php';?> -->
<?php include_once 'header.php';?>

<article class="open_modal modal_address" style="display: none;">
    <div class="open_container">
        <div class="modal_container_close">
            <p class="text-right close">
                <a href="#" class="btn_delete redius modal-close" title="Fechar">
                    <i class="fa fa-times-circle"></i>
                </a>
            </p>
        </div>
        <div class="address">
            <h2 class="textleft m-text-center font-text-min title_checklist">Cadastrar Novo Endereço:</h2>
            <div class="container_action">
                <form action="#" method="post" id="form_address">
                    <input type="hidden" name="input_id" id="input_id" value="">
                    <div class="divisor2">
                        <label for="zipcode">CEP: <input type="text" class="zipcode" name="zipcode" id="zipcode"></label>
                    </div>
                    <div class="divisor2">
                        <label for="address">Endereço: <input type="text" class="address" name="address" id="address"></label>
                    </div>
                    <div class="clear"></div>
                    <div class="divisor3">
                        <label for="number">Número: <input type="text" class="number" name="number" id="number"></label>
                    </div>
                    <div class="divisor3">
                        <label for="complement">Complemento: <input type="text" class="complement" name="complement" id="complement"></label>
                    </div>
                    <div class="divisor3">
                        <label for="neighborhood">Bairro: <input type="text" class="neighborhood" name="neighborhood" id="neighborhood"></label>
                    </div>
                    <div class="divisor3">
                        <label for="city">Cidade: <input type="text" class="city" name="city" id="city"></label>
                    </div>
                    <div class="divisor3">
                        <label for="state">Estado: <input type="text" class="state" name="state" id="state"></label>
                    </div>
                    <div class="divisor3">
                        <br>
                        <button class="btn_new radius" id="btn_address" name="btn_address">
                            <i class="fa fa-street-view"></i> Salvar
                        </button>
                    </div>
                    <div class="clear"></div>
                </form>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</article>

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
            <h2 class="text-left m-text-center font-text-sub title_checklist">Onde deseja receber seu pedido?</h2>
            <div class="divisor4 card4 bgcolor-white-dark radius new">
                <p class="text-center font-weight-medium color-dark font-text-max">
                    <i class="fa fa-plus-circle"></i>
                </p>
                <p class="text-center font-weight-medium color-dark font-text-sub">Novo Endereço</p>
                <p class="text-center color-dark font-text-sub actions">
                    <a href="#" class="radius btn_new open_adress">
                        <i class="fa fa-street-view"></i> Cadastrar
                    </a>
                </p>
            </div>
            <?php for($i = 0; $i < 3; $i++):?>
                <div class="divisor4 card4 bgcolor-white-dark radius">
                    <p class="text-center font-weight-medium color-dark font-text-sub">Rua dos Teste, 0123</p>
                    <p class="text-center font-weight-medium color-dark font-text-sub">Santana - SJCampos/SP</p>
                    <p class="text-center font-weight-medium color-dark font-text-sub">CEP: 12.345-678</p>
                    <p class="text-center color-dark font-text-sub actions">
                        <a href="#" class="radius btn_edit modal_adress" data-id="<?=$i?>">
                            <i class="fa fa-truck"></i>Enviar para este Endereço
                        </a>
                    </p>
                </div>                
            <?php endfor;?>
            <div class="clear"></div>
            <div class="container_cart">
                <h1 class="font-text-medium font-weight-medium text-left m-text-center">Confira o seu Pedido:</h1>
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
                                <p class="cart_actions text-center">
                                    <a href="#" title="Remover do Carrinho" class="btn_delete radius" id="delete_cart" data-id="<?= $i ?>">
                                        <i class="fa fa-times-circle"></i>
                                    </a>
                                </p>
                            </td>
                        </tr>
                    <?php endfor;?>
                    <tr>
                        <td colspan="2">
                            <p class="text-left font-text-sub font-weight-medium">Cupom de Desconto:</p>
                            <form method="post" id="form_discount">
                                <input type="text" name="input_discount" id="input_discount" class="radius">
                                <button class="btn_search radius" name="btn_discount" id="btn_discount">
                                    <i class="fa fa-percent"></i> Descontar
                                </button>
                            </form>
                        </td>
                        <td colspan="3">
                            <p class="text-left font-text-sub font-weight-medium">Custo do Frete:</p>
                            <form method="post" id="form_shipping">
                                <input type="text" name="input_shipping" id="input_shipping" class="radius zipcode">
                                <button class="btn_new radius" name="btn_shipping" id="btn_shipping">
                                    <i class="fa fa-truck"></i> Calcular
                                </button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <p class="text-center color-dark font-text-sub actions">
                                <a href="<?=strip_tags($configBase)?>" class="radius btn_search"><i class="fa fa-search"></i>Continuar Comprando></a>
                                <a href="#" class="radius btn_edit"><i class="fa fa-paper-plane"></i>Finalizar Pedido</a>
                            </p>
                        </td>
                        <td colspan="2">
                            <p class="text-right font-weight-medium font-text-medium">Total do Carrinho: R$1.200,00</p>
                        </td>                        
                    </tr>
                    <div class="clear"></div>
                </table>
                <div class="clear"></div>
            </div>
            <?php require 'pages-container/container-bestsellers.php';?>
            <?php require 'pages-container/container-banner-small.php';?>
            <?php require 'pages-container/container-foryou.php';?>
            <?php require 'pages-container/container-thebest.php';?>
        </div>
    </section>
</main>

<?php include_once 'footer.php';?>