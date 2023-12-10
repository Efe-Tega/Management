<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
        Celebrity Booking
    </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Place favicon.ico in the root directory -->
    <link href="{{ asset('frontend/assets/images/favicon.png') }}" type="img/x-icon" rel="shortcut icon" />
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/iconfont.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/plugins.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/helper.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
    <!-- Modernizr JS -->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>

    <!-- Smartsupp Live Chat script -->
    {{-- <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '57529311363e32690e662dbbc803833eb3a57267';
        window.smartsupp || (function(d) {
            var s, c, o = smartsupp = function() {
                o._.push(arguments)
            };
            o._ = [];
            s = d.getElementsByTagName('script')[0];
            c = d.createElement('script');
            c.type = 'text/javascript';
            c.charset = 'utf-8';
            c.async = true;
            c.src = 'https://www.smartsuppchat.com/loader.js?';
            s.parentNode.insertBefore(c, s);
        })(document);
    </script> --}}


    <script>
        function loadGoogleTranslate() {
            new google.translate.TranslateElement("myid")
        }
    </script>
</head>

<body>



    <div id="main-wrapper">
        <!--Header section start-->
        @include('frontend.body.header')
        <!--Header section end-->

        @yield('main')

        <!--Footer section start-->
        @include('frontend.body.footer')
        <!--Footer section end-->
    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script
        src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM">
    </script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-migrate-1.4.1.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/map-place.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>
</body>

</html>
