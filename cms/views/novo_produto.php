<?php 
    include("blades/header.php");
    include("../../controllers/scripts/session.php");

    $n_part = $_GET['part'] ?? 1;
?>
<main class="container">
    <section>
        <form action="../controllers/valida_produto.php?part=<?php echo $n_part + 1; ?>" method="post">    
            
            <?php 
                include("blades/cadastro_produtos/part_$n_part.php");
            ?>

            <section id="form_buttons">
                <div class="form-buttons">
                    <a class="btn btn-secondary" href="../controllers/cancelar_cadastro.php">Cancelar</a>
                    <button type="submit" class="btn btn-primary">Continuar</button>
                </div>
            </section>
        </form>
    </section>
</main>
<?php include("blades/footer.php"); ?>