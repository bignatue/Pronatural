<?php
  include'include/header.php';
  include'include/menu.php';
?>

  <main id="main">
    <!--==========================
      Brochures Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Brochures</h2>
          <p>Download brochures for your offline presentation.</p>
        </div>

        <div class="row">

          <div class="col-md-6 mb-4">
            <img class="img-polaroid" src="img/brochures/testimonial.png">
              <a class="btn mt-2 btn-success" href="img/brochures/testimonial.pdf" download="testimonial.pdf">Download testimonial</a>
          </div>

          <div class="col-md-6 mb-4">
            <img class="img-polaroid" src="img/brochures/income-plan.png">
              <a class="btn mt-2 btn-success" href="img/brochures/income-plan.pdf" download="income-plan.pdf">Download income plan</a>
          </div>

          <div class="col-md-6 mb-4">
            <img class="img-polaroid" src="img/brochures/products.png">
              <a class="btn mt-2 btn-success" href="img/brochures/products.pdf" download="products.pdf">Download products</a>
          </div>

          <div class="col-md-6 mb-4">
            <img class="img-polaroid" src="img/brochures/redfruit.png">
              <a class="btn mt-2 btn-success" href="img/brochures/redfruit.pdf" download="redfruit.pdf">Download red fruit</a>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <?php 
      include'include/sub-footer.php';
    ?>

  </main>

<?php include'include/footer.php'; ?>