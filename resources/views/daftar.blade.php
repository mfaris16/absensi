@extends('layouts.app')

@section('content')
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row flex-grow">
        <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Horizontal Two column</h4>
                <form class="form-sample" action="/daftar/store" method="POST">
                  @csrf
                  <p class="card-description"> Personal info </p>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">NIS</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" name="nis" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="nama_siswa" />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Kelas</label>
                        <div class="col-sm-9">
                          <select class="form-control" name="id_kelas">
                            <option>-- Pilih Kelas --</option>
                              @foreach ($kelasku as $key => $value)
                                <option value="{{ $key }}">{{ $value }}</option>
                              @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jurusan</label>
                        <div class="col-sm-9">
                        <select class="form-control" name="id_jurusan">
                            <option>-- PILIH JURUSAN --</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Ambalan</label>
                        <div class="col-sm-9">
                          <select class="form-control" name="id_ambalan">
                              <option>-- PILIH AMBALAN --</option>
                              @foreach ($ambalanku as $ambalan)
                              <option value="{{$ambalan->id}}">{{$ambalan->nama_ambalan}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Sangga</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="id_sangga">
                                <option>-- PILIH SANGGA --</option>
                              </select>
                            </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Ruangan</label>
                        <div class="col-sm-9">
                          <select class="form-control" name="ruangan">
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</OPtion>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                          <div class="col-sm-9">
                              <input type="submit" class="btn btn-gradient-primary btn-icon-text">
                          </div>
                        </div>
                      </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
