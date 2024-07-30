<div class="divisor1">
    <?php 
        $read = $pdo->prepare("SELECT banner_guid, banner_name, banner_headline, banner_url, banner_thumb, banner_type, banner_initial, banner_final, status FROM {$banner} WHERE status = :status AND banner_type = :type ");
        $read->bindValue(":status", 1);
        $read->bindValue(":type", 1);
        $read->execute();

        $lines = $read->rowCount();
        
        foreach($read as $banners)
    ?>    
    <img src="<?= $configBase ?>images/banners/<?= strip_tags($banners['banner_thumb']);?>" title="<?= $titleSite ?>: <?= strip_tags($banners['banner_name']); ?>" alt="<?= $titleSite ?>: <?= strip_tags($banners['banner_name']); ?>">
</div>
<div class="clear"></div>
<div class="container_banner">
    <?php 
        $read = $pdo->prepare("SELECT banner_guid, banner_name, banner_headline, banner_url, banner_thumb, banner_type, banner_initial, banner_final, status FROM {$banner} WHERE status = :status AND banner_type = :type ");
        $read->bindValue(":status", 1);
        $read->bindValue(":type", 2);
        $read->execute();

        $lines = $read->rowCount();
        
        foreach($read as $bannerSmall):
    ?>
        <div class="div_banner">
            <img src="<?= $configBase ?>images/banners/<?= strip_tags($bannerSmall['banner_thumb']);?>" title="<?= $titleSite ?>: <?= strip_tags($bannerSmall['banner_name']); ?>" alt="<?= $titleSite ?>: <?= strip_tags($bannerSmall['banner_name']); ?>" class="img-small-banner">
        </div>
    <?php endforeach;?>
</div>
<div class="clear"></div>