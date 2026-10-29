<?php
// ---- Page settings ----
$pageTitle   = "Best Dental Clinic in Paschim Vihar, Delhi - Dental Care 'N' Cure";
$pageDesc    = "Looking for the best dentist in Delhi? Our dental clinic offers expert dental care with advanced technology and personalized treatments. Book your appointment today!";
$pageOgTitle = "Best Dentist in Delhi | Dental Clinic in West Delhi - Dental Care 'N' Cure";
$pageCanon   = "https://dentalcarencure.com";
$currentPage = 'home';

// ---- Page-specific JS (footer.php isko print karega) ----
$extraScripts = <<<'HTML'
<script type="text/javascript">
    $(document).ready(function () {
        var nowDate = new Date();
        var today = new Date(nowDate.getFullYear(), nowDate.getMonth(), nowDate.getDate(), 0, 0, 0, 0);
        $('#date').datepicker({
            minDate: today
        });
        $('.practo_abs_widget_button').click(function () {
            if ($(window).width() < 500) {
                setTimeout(function () {
                    $('iframe').addClass('SmallScreen');
                    $("iframe.SmallScreen").contents().find(".widget_logo").css('text-align', 'left');
                    $("iframe.SmallScreen").contents().find(".clinic_name").css({ 'width': '265px', 'font-size': '13px' });
                }, 5000);
            }
        });

        $('.owl-carousel').owlCarousel({
            autoplay: false,
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: { items: 1, nav: true },
                600: { items: 1, nav: false },
                1000: {
                    items: 2,
                    nav: true,
                    navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
                    loop: true,
                    margin: 10
                }
            }
        });
    });
    $(window).load(function () {
        $('.practo_abs_widget_button').css({ 'width': '228px', 'padding': '0' });
        $('.practo_abs_widget_button:after').css({ 'width': '228px', 'padding-left': '48px', 'padding-right': '20px' });
    });
</script>
HTML;

include 'includes/header.php';

?>



        <!-- Banner Section -->
        <div id="home-banner" class="container-fluid no-padding banner-section home-banner">
            <div class="container">
                <div id="main-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="col-md-6 col-sm-6 no-padding">
                                <div class="banner-left">
                                    <h3>"Beautiful Smiles Begin Here "</h3>
                                    <p>Dr Mansi Arora Punia CEO &amp; Co-Founder "Dental Care 'N' Cure"</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 no-padding">
                                <div class="banner-right">
                                    <img src="images/banner-main4-min.jpg" alt="banner-main" />
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-6 col-sm-6 no-padding">
                                <div class="banner-left">
                                    <span>Affordable Dental Clinic in Paschim Vihar, New Delhi | Best Emergency Dentist
                                        in Paschim Vihar</span>
                                    <h3>How Can we help with your dental concern.</h3>
                                    <p>A Glamourous Smile, A Sensational New Life with Shine Dental Care 'N' Cure</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 no-padding">
                                <div class="banner-right">
                                    <img src="images/banner-main3.png" alt="banner-main" />
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-md-6 col-sm-6 no-padding">
                                <div class="banner-left">
                                    <h3>Certified Dental Practitioners with years of experience in dentisity</h3>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 no-padding">
                                <div class="banner-right">
                                    <img src="images/banner-main2.png" alt="banner-main" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
            </div>
        </div>
        <!-- Banner Section /- -->

        <!-- Message Board -->
        <div id="message-borad" class="container-fluid no-padding message-borad">
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-sm-6 opening-hours" data-aos="fade-left">
                        <div id="testimonial-section" class="container-fluid no-padding testimonial-section">
                            <div class="section-header">
                                <h2 style="color:#fff;">What Our Patients Are Saying</h2>
                            </div>
                            <!-- Testimonial Carousel -->
                            <div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner" role="listbox" style="height: 390px;">
                                    <div class="item active">
                                        <p>
                                            "Dr Mansi Arora and her team at Dental Care n Cure clinic are beyond
                                            amazing! The clinic is taking all necessary precautions and follow all SOPs
                                            for COVID 19 . The appointments are slotted in such a way that there will be
                                            no 2 patients at one given time. The enforces the COVID 19 protocols.
                                            Dr Arora is extremely professional yet friendly and was attentive to my
                                            dental issues. She was thorough in explaining the procedures and calmly
                                            answered all my queries. She gave me best advice for my dental problems. Due
                                            to her steady hand and attention to details during the procedure, I always
                                            felt at ease at the dentist's chair.
                                            She even called and enquired about well being of me &amp; my family when I was
                                            quarantined due to COVID 19. She would also intermittently ask if there is
                                            any extreme pain during the treatment. Her empathetic nature was also one of
                                            the reasons I was confident enough to get treated for all my ailing teeth at
                                            her clinic. I went through 3 RCTs with crowns and 1 tooth filling in matter
                                            of 2 months due to the same.
                                            Also the rates for the clinical procedures and crowns are at par with the
                                            other top class dentists in the area. She will only recommend the best and
                                            won't pursue you to spend extra and unnecessary money on dental procedures.
                                            It took me a while to find a doctor that made me feel comfortable and
                                            welcomed. I wish she was my general physician as well ! Good Luck !
                                            Regards... Shashwat"
                                        </p>
                                        <div class="testimonial_img_part">
                                            <img src="images/user_icons.jpg" class="img-circle" alt="testimonial-thumb">
                                        </div>
                                        <div class="testimonial-quote">
                                            <h4>Mr Unnati Shashwat Khare</h4>
                                            <p></p>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <p>
                                            "First thing first I visited the clinic Dental Care &amp; Cure &amp; didn't have to
                                            wait. Had an appointment &amp; was attended on time no waiting. The doctor (Dr.
                                            Mansi) really explained me pretty good what was the problem, what was the
                                            treatment, time involved &amp; if any problem would be there then what it would
                                            be.
                                            Gave me a confidence that the doctor knew very well what she was doing. I
                                            had assumed that it would be quite painful procedure but contrary to that
                                            the only pain i felt was the prick of the Needle of the injection given for
                                            local an aesthetic. After that the doctor was reading my face &amp; every time i
                                            felt uncomfortable she would just stop &amp; wait for me to relax.
                                            At the end of the procedure she told me that i will feel pain &amp; she
                                            prescribed me some pain killers too. I was really surprised when i got no
                                            pain at all. First I felt maybe i was a bit sensitive (a tea spoon of cough
                                            syrup keeps me drowsy for 2 days) so local anesthetic stayed longer. Slept
                                            well &amp; when i woke up there was no pain at all. This was truly amazing. Only
                                            thing that kept me aware that I had an R.C.T. was the feeling of dressing
                                            when i closed my teeth shut.
                                            I went back to the clinic at the time doctor had asked me to come. The
                                            permanent filling was done &amp; there has been no problem ever since.
                                            I seriously don't wish to have a dental problem again but if God forbid I
                                            ever have I won't be opting for any doctor other then Dr. Mansi &amp; her clinic
                                            "Dental Care &amp; Cure."
                                        </p>
                                        <div class="testimonial_img_part">
                                            <img src="images/user_icons.jpg" class="img-circle" alt="testimonial-thumb">
                                        </div>
                                        <div class="testimonial-quote">
                                            <h4>Mr Manish Bhardwaj</h4>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <p>
                                            "I didn’t smile for last 17 years or so. And I didn’t expect if anyone could
                                            fix it. I lost one of my insular tooth (not sure if that’s the word used for
                                            the front tooth) and nobody could fix it. But I guess my in-acceptance of
                                            even thinking that I could smile in a better way was proven wrong. And guess
                                            what? Dr. Mansi proved me wrong.
                                            I went to her with faded hope and first thing first, I have never seen a
                                            doctor so welcoming and investing time into understanding why I had no hopes
                                            of smiling freely again. She advised me of the tooth implant and how the
                                            implant would work but then I insisted on getting a cap in place. She didn’t
                                            deny * ** * * * * ** ** * **** Money absolutely is not what I was concerned
                                            about having received such admirable concern and eye to detail to correct
                                            the aesthetics which I believed even God would not fix. But she did it. Now
                                            I smile more comfortably though am yet to drain out my subconscious style of
                                            smiling that made me think I was ugliest one in the world. And thanks to you
                                            Doctor. I can very well guarantee that there is not a single doctor who
                                            would understand the pain of the patient the way she does. Medical ailment
                                            is all about experience - and my treatment was not less than an experience
                                            that I would not forget in my life.
                                            Thank you for making me smile again Doctor. I owe it to you, am more
                                            confident now and you’re the only one who should be credited with this.
                                            With love!"
                                        </p>
                                        <div class="testimonial_img_part">
                                            <img src="images/user_icons.jpg" class="img-circle" alt="testimonial-thumb">
                                        </div>
                                        <div class="testimonial-quote">
                                            <h4>Mr Avi Anand</h4>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <p>
                                            "Dr Mansi Ma'am is beyond perfect!! I had various problems like SENSITIVITY,
                                            cavity, which I had ignored over the years &amp; had worsened it. She suggested
                                            me ROOT CANAL of one tooth, filing in another tooth &amp; extraction of 2 wisdom
                                            teeth. The way she completed my procedure is like a dream!! The entire
                                            procedure was painless. She has taken out the fear of dentist from me. The
                                            entire staff at the clinic is very friendly. They maintain proper hygiene.
                                            Everyone at the clinic treated me with patience &amp; utmost care &amp; respect. No
                                            second thoughts on visiting Dr Mansi Ma'am's clinic for any dental problems.
                                            I can trust her blindly.!!"
                                        </p>
                                        <div class="testimonial_img_part">
                                            <img src="images/user_icons.jpg" class="img-circle" alt="testimonial-thumb">
                                        </div>
                                        <div class="testimonial-quote">
                                            <h4>CA Deepti Malik Sidana</h4>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <p>
                                            "I was in very bad condition and suffering from acute pain for 1 month
                                            because my RCT (root canal treatment) was ill-treated by some other dental
                                            surgeon. After founding good google reviews, met Dr Mansi. She examined the
                                            complete situation patiently and explained the next course of treatment. She
                                            has re-treated my RCT and in 3 sessions she cured my pain and filled the
                                            roots very professionally. She further examined my complete teeth and
                                            informed well in advance, possibility of cavity formation at three places.
                                            Out of 2 fillings one was very tricky and complicated (below the gums) for
                                            which she used the laser. She handled overall treatment in a very
                                            professional manner with minimum pain and fast recovery. The quality of
                                            crowns which were fixed after RCT was excellent and adjusted immediately.
                                            The clinic is wonderful and waiting time is nil with proper appointment. Dr
                                            Mansi is very soft-spoken and shows patience with patients. She further
                                            suggested cleaning of teeth which was done by Dr Jyoti with complete care
                                            and without any pain.

                                            I found both Dr Mansi and Dr Jyoti very professional and cooperative and I
                                            have no hesitation to recommend both of them."
                                        </p>
                                        <div class="testimonial_img_part">
                                            <img src="images/user_icons.jpg" class="img-circle" alt="testimonial-thumb">
                                        </div>
                                        <div class="testimonial-quote">
                                            <h4>Mr Rajesh</h4>
                                        </div>
                                    </div>
                                </div>
                                <ol class="carousel-indicators">
                                    <li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#testimonial-carousel" data-slide-to="1" class=""></li>
                                    <li data-target="#testimonial-carousel" data-slide-to="2" class=""></li>
                                    <li data-target="#testimonial-carousel" data-slide-to="3" class=""></li>
                                    <li data-target="#testimonial-carousel" data-slide-to="4" class=""></li>
                                </ol>
                            </div>
                            <!-- Testimonial Carousel /- -->
                        </div>
                    </div>

                    <!-- Appointment Form -->
                    <div class="col-md-4 col-sm-12 col-xs-12 col-md-offset-1" data-aos="fade-right">
                        <div class="appoinment-form">
                            <h3><img src="images/appoinment.png" alt="appoinment" />Appointment form</h3>
                            <div class="form-group col-md-12 no-padding">
                                <input type="text" id="txtname" class="form-control" placeholder="Your Name" />
                            </div>
                            <div class="form-group col-md-12 no-padding">
                                <input type="text" id="txtemail" class="form-control" placeholder="Email Address" />
                            </div>
                            <div class="form-group col-md-12 no-padding">
                                <input type="text" id="txtphone" class="form-control" placeholder="Phone (optional)" />
                            </div>
                            <div class="form-group col-md-12 no-padding">
                                <input type="text" id="date" class="form-control" placeholder="Date"
                                    style="cursor:pointer; background-color:White" readonly />
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                                <textarea rows="4" id="msg" class="form-control"
                                    placeholder="Your Message (optional)"></textarea>
                            </div>
                            <div class="form-group col-md-12 col-sm-12 col-xs-12 no-padding">
                                <button type="button" id="btn_submit" class="btn-submit">Fix Appoint now</button>
                            </div>
                        </div>
                    </div>
                    <!-- Appointment Form /- -->
                </div>
            </div>
        </div>
        <!-- Message Board /- -->

        <!-- Service Section -->
        <div id="service-section" class="container-fluid no-padding service-section" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 service">
                        <div class="section-header">
                            <h1>Welcome to Dental Care 'N' Cure</h1>
                            <p>
                                The clinic is headed by Dr Mansi Arora Punia, who is a prosthodontist and implantologist
                                with more than 20+ years of clinical experience. "Dental Care 'N' Cure" comprises
                                of experienced &amp; qualified professional dental surgeons from different specialties.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="section-header nwCss">
                                    <h2 class="text-center">PATIENT SPEAKS</h2>
                                </div>
                                <div class="owl-carousel owl-theme">
                                    <?php
                                    $patientVideos = ['v1.mp4', 'v2.mp4', 'v3a.mp4', 'v4a.mp4'];
                                    foreach ($patientVideos as $video): ?>
                                    <div class="item">
                                        <video width="250" height="200" controls>
                                            <source src="images/<?= $video ?>" type="video/mp4">
                                        </video>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-12" data-aos="fade-left">
                                <div class="row">
                                    <?php
                                    $serviceBlocks = [
                                        ['ambulance.png',        'Modern Equipment',   'Automatic Dental Chairs, high-end Type B AutoClave etc, we have the best equipment at hand'],
                                        ['heart-ic.png',         'Qualified Doctors',  'Panel of doctors include experts and Gold Medalists in their respective fields'],
                                        ['phone.png',            'Why Us?',            'One-stop solution for dental problems with complete patient satisfaction'],
                                        ['appoinment-latter.png','online appointment', 'Don’t Delay! Book an appointment now with Dental Care \'N\' Cure'],
                                    ];
                                    foreach ($serviceBlocks as $block): ?>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="service-block">
                                            <div class="service-block-icon">
                                                <div class="what-we">
                                                    <i><img src="images/<?= $block[0] ?>"></i>
                                                </div>
                                            </div>
                                            <div class="service-block-content">
                                                <h3><?= $block[1] ?></h3>
                                                <p><?= $block[2] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Section /- -->

        <!-- Call Out -->
        <div id="call-out" class="container-fluid no-padding call-out" data-aos="fade-up">
            <div class="container">
                <div class="call-out-content row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h3>Our Services</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call Out /- -->

        <!-- What We Do Best -->
        <div id="what-we-do-best" class="container-fluid no-padding what-we-do-best">
            <div class="what-we-do-left col-md-4 no-padding">
                <img src="images/gallery/dental-clinik-view.jpg" alt="what-we-do-best" style="height:519px;">
            </div>
            <div class="col-md-8 what-we-do-right no-padding">

                <?php
                // Title block (What we do best) 5th position pe aata hai (index 4)
                $services = [
                    ['cosmetic_dentistry.jpg', 'cosmetic-dentistry.html', 'Cosmetic Dentistry'],
                    ['dental-crown.jpg',       'dental-crowns.html',      'Dental Crowns &amp; Tooth Bridges'],
                    ['dental-implant.jpg',     'dental-implant.html',     'Dental Implants'],
                    ['dental-oral.jpg',        'oral-surgery.html',       'Oral Surgery'],
                    'TITLE',
                    ['dental-ortho.jpg',       'orthodontics.html',       'Orthodontics'],
                    ['dental-root.jpg',        'root-canal.html',         'Root Canals'],
                    ['dental-smile.jpg',       'smile-design.html',       'Smile Design'],
                    ['dental-teeth-white.jpg', 'teeth-whitening.html',    'TEETH WHITENING'],
                ];
                foreach ($services as $svc):
                    if ($svc === 'TITLE'): ?>
                <div class="col-md-4 col-sm-4 col-xs-6 no-padding what-we-do-title" data-aos="zoom-in-up">
                    <div class="what-we-do-block">
                        <img src="images/what-we-do-best-block-title-bg.jpg" alt="what-we-do-best-title" />
                        <div class="what-we-do-block-content">
                            <h3>What we <br />do best</h3>
                        </div>
                    </div>
                </div>
                    <?php else: ?>
                <div class="col-md-4 col-sm-4 col-xs-6 no-padding">
                    <div class="what-we-do-block">
                        <img src="images/<?= $svc[0] ?>" alt="what-we-do-best" />
                        <div class="what-we-do-block-content">
                            <i><img src="images/pulmonary.png" alt="pulmonary" /></i>
                            <h5><a href="<?= $svc[1] ?>" title="<?= strip_tags(html_entity_decode($svc[2])) ?>"><?= $svc[2] ?></a></h5>
                        </div>
                    </div>
                </div>
                    <?php endif;
                endforeach; ?>

            </div>
        </div>
        <!-- What We Do Best /- -->

        <!-- Why Choose Us -->
        <div class="container-fluid why-section whybg">
            <div class="row">
                <div class="section-header">
                    <h3 data-aos="fade-up">WHY CHOOSE US?</h3>
                    <p class="whyp">
                        We combine the latest, most sophisticated computerized, digital, and laser technology with a
                        progressive approach to ensure the best possible dental experience for our patients.....
                    </p>
                </div>

                <div>
                    <div class="col-md-3">
                        <div class="single-features" data-aos="flip-left">
                            <div class="content">
                                <div class="icon"><img src="images/why_icon1.png" /></div>
                                <h3><a href="services-details.html">Certified Dentist</a></h3>
                                <p>One-stop solution for dental problems with complete patient satisfaction.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-features bg-f57e57" data-aos="flip-left">
                            <div class="content">
                                <div class="icon"><img src="images/why_icon2.png" /></div>
                                <h3><a href="services-details.html">New Technology</a></h3>
                                <p>Automatic Dental Chairs, high-end Type B AutoClave etc, we have the best equipment at hand.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 offset-lg-0 offset-md-3">
                        <div class="single-features bg-4a6577" data-aos="flip-left">
                            <div class="content">
                                <div class="icon"><img src="images/why_icon3.png" /></div>
                                <h3><a href="services-details.html">Achievement</a></h3>
                                <p>Panel of doctors include experts and Gold Medalists in their respective fields.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Choose Us /- -->

        <!-- Team Section -->
        <div id="team-section" class="container-fluid no-paddding team-section" data-aos="fade-up">
            <div class="container">
                <div class="section-header2">
                    <h3>meet our doctors</h3>
                    <p style="margin: 15px 0 30px 0px;">
                        Our practice prides itself on providing the very finest level of service, from a
                        simple filling to complex cosmetic dentistry.
                    </p>
                </div>
                <div class="team-carousel">
                    <?php
                    $doctors = [
                        ['images/banner-main4.jpg',              'height:409px; width:100%',        'DR. MANSI ARORA PUNIA',             'CEO &amp; Co-Founder "Dental Care \'N\' Cure"',     'myModal',  'myModal1'],
                        ['images/doctor-4.jpg',                  '',                                'Dr. JYOTI ACHARYA ANAND (BDS)',     'graduation from NIMS DENTAL COLLEGE',                'myModal2', 'myModal3'],
                        ['images/doctor-5.jpg',                  '',                                'Dr. Aditi Poddar Sharma',           'MDS Orthodontics and dentofacial orthopedics',      'myModal2', 'myModal3'],
                        ['images/gallery/clinicTour-17.jpg',     'height: 408.6px; width: 100%;',   'DR. Akansha Grover',                'MSD Periodontist',                                  'myModal4', 'myModal5'],
                    ];
                    foreach ($doctors as $doc): ?>
                    <div class="col-md-12 team-type">
                        <img src="<?= $doc[0] ?>" alt="doctor-1"<?= $doc[1] ? ' style="' . $doc[1] . '"' : '' ?> />
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
                <a title="View All Doctors" href="team.html" data-aos="zoom-in">View All Doctors<i class="fa fa-plus"></i></a>
            </div>
        </div>
        <!-- Team Section /- -->

        <!-- Blog Section -->
        <div class="container-fluid no-paddding team-section blogbg" data-aos="fade-up">
            <div class="container">
                <div class="section-header2">
                    <h3>Our Latest Blog</h3>
                </div>

                <section class="posts-listing">
                    <?php
                    // Naya blog add karna ho to bas yahan ek entry upar daal do
                    $blogs = [
                        [
                            'url'     => 'how-long-does-a-dental-implant-take.html',
                            'image'   => 'images/how-long-does-a-dental-implant-take.jpg',
                            'title'   => 'How Long Does a Dental Implant Take From Start to Finish?',
                            'date'    => 'September 28, 2026',
                            'iso'     => '2026-09-28',
                            'excerpt' => 'If you are considering a dental implant, one of the first questions you will probably ask is: how long does a dental implant take? The honest answer is that there is no single timeline for everyone.',
                        ],
                        [
                            'url'     => 'what-to-eat-before-a-dental-appointment.html',
                            'image'   => 'images/what-to-eat-before-a-dental-appointment.jpg',
                            'title'   => 'What to Eat Before a Dental Appointment: Foods to Choose &amp; Avoid',
                            'date'    => 'September 21, 2026',
                            'iso'     => '2026-09-21',
                            'excerpt' => 'If you are wondering what to eat before a dental appointment, the good news is that you usually do not need to overthink it. For a routine dental examination or cleaning, most people can eat normally unless their dentist has given different instructions.',
                        ],
                        [
                            'url'     => 'bone-health-for-dental-implants.html',
                            'image'   => 'images/bone-health-for-dental-implants.jpg',
                            'title'   => 'Why Bone Health Matters Before Getting Dental Implants',
                            'date'    => 'September 14, 2026',
                            'iso'     => '2026-09-14',
                            'excerpt' => 'If you are considering dental implants, the conversation should not start and end with the replacement tooth. The foundation underneath it matters just as much. Bone health for dental implants plays an important role in determining whether an implant has enough support for proper placement and healing.',
                        ],
                    ];
                    foreach ($blogs as $blog): ?>
                    <article class="post-item">
                        <a class="post-item__inner" href="<?= $blog['url'] ?>">
                            <div class="post-item__thumbnail-wrapper">
                                <div class="post-item__thumbnail" style="background-image:url(<?= $blog['image'] ?>);"></div>
                            </div>
                            <div class="post-item__content-wrapper">
                                <h2 class="post-item__title heading-size-4"><span><?= $blog['title'] ?></span></h2>
                                <div class="post-item__metas">
                                    <time class="post-item__meta post-item__meta--date" datetime="<?= $blog['iso'] ?>"><?= $blog['date'] ?></time>
                                </div>
                                <div class="post-item__excerpt"><?= $blog['excerpt'] ?></div>
                                <div class="post-item__read-more-wrapper">
                                    <p class="post-item__read-more">Read more</p>
                                </div>
                            </div>
                        </a>
                    </article>
                    <?php endforeach; ?>
                </section>

                <a title="View All Blogs" href="blog.html" data-aos="zoom-in">View All Blogs<i class="fa fa-plus"></i></a>
            </div>
        </div>
        <!-- Blog Section /- -->

<?php include 'includes/footer.php'; ?>
