<div class="container_top">
    <h1 class="font-text-medium font-weight-medium text-left m-text-center">Promoções Relâmpagos:</h1>
    <div class="container_top_info">
        <ul class="caroussel">
            <?php for($i = 0; $i < 2; $i++):?>
                <li class="img-caroussel">
                    <div class="divisor2">
                        <p class="text-left font-weight-medium price_discount radius">10% OFF</p>
                        <img src="<?= $configBase ?>images/products/product.png" title="Imagem do Produto: Tenis Adidas Sporting" alt="Imagem do Produto: Tenis Adidas Sporting">
                    </div>
                    <div class="divisor2">
                        <h2 class="text-left m-text-center font-weight-medium font-text-min">Tenis Adidas Sporting</h2>
                        <p class="text-left m-text-center font-text-min">
                            <span class="price_old radius font-text-sub radius"><s>R$ 450,00</s></span>
                            <span class="price_off radius font-text-min font-weight-medium"><s>R$ 320,00</s></span>
                        </p>
                        <p class="text-left m-text-center font-wtext-sub">Fugiat, sit ratione impedit sunt corporis dolorum debitis animi reiciendis aliquid quidem officiis autem deserunt illum exercitationem sint, enim odit hic odio!</p>
                        <p class="text-center font-weithg-min font-text-sub actions">
                            <a href="<?= $configBase ?>details/<?= $i ?>" title="Detalhes do Produto" class="btn_edit radius">
                                <i class="fa fa-images"></i>
                            </a>
                            <a href="#"? title="Acrescentar esse produto ao seu pedido" class="btn_new radius open_buy" data-id="<?= $i ?>">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </p>
                    </div>
                </li>
            <?php endfor;?>
            <div class="clear"></div>
        </ul>
        <div class="clear"></div>
    </div>
</div>