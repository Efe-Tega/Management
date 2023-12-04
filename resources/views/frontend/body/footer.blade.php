@php
    $profile = App\Models\User::find(1);
@endphp

<footer class="footer-section section" style="background-image: url(assets/images/bg/footer-bg.jpg)">
    <!--Footer Top start-->
    <div class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-60 pb-lg-40 pb-md-30 pb-sm-20 pb-xs-10">
        <div class="container">
            <div class="row row-25">
                <!--Footer Widget start-->
                <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                    <img src="assets/images/logo-footer.png" alt="" width="150px" height="60px" />
                    <p>
                        Website name's mission is to provide a best-in-class talent booking experience
                        from
                        start to
                        finish
                    </p>
                    <div class="footer-social">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="pinterest"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                </div>
                <!--Footer Widget end-->

                <!--Footer Widget start-->
                <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                    <h4 class="title">
                        <span class="text">Contact us</span><span class="shape"></span>
                    </h4>
                    <ul>
                        <li>
                            <i class="fa fa-map-o"></i><span>{{ $profile->address }}</span>
                        </li>

                        <li>
                            <i class="fa fa-envelope-o"></i><span><a href="#">
                                    {{ $profile->site_email }}
                                </a></span>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i><span><a href="#">{{ $profile->number }}</a>
                        </li>
                    </ul>
                </div>
                <!--Footer Widget end-->

                <!--Footer Widget start-->
                <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                    <h4 class="title">
                    </h4>
                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>

                    </ul>
                </div>
                <!--Footer Widget end-->

                <!--Footer Widget start-->
                <div class="footer-widget col-lg-3 col-md-6 col-12 mb-40">
                    <h4 class="title">
                        <span class="text">Newsletter</span><span class="shape"></span>
                    </h4>

                    <p>
                        Don't miss a thing! Subscribe our newsletter and get all latest news about our
                        latest promotions, offers and discount
                    </p>

                    <form id="mc-form" class="mc-form footer-newsletter">
                        <input id="mc-email" type="email" autocomplete="off" placeholder="Email Here.." />
                        <button id="mc-submit">
                            <i class="fa fa-paper-plane-o"></i>
                        </button>
                    </form>
                    <!-- mailchimp-alerts Start -->
                    <div class="mailchimp-alerts text-centre">
                        <div class="mailchimp-submitting"></div>
                        <!-- mailchimp-submitting end -->
                        <div class="mailchimp-success"></div>
                        <!-- mailchimp-success end -->
                        <div class="mailchimp-error"></div>
                        <!-- mailchimp-error end -->
                    </div>
                    <!-- mailchimp-alerts end -->
                </div>
                <!--Footer Widget end-->
            </div>
        </div>
    </div>
    <!--Footer Top end-->

    <!--Footer bottom start-->
    <div class="footer-bottom section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="copyright text-center">
                        <p>
                            Copyright &copy;2022 <a href="#">
                                CelebAura Agency
                            </a>. All rights
                            reserved.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Footer bottom end-->
</footer>
