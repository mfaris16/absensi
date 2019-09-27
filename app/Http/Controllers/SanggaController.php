<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SanggaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanggaku = DB::table('sangga')
        ->join('ambalan','sangga.id_ambalan','=','ambalan.id')
        ->select('sangga.*','ambalan.nama_ambalan')
        ->paginate(10);
        return view('sangga',compact('sanggaku'));
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
        $sangga = new \App\Sangga;
        $sangga->id_ambalan = $request->get('id_ambalan');
        $sangga->nama_sangga = $request->get('nama_sangga');
        $sangga->save();
        
        return redirect()->back()->with('success', 'Data sangga telah ditambahkan');
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
        $sangga = \App\Sangga::findOrFail($id);
        $sangga->id_ambalan = $request->id_ambalan;
        $sangga->nama_sangga = $request->nama_sangga;
        $sangga->save();
        return redirect()->back()->with('success','Data sangga telah di update');
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
        $sangga = \App\Sangga::find($id);
        $sangga->delete();
        return redirect()->back()->with('success','Data sangga telah di hapus');
    }
}
