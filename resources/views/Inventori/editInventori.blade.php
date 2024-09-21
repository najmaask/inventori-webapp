@extends('layout.master') 
@section('content') 
        <div class="content-wrap">
            <div class="main">
                <div class="container-fluid">             
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>Data Inventori</h4>
                                  
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                          @foreach($data as $datas)
                                        <form  method="POST" action="{{ route('Inventori.update',$datas->id) }}">
                                            {{csrf_field()}}
                                            {{method_field('PUT')}}
                                            <div class="form-group">
                                                <label>Kode Inventori</label>
                                                <input type="text" name="KdInventor" class="form-control" placeholder="Kode Inventori" value="{{$datas->KdInventor}}" required>
                                            </div>                                           
                                            <div class="form-group">
                                                <label>Nama Inventori</label>
                                                <input type="text" name="NamaInventor" class="form-control" placeholder="Nama Inventori" value="{{$datas->NamaInventor}}" required>
                                            </div>                                            
                                            <div class="form-group">
                                                <label>Kode Jenis</label>
                                                    <select class="form-control" name="KdJenis">
                                                        
                                                        <option value="{{$datas->KdJenis}}">{{$datas->NamaJenis}}</option>
                                                      
                                                        @foreach($jenis as $jen)
                                                        <option value="{{$jen->id}}">{{$jen->NamaJenis}}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Kondisi</label>
                                                <input type="text" name="Kondisi" class="form-control" placeholder="Kondisi" value="{{$datas->Kondisi}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Jumlah</label>
                                                <input type="text" name="Jumlah" class="form-control" placeholder="Jumlah" value="{{$datas->Jumlah}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Tanggal Register</label>
                                                <input type="date" name="TglRegister" class="form-control" placeholder="Tanggal Register" value="{{$datas->TglRegister}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Kode Ruang</label>
                                                    <select class="form-control" name="KdRuang">
                                                        
                                                        <option value="{{$datas->KdRuang}}">{{$datas->NamaRuang}}</option>
                                                      
                                                        @foreach($ruang as $rua)
                                                        <option value="{{$rua->id}}">{{$rua->NamaRuang}}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input type="text" name="Ket" class="form-control" placeholder="Keterangan" value="{{$datas->Ket}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Kode Petugas</label>
                                                    <select class="form-control" name="KdPetugas">
                                                        
                                                        <option value="{{$datas->KdPetugas}}">{{$datas->NamaPetugas}}</option>
                                                      
                                                        @foreach($petugas as $pet)
                                                        <option value="{{$pet->id}}">{{$pet->NamaPetugas}}</option>
                                                        @endforeach
                                                    </select>
                                            </div>                                           
                                            <input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">

                                        </form>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                    </div>
                </div>
            </div>
        </div>
@endsection