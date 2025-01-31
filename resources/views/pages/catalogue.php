<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../public/css/catalogue.css" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />

    <title>book</title>
  </head>
  <body>

  <?php include __DIR__. '/../components/navbar.php' ;?>


    <!-- recherche -->
    <div
      class="nav-right mt-5"
      style="display: grid; justify-content: center; width: 60%"
    >
      <!-- Search Bar -->
      <div class="search-bar" id="rechrchebat">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Rechercher un livre..." />
      </div>
    </div>
 

    <!-- start filter -->

    <div class="container mt-4">
      <div style="display: grid; grid-template-columns: repeat(2, 1fr)">
        <div class="filter-title" onclick="toggleFilter()">
          <i id="filter-icon" class="fas fa-chevron-down"></i> Filter
        </div>
        <button style="justify-self: end" onclick="toggleFilter()">
          <i id="filter-button-icon" class="fas fa-chevron-down"></i>
          <span id="filter-button-text">schow</span>
        </button>
      </div>

      <hr />
      <div id="filter-section" class="filter-container" style="display: none">
        <div class="row mb-3">
          <div class="col-md-6 toggle-switch">
            <label>Available</label>
            <input type="checkbox" />
          </div>
          <div class="col-md-6 toggle-switch">
            <label>Only plus title</label>
            <input type="checkbox" checked />
          </div>
        </div>
        <div class="row g-3">
          <div class="col-md-4">
            <label>Category:</label>
            <select class="form-select">
              <option selected>all categories (1200)</option>
              <option selected>Mathematik</option>
              <option selected>Phylosophi</option>
              <option selected>Mecaniq</option>
              <option selected>Informtik</option>
            </select>
          </div>

          <div class="col-md-4">
            <label>Language:</label>
            <input
              type="text"
              class="form-control"
              placeholder="e.g. german, english, etc."
            />
          </div>
          <div class="col-md-4">
            <label>User rating:</label>
            <input
              type="text"
              class="form-control"
              placeholder="e.g. 1 star and up, 2 stars and up, etc."
            />
          </div>
          <div class="col-md-4">
            <label>Publishing date:</label>
            <input
              type="text"
              class="form-control"
              placeholder="e.g. 2019, 2018"
            />
          </div>

          <div class="col-md-4">
            <label>Auteur:</label>
            <input
              type="text"
              class="form-control"
              placeholder="e.g. BookBaby, BookRix, etc."
            />
          </div>
        </div>
        <div class="d-flex justify-content-between mt-4">
          <button class="btn btn-reset">Reset</button>
          <button class="btn btn-apply">Apply</button>
        </div>
      </div>
    </div>
    <script></script>

    <!--end  filter -->

    <!-- book -->

    <section>
      <div class="container mt-4">
        <div class="row gy-4">
          <!-- gy-4 adds spacing between rows -->
          <div class="col-md-6 mt-4">
            <div class="book-card d-flex gap-4 p-3 shadow-sm rounded">
              <img
                src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c"
                alt="Book Cover"
                class="book-cover"
              />
              <div class="book-details flex-grow-1">
                <div class="book-author text-success fw-bold">Author Name</div>
                <div class="book-title fw-bold fs-5">Book Title</div>
                <div class="book-meta text-muted">Genre</div>
                <p class="text-muted small">
                  Short description about the book goes here...
                </p>
                <div class="fw-bold">
                  In stock since: <span class="text-dark">01.01.2024</span>
                </div>
                <span class="text-success fw-bold">Available</span>
              </div>
              <div
                class="d-flex flex-column align-items-end justify-content-between"
              >
                <div class="book-icons">
                  <i class="fas fa-star text-warning"></i> 4.4
                  <i class="fas fa-bookmark text-muted"></i>
                </div>

                <a href="/reservation"><button  class="btn btn-success btn-sm">Reserve now</button></a>
                
              </div>
            </div>
          </div>

          <div class="col-md-6 mt-4">
            <div class="book-card d-flex gap-4 p-3 shadow-sm rounded">
              <img
                src="https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c"
                alt="Book Cover"
                class="book-cover"
              />
              <div class="book-details flex-grow-1">
                <div class="book-author text-success fw-bold">Author Name</div>
                <div class="book-title fw-bold fs-5">Book Title</div>
                <div class="book-meta text-muted">Genre</div>
                <p class="text-muted small">
                  Short description about the book goes here...
                </p>
                <div class="fw-bold">
                  In stock since: <span class="text-dark">01.01.2024</span>
                </div>
                <span class="text-success fw-bold">Available</span>
              </div>
              <div
                class="d-flex flex-column align-items-end justify-content-between"
              >
                <div class="book-icons">
                  <i class="fas fa-star text-warning"></i> 4.4
                  <i class="fas fa-bookmark text-muted"></i>
                </div>
                <button class="btn btn-success btn-sm">Borrow now</button>
              </div>
            </div>
          </div>
        </div>

        <div class="pagination-container">
          <div class="pagination">
            <a href="#">back</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">...</a>
            <a href="#">8</a>
            <a href="#" class="active">9</a>
            <a href="#">10</a>
            <a href="#">continue</a>
          </div>
        </div>
      </div>

   
    </section>


    <?php include __DIR__.'/../components/footer.php' ;?>


    <script src="../../../public/js/langue.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  </body>
</html>
