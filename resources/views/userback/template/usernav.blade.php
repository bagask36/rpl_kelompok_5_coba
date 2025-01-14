<!DOCTYPE html>
<html lang="en">
<head>
    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css">
    
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('blog') }}/nav/css/styles.css">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* Mengatur warna latar belakang modal */
        .modal-content {
            background-color: #ffffff; /* Ganti dengan warna yang diinginkan */
            color: #000000; /* Ganti dengan warna teks yang diinginkan */
        }

        /* Mengatur tampilan overlay */
        .modal-backdrop {
            background-color: rgba(0, 0, 0, 0.5); /* Ganti dengan warna dan transparansi yang diinginkan */
        }

    </style>
</head>
<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container px-5">
                <a class="navbar-brand" href=""> <img src="{{ asset('blog') }}/assets/logo_spo.png" alt="" width="237" height="61"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ url('user/dashboard') }}"><i class="bi bi-house"></i>Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('user/pelaporan-pajak') }}"><i class="bi bi-newspaper"></i>Pelaporan Pajak</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person"></i> {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <!--=============== MAIN JS ===============-->
    <script src="{{ asset('blog') }}/nav/js/main.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Logout Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Ready to Leave?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
