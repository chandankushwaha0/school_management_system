<?php
/**
 * This is main landing page
 *
 * @package school-management-system
 */

/**
 * Requiring header file
 */
require 'header.php';

?>

<!-- menu -->
<div class="container-fluid">
	<div class="menu">
		<?php
		require 'menu.php';
		?>
	</div>
</div>
<!-- menu close -->

<!-- slider -->

<div class="slider">
	<div class="slider_images">
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/slider_1.png" class="d-block" alt="...">
				</div>
				<div class="carousel-item">
					<img src="images/slider_2.jpg" class="d-block" alt="...">
				</div>
				<div class="carousel-item">
					<img src="images/slider_3.jpg" class="d-block" alt="...">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>

	<!-- slide overlay -->
	<div class="slide_overlay"></div>

	<div class="slide_content container text-center mx-5">
		<h1 class="text-center">Yeti International<br>College</h1>
		<!-- <button type="submit"><a href="">Call To Action</a></button> -->
	</div> 
	<div class="bg_content container mx-5 text-center pt-5">
		<h1><div class=" mx-5 text-center"></div>World's <br>Beautiful</h1>
	</div>
</div>
<!-- slider close -->

<!-- scroll to top -->
<a href="#" id="scroll-top-btn" class="to-top">
	<i class="fas fa-chevron-up"></i>
</a>

<?php
require 'services.php"';
?>

<!-- our cources -->
<div class="cources">
	<div class="container py-5">
		<div class="header text-center pt-5 text-light">
			<h4>Our Outstanding Courses</h4>
			<p>Proin ac lobortis arcu, a vestibulum augue. Vivamus ipsum neque, facilisis vel mollis <br>vitae, mollis nec ante. Quisque aliquam dictum condim.<p>
		</div>
	</div>
	<div class="container mx-auto">
		<div class="row cource-card pb-5">
			<div class="col-lg-3 pb-5">
				<div class="card" style="width: 18rem;">
					<img src="images/cource_card_1.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 pb-5">
				<div class="card" style="width: 18rem;">
					<img src="images/cource_card_2.jfif" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 pb-5">
				<div class="card" style="width: 18rem;">
					<img src="images/cource_card_3.webp" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-lg-3 pb-5">
				<div class="card" style="width: 18rem;">
					<img src="images/cource_card_4.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Learn More</a>
					</div>
				</div>
			</div>
			<div class="col-12 text-light text-center py-5">
				<div class="more-cource">
					<h1><a href="">More Cources >></a></h1>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- our cources close-->

<!-- our differences-->
<?php
require 'difference.php';
?>
<!-- our process close-->

<!-- what people say / testimonials -->
<div class="testimonials">
	<div class="container text-center">
		<h1>What People Says</h1>
		<div class="silk-slider">
			<div class="testimonials_content">
				<img src="images/user2.png">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis odit nisi voluptates rem dolore deserunt fuga aperiam nihil omnis! Culpa repellat sint magni id modi pariatur maxime architecto eligendi? Qui.</p>
				<h2>Name</h2>
			</div>
			<div class="testimonials_content">
				<img src="images/user1.png">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis odit nisi voluptates rem dolore deserunt fuga aperiam nihil omnis! Culpa repellat sint magni id modi pariatur maxime architecto eligendi? Qui.</p>
				<h2>Name</h2>
			</div>
			<div class="testimonials_content">
				<img src="images/user2.png">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis odit nisi voluptates rem dolore deserunt fuga aperiam nihil omnis! Culpa repellat sint magni id modi pariatur maxime architecto eligendi? Qui.</p>
				<h2>Name</h2>
			</div>
		</div>
	</div>  
</div>
<!-- what people say / testimonials close-->



<script type="text/javascript">
function btn_active() {
	var first = document.getElementById("first");
	first.classList.add("btn_design");
	}
</script>

<?php
require 'footer.php';
?>
