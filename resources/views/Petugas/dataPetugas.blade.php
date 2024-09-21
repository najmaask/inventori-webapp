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
                                        <form method="POST" action="{{route ('Petugas.store')}}">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label>Kode Petugas</label>
                                                <input type="text" name="KdPetugas" class="form-control" placeholder="Kode Petugas" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Petugas</label>
                                                <input type="text" name="NamaPetugas" class="form-control" placeholder="Nama Petugas" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="Username" class="form-control" placeholder="Username" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" name="Password" class="form-control" placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Level</label>
                                                    <select class="form-control" name="IdLevel">
                                                        <option>Pilih Level</option>
                                                        @foreach($level as $levels)
                                                        <option value="{{$levels->id}}">{{$levels->NamaLevel}}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                            

                                            <input type="submit" name="Simpan" value="Simpan" class="btn btn-default">
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