<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Jurusan;
use App\Sangga;
use App\Ambalan;
use DB;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelasku = DB::table('kelas')->pluck("nama_kelas","id");
        $jurusanku = Jurusan::all();
        $sanggaku = Sangga::all();
        $ambalanku = Ambalan::all();

        return view('daftar',compact('kelasku','jurusanku','sanggaku','ambalanku'));
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
        // insert data ke table pegawai
	    DB::table('siswa')->insert([
		'nis' => $request->nis,
		'nama_siswa' => $request->nama_siswa,
		'ruangan' => $request->ruangan,
        'id_kelas' => $request->id_kelas,
        'id_jurusan' => $request->id_jurusan,
        'id_sangga' => $request->id_sangga,
        'id_ambalan' => $request->id_ambalan
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/daftar');
    }

    public function getKelas()
    {
        $kelasku = DB::table('kelas')->pluck("nama_kelas","id");
        return view('daftar',compact('kelasku'));
    }

    public function getJurusan($id) 
    {        
        $jurusan = DB::table("jurusan")->where("id_kelas",$id)->pluck("nama_jurusan","id");
        //dd($jurusan);
        return json_encode($jurusan);
    }

    public function getSangga($id) 
    {        
        $jurusan = DB::table("sangga")->where("id_ambalan",$id)->pluck("nama_sangga","id");
        //dd($jurusan);
        return json_encode($jurusan);
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