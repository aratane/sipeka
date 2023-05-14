@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Kartu Rencana Studi'])
    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4 justify-content-center">
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h1 class="mb-1">
                            Kartu Rencana Studi Mahasiswa
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Histori Pengisian Kartu Rencana Studi (KRS)</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#
                                        </th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            NAMA MAHASISWA</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                            PRODI</th>
                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-7">
                                            Nama Dosen Wali</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            TANGGAL KIRIM KARTU</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                            STATUS KARTU RENCANA STUDI</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @forelse ($hiskrs as $data)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    {{ $no++ }}
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div>
                                                        <img src="/img/team-2.jpg" class="avatar avatar-sm me-3"
                                                            alt="user1">
                                                    </div>
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <h6 class="mb-0 text-sm">{{ $data->Nm_Mahasiswa }}</h6>
                                                        <p class="text-xs text-secondary mb-0">{{ $data->NIM }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-xs font-weight-bold mb-0">{{ $data->Fakultas }}</p>
                                                <p class="text-xs text-secondary mb-0">{{ $data->Prodi }}</p>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $data->Nm_Dosen }}</span>
                                            </td>
                                            <td class="align-middle text-center">
                                                <span
                                                    class="text-secondary text-xs font-weight-bold">{{ $data->created_at }}</span>
                                            </td>
                                            <td class="align-middle text-center text-sm">
                                                @if ($data->status == 'diproses')
                                                    <label class="btn btn-info">SEDANG DI PROSES</label>
                                                @elseif($data->status == 'disetujui')
                                                    <label class="btn btn-success">DISETUJUI</label>
                                                @else
                                                    <label class="btn btn-danger">DITOLAK</label>
                                                @endif
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data Histori KRS belum tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('pengajuan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @foreach ($mahasiswa as $data)
                                {{-- @if ($data->NIM === null) --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">IPK</label>
                                            <input class="form-control" type="text" name="IPK"
                                                value="{{ $data->IPK }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">SKS</label>
                                            <input class="form-control" type="text" name="SKS"
                                                value="{{ $data->SKS }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Stambuk</label>
                                            <input class="form-control" type="text" name="Stambuk"
                                                value="{{ $data->Stambuk }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Prodi</label>
                                            <input class="form-control" type="text" name="Prodi"
                                                value="{{ $data->Prodi }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Fakultas</label>
                                            <input class="form-control" type="text" name="Fakultas"
                                                value="{{ $data->Fakultas }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">NIDN Dosen</label>
                                            <input class="form-control" type="text" name="NIDN"
                                                value="{{ $data->NIDN }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nama
                                                Dosen Wali</label>
                                            <input class="form-control" type="text" name="Nm_Dosen"
                                                value="{{ $data->Nm_Dosen }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">IPK
                                                Sebelumnya</label>
                                            <input class="form-control" type="text" name="IPKSebelumnya">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Rencana
                                                SKS</label>
                                            <input class="form-control" type="text" name="RencanaSKS">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nama
                                                Mahasiswa</label>
                                            <input class="form-control" type="text" name="Nm_Mahasiswa"
                                                value="{{ $data->Nm_Mahasiswa }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Jenis
                                                Kelamin</label>
                                            <input class="form-control" type="text" name="JK"
                                                value="{{ $data->JK }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Agama</label>
                                            <input class="form-control" type="text" name="Agama"
                                                value="{{ $data->Agama }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Alamat</label>
                                            <input class="form-control" type="text" name="Alamat"
                                                value="{{ $data->Alamat }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">NIM</label>
                                            <input class="form-control" type="text" name="NIM"
                                                value="{{ $data->NIM }}">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                                <button type="reset" class="btn btn-md btn-warning">RESET</button>
                                {{-- @else
                                    <label class="btn btn-md btn-warning">KAMU SUDAH MENGISI FORM INI, SILAKAN TUNGGU
                                        PERSETUJUAN DOSEN WALI</label>
                                @endif --}}
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
