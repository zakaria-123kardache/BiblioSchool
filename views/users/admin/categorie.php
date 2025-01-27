<?php






?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioschool</title>
    <link rel="stylesheet" href="./style.css">

    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</head>

<body>
    <!-- Dashboard -->
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
        <!-- Vertical Navbar -->
        <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
            <div class="container-fluid">
                <!-- Toggler -->
                <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Brand -->
                <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                    <h3 class="text-success"><img src="./img/youdemy-logo.png" width="40"><span class="text-info">Biblio</span>School</h3>
                </a>
                <!-- User menu (mobile) -->

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="./dashbordadmin.php">
                                <i class="bi bi-house"></i> Dashboard
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active text-warning" aria-current="page" href="./categorie.php">
                                <i class="bi bi-bar-chart"></i> Categorie
                            </a>
                        </li>

                        <!-- <a class="nav-link active text-warning" aria-current="page" href="index.html">Home</a> -->

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="./tags.php">
                                <i class="bi bi-chat"></i> Tags
                                <span class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-auto">6</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="./livre.php">
                                <i class="bi bi-file-text"></i> livre

                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="./user.php">
                                <i class="bi bi-people"></i> Users
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="./validation.php">
                                <i class="bi bi-bookmarks"></i> VAlidation
                            </a>
                        </li>



                    </ul>
                    <!-- Divider -->
                    <hr class="navbar-divider my-5 opacity-20">
                    <!-- Navigation -->

                    <!-- Push content down -->
                    <div class="mt-auto"></div>
                    <!-- User (md) -->

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-person-square"></i> Account
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="return confirm('Are you sure you want to logout?')">
                                <i class="bi bi-box-arrow-left"></i> Logout
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
        <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
            <!-- Header -->
            <header class="bg-surface-primary border-bottom pt-6">
                <div class="container-fluid">
                    <div class="mb-npx">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                                <!-- Title -->
                                <h1 class="h2 mb-0 ls-tight">
                                    <img src="" width="40"> Welcome Admin
                                </h1>
                            </div>
                            <!-- Actions -->
                            <div class="col-sm-6 col-12 text-sm-end">
                                <div class="mx-n1">

                                    <a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1"
                                        data-bs-toggle="modal" data-bs-target="#creatcategorieModal">
                                        <span class=" pe-2">
                                            <i class="bi bi-plus"></i>
                                        </span>
                                        <span>Create</span>
                                    </a>

                                </div>
                            </div>
                        </div>



                        <!-- Nav -->
                        <ul class="nav nav-tabs mt-4 overflow-x border-0">

                        </ul>
                    </div>
                </div>
            </header>







            <!-- Main -->
            <section class="py-6 bg-surface-secondary">
                <div class="container-fluid">

                    <!-- Card stats -->

                    <section>








                        <div class="card-header">
                            <h5 class="mb-0">Applications</h5>
                        </div>


                        <div class="row g-6 mb-6">

                        
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card shadow-sm border-0 h-100">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="d-flex align-items-center">
                                        <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                                            <i class="fas fa-folder fa-lg"></i>
                                        </div>
                                        <h5 class="card-title mb-0">MAthimatik</h5>
                                    </div>
                                    <div class="d-flex">
                                        <!-- Bouton Éditer -->
                                        <a
                                        href="#"
                                        class="btn d-inline-flex btn-sm btn-warning mx-1"
                                      >
                                        <span class="pe-2">
                                          <i class="bi bi-pencil"></i>
                                        </span>
                                        Edit
                                      </a>
                                        <!-- Bouton Supprimer -->
                                        <a>
            
                                            <button
                                              type="button"
                                              onclick="showSweetAlert()"
                                              class="btn d-inline-flex btn-sm btn-danger mx-1"
                                            >
                                              <i class="bi bi-trash"></i></button
                  
                                          ></a>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted">
                                        <i class="fas fa-book me-1"></i>5 Livre
                                    </span>
                                    <small class="text-muted">
                                        <i class="fas fa-clock me-1"></i>Créé récemment
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>


                        </div>


                        <div class="card-footer border-0 py-5">
                            <span class="text-muted text-sm">Showing 10 items out of 250 results found</span>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link disabled" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link bg-info text-white" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>

                    </section>

                    <!-- <section class="py-6 bg-surface-secondary">
                        <div class="container-fluid">

                        </div>
                    </section> -->

                </div>
        </div>



        <!-- start Modal creat -->
        <div class="modal fade" id="creatcategorieModal" tabindex="-1" aria-labelledby="creatcategorieModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Creat New Categorie</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="categorie-name" class="form-label">Categorie Name</label>
                                <input type="text" class="form-control" name="categorie-name" required>
                            </div>

                            <div class="mb-3">
                                <label for="categorie-description" class="form-label">Categorie Description</label>
                                <input type="text" class="form-control" name="categorie-description" required>
                            </div>

                            <div class="mb-3">
                                <label for="categorie-photo" class="form-label">Categorie Photo</label>
                                <input type="file" name="categorie-photo" class="form-control" accept="image/*">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end Modal Creat -->


        <!-- start editing Modal  -->
        <!-- Modal HTML -->
        <div class="modal fade" id="editcategorieModal" tabindex="-1" aria-labelledby="editcategorieModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editcategorieModalLabel">Edit Categorie</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="edit-categorie-id" id="edit-categorie-id">

                            <div class="mb-3">
                                <label for="edit-categorie-name" class="form-label">Categorie Name</label>
                                <input type="text" class="form-control" name="edit-categorie-name" id="edit-categorie-name" required>
                            </div>

                            <div class="mb-3">
                                <label for="edit-categorie-description" class="form-label">Categorie Description</label>
                                <input type="text" class="form-control" name="edit-categorie-description" id="edit-categorie-description" required>
                            </div>

                            <div class="mb-3">
                                <label for="edit-categorie-photo" class="form-label">Categorie Photo</label>
                                <input type="file" name="edit-categorie-photo" class="form-control" accept="image/*">
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" name="update_categorie" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit button in your categories loop -->

        <!-- end editing modal -->



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="./script.js"></script>
</body>

</html>