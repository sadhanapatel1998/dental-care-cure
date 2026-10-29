<?php
// ---- Page settings ----
$pageTitle   = "Smile Gallery Dental Clinic | Dental Care 'N' Cure";
$pageDesc    = "View before and after images of real patient smiles showing various treatments and services which we offer at Dental Care 'N' Cure Clinic in Paschim Vihar.";
$pageOgTitle = "Smile Gallery Dental Clinic | Dental Care 'N' Cure";
$pageCanon   = "https://dentalcarencure.com/Clinic-tour.php";
$currentPage = 'clinic-tour';

include 'includes/header.php';

?>

		<!-- Page Banner -->
		<div class="page-banner services-banner  container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<h1>Clinic Tour</h1>
				<p>These Happy Days are yours and mine Happy Days! The movie star </p>
				<p>the professor and Mary Ann here on Gilligans Isle.</p>

			</div><!-- Container /- -->
			<!-- Shape -->
			<div class="banner-shape container-fluid no-padding">
				<div class="col-md-6 col-sm-6 col-xs-6 shape-left no-padding">
					<div class="left-shape-blue">
						<svg width="100%" height="100%">
							<clipPath id="clipPolygon2" clipPathUnits="objectBoundingBox">
								<polygon points="0 0, 0 100, 120 100, 0 0"></polygon>
							</clipPath>
						</svg>
					</div>
					<div class="left-shape">
						<svg width="100%" height="100%">
							<clipPath id="clipPolygon1" clipPathUnits="objectBoundingBox">
								<polygon points="0 0, 0 100, 100 100, 0 0"></polygon>
							</clipPath>
						</svg>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-6 shape-right no-padding">
					<div class="right-shape-blue">
						<svg width="100%" height="100%">
							<clipPath id="clipPolygon3" clipPathUnits="objectBoundingBox">
								<polygon points="1 0.2, 0 1, 0 0.835, 1 0"></polygon>
							</clipPath>
						</svg>
					</div>
					<div class="right-shape">
						<svg width="100%" height="100%">
							<clipPath id="clipPolygon4" clipPathUnits="objectBoundingBox">
								<polygon points="1 0, 0 1, 100 100, 100 0"></polygon>
							</clipPath>
						</svg>
					</div>
				</div>
			</div><!-- Shape -->
		</div><!-- Page Banner /- -->

		<!-- Portfolio Section -->
		<div class="portfolio-section container-fluid no-padding">
			<div class="section-padding"></div>
			<div class="container">
				<div class="row">
					<!-- Portfolio Filters -->

					<div class="col-md-12 col-sm-12 col-xs-12 no-padding">
						<div id="portfolio" class="">

							<?php
							// Naya photo add karna ho to bas yahan ek entry daal do: [image number, optional style]
							$clinicPhotos = [
								['clinicTour-18.jpg', ''],
								['clinicTour-23.jpg', ''],
								['clinicTour-24.jpg', ''],
								['clinicTour-20.jpg', ''],
								['clinicTour-13.jpg', ''],
								['clinicTour-14.jpg', ''],
								['clinicTour-15.jpg', ''],
								['clinicTour-16.jpg', ''],
								['clinicTour-21.jpg', ''],
								['clinicTour-22.jpg', ''],
								['clinicTour-17.jpg', 'height:185px'],
								['clinicTour-19.jpg', 'height:185px'],
								['clinicTour-7.jpg',  ''],
								['clinicTour-8.jpg',  ''],
								['clinicTour-9.jpg',  ''],
								['clinicTour-3.jpg',  ''],
							];
							foreach ($clinicPhotos as $photo): ?>
							<div class="portfolio-item clinic  col-md-3 col-sm-6"<?= $photo[1] ? ' style="' . $photo[1] . '"' : '' ?>>
								<img src="images/gallery/<?= $photo[0] ?>" alt="Portfolio" />
								<a href="images/gallery/<?= $photo[0] ?>" title=""><img src="images/plus.png" alt="portfolio-arrow" /></a>
								<div class="portfolio-item-hover">

								</div>
							</div>
							<?php endforeach; ?>

						</div>
					</div>
				</div>
				<!-- Pagination -->

			</div>
			<div class="section-padding"></div>
		</div><!-- Portfolio Section /- -->

<?php include 'includes/footer.php'; ?>