<?php

namespace App\Http\Controllers;

use App\ruang;
use Illuminate\Http\Request;

class RuangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=ruang::all();
        return view('ruang/ruang',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruang/dataRuang');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ruang();
       $data->KdRuang = $request->KdRuang;
       $data->NamaRuang = $request->NamaRuang;
       $data->Ket = $request->Ket;
       $data->save();
       return redirect('Ruang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function show(ruang $ruang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=ruang::find($id);
        return view('ruang/editRuang',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $data = array('KdRuang'=> $request->input('KdRuang'),
                    'NamaRuang'=> $request->input('NamaRuang'),
                    'Ket' => $request->input('Ket'));
                ruang::where('id',$id)->update($data);
                return redirect('/Ruang')->with('info','Update Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ruang  $ruang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ruang::where('id',$id)->delete();
        return redirect('/Ruang')->with('info','Data Dihapus');
    }
}
