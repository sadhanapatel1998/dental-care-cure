<?php
// ---- Page settings ----
$pageTitle   = "Can a Cracked Tooth Be Saved With a Root Canal?";
$pageDesc    = "Can a cracked tooth be saved with a root canal? Learn when root canal treatment can preserve a cracked tooth, when a crown is needed, and when extraction may be necessary.";
$pageOgTitle = $pageTitle;
$pageCanon   = "https://dentalcarencure.com/can-a-cracked-tooth-be-saved-with-a-root-canal.php";
$currentPage = 'dental-implant';

// ---- Page-specific head content: Article schema + CSS (header.php mein <head> ke andar echo hoga) ----
// NOTE: Article schema original page mein "dental implant timeline" article ka copy tha - waise hi rakha hai
$extraHead = <<<'HTML'
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "How Long Does a Dental Implant Take From Start to Finish?",
  "image": "https://dentalcarencure.com/images/dental-implant-timeline.jpg",
  "author": {
    "@type": "Organization",
    "name": "Dental Care 'N' Cure"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Dental Care 'N' Cure",
    "logo": {
      "@type": "ImageObject",
      "url": "https://dentalcarencure.com/images/logo-banner.png"
    }
  },
  "mainEntityOfPage": "https://dentalcarencure.com/how-long-does-a-dental-implant-take.php"
}
</script>

<style>
    .article-hero-img {
        max-width: 100%;
        height: auto;
        border-radius: 6px;
        display: block;
        margin: 0 auto 10px;
    }

    .article-hero-caption {
        text-align: center;
        font-style: italic;
        color: #777;
        font-size: 14px;
        margin-bottom: 25px;
    }

    .we-are-best-content ul {
        margin-left: 20px;
    }

    .article-cta {
        margin-top: 10px;
    }
</style>
HTML;

// ---- Article sections ----
// Content blocks: string = <p> | ['h3' => '...'] = sub-heading | ['lead' => '...', 'items' => [...]] = <ul> list
$sections = [
    [
        'title'   => 'What Types of Cracks Can a Tooth Have?',
        'content' => [
            'Before deciding on cracked tooth treatment, your dentist needs to identify the type and extent of the crack. Different types can require completely different approaches.',
            ['h3' => 'Craze Lines'],
            'Craze lines are tiny cracks limited to the enamel. The <strong>AAE</strong> describes them as extremely common in adult teeth and generally not a cause for concern beyond appearance. They usually do not require <strong>root canal treatment. </strong>',
            ['h3' => 'Fractured Cusp'],
            'A fractured cusp occurs when part of the chewing surface breaks away. It can happen around an existing filling and often does not seriously affect the pulp. Depending on the damage, a dentist may restore the tooth with a filling or crown. ',
            ['h3' => 'Cracked Tooth'],
            'A true cracked tooth typically has a crack that extends from the chewing surface toward the root without completely separating the tooth into pieces. If the crack reaches the pulp, bacteria can enter and cause inflammation or infection.',
            'This is where a cracked tooth root canal may become appropriate. The <strong>AAE</strong> notes that early diagnosis is important because an untreated crack can progress. ',
            ['h3' => 'Split Tooth or Vertical Root Fracture'],
            'A split tooth has developed into separate segments, while a vertical root fracture begins in the root and can extend toward the chewing surface. These conditions can be much more difficult to treat.',
            'The treatment depends on the location and extent of the fracture. Some <strong>vertical root fractures require extraction,</strong> although selected cases may have other treatment possibilities. ',
            '<strong>Also Read:</strong> <a href="https://dentalcarencure.com/signs-you-may-need-a-root-canal.php">How Do You Know If You Need a Root Canal? 10 Warning Signs</a>',
        ],
    ],
    [
        'title'   => 'What Are the Symptoms of a Cracked Tooth?',
        'content' => [
            'Cracked tooth symptoms are not always obvious. In fact, the pain can come and go, which makes the problem surprisingly easy to ignore.',
            'The <strong>AAE</strong> lists symptoms such as erratic pain while chewing and sudden sensitivity when the tooth encounters very hot or cold temperatures.',
            [
                'lead'  => '<strong>You may notice: </strong>',
                'items' => [
                    'Pain when biting or chewing',
                    'Pain when releasing your bite',
                    'Hot and cold sensitivity',
                    'Intermittent tooth pain',
                    'Sensitivity that seems difficult to locate',
                    'Gum tenderness around the affected tooth',
                    'Swollen gums in some cases',
                ],
            ],
            'If bacteria enter through a crack and reach the pulp, the tooth can develop inflammation or infection. <strong>Mayo Clinic</strong> notes that an untreated infected pulp can lead to an abscess and may ultimately contribute to bone loss or loss of the tooth.',
            'That is why persistent cracked tooth pain deserves a proper dental examination instead of a wait-and-see approach.',
        ],
    ],
    [
        'title'   => 'How Is a Cracked Tooth Diagnosed?',
        'content' => [
            'Diagnosing a crack can be challenging because some fractures are difficult to see, and a standard dental X-ray may not show every crack.',
            'Your dentist may perform a clinical examination and use dental imaging alongside other diagnostic methods. The dentist may also check your bite and test the tooth\'s response to temperature or other stimuli.',
            'The aim is to determine whether the problem involves the enamel, dentin, dental pulp, tooth root, periodontal ligament, or surrounding gum tissue.',
            '<strong>Mayo Clinic</strong> states that dental X-rays form part of the <strong>assessment before root canal treatment,</strong> while the <strong>AAE</strong> emphasizes that the type, location, and extent of a crack influence treatment and prognosis. ',
            'A specialist in endodontics may also be involved when the diagnosis or treatment is complex.',
        ],
    ],
    [
        'title'   => 'How Does Root Canal Treatment Save a Cracked Tooth?',
        'content' => [
            'When a crack reaches the pulp, bacteria can enter the inner part of the tooth. The dental pulp contains nerves, blood vessels, and connective tissue, so infection or inflammation there can cause significant symptoms. ',
            '<strong> During root canal treatment,</strong> the dentist or endodontist removes the diseased pulp, cleans and disinfects the pulp chamber and root canals, and seals the cleaned space. The tooth then needs an appropriate dental restoration. ',
            'For a cracked tooth, protecting the remaining tooth structure becomes especially important. The AAE explains that when a cracked tooth has pulp involvement but remains treatable, a root canal followed by a crown can help protect it.',
            '<strong> Dental Care \'N\' Cure</strong> also explains that root canal treatment involves removing inflamed or infected pulp, cleaning and disinfecting the inside of the tooth, sealing it, and restoring the tooth with a crown or filling as appropriate.',
        ],
    ],
    [
        'title'   => 'Why Is a Dental Crown Often Needed After a Root Canal?',
        'content' => [
            'A root canal treats the internal problem, but it does not make the crack disappear.',
            'A dental crown covers and protects the remaining tooth structure. Cleveland Clinic explains that crowns can restore weak, broken, or decayed teeth and are commonly used to protect root canal-treated teeth.',
            'For a cracked tooth, your dentist will consider how much healthy tooth remains and where the crack sits before deciding whether a crown is suitable.',
            '<strong>This is an important point:</strong> root canal treatment and cracked tooth repair are not necessarily the same thing. The root canal addresses the pulp; the restoration addresses the tooth\'s structural needs.',
        ],
    ],
    [
        'title'   => 'When Can a Cracked Tooth Not Be Saved?',
        'content' => [
            'Unfortunately, some cracks go too far for predictable restoration.',
            'If a crack extends below the gum line, the AAE states that the tooth is no longer treatable and will need extraction. A split tooth also cannot be saved intact, although treatment may sometimes preserve part of the tooth depending on the fracture. ',
            '<strong>Cleveland Clinic</strong> similarly notes that severe damage involving the root and nerves can require tooth extraction, followed by replacement options such as a bridge or dental implant.',
            'If extraction becomes necessary, patients may later discuss replacement options such as <a href="https://dentalcarencure.com/dental-implant-treatment-in-paschim-vihar.php">Dental Implant treatment in Paschim Vihar.</a> The appropriate option depends on the location of the missing tooth, bone condition, overall oral health, and treatment goals.',
        ],
    ],
    [
        'title'   => 'Root Canal or Extraction: Which Comes First?',
        'content' => [
            'The answer depends on whether the tooth remains restorable.',
            'When a natural tooth can be predictably treated and restored, preserving it may avoid the additional treatment needed to replace an extracted tooth. The AAE explains that endodontic treatment can allow patients to retain their natural tooth rather than proceeding directly to extraction. ',
            'However, saving every cracked tooth is not possible. A dentist should assess the fracture before recommending treatment.',
            'If you are searching for the <a href="https://dentalcarencure.com/best-dental-clinic-in-delhi.php">Best dental clinic in Delhi,</a> look for a practice that can properly diagnose the problem and explain why a particular treatment is appropriate for your tooth. At Dental Care \'N\' Cure, the clinic lists root canals, dental crowns and tooth bridges, oral surgery, and dental implants among its services. ',
        ],
    ],
    [
        'title'   => 'What Should You Do If You Think You Have a Cracked Tooth?',
        'content' => [
            'Do not keep chewing on a painful cracked tooth and hope it sorts itself out. Teeth are many things, but self-repairing machinery is not one of them.',
            'Arrange a dental examination, particularly if you have persistent pain, sensitivity, swelling, or pain when biting. Early assessment can help determine whether the tooth needs a filling, crown, root canal therapy, or extraction.',
            'Avoid chewing hard foods on the affected side until you receive professional advice. Your dentist can then determine the safest treatment based on the crack\'s location and extent.',
            'At <strong>Dental Care \'N\' Cure,</strong> patients can discuss their symptoms and receive an examination to determine the condition of the affected tooth and appropriate treatment options. The clinic is located at 1st Floor, D2, Shubham Enclave, Paschim Vihar, New Delhi, and lists root canal treatment among its dental services. ',
        ],
    ],
    [
        'title'   => 'Final Thoughts',
        'content' => [
            'So, can a cracked tooth be saved with a root canal? In many treatable cases, yes—but only when the tooth has enough healthy structure to support restoration and the crack has not extended into a non-restorable area.',
            'A root canal can remove infected or inflamed dental pulp, while a suitable restoration such as a crown can help protect the remaining tooth. But if the crack extends below the gum line or the tooth has split extensively, extraction may be necessary. ',
            'If you have symptoms of a cracked tooth, <a href="https://dentalcarencure.com/contact-us.php">contact Dental Care \'N\' Cure</a> for an assessment rather than trying to decide from symptoms alone. A proper diagnosis can show whether root canal treatment is suitable or whether another form of cracked tooth treatment would be more appropriate.',
        ],
    ],
];

include 'includes/header.php';
?>

        <!-- Page Banner -->
        <div class="page-banner services-banner container-fluid no-padding">
            <!-- Container -->
            <div class="container">
                <h2>Can a Cracked Tooth Be Saved With a Root Canal?</h2>
                <!-- <p>A step-by-step look at the dental implant timeline, from consultation and placement to healing
                    and the final crown.</p> -->
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

        <!-- Departments Section -->
        <div class="container-fluid no-padding department-section">
            <div class="we-are-best col-md-12 col-sm-12 no-padding">
                <div class="section-header " style="margin-top: 30px;">
                    <h1>Can a Cracked Tooth Be Saved With Root Canal Treatment? </h1>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="we-are-best-block">
                            <div class="we-are-best-content">
                                <p>If you have a cracked tooth, the first question is usually simple: <strong>can a
                                        cracked tooth be saved with a root canal?</strong> Sometimes, yes. But a root
                                    canal cannot repair the crack itself. It treats damage or infection inside the
                                    tooth, while the remaining tooth structure must still be strong enough to restore
                                    and protect.</p>
                                <p>If you are considering root canal treatment, a dentist needs to examine the crack,
                                    assess the dental pulp and tooth root, and determine how far the fracture extends.
                                    <strong>At Dental Care 'N' Cure in Paschim Vihar,</strong> treatment planning starts
                                    with understanding the condition of the individual tooth rather than assuming every
                                    cracked tooth needs the same treatment. The clinic provides root canal treatment and
                                    other restorative dental services.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-5">
                        <div class="we-are-best-block">
                            <div class="we-are-best-content">
                                <img src="images/can-a-cracked-tooth-be-saved-with-a-root-canal.jpg"
                                    alt="Root canal treatment for a cracked tooth with dental crown restoration"
                                    class="article-hero-img img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-7">
                        <div class="we-are-best-block">
                            <h2 class="padding-r-90">Can a Cracked Tooth Be Saved With a Root Canal?</h2>
                            <div class="we-are-best-content">
                                <p>A cracked tooth may be saved with root canal therapy when the crack has reached the
                                    dental pulp, but the tooth remains restorable. The <strong>American Association of
                                        Endodontists (AAE)</strong> explains that when a crack extends into the pulp,
                                    <strong>root canal
                                        treatment </strong>followed by a crown can protect the tooth from further
                                    damage. However, if
                                    the crack extends below the gum line, the tooth generally cannot be saved.
                                </p>
                                <p>This distinction matters because not every crack means the same thing. A tiny line in
                                    the enamel is very different from a fracture running deep toward the root.
                                </p>
                                <p>A <strong>root canal removes inflamed or infected pulp from inside the
                                        tooth,</strong> cleans and
                                    disinfects the root canal system, and seals it. The dentist can then restore the
                                    tooth, often with a dental crown when appropriate.
                                </p>
                                <p>So, the goal is not to glue a cracked tooth back together. Think of a root canal as
                                    treating the problem inside the tooth while the final restoration helps protect the
                                    remaining structure.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php foreach ($sections as $section): ?>
                <div class="we-are-best-block">
                    <div class="we-are-best-content">
                        <h2><?= $section['title'] ?></h2>
                        <?php foreach ($section['content'] as $block): ?>
                        <?php if (is_array($block) && isset($block['h3'])): ?>
                        <h3 style="margin-top: 15px;"><?= $block['h3'] ?></h3>
                        <?php elseif (is_array($block)): ?>
                        <ul>
                            <p><?= $block['lead'] ?></p>
                            <?php foreach ($block['items'] as $li): ?>
                            <li>
                                <?= $li ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                        <?php else: ?>
                        <p><?= $block ?></p>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

        </div><!-- Departments Section /- -->

<?php include 'includes/footer.php'; ?>