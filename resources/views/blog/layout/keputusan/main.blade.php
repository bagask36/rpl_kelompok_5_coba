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
        @include('blog.layout.home.navbar')
        <header class="py-5 bg-white" style="margin-top: 100px">
            <div class="container px-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xxl-6">
                        <div class="text-center my-5">
                            <h1 class="fw-bolder mb-3">Peraturan dan Keputusan</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="py-5 bg-white">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <iframe class="img-fluid rounded mb-5 mb-lg-0" id="pdf-preview"
                            src="{{ asset('blog') }}/assets/pdf/PerMen Keuangan No_ 122 tahun 2013_Tentang Buku yg dibebaskan dari PPN.pdf"
                            style="width: 100%; height: 400px;"></iframe>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">
                                <i class="bi bi-check-circle text-primary fs-5"></i>
                                <p class="lead fw-normal text-muted mb-0 fs-10">PerMen Keuangan No. 122 Tahun 2013
                                    (Tentang Buku yang Dibebaskan dari PPN)
                            </li>
                        </ul>
                        <p class="mb-0"><a href="{{ asset('blog') }}/assets/pdf/PerMen Keuangan No_ 122 tahun 2013_Tentang Buku yg dibebaskan dari PPN.pdf"
                                target="_blank">Lihat PDF</a></p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-white">
            <div class="container px-5 my-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-first order-lg-last">
                        <iframe class="img-fluid rounded mb-5 mb-lg-0" id="pdf-preview"
                            src="{{ asset('blog') }}/assets/pdf/PP Nomor 58 Tahun 2023.pdf"
                            style="width: 100%; height: 400px;"></iframe>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-4">
                            <li class="mb-2">
                                <i class="bi bi-check-circle text-primary fs-5"></i>
                                <p class="lead fw-normal text-muted mb-0 fs-10">PP Nomor 58 Tahun 2023</p>
                            </li>
                        </ul>
                        <p class="mb-0"><a href="{{ asset('blog') }}/assets/pdf/PP Nomor 58 Tahun 2023.pdf"
                                target="_blank">Lihat
                                PDF</a></p>
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
