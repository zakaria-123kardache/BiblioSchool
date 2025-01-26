<?php
include('./conexion.php');

$sql = " SELECT * FROM donnes ";


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Gestion Player</title>
    <link rel="stylesheet" href="./Assets/dashbord/style.css">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</head>

<body>


    <?php

    ?>

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
                    <h3 class="text-success"><img src="./Assets/img/logg.jpg" width="35"><span class="text-info">FUT</span><?php ?></h3>
                </a>
                <!-- User menu (mobile) -->
                <div class="navbar-user d-lg-none">
                    <!-- Dropdown -->
                    <div class="dropdown">
                        <!-- Toggle -->
                        <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="avatar-parent-child">
                                <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar- rounded-circle">
                                <span class="avatar-child avatar-badge bg-success"></span>
                            </div>
                        </a>

                    </div>
                </div>
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-house"></i> Dashboard
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-bar-chart"></i> Player
                            </a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-chat"></i> club
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="bi bi-bookmarks"></i> nationalites
                            </a>
                        </li>

                    </ul>
                    <!-- Divider -->
                    <hr class="navbar-divider my-5 opacity-20">

                </div>
            </div>
        </nav>
        <!-- Main content -->
        <div class="h-screen flex-grow-1 overflow-y-lg-auto ">
            <!-- Header -->
            <header class="bg-surface-primary border-bottom pt-6">
                <div class="container-fluid">
                    <div class="mb-npx">
                        <div class="row align-items-center">
                            <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                                <!-- Title -->
                                <h1 class="h2 mb-0 ">
                                    <img src="./Assets/img/logg.jpg" width="40">FUT_Champions
                                </h1>
                            </div>
                            <!-- Actions -->
                            <div class="col-sm-6 col-12 text-sm-end">
                                <div class="mx-n1">

                                    <a href="" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                        <span class=" pe-2">
                                            <i class="bi bi-plus"></i>
                                        </span>
                                        <button type="button" data-toggle="modal" data-target="#myModal">Create New Player</button>
                                    </a>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </header>
            <!-- Main -->



            <!-- Card stats -->

            <?php
            $sql = " SELECT * FROM players";
            if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                    echo "<main class=\"py-6 bg-surface-secondary\"> ";
                    echo "<div class=\"container-fluid\"> ";
                    echo "<div class=\"card shadow border-0 mb-7\">";
                    echo "<div class=\"card-header\">";
                    echo "<h5 class=\"mb-0\">Applications</h5>";
                    echo "</div>";
                    echo "<div class=\"table-responsive\">";
                    echo "<table class=\"table table-hover table-nowrap\">";
                    echo "<thead class=\"thead-light\">";
                    echo "<th scope=\"col\">#id</th>";
                    echo "<th scope=\"col\">Name</th>";
                    echo "<th scope=\"col\">Photo</th>";
                    echo "<th scope=\"col\">rating</th>";
                    echo "<th scope=\"col\">pace</th>";
                    echo "<th scope=\"col\">shooting</th>";
                    echo "<th scope=\"col\">passing</th>";
                    echo "<th scope=\"col\">dribbling</th>";
                    echo "<th scope=\"col\">defending</th>";
                    echo "<th scope=\"col\">physical</th>";
                    echo "<th scope=\"col\">pace</th>";
                    echo "<th scope=\"col\">shooting</th>";
                    echo "<th scope=\"col\">passing</th>";
                    echo "<th scope=\"col\">dribbling</th>";
                    echo "<th scope=\"col\">defending</th>";
                    echo "<th scope=\"col\">physical</th>";
                    echo "<th scope=\"col\" class=\"text-center\">Action</th>";
                    echo "<th></th>";
                    echo "</tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    while ($row = mysqli_fetch_array($result)) {
                        echo " <tr>";
                        echo " <td>" . $row['id'] . "</td>";
                        // echo "</td>";
                        echo "  <td class=\"text-heading font-semibold\">"  . $row['name'] . "</td>";
                        // echo " <td>" . " <img src=\"$row['photo']\" class=\"avatar avatar-sm rounded-circle me-2\">" . "</td>";
                        echo "<td>" . "<img src =\"" . $row['photo'] . "\" class=\"avatar avatar-sm rounded-circle me-2\">" . "</td>";
                        echo "<td>" . " <span class=\"badge badge-lg badge-dot\">" . "<i class=\"bg-success\">" . "</i>" . $row['rating'] . "</span>" . "</td>";

                        echo "<td>" . " <span class=\"badge badge-lg badge-dot\">" . $row['diving'] . "</span>" . "</td>";

                        echo "<td>" . " <span class=\"badge badge-lg badge-dot\">" . $row['handling'] . "</span>" . "</td>";

                        echo "<td>" . " <span class=\"badge badge-lg badge-dot\">" . $row['kicking'] . "</span>" . "</td>";

                        echo "<td>" . " <span class=\"badge badge-lg badge-dot\">" . $row['reflexes'] . "</span>" . "</td>";

                        echo "<td>" . " <span class=\"badge badge-lg badge-dot\">" . $row['speed'] . "</span>" . "</td>";

                        echo "<td>" . " <span class=\"badge badge-lg badge-dot\">" . $row['positioning'] . "</span>" . "</td>";

                        echo "<td>" . " <span class=\"badge badge-lg badge-dot\">" . $row['pace'] . "</span>" . "</td>";

                        echo "<td>" . " <span class=\"badge badge-lg badge-dot\">" . $row['Shooting'] . "</span>" . "</td>";

                        echo "<td>" . " <span class=\"badge badge-lg badge-dot\">" . $row['dribling'] . "</span>" . "</td>";

                        echo "<td>" . " <span class=\"badge badge-lg badge-dot\">" . $row['physical'] . "</span>" . "</td>";

                        echo "<td>" . " <span class=\"badge badge-lg badge-dot\">" . $row['passing'] . "</span>" . "</td>";

                        echo "<td>" . " <span class=\"badge badge-lg badge-dot\">" . $row['defending'] . "</span>" . "</td>";

                        // echo "</tr>";

                        echo "<td class=\"text-end\">";
                        echo "<a class=\"btn d-inline-flex btn-sm btn-warning mx-1 \">" . "<span>" . "View" . "</span>" . "</a>";
                        echo "<a class=\"btn d-inline-flex btn-sm btn-primary mx-1\">";

                        echo "<span class=\" pe-2\">" . "<i class=\"bi bi-pencil\">" . "</i>" . "</span>" . "<span>" . "Edit" . "</span>" . "</a>";
                        echo "<button type=\"button\" onclick=\"showSweetAlert()\" class=\"btn btn-sm btn-square btn-neutral text-danger-hover\">" . "<i class=\"bi bi-trash\">" . "</i>" . " </button>";
                        // echo "<i class=\"bi bi-trash\">" . "</i>" ." </button>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    echo "</tbody>";
                    echo "</table>";
                    echo "</div>";

                    echo "<div class=\"card-footer border-0 py-5\">";
                    echo "<nav aria-label=\"Page navigation example\">";
                    echo "<ul class=\"pagination\">";
                    echo " <li class=\"page-item\">" . "<a class=\"page-link disabled\" >" . "Previous" . "</a>" . "</li>";
                    echo " <li class=\"page-item\">" . "<a class=\"page-link bg-info text-white\">" . "1" . "</a>" . "</li>";
                    echo " <li class=\"page-item\">" . "<a class=\"page-link \">" . "2" . "</a>" . "</li>";
                    echo " <li class=\"page-item\">" . "<a class=\"page-link \">" . "3" . "</a>" . "</li>";
                    echo " <li class=\"page-item\">" . "<a class=\"page-link \">" . "Next" . "</a>" . "</li>";
                    echo "</ul>";
                    echo "</nav>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</main>";





                    mysqli_free_result($result);
                } else {
                    echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }


            // Close connection
            mysqli_close($conn);
            ?>



        </div>
    </div>











    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">

                    <form id="form" style="color: aliceblue; background-color: #20252A;">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="position">position:</label>
                                    <select id="position" class="form-select" style="color: aliceblue; background-color: #20252A;">
                                        <option value="RW">RW</option>
                                        <option value="ST">ST</option>
                                        <option value="CM">CM</option>
                                        <option value="LW">LW</option>
                                        <option value="GK">GK</option>
                                        <option value="CDM">CDM</option>
                                        <option value="CB">CB</option>
                                        <option value="LB">LB</option>
                                        <option value="RB">RB</option>
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="photo" class="form-label">photo:</label>
                                    <input
                                        type="file"
                                        id="photo"
                                        class="form-control"
                                        accept="image/*"
                                        style="color: aliceblue; background-color: #20252A;" />
                                </div>
                                <div class="mb-3">
                                    <label for="Name" class="form-label">Name:</label>
                                    <input type="text" id="Name" class="form-control" style="color: aliceblue; background-color: #20252A;" />
                                </div>
                                <div class="mb-3">
                                    <label for="nationality" class="form-label">nationality:</label>
                                    <input
                                        type="text"
                                        id="nationality"
                                        class="form-control"
                                        style="color: aliceblue; background-color: #20252A;" />
                                </div>
                                <div class="mb-3">
                                    <label for="flag" class="form-label">flag:</label>
                                    <input type="text" id="flag" class="form-control" placeholder="Enter ur Url flag" style="color: aliceblue; background-color: #20252A;" />
                                </div>

                            </div>


                            <div class="col-md-6">


                                <div class="mb-3">
                                    <label for="club" class="form-label">club:</label>
                                    <input type="text" id="club" class="form-control" style="color: aliceblue; background-color: #20252A;" />
                                </div>
                                <div class="mb-3">
                                    <label for="logo" class="form-label">logo:</label>
                                    <input type="text" id="logo" class="form-control" placeholder="Enter ur Url LOGO" style="color: aliceblue; background-color: #20252A;" />
                                </div>
                                <div class="mb-3">
                                    <label for="rating" class="form-label">rating:</label>
                                    <input type="number" id="rating" class="form-control" style="color: aliceblue; background-color: #20252A;" />
                                </div>

                                <div class="mb-3">
                                    <label for="pace" class="form-label">pace:</label>
                                    <input type="number" id="pace" class="form-control" style="color: aliceblue; background-color: #20252A;" />
                                </div>
                                <div class="mb-3">
                                    <label for="shooting" class="form-label">shooting:</label>
                                    <input
                                        type="number"
                                        id="shooting"
                                        class="form-control"
                                        style="color: aliceblue; background-color: #20252A;" />
                                </div>
                            </div>
                        </div>


                        <div class="row">

                            <div class="col-md-6">


                                <div class="mb-3">
                                    <label for="passing" class="form-label">passing:</label>
                                    <input type="num" id="passing" class="form-control" style="color: aliceblue; background-color: #20252A;" />
                                </div>
                                <div class="mb-3">
                                    <label for="dribbling" class="form-label">dribbling:</label>
                                    <input
                                        type="number"
                                        id="dribbling"
                                        class="form-control"
                                        style="color: aliceblue; background-color: #20252A;" />


                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="defending" class="form-label">defending:</label>
                                    <input
                                        type="number"
                                        id="defending"
                                        class="form-control"
                                        style="color: aliceblue; background-color: #20252A;" />
                                </div>
                                <div class="mb-3">
                                    <label for="physical" class="form-label">physical:</label>
                                    <input
                                        type="number"
                                        id="physical"
                                        class="form-control"
                                        style="color: aliceblue; background-color: #20252A;" />
                                </div>
                            </div>
                        </div>

                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="./Assets/dashbord/script.js"></script>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>

</html>