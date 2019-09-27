@extends('layouts.app')


@section('content')
@include('_partials.navbar')
@include('_partials.sidebar')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Data Siswa </h3>
      </div>
      @if (\Session::has('success'))
                  <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                  </div><br />
                 @endif
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bordered table</h4>
              @if(auth()->user()->roles =='Admin')
              <button type="button" data-toggle="modal" data-target="#tambah-Modal" class="btn btn-outline-primary btn-icon-text">
                  <i class="mdi mdi-file-check btn-icon-prepend"></i> Tambah Data </button>
              @endif
              <div class="table-responsive">
              <table id="tabel-data" class="table table-bordered table-hover">
                @if(auth()->user()->roles == 'Admin')
                <thead>
                  <tr>
                    <th> # </th>
                    <th> NIS </th>
                    <th> Nama Siswa </th>
                    <th> Ambalan </th>
                    <th> Kelas </th>
                    <th> Jurusan </th>
                    <th> Sangga </th>
                    <th> Ruangan </th>
                    @if(auth()->user()->roles =='Admin')
                    <th> Action </th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                  @php
                   $no = 1;   
                  @endphp
                  @foreach ($siswaku as $siswa)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$siswa->nis}}</td>
                        <td>{{$siswa->nama_siswa}}</td>
                        <td>{{$siswa->nama_ambalan}}</td>
                        <td>{{$siswa->nama_kelas}}</td>
                        <td>{{$siswa->nama_jurusan}}</td>
                        <td>{{$siswa->nama_sangga}}</td>
                        <td>{{$siswa->ruangan}}</td>
                        @if(auth()->user()->roles =='Admin')
                        <td>
                            <button type="button" data-toggle="modal" data-target="#myModal{{ $siswa->id }}" class="btn btn-outline-primary btn-icon-text">
                                <i class="mdi mdi-border-color btn-icon-prepend"></i> Edit </button>
                            
                            <form 
                              class="d-inline"
                              action="{{action('SiswaController@destroy', $siswa->id)}}"
                              method="POST"
                              onsubmit="return confirm('Yakin Hapus Data?')"
                              >
                            
                              @csrf 
            
                              <input 
                                type="hidden" 
                                value="DELETE" 
                                name="_method">
            
                                <button type="submit" class="btn btn-outline-primary btn-icon-text">
                                    <i class="mdi mdi mdi-delete btn-icon-prepend"></i> Hapus </button>
                              
                            </form>
                          </td>
                        @endif
                      </tr>
                      <div id="myModal{{ $siswa->id }}" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <!-- konten modal-->
                            <div class="modal-content">
                              <!-- heading modal -->
                              <div class="modal-header">
                                <h4 class="modal-title">Edit Siswa</h4>
                              </div>
                              <!-- body modal -->
                              <div class="modal-body">
                                  <div class="col-md-12 grid-margin stretch-card">
                                      <div class="card">
                                        <div class="card-body">
                                          <h4 class="card-title">Default form</h4>
                                          <p class="card-description"> Basic form layout </p>
                                          <form class="forms-sample" action="{{action('SiswaController@update', $siswa->id)}}" method="POST">
                                            @method('put')
                                              @csrf
                                            <div class="form-group">
                                                <label for="nis">NIS</label>
                                                <input name="nis" type="number" class="form-control" id="nis" value="{{$siswa->nis}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_siswa">Nama Siswa</label>
                                                <input name="nama_siswa" type="text" class="form-control" id="nama_siswa" value="{{$siswa->nama_siswa}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="ambalan">Ambalan</label>
                                                <select class="form-control" name="id_ambalan" id="ambalan">
                                                  @foreach (\App\Ambalan::all() as $ambalan)
                                                  <option value="{{$ambalan->id}}">{{$ambalan->nama_ambalan}}</option>
                                                  @endforeach
                                                </select>
                                              </div>
                                            <div class="form-group">
                                              <label for="kelas">Kelas</label>
                                              <select class="form-control" name="id_kelas" id="kelas">
                                                @foreach (\App\Kelas::all() as $kelas)
                                                <option value="{{$kelas->id}}">{{$kelas->nama_kelas}}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="sangga">Sangga</label>
                                                <select class="form-control" name="id_sangga" id="sangga">
                                                  @foreach (\App\Sangga::all() as $sangga)
                                                  <option value="{{$sangga->id}}">{{$sangga->nama_sangga}}</option>
                                                  @endforeach
                                                </select>
                                              </div>
                                              <div class="form-group">
                                                  <label for="jurusan">Jurusan</label>
                                                  <select class="form-control" name="id_jurusan" id="jurusan">
                                                    @foreach (\App\Jurusan::all() as $jurusan)
                                                    <option value="{{$jurusan->id}}">{{$jurusan->nama_jurusan}}</option>
                                                    @endforeach
                                                  </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="ruangan">Ruangan</label>
                                                    <select class="form-control" name="ruangan" id="ruangan">
                                                      <option value=1">1</option>
                                                      <option value=2">2</option>
                                                      <option value=3">3</option>
                                                    </select>
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
                {{$siswaku->links()}}
                @else
                <thead>
                    <tr>
                      <th> # </th>
                      <th> Nama Siswa </th>
                      <th> Ambalan </th>
                      <th> Kelas </th>
                      <th> Ruangan </th>
                      <th> Jumlah Hadir </th>
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
                          <td>{{$siswa->nama_kelas}}</td>
                          <td>{{$siswa->ruangan}}</td>
                          <td>{{$siswa->total}}</td>
                        </tr>
                    @endforeach
                  </tbody>
                  {{$siswaku->links()}}
                  @endif
              </table>
            </div>
            </div>
          </div>
        </div>

        <div id="tambah-Modal" class="modal fade" role="dialog">
            <div class="modal-dialog">
              <!-- konten modal-->
              <div class="modal-content">
                <!-- heading modal -->
                <div class="modal-header">
                  <h4 class="modal-title">Tambah Jurusan</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Default form</h4>
                            <p class="card-description"> Basic form layout </p>
                            <form class="forms-sample" action="{{action('SiswaController@store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="nis">NIS</label>
                                    <input name="nis" type="number" class="form-control" id="nis">
                                </div>
                                <div class="form-group">
                                    <label for="nama_siswa">Nama Siswa</label>
                                    <input name="nama_siswa" type="text" class="form-control" id="nama_siswa">
                                </div>
                                <div class="form-group">
                                    <label for="ambalan">Ambalan</label>
                                    <select class="form-control" name="id_ambalan" id="ambalan">
                                      @foreach (\App\Ambalan::all() as $ambalan)
                                      <option value="{{$ambalan->id}}">{{$ambalan->nama_ambalan}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                <div class="form-group">
                                  <label for="kelas">Kelas</label>
                                  <select class="form-control" name="id_kelas" id="kelas">
                                    @foreach (\App\Kelas::all() as $kelas)
                                    <option value="{{$kelas->id}}">{{$kelas->nama_kelas}}</option>
                                    @endforeach
                                  </select>
                                </div>
                                <div class="form-group">
                                    <label for="sangga">Sangga</label>
                                    <select class="form-control" name="id_sangga" id="sangga">
                                      @foreach (\App\Sangga::all() as $sangga)
                                      <option value="{{$sangga->id}}">{{$sangga->nama_sangga}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                  <div class="form-group">
                                      <label for="jurusan">Jurusan</label>
                                      <select class="form-control" name="id_jurusan" id="jurusan">
                                        @foreach (\App\Jurusan::all() as $jurusan)
                                        <option value="{{$jurusan->id}}">{{$jurusan->nama_jurusan}}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="ruangan">Ruangan</label>
                                        <select class="form-control" name="ruangan" id="ruangan">
                                          <option value=1">1</option>
                                          <option value=2">2</option>
                                          <option value=3">3</option>
                                        </select>
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
@endsection