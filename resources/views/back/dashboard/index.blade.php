@extends('back.layout.template')

@section('title', 'Dashboard | Solusi Pajak Online')

@section('content')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @include('back.layout.topbar')
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                            Total Articles</div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $total_articles }} Articles</h5>
                                            <a href="{{ url('admin/articles') }}" class="text-black">View Articles</a>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-fw fa-house-user fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-s font-weight-bold text-success text-uppercase mb-1">
                                            Total Categories</div>
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $total_categories }} Categories</h5>
                                            <a href="{{ url('admin/categories') }}" class="text-black">View Categories</a>
                                            <p class="card-text"></p>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-fw fa-tags fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- End of Main Content -->
        <!-- Footer -->
        @include('back.layout.footer')
        <!-- End of Footer -->
    </div>
    <!-- End of Content Wrapper -->
@endsection
