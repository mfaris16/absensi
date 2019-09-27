@extends('layouts.app')


@section('content')
@include('_partials.navbar')
@include('_partials.sidebar')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Data Siswa </h3>
      </div>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bordered table</h4>
              <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th> # </th>
                    <th> Nama </th>
                    <th> Ambalan </th>
                    <th> Sangga </th>
                    <th> Ruangan </th>
                    {{-- <th> Status </th> --}}
                    <th> Action </th>
                  </tr>
                </thead>
                <tbody>
                  @php
                      $no = 1;
                  @endphp
                  @foreach ($siswaku as $siswa)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$siswa->nama_siswa}}</td>
                        <td>{{$siswa->nama_ambalan}}</td>
                        <td>{{$siswa->nama_sangga}}</td>
                        <td>{{$siswa->ruangan}}</td>
                        {{-- <td>{{$siswa->status}}</td> --}}
                        <td>
                          <button type="button" data-toggle="modal" data-target="#myModal{{ $siswa->id }}" class="btn btn-outline-primary btn-icon-text">
                          <i class="mdi mdi-file-check btn-icon-prepend"></i> Submit </button>
                      </div>
                      </td>
                      </tr>

                      <div id="myModal{{ $siswa->id }}" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <!-- konten modal-->
                            <div class="modal-content">
                              <!-- heading modal -->
                              <div class="modal-header">
                                <h4 class="modal-title">Presensi</h4>
                              </div>
                              <!-- body modal -->
                              <div class="modal-body">
                                  <div class="col-md-12 grid-margin stretch-card">
                                      <div class="card">
                                        <div class="card-body">
                                          <h4 class="card-title">Default form</h4>
                                          <p class="card-description"> Basic form layout </p>
                                          <form class="forms-sample" action="/absensi/store" method="POST">
                                              @csrf
                                            <div class="form-group">
                                              <label for="nama">Nama</label>
                                              <input type="text" class="form-control" id="nama" value="{{$siswa->nama_siswa}}" readonly>
                                              <input type="hidden" class="form-control" name="id_siswa" id="nama" value="{{$siswa->id}}">
                                            </div>
                                            <div class="form-group">
                                              <label for="email">Ambalan</label>
                                              <input type="text" class="form-control" id="email" value="{{$siswa->nama_ambalan}}" readonly>
                                            </div>
                                            <div class="form-group">
                                              <label for="sangga">Sangga</label>
                                              <input type="text" class="form-control" id="sangga" value="{{$siswa->nama_sangga}}" readonly>
                                              <input type="hidden" class="form-control" name="tanggal_hadir" value="{{\Carbon\Carbon::now()->format('d-m-Y')}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="presensi">Presensi</label>
                                                <div class="col-sm-5">
                                                    <div class="form-check">
                                                      <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="status" id="presensi" value="Hadir"> Hadir </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-5">
                                                    <div class="form-check">
                                                      <label class="form-check-label">
                                                        <input type="radio" class="form-check-input" name="status" id="presensi" value="Sakit"> Sakit </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-5">
                                                      <div class="form-check">
                                                        <label class="form-check-label">
                                                          <input type="radio" class="form-check-input" name="status" id="presensi" value="Izin"> Izin </label>
                                                      </div>
                                                    </div>
                                                    <div class="col-sm-5">
                                                      <div class="form-check">
                                                        <label class="form-check-label">
                                                          <input type="radio" class="form-check-input" name="status" id="presensi" value="Alfa"> Alfa </label>
                                                      </div>
                                                    </div>
                                              </div>
                                            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                                            <button class="btn btn-light" data-dismiss="modal">Cancel</button>
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach
                        </tbody>
                
              </table>
              
@endsection