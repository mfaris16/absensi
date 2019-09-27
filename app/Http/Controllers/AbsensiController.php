<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Kehadiran;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswaku = DB::table('siswa')
        ->join('sangga','siswa.id_sangga','=','sangga.id')
        ->join('ambalan','siswa.id_ambalan','=','ambalan.id')
        ->select('siswa.*','sangga.nama_sangga','ambalan.nama_ambalan')
        ->get();
        return view('absen.absensi',compact('siswaku'));
    }

    public function koordinator1()
    {
        $siswaku = DB::table('siswa')
        ->join('sangga','siswa.id_sangga','=','sangga.id')
        ->join('ambalan','siswa.id_ambalan','=','ambalan.id')
        ->select('siswa.*','sangga.nama_sangga','ambalan.nama_ambalan')
        ->where('siswa.ruangan','1')
        ->get();
        return view('absen.absensi',compact('siswaku'));
    }

    public function koordinator2()
    {
        $siswaku = DB::table('siswa')
        ->join('sangga','siswa.id_sangga','=','sangga.id')
        ->join('ambalan','siswa.id_ambalan','=','ambalan.id')
        ->select('siswa.*','sangga.nama_sangga','ambalan.nama_ambalan')
        ->where('siswa.ruangan','2')
        ->get();
        return view('absen.absensi',compact('siswaku'));
    }

    public function koordinator3()
    {
        $siswaku = DB::table('siswa')
        ->join('sangga','siswa.id_sangga','=','sangga.id')
        ->join('ambalan','siswa.id_ambalan','=','ambalan.id')
        ->select('siswa.*','sangga.nama_sangga','ambalan.nama_ambalan')
        ->where('siswa.ruangan','3')
        ->get();
        return view('absen.absensi',compact('siswaku'));
    }

    public function ruangan1(Request $request)
    {
        $status = $request->get('status');

        if($status){
            $kehadiranku = DB::table('kehadiran')
            ->join('siswa','kehadiran.id_siswa','=','siswa.id')
            ->join('ambalan','siswa.id_ambalan','=','ambalan.id')
            ->join('jurusan','siswa.id_jurusan','=','jurusan.id')
            ->join('kelas','siswa.id_kelas','=','kelas.id')
            ->join('sangga','siswa.id_sangga','=','sangga.id')
            ->select('kehadiran.*','siswa.nama_siswa','ambalan.nama_ambalan','jurusan.nama_jurusan','kelas.nama_kelas','siswa.ruangan','sangga.nama_sangga')
            ->where('siswa.ruangan','=',1)
            ->where('kehadiran.tanggal_hadir','=',$status)
            ->paginate(10);
        } else {
            $kehadiranku = DB::table('kehadiran')
            ->join('siswa','kehadiran.id_siswa','=','siswa.id')
            ->join('ambalan','siswa.id_ambalan','=','ambalan.id')
            ->join('jurusan','siswa.id_jurusan','=','jurusan.id')
            ->join('kelas','siswa.id_kelas','=','kelas.id')
            ->join('sangga','siswa.id_sangga','=','sangga.id')
            ->select('kehadiran.*','siswa.nama_siswa','ambalan.nama_ambalan','jurusan.nama_jurusan','kelas.nama_kelas','siswa.ruangan','sangga.nama_sangga')
            ->where('siswa.ruangan','=',1)
            ->paginate(10);
        }
            
        return view('absen.laporan',compact('kehadiranku'));
    }

    public function ruangan2(Request $request)
    {
            $kehadiranku = DB::table('kehadiran')
            ->join('siswa','kehadiran.id_siswa','=','siswa.id')
            ->join('ambalan','siswa.id_ambalan','=','ambalan.id')
            ->join('kelas','siswa.id_kelas','=','kelas.id')
            ->join('jurusan','siswa.id_jurusan','=','jurusan.id')
            ->join('sangga','siswa.id_sangga','=','sangga.id')
            ->select('kehadiran.*','siswa.nama_siswa','ambalan.nama_ambalan','kelas.nama_kelas','siswa.ruangan','sangga.nama_sangga')
            ->where('siswa.ruangan','=',2)
            ->paginate(10);

        return view('absen.laporan',compact('kehadiranku'));
    }

    public function ruangan3(Request $request)
    {
            $kehadiranku = DB::table('kehadiran')
            ->join('siswa','kehadiran.id_siswa','=','siswa.id')
            ->join('ambalan','siswa.id_ambalan','=','ambalan.id')
            ->join('kelas','siswa.id_kelas','=','kelas.id')
            ->join('sangga','siswa.id_sangga','=','sangga.id')
            ->select('kehadiran.*','siswa.nama_siswa','ambalan.nama_ambalan','kelas.nama_kelas','siswa.ruangan','sangga.nama_sangga')
            ->where('siswa.ruangan','=',3)
            ->paginate(10);
        return view('absen.laporan',compact('kehadiranku'));
    }

    public function generatePDF1()

    {
        $kehadiranku = DB::table('kehadiran')
            ->join('siswa','kehadiran.id_siswa','=','siswa.id')
            ->join('ambalan','siswa.id_ambalan','=','ambalan.id')
            ->join('kelas','siswa.id_kelas','=','kelas.id')
            ->join('sangga','siswa.id_sangga','=','sangga.id')
            ->join('jurusan','siswa.id_jurusan','=','jurusan.id')
            ->select('kehadiran.*','siswa.nama_siswa','ambalan.nama_ambalan','jurusan.nama_jurusan','kelas.nama_kelas','siswa.ruangan','sangga.nama_sangga')
            ->where('siswa.ruangan','=',1)
            ->Where('kehadiran.tanggal_hadir','=',date('d-m-Y'))
            ->get();

        $pdf = PDF::loadView('myPDF',compact('kehadiranku'));
        return $pdf->stream();
    }

    public function generatePDF2()

    {
        $kehadiranku = DB::table('kehadiran')
            ->join('siswa','kehadiran.id_siswa','=','siswa.id')
            ->join('ambalan','siswa.id_ambalan','=','ambalan.id')
            ->join('kelas','siswa.id_kelas','=','kelas.id')
            ->join('sangga','siswa.id_sangga','=','sangga.id')
            ->join('jurusan','siswa.id_jurusan','=','jurusan.id')
            ->select('kehadiran.*','siswa.nama_siswa','jurusan.nama_jurusan','ambalan.nama_ambalan','kelas.nama_kelas','siswa.ruangan','sangga.nama_sangga')
            ->where('siswa.ruangan','=',2)
            ->Where('kehadiran.tanggal_hadir','=',date('d-m-Y'))
            ->get();

        $pdf = PDF::loadView('myPDF',compact('kehadiranku'));
        return $pdf->stream();
    }

    public function generatePDF3()

    {
        $kehadiranku = DB::table('kehadiran')
            ->join('siswa','kehadiran.id_siswa','=','siswa.id')
            ->join('ambalan','siswa.id_ambalan','=','ambalan.id')
            ->join('kelas','siswa.id_kelas','=','kelas.id')
            ->join('sangga','siswa.id_sangga','=','sangga.id')
            ->join('jurusan','siswa.id_jurusan','=','jurusan.id')
            ->select('kehadiran.*','siswa.nama_siswa','jurusan.nama_jurusan','ambalan.nama_ambalan','kelas.nama_kelas','siswa.ruangan','sangga.nama_sangga')
            ->where('siswa.ruangan','=',3)
            ->Where('kehadiran.tanggal_hadir','=',date('d-m-Y'))
            ->get();

        $pdf = PDF::loadView('myPDF',compact('kehadiranku'));
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // DB::table('kehadiran')->updateOrInsert(
        //     [
        //         'id_siswa' => $request->id_siswa,
        //         'tanggal_hadir' => $request->tanggal_hadir
        //     ],
        //     [
        //         'status' => $request->status                
        //     ]
        // );

        Kehadiran::where('id_siswa', $request->id_siswa)
            ->updateOrCreate(
                ['tanggal_hadir' => $request->tanggal_hadir], //what we look for
                ['status' => $request->status,'id_siswa' => $request->id_siswa]//what to update
            );

        // alihkan halaman ke halaman pegawai
         return redirect()->back();
        //d($dd);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}