<?php 
   require_once "core/config.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="index,follow">
    <meta name="description" content="">

    <meta itemprop="name" content="<?= $titleSite ?>">
    <meta itemprop="description" content="<?= $description ?>">
    <meta itemprop="image" content="<?= $imageSite ?>">
    <meta itemprop="BASE" content="<?= $configBase ?>">

    <!-- FACEBOOK -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?= $titleSite ?>">
    <meta property="og:description" content="<?= $description ?>">
    <meta property="og:image" content="<?= $imageSite ?>">
    <meta property="og:BASE" content="<?= $configBase ?>">
    <meta property="og:locale" content="pt_br">

    <!-- TWITTER -->
    <meta property="twitter:card" content="sumary_large_image">
    <meta property="twitter:domain" content="<?= $configBase ?>">
    <meta property="twitter:title" content="<?= $titleSite ?>">
    <meta property="twitter:description" content="<?= $description ?>">
    <meta property="twitter:image" content="<?= $imageSite ?>">
    <meta property="twitter:BASE" content="<?= $configBase ?>">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= $configBase ?>views/css/views.css">
    <link rel="stylesheet" href="<?= $configBase ?>themes/loja/themes.css">
    
    <script src="<?= $configBase ?>views/js/jquery.js"></script>

    <title><?= $titleSite ?></title>
</head>
<body>
    <?php 
        require_once "core/routers.php";
    ?>
    <script src="<?= $configBase ?>views/js/maskinput.js"></script>
    <script src="<?= $configBase ?>views/js/jquery-money.js"></script>
    <script src="<?= $configBase ?>views/js/jquery-form.js"></script>
    
    <script src="<?= $configBase ?>views/js/views.js"></script>
    <script src="<?= $configBase ?>ajax/ajax.js"></script>
    <script src="<?= $configBase ?>themes/loja/themes.js"></script>
</body>
</html>