<?php

namespace App\Http\Controllers;

use App\pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=pegawai::all();
        return view('pegawai/pegawai',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawai/dataPegawai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = new pegawai();
        $data->KdPegawai = $request->KdPegawai;
        $data->NamaPegawai = $request->NamaPegawai;
        $data->Alamat = $request->Alamat;
        $data->NoTelp = $request->NoTelp;
        $data->save();
        return redirect('Pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(pegawai $pegawai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=pegawai::find($id);
        return view('pegawai/editPegawai',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array('KdPegawai'=> $request->input('KdPegawai'),
                    'NamaPegawai'=> $request->input('NamaPegawai'),
                    'Alamat' => $request->input('Alamat'),
                    'NoTelp' => $request->input('NoTelp'));
                pegawai::where('id',$id)->update($data);
                return redirect('/Pegawai')->with('info','Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pegawai::where('id',$id)->delete();
        return redirect('/Pegawai')->with('info','Data Dihapus');
    }
}
