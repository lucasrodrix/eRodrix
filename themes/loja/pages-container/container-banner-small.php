<div class="divisor1">
    <img src="<?= $configBase ?>images/banners/banner-medium.png" title="<?= $titleSite ?>: Banner de promoções da Loja" alt="<?= $titleSite ?>: Banner de promoções da Loja">
</div>
<div class="clear"></div>
<div class="container_banner">
    <?php for($i = 1; $i < 3; $i++):?>
        <div class="div_banner">
            <img src="<?= $configBase ?>images/banners/banner-small<?= $i ?>.png" title="<?= $titleSite ?>: Banner de promoções da Loja" alt="<?= $titleSite ?>: Banner de promoções da Loja" class="img-small-banner">
        </div>
    <?php endfor;?>
</div>
<div class="clear"></div>