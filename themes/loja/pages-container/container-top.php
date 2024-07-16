<div class="container_top">
    <div class="container_top_info">
        <ul>
            <li>
                <p class="text-center font-text-max">
                    <i class="fa fa-truck"></i>
                </p>
                <p class="text-center font-text-sub font-weight-medium">Frete Gratuito</p>
                <p class="text-center font-text-sub">Compra acima de R$200,00</p>
            </li>
            <li>
                <p class="text-center font-text-max">
                    <i class="fa fa-credit-card"></i>
                </p>
                <p class="text-center font-text-sub font-weight-medium">Pagamento no Cartão</p>
                <p class="text-center font-text-sub">Pague no Cartão de Crédito em até 12x</p>
            </li>
            <li>
                <p class="text-center font-text-max">
                    <i class="fa fa-gift"></i>
                </p>
                <p class="text-center font-text-sub font-weight-medium">Ganhe Descontos nas próximas compras</p>
            </li>
            <li>
                <p class="text-center font-text-max">
                    <i class="fa fa-phone"></i>
                </p>
                <p class="text-center font-text-sub font-weight-medium">
                    <span class="none">Central de Atendimento</span>
                </p>
                <p class="text-center font-text-sub">Todos os dias - 24h por dia</p>
            </li>
        </ul>
        <div class="clear"></div>
    </div>
    <h1 class="font-text-medium font-weight-medium text-left m-text-center">Mais Vendidos da Semana:</h1>
    <div class="container_top_info">
        <ul class="caroussel">
            <?php 
                $read = $pdo->prepare("SELECT product_guid, product_name, product_headline, product_description, product_url, product_price, product_price_old, product_offers, product_thumb FROM {$product} WHERE status = :status");
                $read->bindValue(":status", 1);
                $read->execute();

                $lines = $read->rowCount();
                
                foreach($read as $products):
            ?>
                <li class="img-caroussel">
                    <div class="divisor2">
                        <p class="text-left font-weight-medium price_discount radius">10% OFF</p>
                        <img src="<?= $configBase ?>images/products/<?= strip_tags($products['product_thumb']);?>" title="Imagem do Produto:<?=strip_tags($products['product_name']);?>" alt="Imagem do Produto:<?=strip_tags($products['product_name']);?>">
                    </div>
                    <div class="divisor2">
                        <h2 class="text-left m-text-center font-weight-medium font-text-min"><?= strip_tags($products['product_name']);?></h2>
                        <p class="text-left m-text-center font-text-min">
                            <span class="price_old radius font-text-sub radius"><s>R$ <?= number_format($products['product_price_old'],2,',','.');?></s></span>
                            <span class="price_off radius font-text-min font-weight-medium"><s>R$ <?= number_format($products['product_price'],2,',','.');?></s></span>
                        </p>
                        <p class="text-left m-text-center font-wtext-sub"><?= strip_tags($products['product_headline']);?></p>
                        <p class="text-center font-weithg-min font-text-sub actions">
                            <a href="<?= $configBase ?>details/<?= strip_tags($products['product_url']); ?>" title="Detalhes do Produto" class="btn_edit radius">
                                <i class="fa fa-images"></i>
                            </a>
                            <a href="#"? title="Acrescentar esse produto ao seu pedido" class="btn_new radius open_buy" data-id="<?= strip_tags($products['product_guid']); ?>">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </p>
                    </div>
                </li>
            <?php endforeach;?>
            <div class="clear"></div>
        </ul>
        <div class="clear"></div>
    </div>
</div>