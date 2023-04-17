<?php 
    include("blades/header.php");
    include("../../app/controllers/scripts/session.php");

    include("components/categoriesOptions.php");
    include("components/colorPicker.php");
    include("components/dropImages.php");
    include("components/selectSizes.php");

    $n_part = $_GET['part'] ?? 1;

    $doc = array();

    if(isset($_GET['doc_tmp'])){
        parse_str(base64_decode($_GET['doc_tmp']), $query_string);
        foreach($query_string as $key => $value){
            $doc[$key] = $value;            
        }
        
        var_dump($doc);
    }

    $query_string = base64_encode(http_build_query($doc));
?>
<main class="container">
    <section>
        <form action="../controllers/validateData.php?part=<?php echo $n_part + 1; ?>&doc=<?php echo $query_string; ?>" method="post" enctype="multipart/form-data">    
            
            <?php 
                include("blades/sectionsRegistrationProduct/part_$n_part.php");
            ?>

            <section id="form_buttons">
                <div class="form-buttons">
                    <a class="btn btn-secondary" href="../controllers/cancelProductRegistration.php?$doc=<?php echo $query_string; ?>">Cancelar</a>
                    <button type="submit" class="btn btn-primary"><?php echo $n_part == 4 ? "Finalizar" : "Continuar"; ?></button>
                </div>
            </section>
        </form>
    </section>
</main>
<?php include("blades/footer.php"); ?>