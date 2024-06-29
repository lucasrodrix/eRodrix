<?php include_once 'header.php';?>

<main class="container">
    <section class="container_main">
        <div class="container_controller bgcolor-gray">
            <div class="container_details">
                <p class="paragraph_navigator color-white-dark">
                    <a href="<?= $configBase?>home" title="Retornar a Página Principal">
                        <i class="fa fa-home"></i>Home
                    </a>/Login
                </p>
            </div>
        </div>
    </section>    
    <section class="container_main">
        <div class="container_controller">
            <div class="container_details">
                <div class="divisor2">
                    <div class="main_login">
                        <h1 class="text-center main_login_h1">Já sou Cliente</h1>
                        <form method="post" enctype="multipart/form-data" id="form_login">
                            <label for="login_email">Email: <input type="email" name="login_email" id="login_email" required></label>
                            <div class="viewer">
                                <label for="login_password">Senha: <input type="password" name="login_password" id="login_password" required></label>
                                <span class="showHide"><i class="fa fa-eye" id="viewePass" aria-hidden="true"></i></span>
                            </div>
                            <div class="main_login_btns">
                                <div class="divisor2">
                                    <button class="btn_edit radius" name="btn_login" id="btn_login">
                                        <i class="fa fa-sign-in-alt"></i> Entrar
                                    </button>
                                </div>
                                <div class="divisor2 text-right m-text-center">
                                    <a href="<?= strip_tags($configBase);?>recovery" class="color-dark font-text-sub radius" id=btn_recovery>Esqueceu sua senha?</a>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </form>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="divisor2">
                    <div class="main_login">
                        <h1 class="text-center main_login_h1">Cadastre-se</h1>
                        <form method="post" enctype="multipart/form-data" id="form_register">
                            <label for="user_name">Nome Completo: <input type="text" name="user_name" id="user_name" required></label>
                            <label for="login_email">Email: <input type="email" name="login_email" id="login_email" required></label>
                            <div class="viewer">
                                <label for="user_password">Senha: <input type="password" name="user_password" id="user_password" required></label>
                            </div>
                            <div class="main_login_btns">
                                <div class="divisor2">
                                    <button class="btn_new radius" name="btn_register" id="btn_register">
                                        <i class="fa fa-user-plus"></i> Criar Conta
                                    </button>
                                </div>
                                <div class="divisor2 text-right m-text-center">
                                    <a href="<?= strip_tags($configBase);?>recovery" class="color-dark font-text-sub radius" id=btn_recovery>Esqueceu sua senha?</a>
                                </div>
                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                        </form>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
            <!-- <?php require 'pages-container/container-bestsellers.php';?> -->
            <!-- <?php require 'pages-container/container-banner-small.php';?> -->
            <!-- <?php require 'pages-container/container-foryou.php';?> -->
            <!-- <?php require 'pages-container/container-thebest.php';?> -->
        </div>
    </section>
</main>

<?php include_once 'footer.php';?>