<?php

$configUrl = explode("/",strip_tags(filter_input(INPUT_GET,"route", FILTER_SANITIZE_STRIPPED)));
$configUrl[0] = (!empty($configUrl[0]) ? $configUrl[0] : 'index');

if($configUrl[0] == 'admin'){
    $themes = 'themes/admin/';
}elseif($configUrl[0] == 'painel'){
    $themes = 'themes/painel/';
}else{
    $themes = 'themes/loja/';
}

if($configUrl[0] !== 'admin' && $configUrl[0] !== 'painel' && file_exists("{$themes}{$configUrl[0]}.php")){
//Arquivo
    require "{$themes}{$configUrl[0]}.php";
}elseif(!empty($configUrl[1]) && file_exists("{$themes}{$configUrl[1]}.php") && !is_dir("{$themes}{$configUrl[1]}.php")){
//Pasta/Arquivo
    require "{$themes}{$configUrl[1]}.php";
}elseif(!empty($configUrl[2]) && file_exists("{$themes}{$configUrl[1]}/{$configUrl[2]}.php") && !is_dir("{$themes}{$configUrl[1]}/{$configUrl[2]}.php")){
    //Pasta/Arquivo/Parametro
    require "{$themes}{$configUrl[1]}/{$configUrl[2]}.php";
}else{
    require '404.php';
}