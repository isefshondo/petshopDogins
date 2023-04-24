<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        // Redirecionar o usuário para a página de login
        header('location:./index.php');
        exit();
    }
    session_write_close();

    include("blades/header.php");

    include("components/categoriesOptions.php");
    include("components/colorPicker.php");
    include("components/dropImages.php");
    include("components/selectSizes.php");

    $n_part = $_GET['part'] ?? 1;

    if($n_part == 1){
        $h1 = "Vamos iniciar o cadastro do seu produto";
        $h2 = "Anúncio do produto";
    }else if($n_part == 2){
        $h1 = "Falta pouco para concluir o cadastro do seu produto";
        $h2 = "Dados do produto";
    }else if($n_part == 3){
        $h1 = "Estamos na etapa final do cadastro dos eu produto";
        $h2 = "Preço do produto";
    }else if($n_part == 4){
        $h1 = "Confirme os dados para finalizar o cadastro";
        $h2 = "Confirmação";
    }
?>
<section class="registerProductHead">
    <div class="head">
        <div>
            <h3 class='registerProductHead_subtitle secondary'>Etapa <?php echo $n_part; ?> de 4</h3>
            <h1 class="registerProductHead_title"><?php echo $h1; ?></h1>
        </div>
        <img src="../../public/imgs/dog_cat.svg" alt="Dogin's">
    </div>
    <div class="d-flex row">
        <h2 class="registerProductHead_span d-flex"><?php echo $n_part; ?></h2>
        <h2 class='registerProductHead_subtitle'><?php echo $h2; ?></h2>
    </div>
</section>
<main class="container">
    <section>
        <form action="../controllers/validateData.php?part=<?php echo $n_part + 1; ?>" method="post" enctype="multipart/form-data">    
            
            <?php 
                include("blades/sectionsRegistrationProduct/part_$n_part.php");
            ?>

            <section id="form_buttons">
                <div class="form-buttons">
                    <!-- <a class="btn btn-secondary" href="../controllers/cancelProductRegistration.php?$doc=<?php //echo $query_string; ?>">Cancelar</a> -->
                    <a class="btn btn-secondary" id="btnCancelar">Cancelar</a>
                    <button type="submit" class="btn btn-primary"><?php echo $n_part == 4 ? "Finalizar" : "Continuar"; ?></button>
                </div>
            </section>
        </form>
    </section>
</main>

<?php 
    include("../../public/utils/components/popup.php");
    include("blades/footer.php"); 
?>