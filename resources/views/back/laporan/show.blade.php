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

@section('title', 'Show | Solusi Pajak Online')

@section('content')
    <!-- Laporan Pajak -->
    <div id="content-wrapper" class="container-fluid">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            @include('back.layout.topbar')
            <!-- End of Topbar -->
            <main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
                <h1>Detail Laporan</h1>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Nama Lengkap: {{ $laporan->nama_lengkap }}</h5>
                        <p class="card-text">NPWP: {{ $laporan->npwp }}</p>
                        <p class="card-text">Alamat: {{ $laporan->alamat }}</p>
                        <p class="card-text">Penghasilan Bruto:
                            {{ number_format($laporan->penghasilan_bruto, 0, ',', '.') }}</p>
                        <p class="card-text">PTKP: {{ number_format($laporan->ptkp, 0, ',', '.') }}</p>
                        <p class="card-text">Tarif Pajak: {{ number_format($laporan->tarif_pajak, 0, ',', '.') }}</p>
                        <p class="card-text">Nominal Pajak: {{ number_format($laporan->nominal_pajak, 0, ',', '.') }}</p>
                        <p class="card-text">Masa Pajak: {{ $laporan->masa_pajak }}</p>
                        <p class="card-text">Status: {{ $laporan->status }}</p>

                        <!-- Bukti Potong -->
                        @if ($laporan->bukti_potong)
                            <p class="card-text">Bukti Potong:</p>
                            <img src="{{ asset('storage/back/' . $laporan->bukti_potong) }}" alt="" width="40%"
                                class="img-fluid mb-3">
                        @else
                            <p class="card-text">Bukti Potong: Tidak tersedia</p>
                        @endif

                        <a href="{{ route('laporan.edit', $laporan->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('laporan.destroy', $laporan->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus laporan ini?');">Hapus</button>
                        </form>
                        <a href="{{ route('laporan.index') }}" class="btn btn-secondary">Kembali</a>
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
    @endpush

@endsection
