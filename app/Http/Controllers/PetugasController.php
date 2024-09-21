<?php

namespace App\Http\Controllers;

use App\petugas;
use App\level;
use DB;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     function index()
    {
        $data=DB::table('petugass')
        ->join('levels','petugass.IdLevel','=','levels.id')
        ->select('petugass.*','levels.NamaLevel')
        ->get();
        return view('petugas/petugas',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     function create()
    {
        $level=level::all();
        return view('petugas/dataPetugas',['level'=>$level]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     function store(Request $request)
    {
        $data= new petugas();
        $data->KdPetugas = $request->KdPetugas;
        $data->NamaPetugas = $request->NamaPetugas;
        $data->Username = $request->Username;
        $data->Password = $request->Password;
        $data->IdLevel = $request->IdLevel;
        $data->save();
        return redirect('Petugas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
     function show(petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
    function edit($id)
    {
        $data=DB::table('petugass')
        ->join('levels','petugass.IdLevel','=','levels.id')
        ->select('petugass.*','levels.NamaLevel')
        ->where('petugass.id','=',$id)->get();
        $level=level::all();
        return view('petugas/editPetugas',compact('data','level'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
     function update(Request $request, $id)
    {
        $data = array('KdPetugas'=> $request->input('KdPetugas'),
                    'NamaPetugas'=> $request->input('NamaPetugas'),
                    'Username' => $request->input('Username'),
                    'Password' => $request->input('Password'),
                    'IdLevel' => $request->input('IdLevel'));
                petugas::where('id',$id)->update($data);
                return redirect('/Petugas')->with('info','Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\petugas  $petugas
     * @return \Illuminate\Http\Response
     */
     function destroy($id)
    {
        petugas::where('id',$id)->delete();
        return redirect('/Petugas')->with('info','Data Dihapus');
    }
}