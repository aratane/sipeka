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
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit quas iste laborum accusantium
                                aut! Omnis cupiditate quo facilis accusamus officia vero accusantium! Assumenda, eum! Officiis
                                maxime dolorem molestias libero maiores!
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
                @elsecan('isKaprodi')
                    <br>
                    <div class="card">
                        <div class="card-body pt-2">
                            <span class="text-gradient text-primary text-uppercase text-xs font-weight-bold my-2">Dokumen</span>
                            <a href="javascript:;" class="card-title h5 d-block text-darker">
                                Surat Pengantar SK Kerja Praktek
                            </a>
                            <p class="card-description mb-4">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem iure itaque, deleniti suscipit
                                numquam exercitationem quia, totam maxime repellendus animi cumque nam quam. Aliquam temporibus
                                alias molestias suscipit sapiente. Delectus.
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
