<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ config('app.name') }} | Seluruh Solusi Masalah Perpajakan Anda</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{ asset('blog') }}/assets/favicon.png" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('blog') }}/css/styles.css" rel="stylesheet">
    <link href="{{ asset('back') }}/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Midtrans Snap SDK -->
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ env('MIDTRANS_CLIENT_KEY') }}"></script>

    @stack('css')
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        @include('userback.template.usernav')

        @yield('content')

    </main>
    @include('blog.layout.home.footer')

    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf-lib/1.17.1/pdf-lib.min.js"></script>
    <!-- Include ScrollReveal library -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('back') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('back') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-z3JDjzVz3ZraVo8eX5pmDvydVEf+AUHRCRJgDdaDAR4pA0GWq3NZwlCV54YOwmHR" crossorigin="anonymous">
    </script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('back') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('back') }}/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('back') }}/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('back') }}/js/demo/chart-area-demo.js"></script>
    <script src="{{ asset('back') }}/js/demo/chart-pie-demo.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('blog') }}/js/scripts.js"></script>
    @yield('scripts')
</body>

</html>
