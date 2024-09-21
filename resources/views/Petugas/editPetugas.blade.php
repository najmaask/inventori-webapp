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
                                    <h4>Data Petugas</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        @foreach($data as $datas)
                                        <form  method="POST" action="{{ route('Petugas.update',$datas->id) }}">
                                            {{csrf_field()}}
                                            {{method_field('PUT')}}
                                            <div class="form-group">
                                                <label>Kode Petugas</label>
                                                <input type="text" name="KdPetugas" class="form-control" placeholder="Kode Petugas" value="{{$datas->KdPetugas}}" required>
                                            </div>                                           
                                            <div class="form-group">
                                                <label>Nama Petugas</label>
                                                <input type="text" name="NamaPetugas" class="form-control" placeholder="Nama Petugas" value="{{$datas->NamaPetugas}}" required>
                                            </div>                                            
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="Username" class="form-control" placeholder="Username" value="{{$datas->Username}}" required>
                                            </div>   
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="Password" class="form-control" placeholder="Password" value="{{$datas->Password}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Kode Level</label>
                                                    <select class="form-control" name="IdLevel">
                                                        
                                                        <option value="{{$datas->IdLevel}}">{{$datas->NamaLevel}}</option>
                                                      
                                                        @foreach($level as $levels)
                                                        <option value="{{$levels->id}}">{{$levels->NamaLevel}}</option>
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