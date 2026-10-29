<?php
// ---- Page settings ----
$pageTitle   = "Tourist Places to Visit in India";
$pageDesc    = "Dental Care ‘n’ Cure clinic Paschim Vihar offers India is amongst the most visited tourist destinations in Asia. Being a land of colors, festivals, exotic food and vibrant cultures.";
$pageOgTitle = $pageTitle;
$pageCanon   = "https://dentalcarencure.com/tourist-destinations.php";
$currentPage = 'tourism';

include 'includes/header.php';

// Naya destination add karna ho to bas yahan naam jod do
$destinations = [
    'Agra', 'Lucknow', 'Fatehpur Sikri', 'Jaipur', 'Udaipur', 'Mussoorie',
    'Nainital', 'Dhanaulti', 'Dalhousie', 'Jammu and Kashmir', 'Kerala', 'Ooty',
    'Bangalore', 'Mysore', 'Rameshwaram', 'Assam', 'Shillong', 'Meghalaya',
];
?>

        <!-- Page Banner -->
        <div class="page-banner services-banner container-fluid no-padding">
            <div class="container">
                <h1>Tourist Destinations in India </h1>
            </div>
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

        <!-- Departments Section -->
        <div class="container-fluid no-padding department-section">
            <div class="we-are-best col-md-12 col-sm-12 no-padding">

                <div class="we-are-best-block">

                    <div class="we-are-best-content">
                        <p>India is a vast country with diverse culture and religious practices. There are a variety of tourist destinations that would lure your heart. India gives you a mixed bag of adventure sports, cultural sightseeing destinations along with leisure travel and rejuvenation activities.</p>
                    </div>

                    <h3>Top destinations in India </h3>

                    <?php foreach ($destinations as $place): ?>
                    <div class="destinations">
                        <p><?= htmlspecialchars($place) ?></p>
                    </div>
                    <?php endforeach; ?>

                </div>

            </div>
        </div><!-- Departments Section /- -->

<?php include 'includes/footer.php'; ?>