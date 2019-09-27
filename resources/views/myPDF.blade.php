<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title"> Data Siswa</h3>
      </div>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bordered table</h4>
              <div class="table-responsive">
              <table border="1" cellspacing="0">
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