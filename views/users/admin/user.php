<?php

use app\controller\UserController;
use app\Repository\UserRepository;
use app\Core\Connexion;

require_once __DIR__ . '/../../../vendor/autoload.php';


$db = Connexion::getInstance()->getConnexion();

$userRepository = new UserRepository($db);
$controller = new UserController($userRepository);

$users = $controller->getAllUsers();

if (isset($_POST['submit'])) {
  $controller->addUser();
}

if (isset($_POST['delete']) && isset($_POST['id'])) {
  // $controller = new UserController();
  $controller->deleteUser((int)$_POST['id']);
}






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
              <a class="nav-link" aria-current="page" href="./dashbordadmin.php">
                <i class="bi bi-house"></i> Dashboard
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./categorie.php">
                <i class="bi bi-bar-chart"></i> Categorie
              </a>
            </li>

            <!-- <a class="nav-link active text-warning" aria-current="page" href="index.html">Home</a> -->

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./tags.php">
                <i class="bi bi-chat"></i> Tags
                <span
                  class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-auto">6</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./livre.php">
                <i class="bi bi-file-text"></i> Livre
              </a>
            </li>

            <li class="nav-item">
              <a
                class="nav-link active text-warning"
                aria-current="page"
                href="./user.php">
                <i class="bi bi-people"></i> Users
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="./validation.php">
                <i class="bi bi-bookmarks"></i> VAlidation
              </a>
            </li>
          </ul>
          <!-- Divider -->
          <hr class="navbar-divider my-5 opacity-20" />

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
              <a
                class="nav-link"
                href="#"
                onclick="return confirm('Are you sure you want to logout?')">
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
                  <img src="" width="40" /> Welcome Admin
                </h1>
              </div>
              <!-- Actions -->
              <div class="col-sm-6 col-12 text-sm-end">
                <div class="mx-n1">


                  <a
                    href="#"
                    class="btn d-inline-flex btn-sm btn-primary mx-1" data-bs-toggle="modal" data-bs-target="#creatuserModal">
                    <span class="pe-2">
                      <i class="bi bi-plus"></i>
                    </span>
                    <span>Create</span>
                  </a>

                </div>
              </div>
            </div>

            <!-- Nav -->
            <ul class="nav nav-tabs mt-4 overflow-x border-0">
              <!-- <li class="nav-item ">
                            <a href="#" class="nav-link active">All files</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link font-regular">Shared</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link font-regular">File requests</a>
                        </li> -->
            </ul>
          </div>
        </div>
      </header>

      <!-- Main -->
      <section class="py-6 bg-surface-secondary">
        <div class="container-fluid">
          <!-- Card stats -->

          <div class="card shadow border-0 mb-7">
            <div class="card-header">
              <h5 class="mb-0">Applications</h5>
            </div>

            <div class="table-responsive">
              <table class="table table-hover table-nowrap">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">photo</th>
                    <th scope="col">firstname</th>
                    <th scope="col">lastname</th>
                    <th scope="col">email</th>
                    <th scope="col">password</th>
                    <th scope="col">role</th>
                    <th scope="col">status</th>
                    <th scope="col" class="text-center">Action</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>


                  <?php foreach ($users as $user): ?>
                    <tr>
                      <td>
                        <a class="text-heading font-semibold" href="#"> <?= $user->getId(); ?> </a>
                      </td>

                      <td>
                        <img
                          alt="..."
                          src="<?= $user->getPhoto(); ?>"
                          class="avatar avatar-sm rounded-circle me-2" />
                      </td>

                      <td>
                        <a class="text-heading font-semibold"> <?= $user->getFirstname(); ?> </a>
                      </td>

                      <td>
                        <a class="text-heading font-semibold"> <?= $user->getLastname(); ?> </a>
                      </td>

                      <td>
                        <a class="text-heading font-semibold">
                          <?= $user->getEmail(); ?>
                        </a>
                      </td>

                      <td>
                        <a class="text-heading font-semibold">
                          <?= $user->getPassword(); ?>
                        </a>
                      </td>

                      <td>
                        <a class="text-heading font-semibold">
                          <?= $user->getRole() ? $user->getRole()->getRoleName() : 'No Role'; ?>
                        </a>
                      </td>

                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                          Active
                        </span>
                      </td>

                      <td class="text-end">


                        <a
                          href="user.php?edit_user_id=<?= $user->getId() ?>"
                          class="btn d-inline-flex btn-sm btn-warning mx-1"
                          data-bs-toggle="modal"
                          data-bs-target="#edituserModal">
                          <span class="pe-2">
                            <i class="bi bi-pencil"></i>
                          </span>
                          Edit
                        </a>





                        <form method="POST" action="user.php" style="display: inline;">
                          <input type="hidden" name="id" value="<?= $user->getId() ?>">
                          <button
                            type="submit"
                            name="delete"
                            class="btn d-inline-flex btn-sm btn-danger mx-1">
                            <i class="bi bi-trash"></i>
                          </button>
                        </form>
                      </td>
                    </tr>
                  <?php endforeach; ?>


                </tbody>
              </table>
            </div>





          </div>
        </div>
      </section>
    </div>
  </div>





  <!-- start Modal creat -->
  <div class="modal fade" id="creatuserModal" tabindex="-1" aria-labelledby="creatuserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Creat New User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form method="POST" action="user.php" enctype="multipart/form-data">
            <div class="mb-3">
              <label for="firstname" class="form-label">Firstname</label>
              <input type="text" class="form-control" name="firstname">
            </div>

            <div class="mb-3">
              <label for="lastname" class="form-label">Lastname</label>
              <input type="lastname" class="form-control" name="lastname">
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email">
            </div>


            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
            </div>

            <div class="mb-3">
              <label for="photo" class="form-label">Photo</label>
              <input type="text" name="photo" class="form-control">
            </div>


            <select class="form-select" id="role" name="role">
              <option value="">Select Role</option>
              <option value="1">Admin</option>
              <option value="2" selected>Apprenant</option>
              <option value="3">Geront</option>
            </select>

            <button type="submit" name="submit" class="btn btn-primary">submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end Modal Creat -->



  <!-- start Modal Eding user  -->
  <div class="modal fade" id="edituserModal" tabindex="-1" aria-labelledby="edituserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="loginModalLabel">Edit User</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form method="POST" action="user.php" enctype="multipart/form-data">
            <input type="hidden" name="id" id="edit-id">
            <div class="mb-3">
              <label for="edit-firstname" class="form-label">Firstname</label>
              <input type="text" class="form-control" id="edit-firstname" name="edit-firstname">
            </div>
            <div class="mb-3">
              <label for="edit-lastname" class="form-label">Lastname</label>
              <input type="text" class="form-control" id="edit-lastname" name="edit-lastname">
            </div>
            <div class="mb-3">
              <label for="edit-email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="edit-email" name="edit-email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="edit-password" name="edit-password">
            </div>
            <div class="mb-3">
              <label for="edit-photo" class="form-label">photo</label>
              <input type="text" id="edit-photo" class="form-control" name="edit-photo">
            </div>
            <div class="mb-3">
              <label for="edit-role" class="form-label">Role</label>
              <select class="form-select" id="role" name="edit-role">
                <option value="">Select Role</option>
                <option value="1">Admin</option>
                <option value="2" selected>Apprenant</option>
                <option value="3">Geront</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary" name="update_user">Save</button>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- end Modal Eding user -->

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <script src="./script.js"></script>
</body>

</html>