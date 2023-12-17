<?php
/**
 * This file includes all gallery related content
 *
 * @package school-management-system
 */

/**
 * Requiring header and menu file
 */
require 'header.php';
require 'menu.php';

?>

<div class="gallery-body-section py-5">
	<div class="container ;y-5">
		<div class="row">
			<?php
			$i = 1;
			for ( $i = 1; $i <= 12; $i++ ) {
				?>
			<div class="col-lg-3 py-5">
				<a href="single-image-page.php">
					<div class="image-items">
						<i class="fa-solid fa-graduation-cap"></i>
						<img src="images/cource_card_1.jpg" class="img-fluid">
						<h5 class="text-center py-3">Image Name</h5>
					</div>
				</a>
			</div>
				<?php
			}
			?>
		</div>
	</div>
</div>

<div class="pegination">
	<div class="container text-center pb-4">
		<div class="d-grid gap-2 d-md-block">
			<button class="btn btn-primary" type="button">Prev</button>
			<button class="btn btn-primary" type="button">1</button>
			<button class="btn btn-primary" type="button">2</button>
			<button class="btn btn-primary" type="button">3</button>
			<button class="btn btn-primary" type="button">Next</button>
		</div>
	</div>
</div>

<?php
require 'footer.php';
?>
