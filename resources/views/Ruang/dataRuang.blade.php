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
                                    <h4>Data Ruang</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form method="POST" action="{{route ('Ruang.store')}}">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <label>Kode Ruang</label>
                                                <input type="text" name="KdRuang" class="form-control" placeholder="Kode Ruang" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Nama Ruang</label>
                                                <input type="text" name="NamaRuang" class="form-control" placeholder="Nama Ruang" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Keterangan</label>
                                                <input type="text" name="Ket" class="form-control" placeholder="Keterangan" required>
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