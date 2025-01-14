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
        @include('userback.template.usernav')

        <div class="py-1 bg-white" style="margin-bottom: 30px;">
        </div>

        <section class="bg-white py-5">
            <div class="container px-5 my-5">
                <div class="text-center mb-5">
                    <h1 class="fw-bolder">Selamat Datang {{ Auth::user()->name }}!</h1>
                    <p class="lead fw-normal text-muted mb-0 fs-3">Kami akan membantu anda untuk melapor PPh 21 Anda</p>
                    <p class="lead fw-normal text-muted mb-0 fs-3">Silahkan ikuti tata caranya..</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-12 mb-4">
                        <div class="card h-100 mb-5 mb-xl-0" style="margin-bottom: 10px;">
                            <div class="card-body p-5">
                                <div class="small text-uppercase fw-bold text-muted"></div>
                                <div class="mb-3">
                                    <h2 class="fw-bolder mb-5 text-center fs-4">Tata Cara Pelaporan PPh 21</h2>
                                </div>
                                <ol class="list-unstyled mb-4">
                                    <li class="mb-1">
                                        1. Mengisikan total gaji bruto, dan PTKP pada kalkulator PPh 21.
                                    </li>
                                    <li class="mb-1">
                                        2. Selanjutnya, tekan opsi Hitung Pajak pada kalkulator PPh 21.
                                    </li>
                                    <li class="mb-1">
                                        3. Setelah DPP, Tarif Pajak, Nominal PPh 21 sudah ada maka pilih opsi Lapor
                                        Pajak PPh 21.
                                    </li>
                                    <li class="mb-1">
                                        4. Selanjutnya, mengisikan detail dari Pelaporan PPh 21 serta melampirkan
                                        dokumen yang diperlukan.
                                    </li>
                                    <li class="mb-1">
                                        5. Bayar tagihan pajak anda.
                                    </li>
                                    <li class="mb-1">
                                        6. Lalu, pantau status Pelaporan Pajak anda.
                                    </li>
                                    <li class="mb-1">
                                        7. Terakhir, download dan simpan bukti potong yang sudah dilampirkan.
                                    </li>
                                </ol>
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
                                            <div class="input-group mb-3" style="margin-top: 5px;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp</span>
                                                </div>
                                                <input type="text" class="form-control" id="brutoIncome"
                                                    oninput="formatNumber(this)" required aria-label="Amount in Rupiah">
                                            </div>
                                            <div class="invalid-feedback" data-sb-feedback="brutoIncome:required">
                                                Penghasilan Bruto Tidak Boleh Kosong!
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
                                            <button type="reset" class="btn btn-secondary" onclick="resetForm()">Reset
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
                                            <div class="input-group mb-3" style="margin-top: 5px;">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Rp</span>
                                                </div>
                                                <input type="text" id="dpp" value="0" readonly
                                                    class="form-control" aria-label="Amount in Rupiah">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="tarif">Tarif</label>
                                            <input type="text" id="tarif" value="0 %" readonly
                                                class="form-control" style="margin-top: 5px">
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label for="pph21">Nominal PPh 21</label>
                                        <div class="input-group mb-3" style="margin-top: 5px;">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Rp</span>
                                            </div>
                                            <input type="text" id="pph21" value="0" readonly
                                                class="form-control" aria-label="Amount in Rupiah">
                                        </div>
                                    </div>

                                    <div class="d-grid" style="margin-top: 10px">
                                        <button type="button" class="btn btn-primary" onclick="laporPPh21()">Lapor
                                            PPh 21 <i class="bi bi-box-arrow-in-right"></i></button>
                                    </div>

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
