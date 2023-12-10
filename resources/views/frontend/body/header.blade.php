@php
    $route = Route::current()->getName();
@endphp

<!--Header section start-->
<header class="header header-sticky">
    <div class="header-bottom menu-center">
        <div class="container">
            <span>
                {{-- <div class="translate" id="google_translate_element"></div> --}}

                <script type="text/javascript">
                    function googleTranslateElementInit() {
                        new google.translate.TranslateElement({
                            pageLanguage: 'en'
                        }, 'google_translate_element');
                    }
                </script>
                <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                </script>
            </span>

            <div class="row justify-content-between">
                <!--Logo start-->
                <div class="col mt-10 mb-10">
                    <div class="logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('frontend/assets/images/logo.png') }}"
                                alt="" width="100px" height="80px" /></a>
                    </div>
                </div>
                <!--Logo end-->

                <!--Menu start-->
                <div class="col d-none d-lg-flex">
                    <nav class="main-menu">
                        <ul>
                            <li class="{{ $route == 'home' ? 'active' : '' }}">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="{{ $route == 'celebrity.list' ? 'active' : '' }}">
                                <a href="{{ route('celebrity.list') }}">Celebrity List</a>
                            </li>
                            <li class="{{ $route == 'about' ? 'active' : '' }}">
                                <a href="{{ route('about') }}">About</a>
                            </li>
                            <li class="{{ $route == 'contact' ? 'active' : '' }}">
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                            <li class="{{ $route == 'donation' ? 'active' : '' }}">
                                <a href="{{ route('donation') }}">Donation</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--Menu end-->

                <!--User start-->
                <div class="col mr-sm-50 mr-xs-50">
                    <div class="header-user">
                        <a href="{{ route('donation') }}" class="user-toggle"><i class="pe-7s-note"></i><span>Donate
                            </span></a>
                    </div>
                </div>
                <!--User end-->
            </div>

            <!--Mobile Menu start-->
            <div class="row">
                <div class="col-12 d-flex d-lg-none">
                    <div class="mobile-menu"></div>
                </div>
            </div>
            <!--Mobile Menu end-->
        </div>
    </div>
</header>
<!--Header section end-->
