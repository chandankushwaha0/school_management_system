<?php
/**
 * This page contains about-us page
 *
 * @package school-management-system
 */

/**
 * Requiring header and menu file
 */
require 'header.php';
require 'menu.php';

?>

<div class="all-cources text-center">
	<div class="overlay">
		<h1 style="padding-top: 190px;">About Us</h1>
	</div>
</div>
<!-- scroll to top -->
<a href="" id="scroll-top-btn" class="to-top">
	<i class="fas fa-chevron-up"></i>
</a>

<?php
require 'services.php';
?>

<div class="about-video-section py-5">
	<div class="container py-5">
		<div class="row">
			<div class="col-lg-6">
				<div class="about-video">
					<video width="100%" height="auto" controls autoplay>
						<source src="../videos/1.mp4" type="video/mp4">
					</video>
				</div>
			</div>
			<div class="col-lg-6">
				<h3>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque unde officia, ea sed vitae distinctio delectus quod, quae, hic ad exercitationem voluptatibus deserunt optio odit ducimus! Officia aliquam quidem adipisci.</p>
			</div>
		</div>
	</div>
</div>



<?php

require 'difference.php';
require 'footer.php';
?>
