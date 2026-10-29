<?php
// ---- Page settings ----
$pageTitle   = "About Us | Dental Care ‘n’ Cure";
$pageDesc    = "One stop dental shop for all, family dental clinic for oral health problems. Dental Care 'N' Cure center comprises of experienced & qualified dental surgeons.";
$pageOgTitle = $pageTitle;
$pageCanon   = "https://dentalcarencure.com/aboutus.php";
$currentPage = 'about';

// ---- Page-specific JS (appointment form ka datepicker) ----
$extraScripts = <<<'HTML'
<script type="text/javascript">
    $(document).ready(function () {
        var nowDate = new Date();
        var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
        $('#date').datepicker({
            minDate: today
        });
    });
</script>
HTML;

// ---- Doctors (modal IDs footer.php ke modals se match karte hain) ----
$doctors = [
    ['images/doctor-1.jpg', 'doctor-1', 'DR. MANSI ARORA PUNIA',         'CEO &amp; Co-Founder "Dental Care \'N\' Cure"', 'myModal',  'myModal1'],
    ['images/doctor-4.jpg', 'doctor-1', 'Dr. JYOTI ACHARYA ANAND (BDS)', 'graduation from NIMS DENTAL COLLEGE',                'myModal2', 'myModal3'],
    ['images/doctor-5.jpg', 'doctor-1', 'Dr. Aditi Poddar Sharma',       'MDS Orthodontics and dentofacial orthopedics',      'myModal2', 'myModal3'],
    ['images/doctor-2.jpg', 'doctor-2', 'DR. RUPALI KALSI',              'BDS(GDC jaipur), MDS(CODS davangere)',              'myModal4', 'myModal5'],
    ['images/doctor-3.jpg', 'doctor-3', 'DR.ARUN SHARMA',                'BDS(MAHE ), MDS( KLE belgaum, kanataka)',           'myModal6', 'myModal7'],
];

// ---- Testimonials ----
$testimonials = [
    [
        'image' => 'images/mr-subir.jpg',
        'name'  => 'Mr. Subir jhanb',
        'org'   => 'Google USA',
        'text'  => '"Few years back I visited my family in New Delhi, I started experiencing excruciating pain in my tooth. Dr Mansi was able to accomodate me in her busy schedule and was very caring and attentive. I was able to get my tooth filling without any pain and in time. She was very considerate and gave me breaks after regular intervals to help relax my facial muscles."',
    ],
    [
        'image' => 'images/Mr-Shantonil.jpg',
        'name'  => 'Mr Shantonil Nag',
        'org'   => '',
        'text'  => '"I was looked after very personally during my visit in April 2016. Very good experience and nice ambience, something that makes you feel comfortable when you first visit the place. Friendly doctors who listen to all your queries patiently. These little things go a long way in making visits positive and satisfactory. Also, the place is easy to reach and has ample parking and is within 5 mins of a Metro Station."',
    ],
    [
        'image' => 'images/Mr-Bunny.jpg',
        'name'  => 'Mr Bunny',
        'org'   => '',
        'text'  => '"Modern clinic with all the right ingrediants. Excellent location, professional doctor and reasonable rates. I had a long running ache in the lower right side of the jaw and inspite of being afraid of medical procedures, I was more than comfortable during the whole treatment. Dr Mansi and her panel of doctors are really good when it comes to the perfect dental treatment"',
    ],
    [
        'image' => 'images/Ms-Charu.jpg',
        'name'  => 'Ms Charu Rajpal',
        'org'   => '',
        'text'  => '"Thank you very much for the care, planning, and attention to detail that you put into improving my teeth. When I first walked in, I was experiencing pain in several areas which was not addressed anywhere in my previous dental care. You sat with me and explained in detail the areas that needed immediate attention. I always felt I was in good hands and trusted your judgement and expertise all the way through the process. Its such a wonderful feeling being able to smile now and know my teeth look great. Thanks to you and your awesome team"',
    ],
];

include 'includes/header.php';
?>

        <!-- Page Banner -->
        <div class="page-banner about-banner container-fluid no-padding">
            <div class="container">
                <h1>About Us</h1>
                <p>Professional and experienced doctors who work together to make sure</p>
                <p> every visit at <b>Dental Care N Cure</b> starts and ends with a smile.</p>
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

        <!-- Who We Are -->
        <div class="container-fluid no-paddding who-we-are">
            <div class="container">
                <div class="who-we-are-block">
                    <div class="section-header">
                        <h3>About Us</h3>
                        <p>The clinic is headed by <b>Dr Mansi Arora Punia,</b> who is a prosthodontist and implantologist with more than 20+ years of clinical experience. <b>"Dental Care 'N' Cure"</b> comprises of experienced &amp; qualified professional dental surgeons from different specialties. We at <b>"Dental Care 'N' Cure" in Paschim Vihar, west delhi </b> aim to provide you quality dental care. It is a "one stop dental shop" for all your oral health problems right from single visit root canals to advanced smile makeovers, dental implants and full mouth rehabilitation's are all performed.
                            <br /><br /><br /><br />
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Who We Are /- -->

        <!-- Service Section -->
        <div id="service-section" class="container-fluid no-padding service-section service-section2">
            <div class="container">
                <div class="row">
                    <!-- Doctor Bio -->
                    <div class="col-md-8 col-sm-12 col-xs-12 service">
                        <div class="section-header">
                            <p> Dr Mansi did her graduation from Manipal College of Dental Sciences, Manglaore in 2005. there-after she did her Masters in Prosthodontics and Implantology from College of Dental Sciences, Davangere, Karnataka. She was a gold medallist in her MDS, also was a university rank holder in the Rajeev Gandhi University of Health Sciences, Bangalore. She has numerous research publications in the leading national &amp; international specialty journals. She has presented various scientific papers and posters at national level conferences.
                                <br /><br />
                                With over 20+ years of experience Dr. Mansi has a true passion for dentistry.
                                She is trained to use the most technologically advanced dental equipment's. Painless dentistry being her main motto of treatment. She makes scary dental appointments the most comfortable ones with ease, making her one of the most gentle friendly dentists around.
                                <br /><br />
                                Not only does she expertise in giving you a total smile makeover with her veneers and cosmetic crowns but she also takes care of the entire symmetry and harmony of your face and teeth, giving you the most functionally healthy smile. Attention to minor details and perfection in whatever she delivers is her main agenda of treatment.
                                <br /><br />
                                She also expertise's in replacement of missing body parts with prosthetic reconstructions. She has excelled in replacing missing eye, ear and even finger with prosthetic reconstructions. Pictures of these can be appreciated in our image gallery.
                                <br /><br />
                                The enthusiastic yet thoughtful has a keen eye for beauty and symmetry which has lead her into the world of aesthetic dentistry.
                                <strong>Registration No:Delhi Dental Council-:5947-A </strong>
                            </p>
                        </div>
                    </div>

                    <!-- Appointment Form -->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="appoinment-form">
                            <h3><img src="images/appoinment.png" alt="appoinment" />Appointment form</h3>
                            <div class="form-group col-md-12 no-padding">
                                <input type="text" id="txtname" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="form-group col-md-12 no-padding">
                                <input type="text" id="txtemail" class="form-control" placeholder="Email Address">
                            </div>
                            <div class="form-group col-md-12 no-padding">
                                <input type="text" id="txtphone" class="form-control" placeholder="Phone (optional)" />
                            </div>
                            <div class="form-group col-md-12 no-padding">
                                <input type="text" id="date" class="form-control" placeholder="Date" style="cursor:pointer; background-color:White" readonly />
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                                <textarea rows="4" id="msg" class="form-control" placeholder="Your Message (optional)"></textarea>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                                <button type="button" id="btn_submit" class="btn-submit pull-right">
                                    Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Service Section /- -->

        <!-- Team Section -->
        <div id="team-section" class="container-fluid no-paddding team-section">
            <div class="container">
                <div class="section-header">
                    <h3>meet our doctors</h3>
                    <p>Our practice prides itself on providing the very finest level of service, from a simple filling to complex
                        cosmetic dentistry.</p>
                </div>
                <div class="team-carousel">
                    <?php foreach ($doctors as $doc): ?>
                    <div class="col-md-12 team-type">
                        <img src="<?= $doc[0] ?>" alt="<?= $doc[1] ?>" />
                        <div class="member-content">
                            <div class="member-name">
                                <h6><?= $doc[2] ?></h6>
                                <p><?= $doc[3] ?></p>
                            </div>
                            <div class="member-contact">
                                <a data-toggle="modal" data-target="#<?= $doc[4] ?>"><img src="images/ftr-phone.png" alt="Phone" /></a>
                                <a data-toggle="modal" data-target="#<?= $doc[5] ?>"><img src="images/ftr-email.png" alt="Email" /></a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a title="View All Doctors" href="team.html">View All Doctors<i class="fa fa-plus"></i></a>
            </div>
        </div><!-- Team Section -->

        <!-- Testimonial Section -->
        <div id="testimonial-section" class="container-fluid no-padding testimonial-section">
            <div class="container">
                <div class="section-header">
                    <h3>What Our Patients Are Saying</h3>
                </div>
                <!-- Testimonial Carousel -->
                <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox" style="height:300px;">
                        <?php foreach ($testimonials as $i => $t): ?>
                        <div class="item<?= $i === 0 ? ' active' : '' ?>">
                            <p><?= $t['text'] ?></p>
                            <div class="testimonial_img_part">
                                <img src="<?= $t['image'] ?>" class="img-circle" alt="testimonial-thumb">
                            </div>
                            <div class="testimonial-quote">
                                <i><img src="images/quote.png" alt="quote"></i>
                                <h4><?= $t['name'] ?></h4>
                                <?php if ($t['org']): ?><p><?= $t['org'] ?></p><?php endif; ?>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <ol class="carousel-indicators">
                        <?php foreach ($testimonials as $i => $t): ?>
                        <li data-target="#testimonial-carousel" data-slide-to="<?= $i ?>" class="<?= $i === 0 ? 'active' : '' ?>"></li>
                        <?php endforeach; ?>
                    </ol>
                </div><!-- Testimonial Carousel /- -->
            </div>
        </div><!-- Testimonial Section /- -->

<?php include 'includes/footer.php'; ?>