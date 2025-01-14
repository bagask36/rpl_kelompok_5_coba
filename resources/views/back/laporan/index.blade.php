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

@section('title', 'Laporan Pajak | Solusi Pajak Online')

@section('content')
    <!-- Laporan Pajak -->
    <div id="content-wrapper" class="container-fluid">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            @include('back.layout.topbar')
            <!-- End of Topbar -->
            <main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
                <div class="mt-3">
                    <div class="dataTable-container">
                        <table class="table table-striped table-bordered" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>NPWP</th>
                                    <th>Nominal Pajak</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($laporans as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama_lengkap }}</td>
                                        <td>{{ $item->npwp }}</td>
                                        <td>{{ number_format($item->nominal_pajak, 0, ',', '.') }}</td>
                                        <td>{{ $item->status }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('laporan.edit', $item->id) }}"
                                                class="btn btn-secondary btn-sm">Edit</a>
                                            <a href="{{ route('laporan.show', $item->id) }}"
                                                class="btn btn-info btn-sm">Detail</a>
                                            <form action="#" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

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

@endsection
