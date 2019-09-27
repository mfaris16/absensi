<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;
use DB;

class SiswaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$count = DB::select("SELECT id_siswa,status, COUNT( * ) AS total FROM kehadiran WHERE status='Hadir' GROUP BY id_siswa")->get();
        
        // $dataku = DB::table('siswa')
        //     ->join('ambalan', 'siswa.id_ambalan', '=', 'ambalan.id')
        //     ->join('kelas','siswa.id_kelas', '=','kelas.id')
        //     ->select('siswa.*', 'ambalan.nama_ambalan', 'kelas.nama_kelas')
        //     ->get();
            $siswaku = Siswa::select(DB::raw("siswa.*,ambalan.nama_ambalan,kelas.nama_kelas,siswa.ruangan,count(if(status = 'Hadir',status,NULL)) as total"))
                     ->join('kehadiran', 'siswa.id', '=', 'kehadiran.id_siswa')
                     ->join('ambalan', 'siswa.id_ambalan', '=', 'ambalan.id')
                     ->join('kelas','siswa.id_kelas', '=','kelas.id')
                     ->groupBy('id_siswa')
                     ->paginate(10);
            // dd($siswaku);
        return view('siswa', compact('siswaku'));
    }

    public function home()
    {
            $siswaku = DB::table('siswa')
                        ->join('ambalan','siswa.id_ambalan','=','ambalan.id')
                        ->join('kelas','siswa.id_kelas','=','kelas.id')
                        ->join('jurusan','siswa.id_jurusan','=','jurusan.id')
                        ->join('sangga','siswa.id_sangga','=','sangga.id')
                        ->select('siswa.*','ambalan.nama_ambalan','kelas.nama_kelas','jurusan.nama_jurusan','sangga.nama_sangga')
                        ->paginate(10);
            // dd($siswaku);
        return view('siswa', compact('siswaku'));
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
        

        $siswa = new \App\Siswa;
        $siswa->nis = $request->get('nis');
        $siswa->nama_siswa = $request->get('nama_siswa');
        $siswa->id_ambalan = $request->get('id_ambalan');
        $siswa->id_kelas = $request->get('id_kelas');
        $siswa->id_sangga = $request->get('id_sangga');
        $siswa->id_jurusan = $request->get('id_jurusan');
        $siswa->ruangan = $request->get('ruangan');
        $this->validate($request, [
            'nis' => 'required|unique:siswa,nis',
        ]);
        $siswa->save();
        
        return redirect()->back()->with('success', 'Data siswa telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $siswa = \App\Siswa::findOrFail($id);
        $siswa->nis = $request->get('nis');
        $siswa->nama_siswa = $request->get('nama_siswa');
        $siswa->id_ambalan = $request->get('id_ambalan');
        $siswa->id_kelas = $request->get('id_kelas');
        $siswa->id_sangga = $request->get('id_sangga');
        $siswa->id_jurusan = $request->get('id_jurusan');
        $siswa->ruangan = $request->get('ruangan');;
        $siswa->save();
        return redirect()->back()->with('success','Data siswa telah di update');
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
        $siswa = \App\Siswa::find($id);
        $siswa->delete();
        return redirect()->back()->with('success','Data siswa telah di hapus');
    }
}