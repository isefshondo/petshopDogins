<?php include("./blades/header.php")?>
    <?php include("./partials/header.php")?>
    <main>
      <?php include("./components/couponNotice.php")?>
      <section id = "partnerBrands">
        <header class = "partnerSectionTitle">
          <h1>Marcas AUUdaciosas</h1>
          <span class="heartIcon"></span>
        </header>
        <main>
          <div class="partnerWrapper">
            <figure>
              <img src="./assets/imgs/whiskas.png" alt="Whiskas is a partner brand">
            </figure>
            <figure>
              <img src="./assets/imgs/pedigree.png" alt="Pedigree is a partner brand">
            </figure>
            <figure>
              <img src="./assets/imgs/purina.png" alt="Purina is a partner brand">
            </figure>
            <figure>
              <img src="./assets/imgs/royal-canin.png" alt="Royal Canin is a partner brand">
            </figure>
            <figure>
              <img src="./assets/imgs/gran-plus.png" alt="Gran Plus is a partner brand">
            </figure>
            <figure>
              <img src="./assets/imgs/nexgard.png" alt="NexGard is a partner brand">
            </figure>
          </div>
        </main>
        <nav class = "paginationPanel">
          <ul id = "pagination" class = "paginationHolder">
            <li>&#60;</li>
            <li>Anterior</li>
            <!-- Pagination numbers go here. Example: <li>5</li> (No specific style) -->
            <li>Próxima</li>
            <li>&#62;</li>
          </ul>
        </nav>
      </section>
    </main>
    <?php include("./partials/footer.php")?>
<?php include("./blades/footer.php")?>