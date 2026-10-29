<?php
// ---- Page settings ----
$pageTitle    = "Contact Us For All Dental Problems Delhi | Dental Care ‘n’ Cure";
$pageDesc     = "Contact us at Dental Care N Cure clinic which offer best dental treatment in Paschim Vihar, Punjabi Bagh, Jwala Heri and West Delhi. Call for free consultation 9310999214.";
$pageKeywords = "";
$pageOgTitle  = $pageTitle;
$pageCanon    = "https://dentalcarencure.com/contact-us.html";
$currentPage  = 'contact';

include 'includes/header.php';
?>

		<!-- Page Banner -->
		<div class="page-banner contact-banner container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<h1>Contact</h1>
				<p>You can get in touch with us through any of the following ways</p>


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

		<!-- Container -->
		<div class="container">
			<!-- Contact Us -->
			<div class="contact-us">
				<div class="col-md-4 col-sm-4">
					<div class="contact-block">
						<i class="fa fa-map-marker"></i>
						<span>Address</span>
						<p>1st Floor, D2, Shubham Enclave, Paschim Vihar,

</p>
						<p>New Delhi- 110063 (India)</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="contact-block">
						<i class="fa fa-mobile"></i>
						<span>Phone</span>

						<p>011-47082337, +91- 9310999214</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="contact-block">
						<i class="fa fa-envelope"></i>
						<span>Email</span>
						<p><a title="Mailto" href="mailto:info@dentalcarencure.com"> info@dentalcarencure.com </a></p>
						<p><a title="Mailto" href="mailto:drmansiarora@gmail.com">drmansiarora@gmail.com</a></p>
					</div>
				</div>
			</div><!-- Contact Us /- -->
		</div><!-- Container /- -->

		<!-- Map Section -->
		<div class="map container-fluid no-padding">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.6793695577408!2d77.10200421460488!3d28.66931758916691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0387dc5fb5ff%3A0x3488d85bf164963a!2sDental+Care+N+Cure+Clinic!5e0!3m2!1sen!2sin!4v1463744323642" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div><!--  Map Section /- -->

		<!-- Container -->
		<div class="container">
			<!-- Enquiry Us -->
			<div class="leave-comment enquiry-us">
				<h3 class="section-heading">Enquiry Us</h3>
				<div id="contact-form" class="comment-form enquiry-form">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Name*</label>
								<input type="text" name="txtname" class="form-control" id="txtname"/>
							</div>
							<div class="form-group">
								<label>E-Mail*</label>
								<input type="text" name="txtemail" class="form-control" id="txtemail" />
							</div>
							<div class="form-group">
								<label>Phone Number</label>
								<input type="text" name="txtphone" class="form-control" id="txtphone" />
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label>Details</label>
								<textarea class="form-control" style="resize: none;" name="txtquery" id="txtquery" ></textarea>
							</div>
							<div class="form-group">
								<button type="button" id="btnContact" class="btn-submit pull-right">Contact Now</button>
							</div>
							<div id="alert-msg" class="alert-msg"></div>
						</div>
					</div>
				</div>
			</div><!-- Enquiry Us /- -->
		</div><!-- Container /- -->

<?php include 'includes/footer.php'; ?>

    <div class="addapp">
<a href="https://play.google.com/store/apps/details?id=maco21.doctorplus&hl=en" target="_blank"><img src="images/googlePlay.gif"> </a>
</div>
    <script src="developer/js/sendmails.js" type="text/javascript"></script>