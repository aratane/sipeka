@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Pengajuan Praktek Kerja'])
<div class="card shadow-lg mx-4 card-profile-bottom">
    <div class="card-body p-3">
        <div class="row gx-4 justify-content-center">

            <div class="col-auto my-auto">
                <div class="h-100">
                    <h1 class="mb-1">
                        Pengajuan PK
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
                <form role="form" method="POST" action={{ route('profile.update') }} enctype="multipart/form-data">
                    @csrf
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Validasi Pengajuan</p>
                            <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                        </div>
                    </div>

                    <div class="card-body">
                        <p class="text-uppercase text-sm">Biodata</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">File Pengajuan Praktek
                                        Kerja</label>
                                    <input class="form-control" type="file" name="file-pengajuan" value="">
                                </div>
                            </div>


                        </div>
                        <p class="text-uppercase text-sm">Biodata</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Username</label>
                                    <input class="form-control" type="text" name="username"
                                        value="{{ old('username', auth()->user()->username) }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Email address</label>
                                    <input class="form-control" type="email" name="email"
                                        value="{{ old('email', auth()->user()->email) }}">
                                </div>
                            </div>

                        </div>
                        @foreach($krs as $k)
                        <hr class="horizontal dark">
                        <p class="text-uppercase text-sm">Informasi KRS</p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">SKS Yang Dicapai</label>
                                    <input class="form-control" type="text" name="sks" value="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">IPK Yang Dicapai</label>
                                    <input class="form-control" type="text" name="city"
                                        value="{{ old('city', auth()->user()->city) }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Stambuk</label>
                                    <input class="form-control" type="text" name="city"
                                        value="{{ old('city', auth()->user()->city) }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Program Studi</label>
                                    <input class="form-control" type="text" name="city"
                                        value="{{ old('city', auth()->user()->city) }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Kode Penasehat</label>
                                    <input class="form-control" type="text" name="city"
                                        value="{{ old('city', auth()->user()->city) }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Penasehat</label>
                                    <input class="form-control" type="text" name="city"
                                        value="{{ old('city', auth()->user()->city) }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">IP Semester Lalu</label>
                                    <input class="form-control" type="text" name="city"
                                        value="{{ old('city', auth()->user()->city) }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Rencana SKS</label>
                                    <input class="form-control" type="text" name="city"
                                        value="{{ old('city', auth()->user()->city) }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Mahasiswa</label>
                                    <input class="form-control" type="text" name="city"
                                        value="{{ $k->nama; }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>
                                    <input class="form-control" type="text" name="city"
                                        value="{{ old('city', auth()->user()->city) }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Agama</label>
                                    <input class="form-control" type="text" name="city"
                                        value="{{ old('city', auth()->user()->city) }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Alamat</label>
                                    <input class="form-control" type="text" name="country"
                                        value="{{ old('country', auth()->user()->country) }}">
                                </div>
                            </div>

                        </div>
                        <hr class="horizontal dark">

                        <div class="row">
                            <!-- Table SKS -->
                            <div class="col-12">
                                <div class="card mb-4">

                                    <div class="card-body px-0 pt-0 pb-2">
                                        <div class="table-responsive p-0">
                                            <table class="table align-items-center mb-0">
                                                <thead>
                                                    <tr>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            #
                                                        </th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            Status</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Kode MK</th>
                                                        <th
                                                            class="text-uppercase text-secondary text-xxs text-center font-weight-bolder opacity-7">
                                                            Nama Mata Kuliah</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                            SKS</th>
                                                        <th
                                                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                            Semester</th>


                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td>
                                                            <div class="d-flex px-2 py-1">
                                                                1
                                                            </div>
                                                        </td>
                                                        <td class="align-middle text-left text-sm">
                                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                                        </td>
                                                        <td class="align-middle text-center">
                                                            <span
                                                                class="text-secondary text-xs font-weight-bold">{{ $k->NIM }}</span>
                                                        </td>
                                                        <td class=" text-center">
                                                            <span class="text-secondary text-xs font-weight-bold">Gambar
                                                                Mesin</span>
                                                        </td>


                                                        <td class="align-middle text-center">
                                                            <span
                                                                class="text-secondary text-xs font-weight-bold">3</span>
                                                        </td>
                                                        <td class="align-middle text-center">

                                                            <span
                                                                class="text-secondary text-xs font-weight-bold">AKHIR20102011</span>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('layouts.footers.auth.footer')
</div>
@endsection
