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
            <div class="container px-5" style="margin-top: 100px">
                <div class="card border-0 shadow rounded-3 overflow-hidden">
                    <div class="card-body p-0">
                        <div class="row gx-0">
                            <div class="col-lg-6 col-xl-5 py-lg-5">
                                <div class="p-4 p-md-5">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">
                                        {{ $latest_post->Category->name }}</div>
                                    <div class="h2 fw-bolder">{{ $latest_post->title }}</div>
                                    <p>{!! Str::limit(strip_tags($latest_post->desc), 150, '...') !!}</p>
                                    <a class="stretched-link text-decoration-none"
                                        href="{{ route('article.postdetail', ['id' => $latest_post->id]) }}">
                                        Read more
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-7">
                                <div class="bg-featured-blog"
                                    style="background-image: url('{{ asset('storage/back/' . $latest_post->img) }}')">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-5 bg-light">
            <div class="container px-5">
                <div class="row gx-5">
                    <div class="col-xl-8">
                        <h2 class="fw-bolder fs-5 mb-4">Berita & Artikel</h2>
                        <!-- Latest Post -->
                        <div class="mb-4">
                            <div class="small text-muted">{{ $latest_post->publish_date }}</div>
                            <a class="link-dark" href="#!">
                                <h3>{{ $latest_post->title }}</h3>
                            </a>
                        </div>
                        <!-- Other Articles -->
                        @foreach ($articles as $item)
                            @if ($item->id !== $latest_post->id)
                                <!-- Exclude the latest post -->
                                <div class="mb-5">
                                    <div class="small text-muted">{{ $item->publish_date }}</div>
                                    <a class="link-dark" href="#!">
                                        <h3>{{ $item->title }}</h3>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog preview section-->
        <section class="py-5">
            <div class="container px-5">
                <h2 class="fw-bolder fs-5 mb-4">Featured Stories</h2>
                <div class="row gx-5">
                    @if ($latest_post)
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="{{ asset('storage/back/' . $latest_post->img) }}"
                                    alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">
                                        {{ $latest_post->Category->name }}</div>
                                    <a class="text-decoration-none link-dark stretched-link fw-bolder" href="{{ route('article.postdetail', ['id' => $latest_post->id]) }}">
                                        <div class="h5 card-title mb-3">{{ $latest_post->title }}</div>
                                    </a>
                                    <p class="card-text mb-0">
                                        {{ Str::limit(strip_tags($latest_post->desc), 150, '...') }}</p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="small">
                                                <div class="fw-bold">Admin SPO</div>
                                                <div class="text-muted">
                                                    {{ $latest_post->created_at->format('F d, Y') }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @foreach ($articles as $article)
                        <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="{{ asset('storage/back/' . $article->img) }}"
                                    alt="..." />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">
                                        {{ $article->Category->name }}</div>
                                    <a class="text-decoration-none link-dark stretched-link" href={{ route('article.postdetail', ['id' => $article->id]) }}">
                                        <div class="h5 card-title mb-3">{{ $article->title }}</div>
                                    </a>
                                    <p class="card-text mb-0">{{ Str::limit(strip_tags($article->desc), 150, '...') }}
                                    </p>
                                </div>
                                <div class="card-footer p-4 pt-0 bg-transparent border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="small">
                                                <div class="fw-bold">Admin SPO</div>
                                                <div class="text-muted">{{ $article->created_at->format('F d, Y') }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
