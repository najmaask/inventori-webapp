<?php

namespace App\Http\Controllers;

use App\pinjam;
use App\pegawai;
use DB;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('pinjams')
        ->join('pegawais','pinjams.KdPegawai','=','pegawais.id')
        ->select('pinjams.*','pegawais.NamaPegawai')
        ->get();
        return view('pinjam/pinjam',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pegawai=pegawai::all();
        return view('pinjam/dataPinjam',compact('pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function store(Request $request)
    {
        $data= new pinjam();
        $data->KdPinjam = $request->KdPinjam;
        $data->TglPinjam = $request->TglPinjam;
        $data->TglKembali = $request->TglKembali;
        $data->KdPegawai = $request->KdPegawai;
        $data->Status = $request->Status;
        $data->save();
        return redirect('Pinjam');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function show(pinjam $pinjam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $data=DB::table('pinjams')
        ->join('pegawais','pinjams.KdPegawai','=','pegawais.id')
        ->select('pinjams.*','pegawais.NamaPegawai')
        ->where('pinjams.id','=',$id)->get();
        $pegawai=pegawai::all();
        return view('pinjam/editPinjam',compact('data','pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array('KdPinjam'=> $request->input('KdPinjam'),
                    'TglPinjam'=> $request->input('TglPinjam'),
                    'TglKembali' => $request->input('TglKembali'),
                    'KdPegawai' => $request->input('KdPegawai'),
                    'Status' => $request->input('Status'));
                pinjam::where('id',$id)->update($data);
                return redirect('/Pinjam')->with('info','Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pinjam  $pinjam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pinjam::where('id',$id)->delete();
        return redirect('/Pinjam')->with('info','Data Dihapus');
    }
}
