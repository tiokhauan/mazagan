<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Mazagan Informática">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Meta Description -->
    <meta name="description" content="Mazagan Informática">
    <meta name="keywords" content="Na Mazagan Informática, oferecemos soluções de TI que ajudam sua empresa a crescer de forma segura e eficiente.">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Mazagan Informática')</title>

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Mazagan Informática">
    <meta property="og:description" content="Na Mazagan Informática, oferecemos soluções de TI que ajudam sua empresa a crescer de forma segura e eficiente.">
    <meta property="og:image" content="{{ asset('assets/images/favicon.ico') }}">
    <meta property="og:url" content="https://mazaganinfo.com.br/">
    <meta property="og:type" content="website">

    <!-- Favicon icons -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon_io/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon_io/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/favicon_io/favicon-96x96.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/images/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- FONTES DO GOOGLE -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Agdasima&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="https://cdn.lineicons.com/2.0/LineIcons.css">

    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


    <!-- LINK CSS -->

    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/notech-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/notech-two-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/reey-font/stylesheet.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bxslider/jquery.bxslider.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/vegas/vegas.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/vendors/timepicker/timePicker.css') }}" />


    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/notech.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/notech-responsive.css') }}" />

    <!-- modes css -->
    <link rel="stylesheet" id="jssMode" href="{{ asset('assets/css/notech-light.css') }}" >


    <!-- toolbar css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/toolbar/css/toolbar.css') }}" />

</head>

<body>

    <!-- Header includes -->
    @include('partials.header')
    @include('partials.whatsapp')
    @include('partials.cookies')

    <!-- Main content area -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('partials.footer')

    <!-- Scripts de Bibliotecas Externas -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script> -->

    <!-- Scripts Personalizados -->
    <script src="{{ asset('assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/vendors/timepicker/timePicker.js') }}"></script>

    <!-- template js -->
    <script src="{{ asset('assets/js/notech.js') }}"></script>

    <!-- toolbar js -->
    <script src="{{ asset('assets/vendors/toolbar/js/js.cookie.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/toolbar/js/jQuery.style.switcher.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/toolbar/js/toolbar.js') }}"></script>


    <!-- SCRIPTS PARA O SITE -->


    <!-- Script de dados estruturados (Schema.org) para melhorar SEO e exibição nos buscadores -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Mazagan Informática",
            "url": "https://mazaganinfo.com.br",
            "logo": "https://mazaganinfo.com.br/assets/images/logo-mazagan.png",

            /* Links para redes sociais */
            "sameAs": [
                "https://www.instagram.com/mazaganinfo/"
            ],

            /* Informações de contato */
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+55-42-9835-3547",
                "contactType": "customer service",
                "areaServed": "BR",
                "availableLanguage": "Portuguese"
            },

            /* Endereço da empresa */
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "R. Rio Grande do Sul, 1985",
                "addressLocality": "Ponta Grossa",
                "addressRegion": "PR",
                "postalCode": "84015-020",
                "addressCountry": "BR"
            }
        }
    </script>

    <script>
        if (!localStorage.getItem('cookies-accepted')) {
            document.getElementById('cookie-banner').style.display = 'flex';
        }
        document.getElementById('accept-cookies').addEventListener('click', function() {

            localStorage.setItem('cookies-accepted', 'true');

            document.getElementById('cookie-banner').style.display = 'none';
        });
    </script>

    @stack('scripts')

</body>

</html>