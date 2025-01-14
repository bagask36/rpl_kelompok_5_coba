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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('blog') }}/css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        @include('blog.layout.home.navbar')
        @include('blog.layout.home.slide')
        <section class="bg-white py-5" id="pelayanan-kami">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Pelayanan Kami</h1>
                    <p class="lead fw-normal text-muted mb-0 fs-3">apa yang kami kerjakan</p>
                </div>
                <div class="row gx-5 justify-content-center">
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
                                <div
                                    class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start align-items-end">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3"
                                        href="/tentang-kami/pelayanan-kami">Lihat Lebih lanjut</a>
                                </div>
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
                                <div
                                    class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start align-items-end">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3"
                                        href="/tentang-kami/pelayanan-kami">Lihat Lebih lanjut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="py-1 bg-white" style="margin-bottom: 30px;">
            <div class="container px-1 my-5">
                <div class="row gx-2 justify-content-center">
                    <div class="col-lg-10 col-xl-7">
                        <div class="text-center mb-5">
                            <h1 class="fw-bolder">Kenapa Memilih Kami</h1>
                            <p class="lead fw-normal text-muted mb-0 fs-3">kami memberikan solusi</p>
                        </div>
                        <div class="text-center">
                            <div class="fs-5 mb-4">"Tim Solusi Pajak Online (SPO) merupakan praktisi-praktisi yang sudah
                                berpengalaman dan lama berkecimpung dalam bidang perpajakan, akuntansi, dan keuangan,
                                baik bagi orang pribadi (karyawan dan profesi) maupun badan usaha yang bergerak dalam
                                berbagai bidang."</div>
                            <div class="fs-5 mb-4">"Simple, Quick, & Excellent adalah moto kerja yang kami anut.
                                Harapan kami bisa memberikan nilai lebih pada bisnis klien, sehingga dapat berkembang
                                dan maju bersama."</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="bg-white py-5">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Klien Kami</h1>
                    <p class="lead fw-normal text-muted mb-0 fs-3">Bidang Profesi dan Usaha Yang Pernah Kami Tangani</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6 mb-4">
                        <div class="card h-100 mb-5 mb-xl-0" style="margin-bottom: 10px;">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold text-muted"></div>
                                <div class="mb-3">
                                    <h2 class="fw-bolder mb-5 text-center fs-4">Pribadi</h2>
                                </div>
                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-person text-primary fs-3"></i>
                                        Orang pribadi yang berprofesi sebagai karyawan, dokter, pengacara, notaris dan
                                        lain-lain
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="card h-100 mb-5 mb-xl-0">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold text-muted"></div>
                                <div class="mb-3">
                                    <h2 class="fw-bolder mb-5 text-center fs-4">Badan Usaha
                                    </h2>
                                </div>
                                <ul class="list-unstyled-u mb-4">
                                    <li class="mb-2">
                                        <i class="bi bi-people text-primary fs-3"></i>
                                        Badan Usaha yang bergerak dalam bidang rumah sakit, hak penguasaan hutan (hph),
                                        farmasi, distributor, media dan penerbitan, percetakan, properti, perhotelan,
                                        dll
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white py-5" id="kalkulator-pajak">
            <div class="py-6 bg-white">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Kalkulator Pajak</h1>
                        <p class="lead fw-normal text-muted mb-0 fs-3">PPh 21</p>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-6 mb-4">
                            <div class="card h-100 mb-5 mb-xl-0" style="margin-bottom: 10px;">
                                <div class="card-body p-5">
                                    <form id="kalkulator">
                                        <div class="form-group">
                                            <label for="brutoIncome">Penghasilan Bruto (per bulan):</label>
                                            <input type="text" class="form-control" style="margin-top: 5px"
                                                id="brutoIncome" oninput="formatNumber(this)" required>
                                            <div class="invalid-feedback" data-sb-feedback="brutoIncome:required">
                                                Penghasilan Bruto Tidak Boleh Kosong!</div>
                                        </div>
                                        <div class="form-group" style="margin-top: 5px">
                                            <label>Metode Perhitungan Pajak:</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="taxMethod"
                                                    id="gross" value="gross" checked>
                                                <label class="form-check-label" for="gross">Gross</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="taxMethod"
                                                    id="grossUp" value="grossUp">
                                                <label class="form-check-label" for="grossUp">Gross Up</label>
                                            </div>
                                        </div>
                                        <div class="form-group" style="margin-top: 5px">
                                            <label for="ptkp">PTKP (Rp)</label>
                                            <select class="form-control" style="margin-top: 5px" id="ptkp">
                                                <option selected>Pilih...</option>
                                                <option value="54000000">TK/0 - Rp54.000.000</option>
                                                <option value="58500000">TK/1 - Rp58.500.000</option>
                                                <option value="63000000">TK/2 - Rp63.000.000</option>
                                                <option value="67500000">TK/3 - Rp67.500.000</option>
                                                <option value="58500000">K/0 - Rp58.500.000</option>
                                                <option value="63000000">K/1 - Rp63.000.000</option>
                                                <option value="67500000">K/2 - Rp67.500.000</option>
                                                <option value="72000000">K/3 - Rp72.000.000</option>
                                            </select>
                                        </div>
                                        <div class="d-grid" style="margin-top: 10px"><button type="button"
                                                class="btn btn-success" onclick="calculateTax()">Hitung
                                                Pajak <i class="bi bi-calculator-fill"></i></button>
                                        </div>
                                        <div class="d-grid" style="margin-top: 5px">
                                            <button type="reset" class="btn btn-secondary"
                                                onclick="resetForm()">Reset
                                                <i class="bi bi-arrow-counterclockwise"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" id="brutoIncomeFormatted">
                        <input type="hidden" id="taxableIncomeFormatted">
                        <input type="hidden" id="tarifValue">
                        <input type="hidden" id="monthlyTaxFormatted">
                        <div class="col-lg-6 mb-4">
                            <div class="card h-100 mb-5 mb-xl-0">
                                <div class="card-body p-5">
                                    <div class="small text-uppercase fw-bold text-muted"></div>
                                    <div class="mb-3">
                                        <h2 class="fw-bolder mb-5 text-center fs-4">Hasil Perhitungan PPh 21</h2>
                                    </div>
                                    <div class="mt-4" id="result">
                                        <div class="form-group">
                                            <label for="dpp">DPP</label>
                                            <input type="text" id="dpp" value="0" readonly
                                                class="form-control" style="margin-top: 5px">
                                        </div>
                                        <div class="form-group">
                                            <label for="tarif">Tarif</label>
                                            <input type="text" id="tarif" value="0 %" readonly
                                                class="form-control" style="margin-top: 5px">
                                        </div>
                                        <div class="form-group">
                                            <label for="pph21">PPh 21</label>
                                            <input type="text" id="pph21" value="0" readonly
                                                class="form-control" style="margin-top: 5px">
                                        </div>
                                    </div>
                                    <div class="d-grid" style="margin-top: 10px;">
                                        <button type="button" class="btn btn-success"
                                            id="downloadPdfBtn">Download</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
        </section>
    </main>
    @include('blog.layout.home.footer')
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf-lib/1.17.1/pdf-lib.min.js"></script>
    <!-- Include ScrollReveal library -->
    <script src="https://unpkg.com/scrollreveal"></script>


    <!-- Core theme JS-->
    <script src="{{ asset('blog') }}/js/scripts.js"></script>
</body>

</html>
