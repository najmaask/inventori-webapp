<?php

namespace App\Http\Controllers;

use App\inventori;
use App\jenis;
use App\ruang;
use App\petugas;
use DB;
use Illuminate\Http\Request;

class InventoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('inventoriss')
        ->join('jeniss','inventoriss.KdJenis','=','jeniss.id')
        ->join('ruangs','inventoriss.KdRuang','=','ruangs.id')
        ->join('petugass','inventoriss.KdPetugas','=','petugass.id')
        ->select('inventoriss.*','jeniss.NamaJenis','ruangs.NamaRuang','petugass.NamaPetugas')
        ->get();
        return view('inventori/inventori',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenis=jenis::all();
        $ruang=ruang::all();
        $petugas=petugas::all();
        return view('inventori/dataInventori',compact('jenis','ruang','petugas'));

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     function store(Request $request)
    {
        $data = new inventori();
        $data->KdInventor = $request->KdInventor;
        $data->NamaInventor = $request->NamaInventor;
        $data->KdJenis = $request->KdJenis;
        $data->Kondisi = $request->Kondisi;
        $data->Jumlah = $request->Jumlah;
        $data->TglRegister = $request->TglRegister;
        $data->KdRuang = $request->KdRuang;
        $data->Ket = $request->Ket;
        $data->KdPetugas = $request->KdPetugas;
        $data->save();
        return redirect('Inventori');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     function edit($id)
    {
        $data=DB::table('inventoriss')
        ->join('jeniss','inventoriss.KdJenis','=','jeniss.id')
        ->join('ruangs','inventoriss.KdRuang','=','ruangs.id')
        ->join('petugass','inventoriss.KdPetugas','=','petugass.id')
        ->select('inventoriss.*','jeniss.NamaJenis','ruangs.NamaRuang','petugass.NamaPetugas')
        ->where('inventoriss.id','=',$id)->get();
        $jenis=jenis::all();
        $ruang=ruang::all();
        $petugas=petugas::all();
        return view('inventori/editInventori',compact('data','jenis','ruang','petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     function update(Request $request, $id)
    {
        $data = array('KdInventor'=> $request->input('KdInventor'),
                    'NamaInventor'=> $request->input('NamaInventor'),
                    'KdJenis'=> $request->input('KdJenis'),
                    'Kondisi'=> $request->input('Kondisi'),
                    'Jumlah'=> $request->input('Jumlah'),
                    'TglRegister'=> $request->input('TglRegister'),
                    'KdRuang'=> $request->input('KdRuang'),
                    'Ket'=> $request->input('Ket'),
                    'KdPetugas' => $request->input('KdPetugas'));
                inventori::where('id',$id)->update($data);
                return redirect('/Inventori')->with('info','Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     function destroy($id)
    {
        inventori::where('id',$id)->delete();
        return redirect('/Inventori')->with('info','Data Dihapus');
    }
}
