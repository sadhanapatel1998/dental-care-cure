<?php
// ---- Default values (page ne set nahi kiya to ye use honge) ----
$pageTitle   = $pageTitle   ?? "Best Dental Clinic in Paschim Vihar, Delhi - Dental Care 'N' Cure";
$pageDesc    = $pageDesc    ?? "Looking for the best dentist in Delhi? Our dental clinic offers expert dental care with advanced technology and personalized treatments. Book your appointment today!";
$pageOgTitle = $pageOgTitle ?? "Best Dentist in Delhi | Dental Clinic in West Delhi - Dental Care 'N' Cure";
$pageCanon   = $pageCanon   ?? "https://dentalcarencure.com";
$pageImage   = $pageImage   ?? "https://dentalcarencure.com/images/logo-banner.png";
$currentPage = $currentPage ?? 'home';   // home, about, services, gallery, tour, implants, tourism, contact

// Active class helper
function navActive($page, $current)
{
    return $page === $current ? 'active' : '';
}
?>
<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="utf-8">
    <title><?= htmlspecialchars($pageTitle) ?></title>
    <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>" />
    <?php if (!empty($pageKeywords)): ?>
        <meta name="keywords" content="<?= htmlspecialchars($pageKeywords) ?>">
    <?php endif; ?>
    <meta name="robots" content="index, follow" />
    <meta name="distribution" content="Global" />
    <meta name="language" content="EN-US" />
    <meta name="classification" content="Healthcare" />
    <meta name="author" content="Dental Healthcare India " />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "MedicalOrganization",
            "name": "Dental Care 'N' Cure",
            "url": "https://dentalcarencure.com/",
            "logo": "https://dentalcarencure.com/images/logo-banner.png",
            "sameAs": [
                "https://www.facebook.com/DentalCarenCure/",
                "https://x.com/DentalCareNCure",
                "https://www.instagram.com/dentalcarencure/",
                "https://www.youtube.com/channel/UCIlqkg_bkS8_949GqFP74Xw"
            ]
        }
    </script>
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= htmlspecialchars($pageOgTitle) ?>">
    <meta property="og:url" content="<?= htmlspecialchars($pageCanon) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($pageImage) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?= htmlspecialchars($pageOgTitle) ?>">
    <meta name="twitter:site" content="@DentalCareNCure">
    <meta name="twitter:description" content="<?= htmlspecialchars($pageDesc) ?>">
    <meta name="twitter:image" content="<?= htmlspecialchars($pageImage) ?>">
    <link rel="canonical" href="<?= htmlspecialchars($pageCanon) ?>" />
    <link rel="stylesheet" type="text/css" href="libraries/loader/loaders.min.css" />
    <link rel="stylesheet" type="text/css" href="libraries/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="libraries/fonts/elegant-icons.css" />
    <link rel="stylesheet" type="text/css" href="libraries/owl-carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="libraries/owl-carousel/owl.theme.css" />
    <link rel="stylesheet" type="text/css" href="libraries/animate/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="libraries/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="css/plugins.css" />
    <link rel="stylesheet" type="text/css" href="css/navigation-menu.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="css/shortcodes.css" />
    <link href="css/datepicker.css" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.ico">
    <link rel='stylesheet' href='https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css'>
    <script src='https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js'></script>
    <meta name="google-site-verification" content="FKlZnBEjqjoOBpKOemSSoHBbj1FAZRQh4SpGq6a2xmE" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4G2C4ZHX8E"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-4G2C4ZHX8E');
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WXFMHMFJ');
    </script>
    <!-- End Google Tag Manager -->

    <style>
        .owl-carousel .owl-item {
            border: #ddd 1px solid;
        }

        .nwCss {
            margin-top: 30px;
        }

        .nwCss h1 {
            background-image: none;
        }

        .owl-carousel .nav-btn {
            border-radius: 50px;
            height: 35px;
            position: absolute;
            width: 35px;
            cursor: pointer;
            top: 83px !important
        }

        .owl-carousel .owl-prev.disabled,
        .owl-carousel .owl-next.disabled {
            pointer-events: none;
            opacity: 0.2;
        }

        .owl-carousel .prev-slide {
            background: url(images/nav-icon.png) no-repeat scroll 0 0;
            left: -18px;
        }

        .owl-carousel .next-slide {
            background: url(images/nav-icon3.png) no-repeat;
            right: -18px;
        }

        .owl-carousel .prev-slide:hover {
            background: url(images/nav-icon2.png) no-repeat scroll 0 0;
            left: -18px;
        }

        .owl-carousel .next-slide:hover {
            background: url(images/nav-icon4.png) no-repeat;
            right: -18px;
        }

        .testimonial_img_part {
            margin-top: 20px !important;
        }
    </style>

    <practo:abs_widget widget="e0b38d457e7af9c3" class="onli_link"></practo:abs_widget>
    <script src="https://www.practo.com/bundles/practopractoapp/js/abs_widget_helper.js"></script>

    <?php if (!empty($extraHead)) echo $extraHead; // page-specific head code (optional) 
    ?>
</head>

<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">

    <!-- Loader -->
    <div id="site-loader" class="load-complete">
        <div class="loader">
            <div class="loader-inner ball-clip-rotate">
                <div>
                </div>
            </div>
        </div>
    </div>
    <!-- Loader /- -->
    <a id="top"></a>
    <!-- Main Container (footer.php mein band hota hai) -->
    <div class="main-container">
        <!-- Header -->
        <header class="header-main">
            <!-- Top Header -->
            <div class="top-header container-fluid no-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>We take care of your smiles</p>
                        </div>
                        <div class="col-md-6 text-right">
                            <ul>
                                <li><a href="https://www.facebook.com/DentalCarenCure/" target="_blank"
                                        title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/DentalCareNCure" target="_blank" title="Twitter"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/dentalcarencure/" target="_blank"
                                        title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCIlqkg_bkS8_949GqFP74Xw" target="_blank"
                                        title="Youtube"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div><!-- Top Header /- -->

            <!-- Logo Block -->
            <div class="middle-header container-fluid no-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 logo-block pull-left">
                            <a href="index.php" title="Logo">
                                <img src="images/logo.png" alt="Logo" class="phlogo" style="width: 180px; margin-top: 5px;" />
                            </a>
                        </div>
                        <div class="col-md-9">
                            <div class="location">
                                <h3><img src="images/location-ic.png" alt="Location" /> Our Location</h3>
                                <p>
                                    1st Floor, D2, Shubham Enclave,
                                    Paschim Vihar, New Delhi
                                </p>
                            </div>
                            <div class="phone">
                                <h3><img src="images/phone-ic.png" alt="phone" />+91- 9310999214</h3>
                                <p class="nw_cls color-white">Call for consultation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Logo Block /- -->

            <!-- Navigation -->
            <nav class="navbar ow-navigation">
                <div class="container">
                    <div class="row">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="<?= navActive('home', $currentPage) ?>"><a href="index.php">Home</a></li>
                                <li class="<?= navActive('about', $currentPage) ?>"><a href="aboutus.php">About Us</a></li>

                                <li class="dropdown <?= navActive('services', $currentPage) ?>">
                                    <a class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false"
                                        href="services.php">Services</a>
                                    <i class="ddl-switch fa fa-angle-down"></i>
                                    <ul class="dropdown-menu">
                                        <li><a href="cosmetic-dentistry.php">Cosmetic Dentistry</a></li>
                                        <li><a href="dental-crowns.php">Dental Crowns and Tooth Bridges</a></li>
                                        <li><a href="dental-implant.php">Dental Implants</a></li>
                                        <li><a href="oral-surgery.php">Oral Surgery</a></li>
                                        <li><a href="orthodontics.php">Orthodontics</a></li>
                                        <li><a href="root-canal.php">Root Canals</a></li>
                                        <li><a href="smile-design.php">Smile Design</a></li>
                                        <li><a href="teeth-whitening.php">Teeth Whitening</a></li>
                                    </ul>
                                </li>

                                <li class="<?= navActive('gallery', $currentPage) ?>"><a href="smile-gallery.php">Smile Gallery </a></li>
                                <li class="<?= navActive('tour', $currentPage) ?>"><a href="Clinic-tour.php">Clinic Tour</a></li>
                                <li class="<?= navActive('implants', $currentPage) ?>"><a href="dental-implant.php">Dental Implants</a></li>

                                <li class="dropdown <?= navActive('tourism', $currentPage) ?>">
                                    <a href="#" class="dropdown-toggle" role="button" aria-haspopup="true"
                                        aria-expanded="false">Dental Tourism</a>
                                    <i class="ddl-switch fa fa-angle-down"></i>
                                    <ul class="dropdown-menu">
                                        <li><a href="dental-tour.php">Dental Tourism</a></li>
                                        <li><a href="http://dentalcarencure.com/dental-care-india/" target="_blank">Cost Benefit</a></li>
                                        <li><a href="tourist-destinations.php">Tourist Destinations</a></li>
                                        <li><a href="packing-tips.php">Packing Tips</a></li>
                                    </ul>
                                </li>

                                <li class="<?= navActive('contact', $currentPage) ?>"><a href="contact-us.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Header /- -->