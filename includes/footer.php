<!-- Footer -->
        <footer class="footer-main container-fluid no-padding">
            <div class="container">
                <!-- Contact Detail -->
                <div class="contact-details" data-aos="fade-up">
                    <div class="col-md-4 col-sm-4 address-box detail-box">
                        <i><img src="images/ftr-location.png" alt="Loactaion" /></i>
                        <h4>Dental Care 'N' Cure </h4>
                        <p>1st Floor, D2, Shubham Enclave,</p>
                        <p>Paschim Vihar, New Delhi - 110063</p>
                    </div>
                    <div class="col-md-4 col-sm-4 phone-box detail-box">
                        <i><img src="images/ftr-phone.png" alt="Phone" /></i>
                        <h4>Phone</h4>
                        <p>Mobile: <a href="tel:+919310999214">+91-9310999214</a></p>
                        <p>Landline: <a href="tel:+911147082337">011-47082337</a></p>
                    </div>
                    <div class="col-md-4 col-sm-4 mail-box detail-box">
                        <i><img src="images/ftr-email.png" alt="Email" /></i>
                        <h4>Email:</h4>
                        <p><a href="mailto:info@dentalcarencure.com">info@dentalcarencure.com </a></p>
                        <p><a href="mailto:drmansiarora@gmail.com">drmansiarora@gmail.com </a></p>
                    </div>
                </div><!-- Contact Detail /- -->

                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <aside class="widget widget-about">
                            <h3><img src="images/logo.png" alt="Logo" width="150px" style="text-align:center;" /></h3>
                            <p>The clinic is headed by Dr Mansi Arora Punia, who is a prosthodontist and implantologist
                                with more than 20+ years of clinical experience. </p>
                            <div class="time-schedule">
                                <p>Monday - Saturday <span>10.00 am - 8.00pm</span></p>
                                <p>Sunday <span>Closed</span></p>
                            </div>
                        </aside>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <aside class="widget widget-links">
                            <h3 class="widget-title">Our Services</h3>
                            <ul>
                                <li><a href="cosmetic-dentistry.php" title=" Cosmetic Dentistry">Cosmetic Dentistry</a></li>
                                <li><a href="dental-crowns.php" title="Dental Crowns and Tooth Bridges">Dental Crowns &amp; Tooth Bridges </a></li>
                                <li><a href="dental-implant.php" title="Dental Implants">Dental Implants</a></li>
                                <li><a href="oral-surgery.php" title="Oral Surgery">Oral Surgery</a></li>
                                <li><a href="orthodontics.php" title="Orthodontics">Orthodontics</a></li>
                                <li><a href="root-canal.php" title="Root Canals">Root Canals</a></li>
                                <li><a href="smile-design.php" title="Smile Design">Smile Design</a></li>
                                <li><a href="teeth-whitening.php">Teeth Whitening</a></li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <aside class="widget widget-newsletter">
                            <h3 class="widget-title">Newsletter</h3>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="fa fa-send-o"></i></button>
                                </span>
                            </div>
                            <div class="social">
                                <h6>Stay Connected</h6>
                                <ul>
                                    <li><a href="https://www.facebook.com/DentalCarenCure/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/DentalCareNCure" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/dentalcarencure/" target="_blank" title="insta"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCIlqkg_bkS8_949GqFP74Xw" target="_blank" title="youtube"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="container-fluid no-padding bottom-footer">
                <p>&copy; <?= date('Y') ?> Dental Care &amp; Cure. All Rights Reserved.</p>
            </div><!-- Bottom Footer /- -->
        </footer>
        <!-- Footer /- -->

        <!-- Contact Modals (original mein 8 same modals the: myModal, myModal1 ... myModal7) -->
        <?php
        $modalIds = ['myModal', 'myModal1', 'myModal2', 'myModal3', 'myModal4', 'myModal5', 'myModal6', 'myModal7'];
        foreach ($modalIds as $modalId): ?>
        <div id="<?= $modalId ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">DR. MANSI ARORA PUNIA</h4>
                    </div>
                    <div class="modal-body">
                        <p>CEO &amp; Co-Founder of "Dental Care 'N' Cure"</p>
                        <p style="font-size: 20px;">Mobile: + 91- 9310999214</p>
                        <p style="font-size: 20px;"><a href="mailto:drmansiarora@gmail.com">drmansiarora@gmail.com </a></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <div class="addapp">
            <a href="https://play.google.com/store/apps/details?id=maco21.doctorplus&hl=en" target="_blank"><img
                    src="images/googlePlay.gif"> </a>
        </div>
    </div><!-- /main-container -->

    <!-- Common Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="owl.carousel.js"></script>
    <script src="libraries/modernizr/modernizr.js"></script>
    <script src="libraries/bootstrap/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="libraries/appear/jquery.appear.js"></script>
    <script src="libraries/owl-carousel/owl.carousel.min.js"></script>
    <script src="libraries/number/jquery.animateNumber.min.js"></script>
    <script src="libraries/isotope/isotope.pkgd.min.js"></script>
    <script src="libraries/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/functions.js"></script>
    <script src="developer/js/sendmails.js" type="text/javascript"></script>
    <script src="js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="js/animationscript.js" type="text/javascript"></script>

    <!-- Page-specific scripts (har page apna $extraScripts bhej sakta hai) -->
    <?php if (!empty($extraScripts)) echo $extraScripts; ?>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WXFMHMFJ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

</body>

</html>