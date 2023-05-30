<!-- Sidebar -->
<div class="col-lg-3">
  <!-- Toggle button -->
  <button class="btn btn-outline-secondary mb-3 w-100 d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span>Show filter</span>
  </button>
  <!-- Collapsible wrapper -->
  <div class="collapse card d-lg-block mb-5" id="navbarSupportedContent">
    <div class="accordion" id="accordionPanelsStayOpenExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button text-dark bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
            Products Categories
          </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
          <div class="accordion-body">
            <ul class="list-unstyled">
              <!-- Function to call product categories from the database -->
              <?php getPCats(); ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button text-dark bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
            Categories
          </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo">
          <div class="accordion-body">
            <ul class="list-unstyled">
              <!-- Function to call categories from the database -->
              <?php getCats(); ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Sidebar -->