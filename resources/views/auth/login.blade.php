<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Admin">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login | Solusi Pajak Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="{{ asset('blog') }}/assets/favicon.png" />
</head>

<body>
    <section class="h-100">
        <div class="container h-100">
            <div class="row justify-content-sm-center h-100">
                <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
                    <div class="text-center my-5">
                        <img src="{{ asset('blog') }}/assets/logo_spo.png" alt="logo" style="width: 50%;">
                    </div>
                    <div class="card shadow-lg">
                        <div class="card-body p-5">
                            <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
                            <form method="post" action="/login" class="needs-validation" novalidate=""
                                autocomplete="off">
                                <!-- CSRF Token -->
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
								@if (session()->has('Gagal'))
								<div class="alert alert-danger test-start mt-3">
									{{ session('Gagal') }}
								</div>
								@endif
                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="email">E-Mail Address</label>
                                    <input id="email" type="email" class="form-control" name="email"
                                        value="" required autofocus>
                                    <div class="invalid-feedback">
                                        Email is invalid
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="mb-2 text-muted" for="password">Password</label>
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    <div class="invalid-feedback">
                                        Password is required
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn btn-primary ms-auto">
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <p class="text-muted"><a href="{{ route('register') }}">Create an Account</a>.</p>

                    <div class="text-center mt-5 text-muted">
                        Copyright &copy; Solusi Pajak Online 2024
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('blog') }}/js/login.js"></script>
</body>

</html>
