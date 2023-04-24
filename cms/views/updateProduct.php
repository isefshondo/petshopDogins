<?php 
    include("blades/header.php");

    include("components/categoriesOptions.php");
    include("components/colorPicker.php");
    include("components/dropImages.php");
    include("components/selectSizes.php");
?>
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