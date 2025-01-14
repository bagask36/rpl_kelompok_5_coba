@extends('back.layout.template')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <style>
        .dataTable-container {
            max-width: 100%;
            overflow-x: auto;
        }

        .button-group {
            display: flex;
            justify-content: center;
        }

        .button-group .btn {
            margin-right: 0.5rem;
        }

        .button-group .btn:last-child {
            margin-right: 0;
        }
    </style>
@endpush

@section('title', 'Articles | Solusi Pajak Online')

@section('content')
    <!-- Article -->
    <div id="content-wrapper" class="container-fluid">
        <!-- Topbar -->
        @include('back.layout.topbar')
        <!-- End of Topbar -->
        <!-- Main Content -->
        <div id="content">

            <main class="col-md-12 ms-sm-auto col-lg-12 px-md-4 content-wrapper">
                <div class="mt-3">
                    <a href="{{ url('admin/articles/create') }}" class="btn btn-primary mb-2">Create</a>
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

                    <div class="swal" data-swal="{{ session('success') }}"></div>

                    <div class="dataTable-container">
                        <table class="table table-striped table-bordered" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Views</th>
                                    <th>Status</th>
                                    <th>Publish Date</th>
                                    <th>Function</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
            </main>
        </div>
        <!-- End of Main Content -->
        <!-- Footer -->
        @include('back.layout.footer')
        <!-- End of Footer -->
    </div>
    <!-- End of Article -->
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        const swalData = $('.swal').data('swal');
        if (swalData) {
            Swal.fire({
                title: 'Success',
                text: swalData,
                icon: 'success',
                showConfirmButton: false,
                timer: 2000
            });
        }

        function deleteArticle(e) {
            let id = e.getAttribute('data-id');

            Swal.fire({
                title: "Delete Article",
                text: "Are you sure want to delete this Article?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                cancelButtonText: "Cancel",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'DELETE',
                        url: '/articles/' + id,
                        dataType: "json",
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    title: 'Success',
                                    text: response.message,
                                    icon: 'success',
                                }).then(() => {
                                    // Redirect to articles index page
                                    window.location.href = '{{ route('articles.index') }}';
                                });
                            } else {
                                Swal.fire({
                                    title: 'Error',
                                    text: response.message,
                                    icon: 'error',
                                });
                            }
                        },
                        error: function(xhr, ajaxOptions, thrownError) {
                            Swal.fire({
                                title: 'Error',
                                text: 'Failed to delete the article. Please try again.',
                                icon: 'error',
                            });
                        }
                    });
                }
            });
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ url()->current() }}',
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        className: 'text-center'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'categories_id',
                        name: 'categories_id'
                    },
                    {
                        data: 'views',
                        name: 'views',
                        className: 'text-center'
                    },
                    {
                        data: 'status',
                        name: 'status',
                        className: 'text-center'
                    },
                    {
                        data: 'publish_date',
                        name: 'publish_date',
                        className: 'text-center'
                    },
                    {
                        data: 'button',
                        name: 'button',
                        className: 'text-center',
                        render: function(data, type, row) {
                            return `
                                <div class="button-group">
                                    <a href="/admin/articles/${row.id}/edit" class="btn btn-warning btn-sm">Edit</a>
                                    <button onclick="deleteArticle(this)" data-id="${row.id}" class="btn btn-danger btn-sm">Delete</button>
                                </div>
                            `;
                        }
                    },
                ],
                columnDefs: [{
                    orderable: false,
                    targets: [6]
                }],
                responsive: true,
                autoWidth: false
            });
        });
    </script>
@endpush
