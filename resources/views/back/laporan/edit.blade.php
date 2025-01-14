@extends('back.layout.template')

@section('title', 'Edit Laporan | Solusi Pajak Online')

@section('content')
    <!-- Edit Laporan Pajak -->
    <div id="content-wrapper" class="container-fluid">
        <!-- Main Content -->
        <div id="content">
            <!-- Topbar -->
            @include('back.layout.topbar')
            <!-- End of Topbar -->
            <main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
                <h1>Edit Laporan</h1>
                <div class="card">
                    <div class="card-body">
                        <!-- Form Edit Laporan -->
                        <form action="{{ route('laporan.update', $laporan->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <!-- Nama Lengkap -->
                            <div class="mb-3">
                                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                                    value="{{ old('nama_lengkap', $laporan->nama_lengkap) }}" required>
                            </div>

                            <!-- NPWP -->
                            <div class="mb-3">
                                <label for="npwp" class="form-label">NPWP</label>
                                <input type="text" class="form-control" id="npwp" name="npwp"
                                    value="{{ old('npwp', $laporan->npwp) }}" required>
                            </div>

                            <!-- Alamat -->
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{{ old('alamat', $laporan->alamat) }}</textarea>
                            </div>

                            <!-- Penghasilan Bruto -->
                            <div class="mb-3">
                                <label for="penghasilan_bruto" class="form-label">Penghasilan Bruto</label>
                                <input type="text" class="form-control" id="penghasilan_bruto" name="penghasilan_bruto"
                                    oninput="formatNumber(this)" required
                                    value="{{ old('penghasilan_bruto', number_format($laporan->penghasilan_bruto, 0, ',', '.')) }}">
                            </div>

                            <!-- PTKP -->
                            <div class="mb-3">
                                <label for="ptkp" class="form-label">PTKP</label>
                                <input type="text" class="form-control" id="ptkp" name="ptkp"
                                    oninput="formatNumber(this)" required
                                    value="{{ old('ptkp', number_format($laporan->ptkp, 0, ',', '.')) }}">
                            </div>

                            <!-- Tarif Pajak -->
                            <div class="mb-3">
                                <label for="tarif_pajak" class="form-label">Tarif Pajak (%)</label>
                                <input type="number" step="0.01" class="form-control" id="tarif_pajak"
                                    name="tarif_pajak" value="{{ old('tarif_pajak', $laporan->tarif_pajak) }}" required>
                            </div>

                            <!-- Nominal Pajak -->
                            <div class="mb-3">
                                <label for="nominal_pajak" class="form-label">Nominal Pajak</label>
                                <input type="text" class="form-control" id="nominal_pajak" name="nominal_pajak"
                                    oninput="formatNumber(this)" required
                                    value="{{ old('nominal_pajak', number_format($laporan->nominal_pajak, 0, ',', '.')) }}">
                            </div>

                            <!-- Masa Pajak -->
                            <div class="mb-3">
                                <label for="masa_pajak" class="form-label">Masa Pajak</label>
                                <input type="text" class="form-control" id="masa_pajak" name="masa_pajak"
                                    value="{{ old('masa_pajak', $laporan->masa_pajak) }}" required>
                            </div>

                            <!-- Upload Bukti Potong -->
                            <div class="mb-3">
                                <label for="bukti_potong" class="form-label">Upload Bukti Potong (PNG)</label>
                                <input type="file" class="form-control" id="bukti_potong" name="bukti_potong"
                                    accept="image/png">
                                @if ($laporan->bukti_potong)
                                    <p class="mt-2">Bukti Potong Saat Ini: <a
                                            href="{{ asset('storage/bukti_potong/' . $laporan->bukti_potong) }}"
                                            target="_blank">{{ $laporan->bukti_potong }}</a></p>
                                @endif
                            </div>

                            <!-- Status -->
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="Verifikasi Data"
                                        {{ old('status', $laporan->status) == 'verifikasi' ? 'selected' : '' }}>
                                        Verifikasi Data
                                    </option>
                                    <option value="Proses Pelaporan"
                                        {{ old('status', $laporan->status) == 'Proses Pelaporan' ? 'selected' : '' }}>
                                        Proses Pelaporan
                                    </option>
                                    <option value="Pelaporan Selesai"
                                        {{ old('status', $laporan->status) == 'Pelaporan Selesai' ? 'selected' : '' }}>
                                        Pelaporan Selesai
                                    </option>
                                    <option value="Hubungi Kami"
                                        {{ old('status', $laporan->status) == 'Hubungi Kami' ? 'selected' : '' }}>
                                        Hubungi Kami
                                    </option>
                                </select>
                            </div>

                            <!-- Tombol Simpan -->
                            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                            <a href="{{ route('laporan.index') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        function formatNumber(input) {
            let value = input.value.replace(/\D/g, ''); // Remove non-numeric characters
            if (value.length > 0) {
                value = parseInt(value, 10).toLocaleString('id-ID'); // Format number with thousands separators
            }
            input.value = value;
        }

        document.addEventListener('DOMContentLoaded', () => {
            const urlParams = new URLSearchParams(window.location.search);

            if (urlParams.has('brutoIncome')) {
                document.getElementById('penghasilan_bruto').value = urlParams.get('brutoIncome');
            }
            if (urlParams.has('ptkp')) {
                document.getElementById('ptkp').value = urlParams.get('ptkp');
            }
            if (urlParams.has('tarif')) {
                document.getElementById('tarif_pajak').value = urlParams.get('tarif');
            }
            if (urlParams.has('pph21')) {
                document.getElementById('nominal_pajak').value = urlParams.get('pph21');
            }
        });

        document.querySelectorAll('input[type="text"]').forEach(input => {
            input.addEventListener('input', function() {
                formatNumber(this);
            });
        });
    </script>
@endsection
