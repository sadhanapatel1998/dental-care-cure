<?php
// ---- Page settings ----
$pageTitle   = "5 Secrets for Raising Cavity Free Kids! | Dental Care ‘N’ Cure | Paschim Vihar, Delhi";
$pageDesc    = "Learn 5 simple secrets for raising cavity free kids, from cleaning gums in infancy to fluoride and sealants. Tips from Dental Care 'N' Cure, Paschim Vihar, Delhi.";
$pageOgTitle = $pageTitle;
$pageCanon   = "https://dentalcarencure.com/secrets-to-cavity-free-mouth.php";
$currentPage = 'blog';

// Is page ki apni CSS (header ke <head> mein jayegi)
$extraHead = <<<'HTML'
<style type="text/css">
    li.blogul {
        margin-bottom: 20px;
    }

    body {
        background: #f8fbff !important;
    }
</style>
HTML;

// Sidebar blog links (URL abhi '#' hain, jab pages ban jayein to yahan daal dena)
$sidebarBlogs = [
    ['#', 'Secrets to cavity free mouth !'],
    ['#', 'Why to treat milk teeth!'],
    ['#', 'Oral health care in pregnancy'],
    ['#', 'Teeth cleaning vs teeth whitening'],
    ['#', 'How to prevent bad breath'],
];

include 'includes/header.php';
?>

        <!-- Page Banner -->
        <div class="page-banner blog-banner container-fluid no-padding">
            <div class="container">
                <h1 class="topheading_spacing">Secrets to cavity free mouth !</h1>
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
        <div class="container no-padding department-section">
            <div class="we-are-best col-md-9 col-sm-9 no-padding">
                <div class="section-header">
                </div>
                <div class="we-are-best-block">

                    <div class="we-are-best-content">
                        <h3>5 Secrets For Raising Cavity Free Kids!</h3>

                        <ul style="margin-left:20px;">
                            <li class="blogul"> Although most babies don't have any teeth until about six months of age, a daily cleaning in infancy will get your child accustomed to the process, and ensure clean and healthy gums when the teeth do start coming in.</li>
                            <li class="blogul">Your child's first visit to the dentist should be around his first birthday. Although baby teeth will eventually fall out, they are very important to your child's dental development and oral health. Cavity harbor bacteria which can result in more cavities. </li>
                            <li class="blogul">You need to help a child under age 6 years old do the brushing. Most children under 6 do not have the manual dexterity to do a "great job" of brushing. One great strategy if you have children who likes to do everything on their own, is to let them do it first on their own, and follow with a mommy or daddy's turn.</li>
                            <li class="blogul">Make sure your child gets the benefits of the latest in cavity prevention, including fluorides and sealants. Fluorides are applied at an interval of 6 months to ensure your child has a totally cavity free mouth.Have your dentist apply a sealant to protect the biting surfaces of your children's molars. These are generally applied when the six-year molars come in at age 6 or 7. And around 12 when the second molars erupt. Sealants are nearly 100 percent effective in preventing cavities on the biting surfaces of the back teeth, which is one of the most cavity-prone areas of the mouth. Sealants and fluoride are inexpensive ways to ensure your child has totally healthy teeth.</li>
                            <li class="blogul">Finally, the most important thing to realize is that children learn from the behavior they observe. So, in reality your dental health is just as important as your child's. When was the last time you had your dental check up and/or professional cleaning?</li>
                        </ul>

                    </div>
                </div>

            </div>

            <div class="col-md-3 col-sm-3 no-padding">
                <div class="rightblog">
                    <?php foreach ($sidebarBlogs as $blog): ?>
                    <a href="<?= $blog[0] ?>" class="bloglink"> * <?= $blog[1] ?></a>
                    <br />
                    <?php endforeach; ?>
                </div>
            </div>

        </div><!-- Departments Section /- -->

<?php include 'includes/footer.php'; ?>