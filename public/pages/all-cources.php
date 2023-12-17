<?php
/**
 * This page contains all cources page
 *
 * @package school-management-system
 */

/**
 * Requiring header and menu page
 */
require 'header.php';

require 'menu.php';
?>

<div class="all-cources text-center">
	<div class="overlay">
		<h1 style="padding-top: 190px;">All Cources</h1>
	</div>
</div>

<div class="all-course-list py-5">
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-9">
				<div class="row">

				<?php
				$i = 1;
				for ( $i = 1; $i <= 9; $i++ ) {
					?>

					<div class="col-lg-4 py-4">
						<div class="card-group">
							<div class="card mx-4 col-lg-3">
								<img src="images/cource_card_1.jpg" class="card-img-top" alt="">
								<div class="card-body">
								<h5 class="card-title">Cource title</h5>
								<p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
							</div>
							<div class="card-footer">
							<div class="rating-icon ">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<div class="cource-cost">
								<h5>$100</h5>
							</div>
						</div>
					</div>                
				</div>
			</div>
					<?php
				}
				?>
		</div>
	</div>
		<div class="col-lg-3">
			<div class="enquiry-for-courrces text-center">
				<form>
					<h4>Courses for free</h4>
					<p>It's time to learn</p>
					<div class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Your Name" aria-label="Username" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3">
						<input type="email" class="form-control" placeholder="Your Email" aria-label="email" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3">
						<input type="number" class="form-control" placeholder="Your Phone Number" aria-label="Username" aria-describedby="basic-addon1">
					</div>
					<div class="d-grid gap-2">
						<button class="btn btn-danger" type="button">Get It Now</button>
					</div>
				</form>
			</div>
			<div class="cource-category">
				<h4>Categories</h4>
				<ul>
					<li>
						<a href=""><i class="fa-solid fa-book"></i> Art & Desing</a>
					</li>
					<li>
						<a href=""><i class="fa-solid fa-pen"></i> Bussiness</a>
					</li>
					<li>
						<a href=""><i class="fa-solid fa-laptop"></i> IT & Software</a>
					</li>
					<li>
						<a href=""><i class="fa-solid fa-language"></i> Language</a>
					</li>
					<li>
						<a href=""><i class="fa-solid fa-globe"></i> Programming Language</a>
					</li>
				</ul>
			</div>
			<div class="cource-category">
				<h4>You May Like</h4>
				<ul>
					<li>
						<a href="" class="d-flex">
							<div class="video">
								<video width="120" height="auto" controls autoplay>
									<source src="../videos/1.mp4" type="video/mp4">
								</video>
							</div>
							<div class="v-name">
								<h6>Academic English</h6>
								<p>Free</p>
							</div>
						</a>
					</li>
					<li>
						<a href="" class="d-flex">
							<div class="video">
								<video width="120" height="auto" controls >
									<source src="../videos/2.mp4" type="video/mp4">
								</video>
							</div>
							<div class="v-name">
								<h6>PC Systems</h6>
								<p>$100</p>
							</div>
						</a>
					</li>
					<li>
						<a href="" class="d-flex">
							<div class="video">
								<video width="120" height="auto" controls >
									<source src="../videos/3.mp4" type="video/mp4">
								</video>
							</div>
							<div class="v-name">
								<h6>programming</h6>
								<p>$200</p>
							</div>
						</a>
					</li>
					<li>
						<a href="" class="d-flex">
							<div class="video">
								<video width="120" height="auto" controls >
									<source src="../videos/4.mp4" type="video/mp4">
								</video>
							</div>
							<div class="v-name">
								<h6>Japnese</h6>
								<p>$50</p>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php
require 'footer.php';
?>
