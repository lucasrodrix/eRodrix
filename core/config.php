<?php
    //iniciar sessão
    session_start();

    //Configuração da Data e Hora do Servidor
    date_default_timezone_set('America/Sao_Paulo');

    //Configurações do site
    $configBase = 'http://localhost/eRodrix/';//URL da Loja
    $titleSite = 'Plataforma eRodrix'; //Nome da Loja ou da Empresa
    $description = 'Projeto de Estudo - E-Commerce PHP/Ajax';//Descrição Completa da loja
    $imageSite = 'default.png';//Imagem da Loja
    $mailSite = 'contato@gruporodrix.net';//Site principal da loja
    $phoneSite = '(00) 0000-0000'; //Telefone da Loja
    $whatsappSite = '(00) 0000-0000'; //Whatsapp da Loja
    $statusSite = 1;//0 - Inativo, 1 - Ativo, 2 - Em manutenção
    $hellobar = 0;//Modal da promoção - 0 - Inativo, 1 - Ativo

    //Configurações do Autor
    $nameAutor = 'Lucas Rodrix';//Nome do Autor
    $mailAutor = 'lucasrodrix@gruporodrix.net';//Email do Autor
    $phoneAutor = '(00) 0000-0000';//Telefone do Autor
    
    //Navegação de Rotas
    $themeSite = 'themes/loja';
    $themePainel = 'themes/painel';
    $themeAdmin = 'themes/admin';

    //Configurações do Banco de Dados
    $category = 'categories';
    $product = 'products';

    //Configurações dos Perfis de Acesso

    //Configurações de Redes Sociais

    //Função da Criação Guid