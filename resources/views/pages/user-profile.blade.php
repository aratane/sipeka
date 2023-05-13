
@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
<div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
                    <span class="mask bg-primary opacity-6"></span>
                </div>
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])

    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3 mx-4 mt-4">
            <div class="row gx-4 justify-center">

                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h1 class="mb-1">
                            PROFILE
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
            <div class="col-md-8">
                <div class="card">
                    @foreach ($mahasiswa as $m)
                    <form role="form" method="POST" action={{ route('profile.update') }} enctype="multipart/form-data">
                        @csrf
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Edit Profile</p>
                                <button type="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">User Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Username</label>
                                        <input class="form-control" type="text" name="username" value="{{ old('username', auth()->user()->username) }}" onfocus="focused(this)" onfocusout="defocused(this)">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Email address</label>
                                        <input class="form-control" type="email" name="email" value="{{ old('email', auth()->user()->email) }}" onfocus="focused(this)" onfocusout="defocused(this)">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nama Mahasiswa</label>
                                        <input class="form-control" type="text" name="Nm_Mahasiswa" value="{{ $m->Nm_Mahasiswa}}" onfocus="focused(this)" onfocusout="defocused(this)" placeholder="Get 'Nama' From Table 'Mahasiswa'">
                                    </div>
                                </div>
                                
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>
                                        <input class="form-control" type="text" name="JK" value="{{ $m->JK}}" onfocus="focused(this)" onfocusout="defocused(this)" placeholder="Get 'JK' From Table 'Mahasiswa'">
                                    </div>
                                </div><div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Fakultas</label>
                                        <input class="form-control" type="text" name="Fakultas" value="{{ $m->Fakultas}}" onfocus="focused(this)" onfocusout="defocused(this)" placeholder="Get 'Fakultas' From Table 'Mahasiswa'">
                                    </div>
                                </div><div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Prodi</label>
                                        <input class="form-control" type="text" name="firstname" value="{{ $m->Prodi}}" onfocus="focused(this)" onfocusout="defocused(this)" placeholder="Get 'Prodi' From Table 'Mahasiswa'">
                                    </div>
                                </div><div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Agama</label>
                                        <input class="form-control" type="text" name="firstname" value="{{ $m->Agama }}" onfocus="focused(this)" onfocusout="defocused(this)" placeholder="Get 'Agama' From Table 'Mahasiswa'">
                                    </div>
                                </div><div class="col-md-8">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">NIM</label>
                                        <input class="form-control" type="text" name="firstname" value="{{ $m->NIM }}" onfocus="focused(this)" onfocusout="defocused(this)" placeholder="Get 'NIM' From Table 'Mahasiswa'">
                                    </div>
                                </div></div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Contact Information</p>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Alamat</label>
                                        <input class="form-control" type="text" name="address"
                                            value="{{ $m->Alamat}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">No Telp</label>
                                        <input class="form-control" type="text" name="about"
                                            value="{{ $m->No_Tlp}}">
                                    </div>
                                </div>

                                <!-- Address Detail -->

                                <!-- <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">City</label>
                                        <input class="form-control" type="text" name="city"
                                            value="{{ old('city', auth()->user()->city) }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Country</label>
                                        <input class="form-control" type="text" name="country"
                                            value="{{ old('country', auth()->user()->country) }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Postal code</label>
                                        <input class="form-control" type="text" name="postal"
                                            value="{{ old('postal', auth()->user()->postal) }}">
                                    </div>
                                </div> -->


                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">About Me</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Bio</label>
                                        <input class="form-control" type="text" name="about"
                                            value="{{ $m->Bio}}">
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <img src="/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
                    <div class="row justify-content-center">
                        <div class="col-4 col-lg-4 order-lg-2">
                            <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                <a href="javascript:;">
                                    <img src="/img/team-2.jpg"
                                        class="rounded-circle img-fluid border border-2 border-white">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">

                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col">
                                <div class="d-flex justify-content-center">
                                    <div class="d-grid text-center">
                                        <span
                                            class="text-lg font-weight-bolder">{{ old('firstname', auth()->user()->firstname) }}
                                            {{ old('lastname', auth()->user()->lastname) }}</span>
                                        <span class="text-sm opacity-8">{{ $m->Fakultas}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <div class="h6 font-weight-300 d-flex justify-content-center gap-2 align-items-center">
                                <i class="ni ni-pin-3 location_pin "></i>{{ $m->Prodi}}
                            </div>
                            <div class="h6 my-4">
                                <i class="ni business_briefcase-24 mr-2"></i>Dosen Pembimbing - Tegar Firmansyah
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>University of Computer Science
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @include('layouts.footers.auth.footer')
    </div>

    <script src="./assets/js/plugins/chartjs.min.js"></script>
    
@endsection
