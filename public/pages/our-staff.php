<?php
/**
 * This file includes all our cources related content
 *
 * @package school-management-system
 */

/**
 * Requiring header and menu file
 */
require 'header.php';
require 'menu.php';

?>

<div class="contact">
	<div class="overlay text-center">
		<h1>Our Staff</h1>
	</div>
</div>

<div class="all-staff">
	<div class="container py-5">
		<h1 class="text-center">We All Are Family</h1>
		<h2 class="text-center">LOVE each other</h2>
		<div class="row py-5">

		<?php
		$i = 1;
		for ( $i = 1; $i <= 9; $i++ ) {
			?>

			<div class="col-lg-3 py-5">
				<div class="card-group">
					<div class="card mx-4 col-lg-3">
						<img src="images/cource_card_1.jpg" class="card-img-top" alt="">
						<div class="card-body">
							<h5 class="card-title">Staff Name</h5>
							<p class="card-text">
								This is a wider card with supporting text below as a natural lead-in to
								additional content. This content is a little bit longer.
							</p>
						</div>
						<div class="card-footer">
							<div class="rating-icon ">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star-half-stroke"></i>
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

<?php
require 'footer.php';
?>
