<?php
include("./blades/header.php");
include("./partials/header.php");
include("./components/sectionHeader.php");
include("./components/couponNotice.php");
?>
<section id="img-login">
    <img src="assets/imgs/login.png">
</section>
<section id="forms-login">
    <h1>Faça parte do nosso time AUUdacioso!</h1>
    <form action="" id="forms">
        <div id="titulo-forms">
            <h3>Faça seu login</h3><span class="heartIcon"></span>
        </div>
        <div id="text-login">
            <p>Usuário</p>
            <input type="text" name="usuario">
            <p>Senha</p>
            <input type="password" name="senha"><br>
            <div class="btnLoginWrapper">
                <button class="btnLogin">Entrar</button><br>
            </div>
        </div>
        <div id="text-link">
            <a href="#"> Ainda não tem uma conta?</a>
            <a href="#">Cadastre-se</a>
        </div>
    </form>

</section>

<?php include("./partials/footer.php") ?>
<?php include("./blades/footer.php") ?>