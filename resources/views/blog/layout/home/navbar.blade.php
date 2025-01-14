<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-5">
        <a class="navbar-brand" href="">
            <img src="{{ asset('blog') }}/assets/logo_spo.png" alt="" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/beranda"><i class="bi bi-house"></i> Beranda</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="/tentang-kami" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-people-fill"></i> Tentang Kami
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                        <li><a class="dropdown-item" href="/tentang-kami">Tentang Kami</a></li>
                        <li><a class="dropdown-item" href="/tentang-kami/pelayanan-kami">Pelayanan</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/berita_artikel">
                        <i class="bi bi-newspaper"></i> Berita & Artikel
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/kontak-kami">
                        <i class="bi bi-person-lines-fill"></i> Kontak Kami
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
