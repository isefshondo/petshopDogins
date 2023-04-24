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
?>
<section class="registerProductHead">
    <div class="head">
        <div>
            <h3 class='registerProductHead_subtitle secondary'>Etapa 1 de 1</h3>
            <h1 class="registerProductHead_title">Atualize os dados do produto</h1>
        </div>
        <img src="../../public/imgs/dog_cat.svg" alt="Dogin's">
    </div>
    <div class="d-flex row">
        <h2 class="registerProductHead_span d-flex">1</h2>
        <h2 class='registerProductHead_subtitle'>Atualização</h2>
    </div>
</section>
<main class="container">
    <section>
        <form action="../models/update.php" method="post" enctype="multipart/form-data">    
            
            <?php 

                $collection = $db->products;

                $product = $collection->find(['_id' => new MongoDB\BSON\ObjectID($_POST["id"])]);

                foreach($product as $data){
                    echo "<input type='hidden' name='id' value='".$data['_id']."'>";
                    include("./blades/sectionsRegistrationProduct/part_1.php");
                    include("./blades/sectionsRegistrationProduct/part_2.php");
                    include("./blades/sectionsRegistrationProduct/part_3.php");
                }
            ?>

            <section id="form_buttons">
                <div class="form-buttons">
                    <a class="btn btn-secondary" id="btnCancelar">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Finalizar</button>
                </div>
            </section>
        </form>
    </section>
</main>

<?php 
    include("../../public/utils/components/popup.php");
    include("blades/footer.php"); 
?>