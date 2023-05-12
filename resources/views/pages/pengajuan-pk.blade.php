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
                            @foreach ($krs as $k)
                                <p class="text-uppercase text-sm">Informasi KRS</p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">SKS Yang
                                                Dicapai</label>
                                            <input class="form-control" type="text" name="sks"
                                                value="{{ $k->sks }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">IPK Yang
                                                Dicapai</label>
                                            <input class="form-control" type="text" name="ipk"
                                                value="{{ $k->ipk }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Stambuk</label>
                                            <input class="form-control" type="text" name="stambuk"
                                                value="{{ $k->stambuk }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Program Studi</label>
                                            <input class="form-control" type="text" name="prodi"
                                                value="{{ $k->prodi }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Kode
                                                Penasehat</label>
                                            <input class="form-control" type="text" name="city" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nama
                                                Penasehat</label>
                                            <input class="form-control" type="text" name="city" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">IP Semester
                                                Lalu</label>
                                            <input class="form-control" type="text" name="city" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Rencana SKS</label>
                                            <input class="form-control" type="text" name="city" value="">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Nama
                                                Mahasiswa</label>
                                            <input class="form-control" type="text" name="city"
                                                value="{{ $k->nama }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>
                                            <input class="form-control" type="text" name="city"
                                                value="{{ $k->jenis_kelamin }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Agama</label>
                                            <input class="form-control" type="text" name="city"
                                                value="{{ $k->agama }}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="form-control-label">Alamat</label>
                                            <input class="form-control" type="text" name="country"
                                                value="{{ $k->alamat }}">
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
                                                                        {{ $loop->first }}
                                                                    </div>
                                                                </td>
                                                                <td class="align-middle text-left text-sm">
                                                                    <i class="fa fa-lock" aria-hidden="true"></i>
                                                                </td>
                                                                <td class="align-middle text-center">
                                                                    <span
                                                                        class="text-secondary text-xs font-weight-bold">{{ $k->id_mapel }}</span>
                                                                </td>
                                                                <td class=" text-center">
                                                                    <span class="text-secondary text-xs font-weight-bold">
                                                                        {{ $k->nama_mapel }}</span>
                                                                </td>
                                                                <td class="align-middle text-center">
                                                                    <span class="text-secondary text-xs font-weight-bold">
                                                                        {{ $k->sks_mapel }}</span>
                                                                    </span>
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
