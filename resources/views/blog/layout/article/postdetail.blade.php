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
    <link href="{{ asset('blog') }}/css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        @include('blog.layout.home.navbar')
        <!-- Page Content-->
        <section class="py-5">
            <div class="container" style="margin-top: 40px; background-color: #e5e7e8; padding: 20px; border-radius: 15px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
                <div class="container" style="padding: 50px;"> <!-- Mengurangi padding di sini -->
                    <div class="row">
                        <header class="masthead position-relative"
                            style="background-image: url('{{ asset('storage/back/' . $post->img) }}'); height: 400px;">
                            <div class="container h-100">
                                <div class="row h-100 align-items-end">
                                </div>
                            </div>
                        </header>
                        <div class="col-lg-12 text-center">
                            <h1 class="text-black mb-4" style="margin-top: 50px">{{ $post->title }}</h1>
                        </div>
                        <p>Admin SPO | {{ $post->created_at->format('F d, Y') }}</p>
                        <hr />
                        <div class="col-lg-12 text-justify">
                            <p>{!! $post->desc !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
    <!-- Footer-->
    @include('blog.layout.home.footer')
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- Core theme JS-->
    <script src="{{ asset('blog') }}/js/scripts.js"></script>
</body>

</html>
