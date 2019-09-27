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
                <thead>
                  <tr>
                    <th> # </th>
                    <th> Ambalan </th>
                    <th> Sangga </th>
                    @if(auth()->user()->roles =='Admin')
                    <th> Action </th>
                    @endif
                  </tr>
                </thead>
                <tbody>
                  @php
                      $no = 1;
                  @endphp
                  @foreach ($sanggaku as $sangga)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$sangga->nama_ambalan}}</td>
                        <td>{{$sangga->nama_sangga}}</td>
                        @if(auth()->user()->roles == 'Admin')
                        <td>
                            <button type="button" data-toggle="modal" data-target="#myModal{{ $sangga->id }}" class="btn btn-outline-primary btn-icon-text">
                                <i class="mdi mdi-border-color btn-icon-prepend"></i> Edit </button>
                            
                            <form 
                              class="d-inline"
                              action="{{action('SanggaController@destroy', $sangga->id)}}"
                              method="POST"
                              onsubmit="return confirm('Yakin Hapus Data?')"
                              >
                            
                              @csrf 
            
                              <input 
                                type="hidden" 
                                value="DELETE" 
                                name="_method">
            
                                <button type="submit" class="btn btn-outline-primary btn-icon-text">
                                    <i class="mdi mdi-delete btn-icon-prepend"></i> Hapus </button>
                              
                            </form>
                          </td>
                        @endif
                      </tr>
                      <div id="myModal{{ $sangga->id }}" class="modal fade" role="dialog">
                          <div class="modal-dialog">
                            <!-- konten modal-->
                            <div class="modal-content">
                              <!-- heading modal -->
                              <div class="modal-header">
                                <h4 class="modal-title">Edit Jurusan</h4>
                              </div>
                              <!-- body modal -->
                              <div class="modal-body">
                                  <div class="col-md-12 grid-margin stretch-card">
                                      <div class="card">
                                        <div class="card-body">
                                          <h4 class="card-title">Default form</h4>
                                          <p class="card-description"> Basic form layout </p>
                                          <form class="forms-sample" action="{{action('SanggaController@update', $sangga->id)}}" method="POST">
                                            @method('put')
                                              @csrf
                                            <div class="form-group">
                                              <label for="ambalan">Ambalan</label>
                                              <select class="form-control" name="id_ambalan" id="ambalan">
                                                @foreach (\App\Ambalan::all() as $ambalan)
                                                <option value="{{$ambalan->id}}">{{$ambalan->nama_ambalan}}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                            <div class="form-group">
                                              <label for="jurusan">Sangga</label>
                                              <input name="nama_sangga" type="text" class="form-control" id="jurusan" value="{{$sangga->nama_sangga}}">
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
              {{$sanggaku->links()}}
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
                  <h4 class="modal-title">Tambah Sangga</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="card-title">Default form</h4>
                            <p class="card-description"> Basic form layout </p>
                            <form class="forms-sample" action="{{action('SanggaController@store')}}" method="POST">
                                @csrf
                              <div class="form-group">
                                <label for="ambalan">Ambalan</label>
                                <select class="form-control" name="id_ambalan" id="ambalan">
                                  @foreach (\App\ambalan::all() as $ambalan)
                                  <option value="{{$ambalan->id}}">{{$ambalan->nama_ambalan}}</option>
                                  @endforeach
                                </select>
                              </div>
                              <div class="form-group">
                                <label for="jurusan">Sangga</label>
                                <input name="nama_sangga" type="text" class="form-control" id="jurusan" placeholder="Masukan Sangga">
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