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

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        @include('blog.layout.home.navbar')
        <!-- Page Content-->
        <section class="bg-white py-5" style="margin-top: 80px">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Pelayanan Kami</h1>
                    <p class="lead fw-normal text-muted mb-0 fs-5">SPO melayani jasa konsultasi perpajakan dan pembuatan
                        laporan/pemeriksaan/analisa laporan keuangan dengan rincian pekerjaan sebagai berikut.</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <!-- Pricing card free-->
                    <div class="col-lg-6 mb-4">
                        <div class="card h-100 mb-5 mb-xl-0" style="margin-bottom: 10px;">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold text-muted"></div>
                                <div class="mb-3">
                                    <h2 class="fw-bolder mb-5 text-center fs-4">Jasa Di Bidang Perpajakan</h2>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-check-circle text-primary"></i>
                                        Penghitungan pajak penghasilan pribadi atau badan (pasal 4 ayat 2, pasal
                                        21, pasal 22, pasal 23, pasal 24, pasal 25, pasal 26, dan pasal 29)
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check-circle text-primary"></i>
                                        Pelaporan SPT Masa dan Tahunan bagi wajib pajak pribadi (OP) dan badan
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check-circle text-primary"></i>
                                        Konsultasi permasalahan pajak
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check-circle text-primary"></i>
                                        Kuasa Wajib Pajak untuk pelaporan, pegurusan sengketa pajak, dll
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check-circle text-primary"></i>
                                        Pelatihan (inhouse) perpajakan (PPH, PPN, Petunjuk pengisian SPT Masa OP dan
                                        Badan)
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Pricing card enterprise-->
                    <div class="col-lg-6 mb-4">
                        <div class="card h-100 mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold text-muted"></div>
                                <div class="mb-3">
                                    <h2 class="fw-bolder mb-5 text-center fs-4">Jasa Di Bidang Keuangan dan Akuntansi
                                    </h2>
                                </div>
                                <ul class="list-unstyled-u mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-check-circle text-primary"></i>
                                        Penyusunan laporan keuangan (balance sheet, income statement, cashflow) internal
                                        dan eksternal (untuk perbankan dan lembaga-lembaga yang membutuhkan)
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check-circle text-primary"></i>
                                        Analisa laporan keuangan (rasio likuiditas, provitabilitas, rentabilitas, dll)
                                        beserta hasil dan solusinya
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check-circle text-primary"></i>
                                        Pelaporan SPT Masa dan Tahunan bagi wajib pajak pribadi (OP) dan badan
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check-circle text-primary"></i>
                                        Penyusunan anggaran keuangan perusahaan (cash budget, income statement budget,
                                        sales budget, production budget, cost budget, balance sheet budget, dll)
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check-circle text-primary"></i>
                                        Penyusunan sistem prosedur akuntansi bagi perusahaan beserta pembuatan
                                        aplikasi/software pendukungnya sesuai kebutuhan perusahaan (customize)
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check-circle text-primary"></i>
                                        Audit laporan keuangan, baik internal audit maupun eksternal audit (Kantor
                                        Akuntan Publik-KAP)
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check-circle text-primary"></i>
                                        Konsultasi permasalahan dibidang akuntansi dan keuangan
                                    </li>
                                    <li class="mb-2">
                                        <i class="bi bi-check-circle text-primary"></i>
                                        Pelatihan (inhouse) akuntansi dan keuangan
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-5 bg-white">
            <div class="container px-5 my-5">
                <h2 class="display-4 fw-bolder mb-4 fs-3">Ada pertanyaan tentang masalah perpajakan, akuntansi, dan keuangan?</h2>
                <a class="btn btn-lg btn-primary" href="#!">Hubungi kami</a>
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
