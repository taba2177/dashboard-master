<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('seo.index')



  <!-- favicons Icons -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset("/assets/images/favicons/apple-touch-icon.png") }}" />
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset("/assets/images/favicons/favicon-32x32.png") }}" />
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset("/assets/images/favicons/favicon-16x16.png") }}" />
  <link rel="manifest" href="{{asset("/assets/images/favicons/site.webmanifest") }}" />

    <!-- fonts -->
    <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">



<link rel="stylesheet" href="{{ asset("/assets/vendors/bootstrap/css/bootstrap.min.css") }}" />
<link rel="stylesheet" href="{{ asset("/assets/vendors/animate/animate.min.css") }}" />
<link rel="stylesheet" href="{{ asset("/assets/vendors/animate/custom-animate.css") }}" />
<link rel="stylesheet" href="{{ asset("/assets/vendors/fontawesome/css/all.min.css") }}" />
<link rel="stylesheet" href="{{ asset("/assets/vendors/jarallax/jarallax.css") }}" />
<link rel="stylesheet" href="{{ asset("/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css") }}" />
<link rel="stylesheet" href="{{ asset("/assets/vendors/nouislider/nouislider.min.css") }}" />
<link rel="stylesheet" href="{{ asset("/assets/vendors/nouislider/nouislider.pips.css") }}" />
<link rel="stylesheet" href="{{ asset("/assets/vendors/odometer/odometer.min.css") }}" />
<link rel="stylesheet" href="{{ asset("/assets/vendors/swiper/swiper.min.css") }}" />
<link rel="stylesheet" href="{{ asset("/assets/vendors/flaticon/style.css") }}">
<link rel="stylesheet" href="{{ asset("/assets/vendors/tiny-slider/tiny-slider.min.css") }}" />
<link rel="stylesheet" href="{{ asset("/assets/vendors/reey-font/stylesheet.css") }}" />
<link rel="stylesheet" href="{{ asset("/assets/vendors/owl-carousel/owl.carousel.min.css") }}" />
<link rel="stylesheet" href="{{ asset("/assets/vendors/owl-carousel/owl.theme.default.min.css") }}" />
<link rel="stylesheet" href="{{ asset("/assets/vendors/bxslider/jquery.bxslider.css") }}" />
<link rel="stylesheet" href="{{ asset("/assets/vendors/bootstrap-select/css/bootstrap-select.min.css") }}" />
<link rel="stylesheet" href="{{ asset("/assets/vendors/vegas/vegas.min.css") }}" />
<link rel="stylesheet" href="{{ asset("/assets/vendors/jquery-ui/jquery-ui.css") }}" />
<link rel="stylesheet" href="{{ asset("/assets/vendors/timepicker/timePicker.css") }}" />
<link rel="stylesheet" href="{{ asset("/assets/vendors/polyglot-language-switcher/polyglot-language-switcher.css") }}" />
<link rel='dns-prefetch' href='http://translate.google.com/' />
<!-- template styles -->
<link rel="stylesheet" href="{{ asset("/assets/css/Battour.css") }}" />



    {!!$settings['header_code']!!}
    @livewireStyles
    @if(auth()->check())
        @php
        if(session('seen_notifications')==null)
            session(['seen_notifications'=>0]);
        $notifications=auth()->user()->notifications()->orderBy('created_at','DESC')->limit(50)->get();
        $unreadNotifications=auth()->user()->unreadNotifications()->count();
        @endphp
    @endif
    @vite('resources/css/app.css')
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <style type="text/css">
        body {
            --bg-main: #fff;
            --bg-second: #f4f4f4;
            --font-1: #333333;
            --font-2: #555555;
            --border-color: #dddddd;
            --main-color: #0194fe;
            --main-color-rgb: 1,148,254;
            --main-color-flexable: #0194fe;
            --scroll-bar-color: #d1d1d1;
        }
        body.night {
            --bg-main: #1c222b;
            --bg-second: #131923;
            --font-1: #fff;
            --font-2: #e3e3e3;
            --border-color: #33343b;
            --main-color: #0194fe;
            --main-color-rgb: 1,148,254;
            --main-color-flexable: #15202b;
            --scroll-bar-color: #505050;
        }

    </style>
    @yield('styles')
</head>
<body style="background:#eef4f5;margin-top: 65px;" class="custom-cursor">
    <style type="text/css">
        #toast-container>div {
            opacity: 1;
        }
    </style>
    @yield('after-body')
    <div id="app">
        {{-- <div class="page-loader"></div> --}}
        <div id="body-overlay"onclick="document.getElementById('aside-menu').classList.toggle('active');document.getElementById('body-overlay').classList.toggle('active');"></div>
        <x-navbar />
        <main class="p-0 font-2">
            @yield('content')
        </main>

    <script src="{{ asset("/assets/vendors/jquery/jquery-3.6.0.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/jarallax/jarallax.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/jquery-appear/jquery.appear.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/jquery-validate/jquery.validate.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/nouislider/nouislider.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/odometer/odometer.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/swiper/swiper.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/tiny-slider/tiny-slider.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/wnumb/wNumb.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/wow/wow.js") }}"></script>
    <script src="{{ asset("/assets/vendors/isotope/isotope.js") }}"></script>
    <script src="{{ asset("/assets/vendors/countdown/countdown.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/owl-carousel/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/bxslider/jquery.bxslider.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/bootstrap-select/js/bootstrap-select.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/vegas/vegas.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/jquery-ui/jquery-ui.js") }}"></script>
    <script src="{{ asset("/assets/vendors/timepicker/timePicker.js") }}"></script>
    <script src="{{ asset("/assets/vendors/circleType/jquery.circleType.js") }}"></script>
    <script src="{{ asset("/assets/vendors/circleType/jquery.lettering.min.js") }}"></script>
    <script src="{{ asset("/assets/vendors/polyglot-language-switcher/jquery.polyglot.language.switcher.js") }}"></script>
    <script src="{{ asset("/assets/vendors/progress-bar/knob.js") }}"></script>

    <!-- template js -->
    <script src="{{ asset("/assets/js/Battour.js") }}"></script>
    <script>
            $('.changeLanguage').change(function(event){
                var url = "{{ url('google.translate.change') }}";
             window.location.href = url+"?lang="+$(this).val()
            })
        </script>
        <x-footer />
    </div>


    @vite('resources/js/app.js')
    @livewireScripts
    @include('layouts.scripts')
    @auth
    <script type="module">
        var favicon = new Favico({bgColor: '#dc0000',textColor: '#fff',animation: 'slide',fontStyle: 'bold',fontFamily: 'sans',type: 'circle'});
        function get_website_title(){
            return $('meta[name="title"]').attr('content');
        }
        var notificationDropdown = document.getElementById('notificationDropdown')
        notificationDropdown.addEventListener('show.bs.dropdown', function() {
            $.ajax({
                method: "POST",
                url: "{{route('admin.notifications.see')}}",
                data: { _token: "{{csrf_token()}}" }
            }).done(function(res) {
                $('#dropdown-notifications-icon').fadeOut();
                favicon.badge(0);
            });
        });
        function append_notification_notifications(msg) {
            if (msg.count_unseen_notifications > 0) {
                $('#dropdown-notifications-icon').fadeIn(0);
                $('#dropdown-notifications-icon').text(msg.count_unseen_notifications);
            } else {
                $('#dropdown-notifications-icon').fadeOut(0);
                favicon.badge(0);
            }
            $('.notifications-container').empty();
            $('.notifications-container').append(msg.response);
            $('.notifications-container a').on('click', function() { window.location.href = $(this).attr('href'); });
        }
        function get_notifications() {
            $.ajax({
                method: "GET",
                url: "{{route('admin.notifications.ajax')}}",
                success: function(data, textStatus, xhr) {

                    favicon.badge(data.notifications.response.count_unseen_notifications);

                    if (data.alert) {
                        var audio = new Audio('{{asset("/sounds/notification.wav")}}');
                        audio.play();
                    }
                    append_notification_notifications(data.notifications.response);
                    if (data.notifications.response.count_unseen_notifications > 0) {
                        $('title').text('(' + parseInt(data.notifications.response.count_unseen_notifications) + ')' + " " +
                        get_website_title());

                    } else {
                        $('title').text(get_website_title());
                    }
                }
            });
        }
        window.focused = 25000;
        window.onfocus = function() {
            get_notifications();
            window.focused = 25000;
        };
        window.onblur = function() {
            window.focused = 60000;
        };
        function get_nots() {
            setTimeout(function() {
                get_notifications();
                get_nots();
            }, window.focused);
        }
        get_nots();

        @if($unreadNotifications!=session('seen_notifications') && $unreadNotifications!=0)
            @php
            session(['seen_notifications'=>$unreadNotifications]);
            @endphp
            var audio = new Audio('{{asset("/sounds/notification.wav")}}');
            audio.play();
        @endif
    </script>
    @endauth
    @yield('scripts')
    {!!$settings['footer_code']!!}
</body>
</html>
