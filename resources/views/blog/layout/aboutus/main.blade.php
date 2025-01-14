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
        <!-- Header-->
        <header class="bg-white py-5" style="margin-top: 100px">
            <div class="container px-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xxl-6">
                        <div class="text-center my-5">
                            <h1 class="fw-bolder mb-3">"Simple, Quick, & Excellent"
                            </h1>
                            <p class="lead fw-normal text-muted mb-4">“Simple, Quick, & Excellent adalah moto kerja yang
                                kami anut. Harapan kami bisa memberikan nilai lebih pada bisnis klien, sehingga dapat
                                berkembang dan maju bersama.</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- About section one-->
        <section class="py-5 bg-white">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0"
                        src="{{ asset('blog') }}/assets/land_img/short.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <h2 class="fw-bolder">Short-Intro</h2>
                        <p class="lead fw-normal text-muted mb-0">Tim Solusi Pajak Online(SPO) merupakan
                            praktisi-praktisi yang sudah berpengalaman lebih dari 10 tahun dan lama berkecimpung dalam
                            bidang perpajakan,
                            akuntansi, dan keuangan, baik bagi orang pribadi (karyawan dan profesi) maupun badan usaha
                            yang bergerak dalam berbagai bidang.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About section two-->
        <section class="py-5 bg-white">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0"
                        src="{{ asset('blog') }}/assets/land_img/client.jpg" alt="..." /></div>
                    <div class="col-lg-6">
                        <h2 class="fw-bolder">Our Dearest Client</h2>
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">
                                <i class="bi bi-check-circle text-primary fs-5"></i>
                                <p class="lead fw-normal text-muted mb-0 fs-10">Orang pribadi yang berprofesi sebagai
                                    karyawan, dokter, pengacara, notaris, dan lain-lain
                            </li>
                            <li class="mb-2">
                                <i class="bi bi-check-circle text-primary fs-5"></i>
                                <p class="lead fw-normal text-muted mb-0 fs-10">Badan Usaha yang bergerak dalam bidang
                                    rumah sakit, hak penguasaan hutan (hph), farmasi, distributor, media dan penerbitan,
                                    percetakan, properti, perhotelan, dll
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('blog.layout.home.footer')
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('blog') }}/js/scripts.js"></script>
</body>

</html>
