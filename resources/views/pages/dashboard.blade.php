@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
<div class="position-absolute w-100 min-height-300 top-0"
    style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/profile-layout-header.jpg'); background-position-y: 50%;">
    <span class="mask bg-primary opacity-6">
    </span>
</div>
@include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-12 col-sm-6 mb-xl-0 mb-4 col-md-12 col-12">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row text-center justify-content-center">
                        <div class="col-12 col-md-12">
                            <div class="numbers">
                                <h1>
                                    DASHBOARD
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card ">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex justify-content-center">
                        <div class="card p-3 custom-subhead-font3 ini-judul mb-2" id="quote">
                            Selamat Datang Di Aplikasi Sistem Pengajuan Praktek Kerja
                        </div>
                        <script src="">
                            gsap.to(".ini-judul",{
                                    x: 100;
                                    y: 200;
                                    
                                })
                        </script>
                    </div>
                </div>
                <div class="card-header col-lg-12">
                    <div class="d-flex justify-content-between gap-4">
                        <h6 class="col-lg-4 custom-subhead-font">
                            Syarat Dan Ketentuan Pengajuan Praktek Kerja
                        </h6>
                        <div class="container carousel-slider d-none d-md-flex row justify-content-center">
                            <input checked="" class="d-none" id="s1" name="slider" type="radio">
                            <input class="d-none" id="s2" name="slider" type="radio">
                            <div class="cards h-100">
                                <label for="s1" id="slide1">
                                    <div class="card row">
                                        <div class="infos p-0 col-7">
                                            <span class="lorem">
                                                Mahasiswa telah melakukan pengisian KRS (Kartu Rencana Studi) dan telah
                                                di approve dosen wali yang bersangkutan
                                            </span>
                                        </div>
                                        <div class="infos p-0 col-4 ">
                                            <img alt="" class="imejii " height="40rem" sizes="cover"
                                                src="assets/img/bg-profile.jpg" width="170px">
                                            </img>
                                        </div>
                                    </div>
                                </label>
                                <label for="s2" id="slide2">
                                    <div class="card">
                                        <div class="infos p-0">
                                            <span class="lorem">
                                                Mahasiswa diharuskan lulus di mata kuliahnya terlebih dahulu
                                            </span>
                                        </div>
                                    </div>
                                </label>
                            </div>
                            </input>
                            </input>
                        </div>
                    </div>
                </div>
                @can('isMahasiswa')
                <div class="card-header col-lg-12">
                    <div class="d-flex justify-content-around gap-4">
                        <h6 class="col-lg-4 card badge badge-info bg-info custom-subhead-font2">Status Kelulusan</h6>
                        <h6 class="col-lg-7 badge badge-success bg-success card custom-subhead-font2">LULUS</h6>
                    </div>
                    <div class="d-flex justify-content-around gap-4">
                        <div class="col-lg-4 card bg-primary h-1 mb-2"></div>
                        <div class="col-lg-7 card bg-secondary h-1 mb-2"></div>
                    </div>
                    <div class="d-flex justify-content-around gap-4">
                        <h6 class="col-lg-4 card badge badge-info bg-info custom-subhead-font2">Status Pengisian KRS
                        </h6>
                        <h6 class="col-lg-7 badge badge-success bg-secondary card custom-subhead-font2">belum di approve
                        </h6>
                    </div>
                </div>
                <div class="card-header col-lg-12">
                    <form action="" method="">
                        <div class="d-flex justify-content-between gap-5">
                            <div
                                class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border drop-files mt-0 mr-5 col-6">
                                <div class="flex-auto p-4">
                                    <div class="flex flex-row -mx-3 justify-center">
                                        <div class="bg-black files-icons flex-none max-w-full px-3">
                                            <div>
                                                <h6 class="mb-2 font-bold text-center dark:text-white">
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-row -mx-3 justify-center">
                                        <div class="flex-none w-2/3 max-w-full px-3 ">
                                            <div>
                                                <h6 class="mb-2 font-bold text-center dark:text-white">
                                                    Drag and drop files,or
                                                    <input aria-label="File browser example" class="custom-file-input"
                                                        id="file" placeholder="some files" type="file" />
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h6 class="col-lg-4 custom-subhead-font text-right">
                                Upload Dokumen Pengajuan Praktek Kerja
                            </h6>
                        </div>
                        <input class="btn btn-primary float-right mt-5 col-12" name="Upload" placeholder="Upload"
                            type="submit" value="Upload">
                        </input>
                    </form>
                </div>
                @elsecan('isKaprodi')
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-4">
                            <div class="card-header pb-0">
                                <h6>
                                    List Pengajuan Kerja Praktek
                                </h6>
                            </div>
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
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    NAMA MAHASISWA
                                                </th>
                                                <th
                                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                    PRODI
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    STATUS KELULUSAN MATKUL
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    TANGGAL
                                                </th>
                                                <th
                                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img alt="user1" class="avatar avatar-sm me-3"
                                                                src="/img/team-2.jpg">
                                                            </img>
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">
                                                            </h6>
                                                            <p class="text-xs text-secondary mb-0">
                                                                john@creative-tim.com
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="text-xs font-weight-bold mb-0">
                                                    </p>
                                                    <p class="text-xs text-secondary mb-0">
                                                    </p>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <label class="badge bg-danger badge-danger">
                                                        TIDAK LULUS
                                                    </label>
                                                    <label class="badge bg-success badge-success">
                                                        LULUS
                                                    </label>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <span class="text-secondary text-xs font-weight-bold">
                                                        23/04/18
                                                    </span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <button class="text-white btn btn-info font-weight-bold text-xs"
                                                        data-bs-target="#exampleModal" data-bs-toggle="modal"
                                                        data-bs-whatever="@getbootstrap" data-original-title="Edit user"
                                                        data-toggle="tooltip">
                                                        LIHAT DOKUMEN
                                                    </button>
                                                    <div aria-hidden="true" aria-labelledby="exampleModalLabel"
                                                        class="modal fade" id="exampleModal" tabindex="-1">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                                        Pengajuan Prakek Kerja
                                                                    </h5>
                                                                    <button aria-label="Close" class="btn-close"
                                                                        data-bs-dismiss="modal" type="button">
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form>
                                                                        <p>
                                                                            Validasi Pengajuan Praktek Kerja
                                                                        </p>
                                                                        <!-- <iframe src = "ViewerJS/#../doc/KRS.pdf" width='400' height='300' allowfullscreen webkitallowfullscreen></iframe> -->
                                                                        <div id="adobe-dc-view">
                                                                        </div>
                                                                        <script
                                                                            src="https://acrobatservices.adobe.com/view-sdk/viewer.js"
                                                                            type="text/javascript">
                                                                        </script>
                                                                        <div class="mb-3">
                                                                            <label class="col-form-label"
                                                                                for="recipient-name">
                                                                                Dokumen Pengajuan
                                                                            </label>
                                                                            <br>
                                                                            <button class="btn btn-primary">
                                                                                <a class="text-white"
                                                                                    href="download/Pengajuan_Kerja.pdf">
                                                                                    Unduh Dokumen
                                                                                </a>
                                                                            </button>
                                                                            </br>
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label class="col-form-label"
                                                                                for="message-text">
                                                                                KRS
                                                                            </label>
                                                                            <br>
                                                                            <button class="btn btn-primary">
                                                                                <a class="text-white"
                                                                                    href="download/KRS.pdf">
                                                                                    Unduh Dokumen
                                                                                </a>
                                                                            </button>
                                                                            </br>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button class="btn btn-secondary"
                                                                        data-bs-dismiss="modal" type="button">
                                                                        Close
                                                                    </button>
                                                                    <button class="btn btn-primary" type="button">
                                                                        Approve
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <!-- <div class="alert alert-danger">
                                    Data Post belum tersedia.
                                </div> -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endcan
            </div>
        </div>
    </div>
</div>
@include('layouts.footers.auth.footer')
@endsection

@push('js')
<script src="./assets/js/plugins/chartjs.min.js">
</script>
<script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(251, 99, 64, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(251, 99, 64, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(251, 99, 64, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fb6340",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
</script>
@endpush