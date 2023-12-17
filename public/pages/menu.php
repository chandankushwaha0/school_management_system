<?php
/**
 * This file is used to all menu
 *
 * @package school-management-system
 */

/**
 * Requiring a header page
 */
require 'header.php';?>

<div class="menu">
	<nav class="navbar navbar-expand-lg navbar-light">
		<div class="container py-3">
            <?php
            include_once 'config.php';

            $sql = "SELECT * FROM home_logo
            ORDER BY image DESC
            LIMIT 1";

            $result = mysqli_query( $conn, $sql );
            if( mysqli_num_rows( $result) > 0 ) {
                while( $row = mysqli_fetch_assoc( $result ) ) {
                    ?>
                    <a class="navbar-brand" href="index.php"><img src="../admin/pages/college-site/pages/actions/uploads/json2.png" alt="logo"></a>
                    <?php
                    // echo dirname((__DIR__));
                }
            }

            ?>
			
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about-us.php">About</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							Cources
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="all-cources.php">All Cources</a></li>
							<li><a class="dropdown-item" href="#">BHM </a></li>
							<li><a class="dropdown-item" href="#">BCA </a></li>
							<li><a class="dropdown-item" href="#">MBA </a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="our-staff.php">Our Staff</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="gallery.php">Gallery</a>
					</li>
				</ul>
				<form class="d-flex">
					<?php
					session_start();
					if ( isset( $_SESSION['user_id'] ) ) {
						?>
					<button class="btn btn-primary mx-1" type="submit"><a href="../actions/logout.php">Logout</a></button>
						<?php
					} else {
						?>
					<button class="btn btn-primary mx-1" type="submit"><a href="login.php">Login</a></button>
						<?php
					}
					?>
					<button class="btn btn-primary" type="submit"><a href="register.php">Register</a></button>
				</form>
			</div>
		</div>
	</nav>
</div>
