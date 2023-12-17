<?php
/**
 * This file includes all contact related content
 *
 * @package school-management-system
 */

/**"
 * Requiring header and menu file
 */
require 'header.php';

require 'menu.php';

?>

<div class="contact">
	<div class="overlay text-center">
		<h1>Contact Us</h1>
	</div>
</div>
<div class="contact-form">
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-6">
				<div class="clz-contact-info">
					<ul>
						<div class="clz-logo">
							<li>
								<h1>College's Logo</h1>
							</li>
						</div>
						<div class="clz-name">
							<li>
								<h2>College's Name</h2>
							</li>
						</div>
						<div class="clz-address">
							<li>
								<h3>Address</h3>
							</li>
							<li>
								<p>Buddhanagar-4, Baneshwor</p>
							</li>
						</div>
						<div class="clz-phone-number">
							<li>
								<h3>Phone Number</h3>
							</li>
							<li>
								<p><a href="">9811123320</a></p>
							</li>
						</div>
						<div class="clz-email">
							<li>
								<h3>Email</h3>
							</li>
							<li>
								<p><a href="">college@gmail.com</a></p>
							</li>
						</div>
					</ul>
				</div>
			</div>

			<div class="col-lg-6 py-3">
				<div class="clz-contact-form">
					<form>
						<h4>Get In Touch</h4>
						<p>Fill out this form and we will get back to you soon.</p>
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Your Name" aria-label="Username" aria-describedby="basic-addon1">
						</div>
						<div class="input-group mb-3">
							<input type="number" class="form-control" placeholder="Phone Number" aria-label="phoneNumber" aria-describedby="basic-addon1">
						</div>
						<div class="input-group mb-3">
							<input type="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="basic-addon1">
						</div>
						<div class="form-floating">
							<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
							<label for="floatingTextarea2">Comments</label>
						</div>
						<div class="form-check my-3  py-3 bg-light robot-checkbox">
							<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
							<label class="form-check-label" for="flexCheck">
								I'm not a robot
							</label>
							<i class="fa-sharp fa-solid fa-spinner"></i>
						</div>
						<div class="d-grid gap-2 col-6 my-4">
							<button class="btn btn-primary" type="button">Submit Message <i class="fa-solid fa-arrow-right"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<div class="clz-map">
	<div class="container-fluid ">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14130.927050714688!2d85.32951860337347!3d27.694684219033636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199a06c2eaf9%3A0xc5670a9173e161de!2sNew%20Baneshwor%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1681801468470!5m2!1sen!2snp" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>
</div>




<?php
require 'footer.php';
?>
