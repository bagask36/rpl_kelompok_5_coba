<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>{{ config('app.name') }} | Seluruh Solusi Masalah Perpajakan Anda</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('blog') }}/assets/favicon.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="{{ asset('blog') }}/css/styles.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        @include('blog.layout.home.navbar')
        <section class="py-5">
            <div class="bg-white container px-5">
                <div class="bg-white rounded-3 py-5 px-4 px-md-5 mb-5">
                    <div class="text-center mb-5">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                class="bi bi-envelope"></i></div>
                        <h1 class="fw-bolder">Anda punya pertanyaan?</h1>
                        <p class="lead fw-normal text-muted mb-0">Silahkan hubungi kami!</p>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <form id="contactForm">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" name="name" type="text"
                                        placeholder="Masukkan Nama Lengkap Anda..." required />
                                    <label for="name">Nama Lengkap</label>
                                    <div class="invalid-feedback">Nama tidak boleh kosong!</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" name="email" type="email"
                                        placeholder="name@example.com" required />
                                    <label for="email">Alamat Email</label>
                                    <div class="invalid-feedback">Alamat Email tidak boleh kosong!</div>
                                    <div class="invalid-feedback">Alamat Email tidak valid.</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="subject" name="subject" type="text"
                                        placeholder="Pajak / Keuangan / Akuntansi" required />
                                    <label for="subject">Subjek</label>
                                    <div class="invalid-feedback">Subjek tidak boleh kosong!</div>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" id="message" name="message" placeholder="Masukkan pesan Anda!" style="height: 10rem"
                                        required></textarea>
                                    <label for="message">Pesan</label>
                                    <div class="invalid-feedback">Pesan tidak boleh kosong!</div>
                                </div>
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        To activate this form, sign up at
                                        <br />
                                        <a href="https://startbootstrap.com/solution/contact-forms"></a>
                                    </div>
                                </div>
                                <div class="d-none" id="submitErrorMessage">
                                    <div class="text-center text-danger mb-3">Error sending message!</div>
                                </div>
                                <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton"
                                        type="submit">Kirim</button></div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="container py-5">
                    <div class="row gx-5 justify-content-center text-center">
                        <div class="col-12 col-lg-6 d-flex flex-column align-items-center">
                            <a href="https://wa.me/+6281281916862"
                                class="feature bg-primary bg-gradient text-white rounded-3 mb-3 d-inline-flex align-items-center justify-content-center text-decoration-none"
                                style="width: 80px; height: 80px;">
                                <i class="bi bi-whatsapp" style="font-size: 24px;"></i>
                            </a>6
                            <div class="h5 mb-2">Chat with us</div>
                            <p class="text-muted mb-0">WhatsApp 24 Jam</p>
                        </div>
                        <div class="col-12 col-lg-6 d-flex flex-column align-items-center">
                            <a href="tel:+6281281916862"
                                class="feature bg-primary bg-gradient text-white rounded-3 mb-3 d-inline-flex align-items-center justify-content-center text-decoration-none"
                                style="width: 80px; height: 80px;">
                                <i class="bi bi-telephone" style="font-size: 24px;"></i>
                            </a>
                            <div class="h5 mb-2">Call us</div>
                            <p class="text-muted mb-0">Telepon Kami</p>
                            <p class="text-muted mb-0">(Hanya Saat Waktu Kerja)</p>
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
    <!-- Core theme JS-->
    <script src="{{ asset('blog') }}/js/scripts.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>
