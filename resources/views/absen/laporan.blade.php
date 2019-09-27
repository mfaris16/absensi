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
              @if(auth()->user()->roles == 'Sekretaris')
                @if(Request::url() == url('sekretaris/rekap/absensi1'))
                  <a href="{{url('laporan-pdf1')}}" class="btn btn-outline-info btn-icon-text"><i class="mdi mdi-printer btn-icon-append"></i> Print </a>
                @elseif(Request::url() == url('sekretaris/rekap/absensi2'))
                  <a href="{{url('laporan-pdf2')}}" class="btn btn-outline-info btn-icon-text"><i class="mdi mdi-printer btn-icon-append"></i> Print </a>
                @elseif(Request::url() == url('sekretaris/rekap/absensi3'))
                  <a href="{{url('laporan-pdf3')}}" class="btn btn-outline-info btn-icon-text"><i class="mdi mdi-printer btn-icon-append"></i> Print </a>
                @endif
              @elseif(auth()->user()->roles == 'Admin')
              @if(Request::url() == url('admin/rekap/absensi1'))
                  <a href="{{url('laporan-pdf1')}}" class="btn btn-outline-info btn-icon-text"><i class="mdi mdi-printer btn-icon-append"></i> Print </a>
                @elseif(Request::url() == url('admin/rekap/absensi2'))
                  <a href="{{url('laporan-pdf2')}}" class="btn btn-outline-info btn-icon-text"><i class="mdi mdi-printer btn-icon-append"></i> Print </a>
                @elseif(Request::url() == url('admin/rekap/absensi3'))
                  <a href="{{url('laporan-pdf3')}}" class="btn btn-outline-info btn-icon-text"><i class="mdi mdi-printer btn-icon-append"></i> Print </a>
                @endif
              @endif
              <div class="table-responsive">
                  <form action="{{route('absensi.ruangan1')}}">
                      <div class="form-group">
                          <label for="nama">Tanggal</label>
                          <input id="tanggal" value="{{Request::get('status')}}" name="status" class="form-control" type="date" placeholder="Masukan email untuk filter..."/>
                          <input type="submit" value="Filter" class="btn btn-primary">
                        </div>
                    </form>
              <table id="tabel-data" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th> # </th>
                    <th> Nama Siswa </th>
                    <th> Ambalan </th>
                    <th> Kelas </th>
                    <th> Jurusan </th>
                    <th> Ruangan </th>
                    <th> Sangga </th>
                    <th> Tanggal Kehadiran </th>
                    <th> Status Kehadiran </th>
                  </tr>
                </thead>
                <tbody>
                  @php
                   $no = 1;   
                  @endphp
                  @foreach ($kehadiranku as $hadir)
                      <tr>
                        <td>{{$no++}}</td>
                        <td>{{$hadir->nama_siswa}}</td>
                        <td>{{$hadir->nama_ambalan}}</td>
                        <td>{{$hadir->nama_kelas}}</td>
                        <td>{{$hadir->nama_jurusan}}</td>
                        <td>{{$hadir->ruangan}}</td>
                        <td>{{$hadir->nama_sangga}}</td>
                        <td>{{$hadir->tanggal_hadir}}</td>
                        <td>{{$hadir->status}}</td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            </div>
          </div>
        </div>
@endsection