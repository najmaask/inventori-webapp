<?php

namespace App\Http\Controllers;

use App\jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan data di table(all:semua)
        $data=jenis::all();
        // return memanggil file view
        return view('jenis/jenis',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis/dataJenis');
    }

    /**
     * Store a newly created resource in storage
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new jenis();
        $data->KdJenis=$request->KdJenis;
        $data->NamaJenis=$request->NamaJenis;
        $data->Ket=$request->Ket;
        $data->save();
        return redirect('Jenis');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function show(jenis $jenis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=jenis::find($id);
        return view('jenis/editJenis',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array('KdJenis'=> $request->input('KdJenis'),
                    'NamaJenis'=> $request->input('NamaJenis'),
                    'Ket' => $request->input('Ket'));
                jenis::where('id',$id)->update($data);
                return redirect('/Jenis')->with('info','Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        jenis::where('id',$id)->delete();
        return redirect('/Jenis')->with('info','Data Dihapus');
    }
}
