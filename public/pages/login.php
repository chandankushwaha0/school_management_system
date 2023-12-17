<?php
/**
 * This is used for login page
 *
 * @package school-management-system
 */

/**
 * Including header and menu page
 */
require 'header.php';
require 'menu.php';
?>

<section class="vh-100 d-flex" style="background: rgb(77, 80, 169);">
	<div class="col-3 m-auto">
		<div class="card">
			<div class="card-body">
				<div class="border rounded-circle mx-auto d-flex" style="width: 100px; height: 100px;"><i class="fa fa-user fa-3x m-auto" style="color: gray;"></i></div>
				<form action="../actions/login-save.php" method="POST" class="py-2">
					<div class="md-form">
						<label for="email">Your Email</label>
						<input type="email" id="email" name="username" class="form-control" />
					</div>
					<div class="md-form">
						<label for="password">Your password</label>
						<input type="password" id="password" name="password" class="form-control" />
					</div></br>
					<button class="btn btn-primary btn-block" type="submit" name="login">Login</button>
				</form>
			</div>
		</div>
	</div>
</section>
