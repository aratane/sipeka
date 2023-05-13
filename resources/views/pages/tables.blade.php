@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'VPPK'])

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h6>List Pengajuan Kerja Praktek</h6>
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
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        PRODI</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        STATUS KELULUSAN MATKUL</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        TANGGAL</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @forelse ($pengajuan as $data)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            {{ $no++ }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $data->nama }}</h6>
                                                <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $data->fakultas }}</p>
                                        <p class="text-xs text-secondary mb-0">{{ $data->prodi }}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        @if ($data->status_lulus == 'tidaklulus')
                                        <label class="btn btn-danger">TIDAK LULUS</label>
                                        @else
                                        <label class="btn btn-success">LULUS</label>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center">
                                        <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                                    </td>
                                    <td class="align-middle text-center">
                                    
                                        <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"  class="text-white btn btn-info font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            LIHAT DOKUMEN
                                        </button>
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pengajuan Prakek Kerja</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
        <p>Validasi Pengajuan Praktek Kerja</p>
        
        <!-- <iframe src = "ViewerJS/#../doc/KRS.pdf" width='400' height='300' allowfullscreen webkitallowfullscreen></iframe> -->
        <div id="adobe-dc-view"></div>
    <script type="text/javascript" src="https://acrobatservices.adobe.com/view-sdk/viewer.js"></script>  
        <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Dokumen Pengajuan</label><br>
            <button class="btn btn-primary"><a class="text-white" href="download/Pengajuan_Kerja.pdf">Unduh Dokumen</a></button>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">KRS</label><br>
            <button class="btn btn-primary"><a class="text-white" href="download/KRS.pdf">Unduh Dokumen</a></button>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Approve</button>
      </div>
    </div>
  </div>
</div>
                                        
                                        
                                        
                                    </td>
                                </tr>
                                @empty
                                <div class="alert alert-danger">
                                    Data Post belum tersedia.
                                </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $pengajuan->links() }}
                    </div>
                </div>
            </div>
        </div>
        

    
    </div>
    @include('layouts.footers.auth.footer')
</div>
@endsection