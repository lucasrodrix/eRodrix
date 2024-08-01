<?php include_once 'modal.php';?>
<?php include_once 'header.php';?>
<?php 
    $Read = $pdo->prepare("SELECT a.product_guid, a.category_id, a.product_name, a.product_headline, a.product_url, a.product_thumb, a.product_price, a.product_offers, a.product_price_old, a.product_description, a.product_tags, a.status, b.product_id, b.stock_quantity, b.color_id, b.status, c.category_guid, c.category_name 
    FROM products a 
        INNER JOIN stock b ON(b.product_id = a.product_guid) 
        INNER JOIN categories c ON(c.category_guid  = a.category_id)
        WHERE a.product_url = :product_url");
    $Read->bindValue(":product_url", $configUrl[1]);
    $Read->execute();

    if($Read->rowCount() == 0){
        echo "<div class='alert-info radius'>Ocorreu um erro, tente novamente!</div>";
    }

    foreach($Read as $Show){
        $stock = $Show['stock_quantity'];
        $category = strip_tags($Show['category_name']);
    }

    $tags = explode(', ', $Show['product_tags']);
?>

<main class="container">
    <section class="container_main">
        <div class="container_controller bgcolor-gray">
            <div class="container_details">
                <p class="paragraph_navigator color-white-dark">
                    <a href="<?= $configBase?>" title="Retornar a Página Principal">
                        <i class="fa fa-home"></i>Home
                    </a>/Produto
                </p>
            </div>
        </div>
    </section>
    <section class="container_main">
        <div class="container_controller">
            <div class="container_details">
                <div class="divisor2">
                    <?= ($Show['product_offers'] == 0 ||empty($Show['product_offers']) ? '' : '<p class="text-left font-weight-medium price_discount radius"> '.strip_tags($Show['product_offers']).'% OFF</p>')?></p>
                    <img src="<?= $configBase ?>images/products/<?= strip_tags($Show['product_thumb']);?>" alt="Imagem do Produto: <?= strip_tags($Show['product_name']);?>" alt="Imagem do Produto: <?= strip_tags($Show['product_name']);?>">
                    <div class="img-small">
                        <?php for($i = 1; $i <= 5; $i++): ?>
                            <img src="<?= $configBase ?>images/details/product-detail-<?= $i ?>.png" title="Visualize detalhes do <?= strip_tags($Show['product_name'])?>" alt="Visualize detalhes do <?= strip_tags($Show['product_name'])?>" class="divisor4">
                        <?php endfor; ?>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="divisor2">
                    <h2 class="text-left m-text-center font-weight-medium font-text-min">Tenis Adidas Sporting</h2>
                    <p class="text-left m-text-center font-text-min">
                        <span class="price_old radius font-text-sub radius"><s>R$ <?= number_format($Show['product_price_old'],2,',','.')?></s></span>
                        <span class="price_off radius font-text-medium font-weight-medium">R$ <?= number_format($Show['product_price'],2,',','.')?></span>
                    </p>
                    <p class="text-left m-text-center font-text-sub details_paragraph">
                        Estoque Atual: <?= number_format($stock,0,',','.')?> Unidades.
                    </p>
                    <p class="text-left m-text-center font-wtext-sub">
                        <?= strip_tags($Show['product_headline']);?>
                    </p>
                    <p class="text-left m-text-center font-text-sub details_paragraph">
                        Tamanhos Disponíveis:
                    </p>
                    <p class="text-left m-text-center font-text-sub">
                        <a href="#" title="Tamanho 'P' está disponivel" class="tp_color_gray radius size" data-value="p">P</a>
                        <a href="#" title="Tamanho 'M' está disponivel" class="tp_color_gray radius size" data-value="p">M</a>
                        <a href="#" title="Tamanho 'G' está disponivel" class="tp_color_gray radius size" data-value="p">G</a>
                        <a href="#" title="Tamanho 'GG' está disponivel" class="tp_color_gray radius size" data-value="p">GG</a>
                        <a href="#" title="Tamanho 'XGG' está disponivel" class="tp_color_gray radius size" data-value="p">XGG</a>
                    </p>
                    <p class="text-left m-text-center font-text-sub details_paragraph">
                        Cores Disponíveis:
                    </p>
                    <p class="text-left m-text-center font-text-sub">
                        <a href="#" title="A cor 'Azul' está disponivel" class="tp_color_blue radius size" data-value="blue"></a>
                        <a href="#" title="A cor 'Vermelha' está disponivel" class="tp_color_red radius size" data-value="red"></a>
                        <a href="#" title="A cor 'Verde' está disponivel" class="tp_color_green radius size" data-value="green"></a>
                        <a href="#" title="A cor 'Branca' está disponivel" class="tp_color_white radius size" data-value="white"></a>
                    </p>
                    <div class="container_action">
                        <form method="post" id="form_quantity">
                            <input type="hidden" name="input_id" id="input_id" value="<?= $configUrl[1] ?>">
                            <input type="hidden" name="input_color" id="input_color" value="">
                            <input type="hidden" name="input_size" id="input_size" value="">

                            <input type="number" name="input_quantity" id="input_quantity" value="1" class="radius">
                            <button class="btn_edit radius" name="btn_quantity" id="btn_quantity">
                                <i class="fa fa-shopping-cart"></i> Adicionar
                            </button>
                        </form>
                    </div>
                    <p class="text-left m-text-center font-text-sub details_paragraph">
                        Categoria: Calçados
                    </p>
                    <p class="text-left m-text-center font-text-sub details_paragraph">
                        Tags:
                    </p>
                    <p class="text-left m-text-center font-text-sub">
                        <a href="<?= $configBase; ?>search/calcados" title="pesquise produtos com essa TAG" class="tp_color_gray radius tags">
                            <i class="fa fa-tags">calcados</i>
                        </a>
                        <a href="<?= $configBase; ?>search/adidas" title="pesquise produtos com essa TAG" class="tp_color_gray radius tags">
                            <i class="fa fa-tags">adidas</i>
                        </a>
                        <a href="<?= $configBase; ?>search/tenis adidas" title="pesquise produtos com essa TAG" class="tp_color_gray radius tags">
                            <i class="fa fa-tags">tenis adidas</i>
                        </a>
                    </p>
                    <p class="text-left m-text-center font-text-sub details_paragraph">
                        Compartilhar Produto:
                    </p>
                    <p class="text-left m-text-center font-text-sub footer_contact">
                        <a href="#" title="Acesse a nossa página no facebook" class="radius footer_socials">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" title="Acesse a nossa página no instagram" class="radius footer_socials">
                            <i class="fab fa-instagram"></i>
                            </a>
                        <a href="callto:<?= $whatsappSite ?>" title="Entre em contato com o nosso whatsapp" class="radius footer_socials">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </p>
                </div>
                <div class="clear"></div>
            </div>
            <div class="container_description">
                <p class="text-center tabs">
                    <a href="#" title="Faça a leitura da descrição técnica do produto" class="active" data-id="1">Descrição</a>
                    <a href="#" title="Faça a leitura das caracteristicas técnica do produto" data-id="2">Caracteristicas</a>
                    <a href="#" title="Saiba o que os clientes estão falando do produto" data-id="3">Opinões</a>
                </p>
                <div class="description_paragraph">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quisquam, accusamus quibusdam incidunt recusandae modi cum sequi ducimus, aliquam in praesentium animi. Ratione, natus. Culpa totam sed minima omnis cum!
                    </p>
                </div>
                <div class="description_chars">
                    <p><b>Nome:</b> Tenis Adidas Sport</p>
                    <p><b>Gênero:</b> Masculino</p>
                    <p><b>Departamento:</b> Esportes</p>
                    <p><b>Indicado:</b> Uso em Atividades Esportivas</p>
                    <p><b>Estilo da Peça:</b> Lisa</p>
                    <p><b>Material:</b> Mesh</p>
                    <p><b>Altura do Cano:</b> Cano Baixo</p>
                    <p><b>Fechamento:</b> Cadarço</p>
                    <p><b>Solado:</b> Borracha</p>
                    <p><b>Garantia do Fabricante:</b> Contra Defeito de Fabricação</p>
                    <p><b>Origem:</b> Nacional</p>
                    <p><b>Marca:</b> Adidas</p>
                </div>
                <div class="description_commentary">
                    <div class="comment">
                        <h2>Renata Rodrix - 27/06/2024 as 16:31</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab doloremque reprehenderit debitis voluptas? Totam labore temporibus iure impedit nulla consequatur maxime est necessitatibus unde sed voluptatum illo, praesentium dolores. Deleniti.
                        </p>
                    </div>
                    <div class="comment">
                        <h2>Sarah Rodrix - 26/06/2024 as 06:30</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab doloremque reprehenderit debitis voluptas? Totam labore temporibus iure impedit nulla consequatur maxime est necessitatibus unde sed voluptatum illo, praesentium dolores. Deleniti.
                        </p>
                    </div>
                    <div class="comment">
                        <h2>Samuel Rodrix - 22/06/2024 as 10:45</h2>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab doloremque reprehenderit debitis voluptas? Totam labore temporibus iure impedit nulla consequatur maxime est necessitatibus unde sed voluptatum illo, praesentium dolores. Deleniti.
                        </p>
                    </div>
                    <div class="comment">
                        <h2 class="text-left m-text-center color-dark">Deixe seu comentário para este produto:</h2>
                        <form method="post" id="form_comment>
                            <input type="hidden" name="commentary_id" id="commentary_id" value="<?= $configUrl[1] ?>">
                            <textarea name="input_comment" id="input_comment"></textarea>
                            <button class="btn_edit radius" name="btn_comment" id="btn_comment">
                                <i class="fa fa-comment"></i> Comentar!
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <?php require 'pages-container/container-foryou.php';?>
            <?php require 'pages-container/container-thebest.php';?>
        </div>
    </section>
</main>

<?php include_once 'footer.php';?>