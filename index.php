<?php
	$page = 'home';
	include('includes/header.php');
?>

<main>
	<div id="banner">
		<img class="slideshow-image active" src="assets/img/banner.jpg" alt="">

		<div class="section-wrapper">
			<div class="text layout vertical center-center">
				<h2 id="slideshowContent" class="text-center">
					<strong>One stop solution for</strong> 
					Exploration Drilling, <span class="for-lg"><br/></span> 
					Blasting &amp; Grade Control
				</h2>
			</div>
		</div>
	</div>

	<section id="sectionServices">
		<div class="section-wrapper">
			<div class="layout">
				<div class="service-item">
					<img src="assets/img/exploration-drilling.jpg" alt="">

					<div class="service-description">
						<h3>Exploration Drilling</h3>
						<p>
							Our agile exploration drilling teams mobilise quickly to meet your timelines...
						</p>
					</div>
				</div>
				
				<div class="service-item">
					<img src="assets/img/blasting.jpg" alt="">

					<div class="service-description">
						<h3>Drilling &amp; Blasting</h3>
						<p>
							As a proudly Tanzanian company which has partnered with global leaders and...
						</p>
					</div>
				</div>
				
				<div class="service-item">
					<img src="assets/img/grade-control.jpg" alt="">

					<div class="service-description">
						<h3>Grade Control</h3>
						<p>
							RC drilling (in pit grade control) is used in open cut mines to define ore grades ...
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
	include('includes/footer.php');
?>