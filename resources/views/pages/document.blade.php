@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'DOKUMEN'])
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            @can('isMahasiswa')
            <div class="card">
                <div class="card-body pt-2">
                    <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">Dokumen</span>
                    <a href="javascript:;" class="card-title h5 d-block text-darker">
                        Surat Pengantar Kerja Praktek
                    </a>
                    <p class="card-description mb-4">
                        Surat pengantar ini berperan penting dan memudahkan mahasiswa untuk mendapatkan izin dari pihak
                        perusahaan atau institusi,serta membantu memperjelas tujuan dan maksud dari praktek kerja yang
                        akan dilakukan
                    </p>
                    <div class="author align-items-center">
                        <i class="ni ni-collection text-warning text-sm opacity-10"></i>
                        <div class="name ps-3">
                            <span><a href="{{ route('page', ['page' => 'suratpengantar']) }}">KLIK UNTUK
                                    GENERATE</a></span>
                            <div class="stats">
                                <small>Universitas Contoh</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-body pt-2">
                    <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">Dokumen</span>
                    <a href="javascript:;" class="card-title h5 d-block text-darker">
                        Kartu Rencana Studi
                    </a>
                    <p class="card-description mb-4">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit quas iste laborum accusantium
                        aut! Omnis cupiditate quo facilis accusamus officia vero accusantium! Assumenda, eum! Officiis
                        maxime dolorem molestias libero maiores!
                    </p>
                    <div class="author align-items-center">
                        <i class="ni ni-collection text-warning text-sm opacity-10"></i>
                        <div class="name ps-3">
                            <span><a href="{{ route('page', ['page' => 'suratkrs']) }}">KLIK UNTUK
                                    GENERATE</a></span>
                            <div class="stats">
                                <small>Universitas Contoh</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @elsecan('isKaprodi')
            <br>
            <div class="card">
                <div class="card-body pt-2">
                    <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">Dokumen</span>
                    <a href="javascript:;" class="card-title h5 d-block text-darker">
                        Surat Pengantar SK Kerja Praktek
                    </a>
                    <p class="card-description mb-4">
                        Surat pengantar ini berperan penting dan memudahkan mahasiswa untuk mendapatkan izin dari pihak
                        perusahaan atau institusi,serta membantu memperjelas tujuan dan maksud dari praktek kerja yang
                        akan dilakukan
                    </p>
                    <div class="author align-items-center">
                        <i class="ni ni-collection text-warning text-sm opacity-10"></i>
                        <div class="name ps-3">
                            <span><a href="{{ route('page', ['page' => 'suratsk']) }}">KLIK UNTUK GENERATE</a></span>
                            <div class="stats">
                                <small>Universitas Contoh</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endcan
        </div>
    </div>
    @include('layouts.footers.auth.footer')
</div>
@endsection