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
                                    <h4>Data Pegawai</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form  method="POST" action="{{ route('Pegawai.update',$data->id) }}">
                                            {{csrf_field()}}
                                            {{method_field('PUT')}}
                                            <div class="form-group">
                                                <label>Kode Pegawai</label>
                                                <input type="text" name="KdPegawai" class="form-control" placeholder="Kode Pegawai" value="{{$data->KdPegawai}}" required>
                                            </div>                                           
                                            <div class="form-group">
                                                <label>Nama Pegawai</label>
                                                <input type="text" name="NamaPegawai" class="form-control" placeholder="Nama Pegawai" value="{{$data->NamaPegawai}}" required>
                                            </div>                                            
                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" name="Alamat" class="form-control" placeholder="Alamat" value="{{$data->Alamat}}" required>
                                            </div>                                            <div class="form-group">
                                                <label>No Telpon</label>
                                                <input type="text" name="NoTelp" class="form-control" placeholder="No telpon" value="{{$data->NoTelp}}" required>
                                            </div>                                           
                                            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                        </form>
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