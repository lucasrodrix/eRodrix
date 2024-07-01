<?php include_once 'modal.php';?>
<?php include_once 'header.php';?>

<main class="container">
    <section class="container_main">
        <div class="container_controller bgcolor-gray">
            <div class="container_details">
                <p class="paragraph_navigator color-white-dark">
                    <a href="<?= $configBase?>" title="Retornar a Página Principal">
                        <i class="fa fa-home"></i>Home
                    </a>
                </p>
            </div>
        </div>
    </section>       
    <section class="container_main">
        <div class="container_controller">
            <?php require 'pages-container/container-top.php';?>
            <?php require 'pages-container/container-bestsellers.php';?>
            <?php require 'pages-container/container-banner-small.php';?>
            <?php require 'pages-container/container-foryou.php';?>
            <?php require 'pages-container/container-thebest.php';?>
        </div>
    </section>
</main>

<?php include_once 'footer.php';?>