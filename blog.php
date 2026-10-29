<?php
// ---- Page settings ----
// NOTE: original HTML mein title aur description dono khaali the - waise hi rakhe hain
$pageTitle   = "";
$pageDesc    = "";
$pageOgTitle = $pageTitle;
$pageCanon   = "https://dentalcarencure.com/blog.php";
$currentPage = 'blog';

// ---- Page-specific JS (datepicker init - original page mein tha) ----
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

// ---- Blog posts (naya post sabse upar add karein) ----
// Keys: href, image, title, date (display), datetime (<time> attribute), excerpt
// Optional 'metaClass': agar na do to default 'post-item__meta' use hota hai
$posts = [
    [
        'href'     => 'how-long-does-a-dental-implant-take.php',
        'image'    => 'images/how-long-does-a-dental-implant-take.jpg',
        'title'    => 'How Long Does a Dental Implant Take From Start to Finish?',
        'date'     => 'September 28, 2026',
        'datetime' => '2022-02-14T20:24:54+00:00',
        'excerpt'  => "If you are considering a dental implant, one of the first questions you will probably ask is: how long does a dental implant take? The honest answer is that there is no single timeline for everyone.",
    ],
    [
        'href'     => 'what-to-eat-before-a-dental-appointment.php',
        'image'    => 'images/what-to-eat-before-a-dental-appointment.jpg',
        'title'    => 'What to Eat Before a Dental Appointment: Foods to Choose & Avoid',
        'date'     => 'September 21, 2026',
        'datetime' => '2022-02-14T20:24:54+00:00',
        'excerpt'  => "If you are wondering what to eat before a dental appointment, the good news is that you usually do not need to overthink it.For a routine dental examination or cleaning, most people can eat normally unless their dentist has given different instructions.",
    ],
    [
        'href'     => 'bone-health-for-dental-implants.php',
        'image'    => 'images/bone-health-for-dental-implants.jpg',
        'title'    => 'Why Bone Health Matters Before Getting Dental Implants',
        'date'     => 'September 14 , 2026',
        'datetime' => '2022-02-14T20:24:54+00:00',
        'excerpt'  => "If you are considering dental implants, the conversation should not start and end with the replacement tooth. The foundation underneath it matters just as much. Bone health for dental implants plays an important role in determining whether an implant has enough support for proper placement and healing.",
    ],
    [
        'href'     => 'can-a-cracked-tooth-be-saved-with-a-root-canal.php',
        'image'    => 'images/can-a-cracked-tooth-be-saved-with-a-root-canal.jpg',
        'title'    => 'Can a Cracked Tooth Be Saved With Root Canal Treatment?',
        'date'     => 'September 7 , 2026',
        'datetime' => '2022-02-14T20:24:54+00:00',
        'excerpt'  => "If you have a cracked tooth, the first question is usually simple: can a cracked tooth be saved with a root canal? Sometimes, yes. But a root canal cannot repair the crack itself. It treats damage or infection inside the tooth, while the remaining tooth structure must still be strong enough to restore and protect.",
    ],
    [
        'href'     => 'best-invisalign-dentist-paschim-vihar.php',
        'image'    => 'images/blog_img4.jpg',
        'title'    => 'Best Invisalign Dentist Paschim Vihar',
        'date'     => 'March 17, 2026',
        'datetime' => '2022-02-14T20:24:54+00:00',
        'excerpt'  => "Looking for the best Invisalign dentist in Paschim Vihar? Get expert guidance, advanced clear aligner treatment, and a confident smile makeover tailored just for you.",
    ],
    [
        'href'     => 'expert-tmj-disorder-treatment-in-paschim-vihar.php',
        'image'    => 'images/blog_img5.jpg',
        'title'    => 'Expert TMJ Disorder Treatment in Paschim Vihar',
        'date'     => 'March 17, 2026',
        'datetime' => '2022-02-14T20:24:54+00:00',
        'excerpt'  => "Experiencing jaw pain, headaches, or clicking sounds while chewing? Get expert TMJ disorder treatment in Paschim Vihar with advanced diagnosis and personalized care to relieve pain and restore comfort.",
    ],
    [
        'href'     => 'invisalign-treatment-plan.php',
        'image'    => 'images/invisalign-treatment-plan.jpg',
        'title'    => 'Invisalign treatment plan',
        'date'     => 'March 27, 2026',
        'datetime' => '2022-02-14T20:24:54+00:00',
        'excerpt'  => "An Invisalign treatment plan is a customized process designed to straighten your teeth using clear, removable aligners. The treatment begins with a detailed dental examination and digital scan of your teeth to create a precise 3D model.",
    ],
    [
        'href'     => 'is-smile-makeover-permanent-how-long-does-it-last.php',
        'image'    => 'images/is-smile-makeover-permanent-how-long-does-it-last.jpg',
        'title'    => 'Is Smile Makeover Permanent? Duration, Results & Longevity Explained',
        'date'     => 'March 27, 2026',
        'datetime' => '2022-02-14T20:24:54+00:00',
        'excerpt'  => "A smile makeover can dramatically improve the appearance of your teeth using treatments like veneers, teeth whitening, dental crowns, or orthodontics. While some procedures provide long-lasting or permanent results, the overall longevity of a smile makeover depends on the type of treatment, oral hygiene, and lifestyle habits.",
    ],
    [
        'href'     => 'dental-care-in-india-for-usa-patients.php',
        'image'    => 'images/dental-care-in-india-for-usa-patients1.jpg',
        'title'    => 'Dental Care in India for USA Patients, NRIs & Tourists',
        'date'     => 'April 22, 2026',
        'datetime' => '2022-02-14T20:24:54+00:00',
        'excerpt'  => "Dental care in India offers high-quality and cost-effective treatments for USA patients, NRIs, and international tourists. From routine check-ups and teeth whitening to advanced procedures like dental implants, crowns, and full smile makeovers, patients receive world-class care.",
    ],
    [
        'href'     => 'types-of-teeth-and-their-functions.php',
        'image'    => 'images/types-of-teeth-and-their-functions.jpg',
        'title'    => '4 Types of Teeth & Their Functions',
        'date'     => 'April 22, 2026',
        'datetime' => '2022-02-14T20:24:54+00:00',
        'excerpt'  => "The human mouth contains four main types of teeth, each designed for a specific function in the chewing process. Incisors are sharp and used for cutting food, while canines help in tearing tougher items.Premolars assist in crushing and grinding, and molars perform the main task of grinding food into smaller pieces for easy digestion.",
    ],
    [
        'href'     => 'how-to-choose-dental-clinic-for-international-patients.php',
        'image'    => 'images/how-to-choose-dental-clinic-for-international-patients.jpg',
        'title'    => 'How to Choose the Best Dental Clinic for International Patients Traveling Abroad',
        'date'     => 'May 07, 2026',
        'datetime' => '2022-02-14T20:24:54+00:00',
        'excerpt'  => "Choosing the best dental clinic abroad requires careful research to ensure safe, affordable, and high-quality treatment. Patients should check the clinic’s certifications, dentist experience, and advanced technology like digital scans and modern equipment. Reading verified reviews, comparing treatment plans, and confirming hygiene standards can also help avoid risks and ensure better long-term results.",
    ],
    [
        'href'     => 'first-dental-appointment-delhi-preparation-what-to-expect.php',
        'image'    => 'images/first-dental-appointment-delhi-preparation-what-to-expect.png',
        'title'    => 'How to Prepare for the First Dental Appointment in Delhi – Here’s What to Expect',
        'date'     => 'May 17, 2026',
        'datetime' => '2022-02-14T20:24:54+00:00',
        'excerpt'  => "Your first dental appointment in Delhi usually includes a complete oral checkup to examine teeth and gums properly. Dentists may suggest X-rays to detect hidden issues, while professional cleaning helps remove plaque and stains. Patients should share medical history and discuss concerns openly to receive suitable treatment and maintain better oral health.",
    ],
    [
        'href'      => 'can-tmj-disorder-cause-headaches-and-migraines.php',
        'image'     => 'images/tmj-disorder-headaches-migraines-dental-care-n-cure.jpg.jpeg',
        'title'     => 'Can TMJ Disorder Cause Headaches and Migraines? ',
        'date'      => 'July 14, 2026',
        'datetime'  => '2022-02-14T20:24:54+00:00',
        'metaClass' => 'post-item_meta',
        'excerpt'   => "TMJ disorder, headaches and migraines are more connected than most people realize. Many patients keep treating headaches for years without knowing the real root cause is in the jaw joint. At Dental Care 'N' Cure, we often see patients walking in suffering from chronic headaches, only to discover that the real issue is related to the temporomandibular joint disorder (TMJ).",
    ],
    [
        'href'      => 'why-do-teeth-wear-down.php',
        'image'     => 'images/why-do-teeth-wear-down-causes-symptoms-prevention-dental-care-n-cure.jpg.jpeg',
        'title'     => 'Why Do Teeth Wear Down? ',
        'date'      => 'July 15, 2026',
        'datetime'  => '2022-02-14T20:24:54+00:00',
        'metaClass' => 'post-item_meta',
        'excerpt'   => "If you have ever looked in the mirror and thought your teeth look shorter than before, you are not imagining things. Many people searching for why do teeth wear down are actually noticing early signs of enamel loss or bite-related stress.",
    ],
    [
        'href'      => 'can-you-eat-after-getting-a-crown.php',
        'image'     => 'images/can-you-eat-after-getting-a-crown.jpg',
        'title'     => 'Can You Eat After Getting a Crown? What to Eat, When to Eat & Foods to Avoid',
        'date'      => 'August 21, 2026',
        'datetime'  => '2022-02-14T20:24:54+00:00',
        'metaClass' => 'post-item_meta',
        'excerpt'   => "Getting a dental crown can make a damaged tooth feel protected again, but one question often comes immediately after the appointment: can you eat after getting a crown?",
    ],
    [
        'href'      => 'dental-implant-vs-dental-bridge.php',
        'image'     => 'images/dental-implant-vs-dental-bridge.jpg',
        'title'     => 'Dental Implant vs Dental Bridge: Which Tooth Replacement Option Is Better?',
        'date'      => 'August 21, 2026',
        'datetime'  => '2022-02-14T20:24:54+00:00',
        'metaClass' => 'post-item_meta',
        'excerpt'   => "Losing a tooth can leave you with a surprisingly long list of questions. Should you replace it? Is a bridge enough? Is an implant worth the extra time?",
    ],
    [
        'href'      => 'signs-you-may-need-a-root-canal.php',
        'image'     => 'images/how-do-you-know-if-you-need-a-root-canal.jpg',
        'title'     => 'How Do You Know If You Need a Root Canal? 10 Warning Signs ',
        'date'      => 'August 21, 2026',
        'datetime'  => '2022-02-14T20:24:54+00:00',
        'metaClass' => 'post-item_meta',
        'excerpt'   => "A toothache can be hard to ignore, especially when it starts ruining your meals, keeps you awake at night, or makes you think twice before taking a sip of hot coffee.",
    ],
    [
        'href'      => 'root-canal-vs-tooth-extraction.php',
        'image'     => 'images/root-canal-vs-extraction.jpg',
        'title'     => 'Root Canal vs Tooth Extraction: Which Is Better for a Damaged Tooth?',
        'date'      => 'August 21, 2026',
        'datetime'  => '2022-02-14T20:24:54+00:00',
        'metaClass' => 'post-item_meta',
        'excerpt'   => "When a damaged tooth starts hurting, most people want the same thing: make it stop. But there can be more than one way to deal with the problem.",
    ],
    [
        'href'      => 'how-long-does-a-dental-implant-take.php',
        'image'     => 'images/dental-implant-timeline.jpg',
        'title'     => 'How Long Does a Dental Implant Take From Start to Finish?',
        'date'      => 'September 18, 2026',
        'datetime'  => '2026-09-18',
        'metaClass' => 'post-item_meta',
        'excerpt'   => "If you are considering a dental implant, one of the first questions you will probably ask is: how long does a dental implant take?",
    ],

    /* ---- Purane posts (original HTML mein commented-out the) ----
    [
        'href'     => 'secrets-to-cavity-free-mouth.php',
        'image'    => 'images/blog_img1.jpg',
        'title'    => 'Secrets to cavity free mouth !',
        'date'     => 'March 22, 2022',
        'datetime' => '2022-02-14T20:24:54+00:00',
        'excerpt'  => "Although most babies don't have any teeth until about six months of age a daily cleaning in infancy will get your child accustomed to the process...",
    ],
    [
        'href'     => '#',
        'image'    => 'images/blog_img2.jpg',
        'title'    => 'Fruit Juice Can Harm Your Teeth?',
        'date'     => 'january 14, 2022',
        'datetime' => '2022-02-14T20:24:54+00:00',
        'excerpt'  => "Is drinking fruit juice bad for your teeth? Find out how you and you children can enjoy fruit....",
    ],
    [
        'href'     => '#',
        'image'    => 'images/blog_img3.jpg',
        'title'    => 'Is Hard Seltzer Bad for Your Teeth?',
        'date'     => 'February 4, 2022',
        'datetime' => '2022-02-14T20:24:54+00:00',
        'excerpt'  => "Are hard seltzers really harmful to your teeth? Dr. Mansi Arora Punia teaches what you can do to keep your smile healthy....",
    ],
    */
];

include 'includes/header.php';
?>

		<!-- Page Banner -->
		<div class="page-banner about-banner container-fluid no-padding">
			<!-- Container -->
			<div class="container">
				<h1>Blog</h1>
				<p>Explore helpful articles, dental tips, and the latest insights from the experts at <b>Dental Care N Cure</b>.</p>
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

		<!-- Who We Are -->
		<!-- Who We Are /- -->
		<div class="container-fluid no-paddding who-we-are">
			<!-- Container -->
			<div class="container">
				<div class="who-we-are-block">
					<!-- Section Header -->
					<div class="section-header">

                        <div class="container-fluid no-paddding team-section blogbg" data-aos="fade-up">
            <div class="container">
                <div class="section-header2">
                    <h3>
                        Our Latest Blog
                    </h3>

                </div>

                <section class="posts-listing">

                    <?php foreach ($posts as $p): ?>
                    <?php $metaClass = $p['metaClass'] ?? 'post-item__meta'; ?>
                    <article class="post-item">
                        <a class="post-item__inner" href="<?= $p['href'] ?>">

                            <div class="post-item__thumbnail-wrapper">
                                <div class="post-item__thumbnail" style="background-image:url(<?= $p['image'] ?>);">
                                </div>

                            </div>

                            <div class="post-item__content-wrapper">
                                <h2 class="post-item__title heading-size-4"><span><?= $p['title'] ?></span></h2>


                                <div class="post-item__metas">
                                    <time class="<?= $metaClass ?> <?= $metaClass ?>--date"
                                        datetime="<?= $p['datetime'] ?>"><?= $p['date'] ?></time>

                                </div>

                                <div class="post-item__excerpt">
                                    <?= $p['excerpt'] ?> </div>

                                <div class="post-item__read-more-wrapper">
                                    <p class="post-item__read-more">Read more</p>
                                </div>

                            </div>

                        </a>
                    </article>
                    <?php endforeach; ?>

                </section>
            </div>
        </div>


					</div><!-- Section Header /- -->

				</div>
			</div><!-- Container /- -->
		</div>
		<!-- Service Section -->
		<div id="service-section" class="container-fluid no-padding service-section service-section2">
			<!-- Container -->
			<div class="container">
				<!-- Row -->
				<div class="row">
					<!-- Service -->


		  <!-- Team Section -->
		  <div id="team-section" class="container-fluid no-paddding team-section">

		</div><!-- Team Section -->

		<!-- Call Out -->
		<!-- Call Out /- -->

		<!-- Testimonial Section -->

		<!-- Testimonial Section /- -->

<?php include 'includes/footer.php'; ?>