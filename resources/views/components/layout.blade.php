<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Mono - Responsive Admin & Dashboard Template</title>

    <!-- theme meta -->
    <meta name="theme-name" content="mono" />

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
    <link href="{{ asset('theme/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('theme/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />

    {{-- PLUGINS CSS STYLE --}}
    <link href="{{ asset('theme/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />

    <link href="{{ asset('theme/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css') }}"
        rel="stylesheet" />

    {{-- <link href="{{ asset('theme/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet" /> --}}

    {{-- <link href="{{ asset('theme/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" /> --}}

    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    {{-- <link href="{{ asset('theme/plugins/toaster/toastr.min.css') }}" rel="stylesheet" /> --}}

    {{-- MONO CSS --}}
    <link id="main-css-href" rel="stylesheet" href=" {{ asset('theme/css/style.css') }}" />

    {{-- FAVICON --}}
    <link href="{{ asset('theme/images/favicon.png') }}" rel="shortcut icon" />

    <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <script src="{{ asset('theme/plugins/nprogress/nprogress.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"
        integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</head>

<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>

    {{-- <div id="toaster"></div> --}}

    @if (request()->is('register'))
        <main>
            {{ $slot }}
        </main>
    @else
        <div class="wrapper">
            @include('layouts.sidebar')

            @include('layouts.navigation')

            <main>
                {{ $slot }}
            </main>
        </div>
    @endif

    @include('layouts.footer')

    <script src="{{ asset('theme/plugins/simplebar/simplebar.min.js') }}"></script>
    <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>
    <script src="{{ asset('theme/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('theme/js/mono.js') }}"></script>
    <script src="{{ asset('theme/js/custom.js') }}"></script>
</body>
