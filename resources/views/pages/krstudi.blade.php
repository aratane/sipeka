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
                                            <input class="form-control" type="text" name="SKS">
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
                                            <label for="example-text-input" class="form-control-label">Kode
                                                Penasehat</label>
                                            <input class="form-control" type="text" name="KD_Penasehat">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nama
                                                Penasehat</label>
                                            <input class="form-control" type="text" name="Nm_Penasehat">
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
