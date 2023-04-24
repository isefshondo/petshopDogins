<?php 
    include("blades/header.php");
    include("../../app/controllers/scripts/session.php");

    include("components/categoriesOptions.php");
    include("components/colorPicker.php");
    include("components/dropImages.php");
    include("components/selectSizes.php");

    $n_part = $_GET['part'] ?? 1;
?>
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