<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jurusanku = DB::table('jurusan')
        ->join('kelas','jurusan.id_kelas','=','kelas.id')
        ->select('jurusan.*','kelas.nama_kelas')
        ->paginate(10);

        return view('jurusan',compact('jurusanku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        $jurusan = new \App\Jurusan;
        $jurusan->id_kelas = $request->get('id_kelas');
        $jurusan->nama_jurusan = $request->get('nama_jurusan');
        $jurusan->save();
        
        return redirect()->back()->with('success', 'Data jurusan telah ditambahkan');
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
    public function update(Request $request,$id)
    {
        $jurusan = \App\Jurusan::findOrFail($id);
        $jurusan->id_kelas = $request->id_kelas;
        $jurusan->nama_jurusan = $request->nama_jurusan;
        $jurusan->save();
        return redirect()->back()->with('success','Dara jurusan telah di update');
        //dd($jurusan);
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
        $jurusan = \App\Jurusan::find($id);
        $jurusan->delete();
        return redirect()->back()->with('success','Data jurusan telah di hapus');
    }
}