<?php include_once 'header.php';?>

<main class="container">
    <section class="container_main">
        <div class="container_controller bgcolor-gray">
            <div class="container_details">
                <p class="paragraph_navigator color-white-dark">
                    <a href="<?= $configBase?>home" title="Retornar a Página Principal">
                        <i class="fa fa-home"></i>Home
                    </a>/Nova Senha
                </p>
            </div>
        </div>
    </section>    
    <section class="container_main">
        <div class="container_controller">
            <div class="container_details">
                <div class="divisor2">
                    <div class="main_login">
                        <h1 class="text-center main_login_h1">Digite Nova Senha</h1>
                        <form method="post" enctype="multipart/form-data" id="form_password">
                            <input type="hidden" name="login_email" id="login_email">
                            <div class="viewer">
                                <label for="login_password">Nova Senha: <input type="password" name="login_password" id="login_password" required></label>
                                <span class="showHide"><i class="fa fa-eye" id="viewPass" aria-hidden="true"></i></span>
                            </div>
                            <div class="viewer">
                                <label for="login_repass">Redigite Nova Senha: <input type="password" name="login_repass" id="login_repass" required></label>
                                <span class="showHide"><i class="fa fa-eye" id="viewPass" aria-hidden="true"></i></span>
                            </div>
                            <!-- <label for="login_repass">Redigite Nova Senha: <input type="password" name="login_repass" id="login_repass" required></label> -->
                            <div class="main_login_btns">
                                <div class="divisor2">
                                    <button class="btn_edit radius" name="btn_password" id="btn_password">
                                        <i class="fa fa-paper-plane"></i> Salvar Senha
                                    </button>
                                </div>
                                <div class="divisor2 text-right m-text-center">
                                    <a href="<?= strip_tags($configBase);?>login" class="color-dark font-text-sub radius" id=btn_login>Voltar ao Login</a>
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