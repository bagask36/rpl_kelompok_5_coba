@extends('back.layout.template')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <style>
        .dataTable-container {
            max-width: 100%;
            overflow-x: auto;
        }

        .text-center {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
        }

        .dataTable th,
        .dataTable td {
            text-align: center;
        }
    </style>
@endpush

@section('title', 'Categories | Solusi Pajak Online')

@section('content')
    <!-- Category -->
    <div id="content-wrapper" class="container-fluid">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            @include('back.layout.topbar')
            <!-- End of Topbar -->
            <main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
                <div class="mt-3">
                    <button type="button" class="btn btn-primary mb-3" data-toggle="modal"
                        data-target="#CreateModal">Create</button>
                    @if ($errors->any())
                        <div class="my-3">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="my-3">
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        </div>
                    @endif

                    <div class="dataTable-container">
                        <table class="table table-striped table-bordered" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Created At</th>
                                    <th>Function</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->slug }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <div class="text-center">
                                                <button class="btn btn-secondary" data-toggle="modal"
                                                    data-target="#modalUpdate{{ $item->id }}">Edit</button>
                                                <button class="btn btn-danger" data-toggle="modal"
                                                    data-target="#modalDelete{{ $item->id }}">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
                @include('back.category.create-modal')
                @include('back.category.update-modal')
                @include('back.category.delete-modal')
            </main>
        </div>
        <!-- End of Main Content -->
        <!-- Footer -->
        @include('back.layout.footer')
        <!-- End of Footer -->
    </div>
    <!-- End of Category -->
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-z3JDjzVz3ZraVo8eX5pmDvydVEf+AUHRCRJgDdaDAR4pA0GWq3NZwlCV54YOwmHR" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                responsive: true,
                autoWidth: false,
                columnDefs: [{
                    orderable: false,
                    targets: [4]
                }]
            });
        });
    </script>
@endpush
